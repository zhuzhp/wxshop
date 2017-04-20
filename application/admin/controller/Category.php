<?php
/**
 * Created by PhpStorm.
 * User: 朱海平
 * Date: 2017/4/7
 * Time: 17:39
 */
namespace app\admin\controller;

use app\common\controller\AdminBase;
use think\Request;
use think\Url;
class Category extends AdminBase
{
    public function modify()
    {
        $request = Request::instance();
        if ($request->isPost()) {
            $model = model($this->tablename);
            $params = $request->param();
            $params['update_time'] = time();
            $validate = validate($this->tablename);
            if ($validate->scene('all')->check($params) === false) {
                return $this->error($validate->getError());
            }
            if($params['id']){
                $re = $model->allowField(true)->save($params,['id'=>$params['id']]);
            }
            else{
                $re = $model->allowField(true)->save($params);
            }
            if (!$re) {
                return $this->error($model->getError());
            }
            return $this->success($this->title.'提交成功', Url::build($params['controller'].'/index'));
        }
    }

    public function addsoncate(){
        $request = Request::instance();
        if ($request->isPost()) {
            $model = model($this->tablename);
            $params = $request->param();
            $validate = validate($this->tablename);
            if ($validate->scene('all')->check($params) === false) {
                return $this->error($validate->getError());
            }
            $data = [
                'pid' => $params['id'],
                'catename'  => $params['catename'],
                'sort'      => 0,
                'catetype' => $params['catetype'],
                'update_time' => time()
            ];
            $re = $model->allowField(true)->save($data);
            if (!$re) {
                return $this->error($model->getError());
            }
            return $this->success($this->title.'提交成功',Url::build($params['controller'].'/index'));
        }
    }

    public function unfolded(){
        $request = Request::instance();
        $id = $request->post('id');
        $model = model($this->tablename);
        $data = $model->where('pid',$id)->order('sort', 'asc')->select();
        return $data;
    }

    public function modifylistupdatesort(){
        $request = Request::instance();
        $params = $request->param();
        $model = model($this->tablename);
        $list = array();
        foreach ($params['sort'] as $k=>$v)
        {
            $lv['id'] = $k;
            $lv['sort'] = $v;
            $list[] = $lv;
        }
        if ($list)
        {
            $model->saveAll($list);
        }
        return $this->success('操作成功', Url::build($params['controller'].'/index'));
    }

    public function delete($id)
    {
        $request = Request::instance();
        $params = $request->param();
        $model = model($this->tablename);
        $error = '删除失败';
        if ($model->deleteone($id,$params['controller'],$error) === false) {
            return $this->error($this->title.$error);
        }
        return $this->success($this->title.'删除成功', Url::build($params['controller'].'/index'));
    }
}