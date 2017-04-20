<?php
namespace app\admin\model;

use \think\Db;
use \think\Model;

class Category extends Model
{
    
	public function deleteone($id,$controller,&$error)
	{
		$model = $this->find($id);
        $controller = explode('_',$controller);
        $controller = ucwords($controller[0]);
        $cateInfo = '';
        switch($controller){
            case 'Article':
                $cateInfo = '文章';
                break;
            case 'Product':
                $cateInfo = '商品';
                break;
            default:
                $cateInfo = '';
                break;
        }
        if ($model == false) {
            $error = '不存在，或者已删除！';
            return false;
        }
        
        if ($model->where('pid', $id)->count() > 0) {
            $error = '下存在子类，不能删除！';
            return false;
        }
		if (db($controller)->where('cateid', $id)->count() > 0) {
            $error = '下存在'.$cateInfo.'，不能删除！';
            return false;
        }
        return $model->delete($id);
	}
}
