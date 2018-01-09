<?php if (!defined('THINK_PATH')) exit(); /*a:8:{s:86:"D:\phpStudy\PHPTutorial\WWW\tpcms\public/../application/admin\view\archives\index.html";i:1515373888;s:83:"D:\phpStudy\PHPTutorial\WWW\tpcms\public/../application/admin\view\public\base.html";i:1512099526;s:89:"D:\phpStudy\PHPTutorial\WWW\tpcms\public/../application/admin\view\public\common_css.html";i:1511928198;s:88:"D:\phpStudy\PHPTutorial\WWW\tpcms\public/../application/admin\view\public\common_js.html";i:1515144126;s:85:"D:\phpStudy\PHPTutorial\WWW\tpcms\public/../application/admin\view\public\header.html";i:1511850195;s:83:"D:\phpStudy\PHPTutorial\WWW\tpcms\public/../application/admin\view\public\menu.html";i:1515224134;s:85:"D:\phpStudy\PHPTutorial\WWW\tpcms\public/../application/admin\view\public\footer.html";i:1510538016;s:86:"D:\phpStudy\PHPTutorial\WWW\tpcms\public/../application/admin\view\public\sidebar.html";i:1510537129;}*/ ?>
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
    
<script type="text/javascript" src="__STATIC__/admin/js/check_config.js"></script>
<style>
    td, tr, th {
        vertical-align: middle !important;
        text-align: center;
    }
</style>
<section class="content-header">
    <h1>
        文档列表
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo url('index/index'); ?>"><i class="fa fa-home"></i> 首页 </a></li>
        <li><a href="<?php echo url('archives/index'); ?>"><i class="fa fa-database"></i>文档管理</a></li>
        <li class="active">文档列表</li>
    </ol>
</section>
<!-- Main content -->
<section class="content" id="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <div class="clearflx">
                        <div class="box-tools pull-left">
                            <button class="btn btn-primary" <?php if($model_id == 0): ?>disabled<?php endif; ?> onclick="jump('<?php echo url('store',['cate_id'=>$cate_id, 'model_id'=>$model_id]); ?>')">
                                <i class="fa fa-plus"></i> 添加栏目
                            </button>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 50px">ID</th>
                            <th>文档名称</th>
                            <th>附加表名</th>
                            <th style="width: 10%;">文档状态</th>
                            <th style="width: 120px;">操作</th>
                        </tr>
                        </thead>
                        <tbody class="tbody-box">
                        <?php if(is_array($lists) || $lists instanceof \think\Collection || $lists instanceof \think\Paginator): if( count($lists)==0 ) : echo "" ;else: foreach($lists as $key=>$vo): ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-success btn-xs dropdown-toggle" aria-expanded="false">操作 <span class="caret"></span></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="<?php echo url('edit',''); ?>">编辑</a></li>
                                        <li class="divider"></li>
                                        <li><a href="javascript:;" onclick="del(this, '')">删除</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
<script type="text/javascript" src="__STATIC__/admin/src/common.js"></script>
<script>
    function jump(url) {
        location.href = url;
    }
// function del(obj, id) {
//     var url = "<?php echo url('delete'); ?>";
//     confirm (url, id);
//     $(obj).parents('tr').remove();
// }
// function changeStatus(obj, id) {
//     var url = "<?php echo url('changeStatus'); ?>";
//     getChangeStatus(obj, url, id);
// }
</script>

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
