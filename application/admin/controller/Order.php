<?php
/**
 * Created by PhpStorm.
 * User: 朱海平
 * Date: 2017/4/9
 * Time: 15:29
 */
namespace app\admin\controller;

use app\common\controller\AdminBase;
use think\Request;
use think\Url;

class Order extends AdminBase
{
    protected $tablename = 'Order';
    protected $title = '订单';
    protected function _initialize()
    {
        $this->assign('title',$this->title);
        $this->assign('tablename',$this->tablename);
    }
    public function index()
    {
        $request = Request::instance();
        $params = $request->param();
        $model = model($this->tablename);
        $where = array('if_del'=>0);
        $pay_status = $this->getStatusId(config('pay_status'));//支付状态
        $ship_status = $this->getStatusId(config('ship_status'));//发货状态
        if(!empty($params['key'])) {
            $where['order_number|tel|contant_person'] = ['like','%'.$params['key'].'%'];
        }
        if(!empty($params['pay_status'])) {
            $where['pay_status'] = $params['pay_status'];
        }
        if(!empty($params['ship_status'])) {
            $where['ship_status'] = $params['ship_status'];
        }


        $paginate = config('paginate');
        $pagesize = isset($params['pagesize']) ? $params['pagesize'] : $paginate['list_rows'];
        $list = $model->where($where)->order('update_time', 'desc')->paginate($pagesize);
        foreach ($list as $k=>$item) {
            $list[$k]['pay_status'] = $pay_status[$item['pay_status']];
            $list[$k]['ship_status'] = $ship_status[$item['ship_status']];
        }

        $params['pay_status'] = isset($params['pay_status']) ? $params['pay_status'] : '';
        $params['ship_status'] = isset($params['ship_status']) ? $params['ship_status'] : '';
        $this->assign('params', $params);
        $this->assign('pay_status', $pay_status);
        $this->assign('ship_status', $ship_status);
        $this->assign('pay_status_list', config('pay_status'));
        $this->assign('ship_status_list', config('ship_status'));
        $this->assign('list', $list);
        return $this->fetch();
    }
    public function goodslist($id){

        $request = Request::instance();
        $params = $request->param();
        $orderGoodsModel = model('Ordergoods');
        $where = array('orderid'=>$id);
        if(isset($params['key'])) {
            $where['product_name'] = ['like','%'.$params['key'].'%'];
        }

        $paginate = config('paginate');
        $pagesize = isset($params['pagesize']) ? $params['pagesize'] : $paginate['list_rows'];
        $list = $orderGoodsModel->where($where)->order('update_time', 'desc')->paginate($pagesize);

        $this->assign('params', $params);
        $this->assign('orderid',$id);
        $this->assign('list', $list);
        return $this->fetch();
    }

    public function delete($id)
    {
        $model = model($this->tablename);
        $error = '删除失败';
        if ($model->deleteone($id,$error) === false) {
            return $this->error($this->title.$error);
        }
        return $this->success($this->title.'删除成功', Url::build($this->tablename.'/index'));
    }
}