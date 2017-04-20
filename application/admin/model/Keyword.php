<?php
/**
 * Created by PhpStorm.
 * User: wangjiuwang
 * Date: 2017/4/20
 * Time: 10:19
 */
namespace app\admin\model;

use \think\Db;
use \think\Model;

class Keyword extends Model
{

    public function deleteone($pid,&$error)
    {
        $model = $this->where('pid',$pid)->find();
        if ($model == false) {
            $error = '不存在，或者已删除！';
            return false;
        }
        return $model->where('pid',$pid)->delete();
    }
}