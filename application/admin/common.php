<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
use think\Db;
function u_pam($params, $join=array(), $clean=array())
{
	if( !empty($clean) ){
		if( is_array($clean) ){
			foreach ($params as $key => $value) {
				if( in_array($key, $clean) ){
					unset($params[$key]);
					continue;
				}
			}
		}
		if( is_string($clean) && isset($params[$clean]) ){
			unset($params[$clean]);
		}
	}
	return !empty($join) && is_array($join) ? array_merge($params, $join) : $params;
}

function fields($data,$n)
{
	$data = json_decode($data);
	foreach ($data as $v)
	{
		if($v == $n)
		{
			return true;
		}
	}
	return false;
}
function getArticleCateName($cateid){
	$cateInfo = Db::query("select catename from hsq_category where id={$cateid} limit 1");
	return  $cateInfo[0]['catename'];
}
function indent($n){
	$str = '';
	if($n != 0){
		$j = '|';
		for($i=0;$i<$n;$i++){
			$j .='__';
		}
		$str .= $j;
	}
	return $str;
}

/*function getAddressById($area_id,&$area=array()){
	$cateInfo = getArticleCateName($area_id,2);
	array_unshift($area,$cateInfo['catename']);
	if($cateInfo['pid'] != 0){
		getAddressById($cateInfo['pid'],$area);
	}
	return implode(' ',$area);
}*/
function getAddressById($idStr){
	$arr = explode(',',$idStr);
	$str = '';
	foreach($arr as $v){
		$str .= getArticleCateName($v).' ';
	}
	return substr($str,0,strlen($str)-1);
}