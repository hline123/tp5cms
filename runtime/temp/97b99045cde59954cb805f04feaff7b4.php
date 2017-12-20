<?php if (!defined('THINK_PATH')) exit(); /*a:8:{s:75:"D:\phpStudy\WWW\tpcms\public/../application/admin\view\webset\confList.html";i:1512625072;s:71:"D:\phpStudy\WWW\tpcms\public/../application/admin\view\public\base.html";i:1512099526;s:77:"D:\phpStudy\WWW\tpcms\public/../application/admin\view\public\common_css.html";i:1511928198;s:76:"D:\phpStudy\WWW\tpcms\public/../application/admin\view\public\common_js.html";i:1512357149;s:73:"D:\phpStudy\WWW\tpcms\public/../application/admin\view\public\header.html";i:1511850195;s:71:"D:\phpStudy\WWW\tpcms\public/../application/admin\view\public\menu.html";i:1513323857;s:73:"D:\phpStudy\WWW\tpcms\public/../application/admin\view\public\footer.html";i:1510538016;s:74:"D:\phpStudy\WWW\tpcms\public/../application/admin\view\public\sidebar.html";i:1510537129;}*/ ?>
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
                    <i class="fa fa-th-large"></i> <span> 栏目管理 </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo url('category/index'); ?>"><i class="fa fa-circle-o"></i> 栏目列表 </a></li>
                    <li><a href="<?php echo url('category/store'); ?>"><i class="fa fa-circle-o"></i> 添加栏目 </a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bars"></i> <span> 菜单管理 </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo url('menu/index'); ?>"><i class="fa fa-circle-o"></i> 菜单列表 </a></li>
                    <li><a href="<?php echo url('menu/store'); ?>"><i class="fa fa-circle-o"></i> 添加菜单 </a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-database"></i> <span> 模型管理 </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo url('models/index'); ?>"><i class="fa fa-circle-o"></i> 模型列表 </a></li>
                    <li><a href="<?php echo url('models/store'); ?>"><i class="fa fa-circle-o"></i> 添加模型 </a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-rss-square"></i> <span> 字段管理 </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo url('fields/index'); ?>"><i class="fa fa-circle-o"></i> 字段列表 </a></li>
                    <li><a href="<?php echo url('fields/store'); ?>"><i class="fa fa-circle-o"></i> 添加字段 </a></li>
                </ul>
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
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
<style>
    .checkbox-inline, .radio-inline {
        padding-left: 0;
        padding-right: 20px;
    }
</style>
<section class="content-header">
    <h1>
        配置管理
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo url('index/index'); ?>"><i class="fa fa-home"></i> Home </a></li>
        <li><a href="<?php echo url('webset/index'); ?>"> <i class="fa fa-cog"></i> Config </a></li>
        <li class="active"> Setting</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-sm-12">
            <form action="<?php echo url('confShow'); ?>" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">基本设置</a></li>
                        <li><a href="#tab_2" data-toggle="tab">联系方式</a></li>
                        <li><a href="#tab_3" data-toggle="tab">SEO设置</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <?php if(is_array($baseInfo) || $baseInfo instanceof \think\Collection || $baseInfo instanceof \think\Paginator): if( count($baseInfo)==0 ) : echo "" ;else: foreach($baseInfo as $key=>$vo): switch($vo['dt_type']): case "1": ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"><?php echo $vo['cname']; ?>：</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="<?php echo $vo['ename']; ?>" value="<?php echo $vo['value']; ?>">
                                </div>
                            </div>
                            <?php break; case "2": ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"><?php echo $vo['cname']; ?>：</label>
                                <div class="col-sm-9">
                                    <?php if(is_array($radio) || $radio instanceof \think\Collection || $radio instanceof \think\Paginator): if( count($radio)==0 ) : echo "" ;else: foreach($radio as $key=>$ro): ?>
                                    <label class="radio-inline">
                                        <input type="radio" name="<?php echo $vo['ename']; ?>" <?php if($vo['value'] == $ro): ?>checked<?php endif; ?> value="<?php echo $ro; ?>">
                                        <?php echo $ro; ?>
                                    </label>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div>
                            <?php break; case "3": ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"><?php echo $vo['cname']; ?>：</label>
                                <div class="col-sm-9">
                                    <?php if(is_array($checkbox) || $checkbox instanceof \think\Collection || $checkbox instanceof \think\Paginator): if( count($checkbox)==0 ) : echo "" ;else: foreach($checkbox as $key=>$v): ?>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="<?php echo $vo['ename']; ?>[]" <?php if(in_array($v, $checkboxValue)): ?>checked<?php endif; ?> value="<?php echo $v; ?>">
                                        <?php echo $v; ?>
                                    </label>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div>
                            <?php break; case "4": ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"><?php echo $vo['cname']; ?>：</label>
                                <div class="col-sm-9">
                                    <select name="<?php echo $vo['ename']; ?>" class="form-control">
                                        <option value=""> 请选择 </option>
                                        <?php if(is_array($selected) || $selected instanceof \think\Collection || $selected instanceof \think\Paginator): if( count($selected)==0 ) : echo "" ;else: foreach($selected as $key=>$v): ?>
                                        <option <?php if($vo['value'] == $v): ?>selected<?php endif; ?> value="<?php echo $v; ?>"> <?php echo $v; ?> </option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                            <?php break; case "5": ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"><?php echo $vo['cname']; ?>：</label>
                                <div class="col-sm-9">
                                    <textarea name="<?php echo $vo['ename']; ?>" class="form-control" cols="30" rows="3"><?php echo $vo['value']; ?></textarea>
                                </div>
                            </div>
                            <?php break; case "6": ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"><?php echo $vo['cname']; ?>：</label>
                                <div class="col-sm-9">
                                    <input type="file" name="<?php echo $vo['ename']; ?>" value="" class="form-control">
                                    <img src="<?php echo $vo['value']; ?>" style="width: 100px; padding-top:10px;">
                                </div>
                            </div>
                            <?php break; endswitch; endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                        <div class="tab-pane" id="tab_2">
                            <?php if(is_array($ways) || $ways instanceof \think\Collection || $ways instanceof \think\Paginator): if( count($ways)==0 ) : echo "" ;else: foreach($ways as $key=>$vo): switch($vo['dt_type']): case "1": ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"><?php echo $vo['cname']; ?>：</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="<?php echo $vo['ename']; ?>" value="<?php echo $vo['value']; ?>">
                                </div>
                            </div>
                            <?php break; case "2": ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"><?php echo $vo['cname']; ?>：</label>
                                <div class="col-sm-9">
                                    <?php if(is_array($radio) || $radio instanceof \think\Collection || $radio instanceof \think\Paginator): if( count($radio)==0 ) : echo "" ;else: foreach($radio as $key=>$ro): ?>
                                    <label class="radio-inline">
                                        <input type="radio" name="<?php echo $vo['ename']; ?>" <?php if($vo['value'] == $ro): ?>checked<?php endif; ?> value="<?php echo $ro; ?>">
                                        <?php echo $ro; ?>
                                    </label>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div>
                            <?php break; case "3": ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"><?php echo $vo['cname']; ?>：</label>
                                <div class="col-sm-9">
                                    <div class="col-sm-9">
                                        <?php if(is_array($checkbox) || $checkbox instanceof \think\Collection || $checkbox instanceof \think\Paginator): if( count($checkbox)==0 ) : echo "" ;else: foreach($checkbox as $key=>$v): ?>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="<?php echo $vo['ename']; ?>[]" <?php if(in_array($v, $checkboxValue)): ?>checked<?php endif; ?> value="<?php echo $v; ?>">
                                            <?php echo $v; ?>
                                        </label>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                            </div>
                            <?php break; case "4": ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"><?php echo $vo['cname']; ?>：</label>
                                <div class="col-sm-9">
                                    <select name="<?php echo $vo['ename']; ?>" class="form-control">
                                        <option value=""> 请选择 </option>
                                        <?php if(is_array($selected) || $selected instanceof \think\Collection || $selected instanceof \think\Paginator): if( count($selected)==0 ) : echo "" ;else: foreach($selected as $key=>$v): ?>
                                        <option <?php if($vo['value'] == $v): ?>selected<?php endif; ?> value="<?php echo $v; ?>"> <?php echo $v; ?> </option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                            <?php break; case "5": ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"><?php echo $vo['cname']; ?>：</label>
                                <div class="col-sm-9">
                                    <textarea name="<?php echo $vo['ename']; ?>" class="form-control" cols="30" rows="3"><?php echo $vo['value']; ?></textarea>
                                </div>
                            </div>
                            <?php break; case "6": ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"><?php echo $vo['cname']; ?>：</label>
                                <div class="col-sm-9">
                                    <input type="file" name="<?php echo $vo['ename']; ?>" value="" class="form-control">
                                    <img src="<?php echo $vo['value']; ?>" style="width: 100px; padding-top:10px;">
                                </div>
                            </div>
                            <?php break; endswitch; endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                        <div class="tab-pane" id="tab_3">
                            <?php if(is_array($seo) || $seo instanceof \think\Collection || $seo instanceof \think\Paginator): if( count($seo)==0 ) : echo "" ;else: foreach($seo as $key=>$vo): switch($vo['dt_type']): case "1": ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"><?php echo $vo['cname']; ?>：</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="<?php echo $vo['ename']; ?>" value="<?php echo $vo['value']; ?>">
                                </div>
                            </div>
                            <?php break; case "2": ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"><?php echo $vo['cname']; ?>：</label>
                                <div class="col-sm-9">
                                    <?php if(is_array($radio) || $radio instanceof \think\Collection || $radio instanceof \think\Paginator): if( count($radio)==0 ) : echo "" ;else: foreach($radio as $key=>$ro): ?>
                                    <label class="radio-inline">
                                        <input type="radio" name="<?php echo $vo['ename']; ?>" <?php if($vo['value'] == $ro): ?>checked<?php endif; ?> value="<?php echo $ro; ?>">
                                        <?php echo $ro; ?>
                                    </label>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div>
                            <?php break; case "3": ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"><?php echo $vo['cname']; ?>：</label>
                                <div class="col-sm-9">
                                    <div class="col-sm-9">
                                        <?php if(is_array($checkbox) || $checkbox instanceof \think\Collection || $checkbox instanceof \think\Paginator): if( count($checkbox)==0 ) : echo "" ;else: foreach($checkbox as $key=>$v): ?>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="<?php echo $vo['ename']; ?>[]" <?php if(in_array($v, $checkboxValue)): ?>checked<?php endif; ?> value="<?php echo $v; ?>">
                                            <?php echo $v; ?>
                                        </label>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                            </div>
                            <?php break; case "4": ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"><?php echo $vo['cname']; ?>：</label>
                                <div class="col-sm-9">
                                    <select name="<?php echo $vo['ename']; ?>" class="form-control">
                                        <option value=""> 请选择 </option>
                                        <?php if(is_array($selected) || $selected instanceof \think\Collection || $selected instanceof \think\Paginator): if( count($selected)==0 ) : echo "" ;else: foreach($selected as $key=>$v): ?>
                                        <option <?php if($vo['value'] == $v): ?>selected<?php endif; ?> value="<?php echo $v; ?>"> <?php echo $v; ?> </option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                            <?php break; case "5": ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"><?php echo $vo['cname']; ?>：</label>
                                <div class="col-sm-9">
                                    <textarea name="<?php echo $vo['ename']; ?>" class="form-control" cols="30" rows="3"><?php echo $vo['value']; ?></textarea>
                                </div>
                            </div>
                            <?php break; case "6": ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"><?php echo $vo['cname']; ?>：</label>
                                <div class="col-sm-9">
                                    <input type="file" name="<?php echo $vo['ename']; ?>" value="" >
                                    <img src="<?php echo $vo['value']; ?>" style="width: 100px; padding-top:10px;">
                                </div>
                            </div>
                            <?php break; endswitch; endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="col-sm-offset-1">
                            <button type="submit" class="btn btn-success">添加</button>
                            <button type="reset" class="btn btn-primary">重置</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
    $(function () {
        $('input[type="checkbox"], input[type="radio"]').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        })
    });
    $('input[type="file"]').change(function () {
        $(this).next('img').attr('src', '');
    })
</script>
<!-- /.content -->

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
