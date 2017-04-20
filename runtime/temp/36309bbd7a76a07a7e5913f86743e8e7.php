<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"D:\www\wxshop\public/../application/admin\view\response\img.html";i:1492661700;}*/ ?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-focus">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title></title>
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
<div class="bg-white">
    <?php if($params['type'] == 'img'): ?>
    <form id="imgForm" action="<?php echo url('Response/img',['type'=>'img','id'=>$info['id']]); ?>" method="get">
        <div class="form-inline">
            <div class="input-group push-5">
                <a class="btn btn-sm btn-default" href="<?php echo url('Response/img',['type'=>'modify','id'=>$info['id']]); ?>">添加图文回复</a>
            </div>
            <div class="input-group push-5">
                <input type="text" class="form-control input-sm" placeholder="关键字|图文回复" name="key" value="<?php echo isset($params['key'])?$params['key']:''; ?>">
                          <span class="input-group-btn">
                          <button class="btn btn-sm btn-default" type="button" onclick="$('#imgForm').submit();"> <i class="fa fa-search"></i> </button>
                          </span>
            </div>

            <select class="form-control input-sm" name="pagesize" onchange="$('#imgForm').submit();">
                <option value="10" selected="">每页10条</option>
                <option value="20">每页20条</option>
                <option value="50">每页50条</option>
                <option value="100">每页100条</option>
            </select>
        </div>
        <div class="block-content">
            <table class="table">
                <thead>
                <tr>
                    <th class="text-center" style="width: 50px;">#</th>
                    <th style="width: 20%;">关键字</th>
                    <th class="hidden-xs">回复内容</th>
                    <th class="hidden-xs" style="width:15%;">封面图片</th>
                    <th class="text-center" style="width:10%;">时间</th>
                    <th class="text-center" style="width: 100px;">操作</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td class="text-center"><?php echo $vo['id']; ?></td>
                    <td><?php echo $vo['keyword']; ?></td>
                    <td class="hidden-xs"><?php echo $vo['content']; ?></td>
                    <td class="hidden-xs">
                        <img class="img-responsive" style="width:70px;height:40px;" src="<?php echo $vo['image']; ?>" alt="<?php echo $vo['keyword']; ?>">
                    </td>
                    <td class="text-center">
                        <?php echo $vo['update_time']; ?>
                    </td>
                    <td class="text-center">
                        <a href="<?php echo url('Response/img',['type'=>'modify','id'=>$info['id'],'edit_id'=>$vo['id']]); ?>" class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="修改"><i class="fa fa-pencil"></i></a>
                        <a data-href="<?php echo url('Response/delete',['type'=>'img','id'=>$info['id'],'edit_id'=>$vo['id']]); ?>" class="btn btn-xs btn-default delete-one" type="button" data-toggle="tooltip" title="" data-original-title="删除"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
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
        </div>

    </form>
    <?php endif; if($params['type'] == 'modify'): ?>
    <form class="js-validation-img form-horizontal" action="<?php echo url('Response/img',['type'=>'modify','id'=>$info['id']]); ?>" method="post">
        <!-- Steps Content -->
        <input type="hidden" name="edit_id" value="<?php echo isset($edit['id'])?$edit['id']:''; ?>">
        <div class="block-content tab-content">
            <!-- Step 1 -->
            <div class="tab-pane push-30-t push-50 active" id="simple-classic-step1">
                <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-2">
                        <label for="keyword">关键字</label>
                        <input class="form-control" type="text" id="keyword" name="keyword" placeholder="请输入关键字..." value="<?php echo isset($edit['keyword'])?$edit['keyword']:''; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-2">
                        <label for="content">回复内容</label>
                        <textarea class="form-control" id="content" name="content" rows="9" placeholder="请输入回复内容..."><?php echo isset($edit['content'])?$edit['content']:''; ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="form-material form-material-primary">
                            <div class="col-md-12 push-20-t" id="imageupload" style="<?php echo isset($edit['image'])&&$edit['image']?'display:none;':''; ?>">
                                <div class="row" id="upload"></div>
                            </div>
                            <input type="hidden" name="image" id="image" value="<?php echo isset($edit['image'])?$edit['image']:''; ?>">
                            <div class="img-container" style="<?php echo isset($edit['image'])&&$edit['image']?'':'display:none;'; ?>"> <img class="img-responsive" src="<?php echo isset($edit['image'])?$edit['image']:''; ?>" alt="">
                                <div class="img-options">
                                    <div class="img-options-content">
                                        <a class="btn btn-sm btn-default" href="javascript:void(0)"><i class="fa fa-pencil"></i> 修改</a></div>
                                </div>
                            </div>
                            <label for="image">封面图片</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Step 1 -->
            <br/>
            <div class="form-group" style="padding-left:20%;">
                <div class="col-xs-5">
                    <button class="btn btn-block btn-primary" type="submit"><i class="fa fa-send pull-left"></i>提交</button>
                </div>
                <div class="col-xs-3">
                    <a class="btn btn-minw btn-info" type="button" href="<?php echo url('Response/img',['type'=>'img','id'=>$info['id']]); ?>">返回</a>
                </div>
            </div>
        </div>
        <!-- END Steps Content -->
    </form>
    <?php endif; ?>
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
<script src="<?php echo Config('public'); ?>assets/js/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="<?php echo Config('public'); ?>assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo Config('public'); ?>assets/js/plugins/uploadify/jquery.Huploadify.js"></script>
<script src="<?php echo Config('public'); ?>assets/js/common.js"></script>
<script src="<?php echo Config('public'); ?>assets/js/pages/pages_form_img.js"></script>
<!-- Page JS Code -->
<script>
    $(function () {
        // Init page helpers (Appear plugin)
        App.initHelpers('appear');
        $(".delete-one").click(function(){
            var url = $(this).attr("data-href");
            if( !confirm('你确定要删除该图文消息？') ){
                return false;
            }
            getUrl(url);
        });

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
