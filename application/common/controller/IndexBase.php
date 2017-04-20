<?php
namespace app\common\controller;

use think\Controller;
use think\Request;
use think\Session;
use think\Db;
use think\Url;
use think\Loader;

class IndexBase extends Controller
{
    public function __construct()
    {
        parent::__construct();     
        Url::root('/index.php');
//        $articlelist = Db::table("__ARTICLE__")->order('sort desc')->field('id,title')->where(['class'=>12])->select();
//        $categorylist = Db::table("__CATEGORY__")->order('sort desc')->field('id,title')->where(['pid'=>13])->select();
//        $this->assign('categorylist',$categorylist);
//        $this->assign('articlelist',$articlelist);
    }

}
