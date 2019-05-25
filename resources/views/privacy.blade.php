<!DOCTYPE html>
<html lang="en">
<head>
	@include("includes.header")
	<title>Food15 | Privacy</title>
</head>
<body>
	<!-- main container of all the page elements -->
	<div id="wrapper">
		<!-- header of the page -->
		<header id="header" class="wh-clr">
			<div class="header-holder bg-light">
				<div class="container-fluid">
					<!-- Setting Wrap of the page -->
					<ul class="list-unstyled setting-wrap pull-left">
						<li><a href="javascript:void(0);" style="color:#a53e4c" class="nav-opener visible-xs hidden"><i class="fa fa-bars"></i></a></li>
						<li>
							<a style="color:#a53e4c" href="{{url('cart')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="num round fontjosefin text-center">{{Cart::count()}}</span></a>
						</li>
					</ul>
					<div class="logo">
						<a href="{{url('/')}}"><img src="images/logo.png" alt="Vine Yard" class="img-responsive"></a>
					</div>
				</div>
			</div>
			<div class="bdr-bt">
				<!-- nav holder of the page -->
				<div class="nav-holder container">
					<div class="row">
						<div class="col-xs-12">
							<nav id="nav">
								<ul class="list-unstyled text-center">
									<li class="n-logo"><a href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" alt="Vine Yard" class="img-responsive"></a></li>
									<li><a href="{{url('/')}}">Shop</a></li>
									<!-- dropdownfull of the page -->
									<li>
										<a href="{{url('about')}}">About us</a>
									</li>
									<!-- dropdown of the page -->
									<li>
										<a href="{{url('terms')}}">Terms & conditions</a>
									</li>
									
									<li><a href="{{url('contact')}}">Contact</a></li>
									<li>
										<a href="{{url('cart')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="num round fontjosefin text-center">{{Cart::count()}}</span></a>
										<!-- Cart Dropdown of the page -->
										<div class="cart-dropdown right">
											<!-- Cart Menu of the page -->
											<ul class="list-unstyled cart-menu">
												<li>
													<div class="img-holder bdr pull-left">
														<a href="shopping-cart.html"><img src="https://via.placeholder.com/25x95" alt="image description" class="img-responsive"></a>
													</div>
													<div class="align-left pull-left">
														<h3 class="heading3"><a href="shopping-cart.html">Strawberry</a></h3>
														<span class="price clr">1 x $146.00</span>
														<a href="javascript:void(0);" class="close"><i class="fa fa-times"></i></a>
													</div>
												</li>
												<li>
													<div class="img-holder bdr pull-left">
														<a href="shopping-cart.html"><img src="https://via.placeholder.com/25x95" alt="image description" class="img-responsive"></a>
													</div>
													<div class="align-left pull-left">
														<h3 class="heading3"><a href="shopping-cart.html">Strawberry</a></h3>
														<span class="price clr">1 x $146.00</span>
														<a href="javascript:void(0);" class="close"><i class="fa fa-times"></i></a>
													</div>
												</li>
												<li>
													<div class="img-holder bdr pull-left">
														<a href="shopping-cart.html"><img src="https://via.placeholder.com/25x95" alt="image description" class="img-responsive"></a>
													</div>
													<div class="align-left pull-left">
														<h3 class="heading3"><a href="shopping-cart.html">Strawberry</a></h3>
														<span class="price clr">1 x $146.00</span>
														<a href="javascript:void(0);" class="close"><i class="fa fa-times"></i></a>
													</div>
												</li>
												<li class="total-price text-uppercase">
													total:
													<em class="price clr fwBold pull-right">$168.00</em>
												</li>
												<li>
													<a href="shopping-cart.html" class="btn-primary active text-center text-uppercase lg-round">View Card</a>
													<a href="checkout.html" class="btn-primary lg-round text-center text-uppercase">Check Out</a>
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- search holder of the page -->
		<div class="search-holder">
			<!-- select form of the page -->
			<form action="javascript:void(0);" class="select-form">
				<fieldset>
					<select>
						<option value="0">ALL CATEGORIES</option>
						<option value="1">ALL CATEGORIES</option>
						<option value="2">ALL CATEGORIES</option>
					</select>
					<input type="search" class="form-control fwNormal bdr" placeholder="Search">
					<button type="submit" class="sub-btn"><i class="fa fa-search"></i></button>
				</fieldset>
			</form>
			<a href="javascript:void(0);" class="search-opener icon"><i class="fa fa-times"></i></a></li>
		</div>
		<!-- main of the page -->
		<main id="main">
			<div class="space bg-black"></div>
			<!-- banner of the page -->
			<section class="banner bg-parallax overlay" style="background-image:url({{asset('public/images/img75.jpg')}});">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center">
							<h2 class="heading text-uppercase fwLight">Privacy policy</h2>
							<ul class="list-unstyled breadcrumbs">
								<li><a {{url('/')}}>Shop</a></li>
								<li>/</li>
								<li>Privacy policy</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- contact sec of the page -->
			<div class="contact-sec container">
				
				<div class="row">
					<!-- header of the page -->
					<header class="col-xs-12 header">
						<span class="title fontpinyon">Food 15</span>
						<h1 class="heading text-uppercase">Privacy policy</h1>
						<div class="header-img">
							<img src="images/bdr-img.png" alt="image description" class="img-responsive">
						</div>
						<p style="text-align: left;">The following terms you or user refer to each person visiting food. food15.com.ng. The terms we and our website refer to Food 15. Protecting your personal data is very important to us. By visiting our website, you provide us with some personal data. This policy explains how we use it. You can visit our website and explore it without providing us with personal data.</p>

								<b>What information do we collect about you?</b>
								
								<p>We only collect personal information from you when you order goods or services on our website, when you complete any customer survey, or through cookies.
								
								We collect this information in order to enable orders, such as name, address, phone number, or payment information.</p>
								
								<b>Cookies and Google Analytics</b>
								
								<p>Accepting cookies is not necessary to visit our website, but mandatory in order to complete correctly an order.
								
								What are cookies? Cookies are small text files placed on your computer while visiting websites. They are necessary to have websites work more efficiently or to provide information to the websites owners. We collect cookies to remember your IP address, so that you can save time when coming back on our website. To get more information about cookies, please visit www.allaboutcookies.org.
								
								food15.com.ng uses Google Analytics, a web analytics service provided by Google, Inc. ("Google"). Google Analytics uses "cookies" (see above). The information generated by the cookie about your use of the website will be transmitted to and stored by Google on servers in the United States.
								
								If this website anonymizes IP addresses, your IP address will be truncated by Google within a EU member state or other EEA state before being transmitted to the US. Only in exceptional situations will your full IP address be transmitted to Google servers in the United States and truncated there. Google will use this information for the purpose of evaluating your use of the website, compiling reports on website activity for website operators and providing other services relating to website activity and internet usage.
								
								Google will not associate your IP address with any other data held by Google. You may refuse the use of cookies by selecting the appropriate settings on your browser, however please note that if you do this you may not be able to use the full functionality of this website.
								
								By using this website, you consent to the processing of data about you by Google in the manner and for the purposes set out above. You can also prevent Google from collecting information (including your IP address) via cookies and processing this information by downloading this browser plugin and installing it: https://tools.google.com/dlpage/gaoptout.</p>
								
								<b>How we use the information we collect from you?.</b>
								
								<p>We collect and use your personal data on secured servers. We ask third organisms to check and certify our confidentiality principles.</p>
						<!-- socail network of the page -->
						<ul class="social-network list-unstyled">
						 	<li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
							<li><a href="javascript:void(0);"><i class="fa fa-twitter active"></i></a></li>
							<li><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="javascript:void(0);"><i class="fa fa-pinterest"></i></a></li>
						</ul>
					</header>
				</div>
			</div>
		</main>
		<!-- footer of the page -->
		<footer id="footer" class="bg-black">
			<!-- footer aside of the page -->
			<aside class="footer-aside bg-grey">
				<!-- socail network of the page -->
				<ul class="social-network list-unstyled">
					<li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
					<li><a href="javascript:void(0);"><i class="fa fa-twitter active"></i></a></li>
					<li><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="javascript:void(0);"><i class="fa fa-pinterest"></i></a></li>
				</ul>
				<div class="payment-img">
					<a href="javascript:void(0);"><img src="images/img35.png" class="img-responsive" alt="Payment Card"></a>
				</div>
				<a id="back-top" class="round"><i class="fa fa-chevron-up"></i></a>
			</aside>
			<!-- footer folder of the page -->
			<div class="footer-holder">
				<div class="container">
					<div class="row mar-bt">
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="logo">
								<a {{url('/')}}><img class="img-responsive" src="images/logo.png" alt="vineyard" ></a>
							</div>
							<!-- contact list of the page -->
							<ul class="list-unstyled contact-list">
								<li>Address : No 40 Adeyemi Lawson st off McPherson Ikoyi,<br class="hidden-xs"> Lagos, Nigeria</li>
								<li>Email: <a href="mailto:info.food15.com">info@food15.com.ng</a></li>
								 <li>Phone: <a href="tell:08189862968">08189862968</a></li>
							</ul>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-2">
							<h3 class="heading3">My Accounts</h3>
							<!-- f nav of the page -->
							<ul class="list-unstyled f-nav">
								<li><a href="javascript:void(0);">My account</a></li>
								<li><a href="javascript:void(0);">My orders</a></li>
								<li><a href="javascript:void(0);">Register</a></li>
								<li><a href="javascript:void(0);">Login</a></li>
							</ul>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-2">
							<h3 class="heading3">Quick link</h3>
							<!-- f nav of the page -->
							<ul class="list-unstyled f-nav">
								<li><a href="javascript:void(0);">Blog</a></li>
								<li><a href="javascript:void(0);">Help Center</a></li>
								<li><a href="javascript:void(0);">Report Spam</a></li>
								<li><a href="javascript:void(0);">FAQs</a></li>
							</ul>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4">
							<h4 class="heading3">Tag Clound</h4>
							<!-- tags list of the page -->
							<ul class="list-unstyled tags-list">
								<li><a href="javascript:void(0);">Music</a></li>
								<li><a href="javascript:void(0);">Travel</a></li>
								<li><a href="javascript:void(0);">video</a></li>
								<li><a href="javascript:void(0);">Ecommerce</a></li>
								<li><a href="javascript:void(0);">feature</a></li>
								<li><a href="javascript:void(0);">text</a></li>
								<li><a href="javascript:void(0);">sports</a></li>
								<li><a href="javascript:void(0);">fashion</a></li>
								<li><a href="javascript:void(0);">store</a></li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<!-- footer nav of the page -->
							<ul class="list-unstyled footer-nav text-center">
								<li><a href="{{url('about')}}">About</a></li>
								<li><a href="{{url('terms')}}">Terms &amp; Conditions</a></li>
								<li><a href="{{url('privacy')}}">Privacy Policy</a></li>
								<li><a href="{{url('contact')}}">Contact</a></li>
							</ul>
						</div>													
						<div class="col-xs-12">
							<div class="copyright text-center">
								<p>Copyright<a href="javascript:void(0);"> VineYard</a> © 2019. All rights reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- loader of the page -->
		<div id="loader" class="loader-holder">
			<div class="block"><img src="images/svg/hearts.svg" width="100" alt="loader"></div>
		</div>
	</div>
	
	<!-- include jQuery -->
	<script src="js/jquery.js"></script>
	<!-- include jQuery -->
	<script src="js/plugins.js"></script>
	<!-- include jQuery -->
	<script src="js/jquery.main.js"></script>
</body>
</html>