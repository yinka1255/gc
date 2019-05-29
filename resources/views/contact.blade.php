<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Imperial gift card shop - Contact</title>
        @include("includes.header")
        <!-- Favicon -->
        

        <!--[if lt IE 9]>
        <script src="assets/plugins/iesupport/html5shiv.js"></script>
        <script src="assets/plugins/iesupport/respond.min.js"></script>
        <![endif]-->
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

            <!-- HEADER -->
            <header class="header fixed">
                <div class="header-wrapper">
                    <div class="container">

                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{url('/')}}"><img height="70px" width="auto" src="{{asset('public/img/logo-bella-shop.png')}}" alt="Bella Shop"/></a>
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
                                    <a href="{{url('cart')}}" class="btn btn-theme-transparent" ><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"> {{Cart::count()}} - $ {{Cart::subTotal()}} </span> <i class="fa fa-angle-down"></i></a>
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
                                <li class="active"><a href="{{url('about')}}">About</a></li>
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
                                
                <!-- BREADCRUMBS -->
                <section class="page-section breadcrumbs">
						<div class="container">
							<div class="page-header">
								<h1>Contact</h1>
							</div>
							<ul class="breadcrumb">
								<li><a href="#">Home</a></li>
								<li><a href="#">Shop</a></li>
								<li class="active">Contact Us</li>
							</ul>
						</div>
					</section>
					<!-- /BREADCRUMBS -->
	
					<!-- PAGE -->
					<section class="page-section color">
						<div class="container">
	
							<div class="row">
	
								<div class="col-md-4">
									<div class="contact-info">
	
										<h2 class="block-title"><span>Contact Us</span></h2>
	
										<div class="media-list">
											<div class="media">
												<i class="pull-left fa fa-home"></i>
												<div class="media-body">
													<strong>Address:</strong><br>
													987 Main st. New York, NY, 00001, U.S.A
												</div>
											</div>
											<div class="media">
												<i class="pull-left fa fa-phone"></i>
												<div class="media-body">
													<strong>Telephone:</strong><br>
													(012) 345-7689
												</div>
											</div>
											<div class="media">
												<i class="pull-left fa fa-envelope-o"></i>
												<div class="media-body">
													<strong>Fax:</strong><br>
													0123456789
												</div>
											</div>
											
											<div class="media">
												<div class="media-body">
													<strong>Customer Service:</strong><br>
													<a href="mailto:hello@imperialgiftcard.com">hello@imperialgiftcard.com</a>
												</div>
											</div>
											<div class="media">
												<div class="media-body">
													<strong>Returns and Refunds:</strong><br>
													<a href="mailto:hello@imperialgiftcard.com">hello@imperialgiftcard.com</a>
												</div>
											</div>
										</div>
	
									</div>
								</div>
	
								<div class="col-md-8 text-left">
	
									<h2 class="block-title"><span>Contact Form</span></h2>
	
									<!-- Contact form -->
									<form name="contact-form" method="post" action="#" class="contact-form" id="contact-form">
	
										<div class="outer required">
											<div class="form-group af-inner">
												<label class="sr-only" for="name">Name</label>
												<input
													type="text" name="name" id="name" placeholder="Name" value="" size="30"
													data-toggle="tooltip" title="Name is required"
													class="form-control placeholder"/>
											</div>
										</div>
	
										<div class="outer required">
											<div class="form-group af-inner">
												<label class="sr-only" for="email">Email</label>
												<input
													type="text" name="email" id="email" placeholder="Email" value="" size="30"
													data-toggle="tooltip" title="Email is required"
													class="form-control placeholder"/>
											</div>
										</div>
	
										<div class="outer required">
											<div class="form-group af-inner">
												<label class="sr-only" for="subject">Subject</label>
												<input
													type="text" name="subject" id="subject" placeholder="Subject" value="" size="30"
													data-toggle="tooltip" title="Subject is required"
													class="form-control placeholder"/>
											</div>
										</div>
	
										<div class="form-group af-inner">
											<label class="sr-only" for="input-message">Message</label>
											<textarea
												name="message" id="input-message" placeholder="Message" rows="4" cols="50"
												data-toggle="tooltip" title="Message is required"
												class="form-control placeholder"></textarea>
										</div>
	
										<div class="outer required">
											<div class="form-group af-inner">
												<input type="submit" name="submit" class="form-button form-button-submit btn btn-theme btn-theme-dark" id="submit_btn" value="Send message" />
											</div>
										</div>
	
									</form>
									<!-- /Contact form -->
	
								</div>
	
							</div>
	
						</div>
					</section>
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
                                        <li><a href="{{url('about')}}">About Us</a></li>
                                        
                                        <li><a href="{{url('contact')}}">Contact Us</a></li>
                                        <li><a href="{{url('terms')}}">Terms and Conditions</a></li>
                                        <li><a href="{{url('privacy')}}">Private Policy</a></li>
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
                                <div class="copyright">Copyright 2019 IMPERIAL GIFT SHOP   |   All Rights Reserved </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="payments">
                                    <ul>
                                        <li><img src="{{asset('public/img/preview/payments/visa.jpg')}}" alt=""/></li>
                                        <li><img src="{{asset('public/img/preview/payments/mastercard.jpg')}}" alt=""/></li>
                                        <li><img src="{{asset('public/img/preview/payments/paypal.jpg')}}" alt=""/></li>
                                        <li><img src="{{asset('public/img/preview/payments/american-express.jpg')}}" alt=""/></li>
                                        <li><img src="{{asset('public/img/preview/payments/visa-electron.jpg')}}" alt=""/></li>
                                        <li><img src="{{asset('public/img/preview/payments/maestro.jpg')}}" alt=""/></li>
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
        <!--<![endif]-->
        @include("includes.footer")
    </body>
</html>