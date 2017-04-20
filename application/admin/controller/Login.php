<?php
namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Url;
use think\Session;

class Login extends Controller
{
	public function index()
    {
    	$request = Request::instance();
    	if ($request->isPost()) {
            $params = [
                'username' => $request->post('username'),
                'password' => $request->post('password'),
                '__token__' => $request->post('__token__')
            ];
            $verify = $request->post('verify');
            if(!captcha_check($verify)){
                return $this->error('验证码错误');
            }
			$validate = validate('User');
            if ($validate->scene('login')->check($params) === false) {
                return $this->error($validate->getError());
            }
            unset($params['__token__']);
			$model = model('User');
			$re = $model->login($params);
            if (!$re) {
                return $this->error('用户名密码错误');
            }
    		if (!$re['state']) {
                return $this->error('账号被锁定');
            }
            Session::set('userinfo',$re);
            return $this->success('登录成功', Url::build('Index/index'));
    	}
        return $this->fetch();
    }
 	public function logout()
    {
        Session::clear();
        return $this->success('退出成功！', 'Login/index');
    }

}