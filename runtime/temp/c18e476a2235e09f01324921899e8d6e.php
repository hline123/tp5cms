<?php if (!defined('THINK_PATH')) exit(); /*a:8:{s:87:"D:\phpStudy\PHPTutorial\WWW\tpcms\public/../application/admin\view\webset\confList.html";i:1515827224;s:83:"D:\phpStudy\PHPTutorial\WWW\tpcms\public/../application/admin\view\public\base.html";i:1512099526;s:89:"D:\phpStudy\PHPTutorial\WWW\tpcms\public/../application/admin\view\public\common_css.html";i:1511928198;s:88:"D:\phpStudy\PHPTutorial\WWW\tpcms\public/../application/admin\view\public\common_js.html";i:1515144126;s:85:"D:\phpStudy\PHPTutorial\WWW\tpcms\public/../application/admin\view\public\header.html";i:1511850195;s:83:"D:\phpStudy\PHPTutorial\WWW\tpcms\public/../application/admin\view\public\menu.html";i:1515224134;s:85:"D:\phpStudy\PHPTutorial\WWW\tpcms\public/../application/admin\view\public\footer.html";i:1510538016;s:86:"D:\phpStudy\PHPTutorial\WWW\tpcms\public/../application/admin\view\public\sidebar.html";i:1510537129;}*/ ?>
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
                            <?php foreach( $confRes as $k=>$v):if($v['cf_type']==1):?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"><?php echo $v['cname'];?>：</label>
                                <div class="col-sm-9">
                                    <?php if($v['dt_type']==1):?> <!-- 单行文本 -->
                                    <input class="form-control" name="<?php echo $v['ename'];?>"  value="<?php echo $v['value'];?>" type="text">
                                    <?php endif;if($v['dt_type']==2):
                                            $valuesArr=explode(',', $v['values']);
                                            foreach($valuesArr as $k1=>$v1):
                                    ?> <!-- 单选按钮 -->
                                    <div class="radio-inline">
                                        <label>
                                            <input <?php if($v1 == $v['value']): ?> checked="checked" <?php endif; ?> name="<?php echo $v['ename'];?>" value="<?php echo $v1;?>" type="radio">
                                            <?php echo $v1;?>
                                        </label>
                                    </div>
                                    <?php endforeach; endif;if($v['dt_type']==3):
                                            $valuesArr=explode(',', $v['values']);
                                            $valueArr=explode(',', $v['value']);
                                            foreach($valuesArr as $k1=>$v1):
                                    ?> <!-- 复选框 -->
                                    <div class="checkbox-inline">
                                        <label>
                                            <input name="<?php echo $v['ename'];?>[]" <?php if(in_array($v1, $valueArr)){echo 'checked="checked"';}?> value="<?php echo $v1;?>"  type="checkbox">
                                            <?php echo $v1;?>
                                        </label>
                                    </div>
                                    <?php endforeach; endif;if($v['dt_type']==4):?> <!-- 下拉菜单 -->
                                    <select name="<?php echo $v['ename'];?>" class="form-control">
                                        <option value="">请选择</option>
                                        <?php $valuesArr=explode(',', $v['values']);
                                                foreach($valuesArr as $k1=>$v1):
                                        ?>
                                        <option <?php if($v1==$v['value']){echo 'selected="selected"';}?> value="<?php echo $v1;?>"><?php echo $v1;?></option>
                                        <?php endforeach;?>
                                    </select>
                                    <?php endif;if($v['dt_type']==5):?> <!-- 文本域 -->
                                        <textarea name="<?php echo $v['ename'];?>" class="form-control" cols="3"> <?php echo $v['value'];?> </textarea>
                                    <?php endif;if($v['dt_type']==6):?> <!-- 附件类型 -->
                                        <input class="form-control" value=""  name="<?php echo $v['ename'];?>"  type="file">
                                        <?php if($v['value']): ?><img height="30" src="<?php echo $v['value']; ?>"><?php else: endif; endif;?>
                                </div>
                            </div>
                            <?php endif;endforeach;?>
                        </div>
                        <div class="tab-pane" id="tab_2">
                            <?php foreach( $confRes as $k=>$v):if($v['cf_type']==2):?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"><?php echo $v['cname'];?>：</label>
                                <div class="col-sm-9">
                                    <?php if($v['dt_type']==1):?> <!-- 单行文本 -->
                                    <input class="form-control" name="<?php echo $v['ename'];?>"  value="<?php echo $v['value'];?>" type="text">
                                    <?php endif;if($v['dt_type']==2):
                                            $valuesArr=explode(',', $v['values']);
                                            foreach($valuesArr as $k1=>$v1):
                                    ?> <!-- 单选按钮 -->
                                    <div class="radio-inline">
                                        <label>
                                            <input <?php if($v1 == $v['value']): ?> checked="checked" <?php endif; ?> name="<?php echo $v['ename'];?>" value="<?php echo $v1;?>" type="radio">
                                            <?php echo $v1;?>
                                        </label>
                                    </div>
                                    <?php endforeach; endif;if($v['dt_type']==3):
                                            $valuesArr=explode(',', $v['values']);
                                            $valueArr=explode(',', $v['value']);
                                            foreach($valuesArr as $k1=>$v1):
                                    ?> <!-- 复选框 -->
                                    <div class="checkbox-inline">
                                        <label>
                                            <input name="<?php echo $v['ename'];?>[]" <?php if(in_array($v1, $valueArr)){echo 'checked="checked"';}?> value="<?php echo $v1;?>"  type="checkbox">
                                            <?php echo $v1;?>
                                        </label>
                                    </div>
                                    <?php endforeach; endif;if($v['dt_type']==4):?> <!-- 下拉菜单 -->
                                    <select name="<?php echo $v['ename'];?>" class="form-control">
                                        <option value="">请选择</option>
                                        <?php $valuesArr=explode(',', $v['values']);
                                                foreach($valuesArr as $k1=>$v1):
                                        ?>
                                        <option <?php if($v1==$v['value']){echo 'selected="selected"';}?> value="<?php echo $v1;?>"><?php echo $v1;?></option>
                                        <?php endforeach;?>
                                    </select>
                                    <?php endif;if($v['dt_type']==5):?> <!-- 文本域 -->
                                    <textarea name="<?php echo $v['ename'];?>" class="form-control" cols="3"> <?php echo $v['value'];?> </textarea>
                                    <?php endif;if($v['dt_type']==6):?> <!-- 附件类型 -->
                                    <input class="form-control" value=""  name="<?php echo $v['ename'];?>"  type="file">
                                    <?php if($v['value']): ?><img height="30" src="<?php echo $v['value']; ?>"><?php else: endif; endif;?>
                                </div>
                            </div>
                            <?php endif;endforeach;?>
                        </div>
                        <div class="tab-pane" id="tab_3">
                            <?php foreach( $confRes as $k=>$v):if($v['cf_type']==3):?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"><?php echo $v['cname'];?>：</label>
                                <div class="col-sm-9">
                                    <?php if($v['dt_type']==1):?> <!-- 单行文本 -->
                                    <input class="form-control" name="<?php echo $v['ename'];?>"  value="<?php echo $v['value'];?>" type="text">
                                    <?php endif;if($v['dt_type']==2):
                                            $valuesArr=explode(',', $v['values']);
                                            foreach($valuesArr as $k1=>$v1):
                                    ?> <!-- 单选按钮 -->
                                    <div class="radio-inline">
                                        <label>
                                            <input <?php if($v1 == $v['value']): ?> checked="checked" <?php endif; ?> name="<?php echo $v['ename'];?>" value="<?php echo $v1;?>" type="radio">
                                            <?php echo $v1;?>
                                        </label>
                                    </div>
                                    <?php endforeach; endif;if($v['dt_type']==3):
                                            $valuesArr=explode(',', $v['values']);
                                            $valueArr=explode(',', $v['value']);
                                            foreach($valuesArr as $k1=>$v1):
                                    ?> <!-- 复选框 -->
                                    <div class="checkbox-inline">
                                        <label>
                                            <input name="<?php echo $v['ename'];?>[]" <?php if(in_array($v1, $valueArr)){echo 'checked="checked"';}?> value="<?php echo $v1;?>"  type="checkbox">
                                            <?php echo $v1;?>
                                        </label>
                                    </div>
                                    <?php endforeach; endif;if($v['dt_type']==4):?> <!-- 下拉菜单 -->
                                    <select name="<?php echo $v['ename'];?>" class="form-control">
                                        <option value="">请选择</option>
                                        <?php $valuesArr=explode(',', $v['values']);
                                                foreach($valuesArr as $k1=>$v1):
                                        ?>
                                        <option <?php if($v1==$v['value']){echo 'selected="selected"';}?> value="<?php echo $v1;?>"><?php echo $v1;?></option>
                                        <?php endforeach;?>
                                    </select>
                                    <?php endif;if($v['dt_type']==5):?> <!-- 文本域 -->
                                    <textarea name="<?php echo $v['ename'];?>" class="form-control" cols="3"> <?php echo $v['value'];?> </textarea>
                                    <?php endif;if($v['dt_type']==6):?> <!-- 附件类型 -->
                                    <input class="form-control" value=""  name="<?php echo $v['ename'];?>"  type="file">
                                    <?php if($v['value']): ?><img height="30" src="<?php echo $v['value']; ?>"><?php else: endif; endif;?>
                                </div>
                            </div>
                            <?php endif;endforeach;?>
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
