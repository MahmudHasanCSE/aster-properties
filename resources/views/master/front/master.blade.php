<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>@yield('title')</title>

    <!--favicon icon-->
    <link rel="icon" href="images/favicon.png">

    <!-- font awesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- flaticon css -->
    <link rel="stylesheet" href="css/flaticon.css">

    <!--bootstrap min css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--jquery-ui css-->
    <link rel="stylesheet" href="css/jquery-ui.min.css">

    <!--menuzord css-->
    <link rel="stylesheet" href="css/menuzord.css">

    <!--animate css-->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/animate.css">

    <!--owl.carousel css-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!--nice-select css-->
    <link rel="stylesheet" href="css/nice-select.css">

    <!--venobox css-->
    <link rel="stylesheet" href="css/venobox.css">

    <!-- global style css -->
    <link rel="stylesheet" href="css/global-style.css">

    <!-- style css -->
    <link rel="stylesheet" href="style.css">

    <!-- color css -->
    <link rel="stylesheet" href="css/colors/color-1.css">

    <!--responsive css-->
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>


<!-- search-modal -->
<div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <img src="images/search-popup-logo.png" alt="search-popup-logo">
            <form action="" class="form-inline">
                <input type="text" name="search" placeholder="Search here...">
                <button><i class="fa fa-search"></i></button>
            </form>
            <div class="quick-search">
                <h6 class="color-ff pos-relative ptb-30">Quick search</h6>
                <ul>
                    <li><a href="#">parlour</a></li>
                    <li><a href="#">massage</a></li>
                    <li><a href="#">yoga</a></li>
                    <li><a href="#">spa</a></li>
                    <li><a href="#">beauty</a></li>
                    <li><a href="#">exparts</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- =======================================
    ==Start Header section==
=======================================-->
<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="opening-time text-left"><i class="fa fa-clock-o color-d5"></i> <span>Opening Hour: Mon - Fri : 09:00 - 18:00</span> </div>
            </div>

            <div class="col-md-6">
                <div class="contact-mail text-right"> <a href="mailto:nfo@beautylab.com"><i class="fa fa-envelope color-d5"></i>info@beautylab.com</a> <span>/</span> <a href="tel:1800-111-333"><i class="fa fa-phone color-d5"></i>1800-111-333</a> </div>
            </div>
        </div>
    </div>
</div>

<header class="beauty-header" id="beauty-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="menuzord" class="menuzord">
                    <a href="index.html" class="menuzord-brand custom-logo"><img id="logo" src="images/logo.png" alt="logo"></a>
                    <ul class="menuzord-menu menuzord-right">
                        <li class="active"><a href="{{route('home')}}" title="Home">Home</a></li>
                        <li><a href="#" title="Service">Service</a>
                            <ul class="dropdown triangle">
                                <li><a href="service.html">Service page</a></li>
                                <li><a href="service-details.html">Service Details</a></li>
                            </ul>
                        </li>
                        <li><a href="booking.html" title="Booking">Booking</a></li>
                        <li><a href="#" title="Pages">pages</a>
                            <ul class="dropdown triangle">
                                <li><a href="about.html">about us</a></li>
                                <li><a href="gallery.html">gallery</a></li>
                                <li><a href="product-details.html">product details</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="thank-you.html">Thank you</a></li>
                                <li><a href="error.html">404 page</a></li>
                            </ul>
                        </li>
                        <li><a href="#" title="Shop">Shop</a>
                            <div class="megamenu">
                                <div class="megamenu-row">
                                    <div class="col3 clearfix">
                                        <ul>
                                            <li>
                                                <h6>Shop Full Width</h6>
                                            </li>
                                            <li><a href="shop-fullwidth.html">Shop Full Width (4 Column)</a></li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <h6>Shop With Sidebar</h6>
                                            </li>
                                            <li><a href="shop-left-sidebar.html">Shop (Left Sidebar)</a></li>
                                            <li><a href="shop-right-sidebar.html">Shop (Right Sidebar)</a></li>
                                        </ul>
                                    </div>

                                    <div class="col3 clearfix">
                                        <ul>
                                            <li>
                                                <h6>Shop-Eyelash</h6>
                                            </li>
                                            <li><a href="#">Beetroot collection</a></li>
                                            <li><a href="#">Lobster ravioli</a></li>
                                            <li><a href="#">Pollo farcito</a></li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <h6>Shop-Nail care</h6>
                                            </li>
                                            <li><a href="#">organic egg</a></li>
                                            <li><a href="#">Beetroot collection</a></li>
                                        </ul>
                                    </div>

                                    <div class="col6">
                                        <div class="header-ad">
                                            <img src="images/vibes-laser.png" alt="add img" class="img-fluid">
                                        </div>
                                    </div>
                                    <!--/col-->
                                </div>
                            </div>
                        </li>
                        <li><a href="#" title="Blog">Blog</a>
                            <ul class="dropdown triangle">
                                <li><a href="#">Blog pages</a>
                                    <ul class="dropdown dropdown-left">
                                        <li><a href="blog-fullwidth.html">Blog full width</a></li>
                                        <li><a href="blog-grid-col-2.html">Blog Grid (2 column)</a></li>
                                        <li><a href="blog-left-sidebar-col-1.html">Blog left sidebar (1 Column)</a></li>
                                        <li><a href="blog-left-sidebar-col-2.html">Blog left sidebar (2 Column)</a></li>
                                        <li><a href="blog-right-sidebar-col-1.html">Blog Right sidebar (1 Column)</a></li>
                                        <li><a href="blog-right-sidebar-col-2.html">Blog right sidebar (2 Column)</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog-details.html">blog details</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('contact')}}" title="Contact">Contact</a></li>
                    </ul>
                    <button type="button" id="search-button" data-toggle="modal" data-target="#search-modal"><i class="fa fa-search"></i></button>
                </div>
                <!--/#menuzord-->
            </div>
            <!--/col-md-12-->
        </div>
    </div>
</header>
<!-- =======================================
    ==End Header section==
=======================================-->


@yield('body')


<!-- =======================================
        ==Start footer widget section==
=======================================-->
<section class="footer-widget">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-widget contact-widget">
                    <a href="index.html"><img alt="logo" src="images/widget-logo.png"></a>
                    <p>The beauty lab is a luxury beauty &amp; spa solution. The beauty spa strives to deliver top class.</p>
                    <address>
                        <p class="address"><i class="fa fa-home"></i><span>Address:</span> 121 King St, Melbourne Vic 3000, Australia.</p>
                        <p class="phone"><i class="fa fa-phone"></i><span>Phone:</span> +66 1800-111-333</p>
                        <p class="email"><i class="fa fa-envelope"></i><span>Email:</span> <a href=":mailto:info@beautylab.com">info@beautylab.com</a></p>
                        <p class="web"><i class="fa fa-globe"></i><span>Web:</span> <a href="www.Beautylab.com" target="_blank">www.Beautylab.com</a></p>
                    </address>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="single-widget recent-post-widget">
                    <h5>Recent Posts</h5>
                    <ul>
                        <li>
                            <p>The power of golden ratio typography cannot be understated. By choosing the..</p>
                            <span>July 25, 2020</span>
                            <a href="#">read more</a>
                        </li>
                        <li>
                            <p>The power of golden ratio typography cannot be understated. By choosing the..</p>
                            <span>July 23, 2020</span>
                            <a href="#">read more</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="single-widget newsletter-widget">
                    <h5>Newsletter</h5>
                    <form action="#" method="post" class="clearfix">
                        <input type="text" placeholder="Name" id="name" class="form-control">
                        <input type="email" placeholder="Email" id="email" class="form-control">
                        <button type="submit">Send</button>
                    </form>
                </div>
            </div>
            <!--/col-->
        </div>
    </div>
</section>
<!-- =======================================
        ==End footer widget section==
=======================================-->


<!-- =======================================
        ==Start footer section==
=======================================-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="copyright">&copy; 2022 All rights reserved. Developed by <a target="_blank" href="#">ReconRS</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- =======================================
        ==End footer section==
=======================================-->


<!-- =======================================
    ==Start scroll top==
=======================================-->
<div class="scroll-top not-visible"><i class="fa fa-angle-up"></i></div>
<!-- =======================================
    ==End scroll top==
=======================================-->

<!-- jQuary library -->
<script src="js/jquery-3.2.1.min.js"></script>

<!--bootstrap js-->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!--jquery-ui js-->
<script src="js/jquery-ui.min.js"></script>

<!--menuzord js-->
<script src="js/menuzord.js"></script>

<!--slick js-->
<script src="js/slick.js"></script>

<!--owl.carousel js-->
<script src="js/owl.carousel.min.js"></script>

<!--nice-select js-->
<script src="js/jquery.nice-select.min.js"></script>

<!--venobox js-->
<script src="js/venobox.min.js"></script>

<!--counterup js-->
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>

<!--isotope js-->
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>

<!--vide js for background video-->
<script type="text/javascript" src="js/jquery.vide.js"></script>

<!--google map js-->
<script type="text/javascript" src="js/map.control.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuE-L3bIAAbYiHgFs5tVRBg03HiLojuks&callback=myMap"></script>

<!-- all jQuary activation code here and always it will be bottom of all script tag -->
<script src="js/main.js"></script>
</body>

</html>
