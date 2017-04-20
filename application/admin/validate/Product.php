<?php
/**
 * Created by PhpStorm.
 * User: 朱海平
 * Date: 2017/4/7
 * Time: 20:14
 */
namespace app\admin\validate;

use \think\Validate;

class Product extends Validate
{
    protected $rule = [
        'cateid'  		=> 'require|number|gt:0',
        'title'      	=> ['require', 'length:2,200'],
        'info'   		=> ['length:0,255'],
        'price'        => ['regex'=>'/^([1-9]+)|([1-9]+.\d{1,2})$/'],
        'content'      	=> ['require'],
    ];

    protected $message = [
        'cateid.require'  	=> '请选择文章分类',
        'cateid.number'  	=> '请选择文章分类',
        'title.require'     => '文章标题必须填写',
        'title.length'      => '文章标题必须大于3个字符小于200个字符',
        'info.length'		=> '文章简介必须小于255个字符',
        'price.regex'  	=> '请输入数字类型的价格(一到两位小数)',
        'content.require'   => '详细内容必须填写',
    ];

    protected $scene = [
        'add'   => ['cateid','title',  'info','price', 'content'],
        'edit'  => ['cateid', 'title', 'info','price', 'content'],
    ];

}
