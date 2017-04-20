<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:64:"D:\www\wxshop\public/../application/admin\view\wxapi\modify.html";i:1492406362;s:63:"D:\www\wxshop\public/../application/admin\view\public\base.html";i:1491877418;s:62:"D:\www\wxshop\public/../application/admin\view\public\nav.html";i:1491788115;}*/ ?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-focus">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title>
<?php echo $title; ?>列表
<?php $groupnav = 'Weixin'; $activenav = 'Wxapi/index'; ?>
-<?php echo Config('systemname'); ?></title>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
<!-- Icons -->
<!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
<link rel="shortcut icon" href="<?php echo Config('public'); ?>assets/img/favicons/favicon.png">
<link rel="icon" type="image/png" href="<?php echo Config('public'); ?>assets/img/favicons/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="<?php echo Config('public'); ?>assets/img/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo Config('public'); ?>assets/img/favicons/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="<?php echo Config('public'); ?>assets/img/favicons/favicon-160x160.png" sizes="160x160">
<link rel="icon" type="image/png" href="<?php echo Config('public'); ?>assets/img/favicons/favicon-192x192.png" sizes="192x192">
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo Config('public'); ?>assets/img/favicons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo Config('public'); ?>assets/img/favicons/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo Config('public'); ?>assets/img/favicons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo Config('public'); ?>assets/img/favicons/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo Config('public'); ?>assets/img/favicons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo Config('public'); ?>assets/img/favicons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo Config('public'); ?>assets/img/favicons/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo Config('public'); ?>assets/img/favicons/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo Config('public'); ?>assets/img/favicons/apple-touch-icon-180x180.png">
<!-- END Icons -->
<!-- Stylesheets -->
<!-- Web fonts -->
<!-- OneUI CSS framework -->
<link rel="stylesheet" id="css-main" href="<?php echo Config('public'); ?>assets/css/oneui.css">
<!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
<!-- <link rel="stylesheet" id="css-theme" href="<?php echo Config('public'); ?>assets/css/themes/flat.min.css"> -->
<!-- END Stylesheets -->

</head>
<body>
<!-- Page Container -->
<div id="page-container" class="sidebar-l sidebar-mini sidebar-o side-scroll header-navbar-fixed header-navbar-transparent" <?php if(\think\Request::instance()->controller() == 'Login'): ?>style="padding-left: 0px;"<?php endif; ?>>
  <!-- Sidebar -->
  <?php if(\think\Request::instance()->controller() != 'Login'): ?>
  <nav id="sidebar">
    <!-- Sidebar Scroll Container -->
    <div id="sidebar-scroll">
      <!-- Sidebar Content -->
      <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
      <div class="sidebar-content">
        <!-- Side Header -->
        <div class="side-header side-content">
          <!-- Layout API, functionality initialized in App() ->
          uiLayoutApi() -->
          <button class="btn btn-link text-gray pull-right visible-xs visible-sm" type="button" data-toggle="layout" data-action="sidebar_close"> <i class="fa fa-times"></i> </button>
          <!-- Themes functionality initialized in App() ->
          uiHandleTheme() -->
          <div class="btn-group pull-right visible-md visible-lg">
            <button class="btn btn-link text-gray dropdown-toggle" data-toggle="dropdown" type="button"> <i class="si si-drop"></i> </button>
            <ul class="dropdown-menu dropdown-menu-right font-s13 sidebar-mini-hide">
              <li> <a data-toggle="theme" data-theme="default" tabindex="-1" href="javascript:void(0)"> <i class="fa fa-circle text-default pull-right"></i> <span class="font-w600">Default</span> </a> </li>
              <li> <a data-toggle="theme" data-theme="<?php echo Config('public'); ?>assets/css/themes/amethyst.min.css" tabindex="-1" href="javascript:void(0)"> <i class="fa fa-circle text-amethyst pull-right"></i> <span class="font-w600">Amethyst</span> </a> </li>
              <li> <a data-toggle="theme" data-theme="<?php echo Config('public'); ?>assets/css/themes/city.min.css" tabindex="-1" href="javascript:void(0)"> <i class="fa fa-circle text-city pull-right"></i> <span class="font-w600">City</span> </a> </li>
              <li> <a data-toggle="theme" data-theme="<?php echo Config('public'); ?>assets/css/themes/flat.min.css" tabindex="-1" href="javascript:void(0)"> <i class="fa fa-circle text-flat pull-right"></i> <span class="font-w600">Flat</span> </a> </li>
              <li> <a data-toggle="theme" data-theme="<?php echo Config('public'); ?>assets/css/themes/modern.min.css" tabindex="-1" href="javascript:void(0)"> <i class="fa fa-circle text-modern pull-right"></i> <span class="font-w600">Modern</span> </a> </li>
              <li> <a data-toggle="theme" data-theme="<?php echo Config('public'); ?>assets/css/themes/smooth.min.css" tabindex="-1" href="javascript:void(0)"> <i class="fa fa-circle text-smooth pull-right"></i> <span class="font-w600">Smooth</span> </a> </li>
            </ul>
            <button class="btn btn-link text-gray dropdown-toggle" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                            <i class="fa fa-ellipsis-v"></i>
                        </button>
          </div>
          <a class="h5 text-white" href="frontend_home.html"> <i class="fa fa-circle-o-notch text-primary"></i> <span class="h4 font-w600 sidebar-mini-hide">ne</span> </a>           
          </div>
        <!-- END Side Header -->
        <!-- Side Content -->
        <div class="side-content">
                  <ul class="nav-main">
			<?php if(is_array($nav) || $nav instanceof \think\Collection || $nav instanceof \think\Paginator): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(empty($vo[4]) || (($vo[4] instanceof \think\Collection || $vo[4] instanceof \think\Paginator ) && $vo[4]->isEmpty())): if(in_array($key,$auth_access) || $role_id==0): ?>
            <li> <a class="<?php echo !empty($activenav) && $activenav==$vo[1]?'active':''; ?>" href="<?php echo url($vo[1]); ?>"><i class="si <?php echo $vo[5]; ?>"></i><span class="sidebar-mini-hide"><?php echo $vo[0]; ?></span></a> </li>
            <?php endif; else: if(in_array($key,$auth_access) || $role_id==0): ?>
            <li class="<?php echo !empty($groupnav) && $groupnav==$vo[1]?'open':''; ?>"> <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si <?php echo $vo[5]; ?>"></i><span class="sidebar-mini-hide"><?php echo $vo[0]; ?></span></a>
              <ul>
              	<?php if(is_array($vo[3]) || $vo[3] instanceof \think\Collection || $vo[3] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo[3];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if(in_array($key,$auth_access) || $role_id==0): ?>
                <li> <a class="<?php echo !empty($activenav) && $activenav==$v[1]?'active':''; ?>" href="<?php echo url($v[1]); ?>"><?php echo $v[0]; ?></a> </li>    
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
              </ul>
            </li>
            <?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
            <li class="nav-main-heading"><span class="sidebar-mini-hide">我的账号</span></li>
            <li> <a href="<?php echo url('Common/updatepwd'); ?>"><i class="si si-lock"></i><span class="sidebar-mini-hide">修改密码</span></a> </li>
            <li> <a href="<?php echo url('Login/logout'); ?>"><i class="si si-logout"></i><span class="sidebar-mini-hide">退出系统</span></a> </li>
        </ul>
        </div>
        <!-- END Side Content -->
      </div>
      <!-- Sidebar Content -->
    </div>
    <!-- END Sidebar Scroll Container -->
  </nav>
  <?php endif; ?>
  <!-- END Sidebar -->
  <!-- Header -->
  <header id="header-navbar" class="content-mini content-mini-full hidden-md hidden-lg">
    <div class="content-boxed">
      <!-- Header Navigation Right -->
      <ul class="nav-header pull-right">
        <li>
          <!-- Themes functionality initialized in App() ->
          uiHandleTheme() -->
          <div class="btn-group">
            <button class="btn btn-link text-white dropdown-toggle" data-toggle="dropdown" type="button"> <i class="si si-drop"></i> </button>
            <ul class="dropdown-menu dropdown-menu-right sidebar-mini-hide font-s13">
              <li> <a data-toggle="theme" data-theme="default" tabindex="-1" href="javascript:void(0)"> <i class="fa fa-circle text-default pull-right"></i> <span class="font-w600">Default</span> </a> </li>
              <li> <a data-toggle="theme" data-theme="<?php echo Config('public'); ?>assets/css/themes/amethyst.min.css" tabindex="-1" href="javascript:void(0)"> <i class="fa fa-circle text-amethyst pull-right"></i> <span class="font-w600">Amethyst</span> </a> </li>
              <li> <a data-toggle="theme" data-theme="<?php echo Config('public'); ?>assets/css/themes/city.min.css" tabindex="-1" href="javascript:void(0)"> <i class="fa fa-circle text-city pull-right"></i> <span class="font-w600">City</span> </a> </li>
              <li> <a data-toggle="theme" data-theme="<?php echo Config('public'); ?>assets/css/themes/flat.min.css" tabindex="-1" href="javascript:void(0)"> <i class="fa fa-circle text-flat pull-right"></i> <span class="font-w600">Flat</span> </a> </li>
              <li> <a data-toggle="theme" data-theme="<?php echo Config('public'); ?>assets/css/themes/modern.min.css" tabindex="-1" href="javascript:void(0)"> <i class="fa fa-circle text-modern pull-right"></i> <span class="font-w600">Modern</span> </a> </li>
              <li> <a data-toggle="theme" data-theme="<?php echo Config('public'); ?>assets/css/themes/smooth.min.css" tabindex="-1" href="javascript:void(0)"> <i class="fa fa-circle text-smooth pull-right"></i> <span class="font-w600">Smooth</span> </a> </li>
            </ul>
          </div>
        </li>
        <li>
          <!-- Layout API, functionality initialized in App() ->
          uiLayoutApi() -->
          <button class="btn btn-link text-white pull-right" type="button" data-toggle="layout" data-action="sidebar_open"><?php if(\think\Request::instance()->controller() != 'Login'): ?> <i class="fa fa-navicon"></i><?php endif; ?> </button>
         
        </li>
      </ul>
      <!-- END Header Navigation Right -->
      <!-- Header Navigation Left -->
      <ul class="nav-header pull-left">
        <li class="header-content"> <a class="h5" href="frontend_home.html"> <i class="fa fa-circle-o-notch text-primary"></i> <span class="h4 font-w600 text-white">ne</span> </a> </li>
      </ul>
      <!-- END Header Navigation Left -->
    </div>
  </header>
  <!-- END Header -->
  <!-- Main Container -->
  <main id="main-container">
    <!-- Hero Content -->
    
<!-- Hero Content -->
<div class="bg-primary-dark">
    <section class="content content-full content-boxed">
        <!-- Section Content -->
        <div class="push-100-t push-50 text-center">
            <h1 class="h2 text-white push-10 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Contact Us.</h1>
            <h2 class="h5 text-white-op visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Have an awesome idea for a project? Get in touch today.</h2>
        </div>
        <!-- END Section Content -->
    </section>
</div>
<!-- END Hero Content -->

<div class="col-lg-12">
    <!-- Simple Progress Wizard (.js-wizard-simple class is initialized in js/pages/base_forms_wizard.js) -->
    <!-- For more examples you can check out http://vadimg.com/twitter-bootstrap-wizard-example/ -->
    <div class="js-wizard-simple block">
        <!-- Step Tabs -->
        <ul class="nav nav-tabs nav-tabs-alt nav-justified">
            <li class="active">
                <a href="#simple-progress-step1" data-toggle="tab"><i class="fa fa-cog fa-1x"></i>基本</a>
            </li>
            <li>
                <a href="#simple-progress-step2" data-toggle="tab"><i class="fa fa-wechat fa-1x"></i>微信支付</a>
            </li>
            <li>
                <a href="#simple-progress-step3" data-toggle="tab"><i class="fa fa-book fa-1x"></i>运营资料</a>
            </li>
            <li>
                <a href="#simple-progress-step4" data-toggle="tab"><i class="fa fa-folder fa-1x"></i>推广资料</a>
            </li>
        </ul>
        <!-- END Step Tabs -->
        <!-- Steps Content -->
        <div class="block-content tab-content">
            <!-- Step 1 -->
            <div class="tab-pane fade fade-right in push-30-t push-50 active" id="simple-progress-step1">
                <form  class="js-validation-wxapi form-horizontal" action="<?php echo url($tablename.'/modify'); ?>" method="post">
                    <input type="hidden" name="id" value="<?php echo isset($info['id'])?$info['id']:''; ?>" />
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">名称 <span class="text-danger">*</span></label>
                        <div class="col-md-5">
                            <div class="form-material">
                                <input class="form-control" type="text" id="name" name="name" placeholder="请输入名称.." value="<?php echo isset($info['name'])?$info['name']:''; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="info">简介 <span class="text-danger">&nbsp;</span></label>
                        <div class="col-md-7">
                            <div class="form-material">
                                <input class="form-control" type="text" id="info" name="info" placeholder="请输入简介.." value="<?php echo isset($info['info'])?$info['info']:''; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="type">账号类型 <span class="text-danger">*</span></label>
                        <div class="col-md-3">
                            <div class="form-material">
                                <select class="form-control" id="type" name="type">
                                    <?php if(empty($info['type']) || (($info['type'] instanceof \think\Collection || $info['type'] instanceof \think\Paginator ) && $info['type']->isEmpty())): ?><option value="">--请选择账号类型--</option><?php else: ?><option value="<?php echo $info['type']; ?>"><?php echo $info['type_name']; ?></option><?php endif; if(is_array($wx_type_list) || $wx_type_list instanceof \think\Collection || $wx_type_list instanceof \think\Paginator): $i = 0; $__LIST__ = $wx_type_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$wx): $mod = ($i % 2 );++$i;if($info['type'] != $wx['id']): ?>
                                    <option value="<?php echo $wx['id']; ?>"><?php echo $wx['status']; ?></option>
                                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="token">Token <span class="text-danger">*</span></label>
                        <div class="col-md-5">
                            <div class="form-material">
                                <input class="form-control" type="text" id="token" name="token"<?php echo isset($info['token'])? 'readonly':''; ?> placeholder="请输入Token.." value="<?php echo isset($info['token'])?$info['token']:''; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="encodingAESKey">EncodingAESKey <span class="text-danger">*</span></label>
                        <div class="col-md-5">
                            <div class="form-material">
                                <input class="form-control" type="text" id="encodingAESKey" name="encodingAESKey" placeholder="请输入EncodingAESKey.." value="<?php echo isset($info['encodingAESKey'])?$info['encodingAESKey']:''; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="appId">AppID <span class="text-danger">*</span></label>
                        <div class="col-md-5">
                            <div class="form-material">
                                <input class="form-control" type="text" id="appId" name="appId" placeholder="请输入AppId.." value="<?php echo isset($info['appId'])?$info['appId']:''; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="appSecret">AppSecret <span class="text-danger">*</span></label>
                        <div class="col-md-5">
                            <div class="form-material">
                                <input class="form-control" type="text" id="appSecret" name="appSecret" placeholder="请输入AppSecret.." value="<?php echo isset($info['appSecret'])?$info['appSecret']:''; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="appSecret">是否禁用 <span class="text-danger">*</span></label>
                        <div class="col-md-5">
                            <div>
                                <label class="css-input css-radio css-radio-primary push-10-r">
                                    <input type="radio" value="1" name="if_disabled" <?php echo !empty($info['if_disabled']) && $info['if_disabled']==1?'checked' : ''; ?>><span></span> 是
                                </label>
                                <label class="css-input css-radio css-radio-primary">
                                    <input type="radio" value="0" name="if_disabled" <?php echo !empty($info['if_disabled']) && $info['if_disabled']==2?'checked' : ''; ?>><span></span> 否
                                </label>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="form-group" style="padding-left:20%;">
                        <div class="col-xs-5">
                            <button class="btn btn-block btn-primary" type="submit"><i class="fa fa-send pull-left"></i>提交</button>
                        </div>
                        <div class="col-xs-3">
                            <button class="btn btn-minw btn-info" type="button" onclick="javascript:history.go(-1);">返回</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Step 1 -->

            <!-- Step 2 -->
            <div class="tab-pane fade fade-right push-30-t push-50" id="simple-progress-step2">
                <form  class="js-validation-wxpay form-horizontal" action="#" method="post">
                    <input type="hidden" name="id" value="<?php echo isset($pay['id'])?$pay['id']:''; ?>" />
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="mchid">MchId <span class="text-danger">*</span></label>
                        <div class="col-md-5">
                            <div class="form-material">
                                <input class="form-control" type="text" id="mchid" name="mchid" placeholder="请输入MchId.." value="<?php echo isset($pay['mchid'])?$pay['mchid']:''; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="pay_key">Pay_Key <span class="text-danger">&nbsp;</span></label>
                        <div class="col-md-7">
                            <div class="form-material">
                                <input class="form-control" type="text" id="pay_key" name="pay_key" placeholder="请输入Pay_Key.." value="<?php echo isset($pay['pay_key'])?$pay['pay_key']:''; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="apiclient_cert">Apiclient_Cert <span class="text-danger">*</span></label>
                        <div class="col-md-5">
                            <div class="form-material">
                                <input class="form-control" type="text" id="apiclient_cert" name="apiclient_cert" placeholder="请输入Apiclient_Cert.." value="<?php echo isset($pay['apiclient_cert'])?$pay['apiclient_cert']:''; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="apiclient_key">Apiclient_key <span class="text-danger">*</span></label>
                        <div class="col-md-5">
                            <div class="form-material">
                                <input class="form-control" type="text" id="apiclient_key" name="apiclient_key" placeholder="请输入Apiclient_key.." value="<?php echo isset($pay['apiclient_key'])?$pay['apiclient_key']:''; ?>">
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="form-group" style="padding-left:20%;">
                        <div class="col-xs-5">
                            <button class="btn btn-block btn-primary" type="submit"><i class="fa fa-send pull-left"></i>提交</button>
                        </div>
                        <div class="col-xs-3">
                            <button class="btn btn-minw btn-info" type="button" onclick="javascript:history.go(-1);">返回</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Step 2 -->

            <!-- Step 3 -->
            <div class="tab-pane fade fade-right push-30-t push-50" id="simple-progress-step3">
                <form  class="js-validation-wxpay form-horizontal" action="#" method="post">
                    <input type="hidden" name="id" value="<?php echo isset($pay['id'])?$pay['id']:''; ?>" />
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="mchid">MchId <span class="text-danger">*</span></label>
                        <div class="col-md-5">
                            <div class="form-material">
                                <input class="form-control" type="text" id="mchid" name="mchid" placeholder="请输入MchId.." value="<?php echo isset($pay['mchid'])?$pay['mchid']:''; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="pay_key">Pay_Key <span class="text-danger">&nbsp;</span></label>
                        <div class="col-md-7">
                            <div class="form-material">
                                <input class="form-control" type="text" id="pay_key" name="pay_key" placeholder="请输入Pay_Key.." value="<?php echo isset($pay['pay_key'])?$pay['pay_key']:''; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="apiclient_cert">Apiclient_Cert <span class="text-danger">*</span></label>
                        <div class="col-md-5">
                            <div class="form-material">
                                <input class="form-control" type="text" id="apiclient_cert" name="apiclient_cert" placeholder="请输入Apiclient_Cert.." value="<?php echo isset($pay['apiclient_cert'])?$pay['apiclient_cert']:''; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="apiclient_key">Apiclient_key <span class="text-danger">*</span></label>
                        <div class="col-md-5">
                            <div class="form-material">
                                <input class="form-control" type="text" id="apiclient_key" name="apiclient_key" placeholder="请输入Apiclient_key.." value="<?php echo isset($pay['apiclient_key'])?$pay['apiclient_key']:''; ?>">
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="form-group" style="padding-left:20%;">
                        <div class="col-xs-5">
                            <button class="btn btn-block btn-primary" type="submit"><i class="fa fa-send pull-left"></i>提交</button>
                        </div>
                        <div class="col-xs-3">
                            <button class="btn btn-minw btn-info" type="button" onclick="javascript:history.go(-1);">返回</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Step 3 -->

            <!-- Step 4 -->
            <div class="tab-pane fade fade-right push-30-t push-50" id="simple-progress-step4">
                <form  class="js-validation-wxpay form-horizontal" action="#" method="post">
                    <input type="hidden" name="id" value="<?php echo isset($pay['id'])?$pay['id']:''; ?>" />
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="mchid">MchId <span class="text-danger">*</span></label>
                        <div class="col-md-5">
                            <div class="form-material">
                                <input class="form-control" type="text" id="mchid" name="mchid" placeholder="请输入MchId.." value="<?php echo isset($pay['mchid'])?$pay['mchid']:''; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="pay_key">Pay_Key <span class="text-danger">&nbsp;</span></label>
                        <div class="col-md-7">
                            <div class="form-material">
                                <input class="form-control" type="text" id="pay_key" name="pay_key" placeholder="请输入Pay_Key.." value="<?php echo isset($pay['pay_key'])?$pay['pay_key']:''; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="apiclient_cert">Apiclient_Cert <span class="text-danger">*</span></label>
                        <div class="col-md-5">
                            <div class="form-material">
                                <input class="form-control" type="text" id="apiclient_cert" name="apiclient_cert" placeholder="请输入Apiclient_Cert.." value="<?php echo isset($pay['apiclient_cert'])?$pay['apiclient_cert']:''; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="apiclient_key">Apiclient_key <span class="text-danger">*</span></label>
                        <div class="col-md-5">
                            <div class="form-material">
                                <input class="form-control" type="text" id="apiclient_key" name="apiclient_key" placeholder="请输入Apiclient_key.." value="<?php echo isset($pay['apiclient_key'])?$pay['apiclient_key']:''; ?>">
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="form-group" style="padding-left:20%;">
                        <div class="col-xs-5">
                            <button class="btn btn-block btn-primary" type="submit"><i class="fa fa-send pull-left"></i>提交</button>
                        </div>
                        <div class="col-xs-3">
                            <button class="btn btn-minw btn-info" type="button" onclick="javascript:history.go(-1);">返回</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Step 4 -->
        </div>
        <!-- END Steps Content -->
        <!-- END Form -->
    </div>
    <!-- END Simple Progress Wizard -->
</div>


<!-- Google Maps, initialized in js/pages/frontend_contact.js, for more examples you can check out https://hpneo.github.io/gmaps/ -->
<div class="bg-white" id="js-map-contact" style="height: 350px;"></div>

    <!-- END Sign Up Today -->
  </main>
  <!-- END Main Container -->
  <!-- Footer -->
  <footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix">
    <div class="pull-right"> Crafted with <i class="fa fa-heart text-city"></i> by <a class="font-w600" href="http://goo.gl/vNS3I" target="_blank">pixelcave</a> </div>
    <div class="pull-left"> <a class="font-w600" href="javascript:void(0)" target="_blank">OneUI 1.0</a> &copy; <span class="js-year-copy"></span> </div>
  </footer>
  <!-- END Footer -->
  
</div>
<!-- END Page Container -->
<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
<script src="<?php echo Config('public'); ?>assets/js/core/jquery.min.js"></script>
<script src="<?php echo Config('public'); ?>assets/js/core/bootstrap.min.js"></script>
<script src="<?php echo Config('public'); ?>assets/js/core/jquery.slimscroll.min.js"></script>
<script src="<?php echo Config('public'); ?>assets/js/core/jquery.scrollLock.min.js"></script>
<script src="<?php echo Config('public'); ?>assets/js/core/jquery.appear.min.js"></script>
<script src="<?php echo Config('public'); ?>assets/js/core/jquery.countTo.min.js"></script>
<script src="<?php echo Config('public'); ?>assets/js/core/jquery.placeholder.min.js"></script>
<script src="<?php echo Config('public'); ?>assets/js/core/js.cookie.min.js"></script>
<script src="<?php echo Config('public'); ?>assets/js/app.js"></script>
<!-- Page JS Code -->
<script>
 $(function () {
   // Init page helpers (Appear plugin)
   App.initHelpers('appear');
 });
</script>

<script src="<?php echo Config('public'); ?>assets/js/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="<?php echo Config('public'); ?>assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo Config('public'); ?>assets/js/common.js"></script>
<script src="<?php echo Config('public'); ?>assets/js/pages/pages_form_wxapi.js"></script>
<script>
    $(function () {
        App.initHelpers('notify');
    });
</script>

</body>
</html>
