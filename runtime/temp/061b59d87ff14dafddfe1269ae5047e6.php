<?php if (!defined('THINK_PATH')) exit(); /*a:8:{s:86:"D:\phpStudy\PHPTutorial\WWW\tpcms\public/../application/admin\view\archives\store.html";i:1515465602;s:83:"D:\phpStudy\PHPTutorial\WWW\tpcms\public/../application/admin\view\public\base.html";i:1512099526;s:89:"D:\phpStudy\PHPTutorial\WWW\tpcms\public/../application/admin\view\public\common_css.html";i:1511928198;s:88:"D:\phpStudy\PHPTutorial\WWW\tpcms\public/../application/admin\view\public\common_js.html";i:1515144126;s:85:"D:\phpStudy\PHPTutorial\WWW\tpcms\public/../application/admin\view\public\header.html";i:1511850195;s:83:"D:\phpStudy\PHPTutorial\WWW\tpcms\public/../application/admin\view\public\menu.html";i:1515224134;s:85:"D:\phpStudy\PHPTutorial\WWW\tpcms\public/../application/admin\view\public\footer.html";i:1510538016;s:86:"D:\phpStudy\PHPTutorial\WWW\tpcms\public/../application/admin\view\public\sidebar.html";i:1510537129;}*/ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{csrf_token()}}">
  <title>tp5cms</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="__STATIC__/node_modules/bootstrap/dist/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="__STATIC__/node_modules/font-awesome/css/font-awesome.min.css">
<!--icheck-->
<link rel="stylesheet" href="__STATIC__/node_modules/icheck/skins/all.css">
<!-- Theme style -->
<link rel="stylesheet" href="__STATIC__/admin/css/AdminLTE.min.css">
<link rel="stylesheet" href="__STATIC__/admin/css/skins/_all-skins.min.css">
<link rel="stylesheet" href="__STATIC__/admin/css/style.css">

  <!-- jQuery 3 -->
<script src="__STATIC__/node_modules/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<!--<script src="__STATIC__/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>-->
<script type="text/javascript" src="__STATIC__/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="__STATIC__/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!--layer-->
<script src="__STATIC__/plugins/layer/layer.js"></script>
<!--bootBox-->
<script src="https://cdn.bootcss.com/bootbox.js/4.4.0/bootbox.min.js"></script>
<!--icheck-->
<script src="__STATIC__/node_modules/icheck/icheck.min.js"></script>
<!-- AdminLTE App -->
<script src="__STATIC__/admin/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="__STATIC__/admin/js/demo.js"></script>






</head>

<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo url('index/index'); ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>H</b>L</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>tp5</b>cms</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"> <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">管理员信息</a></li>
                        <li><a href="">修改密码</a></li>
                        <li class="divider"></li>
                        <li><a href="">退出登录</a></li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>

  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>admin</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <!--
        <ul class="sidebar-menu" id="menu" data-widget="tree">
            <li class="active">
                <a href="<?php echo url('Index/index'); ?>"><i class="fa fa-home"></i> <span> Home </span> </a>
            </li>
            <li class="treeview">
                <a href="javascript:;">
                    <i class="fa fa-th-large"></i> <span> Base Modules </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?php echo url('category/index'); ?>">
                            <i class="fa fa-th-large"></i>
                            <span> Category </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo url('menu/index'); ?>">
                            <i class="fa fa-bars"></i>
                            <span> Menu </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo url('models/index'); ?>">
                            <i class="fa fa-database"></i>
                            <span> Models </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo url('fields/index'); ?>">
                            <i class="fa fa-rss-square"></i>
                            <span> Fields </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="javascript:;">
                    <i class="fa fa-cog"></i> <span> Websets </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?php echo url('webset/confList'); ?>">
                            <i class="fa fa-circle-o text-aqua"></i>
                            management
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo url('webset/index'); ?>">
                            <i class="fa fa-circle-o text-yellow"></i>
                            List
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        -->
        <ul class="sidebar-menu" data-widget="tree">
            <?php if(is_array($menu) || $menu instanceof \think\Collection || $menu instanceof \think\Paginator): if( count($menu)==0 ) : echo "" ;else: foreach($menu as $key=>$vo): if($vo['_level'] == 1 && $vo['menu_url'] == 'admin/index/index'): ?>
            <li <?php if($route == $vo['module']): ?>class="active"<?php else: ?>class=""<?php endif; ?>>
                <a href="<?php echo url($vo['menu_url']); ?>">
                    <i class="fa <?php echo $vo['menu_icon']; ?>"></i>
                    <span> <?php echo $vo['menu_title']; ?> </span>
                </a>
            </li>
            <?php elseif($vo['_level'] == 1): ?>
            <li  class="treeview">
                <a href="<?php echo url($vo['menu_url']); ?>">
                    <i class="fa <?php echo $vo['menu_icon']; ?>"></i>
                    <span> <?php echo $vo['menu_title']; ?> </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <?php if(is_array($menu) || $menu instanceof \think\Collection || $menu instanceof \think\Paginator): if( count($menu)==0 ) : echo "" ;else: foreach($menu as $key=>$to): if($to['menu_pid'] == $vo['menu_id']): ?>
                    <li <?php if($route == $to['module']): ?>class="active"<?php else: ?>class=""<?php endif; ?>>
                        <a href="<?php echo url($to['menu_url']); ?>">
                            <i class="fa <?php echo $to['menu_icon']; ?>"></i>
                            <?php echo $to['menu_title']; ?>
                        </a>
                    </li>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </li>
            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
<script>
$(function () {
    if ($('.treeview-menu li').hasClass('active')) {
        $('.treeview-menu li.active').parents('.treeview').addClass('active').addClass('menu-open');
    }
})
</script>
<div>

</div>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
<script type="text/javascript" src="__STATIC__/admin/js/common.js"></script>
<style>
    .checkbox-inline, .radio-inline {
        padding-left: 0;
        padding-right: 20px;
    }
</style>
<section class="content-header">
    <h1>
        添加文档
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo url('index/index'); ?>"><i class="fa fa-home"></i> 首页 </a></li>
        <li><a href="<?php echo url('archives/index'); ?>"><i class="fa fa-database"></i> 文档管理</a></li>
        <li class="active"> 添加文档</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">添加文档</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" class="form-horizontal" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">文档标题：</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">关键字：</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="keywords">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">文档作者：</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="author">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">所属栏目：</label>
                            <div class="col-sm-9">
                                <?php if(is_array($cates) || $cates instanceof \think\Collection || $cates instanceof \think\Paginator): if( count($cates)==0 ) : echo "" ;else: foreach($cates as $key=>$vo): if($cate_id == $vo['cate_id']): ?>
                                <input type="text" class="form-control" name="cate_id" value="<?php echo $vo['_cate_name']; ?>" disabled >
                                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">点击数：</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="click" value="50">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">文档来源：</label>
                            <div class="col-sm-9">
                                <input type="url" class="form-control" name="source">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">文档描述：</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="desc"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">文档属性：</label>
                            <div class="col-sm-9">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="attr[]" value=""> 文档属性1
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="attr[]" value=""> 文档属性2
                                </label>
                            </div>
                        </div>
                        <div class="form-group" >
                            <label for="" class="col-sm-2 control-label" >自定义字段</label >
                            <div class="col-sm-9" >
                                <div class="panel panel-default" >
                                    <div class="panel-body" >
                                        <?php if(is_array($diyFields) || $diyFields instanceof \think\Collection || $diyFields instanceof \think\Paginator): if( count($diyFields)==0 ) : echo "" ;else: foreach($diyFields as $key=>$vo): ?>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"><?php echo $vo['field_cname']; ?>：</label>
                                            <div class="col-sm-9">
                                                <?php switch($vo['field_type']): case "1": ?>
                                                <input type="text" class="form-control" name="<?php echo $vo['field_ename']; ?>">
                                                <?php break; case "2": 
                                                if ($vo['field_values']) {
                                                    $arr = explode(',', $vo['field_values']);
                                                    foreach ($arr as $k1 => $v1) {
                                                        echo '<label class="radio-inline">';
                                                        echo "<input type='radio' name='".$vo['field_ename']."' class='form-control' /> $v1 ";
                                                        echo '</label>';
                                                    }
                                                }
                                                 break; case "3": 
                                                if ($vo['field_values']) {
                                                $arr = explode(',', $vo['field_values']);
                                                foreach ($arr as $k1 => $v1) {
                                                echo '<label class="checkbox-inline">';
                                                echo "<input type='checkbox' name='".$vo['field_ename']."[]' class='form-control' /> $v1 ";
                                                echo '</label>';
                                                }
                                                }
                                                 break; case "4": 
                                                if($vo['field_values']){
                                                    $arr=explode(',', $vo['field_values']);
                                                    echo "<select  class='form-control' name='".$vo['field_ename']."'>";
                                                    foreach ($arr as $k1 => $v1) {
                                                        echo "<option value='".$v1."'>".$v1."</option>";
                                                    }
                                                    echo "</select>";
                                                }
                                                 break; case "6": ?>
                                                <input type="file" class="form-control" name="<?php echo $vo['field_ename']; ?>">
                                                <?php break; case "5": ?>
                                                <textarea class="form-control" name="<?php echo $vo['field_ename']; ?>"></textarea>
                                                <?php break; case "7": ?>
                                                <input type="number" class="form-control" name="<?php echo $vo['field_ename']; ?>">
                                                <?php break; case "8": ?>
                                                <input type="number" class="form-control" name="<?php echo $vo['field_ename']; ?>">
                                                <?php break; case "9": ?>
                                                <textarea name="content" id="<?php echo $vo['field_ename']; ?>" style="height:280px;width:100%;"></textarea>
                                                <?php break; default: ?>
                                                <input type="text" class="form-control" name="<?php echo $vo['field_ename']; ?>">
                                                <?php endswitch; ?>
                                            </div>
                                        </div>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </div >
                                </div >
                            </div >
                        </div >
                        <div class="form-group">
                            <label class="col-sm-2 control-label">文档缩略图：</label>
                            <div class="col-sm-9">
                                <a class="btn btn-primary" data-toggle="modal" href="#modals">上传文件</a>
                                <input type="hidden" name="pic" id="pic" value=""/>
                                <div class="input-group" style="margin-top:5px;">
                                    <img src="__STATIC__/admin/images/nopic.jpg" class="img-responsive img-thumbnail" width="150">
                                    <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="removeImg(this)">×</em>
                                </div>
                                <div class="modal fade" id="modals">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">文件上传</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="dropzone" id="drop"></div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" id="remove-all">取消</button>
                                                <button type="button" class="btn btn-default" id="submit-all">确定上传</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">文档内容：</label>
                            <div class="col-sm-9">
                                <textarea id="container" name="content" style="height:400px;width:100%;"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <div class="col-md-offset-1">
                            <button type="submit" class="btn btn-success">添加</button>
                            <button type="button" class="btn btn-primary" onclick="window.history.go(-1)">返回</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
<!-- 百度编辑器配置文件 -->
<script type="text/javascript" src="__STATIC__/plugins/ueditor/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="__STATIC__/plugins/ueditor/ueditor.all.min.js"></script>
<link rel="stylesheet" type="text/css" href="__STATIC__/plugins/dropzone/dropzone.css" />
<script type="text/javascript" src="__STATIC__/plugins/dropzone/dropzone.js"></script>
<script type="text/javascript">
    var ue = UE.getEditor('container', {});
    // 处理文件上传
    Dropzone.autoDiscover = false;
    $("#drop").dropzone({
        url: "<?php echo url('archives/upImg'); ?>",
        paramName: 'pic',
        acceptedFiles: "image/*",
        addRemoveLinks: true,
        uploadMultiple: false,
        maxFilesize: 3,
        maxFiles: 1,
        autoProcessQueue: false,
        dictDefaultMessage: "选择上传文件",
        dictRemoveFile: '移除',
        dictCancelUpload: '取消',
        dictInvalidFileType: '请上传图片',
        init: function() {
            var submitButton = document.querySelector("#submit-all");
            var removeButton = document.querySelector("#remove-all");
            var myDropzone = this;
            submitButton.addEventListener("click", function() {
                myDropzone.processQueue();
            });
            //只显示限定的文件数量
            this.on("maxfilesexceeded", function(file) {
                myDropzone.removeFile(file);
            });
            // 上传成功时清空预览区域，关闭模态框
            myDropzone.on("complete", function(file) {
                myDropzone.removeFile(file);
                $('#modals').modal('hide');
            });
            // 移除文件
            removeButton.addEventListener("click", function() {
                myDropzone.removeAllFiles();
                $('#modals').modal('hide');
            });
            // 成功后的回调
            this.on("success", function(file, res) {
                var path = $.parseJSON( res );
                if (path.valid == 1) {
                    $('.img-thumbnail').attr('src', path.msg);
                    $('#pic').val(path.msg);
                }
            });
        }
    });
    //移除图片
    function removeImg(obj) {
        var path = $('#pic').val();
        if (path == '') {
            layer.alert('暂无图片,请先上传图片');
            return false;
        }
        $('#pic').val('');
        $.ajax({
            url: "<?php echo url('delImg'); ?>",
            type: 'POST',
            data: {id:'',path:path},
            dataType: 'json',
            success: function (res) {
                if (res == 1) {
                    layer.alert('删除图片成功');
                    $('#pic').val('');
                    $(obj).prev('img').attr('src','__STATIC__/admin/images/nopic.jpg');
                }
            }
        })
    }
</script>
<?php foreach($longText as $k => $v):?>
<script>
    UE.getEditor('<?php echo $v['field_ename']; ?>', {toolbars:[[
            'fullscreen', 'source', '|', 'undo', 'redo', '|',
            'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|',
            'rowspacingtop', 'rowspacingbottom', 'lineheight', '|',
            'customstyle', 'paragraph', 'fontfamily', 'fontsize'
        ]]});
</script>
<?php endforeach;?>

  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
</footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">

    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">

        </div>
    </div>
</aside>
<!-- /.control-sidebar -->
<div class="control-sidebar-bg"></div>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

</body>
</html>
