<?php if (!defined('THINK_PATH')) exit(); /*a:8:{s:72:"D:\phpStudy\WWW\tpcms\public/../application/admin\view\webset\store.html";i:1511855298;s:71:"D:\phpStudy\WWW\tpcms\public/../application/admin\view\public\base.html";i:1512099526;s:77:"D:\phpStudy\WWW\tpcms\public/../application/admin\view\public\common_css.html";i:1511928198;s:76:"D:\phpStudy\WWW\tpcms\public/../application/admin\view\public\common_js.html";i:1512357149;s:73:"D:\phpStudy\WWW\tpcms\public/../application/admin\view\public\header.html";i:1511850195;s:71:"D:\phpStudy\WWW\tpcms\public/../application/admin\view\public\menu.html";i:1512024453;s:73:"D:\phpStudy\WWW\tpcms\public/../application/admin\view\public\footer.html";i:1510538016;s:74:"D:\phpStudy\WWW\tpcms\public/../application/admin\view\public\sidebar.html";i:1510537129;}*/ ?>
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
<script src="__STATIC__/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
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
        <ul class="sidebar-menu" id="menu" data-widget="tree">
            <li class="treeview-menu active" style="display: block">
                <a href="<?php echo url('Index/index'); ?>"><i class="fa fa-home"></i> 首页 </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cog"></i> <span> 网站配置 </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo url('webset/confList'); ?>"><i class="fa fa-circle-o"></i> 配置管理 </a></li>
                    <li><a href="<?php echo url('webset/index'); ?>"><i class="fa fa-circle-o"></i>  配置列表 </a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-th-large"></i> <span> 栏目 </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo url('category/index'); ?>"><i class="fa fa-circle-o"></i> 栏目列表 </a></li>
                    <li><a href="<?php echo url('category/store'); ?>"><i class="fa fa-circle-o"></i> 添加栏目 </a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
<section class="content-header">
    <h1>
        系统配置
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo url('index/index'); ?>"><i class="fa fa-home"></i> 首页 </a></li>
        <li><a href="<?php echo url('webset/index'); ?>"><i class="fa fa-cog"></i> 配置管理</a></li>
        <li class="active">添加配置</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">添加配置</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" class="form-horizontal" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">中文名称：</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="cname">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">英文名称：</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="" name="ename">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">配置类型：</label>
                            <div class="col-sm-9">
                                <select name="dt_type" class="form-control">
                                    <option value="1"> 文本框 </option>
                                    <option value="2"> 单选按钮 </option>
                                    <option value="3"> 多选按钮 </option>
                                    <option value="4"> 下拉框 </option>
                                    <option value="5"> 文本域 </option>
                                    <option value="6"> 附件 </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">配置分类：</label>
                            <div class="col-sm-9">
                                <select name="cf_type" class="form-control">
                                    <option value="1"> 基本信息 </option>
                                    <option value="2"> 联系方式 </option>
                                    <option value="3"> SEO设置 </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">值/默认值：</label>
                            <div class="col-sm-9">
                                <textarea name="value" cols="30" rows="3" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">可选值：</label>
                            <div class="col-sm-9">
                                <textarea name="values" cols="30" rows="3" class="form-control"></textarea>
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
<script>

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
