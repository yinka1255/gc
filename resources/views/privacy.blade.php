<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Imperial gift card shop - Privacy policy</title>
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
                                
                <section class="page-section">
                    <div class="container">
						<h3>Privacy policy</h3>
                        <p>The following terms you or user refer to each person visiting imperialgiftcard.com.ng. The terms we and our website refer to Food 15. Protecting your personal data is very important to us. By visiting our website, you provide us with some personal data. This policy explains how we use it. You can visit our website and explore it without providing us with personal data.</p>

						<b>What information do we collect about you?</b>
						
						<p>We only collect personal information from you when you order goods or services on our website, when you complete any customer survey, or through cookies.
						
						We collect this information in order to enable orders, such as name, address, phone number, or payment information.</p>
						
						<b>Cookies and Google Analytics</b>
						
						<p>Accepting cookies is not necessary to visit our website, but mandatory in order to complete correctly an order.
						
						What are cookies? Cookies are small text files placed on your computer while visiting websites. They are necessary to have websites work more efficiently or to provide information to the websites owners. We collect cookies to remember your IP address, so that you can save time when coming back on our website. To get more information about cookies, please visit www.allaboutcookies.org.
						
						imperialgiftcard.com.ng uses Google Analytics, a web analytics service provided by Google, Inc. ("Google"). Google Analytics uses "cookies" (see above). The information generated by the cookie about your use of the website will be transmitted to and stored by Google on servers in the United States.
						
						If this website anonymizes IP addresses, your IP address will be truncated by Google within a EU member state or other EEA state before being transmitted to the US. Only in exceptional situations will your full IP address be transmitted to Google servers in the United States and truncated there. Google will use this information for the purpose of evaluating your use of the website, compiling reports on website activity for website operators and providing other services relating to website activity and internet usage.
						
						Google will not associate your IP address with any other data held by Google. You may refuse the use of cookies by selecting the appropriate settings on your browser, however please note that if you do this you may not be able to use the full functionality of this website.
						
						By using this website, you consent to the processing of data about you by Google in the manner and for the purposes set out above. You can also prevent Google from collecting information (including your IP address) via cookies and processing this information by downloading this browser plugin and installing it: https://tools.google.com/dlpage/gaoptout.</p>
						
						<b>How we use the information we collect from you?.</b>
						
						<p>We collect and use your personal data on secured servers. We ask third organisms to check and certify our confidentiality principles.</p>
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