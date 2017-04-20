<?php
/**
 * Created by PhpStorm.
 * User: 朱海平
 * Date: 2017/4/17
 * Time: 16:32
 */
namespace app\admin\controller;

use app\common\controller\AdminBase;
use think\Request;
use think\Url;

class Wxset extends AdminBase
{
    protected $tablename = 'Wxapi';
    protected $title = '微信功能设置';

    protected function _initialize()
    {
        $this->assign('title', $this->title);
        $this->assign('tablename', 'Wxset');
    }

    public function index()
    {
        $request = Request::instance();
        $params = $request->param();
        $model = model($this->tablename);
        $info = $model->where('id',$params['id'])->find();

        $this->assign('info',$info);
        $this->assign('params', $params);
        return $this->fetch();
    }

}