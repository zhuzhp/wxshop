<?php
namespace app\admin\validate;

use \think\Validate;

class Role extends Validate
{
    protected $rule = [
        'name'      => 'require|token|length:3,25',
        'remark'  	=> ['require', 'length:0,100'],
    	'auth_access'  	=> ['require'],
    ];

    protected $message = [
        'name.require'   => '角色名称必须填写',
        'name.length'    => '角色名称必须大于3个字符小于25个字符',
    	'remark.require' => '角色备注必须填写',
        'remark.length'  => '角色备注必须小于100个字符',
    	'auth_access.require' => '请选择角色权限',
    ];

    protected $scene = [
        'add'        => ['name', 'remark'],
    	'access'     => ['auth_access'],
    ];

}
