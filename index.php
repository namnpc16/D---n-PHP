<?php
    ob_start();
    session_start();
    define("template", true);
    include_once("./config/connect.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/category.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/success.css">
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.js"></script>
</head>

<body>

    <!--	Header	-->
    <div id="header">
        <div class="container">
            <div class="row">
                <?php include_once("./modules/logo/logo.php"); ?>
                <?php include_once("./modules/search/search-box.php"); ?>
                <?php include_once("./modules/cart/cart-notify.php"); ?>
            </div>
        </div>
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <!--	End Header	-->

    <!--	Body	-->
    <div id="body">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <?php include_once("./modules/category/menu.php"); ?>
                </div>
            </div>
            <div class="row">
                <div id="main" class="col-lg-8 col-md-12 col-sm-12">
                    <!--	Slider	-->
                    <?php include_once("./modules/slide/slide.php"); ?>

                    <!--	Feature Product	-->
                    <?php  
                        if (isset($_GET['page_layout'])) {
                            switch ($_GET['page_layout']) {
                                case 'cart':
                                    include_once("./modules/cart/cart.php");
                                    break;
                                case 'category':
                                    include_once("./modules/category/category.php");
                                    break;
                                case 'product':
                                    include_once("./modules/products/product.php");
                                    break;
                                case 'search':
                                    include_once("./modules/search/search.php");
                                    break;
                                case 'success':
                                    include_once("./modules/cart/success.php");
                                    break;
                            }
                        } else {
                            include_once("modules/products/feature.php");
                            include_once("modules/products/latest.php");
                        }
                    ?>
                </div>

                <?php include_once("./modules/banners/banner.php"); ?>
            </div>
        </div>
    </div>
    <!--	End Body	-->

    <div id="footer-top">
        <div class="container">
            <div class="row">
                <?php include_once("./modules/logo/logo-footer.php"); ?>
                <?php include_once("./modules/address/address.php"); ?>
                <?php include_once("./modules/services/services.php"); ?>
                <?php include_once("./modules/hotline/hotline.php"); ?>
            </div>
        </div>
    </div>

    <!--	Footer	-->
    <?php include_once("./modules/footer/footer-bottom.php"); ?>
    <!--	End Footer	-->
</body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0"></script>
</html>