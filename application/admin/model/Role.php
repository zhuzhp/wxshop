<?php
namespace app\admin\model;

use \think\Db;
use \think\Model;

class Role extends Model
{
	public function countAll()
	{
		return $this->count();
	}
	function deleteone($id,&$error)
	{
		$model = $this->find($id);
        if ($model == false) {
            $error = '不存在，或者已删除！';
            return false;
        }
        
		if (db('User')->where('role_id', $id)->count() > 0) {
            $error = '下存在管理员，不能删除！';
            return false;
        }
        return $model->delete($id);
	}
}
