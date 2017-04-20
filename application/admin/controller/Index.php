<?php
namespace app\admin\controller;

use app\common\controller\AdminBase;
use think\Request;
use think\Url;
use think\Config;

class Index extends AdminBase
{
    public function index()
    {
       	return $this->fetch();
    }
}