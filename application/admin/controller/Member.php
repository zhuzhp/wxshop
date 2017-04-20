<?php
/**
 * Created by PhpStorm.
 * User: 朱海平
 * Date: 2017/4/10
 * Time: 9:46
 */
namespace app\admin\controller;

use app\common\controller\AdminBase;
use think\Request;
use think\Url;

class Member extends AdminBase
{
    protected $tablename = 'Member';
    protected $title = '会员';
    protected function _initialize()
    {
        $this->assign('title',$this->title);
        $this->assign('tablename',$this->tablename);
    }
    public function index()
    {
        $request = Request::instance();
        $params = $request->param();
        $model = model($this->tablename);
        $member_status = $this->getStatusId(config('member_status'));//会员状态
        $where = array();
        if(!empty($params['key'])) {
            $where['username|tel|nickname'] = ['like','%'.$params['key'].'%'];
        }
        if(!empty($params['member_status'])) {
            $where['status'] = $params['member_status'];
        }

        $paginate = config('paginate');
        $pagesize = isset($params['pagesize']) ? $params['pagesize'] : $paginate['list_rows'];
        $list = $model->where($where)->order('update_time', 'desc')->paginate($pagesize);
        foreach ($list as $k=>$item) {
            $list[$k]['status'] = $member_status[$item['status']];
        }
        $params['member_status'] = isset($params['member_status']) ? $params['member_status'] : '';
        $this->assign('member_status', $member_status);
        $this->assign('member_status_list', config('member_status'));
        $this->assign('params', $params);
        $this->assign('list', $list);
        return $this->fetch();
    }


    public function check($id){

    }

    public function lock($id){
        $model = model($this->tablename);
        $error = '操作失败';
        if ($model->lockone($id,$error) === false) {
            return $this->error($error);
        }
        return $this->success('操作成功', Url::build($this->tablename.'/index'));
    }

    public function freeze($id){
        $model = model($this->tablename);
        $error = '操作失败';
        if ($model->freezeone($id,$error) === false) {
            return $this->error($error);
        }
        return $this->success('操作成功', Url::build($this->tablename.'/index'));
    }
}