<?php
/**
 * Created by PhpStorm.
 * User: 朱海平
 * Date: 2017/4/18
 * Time: 14:15
 */
namespace app\admin\controller;

use app\common\controller\AdminBase;
use think\Request;
use think\Url;
use Think\Db;

class Response extends AdminBase
{
    protected $title = '自动回复';
    protected $params;
    protected $info;
    protected $request;
    protected function _initialize()
    {
        $this->request = Request::instance();
        $this->params = $this->request->param();
        $model = model('Wxapi');
        $this->info = $model->where('id',$this->params['id'])->find();

        $this->assign('params', $this->params);
        $this->assign('info',$this->info);
        $this->assign('title', $this->title);
    }

    public function index()
    {

        return $this->fetch();
    }

    //图文回复
    public function img(){
        $imgModel = model('Img');
        $id = $this->params['id'];
        if($this->request->isPost()){
            $where = ['uid'=>$id,'token'=>$this->info['token'],'keyword'=>$this->params['keyword']];
            if($this->params['edit_id'])$where['id'] = ['<>',$this->params['edit_id']];

            $keyInfo = $imgModel->where($where)->find();
            if($keyInfo){
                return $this->error('关键字 【'.$this->params['keyword'].'】 已经存在');
            }

            $validate =  validate('Img');
            if ($validate->scene('modify')->check($this->params) === false) {
                return $this->error($validate->getError());
            }
            $data = ['uid'=>$id,'keyword'=>$this->params['keyword'],'content'=>$this->params['content'],'image'=>$this->params['image'],'token'=>$this->info['token'],'module'=>'Img','update_time'=>time()];

            $keyModel = model('Keyword');
            Db::startTrans();
            if($this->params['edit_id']){//修改
                //添加操作
                if($imgModel->allowField(true)->save($data,['id'=>$this->params['edit_id']]) && $keyModel->allowField(true)->save($data,['pid'=>$this->params['edit_id']])){
                    Db::commit();
                    return $this->success($this->title.'修改成功', Url::build('Response/img',['type'=>'img','id'=>$this->params['id']]));
                }else{
                    Db::rollback();
                    return $this->error('修改失败');
                }
            }

            //添加操作
            if($imgModel->allowField(true)->save($data)){
                $data['pid'] = $imgModel->id;
                if($keyModel->allowField(true)->save($data)){
                    Db::commit();
                    return $this->success($this->title.'添加成功', Url::build('Response/img',['type'=>'img','id'=>$this->params['id']]));
                }else{
                    Db::rollback();
                    return $this->error('添加失败');
                }
            }else{
                Db::rollback();
                return $this->error('添加失败');
            }

        }else{
            if(isset($this->params['edit_id']) && ($this->params['type'] == 'modify')){
                $edit = $imgModel->where('id',$this->params['edit_id'])->find();
                $this->assign('edit',$edit);
            }
        }
        $where = array('id'=>$id);
        if(!empty($this->params['key'])) {
            $where['keyword|content'] = ['like','%'.$this->params['key'].'%'];
        }
        $paginate = config('paginate');
        $pagesize = isset($params['pagesize']) ? $params['pagesize'] : $paginate['list_rows'];
        $list = $imgModel->where($where)->order('update_time','desc')->paginate($pagesize);
        $this->assign('list',$list);
        return $this->fetch();
    }

    //文本回复
    public function text(){
        $textModel = model('Text');
        $id = $this->params['id'];
        if($this->request->isPost()){
            $where = ['uid'=>$id,'token'=>$this->info['token'],'keyword'=>$this->params['keyword']];
            if($this->params['edit_id'])$where['id'] = ['<>',$this->params['edit_id']];

            $keyInfo = $textModel->where($where)->find();
            if($keyInfo){
                return $this->error('关键字 【'.$this->params['keyword'].'】 已经存在');
            }

            $validate =  validate('Text');
            if ($validate->scene('modify')->check($this->params) === false) {
                return $this->error($validate->getError());
            }
            $data = ['uid'=>$id,'keyword'=>$this->params['keyword'],'content'=>$this->params['content'],'token'=>$this->info['token'],'module'=>'Text','update_time'=>time()];

            $keyModel = model('Keyword');
            Db::startTrans();
            if($this->params['edit_id']){//修改
                //添加操作
                if($textModel->allowField(true)->save($data,['id'=>$this->params['edit_id']]) && $keyModel->allowField(true)->save($data,['pid'=>$this->params['edit_id']])){
                    Db::commit();
                    return $this->success($this->title.'修改成功', Url::build('Response/text',['type'=>'text','id'=>$this->params['id']]));
                }else{
                    Db::rollback();
                    return $this->error('修改失败');
                }
            }

            //添加操作
            if($textModel->allowField(true)->save($data)){
                $data['pid'] = $textModel->id;
                if($keyModel->allowField(true)->save($data)){
                    Db::commit();
                    return $this->success($this->title.'添加成功', Url::build('Response/text',['type'=>'text','id'=>$this->params['id']]));
                }else{
                    Db::rollback();
                    return $this->error('添加失败');
                }
            }else{
                Db::rollback();
                return $this->error('添加失败');
            }

        }else{
            if(isset($this->params['edit_id']) && ($this->params['type'] == 'modify')){
                $edit = $textModel->where('id',$this->params['edit_id'])->find();
                $this->assign('edit',$edit);
            }
        }
        $where = array('uid'=>$id);
        if(!empty($this->params['key'])) {
            $where['keyword|content'] = ['like','%'.$this->params['key'].'%'];
        }
        $paginate = config('paginate');
        $pagesize = isset($params['pagesize']) ? $params['pagesize'] : $paginate['list_rows'];
        $list = $textModel->where($where)->order('update_time','desc')->paginate($pagesize);
        $this->assign('list',$list);
        return $this->fetch();
    }

    public function delete(){
        $type = $this->params['type'];
        $id = $this->params['edit_id'];
        $useModel = model(ucwords($type));
        $keyModel = model('Keyword');
        $error = '删除失败';
        Db::startTrans();
        if($useModel->deleteone($id,$error) && $keyModel->deleteone($id,$error)){
            // 提交事务
            Db::commit();
            return $this->success($this->title.'删除成功', Url::build('Response/'.$type,['type'=>$type,'id'=>$this->params['id']]));
        }else{
            Db::rollback();
            return $this->error($this->title.$error);
        }
    }

}