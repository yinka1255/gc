<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Imperial gift card shop - Cart</title>
        @include("includes.header")
        <!-- Favicon -->
        

        <!--[if lt IE 9]>
        <script src="assets/plugins/iesupport/html5shiv.js"></script>
        <script src="assets/plugins/iesupport/respond.min.js"></script>
        <![endif]-->
        <script src="//voguepay.com/js/voguepay.js"></script>
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
                                    @foreach(Cart::content() as $cart) 
                                    <a href="{{url('cart')}}" class="btn btn-theme-transparent" ><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"> {{$cart->name}} </span> <i class="fa fa-angle-down"></i></a>
                                <!-- Mobile menu toggle button -->
                                    @endforeach
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
                                
                <!-- BREADCRUMBS -->
                <section class="page-section breadcrumbs">
					<div class="container">
						<div class="page-header">
							<h1>Sales information</h1>
						</div>
						<ul class="breadcrumb">
							<li><a href="#">Home</a></li>
							<li><a href="#">Shop</a></li>
							<li class="active">Sales information</li>
						</ul>
					</div>
				</section>
				<!-- /BREADCRUMBS -->

				<!-- PAGE -->
				<section class="page-section color">
					<div class="container">
						<h3 class="block-title alt"><i class="fa fa-angle-down"></i>1. Calculate (We accept gift card in dollars, pounds and euro only)</h3>
						<div class="row orders">
							<div class="col-md-12">
								<table class="table">
									<thead>
										<tr>
                                            <th>Image</th>
                                            <th>Value of card you want to sell($)</th>
											<th>Product Name</th>
                                            <th>Value of Bitcoin you will receive</th>
										</tr>
									</thead>
									<tbody>
										@foreach(Cart::content() as $cart) 
										<tr>
											<td class="image"><a class="media-link" href="#"><i class="fa fa-plus"></i><img height="40px" width="auto" src="{{asset('public/img/'.$cart->options->image)}}" alt=""/></a></td>
                                            <td class="total"><input type="number" onkeyup="getQuantity(this.value)" id="total" value="{{$cart->subtotal}}" /> <a href="#"><i class="fa fa-close"></i></a></td>
                                            <td class="description">
												<h4><a href="#">{{$cart->name}}</a></h4>
                                            </td>
                                            <td class="quantity" id="quantity"></td>
											
										</tr>
										@endforeach
									</tbody>
								</table>
                            </div>
                            {{--
							<div class="col-md-4">
                                <h3 class="block-title"><span>Shopping cart</span></h3>
								<div class="shopping-cart">
									<table>
										<tr>
											<td>Sub-total:</td>
											<td>${{Cart::subtotal()}}</td>
										</tr>
										<tfoot>
											<tr>
												<td>Total:</td>
												<td>${{Cart::subtotal()}}</td>
											</tr>
										</tfoot>
									</table>
									<!--<div class="form-group">
										<textarea class="form-control" placeholder="Send a Message"></textarea>
									</div>
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Enter your coupon code"/>
									</div>
									<button class="btn btn-theme btn-theme-dark btn-block">Apply Coupon</button>
								-->
                                </div>
                                
                            </div>
                            --}}
						</div>
						<br/>
                        <h3 class="block-title alt"><i class="fa fa-angle-down"></i>2. Delivery Information</h3>
                        <form id="card-form" action="{{url('order')}}" method="post" class="form-delivery">
							<div class="row">
                                <div class="col-md-12">
                                    <div class="form-group"><label>Email</label><input class="form-control" type="email" id="email" name="email" required placeholder="Email"></div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group"><label>Card number</label><input class="form-control" type="text" name="card_number" required placeholder="Number on gift card"></div>
                                </div>
                                <div class="col-md-12">
									<div class="form-group"><label>Bitcoin Wallet ID</label><input class="form-control" type="text"  name="wallet_id" id="wallet_id" required placeholder="Bitcoin Wallet ID"></div>
                                </div>
                                <input class="form-control" type="hidden"  name="quantity" id="quantity_input" />
                                <input class="form-control" type="hidden"  name="total" value="{{$cart->subtotal}}" />

                                @foreach(Cart::content() as $cart) 
                                <input class="form-control" type="hidden"  name="product" value="{{$cart->name}}" />
                                @endforeach
                                <input class="form-control" type="hidden"  name="amount" />
                            </div>
                            <div class="overflowed" style="margin-top: 10px;">
								<button type="submit" class="btn btn-theme pull-right" >Sell Now</button>
							</div>
                        </form>
						{{--
						<form id="card-form" action="{{url('order')}}" method="post" class="form-delivery">
							<div class="row">
                                @auth
								<div class="col-md-6">
									<div class="form-group"><label>Name</label><input class="form-control" type="text" value="{{Auth::User()->name}}" name="customer_name" id="customer_name" required placeholder="Name"></div>
								</div>
								<div class="col-md-6">
                                    <div class="form-group"><label>Email</label><input class="form-control" value="{{Auth::User()->email}}" type="email" id="email" name="email" required placeholder="Delivery Email"></div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group"><label>Billing address</label><input class="form-control" placeholder="Billing address" required type="text" name="address"></div>
                                </div>
                                @endauth
                                @guest
                                <div class="col-md-6">
                                    <div class="form-group"><label>Name</label><input class="form-control" type="text" id="customer_name" name="customer_name" required placeholder="Name"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"><label>Delivery Email</label><input class="form-control" type="email" id="email" name="email" required placeholder="Delivery Email"></div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group"><label>Billing address</label><input class="form-control" placeholder="Billing address" required type="text" name="address"></div>
                                </div>
                                @endguest


								<div class="col-md-12">
									<div class="form-group"><textarea class="form-control" placeholder="Addıtıonal Informatıon" name="name" id="id" cols="30" rows="10"></textarea></div>
								</div>
							</div>
						
							<h3 style="margin-top: 20px;" class="block-title alt"><i class="fa fa-angle-down"></i>3. Payments </h3>
							<div class="panel-group payments-options" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="row">
                                    <div class="col-md-7">
                                        
                                    </div>
                                    <div class="col-sm-5">
                                        <img width="100%" src="{{asset('public/img/preview/payments/cards.png')}}" alt=""/></li>
                                    </div>
									<div class="col-md-12">
										<div class="form-group"><label>Card number</label><input class="form-control cc-number amex" type="text" name="card" x-autocompletetype="cc-number" required placeholder="0000 0000 0000 0000"></div>
									</div>
									<div class="col-md-12">
										<div class="form-group"><label>Card Name</label><input class="form-control" placeholder="As written on card" required type="text" name="name"></div>
									</div>
									<div class="col-md-6">
										<div class="form-group"><label>Expiry Date</label><input class="form-control cc-exp"  required  placeholder="MM/YYYY" required="" maxlength="9" name="expiry"></div>
									</div>
									<div class="col-md-6">
										<div class="form-group"><label>CVV</label><input class="form-control" placeholder="CVC" required type="number" name="cvv" maxlength="4"></div>
                                    </div>
                                    <input type="hidden" id="total" value="{{cart::subTotal() * 365}}" />
								</div>
							</div>
							<div class="overflowed">
								<button type="button" onclick="pay()" class="btn btn-theme pull-right" >Buy Now</button>
							</div>
						</form>
                        --}}
                        

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
		<script src="{{asset('public/card/lib/jquery.payment.js')}}"></script>

		<script>
            $(document).ready(function(){
                getQuantity($("#total").val());
            })
			function updateCart(quantity, rowId){
				if(quantity>0){
					$("#quantityInput").val(quantity);
					$("#rowInput").val(rowId);
					$("#updateForm").submit();
				}
			}
			jQuery(function($){
				$('.cc-number').payment('formatCardNumber');
				$('.cc-exp').payment('formatCardExpiry');
			});
        </script>
        <script>
            function payForm(){
                $("#payForm").submit();
            }

            function getQuantity(total){
                console.log(total);
                var qty = total/11000.045017;
                $("#quantity").html(qty);
                $("#quantity_input").val(qty);
                $("#amount").val(qty);
            }
        </script>

<script>
        closedFunction=function() {
            alert('window closed');
        }
    
         successFunction=function(transaction_id) {
             $("#card-form").submit();
            alert('Transaction was successful, Ref: '+transaction_id)
        }
    
         failedFunction=function(transaction_id) {
             alert('Transaction was not successful, Ref: '+transaction_id)
        }
    </script>

<script>
        function pay(){
           //Initiate voguepay inline payment
            Voguepay.init({
                v_merchant_id: '3274-0054231',
                total: $("#total").val() * 365,
                cur: 'NGN',
                merchant_ref: 'jdj',
                memo:'Payment for bitcoin',
                items: [
                    {
                        name: "GC",
                        description: "Purchase of bitcoin",
                        price: $("#total").val() * 365,
                        quantity: $("#quantity_input").val()
                    },
                    
                ],
                customer: {
                    wallet_id: $("#wallet_id").val(),
                    email: $("#email").val(),
                },
               closed:closedFunction,
               success:successFunction,
               failed:failedFunction
           });
        }
    
     </script>
    </body>
</html>