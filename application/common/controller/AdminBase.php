<?php
namespace app\common\controller;

use think\Controller;
use think\Request;
use think\Session;
use think\Db;
use think\Url;
use think\Loader;
use think\Config;

class AdminBase extends Controller
{
	protected $userinfo;
    public function __construct()
    {
        parent::__construct();     
        $userinfo = Session::get('userinfo');
        if(!$userinfo)
        {
        	return $this->error('你还没有登录！', 'login/index');
        }        
        $this->userinfo = $userinfo;
        $this->auth_check();
        $auth_access = json_decode($userinfo['auth_access'])?json_decode($userinfo['auth_access']):array();
        $this->assign('auth_access',$auth_access);
        $this->assign('role_id',$userinfo['role_id']);
        $this->assign('nav',Config::get("nav"));
    }
    private function auth_check(){
    	if($this->userinfo['role_id']){
	    	$request = Request::instance();
	    	$name = $request->controller()."/".$request->action();
	    	if (!in_array($name,Config::get("notrolenav"))){
		    	$nav = Config::get('nav');
		    	$access = json_decode($this->userinfo['auth_access']);
		    	$key = 0;
				foreach ($nav as $groupkey=>$group)
				{
					if($group[1] == $name){
						$key = $groupkey;
						break;
					}
					if($group[3] && !$key){
						foreach ($group[3] as $controllerkey=>$controller)
						{
							if($controller[1] == $name){
								$key = $controllerkey;
								break;
							}
							if(isset($controller[3]) && !$key){
								foreach ($controller[3] as $actionkey=>$action)
								{
									if($action[1] == $name){
										$key = $actionkey;
										break;
									}
								}
							}
						}
					}
				}
				//echo $name.$key;exit;
				if (!$key){
					return $this->error("你没有权限！");			
				}else{
					if(!in_array($key,$access)){
						return $this->error("你没有权限！");
					}
				}
	    	}
    	}
    }

	public function getArray($id=0,$catetype,$level = 0){
		$sql = "select id,catename,pid from hsq_category where pid= {$id} and catetype='{$catetype}'";
		$result = Db::query($sql);
		$cateList = array();
		if($result){
			foreach($result as $rows){
				$rows['level'] = $level;
				$rows['son'] = $this->getArray($rows['id'],$catetype,$level+1);
				$cateList[] = $rows;
			}
			return $cateList;
		}
	}
	public function getOneArrayCate($list){
		static $cateOne = array();
		if(!empty($list)){
			foreach ($list as $k=>$v){
				$cateOne[] = ['id'=>$v['id'],'catename'=>$v['catename'],'level'=>$v['level']];
				if(!empty($v['son'])){
					$this->getOneArrayCate($v['son']);
				}
			}
		}
		return $cateOne;
	}


	public function getStatusId($arr){
		$result = array();
		if(is_array($arr)){
			foreach($arr as $v){
				$result[$v['id']] = $v['status'];
			}
		}
		return $result;
	}

}
