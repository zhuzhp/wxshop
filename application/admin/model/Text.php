<?php
/**
 * Created by PhpStorm.
 * User: 朱海平
 * Date: 2017/4/18
 * Time: 18:01
 */
namespace app\admin\model;

use \think\Db;
use \think\Model;

class Text extends Model
{

    public function deleteone($id,&$error)
    {
        $model = $this->find($id);
        if ($model == false) {
            $error = '不存在，或者已删除！';
            return false;
        }
        return $model->delete($id);
    }
}