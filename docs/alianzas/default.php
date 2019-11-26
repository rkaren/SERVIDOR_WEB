<?php	$BASE='../../';
	$MENU=1;
?>
<!doctype html>
<html class="no-js" lang="en">

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
                                <li><a href="<?=$BASE?>index.php">Home</a></li>
                                <li><span>Alianzas</span></li>
                            </ul>
                        </div>
                    </div>
                    <?php	include $BASE.'includes/avatar.php'; ?>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <!-- table info start -->
                    <div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Informes de alianzas</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            <thead class="text-uppercase bg-info">
                                                <tr class="text-white">
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">Fecha</th>
                                                    <th scope="col">Total</th>
                                                    <th scope="col">Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Noviembre 2018</th>
                                                    <td>03 / 12 / 2018</td>
                                                    <td>120.000€</td>
                                                    <td><i class="ti-eye"></i></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Noviembre 2018</th>
                                                    <td>03 / 12 / 2018</td>
                                                    <td>120.000€</td>
                                                    <td><i class="ti-eye"></i></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Noviembre 2018</th>
                                                    <td>03 / 12 / 2018</td>
                                                    <td>120.000€</td>
                                                    <td><i class="ti-eye"></i></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Noviembre 2018</th>
                                                    <td>03 / 12 / 2018</td>
                                                    <td>120.000€</td>
                                                    <td><i class="ti-eye"></i></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- table info end -->
                </div>
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
