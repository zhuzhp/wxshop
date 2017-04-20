<?php
/**
 * Created by PhpStorm.
 * User: 朱海平
 * Date: 2017/4/5
 * Time: 17:18
 */
header("content-Type: text/html; charset=Utf-8"); //设置字符的编码是utf-8
define("TOKEN", "weixin");
$wechatObj = new wechatCallbackapiTest();
$wechatObj->valid();
class wechatCallbackapiTest
{
    public function valid()
    {
        $echoStr = $_GET["echostr"];
        if($this->checkSignature()){
            echo $echoStr;
            exit;
        }
    }

    private function checkSignature()
    {
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];

        $token = TOKEN;
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );

        if( $tmpStr == $signature ){
            return true;
        }else{
            return false;
        }
    }
}
class Basic{

    public $accessToken = '';
    public $expireTime = 0 ;

    public function __construct(){
        $this->run();
    }

    private function run(){
        while(true){
            if ($this->expireTime > 10){
                $this->expireTime--;
            } else{
                $this->getAccessToken();
                break;
            }
        }
    }

    private function createAccessToken(){
        $appId = 'wx7b739a344a69a410';//'Wxe7cac9fe887686ee';
        $appSecret = '9296286bb73ac0391d2eaf2b668c668a';//'34309814be63a14ab4198a2c59582d59';

        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=" . $appId . "&secret=" . $appSecret . "";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        $urlResp = json_decode($output, true);

        $this->accessToken = $urlResp['access_token'];
        $this->expireTime = $urlResp['expires_in'];
    }
    private function getAccessToken(){
        if($this->expireTime < 10){
            $this->createAccessToken();
        }
    }
}
?>