<?php
namespace app\admin\model;

use \think\Db;
use \think\Model;

class User extends Model
{
	public function login($data)
	{
		$data['password'] = md5($data['password']);				
		$redb = $this->where($data)->find();
		if($redb){
			$where['id'] = $redb['role_id'];
			$dbrole = db('Role')->where($where)->find();
			$redb['auth_access'] = $dbrole['auth_access'];
		}
		return $redb;
	}
	function deleteone($id,&$error)
	{
		$model = $this->find($id);
        if ($model == false) {
            $error = '管理员不存在，或者已删除！';
            return false;
        }
        
		if (!$model['role_id']) {
            $error = '超级管理员，不能删除！';
            return false;
        }
        return $model->delete($id);
	}
}