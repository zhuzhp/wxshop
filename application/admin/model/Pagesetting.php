<?php
namespace app\admin\model;

use \think\Db;
use \think\Model;

class Pagesetting extends Model
{
	function deleteone($id,&$error)
	{
		$model = $this->find($id);
        if ($model == false) {
            $error = '不存在，或者已删除！';
            return false;
        }
        
		if (db('Pagesettingvalue')->where('pagesettingid', $id)->count() > 0) {
            $error = '下存在数据，不能删除！';
            return false;
        }
        return $model->delete($id);
	}
}
