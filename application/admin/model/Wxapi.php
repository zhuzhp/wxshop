<?php
/**
 * Created by PhpStorm.
 * User: 朱海平
 * Date: 2017/4/12
 * Time: 12:02
 */
namespace app\admin\model;

use \think\Db;
use \think\Model;

class Wxapi extends Model
{
    public $accessToken = '';
    public $expireTime = 0 ;
    public $appId = 'wx7b739a344a69a410';
    public $appSecret = '9296286bb73ac0391d2eaf2b668c668a';

    public  function getAccessToken($token=''){
        $api = config('wx_api');
        if($token){
            $info = $this->field('id,access_token,token_time,expires_in,appId,appSecret')->where("token='{$token}'")->find();
            if($info){
                $ableTime = $info['token_time'] + $info['expires_in']-10;
                if(!empty($info['access_token']) && $ableTime > time()){
                    $tokenList = ['access_token'=>$info['access_token'], 'expires_in'=>$info['expires_in']];
                }else{
                    $url = sprintf($api['getAccessToken'],$info['appId'],$info['appSecret']);
                    $tokenList = json_decode(file_get_contents($url), true);
                    if($tokenList){
                        $data = ['access_token'=>$tokenList['access_token'],'expires_in'=>$tokenList['expires_in'],'token_time'=>time(),'update_time'=>time()];
                        $re = $this->allowField(true)->save($data,['token'=>$token,'id'=>$info['id']]);
                        if(!$re) $this->getAccessToken($token);
                    }else{
                        $this->getAccessToken($token);
                    }
                }
            }
        }else{
            $appId = empty($api['appId']) ? $this->appId : $api['appId'];
            $appSecret = empty($api['appSecret']) ? $this->appSecret : $api['appSecret'];
            $url = sprintf($api['getAccessToken'],$appId,$appSecret);
            $tokenList = json_decode(file_get_contents($url), true);
        }

        $this->accessToken = $tokenList['access_token'];
        $this->expireTime = $tokenList['expires_in'];
        return $tokenList;
    }
}