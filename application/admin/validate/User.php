<?php
namespace app\admin\validate;

use \think\Validate;

class User extends Validate
{
    protected $rule = [
        'username'      => 'require|token|length:3,25',
        'password'  	=> ['require', 'length:6,20'],
    	'repassword'   	=> ['confirm:password'],
        'tel'      		=> ['require'],
    	'role_id'      	=> ['require'],
    	'rename'      	=> ['require', 'length:3,25'],
    ];

    protected $message = [
        'username.require'  => '用户必须填写',
        'username.length'   => '用户必须大于3个字符小于25个字符',
    	'password.require'  => '登录密码必须填写',
        'password.length'  	=> '密码必须大于6个字符小于20个字符',
    	'repassword.confirm'=> '两次密码不一致',
        'tel.require'       => '联系电话必须填写',
    	'role_id.require'   => '请选择用户角色',
    	'rename.require'  	=> '称呼必须填写',
        'rename.length'   	=> '称呼必须大于3个字符小于25个字符',
    ];

    protected $scene = [
        'add'        => ['username', 'password', 'tel', 'role_id', 'rename'],
        'edit'       => ['username', 'tel', 'role_id', 'rename'],
    	'login'      => ['username', 'password'],
    	'updatepwd'  => ['password', 'repassword', 'tel', 'rename'],
    ];

}
