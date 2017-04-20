<?php
namespace app\admin\model;

use \think\Db;
use \think\Model;

class Article extends Model
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
