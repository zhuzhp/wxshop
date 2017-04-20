<?php
namespace app\admin\validate;

use \think\Validate;

class Pagesetting extends Validate
{
    protected $rule = [
        'title'      	=> 'require|token|length:2,100',
        'key'  			=> ['require', 'length:2,100'],
    	'type'   		=> ['require'],
        'fields'      	=> ['require'],
    ];

    protected $message = [
        'title.require'     => '标题必须填写',
        'title.length'      => '标题必须大于2个字符小于100个字符',
    	'key.require'     	=> '键名必须填写',
        'key.length'      	=> '键名必须大于2个字符小于100个字符',
        'fields.require'  	=> '请选择展示类型',
    	'type.length'		=> '类型必须选择',
    ];

    protected $scene = [
        'add'   => ['title', 'key', 'type', 'fields'],
    	'edit'  => ['title', 'key', 'type', 'fields'],
    ];

}
