<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:65:"D:\www\wxshop\public/../application/admin\view\product\index.html";i:1491957922;s:63:"D:\www\wxshop\public/../application/admin\view\public\base.html";i:1491877418;s:62:"D:\www\wxshop\public/../application/admin\view\public\nav.html";i:1491788115;}*/ ?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-focus">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title>
<?php echo $title; ?>列表
<?php $groupnav = 'Webdata'; $activenav = 'Product/index'; ?>
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
    
<div class="bg-primary-dark">
  <section class="content content-full content-boxed">
    <!-- Section Content -->
    <div class="push-30-t push-20 text-center">
      <h1 class="h2 text-white push-10 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Support Center.</h1>
      <h2 class="h5 text-white-op visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">Building products is not our only job. We care about our clients.</h2>
    </div>
    <!-- END Section Content -->
  </section>
</div>
<!-- END Hero Content -->
<div class="bg-white">
  <section class="content content-boxed overflow-hidden">
    <div class="content-grid">
    <form id="articleForm" action="<?php echo url($tablename.'/index'); ?>" method="get">
      <div class="form-inline">
        <div class="input-group push-5">
          <a class="btn btn-sm btn-default" href="<?php echo url($tablename.'/add'); ?>">添加<?php echo $title; ?></a>
          <span style="display:inline-block; width:20px; text-align:center; color:#ddd;">|</span>
          <a class="btn btn-sm btn-default" href="<?php echo url('ProductCategory/index'); ?>"><?php echo $title; ?>分类</a>
        </div>
        <div class="input-group push-5">
          <input type="text" class="form-control input-sm" placeholder="搜索商品名称" name="key" value="<?php echo isset($params['key'])?$params['key']:''; ?>">
          <span class="input-group-btn">
          <button class="btn btn-sm btn-default" type="button" onclick="$('#articleForm').submit();"> <i class="fa fa-search"></i> </button>
          </span>
        </div>
        <select class="form-control input-sm" name="cateid" onchange="$('#articleForm').submit();">
          <?php if(empty($params['cateid']) || (($params['cateid'] instanceof \think\Collection || $params['cateid'] instanceof \think\Paginator ) && $params['cateid']->isEmpty())): ?><option value="">--请选择商品分类--</option><?php else: ?><option value="<?php echo $params['cateid']; ?>"><?php echo getArticleCateName($params['cateid']); ?></option><?php endif; if(is_array($categorylist) || $categorylist instanceof \think\Collection || $categorylist instanceof \think\Paginator): $i = 0; $__LIST__ = $categorylist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;if($cate['id'] != $params['cateid']): ?>
          <option value="<?php echo $cate['id']; ?>"><span style="padding-left:<?php echo $cate['level']; ?>px;"><?php echo indent($cate['level']); ?></span><?php echo $cate['catename']; ?></option>
          <?php endif; endforeach; endif; else: echo "" ;endif; if(!(empty($params['cateid']) || (($params['cateid'] instanceof \think\Collection || $params['cateid'] instanceof \think\Paginator ) && $params['cateid']->isEmpty()))): ?><option value="">--请选择商品分类--</option><?php endif; ?>
        </select>
        <select class="form-control input-sm" name="pagesize" onchange="$('#articleForm').submit();">
          <option value="10" selected="">每页10条</option>
          <option value="20">每页20条</option>
          <option value="50">每页50条</option>
          <option value="100">每页100条</option>
        </select>
      </div>
      <div class="row">
        <table class="js-table-checkable table table-hover">
          <thead>
            <tr>
              <th class="text-center" style="width: 70px;"> <label class="css-input css-checkbox css-checkbox-primary">
                #
                <span></span> </label>
              </th>
              <th style="width: 15%;">商品名称</th>
              <th>所属分类</th>
              <th class="hidden-xs" style="width: 20%;">添加/修改时间</th>
			  <th style="width: 15%;">操作</th>
              
            </tr>
          </thead>
          <tbody>
          
          <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
          <tr class="active">
            <td class="text-center">
              <label class="css-input css-checkbox css-checkbox-primary">
                <?php echo $vo['id']; ?>
                <span></span>
              </label>
            </td>
            <td><p class="font-w600 push-5"><?php echo $vo['title']; ?></p></td>
            <td><p class="text-muted remove-margin-b"><?php echo getArticleCateName($vo['cateid']); ?></p></td>
            <td class="hidden-xs"><em class="text-muted"><?php echo $vo['update_time']; ?></em></td>
            <td>
			  <a href="<?php echo url($tablename.'/edit',['id'=>$vo['id']]); ?>" class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="修改"><i class="fa fa-pencil"></i></a>
			  <a data-href="<?php echo url($tablename.'/delete',['id'=>$vo['id']]); ?>" class="btn btn-xs btn-default delete-one" type="button" data-toggle="tooltip" title="" data-original-title="删除"><i class="fa fa-times"></i></a>
            </td>
          </tr>
          <?php endforeach; endif; else: echo "" ;endif; ?>
          </tbody>
          
        </table>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="dataTables_info" style="padding-top: 24px;">当前 <strong><?php echo $list->currentPage(); ?></strong>/<strong><?php echo $list->lastPage(); ?></strong> 共 <strong> <?php echo $list->total(); ?></strong>条记录</div>
        </div>
        <div class="col-sm-6"  style="text-align: right;">
          <div class="dataTables_paginate paging_simple_numbers">
            <?php echo $list->render(); ?>
          </div>
        </div>
      </div>
      </form>
    </div>
  </section>
</div>

    <!-- END Sign Up Today -->
  </main>
  <!-- END Main Container -->
  <!-- Footer -->
  <footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix">
    <div class="pull-right"> Crafted with <i class="fa fa-heart text-city"></i> by <a class="font-w600" href="http://goo.gl/vNS3I" target="_blank">pixelcave</a> </div>
    <div class="pull-left"> <a class="font-w600" href="javascript:void(0)" target="_blank">OneUI 1.0</a> &copy; <span class="js-year-copy"></span> </div>
  </footer>
  <!-- END Footer -->
  
<!-- Top Modal -->
<!-- END Top Modal -->

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
<script src="<?php echo Config('public'); ?>assets/js/pages/pages_form_role.js"></script>
<script>
    $(function () {
        // Init page helpers (Table Tools helper)
        App.initHelpers('table-tools');
        App.initHelpers('notify');
        $(".delete-one").click(function(){
            var url = $(this).attr("data-href");
            if( !confirm('你确定要删除该条数据？') ){
                return false;
            }
            getUrl(url);
        });
    });
</script>

</body>
</html>
