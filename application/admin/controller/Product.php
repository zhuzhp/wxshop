<?php
/**
 * Created by PhpStorm.
 * User: 朱海平
 * Date: 2017/4/7
 * Time: 19:54
 */
namespace app\admin\controller;

use app\common\controller\AdminBase;
use think\Request;
use think\Url;
use think\Db;

class Product extends AdminBase
{
    protected $tablename = 'Product';
    protected $title = '商品';
    protected function _initialize()
    {
        $this->assign('title',$this->title);
        $this->assign('tablename',$this->tablename);
        $cateList = $this->getArray(0,'product');
        $cateList = $this->getOneArrayCate($cateList);
        $this->assign('categorylist',$cateList);
    }
    public function index()
    {
        $request = Request::instance();
        $params = $request->param();
        $model = model($this->tablename);
        $where = array();
        $paginate = config('paginate');
        $pagesize = isset($params['pagesize']) ? $params['pagesize'] : $paginate['list_rows'];
        if(isset($params['cateid'])&&!empty($params['cateid'])){
            $where['cateid'] = $params['cateid'];
        }
        if(isset($params['key'])) {
            $where['title'] = ['like','%'.$params['key'].'%'];
        }
        $list = $model->where($where)->order('update_time', 'desc')->paginate($pagesize);
        $params['cateid'] = isset($params['cateid']) ? $params['cateid'] : '';
        $this->assign('params', $params);
        $this->assign('list', $list);
        return $this->fetch();
    }

    public function add()
    {
        $request = Request::instance();
        $model = model($this->tablename);
        if ($request->isPost()) {
            $params = $request->param();
            $validate = validate($this->tablename);
            if ($validate->scene('add')->check($params) === false) {
                return $this->error($validate->getError());
            }
            $params['update_time'] = time();
            if (($model->allowField(true)->save($params)) === false) {
                return $this->error($model->getError());
            }
            return $this->success($this->title.'添加成功', Url::build($this->tablename.'/index'));
        }
        else {
            $info['cateid'] = isset($info['cateid']) ? $info['cateid'] : '';
            $this->assign('info', $info);
            $this->assign('modify', 'add');
            return $this->fetch('modify');
        }
    }
    public function edit($id)
    {
        $request = Request::instance();
        $model = model($this->tablename);
        if ($request->isPost()) {
            $params = $request->param();
            $validate = validate($this->tablename);
            if ($validate->scene('edit')->check($params) === false) {
                return $this->error($validate->getError());
            }
            $params['update_time'] = time();
            if (($model->allowField(true)->save($params,['id'=>$params['id']])) === false) {
                return $this->error($model->getError());
            }
            return $this->success($this->title.'修改成功', Url::build($this->tablename.'/index'));
        }
        else {
            $info = Db::query("select a.*,b.catename from hsq_product a left join hsq_category b on a.cateid=b.id where a.id={$id} limit 1");
            $this->assign('info',$info[0]);
            $this->assign('modify', 'edit');
            return $this->fetch('modify');
        }
    }
    public function delete($id)
    {
        $model = model($this->tablename);
        $error = '删除失败';
        if ($model->where(['id'=>$id])->delete() === false) {
            return $this->error($this->title.$error);
        }
        return $this->success($this->title.'删除成功', Url::build($this->tablename.'/index'));
    }
    public function deleteall()
    {
        $request = Request::instance();
        $params = $request->param();
        $error = '删除失败';
        if(!isset($params['row'])){
            return $this->error('没有选中项，'.$error);
        }
        $model = model($this->tablename);
        if ($model->deleteall($params['row']) === false) {
            return $this->error($this->title.$error);
        }
        return $this->success($this->title.'删除成功', Url::build($this->tablename.'/index'));
    }
}
