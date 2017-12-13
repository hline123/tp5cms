<?php if (!defined('THINK_PATH')) exit(); /*a:8:{s:74:"D:\phpStudy\WWW\tpcms\public/../application/admin\view\category\index.html";i:1512619196;s:71:"D:\phpStudy\WWW\tpcms\public/../application/admin\view\public\base.html";i:1512099526;s:77:"D:\phpStudy\WWW\tpcms\public/../application/admin\view\public\common_css.html";i:1511928198;s:76:"D:\phpStudy\WWW\tpcms\public/../application/admin\view\public\common_js.html";i:1512357149;s:73:"D:\phpStudy\WWW\tpcms\public/../application/admin\view\public\header.html";i:1511850195;s:71:"D:\phpStudy\WWW\tpcms\public/../application/admin\view\public\menu.html";i:1512800236;s:73:"D:\phpStudy\WWW\tpcms\public/../application/admin\view\public\footer.html";i:1510538016;s:74:"D:\phpStudy\WWW\tpcms\public/../application/admin\view\public\sidebar.html";i:1510537129;}*/ ?>
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
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
<script type="text/javascript" src="__STATIC__/admin/js/check_config.js"></script>
<style>
    td , tr, th{
        vertical-align: middle !important;
        text-align: center;
    }
    .tbody-box .label:hover {
        cursor: default;
    }
    .fa-plus-square-o:hover, .fa-minus-square-o:hover {
        cursor: pointer;
    }
</style>
<section class="content-header">
    <h1>
        栏目列表
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo url('index/index'); ?>"><i class="fa fa-home"></i> 首页 </a></li>
        <li><a href="<?php echo url('category/index'); ?>"><i class="fa fa-th-large"></i> 栏目管理</a></li>
        <li class="active"> 栏目列表</li>
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
                            <a class="btn btn-primary" href="<?php echo url('store'); ?>">
                                <i class="fa fa-plus"></i> 添加栏目
                            </a>
                            <a class="btn btn-danger" href="javascript:;" onclick="delAll()">
                                <i class="fa fa-trash-o"></i> 删除全部
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 5%;">
                                    折叠
                                </th>
                                <th style="width:5%;">
                                    <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                                    </button>
                                </th>
                                <th style="width: 50px">ID</th>
                                <th>栏目名称</th>
                                <th>栏目属性</th>
                                <th>所属模型</th>
                                <th style="width: 12%">栏目排序</th>
                                <th style="width: 8%;">状态</th>
                                <th style="width: 120px;">操作</th>
                            </tr>
                        </thead>
                        <tbody class="tbody-box">
                            <?php if(is_array($lists) || $lists instanceof \think\Collection || $lists instanceof \think\Paginator): if( count($lists)==0 ) : echo "" ;else: foreach($lists as $key=>$vo): ?>
                            <tr cateId="<?php echo $vo['cate_id']; ?>" pid="<?php echo $vo['cate_pid']; ?>">
                                <td>
                                    <i class="fa fa-plus-square-o fa-lg open"></i>
                                </td>
                                <td><input type="checkbox" name="cate_ids[]" value="<?php echo $vo['cate_id']; ?>" class="check-all"></td>
                                <td><?php echo $vo['cate_id']; ?></td>
                                <td style="text-align: left;"><a href=""><?php echo $vo['_cate_name']; ?></a></td>
                                <td>
                                    <?php if($vo['cate_attr'] == 1): ?>
                                    列表栏目
                                    <?php else: ?>
                                    频道封面栏目
                                    <?php endif; ?>
                                </td>
                                <td><?php echo $vo['model_id']; ?></td>
                                <td>
                                    <input type="number" class="form-control" name="cate_sort" value="<?php echo $vo['cate_sort']; ?>" onblur="changeSort(this, '<?php echo $vo['cate_id']; ?>')">
                                </td>
                                <td>
                                    <?php if($vo['cate_status'] == 1): ?>
                                    <span class="label label-warning" onclick="changeStatus(this, '<?php echo $vo['cate_id']; ?>')">显示</span>
                                    <?php else: ?>
                                    <span class="label label-danger" onclick="changeStatus(this, '<?php echo $vo['cate_id']; ?>')">隐藏</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button data-toggle="dropdown" class="btn btn-success btn-xs dropdown-toggle" aria-expanded="false">操作 <span class="caret"></span></button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="<?php echo url('store',['id'=>$vo['cate_id']]); ?>">添加子集</a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo url('edit',['id'=>$vo['cate_id']]); ?>">编辑</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:;" onclick="del(this, '<?php echo $vo['cate_id']; ?>')">删除</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix"></div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->

<script>
    // 点击全选
    $(".checkbox-toggle").click(function () {
        var clicks = $(this).data('clicks');
        if (clicks) {
            //Uncheck all checkboxes
            $(".tbody-box .check-all").iCheck("uncheck");
            $(".fa", this).removeClass("fa-check-square-o").addClass('fa-minus-square-o');
        } else {
            //Check all checkboxes
            $(".tbody-box .check-all").iCheck("check");
            $(".fa", this).removeClass("fa-minus-square-o").addClass('fa-check-square-o');
        }
        $(this).data("clicks", !clicks);
    });
    // 处理栏目伸缩
    $('.tbody-box tr[pid != 0]').hide();
    $('.tbody-box .open').click(function () {
        var pid = $(this).parents('tr').attr('pid');
            id = $(this).parents('tr').attr('cateId');
        if ($(this).hasClass('fa-plus-square-o')) {
            $(this).removeClass('fa-plus-square-o').addClass('fa-minus-square-o');
            $('.tbody-box tr[pid = '+ id +']').slideDown();
        }else {
            $(this).removeClass('fa-minus-square-o').addClass('fa-plus-square-o');
            $('.tbody-box tr[pid = '+ id +']').slideUp();
        }
    });
    // ajax 改变栏目状态
    function changeStatus(obj, id) {
        $.ajax({
            url: "<?php echo url('changeStatus'); ?>",
            type: 'GET',
            dataType: 'json',
            data: {id: id},
            success: function (res) {
                if (res == 1) {
                    $(obj).removeClass('label-warning').addClass('label-danger').html('隐藏');
                }else {
                    $(obj).removeClass('label-danger').addClass('label-warning').html('显示');
                }
            }
        })
    }
    // 失去焦点排序
    function changeSort(obj, id) {
        var values = $(obj).val();
        $.ajax({
            url: "<?php echo url('changeSort'); ?>",
            type: 'GET',
            data: {id: id, cate_sort: values},
            dataType: 'json',
            success: function (res) {
                if (res) {
                    location.reload();
                }
            }
        })
    }
    // 批量删除
    function delAll() {
        // 如果删除的数据小于2条
        var count = $(".check-all:checked").length;
        if (count == 0) {
            bootbox.alert("至少选择1条数据");
            return;
        }
        // 用于存储所选数据的id
        var ids = '';
        $(".check-all:checked").each(function () {
            ids += $(this).val() +',';
        });
        bootbox.confirm({
            message: "确认要删除吗？",
            buttons: {
                confirm: {
                    label: '确认',
                    className: 'btn-success'
                },
                cancel: {
                    label: '取消',
                    className: 'btn-danger'
                }
            },
            callback: function (result) {
                if (result) {
                    $.ajax({
                        url: "<?php echo url('delAll'); ?>",
                        type: 'GET',
                        data: {ids: ids},
                        dataType: 'json',
                        success: function (res) {
                            if (res == 1) {
                                bootbox.alert('删除成功');
                                window.setTimeout(function () {
                                    bootbox.hideAll();
                                    location.reload();
                                }, 1000);
                            }
                        }
                    })
                }
            }
        });
    }
    // 删除操作
    function del(obj, id) {
        bootbox.confirm({
            message: "确认要删除吗？",
            buttons: {
                confirm: {
                    label: '确认',
                    className: 'btn-success'
                },
                cancel: {
                    label: '取消',
                    className: 'btn-danger'
                }
            },
            callback: function () {
                $.ajax({
                    url: "<?php echo url('delete'); ?>",
                    type: 'GET',
                    data: {id: id},
                    dataType: 'json',
                    success: function (res) {
                        if (res == 1) {
                            bootbox.alert('删除成功');
                            window.setTimeout(function () {
                                bootbox.hideAll();
                                location.reload();
                            }, 1000);
                        }else {
                            console.log('操作失败');
                        }
                    }
                })
            }
        });
    }
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
