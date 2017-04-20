<?php
/**
 * Created by PhpStorm.
 * User: wangjiuwang
 * Date: 2017/4/20
 * Time: 11:59
 */
namespace app\admin\validate;

use \think\Validate;

class Img extends Validate
{
    protected $rule = [
        'keyword'      => 'require|length:2,100',
        'content'  	=> ['require'],
        'image'        => ['require']
    ];

    protected $message = [
        'keyword.require'   => '关键字必须填写',
        'keyword.length'    => '关键字必须大于2个字符小于100个字符',
        'content.require' => '文本回复内容必须填写',
        'image.require' => '请上传封面图片'
    ];

    protected $scene = [
        'modify'        => ['keyword', 'content','image'],
    ];

}