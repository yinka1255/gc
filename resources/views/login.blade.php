<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Imperial gift card shop | Login</title>

        <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="shortcut icon" href="assets/ico/favicon.ico">

        <!-- CSS Global -->
        <link href="{{asset('public/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('public/plugins/bootstrap-select/css/bootstrap-select.min.css')}}" rel="stylesheet">
        <link href="{{asset('public/plugins/fontawesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('public/plugins/prettyphoto/css/prettyPhoto.css')}}" rel="stylesheet">
        <link href="{{asset('public/plugins/animate/animate.min.css')}}" rel="stylesheet">

        <!-- Theme CSS -->
        <link href="{{asset('public/css/theme.css')}}" rel="stylesheet">
        <link href="{{asset('public/css/theme-green-1.css')}}" rel="stylesheet" id="theme-config-link">

        <!-- Head Libs -->
        <script src="{{asset('public/plugins/modernizr.custom.js')}}"></script>

        
    </head>
    <body id="home" class="wide">
        <!-- PRELOADER -->
        <div id="preloader">
            <div id="preloader-status">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
                <div id="preloader-title">Loading</div>
            </div>
        </div>
        <!-- /PRELOADER -->

        <!-- WRAPPER -->
        <div class="wrapper">

            
            <!-- /Header top bar -->

            <!-- HEADER -->
            <header class="header fixed">
                <div class="header-wrapper">
                    <div class="container">

                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html"><img src="{{asset('public/img/logo-bella-shop.png')}}" alt="Bella Shop"/></a>
                        </div>
                        <!-- /Logo -->

                        <!-- Header search -->
                        <div class="header-search">
                            <input class="form-control" type="text" placeholder="What are you looking?"/>
                            <button><i class="fa fa-search"></i></button>
                        </div>
                        <!-- /Header search -->

                        <!-- Header shopping cart -->
                        <div class="header-cart">
                            <div class="cart-wrapper">
                                <a href="wishlist.html" class="btn btn-theme-transparent hidden-xs hidden-sm"><i class="fa fa-heart"></i></a>
                                <a href="compare-products.html" class="btn btn-theme-transparent hidden-xs hidden-sm"><i class="fa fa-exchange"></i></a>
                                <a href="#" class="btn btn-theme-transparent" data-toggle="modal" data-target="#popup-cart"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"> 0 item(s) - $0.00 </span> <i class="fa fa-angle-down"></i></a>
                                <!-- Mobile menu toggle button -->
                                <a href="#" class="menu-toggle btn btn-theme-transparent"><i class="fa fa-bars"></i></a>
                                <!-- /Mobile menu toggle button -->
                            </div>
                        </div>
                        <!-- Header shopping cart -->

                    </div>
                </div>
                <div class="navigation-wrapper">
                    <div class="container">
                        <!-- Navigation -->
                        <nav class="navigation closed clearfix">
                            <a href="#" class="menu-toggle-close btn"><i class="fa fa-times"></i></a>
                            <ul class="nav sf-menu">
								<li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('about')}}">About</a></li>
                                <li><a href="{{url('amazon')}}">Amazon gift card</a></li>
                                <li><a href="{{url('itunes')}}">Itunes gift card</a></li>
                                <li><a href="{{url('terms')}}">Terms & Conditions</a></li>
								<li><a href="{{url('contact')}}">Contact</a></li>
								@if(Auth::User())
                                <li><a href="#" >{{Auth::User()->name}},</a></li><li> <a style="color: brown;" href="{{url('logout')}}">Logout</a></li>
                                @else
                                <li><a style="color: #00b16a;" href="{{url('login')}}">Login</a></li>
                                @endif
                            </ul>
                        </nav>
                        <!-- /Navigation -->
                    </div>
                </div>
            </header>
            <!-- /HEADER -->

            <!-- CONTENT AREA -->
            <div class="content-area">

                <!-- PAGE -->
                <section class="page-section color">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <h3 class="block-title"><span>Login</span></h3>
                                <form action="{{url('auth')}}" method="post" class="form-login">
                                    <div class="row">
                                        <div class="col-md-12 hello-text-wrap">
                                            <span class="hello-text text-thin">Hello, welcome to your account</span>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <div class="form-group"><input class="form-control" type="text" name="email" placeholder="Email"></div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                                        </div>
                                        <div class="col-md-12 col-lg-6">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6 text-right-lg">
                                            <a class="forgot-password" href="#">forgot password?</a>
                                        </div>
                                        <div class="col-md-6">
                                            <button class="btn btn-theme btn-block btn-theme-dark" href="#">Login</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-6">
                                <h3 class="block-title"><span>Create New Account</span></h3>
                                <form  action="{{url('register_post')}}" method="post" class="create-account">
                                    <div class="row">
                                        <div class="col-md-12 hello-text-wrap">
                                            <span class="hello-text text-thin">Create Your Accoun</span>
										</div>
										<div class="col-md-12">
												<div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
											</div>
										<div class="col-md-12">
											<div class="form-group"><input class="form-control" type="text" name="email" placeholder="Email"></div>
										</div>
										<div class="col-md-12">
											<div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
										</div>
										<div class="col-md-12">
											<div class="form-group"><input class="form-control" type="password" name="password1" placeholder="Password"></div>
										</div>
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-block btn-theme btn-theme-dark btn-create" >Create Account</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /PAGE -->

            </div>
            <!-- /CONTENT AREA -->

            <!-- FOOTER -->
            <footer class="footer">
                <div class="footer-widgets">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-3">
                                <div class="widget">
									<h4 class="widget-title">About Us</h4>
									<p>Having access to digital content such as music and movies enhances people’s lives and experience culture outside of their own. We don’t believe the border of your country should define or restrict what forms of entertainment you have access to.</p>
										<ul class="social-icons">
                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget">
                                    <h4 class="widget-title">News Letter</h4>
                                    <p>Subscribe to our newsletter.</p>
                                    <form action="#">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Enter Your Mail and Get $10 Cash"/>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-theme btn-theme-transparent">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget widget-categories">
                                    <h4 class="widget-title">Information</h4>
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Delivery Information</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Terms and Conditions</a></li>
                                        <li><a href="#">Private Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget widget-tag-cloud">
                                    <h4 class="widget-title">Item Tags</h4>
                                    <ul>
                                        <li><a href="#">Itunes card</a></li>
                                        <li><a href="#">Amazon card</a></li>
                                         <li><a href="#">Walmart card</a></li>
                                        <li><a href="#">E commerce</a></li>
                                        <li><a href="#">Hot Deals</a></li>
                                        <li><a href="#">Supplier</a></li>
                                        <li><a href="#">Shop</a></li>
                                        
                                       
                                        
                                        
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="footer-meta">
                    <div class="container">
                        <div class="row">

                            <div class="col-sm-6">
                                <div class="copyright">Copyright 2014 BELLA SHOP   |   All Rights Reserved   |   Designed By Jthemes</div>
                            </div>
                            <div class="col-sm-6">
                                <div class="payments">
                                    <ul>
                                        <li><img src="assets/img/preview/payments/visa.jpg" alt=""/></li>
                                        <li><img src="assets/img/preview/payments/mastercard.jpg" alt=""/></li>
                                        <li><img src="assets/img/preview/payments/paypal.jpg" alt=""/></li>
                                        <li><img src="assets/img/preview/payments/american-express.jpg" alt=""/></li>
                                        <li><img src="assets/img/preview/payments/visa-electron.jpg" alt=""/></li>
                                        <li><img src="assets/img/preview/payments/maestro.jpg" alt=""/></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </footer>
            <!-- /FOOTER -->

            <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

        </div>
        <!-- /WRAPPER -->

        <!-- JS Global -->
        <script src="{{asset('public/plugins/jquery/jquery-1.11.1.min.js')}}"></script>
        <script src="{{asset('public/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('public/plugins/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
        <script src="{{asset('public/plugins/superfish/js/superfish.min.js')}}"></script>
        <script src="{{asset('public/plugins/prettyphoto/js/jquery.prettyPhoto.js')}}"></script>
        <script src="{{asset('public/plugins/jquery.sticky.min.js')}}"></script>
        <script src="{{asset('public/plugins/jquery.easing.min.js')}}"></script>
        <script src="{{asset('public/plugins/jquery.smoothscroll.min.js')}}"></script>
        <script src="{{asset('public/plugins/smooth-scrollbar.min.js')}}"></script>

        <!-- JS Page Level -->
        <script src="{{asset('public/js/theme.js')}}"></script>

        <!--[if (gte IE 9)|!(IE)]><!--> 
        <script src="{{asset('public/plugins/jquery.cookie.js')}}"></script>
        <!--<![endif]-->

    </body>
</html>