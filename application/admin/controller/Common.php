<?php
namespace app\admin\controller;

use app\common\controller\AdminBase;
use think\Request;
use think\Url;
use think\Session;

class Common extends AdminBase
{
    public function updatepwd()
    {
    	$request = Request::instance();
        $model = model("User");
        if ($request->isPost()) {
            $params = $request->param();
       	 	$validate = validate("User");
            if ($validate->scene('updatepwd')->check($params) === false) {
                return $this->error($validate->getError());
            }
            if(md5($params['ypassword']) != $this->userinfo['password']){
            	return $this->error('原登录密码错误！');
            }
            $params['password'] = md5($params['password']);
            $params['update_time'] = time();
            $id = $params['id'];
            if (($model->allowField(true)->save($params,['id'=>$params['id']])) === false) {
                return $this->error($model->getError());
            }            
            return $this->success('密码修改成功,需重新登录', Url::build('Login/logout'));
        }
        else {
        	$info = $model->find($this->userinfo['id']);  
	    	$this->assign('info',$info);
	    	$this->assign('title','修改密码');
	    	$this->assign('tablename','Common');    
	    	return $this->fetch('modify');
        }
    }
}