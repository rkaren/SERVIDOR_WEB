<?php	$BASE='./';
	$MENU=0;
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
                                <li><span>Actualidad</span></li>
                            </ul>
                        </div>
                    </div>
                    <?php	include $BASE.'includes/avatar.php'; ?>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <!-- sales report area start -->
                <div class="sales-report-area sales-style-two">
                    <div class="row">
                        <div class="col-xl-3 col-ml-3 col-md-6 mt-5">
                            <div class="single-report">
                                <div class="s-sale-inner pt--30 mb-3">
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Batallas</h4>
                                        <select class="custome-select border-0 pr-3">
                                            <option selected="">Last 7 Days</option>
                                            <option value="0">Last 7 Days</option>
                                        </select>
                                    </div>
                                </div>
                                <canvas id="coin_sales4" height="100"></canvas>
                            </div>
                        </div>
                        <div class="col-xl-3 col-ml-3 col-md-6 mt-5">
                            <div class="single-report">
                                <div class="s-sale-inner pt--30 mb-3">
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Bajas</h4>
                                        <select class="custome-select border-0 pr-3">
                                            <option selected="">Last 7 Days</option>
                                            <option value="0">Last 7 Days</option>
                                        </select>
                                    </div>
                                </div>
                                <canvas id="coin_sales5" height="100"></canvas>
                            </div>
                        </div>
                        <div class="col-xl-3 col-ml-3 col-md-6  mt-5">
                            <div class="single-report">
                                <div class="s-sale-inner pt--30 mb-3">
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Naves perdidas</h4>
                                        <select class="custome-select border-0 pr-3">
                                            <option selected="">Last 7 Days</option>
                                            <option value="0">Last 7 Days</option>
                                        </select>
                                    </div>
                                </div>
                                <canvas id="coin_sales6" height="100"></canvas>
                            </div>
                        </div>
                        <div class="col-xl-3 col-ml-3 col-md-6 mt-5">
                            <div class="single-report">
                                <div class="s-sale-inner pt--30 mb-3">
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Prisioneros</h4>
                                        <select class="custome-select border-0 pr-3">
                                            <option selected="">Last 7 Days</option>
                                            <option value="0">Last 7 Days</option>
                                        </select>
                                    </div>
                                </div>
                                <canvas id="coin_sales7" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sales report area end -->
                <!-- visitor graph area start -->
                <div class="card mt-5">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-5">
                            <h4 class="header-title mb-0">Planetas aliados</h4>
                            <select class="custome-select border-0 pr-3">
                                <option selected="">Last 7 Days</option>
                                <option value="0">Last 7 Days</option>
                            </select>
                        </div>
                        <div id="visitor_graph"></div>
                    </div>
                </div>
                <!-- visitor graph area end -->
                <!-- order list area start -->
                <div class="card mt-5">
                    <div class="card-body">
                        <h4 class="header-title">Pedidos de hoy</h4>
                        <div class="table-responsive">
                            <table class="dbkit-table">
                                <tbody>
                                    <tr class="heading-td">
                                        <td>Nombre producto</td>
                                        <td>Código producto</td>
                                        <td>Estado del pedido</td>
                                        <td>Número de cliente</td>
                                        <td>Código postal</td>
                                        <td>Ver pedido</td>
                                    </tr>
                                    <tr>
                                        <td>Espada laser</td>
                                        <td>#894750374</td>
                                        <td><span class="pending_dot">Pendiente</span></td>
                                        <td>01976 74 92 00</td>
                                        <td>9241</td>
                                        <td>View Order</td>
                                    </tr>
                                    <tr>
                                        <td>Carguero</td>
                                        <td>#894750374</td>
                                        <td><span class="shipment_dot">Enviado</span></td>
                                        <td>01976 74 92 00</td>
                                        <td>9241</td>
                                        <td>View Order</td>
                                    </tr>
                                    <tr>
                                        <td>Bombardero</td>
                                        <td>#894750374</td>
                                        <td><span class="pending_dot">Pendiente</span></td>
                                        <td>01976 74 92 00</td>
                                        <td>9241</td>
                                        <td>View Order</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="pagination_area pull-right mt-5">
                            <ul>
                                <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
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
