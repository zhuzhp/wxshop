<?php
/**
 * Created by PhpStorm.
 * User: 朱海平
 * Date: 2017/4/9
 * Time: 16:15
 */
namespace app\admin\model;

use \think\Db;
use \think\Model;

class Order extends Model
{

    public function deleteone($id,&$error)
    {
        $model = $this->find($id);
        if ($model == false) {
            $error = '不存在，或者已删除！';
            return false;
        }
        if (db('Ordergoods')->where('orderid', $id)->count() > 0) {
            $error = '下存在商品，不能删除！';
            return false;
        }
        return $model->save(['if_del'=>1],['id'=>$id]);
    }
}
