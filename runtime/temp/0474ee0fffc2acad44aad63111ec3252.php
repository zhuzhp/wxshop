<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:66:"D:\www\wxshop\public/../application/admin\view\article\modify.html";i:1491978100;s:63:"D:\www\wxshop\public/../application/admin\view\public\base.html";i:1491877418;s:62:"D:\www\wxshop\public/../application/admin\view\public\nav.html";i:1491788115;}*/ ?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-focus">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title>
<?php echo $title; ?>列表
<?php $groupnav = 'Webdata'; $activenav = 'Article/index'; ?>
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
<!-- Contact Form -->
<div class="bg-white">
    <section class="content content-boxed">
        <!-- Section Content -->
        <div class="row items-push push-50-t push-30">
            <div class="col-md-6 col-md-offset-3">
                <form class="js-validation-article form-horizontal push-10-t" action="<?php echo url($tablename.'/'.$modify); ?>" method="post">
                    <input type="hidden" name="id" value="<?php echo isset($info['id'])?$info['id']:''; ?>">
                    <div class="form-group">
                        <div class="col-sm-9">
                            <div class="form-material">
                                <select class="form-control input-sm" id="cateid" name="cateid">
                                    <?php if(empty($info['cateid']) || (($info['cateid'] instanceof \think\Collection || $info['cateid'] instanceof \think\Paginator ) && $info['cateid']->isEmpty())): ?><option value="">--请选择文章分类--</option><?php else: ?><option value="<?php echo $info['cateid']; ?>"><?php echo $info['catename']; ?></option><?php endif; if(is_array($categorylist) || $categorylist instanceof \think\Collection || $categorylist instanceof \think\Paginator): $i = 0; $__LIST__ = $categorylist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;if($info['cateid'] != $cate['id']): ?>
                                        <option value="<?php echo $cate['id']; ?>"><span><?php echo indent($cate['level']); ?></span><?php echo $cate['catename']; ?></option>
                                        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                                <label for="cateid">文章分类</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9">
                            <div class="form-material">
                                <input class="form-control" type="text" id="title" name="title" value="<?php echo isset($info['title'])?$info['title']:''; ?>" placeholder="输入标题.">
                                <label for="title">文章标题</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <div class="form-material">
                                <textarea class="form-control" id="info" name="info" rows="3" placeholder="简要描述."><?php echo isset($info['info'])?$info['info']:''; ?></textarea>
                                <label for="info">文章简介</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <div class="form-material">
                                <textarea id="content" style="height:460px;" name="content"><?php echo isset($info['content'])?$info['content']:''; ?></textarea>
                                <label for="content">详细内容</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="form-material form-material-primary">
                                <div class="col-md-12 push-20-t" id="imageupload" style="<?php echo isset($info['image'])&&$info['image']?'display:none;':''; ?>">
                                    <div class="row" id="upload"></div>
                                </div>
                                <input type="hidden" name="image" id="image" value="<?php echo isset($info['image'])?$info['image']:''; ?>">
                                <div class="img-container" style="<?php echo isset($info['image'])&&$info['image']?'':'display:none;'; ?>"> <img class="img-responsive" src="<?php echo isset($info['image'])?$info['image']:''; ?>" alt="">
                                    <div class="img-options">
                                        <div class="img-options-content">
                                            <a class="btn btn-sm btn-default" href="javascript:void(0)"><i class="fa fa-pencil"></i> 修改</a></div>
                                    </div>
                                </div>
                                <label for="image">封面图片</label>
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="form-group">
                        <div class="col-xs-6">
                            <button class="btn btn-block btn-primary" type="submit"><i class="fa fa-send pull-left"></i>提交</button>
                        </div>
                        <div class="col-xs-3">
                            <button class="btn btn-minw btn-info" type="button" onclick="javascript:history.go(-1);">返回</button>
                        </div>
                    </div>
                    <!--<input type="hidden" name="__token__" value="<?php echo \think\Request::instance()->token(); ?>" />-->
                </form>
            </div>
        </div>
        <!-- END Section Content -->
    </section>
</div>
<!-- END Contact Form -->
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

<script type="text/javascript" charset="utf-8" src="<?php echo Config('public'); ?>ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo Config('public'); ?>ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="<?php echo Config('public'); ?>ueditor/lang/zh-cn/zh-cn.js"></script>
<script src="<?php echo Config('public'); ?>assets/js/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="<?php echo Config('public'); ?>assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo Config('public'); ?>assets/js/plugins/uploadify/jquery.Huploadify.js"></script>
<script src="<?php echo Config('public'); ?>assets/js/common.js"></script>
<script src="<?php echo Config('public'); ?>assets/js/pages/pages_form_article.js"></script>
<script>
    $(function () {
        App.initHelpers('notify');
        var ue = UE.getEditor('content');
        $('#upload').Huploadify({
                    auto:true,
                    fileTypeExts:'*.jpg;*.png;',
                    multi:false,
                    formData:{type:1,key:''},
                    showUploadedPercent:true,//是否实时显示上传的百分比，如20%
                    showUploadedSize:true,
                    uploader:'<?php echo url('File/uploadimg'); ?>',
                onUploadStart:function(){
            //alert('开始上传');
        },
        onInit:function(){
            //alert('初始化');
        },
        onUploadComplete:function(file,fileurl){
            fileurl=JSON.parse(fileurl);
            console.log(fileurl);
            if(fileurl.code == '1'){
                errorMesg('上传成功！','成功','success');
                $("#imageupload").hide();
                $(".img-container").show();
                $(".img-container img").attr("src",fileurl.data);
                $("#image").val(fileurl.data);
            }else{
                errorMesg('上传失败！');
            }
        },
        onDelete:function(file){
            console.log('删除的文件：'+file);
            console.log(file);
        }
    });
        $(".img-options-content a").click(function(){
            $("#imageupload").show();
            $(".img-container").hide();
        });
    });

</script>

</body>
</html>
