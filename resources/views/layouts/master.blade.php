<!DOCTYPE HTML>
<html>
	<head>
	<title>@yield('title')</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="asset/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="asset/css/icomoon.css">
	<!-- Ion Icon Fonts-->
	<link rel="stylesheet" href="asset/css/ionicons.min.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="asset/css/bootstrap.min.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="asset/css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="asset/css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="asset/css/owl.carousel.min.css">
	<link rel="stylesheet" href="asset/css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="asset/css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="asset/fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="asset/css/style.css">

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-sm-7 col-md-9">
							<div id="colorlib-logo"><a href="/">Informatics Market</a></div>
						</div>
						<div class="col-sm-5 col-md-3">
			            <form action="#" class="search-wrap">
			               <div class="form-group">
			                  <input type="search" class="form-control search" placeholder="Search">
			                  <button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
			               </div>
			            </form>
			         </div>
		         </div>
					<div class="row">
						<div class="col-sm-12 text-left menu-1">
							<ul>
								<li><a href="/">Home</a></li>
								<li class="has-dropdown">
									<a href="/produk">Produk</a>
									<ul class="dropdown">
										<li><a href="/produk-detail">Product Detail</a></li>
										<li><a href="/cart">Shopping Cart</a></li>
										<li><a href="/checkout">Checkout</a></li>
										<li><a href="/order-complete">Order Complete</a></li>
										<li><a href="/wishlist">Wishlist</a></li>
									</ul>
								</li>
								<li><a href="/about">About</a></li>
								<li><a href="/contact">Contact</a></li>
								<li class="cart"><a href="/cart"><i class="icon-shopping-cart"></i> Cart [0]</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="sale">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 offset-sm-2 text-center">
							<div class="row">
								<div class="owl-carousel2">
									<div class="item">
										<div class="col">
											<h3><a href="/produk">25% off (Almost) Everything! Use Code: Summer Sale</a></h3>
										</div>
									</div>
									<div class="item">
										<div class="col">
											<h3><a href="/produk">Our biggest sale yet 50% off all summer shoes</a></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="/">Home</a></span> / <span>@yield('page')</span></p>
					</div>
				</div>
			</div>
		</div>

		@yield('content')

		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col footer-col colorlib-widget">
						<h4>About Informatics Market</h4>
						<p>Kami adalah perusahaan online, sehingga tidak memiliki toko fisik.</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-instagram"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col footer-col colorlib-widget">
						<h4>Customer Care</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="/contact">Contact</a></li>
								<li><a href="#">Returns/Exchange</a></li>
								<li><a href="#">Gift Voucher</a></li>
								<li><a href="/wishlist">Wishlist</a></li>
								<li><a href="#">Special</a></li>
								<li><a href="#">Customer Services</a></li>
								<li><a href="#">Site maps</a></li>
							</ul>
						</p>
					</div>
					<div class="col footer-col colorlib-widget">
						<h4>Information</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="/about">About us</a></li>
								<li><a href="#">Delivery Information</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Support</a></li>
								<li><a href="#">Order Tracking</a></li>
							</ul>
						</p>
					</div>

					<div class="col footer-col">
						<h4>News</h4>
						<ul class="colorlib-footer-links">
							<li><a href="blog.html">Blog</a></li>
							<li><a href="#">Press</a></li>
							<li><a href="#">Exhibitions</a></li>
						</ul>
					</div>

					<div class="col footer-col">
						<h4>Contact Information</h4>
						<ul class="colorlib-footer-links">
							<li>Gedung A1 Jurusan Teknik Informatika <br> Fakultas Teknik Universitas Negeri Surabaya</li>
							<li><a href="tel://1234567920">081 234 567 890</a></li>
							<li><a href="mailto:info@yoursite.com">informaticsmarket@gmail.com</a></li>
							<li><a href="#">i_m.com</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="row">
					<div class="col-sm-12 text-center">
						<p>
							<span>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</span>
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="asset/js/jquery.min.js"></script>
   <!-- popper -->
   <script src="asset/js/popper.min.js"></script>
   <!-- bootstrap 4.1 -->
   <script src="asset/js/bootstrap.min.js"></script>
   <!-- jQuery easing -->
   <script src="asset/js/jquery.easing.1.3.js"></script>
	<!-- Waypoints -->
	<script src="asset/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="asset/js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="asset/js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="asset/js/jquery.magnific-popup.min.js"></script>
	<script src="asset/js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="asset/js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="asset/js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="asset/js/main.js"></script>

	</body>
</html>