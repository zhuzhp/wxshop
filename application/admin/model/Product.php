<?php
/**
 * Created by PhpStorm.
 * User: 朱海平
 * Date: 2017/4/7
 * Time: 20:14
 */
namespace app\admin\model;

use \think\Db;
use \think\Model;

class Product extends Model
{
    public function deleteall($row)
    {
        return Db::table('__ARTICLE__')->delete($row);
    }
    public function countAll()
    {
        return $this->count();
    }
}
