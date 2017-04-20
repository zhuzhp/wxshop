<?php
/**
 * Created by PhpStorm.
 * User: 朱海平
 * Date: 2017/4/10
 * Time: 17:49
 */
namespace app\admin\validate;

use \think\Validate;

class Address extends Validate
{
    protected $rule = [
        'contant_person'      => 'require|length:2,20',
        'tel'        	=> ['require'],
        'area_id'  	=> ['require'],
        'address'      => ['require','length:3,300']
    ];

    protected $message = [
        'contant_person.require'   => '联系人姓名必须填写',
        'contant_person.length'    => '联系人姓名必须大于2个字符小于20个字符',
        'tel.require'       => '联系电话必须填写',
        'area_id.require'   => '请选择地区',
        'address.require' => '请输入详细地址(不包含省市区)',
        'address.length' => '详细地址必须大于3个字符小于300个字符',
    ];

    protected $scene = [
        'add'      =>  ['contant_person', 'tel','area_id','address'],
        'edit'     =>  ['contant_person', 'tel','area_id','address'],
    ];

}