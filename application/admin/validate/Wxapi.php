<?php
/**
 * Created by PhpStorm.
 * User: 朱海平
 * Date: 2017/4/12
 * Time: 12:03
 */
namespace app\admin\validate;

use \think\Validate;

class Wxapi extends Validate
{
    protected $rule = [
        'name'      => 'require|length:2,100',
        'info'        	=> ['length:2,300'],
        'type'  	=> ['require'],
        'token'      => ['require','length:2,20'],
        'encodingAESKey'      => ['require','length:2,200'],
        'appId'      => ['require','length:2,20'],
        'appSecret'      => ['require','length:2,50'],
    ];

    protected $message = [
        'name.require'   => '名称必须填写',
        'name.length'    => '名称必须大于2个字符小于100个字符',
        'info.length'       => '简介必须大于2个字符小于300个字符',
        'type.require'   => '请选择账号类型',
        'token.require' => '请输入Token',
        'token.length' => 'Token必须大于2个字符小于20个字符',
        'encodingAESKey.require' => '请输入EncodingAESKey',
        'encodingAESKey.length' => 'EncodingAESKey必须大于2个字符小于200个字符',
        'appId.require' => '请输入AppId',
        'appId.length' => 'AppId必须大于2个字符小于20个字符',
        'appSecret.require' => '请输入AppSecret',
        'appSecret.length' => 'AppSecret必须大于2个字符小于50个字符',
    ];

    protected $scene = [
        'add'      =>  ['name', 'info','type','token','encodingAESKey','appId','appSecret'],
        'edit'     =>  ['name', 'info','type','token','encodingAESKey','appId','appSecret'],
    ];

}