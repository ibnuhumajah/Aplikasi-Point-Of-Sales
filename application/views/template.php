<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mutiara Botol | Admin</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="<?= base_url() ?>/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <a href="<?= site_url('dashboard') ?>" class="logo">
                <span class="logo-mini"><b>M</b>B</span>
                <span class="logo-lg"><b>Mutiara Botol</span>
            </a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?= base_url() ?>/assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?= ucfirst($this->fungsi->user_login()->name) ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <img src="<?= base_url() ?>/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                    <p>
                                        <?= ucfirst($this->fungsi->user_login()->name) ?>
                                        <small><?= $this->fungsi->user_login()->username ?></small>
                                    </p>
                                </li>

                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?= site_url('auth/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?= base_url() ?>/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?= ucfirst($this->fungsi->user_login()->name) ?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>

                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="<?= site_url('dashboard') ?>">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-green"></small>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="<?= site_url('supplier') ?>">
                            <i class="fa fa-truck" aria-hidden="true"></i> <span>Supplier</span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-green"></small>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fa fa-users" aria-hidden="true"></i> <span>Customer</span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-green"></small>
                            </span>
                        </a>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-archive"></i>
                            <span>Product</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Categories</a></li>
                            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Units</a></li>
                            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Items</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <span>Transaction</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> Sales</a></li>
                            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Stock In/Purchases</a></li>
                            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Stock Out</a></li>
                            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Stock Opname</a></li>
                            <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Item Return</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i> <span>Reports</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> Sales</a></li>
                            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Stock In/Out</a></li>
                        </ul>
                    </li>

                    <?php if ($this->fungsi->user_login()->level == 1) { ?>
                        <li class="header">Privasi</li>
                        <li><a href="<?= site_url('User') ?>"><i class="fa fa-circle-o text-red"></i> <span>User/Imployees</span></a></li>
                    <?php } ?>
                </ul>
            </section>
        </aside>

        <div class="content-wrapper">
            <?php echo $contents ?>
        </div>

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.4.0
            </div>
            <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
            reserved.
        </footer>

        <aside class="control-sidebar control-sidebar-dark">
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane" id="control-sidebar-home-tab">
                </div>
                <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <form method="post">
                    </form>
                </div>
            </div>
        </aside>
        <div class="control-sidebar-bg"></div>
    </div>


    <script src="<?= base_url() ?>/assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>/assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <script src="<?= base_url() ?>/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <script src="<?= base_url() ?>/assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
    <script src="<?= base_url() ?>/assets/bower_components/moment/min/moment.min.js"></script>
    <script src="<?= base_url() ?>/assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="<?= base_url() ?>/assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="<?= base_url() ?>/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script src="<?= base_url() ?>/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?= base_url() ?>/assets/bower_components/fastclick/lib/fastclick.js"></script>
    <script src="<?= base_url() ?>/assets/dist/js/adminlte.min.js"></script>
    <script src="<?= base_url() ?>/assets/dist/js/demo.js"></script>
</body>

</html>