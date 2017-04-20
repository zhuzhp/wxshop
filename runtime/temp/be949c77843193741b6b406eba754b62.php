<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"D:\www\wxshop\public/../application/admin\view\role\modifyrole.html";i:1483004193;s:63:"D:\www\wxshop\public/../application/admin\view\public\base.html";i:1491877418;s:62:"D:\www\wxshop\public/../application/admin\view\public\nav.html";i:1491788115;}*/ ?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-focus">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title>
<?php echo $title; ?>列表
<?php $groupnav = 'Master'; $activenav = 'Role/index'; ?>
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
				<form action="<?php echo url($tablename.'/modifyrole',['id'=>$info['id']]); ?>" method="post">
                <!-- END Hero Content -->                
                <div class="bg-white">
                	<section class="content content-boxed overflow-hidden">
	                	<div class="content-grid">
	                		<div class="row">
	                			<table class="js-table-sections table table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 70px;"></th>                                        
                                        <th>名称</th>
                                        <th style="width: 15%;">上级菜单</th>
                                        <th class="hidden-xs" style="width: 15%;">地址</th>
                                    </tr>
                                </thead>
								<?php if(is_array($nav) || $nav instanceof \think\Collection || $nav instanceof \think\Paginator): $k = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;$fk = $key; if(empty($vo[4]) || (($vo[4] instanceof \think\Collection || $vo[4] instanceof \think\Paginator ) && $vo[4]->isEmpty())): ?>								
                                <tbody class="js-table-sections-header">
                                    <tr>                         
                                        <td class="text-center">                                        
                                            <i class="fa fa-angle-right"></i>                                                                                        
                                        </td>
                                        <td class="font-w600">
                                        	<label class="css-input css-checkbox css-checkbox-primary remove-margin-t remove-margin-b">
                                                <input type="checkbox" <?php if(in_array($key,$access)): ?>checked="true"<?php endif; ?> value="<?php echo $fk; ?>" name="role[]" class="<?php echo $fk; ?>" check="ch<?php echo $fk; ?>"><span></span>
                                            </label>
                                            <?php echo $vo[0]; ?></td>
                                        <td>
                                            --
                                        </td>
                                        <td class="hidden-xs">
                                            <em class="text-muted"><?php echo $vo[1]; ?></em>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
									<?php if(is_array($vo[3]) || $vo[3] instanceof \think\Collection || $vo[3] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo[3];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                                    <tr>
                                        <td class="text-center"></td>
                                        <td class="font-w600 text-success">
                                        	<label class="css-input css-checkbox css-checkbox-primary">
                                                <input type="checkbox" <?php if(in_array($key,$access)): ?>checked="true"<?php endif; ?> name="role[]" value="<?php echo $key; ?>" class="ch<?php echo $fk; ?>" check="<?php echo $fk; ?>"><span></span>
                                            </label>
                                        <?php echo $v[0]; ?></td>
                                        <td>
                                            <small><?php echo $vo[0]; ?></small>
                                        </td>
                                        <td class="hidden-xs">
                                            <small class="text-muted"><?php echo $v[1]; ?></small>
                                        </td>
                                    </tr>
									<?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                                <?php else: if(is_array($vo[3]) || $vo[3] instanceof \think\Collection || $vo[3] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo[3];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;$k = $key; ?>
                                <tbody class="js-table-sections-header">
                                    <tr>                         
                                        <td class="text-center">                                        
                                            <i class="fa fa-angle-right"></i>                                                                                        
                                        </td>
                                        <td class="font-w600">
                                        	<label class="css-input css-checkbox css-checkbox-primary remove-margin-t remove-margin-b">
                                                <input type="checkbox" <?php if(in_array($key,$access)): ?>checked="true"<?php endif; ?> value="<?php echo $key; ?>" name="role[]" class="<?php echo $k; ?>" check="ch<?php echo $k; ?>"><span></span>
                                                <input type="checkbox" <?php if(in_array($key,$access)): ?>checked="true"<?php endif; ?> name="role[]" value="<?php echo $fk; ?>" class="<?php echo $k; ?>">
                                            </label>
                                            <?php echo $v[0]; ?></td>
                                        <td>
                                            <?php echo $vo[0]; ?>
                                        </td>
                                        <td class="hidden-xs">
                                            <em class="text-muted"><?php echo $vo[1]; ?></em>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
									<?php if(is_array($v[3]) || $v[3] instanceof \think\Collection || $v[3] instanceof \think\Paginator): $i = 0; $__LIST__ = $v[3];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$chv): $mod = ($i % 2 );++$i;?>									
                                    <tr>
                                        <td class="text-center"></td>
                                        <td class="font-w600 text-success">
                                        	<label class="css-input css-checkbox css-checkbox-primary">
                                                <input type="checkbox" <?php if(in_array($key,$access)): ?>checked="true"<?php endif; ?> name="role[]" value="<?php echo $key; ?>" class="ch<?php echo $k; ?>" check="<?php echo $k; ?>"><span></span>
                                            </label>
                                        <?php echo $chv[0]; ?></td>
                                        <td>
                                            <small><?php echo $v[0]; ?></small>
                                        </td>
                                        <td class="hidden-xs">
                                            <small class="text-muted"><?php echo $chv[1]; ?></small>
                                        </td>
                                    </tr>
									<?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                                <?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; ?>                              
                            </table>
	                		</div>
	                	</div>                	
                	</section>
                </div>
				<div class="bg-gray-lighter">
                    <section class="content content-full content-boxed">
                        <!-- Section Content -->
                        <div class="push-20-t push-20 text-center">
                            <h3 class="h4 push-20 animated fadeIn" data-toggle="appear">确定你要提交以上权限?</h3>
                            <button type="submit" class="btn btn-rounded btn-noborder btn-lg btn-success animated bounceIn">提交</button>
                        </div>
                        <!-- END Section Content -->
                    </section>
                </div>
				</form>

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
<script src="<?php echo Config('public'); ?>assets/js/common.js"></script>
	<script>
            $(function () {
                // Init page helpers (Table Tools helper)
                App.initHelpers('table-tools');
                App.initHelpers('notify');
                $(".remove-margin-b input[type='checkbox']").change(function(){
                	var checkval = $(this).attr("check");
					var checkclass = $(this).attr("class");
                	var check = $(this).is(':checked');
					if(checkval){
						$("input."+checkval).prop("checked",check);
						$("input."+checkclass).prop("checked",check);
					}
                });
                $(".text-success input[type='checkbox']").change(function(){
                	var checkval = $(this).attr("check");
                	var checkclass = $(this).attr("class");
                	var check = false;
                	$("input."+checkclass).each(function(){
                    	if($(this).is(':checked')){
                			check = true;
                    	}
                	});
					if(checkval){
						$("input."+checkval).prop("checked",check);
					}
                });
                $('form').submit(function() {
                	var url = $(this).attr('action');
      				blockBody();
                	$.ajax({
    					cache: true,
    	                type: "POST",
    	                url:url,
    	                data:$(this).serialize(),
    	                async: false,
    	                error: function(request) {
    	                    alert("Connection error");
    	                },
    	                success: function(data) {
    						blockBodyRemove();
    	                    errorMesg(data);
    	                }
    				  });
              	  return false;
              	});
            });
        </script>
	

</body>
</html>
