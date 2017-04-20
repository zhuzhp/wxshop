<?php
/**
 * Created by PhpStorm.
 * User: 朱海平
 * Date: 2017/4/18
 * Time: 18:20
 */

namespace app\admin\validate;

use \think\Validate;

class Text extends Validate
{
    protected $rule = [
        'keyword'      => 'require|length:2,100',
        'content'  	=> ['require'],
    ];

    protected $message = [
        'keyword.require'   => '关键字必须填写',
        'keyword.length'    => '关键字必须大于2个字符小于100个字符',
        'content.require' => '文本回复内容必须填写'
    ];

    protected $scene = [
        'modify'        => ['keyword', 'content'],
    ];

}