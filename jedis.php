<?php	$BASE='./';
	$MENU=4;
?>
<!doctype html>
<html class="no-js" lang="es">

<head>
    <?php	include $BASE.'includes/head.php';?>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
<?php	include $BASE.'includes/menu.php'; ?>
        <!-- main content area start -->
        <div class="main-content">
            <?php	include $BASE.'includes/header.php'; ?>
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Intranet</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Gerencia</span></li>
                            </ul>
                        </div>
                    </div>
                    <?php	include $BASE.'includes/avatar.php'; ?>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <!-- line chart start -->
                <div class="row">
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div id="amlinechart1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div id="amlinechart2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div id="amlinechart3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div id="amlinechart4"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div id="amlinechart5"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div id="verview-shart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- line chart end -->
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2018. All right reserved. Template by <a href="https://colorlib.com/wp/">Colorlib</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <?php	include $BASE.'includes/offset.php';?>
    <?php	include $BASE.'includes/jquery_plugins.php';?>
</body>

</html>
