<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Kreativefox</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Custom CSS -->
        <link href="css/custom.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Navigation -->
        <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><span class="glyphicon glyphicon-chevron-right"></span></a>
                <li class="sidebar-brand">
                    <a href="#top"  onclick = $("#menu-close").click(); >Kreativefox</a>
                </li>
                <li>
                    <a href="#top" onclick = $("#menu-close").click(); >Home</a>
                </li>
                <li>
                    <a href="#services" onclick = $("#menu-close").click(); >Services</a>
                </li>
                <li>
                    <a href="#about" onclick = $("#menu-close").click(); >About</a>
                </li>
                <li>
                    <a href="#portfolio" onclick = $("#menu-close").click(); >Portfolio</a>
                </li>
                <li>
                    <a href="#contact" onclick = $("#menu-close").click(); >Contact</a>
                </li>
            </ul>
        </nav>
        <!-- Header -->
        <header id="top" class="header">
            <div class="text-vertical-bottom">
                <h2>Go</h2>
            </div>
        </header>

        <!-- Services -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
        <section id="services" class="services">
            <div class="container">
                <div class="row text-center">
                    <h2>Our Services</h2>
                    <hr class="small">
                    <!--web development-->
                    <div class="row">
                        <div class="col-md-4">
                            <!--seated fox-->
                        </div>
                        <div class="col-md-8">
                            <div class="service">
                                <div class="icon-holder">
                                    <img src="img/icons/heart-blue.png" alt="" class="icon">
                                </div>
                                <h4 class="heading">Web Design</h4>
                                <p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) for web development-->
                    <!--Digital Marketing-->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="service">
                                <div class="icon-holder">
                                    <img src="img/icons/heart-blue.png" alt="" class="icon">
                                </div>
                                <h4 class="heading">Digital Marketing</h4>
                                <p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <!--seated fox-->
                        </div>
                    </div>
                    <!-- /.row (nested) for Digital Marketing-->
                </div>
                <!-- /.row-->
            </div>
            <!-- /.container -->
        </section>

        <!-- Footer -->
        <footer id="contact" class="text-center">
            <div class="footer-above">
                <div class="container">
                    <h2>Contact Us</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="footer-col col-md-6">
                            <!-- Contact form -->
                        </div>
                        <div class="footer-col col-md-6">
                            <h3 style="margin:50px 0px 10px 0px;">Location</h3>
                            <p>3481 Melrose Place<br>Beverly Hills, CA 90210</p>
                            <h3 style="margin:50px 0px 10px 0px;">Around the Web</h3>
                            <ul class="list-inline">
                                <li>
                                    <a href="#" class="btn-social btn-outline"><span class="glyphicon glyphicon-envelope"></span></a>
                                </li>
                                <li>
                                    <a href="#" class="btn-social btn-outline"><span class="fa fa-facebook"></span></a>
                                </li>
                                <li>
                                    <a href="#" class="btn-social btn-outline"><span class="fa fa-twitter"></span></a>
                                </li>
                                <li>
                                    <a href="#" class="btn-social btn-outline"><span class="fa fa-instagram"></span></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="footer-below">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            Copyright &copy; KreativeFox.com 2016
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="jq/jquery-1.11.2.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script>
                        // Closes the sidebar menu
                        $("#menu-close").click(function (e) {
                            e.preventDefault();
                            $("#sidebar-wrapper").toggleClass("active");
                        });

                        // Opens the sidebar menu
                        $("#menu-toggle").click(function (e) {
                            e.preventDefault();
                            $("#sidebar-wrapper").toggleClass("active");
                        });
                        // Scrolls to the selected menu item on the page
                        $(function () {
                            $('a[href*=#]:not([href=#])').click(function () {
                                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                                    var target = $(this.hash);
                                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                                    if (target.length) {
                                        $('html,body').animate({
                                            scrollTop: target.offset().top
                                        }, 1000);
                                        return false;
                                    }
                                }
                            });
                        });
        </script>
    </body>
</html>