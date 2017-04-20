<?php
/**
 * Created by PhpStorm.
 * User: 朱海平
 * Date: 2017/4/10
 * Time: 10:14
 */
namespace app\admin\model;

use \think\Db;
use \think\Model;

class Member extends Model
{

    /*
     * 锁定会员
     */
    public function lockone($id,&$error)
    {
        $model = $this->find($id);
        if ($model == false) {
            $error = '不存在，或者已锁定！';
            return false;
        }
        return $model->save(['status'=>2],['id'=>$id]);
    }
    /*
     * 冻结会员
     */
    public function freezeone($id,&$error)
    {
        $model = $this->find($id);
        if ($model == false) {
            $error = '不存在，或者已冻结！';
            return false;
        }
        return $model->save(['status'=>3],['id'=>$id]);
    }
}
