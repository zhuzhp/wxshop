<?php
namespace app\admin\validate;

use \think\Validate;

class Category extends Validate
{
    protected $rule = [
        'catename'      	=> 'require|length:2,100',
    ];

    protected $message = [
        'catename.require'     => '分类名称必须填写',
        'catename.length'      => '分类名称必须大于2个字符小于100个字符',
    ];

    protected $scene = [
        'all'   => ['catename'],
    ];
}
