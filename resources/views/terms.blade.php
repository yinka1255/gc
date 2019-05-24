<!DOCTYPE html>
<html lang="en">
<head>
	@include("includes.header")
	<title>Food15 | Terms and conditions</title>
</head>
<body>
	<!-- main container of all the page elements -->
	<div id="wrapper">
		<!-- header of the page -->
		<header id="header" class="wh-clr">
			
			<!-- nav holder of the page -->
			<div class="nav-holder container">
				<div class="row">
					<div class="col-xs-12">
						<nav id="nav">
							<ul class="list-unstyled text-center">
								<li class="n-logo"><a href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" alt="Vine Yard" class="img-responsive"></a></li>
								<li><a href="{{url('/')}}">Home</a></li>
								<!-- dropdownfull of the page -->
								<li>
									<a href="{{url('about')}}">About us</a>
								</li>
								<!-- dropdown of the page -->
								<li class="active">
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
							<h2 class="heading text-uppercase fwLight">Terms and conditions</h2>
							<ul class="list-unstyled breadcrumbs">
								<li><a {{url('/')}}>Home</a></li>
								<li>/</li>
								<li>Terms and conditions</li>
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
						<h1 class="heading text-uppercase">Terms and conditions</h1>
						<div class="header-img">
							<img src="images/bdr-img.png" alt="image description" class="img-responsive">
						</div>
						<p style="text-align: left;">Please carefully read the terms and conditions ("Terms and Conditions") below before placing any order for any of the Goods or Services from https://food15.com.ng. By placing an order for any of the Goods or Services from this Website, whereas it is by phone, through our mobile applications or by any other available channel, you agree to be bound by these Terms and Conditions.

							Section 1: Foods 15 Introduction
							
							We are Food 15, a brand of https://food15.com.ng, unless otherwise stated.</p>
							
							<b>Section 2: Definitions</b>
							<ul>
								<li>2.1. "Agreement" references these Terms and Conditions (T&Cs), the Privacy Policy, any payment instructions provided to you and any other form we might provide to you;</li>
							
								<li>2.2. By "Privacy Policy" we mean the policy accessible on our Website which details how we collect and store your personal data;</li>
							
								<li>2.3. "you", "your" and "yours" are references to you, the person accessing this Website, and placing the orders for the Goods or Services we display on it. Access through any other channel provided by Food 15 will also bound you to these Terms and Conditions;</li>
							
								<li>2.4. "we", "us", "our", and "Food 15" are references to the Company;</li>
							
								<li>2.5. "Goods" is a reference to any goods which we may offer for sale from our Website from at a given time;</li>
							
								<li>2.6. "Service" or "Services" is a reference to any service which we may supply and which you may request via our Website;</li>
							
								<li>2.7. "Partner Restaurant" is a third party, which has agreed to co-operate with the Company to prepare and/or deliver the Goods or Services.</li>
							
								<li>2.8. "Food Delivery" references perishable goods and any form of delivery service, both provided by our Partner restaurants and for both of which our Partner restaurants take full responsibility;</li>
							
								<li>2.9. "Website" is a reference to our Website https://food15.com.ng.ng, our mobile applications or any other platform we will choose to offer our Goods or services.</li>
							</ul>
							<b>Section 3: Ordering</b>
							
							<p>3.1. By placing an order through our Website, you enter into an agreement with Food 15 with respect to the processing of that order and forwarding it to the Participating Restaurant. If you are paying online, Food 15 is also responsible for any returns or refunds. However, the Restaurant remains responsible for the preparation, quality and delivery of your order. You agree to take particular care when providing us with your details and warrant that these details are accurate and complete at the time of ordering. You also warrant that the credit or debit card details that you provide are for your own credit or debit card and that you have sufficient funds to make the payment.</p>
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
								<li><a href="javascript:void(0);">New User</a></li>
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
			<div class="block"><img src="{{asset('public/images/svg/hearts.svg')}}" width="100" alt="loader"></div>
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