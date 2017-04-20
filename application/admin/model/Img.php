<?php
/**
 * Created by PhpStorm.
 * User: wangjiuwang
 * Date: 2017/4/20
 * Time: 11:49
 */
namespace app\admin\model;

use \think\Db;
use \think\Model;

class Img extends Model
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