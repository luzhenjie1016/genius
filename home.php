<?php
include "vendor/autoload.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genius</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body class="dark_version">
<div id="preloader"></div>

<header class="header_area">
    <div class="main_header_area" id="sticky">
        <div class="container">
            <div class="row">

                <div class="col-sm-2 col-xs-9">
                    <div class="logo_area">
                        <a href="#">Genius</a>
                    </div>
                </div>

                <div class="col-sm-10 col-xs-12">
                    <div class="main_menu_area">
                        <div class="mainmenu">
                            <nav>
                                <ul id="nav">
                                    <li class="current_page_item"><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Service</a></li>
                                    <li><a href="lagout.php">Sign out</a></li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="welcome_area" id="home">
    <div class="welcome_slides">
        <div class="single_slide" style="background-image: url(img/bg-pattern/bg-2.jpg);">
            <div class="slide_text">
                <div class="table">
                    <div class="table_cell">
                        <h2><span>你 好, </span></h2>

                        <h3>我是「<?php echo $_GET['user'] ?>」; 密码是「<?php echo $_GET['pass'] ?>」.</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slide" style="background-image: url(img/bg-pattern/bg-1.jpg);">
            <div class="slide_text">
                <div class="table">
                    <div class="table_cell">
                        <h2><span>你 好, </span></h2>

                        <h3>我是「<?php echo $_GET['user'] ?>」; 密码是「<?php echo $_GET['pass'] ?>」.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="special_feature_area">
    <div class="container">
        <div class="row">

            <div class="col-sm-6 col-md-3">
                <div class="single_feature wow fadeInUp" data-wow-delay=".2s">
                    <div class="bg-icon">
                        <span class="icon-tools"></span>
                    </div>
                    <div class="feature_img">
                        <span class="icon-tools"></span>
                    </div>
                    <div class="feature_text">
                        <h5>Investment Planning</h5>

                        <p>If you were a teardrop;In my eye.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="single_feature wow fadeInUp" data-wow-delay=".4s">
                    <div class="bg-icon">
                        <span class="icon-gift"></span>
                    </div>
                    <div class="feature_img">
                        <span class="icon-gift"></span>
                    </div>
                    <div class="feature_text">
                        <h5>Prospects</h5>

                        <p>For fear of losing you,I would never cry.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="single_feature wow fadeInUp" data-wow-delay=".6s">
                    <div class="bg-icon">
                        <span class="icon-genius"></span>
                    </div>
                    <div class="feature_img">
                        <span class="icon-genius"></span>
                    </div>
                    <div class="feature_text">
                        <h5>Educational Support</h5>

                        <p>And if the golden sun,Should cease to shine its light.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="single_feature wow fadeInUp" data-wow-delay=".8s">
                    <div class="bg-icon">
                        <span class="icon-adjustments"></span>
                    </div>
                    <div class="feature_img">
                        <span class="icon-adjustments"></span>
                    </div>
                    <div class="feature_text">
                        <h5>Online support</h5>

                        <p>Just one smile from you,Would make my whole world bright.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer_area">
    <div class="footer_bottom_area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="footer_bottom wow fadeInDown" data-wow-delay=".2s">
                        <p>Create <b style="color: red">❤</b> by <a href="#">Lu Zhen Jie</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="js/vendor/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/meanmenu.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/counterup.min.js"></script>
<script src="js/jquery.scrollUp.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/custom.js"></script>
<script src="./js/moment.js"></script>
<script>
    $(function () {
        $('h2').html('<span>你 好, </span>今天是「' + moment().format() + '」');
    })
</script>
</body>

</html>
