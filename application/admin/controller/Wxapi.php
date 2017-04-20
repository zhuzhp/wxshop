<?php
/**
 * Created by PhpStorm.
 * User: 朱海平
 * Date: 2017/4/12
 * Time: 11:29
 */
namespace app\admin\controller;

use app\common\controller\AdminBase;
use think\Request;
use think\Url;

class Wxapi extends AdminBase
{
    protected $tablename = 'Wxapi';
    protected $title = '微信公众账号';
    protected function _initialize()
    {
        $this->assign('title',$this->title);
        $this->assign('tablename',$this->tablename);
    }

    public function index(){
        $request = Request::instance();
        $params = $request->param();
        $model = model($this->tablename);
        $wxType = $this->getStatusId(config('wx_type'));//账号类型
        $where = array();
        if(!empty($params['key'])) {
            $where['name|info|token'] = ['like','%'.$params['key'].'%'];
        }
        if(!empty($params['wx_type'])) {
            $where['type'] = $params['wx_type'];
        }

        $paginate = config('paginate');
        $pagesize = isset($params['pagesize']) ? $params['pagesize'] : $paginate['list_rows'];
        $list = $model->where($where)->order('id', 'asc')->paginate($pagesize);
        foreach ($list as $k=>$item) {
            $list[$k]['type'] = $wxType[$item['type']];
        }

        $params['wx_type'] = isset($params['wx_type']) ? $params['wx_type'] : '';
        $this->assign('wx_type', $wxType);
        $this->assign('wx_type_list', config('wx_type'));
        $this->assign('params', $params);
        $this->assign('list', $list);
        return $this->fetch();
    }

    public function modify(){
        $request = Request::instance();
        $params = $request->param();
        $model = model($this->tablename);
        $validate = validate($this->tablename);
        if($request->isPost()){
            $params['update_time'] = time();
            if($params['id']){//修改
                if ($validate->scene('edit')->check($params) === false) {
                    return $this->error($validate->getError());
                }
                $re = $model->allowField(true)->save($params,['id'=>$params['id']]);
            }else{//添加
                $tokenInfo = $model->where('token',$params['token'])->find();
                if(!empty($tokenInfo)){
                    return $this->error('输入的Token已经被占用');
                }
                if ($validate->scene('add')->check($params) === false) {
                    return $this->error($validate->getError());
                }
                $re = $model->allowField(true)->save($params);
            }
            if (!$re) {
                return $this->error($model->getError());
            }
            return $this->success($this->title.'操作成功', Url::build($this->tablename.'/index'));
        }
        if(!empty($params['id'])){//修改时
            $wxType = $this->getStatusId(config('wx_type'));//账号类型
            $info = $model->where(['id'=>$params['id']])->find();
            $info['if_disabled'] = $info['if_disabled'] == 0 ? 2 : $info['if_disabled'];
            $info['type_name'] = $wxType[$info['type']];
        }else{
            $info['if_disabled'] = isset($info['if_disabled']) ? $info['if_disabled'] : 2;
            $info['type'] = isset($info['type']) ? $info['type'] : '';
        }

        $this->assign('info',$info);
        $this->assign('wx_type_list', config('wx_type'));
        return $this->fetch();
    }

    public function getoken($id){
        $model = model($this->tablename);
        $info  = $model->field('id,name,token,appId,appSecret,encodingAESKey')->where("id={$id}")->find();
        $tokenList = $model->getAccessToken($info['token']);
        $info['access_token'] = $tokenList['access_token'];
        $info['expires_in'] = $tokenList['expires_in'];
        $this->assign('info',$info);
        return $this->fetch('getoken');
    }
    public function disabled($id){
        $model = model($this->tablename);
        $params = ['if_disabled'=>1];
        $re = $model->allowField(true)->save($params,['id'=>$id]);
        if(!$re){
            return $this->error($model->getError());
        }
        return $this->success($this->title.'操作成功', Url::build($this->tablename.'/index'));
    }
}