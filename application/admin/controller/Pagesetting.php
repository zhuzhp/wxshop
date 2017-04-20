<?php
namespace app\admin\controller;

use app\common\controller\AdminBase;
use think\Request;
use think\Url;
use think\Db;

class Pagesetting extends AdminBase
{
	protected $tablename = 'Pagesetting';
	protected $title = '页面设置';
	protected function _initialize()
	{
		$this->assign('title',$this->title);
		$this->assign('tablename',$this->tablename);
	}
	/**
	 * 设置列表
	 */
    public function index()
    {
    	$request = Request::instance(); 
        $params = $request->param();
    	$model = model($this->tablename);	
    	$where = array();
    	$paginate = config('paginate');
    	$pagesize = $paginate['list_rows'];
    	if(isset($params['class'])&&$params['class']!=0){
    		$where['class'] = $params['class'];
    	}
    	if(isset($params['pagesize'])){
    		$pagesize = $params['pagesize'];
    	}
    	if(isset($params['state'])&&$params['state']!=2){
    		$where['state'] = $params['state'];
    	}
    	if(isset($params['key'])) {
    		$where['title'] = ['like','%'.$params['key'].'%'];
    	}
        $list = $model->where($where)->order('update_time', 'desc')->paginate($pagesize);         
        $this->assign('params', $params);    
        $this->assign('list', $list);    	
        return $this->fetch();
    }
    /**
     * 添加设置
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
            $params['fields'] = json_encode($params['fields']);
            $params['update_time'] = time();
            if (($model->allowField(true)->save($params)) === false) {
                return $this->error($model->getError());
            }            
            return $this->success($this->title.'添加成功', Url::build($this->tablename.'/index'));
        }
        else { 
        	$this->assign('modify', 'add'); 
	    	return $this->fetch('modify');
        }
    }
    /**
     * 修改设置
     * @param int $id
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
            $params['fields'] = json_encode($params['fields']);
            $params['update_time'] = time();
            if (($model->allowField(true)->save($params,['id'=>$params['id']])) === false) {
                return $this->error($model->getError());
            }            
            return $this->success($this->title.'修改成功', Url::build($this->tablename.'/index'));
        }
        else { 
        	$info = $model->find($id);
			$info['type'] = $info['type'] == 0 ? 2 : $info['type'];
        	$this->assign('info',$info);
        	$this->assign('modify', 'edit'); 
	    	return $this->fetch('modify');
        }
    }
    /**
     * 删除设置
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
    /**
     * 单条设置
     * @param int $id
     */
    public function modifyvalue($id)
    {
    	$request = Request::instance();
    	$model = model($this->tablename);
    	$modelvalue = model('Pagesettingvalue');
    	$settinginfo = $model->find($id);
    	if ($request->isPost()) {
    		$params = $request->param();
			$validate = validate('Pagesettingvalue');
    		$params['update_time'] = time();
    		$params['pagesettingid'] = $id;
	    	if($params['editid']){
				if ($validate->scene('edit')->check($params) === false) {
					return $this->error($validate->getError());
				}
	    		$params['id'] = $params['editid'];
	    		if (($modelvalue->allowField(true)->save($params,['id'=>$params['editid']])) === false) {
	                return $this->error($model->getError());
	            }    
	    	}
	    	else{
				if ($validate->scene('add')->check($params) === false) {
					return $this->error($validate->getError());
				}
	    		if (($modelvalue->allowField(true)->save($params)) === false) {
	                return $this->error($model->getError());
	            }  
	    	}
	    	return $this->success('操作成功');
    	}
    	$info = $modelvalue->where(['pagesettingid'=>$settinginfo['id']])->find();
    	$this->assign('info',$info);
    	$this->assign('settinginfo',$settinginfo);
    	$this->assign('title',$settinginfo['title']);
    	$this->assign('modify', 'modifyvalue');
    	return $this->fetch();
    }
    /**
     * 多条设置
     * @param int $id
     */
	public function modifylist($id)
    {
    	$request = Request::instance();
    	$model = model($this->tablename);
    	$modelvalue = model('Pagesettingvalue');
    	$settinginfo = $model->find($id);
		$paginate = config('paginate');
		$pagesize = isset($params['pagesize']) ? $params['pagesize'] : $paginate['list_rows'];
    	$list = $modelvalue->where(['pagesettingid'=>$settinginfo['id']])->order( 'sort', 'asc')->paginate($pagesize);
    	$this->assign('list',$list);
    	$this->assign('settinginfo',$settinginfo);
    	$this->assign('title',$settinginfo['title']);
    	return $this->fetch();
    }
    /**
     * 多条数据编辑
     * @param int $id
     */
    public function modifylistvalue($id)
    {
    	$request = Request::instance();
    	$params = $request->param();
    	$model = model($this->tablename);
    	$modelvalue = model('Pagesettingvalue');
    	$settinginfo = $model->find($id);
    	if ($request->isPost()) {
			$validate = validate('Pagesettingvalue');
    		$params['update_time'] = time();
    		$params['pagesettingid'] = $id;
	    	if($params['editid']){
				if ($validate->scene('edit')->check($params) === false) {
					return $this->error($validate->getError());
				}
	    		if (($modelvalue->allowField(true)->save($params,['id'=>$params['editid']])) === false) {
	                return $this->error($model->getError());
	            }
	    	}
	    	else{
	    		$params['sort'] = 0;
				unset($params['id']);
				if ($validate->scene('add')->check($params) === false) {
					return $this->error($validate->getError());
				}
	    		if (($modelvalue->allowField(true)->save($params)) === false) {
	                return $this->error($model->getError());
	            }
	    	}
	    	return $this->success('操作成功', Url::build($this->tablename.'/modifylist',['id'=>$settinginfo['id']]));
    	}
    	if(isset($params['editid']))
    	{
    		$info = $modelvalue->where(['id'=>$params['editid']])->find();
    		$this->assign('info',$info);
    	}
    	$this->assign('settinginfo',$settinginfo);
    	$this->assign('title',$settinginfo['title']);
    	$this->assign('modify', 'modifylistvalue'); 
    	return $this->fetch('modifyvalue');
    }
    /**
     * 多条数据排序
     * @param int $id
     */
    public function modifylistupdatesort($id)
    {
    	$request = Request::instance();
    	$params = $request->param();
    	$modelvalue = model('Pagesettingvalue');
    	$list = array();
    	foreach ($params['sort'] as $k=>$v)
    	{
    		$lv['id'] = $k;
    		$lv['sort'] = $v;
    		$list[] = $lv;
    	}
    	if ($list)
    	{
    		$modelvalue->saveAll($list);
    	}
    	return $this->success('操作成功', Url::build($this->tablename.'/modifylist',['id'=>$id]));
    }
    /**
     * 多条数据删除
     * @param int $id
     * @param int $pid
     */
    public function modifylistdelete($id,$pid)
    {
    	$modelvalue = model('Pagesettingvalue');
    	$error = '删除失败';
        if ($modelvalue->where(['id'=>$id])->delete() === false) {
            return $this->error($error);
        }
        return $this->success('删除成功', Url::build($this->tablename.'/modifylist',['id'=>$pid]));
    }
}
