<?php
/**
 * Created by PhpStorm.
 * User: 朱海平
 * Date: 2017/4/10
 * Time: 10:55
 */
namespace app\admin\controller;

use think\Request;

class Area extends Category
{
    protected $tablename = 'Category';
    protected $title = '地区';
    protected function _initialize()
    {
        $this->assign('title',$this->title);
        $this->assign('tablename',$this->tablename);
    }
    public function index()
    {
        $request = Request::instance();
        $params = $request->param();
        $where = array('pid'=>0,'catetype'=>'area');
        if(isset($params['key']) && !empty($params['key'])) {
            $where['catename'] = ['like','%'.$params['key'].'%'];
            unset($where['pid']);
        }
        $model = model($this->tablename);
        $paginate = config('paginate');
        $pagesize = isset($params['pagesize']) ? $params['pagesize'] : $paginate['list_rows'];
        $list = $model->where($where)->order('sort', 'asc')->paginate($pagesize);
        $this->assign('params', $params);
        $this->assign('list', $list);
        return $this->fetch();
    }

}
