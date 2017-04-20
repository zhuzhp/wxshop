<?php
namespace app\admin\controller;

use app\common\controller\AdminBase;
use think\Request;
use think\Url;
use think\Config;

class User extends AdminBase
{
	protected $tablename = 'User';
	protected $title = '管理员';
	protected function _initialize()
	{
		$this->assign('title',$this->title);
		$this->assign('tablename',$this->tablename);    
	}
	/**
	 * 管理员列表
	 */
    public function index()
    {
    	$request = Request::instance(); 
        $params = $request->param();
    	$model = model($this->tablename);	
    	$where = array();
    	if(isset($params['key'])) {
    		$where['username|tel'] = ['like','%'.$params['key'].'%'];
    	}
        $paginate = config('paginate');
        $pagesize = isset($params['pagesize']) ? $params['pagesize'] : $paginate['list_rows'];
        $list = $model->where($where)->order('update_time', 'desc')->paginate($pagesize);
        $this->assign('params', $params);    
        $this->assign('list', $list);
        return $this->fetch();
    }
    /**
	 * 添加管理员
	 */
    public function add()
    {
    	$request = Request::instance();
        $model = model($this->tablename);
        if ($request->isPost()) {
            $params = $request->param();
        	$validate = validate($this->tablename);
            if ($validate->scene('add')->check($params) === false) {
                return $this->error($validate->getError());
            }
            $params['update_time'] = time();
            if($params['password']){
            	$params['password'] = md5($params['password']);            	
            }
			$params['shop_id'] = $this->userinfo['shop_id'];
            if (($model->allowField(true)->save($params)) === false) {
                return $this->error($model->getError());
            }            
            return $this->success($this->title.'添加成功', Url::build($this->tablename.'/index'));
        }
        else { 
        	$rolelist = model("Role")->order('update_time', 'desc')->select();
        	$this->assign('rolelist', $rolelist); 
        	$this->assign('modify', 'add'); 
	    	return $this->fetch('modify');
        }
    }
    /**
	 * 修改管理员
	 */
    public function edit($id)
    {
    	$request = Request::instance();
        $model = model($this->tablename);
        if ($request->isPost()) {
            $params = $request->param();
       	 	$validate = validate($this->tablename);
            if ($validate->scene('edit')->check($params) === false) {
                return $this->error($validate->getError());
            }
            $params['update_time'] = time();
        	if($params['password']){
            	$params['password'] = md5($params['password']);
            }else{
            	unset($params['password']); 
            }
			$params['shop_id'] = $this->userinfo['shop_id'];
            $id = $params['id'];
            if (($model->allowField(true)->save($params,['id'=>$params['id']])) === false) {
                return $this->error($model->getError());
            }            
            return $this->success($this->title.'修改成功', Url::build($this->tablename.'/index'));
        }
        else { 
        	$rolelist = model("Role")->order('update_time', 'desc')->select();        	
        	$info = $model->find($id);
            $info['state'] = $info['state'] == 0 ? 2 : $info['state'];
        	$this->assign('rolelist', $rolelist);
        	$this->assign('info',$info);
        	$this->assign('modify', 'edit'); 
	    	return $this->fetch('modify');
        }
    }
    /**
	 * 修改管理员状态
	 */
    public function check($id)
    {
    	$params['update_time'] = time();
    	$params['state'] = ['exp','ABS(state-1)'];
    	$model = model($this->tablename);
    	if (($model->save($params,['id'=>$id])) === false) {
            return $this->error($model->getError());
        }            
        return $this->success($this->title.'状态修改成功', Url::build($this->tablename.'/index'));
    }
    /**
	 * 删除管理员
	 */
	public function delete($id)
    {
    	$model = model($this->tablename);
    	$error = '删除失败';
        if ($model->deleteone($id,$error) === false) {
            return $this->error($error);
        }
        return $this->success($this->title.'删除成功', Url::build($this->tablename.'/index'));
    }
}