<?php	$BASE='../';
	$MENU=5;
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
                                <li><a href="<?=$BASE?>index.php">Home</a></li>
                                <li><span>Administración</span></li>
                            </ul>
                        </div>
                    </div>
                    <?php	include $BASE.'includes/avatar.php'; ?>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-xl-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Animations along lines</h4>
                                <div id="mapamchart1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Map with curved lines</h4>
                                <div id="mapamchart2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Zooming to Countries Map</h4>
                                <div id="mapamchart3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Map With Patterns</h4>
                                <div id="mapamchart4"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Capitals map</h4>
                                <div id="mapamchart5"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Map with dynamic Pie charts</h4>
                                <div id="mapamchart6"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Google Map</h4>
                                <div id="google_map"></div>
                            </div>
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
    <!-- maps Resources -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbeBYsZSDkbIyfUkoIw1Rt38eRQOQQU0o"></script>
    <script>
    function initialize() {
        var e = {
                zoom: 15,
                scrollwheel: !1,
                center: new google.maps.LatLng(40.712764, -74.005667),
                styles: [{
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#1d2c4d"
                        }]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [{
                                "color": "#8ec3b9"
                            },
                            {
                                "saturation": -100
                            },
                            {
                                "weight": 2
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                            "color": "#1a3646"
                        }]
                    },
                    {
                        "featureType": "administrative.country",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                            "color": "#4b6878"
                        }]
                    },
                    {
                        "featureType": "administrative.country",
                        "elementType": "labels.text",
                        "stylers": [{
                                "saturation": 30
                            },
                            {
                                "lightness": -100
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.land_parcel",
                        "elementType": "labels",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "administrative.land_parcel",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#64779e"
                        }]
                    },
                    {
                        "featureType": "administrative.province",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                            "color": "#4b6878"
                        }]
                    },
                    {
                        "featureType": "landscape.man_made",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                            "color": "#334e87"
                        }]
                    },
                    {
                        "featureType": "landscape.natural",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#023e58"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#283d6a"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.text",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#6f9ba5"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                            "color": "#1d2c4d"
                        }]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "color": "#023e58"
                        }]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#3C7680"
                        }]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#304a7d"
                        }]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#98a5be"
                        }]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                            "color": "#1d2c4d"
                        }]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#2c6675"
                        }]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                            "color": "#255763"
                        }]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#b0d5ce"
                        }]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                            "color": "#023e58"
                        }]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "labels",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#98a5be"
                        }]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                            "color": "#1d2c4d"
                        }]
                    },
                    {
                        "featureType": "transit.line",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "color": "#283d6a"
                        }]
                    },
                    {
                        "featureType": "transit.station",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#3a4762"
                        }]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#0e1626"
                        }]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "color": "#0e0e26"
                        }]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#4e6d70"
                        }]
                    }
                ]
            },

            l = new google.maps.Map(document.getElementById("google_map"), e);
        new google.maps.Marker({ position: l.getCenter(), animation: google.maps.Animation.BOUNCE, map: l })
    }

    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <?php	include $BASE.'includes/jquery_plugins.php';?>
</body>

</html>
