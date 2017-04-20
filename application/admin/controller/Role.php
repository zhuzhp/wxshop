<?php
namespace app\admin\controller;

use app\common\controller\AdminBase;
use think\Request;
use think\Url;
use think\Config;

class Role extends AdminBase
{
	protected $tablename = 'Role';
	protected $title = '角色';
	protected function _initialize()
	{
		$this->assign('title',$this->title);
		$this->assign('tablename',$this->tablename);
	}
	/**
	 * 角色列表
	 */
    public function index()
    {    	
    	$request = Request::instance(); 
        $params = $request->param();
    	$where = array();
    	if(isset($params['key'])) {
    		$where['name'] = ['like','%'.$params['key'].'%'];
    	}    	
    	$model = model($this->tablename);
    	$paginate = config('paginate');
    	$pagesize = isset($params['pagesize']) ? $params['pagesize'] : $paginate['list_rows'];
        $list = $model->where($where)->order('update_time', 'desc')->paginate($pagesize);
        $this->assign('params', $params);
        $this->assign('list', $list);    	
        return $this->fetch();
    }
    /**
     * 添加修改角色
     */
	public function modify()
    {
    	$request = Request::instance();
        if ($request->isPost()) {
        	$model = model($this->tablename);
            $params = $request->post();
            $params['update_time'] = time();
        	$validate = validate($this->tablename);
            if($params['id']){
            	$id = $params['id'];
           		$re = $model->allowField(true)->save($params,['id'=>$id]);
            }
            else{
	            if ($validate->scene('add')->check($params) === false) {
	                return $this->error($validate->getError());
	            }
           		$re = $model->allowField(true)->save($params);
            }
            if (!$re) {
                return $this->error($model->getError());
            }
            return $this->success($this->title.'提交成功', Url::build($this->tablename.'/index'));
        }
        else {
	    	return $this->error($this->title.'提交失败', Url::build($this->tablename.'/index'));
        }
    }
    /**
     * 给角色添加权限
     * @param int $id
     */
    public function modifyrole($id)
    {
    	$request = Request::instance();
        $model = model($this->tablename);
        if ($request->isPost()) {
            $params = $request->post();
            if(isset($params['role'])){
            	$data['auth_access'] = json_encode($params['role']);
            }else{
            	$data['auth_access'] ='';
            }
        	$validate = validate($this->tablename);
            if ($validate->scene('access')->check($data) === false) {
                return $this->error($validate->getError());
            }
            $params['update_time'] = time();
            if (($model->allowField(true)->save($data,['id'=>$id])) === false) {
                return $this->error($model->getError());
            }            
            return $this->success($this->title.'提交成功', Url::build($this->tablename.'/index'));
        }
        else { 
        	$info = $model->find($id);
        	$access = array();
        	if($info['auth_access']){
        		$access = json_decode($info['auth_access']);
        	}
        	$this->assign('info',$info);
        	$this->assign('access',$access);
	    	return $this->fetch();
        }
    }
    /**
     * 删除角色
     * @param int $id
     */
	public function delete($id)
    {
    	$model = model($this->tablename);
    	$error = '删除失败';
        if ($model->deleteone($id,$error) === false) {
            return $this->error($this->title.$error);
        }
        return $this->success($this->title.'删除成功', Url::build($this->tablename.'/index'));
    }
}