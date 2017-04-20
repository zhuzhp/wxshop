<?php
/**
 * Created by PhpStorm.
 * User: 朱海平
 * Date: 2017/4/10
 * Time: 13:02
 */
namespace app\admin\controller;

use app\common\controller\AdminBase;
use think\Request;
use think\Url;
use think\Db;

class Address extends AdminBase
{

    protected $tablename = 'Address';
    protected $title = '收货地址';
    protected function _initialize()
    {
        $this->assign('title',$this->title);
        $this->assign('tablename',$this->tablename);
    }

    public function index($id){
        $request = Request::instance();
        $params = $request->param();
        $model = model($this->tablename);
        $memberModel = model('Member');
        $memInfo = $memberModel->find($id);
        $if_defalut = array('0'=>'否', '1'=>'是');//是否默认收货地址
        $where = array('member_id'=>$id);
        if(!empty($params['key'])) {
            $where['contant_person|tel'] = ['like','%'.$params['key'].'%'];
        }

        $paginate = config('paginate');
        $pagesize = isset($params['pagesize']) ? $params['pagesize'] : $paginate['list_rows'];
        $list = $model->where($where)->order('update_time', 'desc')->paginate($pagesize);
        foreach ($list as $k=>$item) {
            $list[$k]['if_default'] = $if_defalut[$item['if_default']];
            $list[$k]['username'] = $memInfo['username'];
        }

        $this->assign('member_id', $id);
        $this->assign('params', $params);
        $this->assign('list', $list);
        return $this->fetch();
    }
    public function modify(){
        $request = Request::instance();
        $params = $request->param();
        $model = model($this->tablename);
        $validate = validate($this->tablename);
        if($request->isPost()){
            $params['update_time'] = time();
            if($params['if_default'] == 1){
                Db::query("update hsq_address set if_default=0 where member_id={$params['member_id']}");
            }
            if($params['id']){//修改
                if ($validate->scene('edit')->check($params) === false) {
                    return $this->error($validate->getError());
                }
                $id = $params['id'];
                $re = $model->allowField(true)->save($params,['id'=>$id]);
            }else{//添加
                if ($validate->scene('add')->check($params) === false) {
                    return $this->error($validate->getError());
                }
                unset($params['id']);
                $re = $model->allowField(true)->save($params);
           }
            if (!$re) {
                return $this->error($model->getError());
            }
            return $this->success($this->title.'操作成功', Url::build($this->tablename.'/index',['id'=>$params['member_id']]));
        }
        if(!empty($params['id'])){//修改时
            $info = $model->where(['id'=>$params['id']])->find();
            $info['if_default'] = $info['if_default'] == 0 ? 2 : $info['if_default'];
            $areaList = $this->getAreaListById($info['area_id']);

            $this->assign('info',$info);
            $this->assign('action','edit');
        }else{
            $areaList = model('Category')->where(['pid'=>0,'catetype'=>'area'])->select();
            $this->assign('action','add');
        }

        $this->assign('areaList',$areaList);
        $this->assign('params', $params);
        return $this->fetch();
    }
    private function getAreaListById($idStr){
        $arr = explode(',', $idStr);
        $areaList = array();
        $cateModel = model('Category');
        foreach ($arr as $k=>$v){
            $oneArea = $cateModel->field('id,pid,catename')->where(['id'=>$v,'catetype'=>'area'])->find();
            $areaList[$k][] = array('id' => $oneArea['id'], 'catename' => $oneArea['catename']);
            $secondArea = $cateModel->field('id,catename')->where("pid = {$oneArea['pid']} and id !={$v} and catetype='area'")->select();
            foreach($secondArea as $_k => $_v){
                $areaList[$k][] = array('id' => $_v['id'], 'catename' => $_v['catename']);
            }
            $areaList[$k][] = array('id' => 0, 'catename' => '--请选择--');
        }
        return $areaList;
    }
    public function checkArea(){
        $request = Request::instance();
        $params = $request->param();
        if($params['id']){
            $areaList = model('Category')->where(['pid'=>$params['id'],'catetype'=>'area'])->select();
            return !empty($areaList) ?  $areaList : array('res'=>'final');
        }
    }

    public function delete(){
        $request = Request::instance();
        $params = $request->param();
        $model = model($this->tablename);
        $error = '删除失败';
        if ($model->where(['id'=>$params['id']])->delete() === false) {
            return $this->error($this->title.$error);
        }
        return $this->success($this->title.'删除成功', Url::build($this->tablename.'/index',['id'=>$params['member_id']]));
    }
}