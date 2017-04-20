<?php
/**
 * Created by PhpStorm.
 * User: 朱海平
 * Date: 2017/4/5
 * Time: 10:59
 */
namespace app\admin\validate;

use \think\Validate;

class Pagesettingvalue extends Validate
{
    protected $rule = [
        'title'      	=> ['require'],
        'entitle'  	=> ['require'],
        'url'   		=> 'require|url',
        'info'      	=> ['require'],
        'content'  	=> ['require'],
        'editid'       => ['require']
    ];

    protected $message = [
        'title.require'     =>    '标题必须填写',
        'entitle.require'   =>    '副标题必须填写',
        'url.url'       =>    'url地址不合法',
        //'url.url'            =>    'url地址不合法',
        'info.require'      =>    '简介必须填写',
        'content.require'		  =>    '内容必须填写',
        'editid.require'		  =>    '修改内容有误，请返回',
    ];

    protected $scene = [
        'add'   => ['title', 'entitle', 'url', 'info', 'content'],
        'edit'  => ['editid', 'title', 'entitle', 'url', 'info', 'content'],
    ];

}