<!DOCTYPE html>
<html lang="en">
<head>
<title>Laverna</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Laverna template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/styles/bootstrap-4.1.2/bootstrap.min.css') }}">
<link href="{{ asset('assets/frontend/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/plugins/OwlCarousel2-2.3.4/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/plugins/OwlCarousel2-2.3.4/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/plugins/OwlCarousel2-2.3.4/animate.css') }}">
<link href="{{ asset('assets/frontend/plugins/jquery-datepicker/jquery-ui.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/frontend/plugins/colorbox/colorbox.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/styles/responsive.css') }}">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header" style="background-color:black;">
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo"><a href="#">Laverna</a></div>
			<div class="ml-auto d-flex flex-row align-items-center justify-content-start">
				<nav class="main_nav">
					<ul class="d-flex flex-row align-items-start justify-content-start">
						<li class="active"><a href="index.html">Home</a></li>
						<li><a href="about.html">About us</a></li>
						<li><a href="#">Rooms</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</nav>
				<div class="ml-3"><a href="booking.html" ><i class="fa fa-shopping-cart text-white fa-2x" ></i> <span class="badge badge-pill badge-danger">3</span> </a>  </div>
				<div class="book_button"><a href="booking.html">Book Online</a></div>
				<div class="header_phone d-flex flex-row align-items-center justify-content-center">
					<span>Package</span>
				</div>

				<!-- Hamburger Menu -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu trans_400 d-flex flex-column align-items-end justify-content-start">
		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="menu_content">
			<nav class="menu_nav text-right">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About us</a></li>
					<li><a href="#">Rooms</a></li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>
		</div>
		<div class="menu_extra">
			<div class="menu_book text-right"><a href="#">Book online</a></div>
			<div class="menu_phone d-flex flex-row align-items-center justify-content-center">
				<img src="{{ asset('assets/frontend/images/phone-2.png') }}" alt="">
				<span>0183-12345678</span>
			</div>
		</div>
	</div>

    {{-- Content --}}
    @yield('content')
    {{-- End Content --}}

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_content">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_logo_container text-center">
							<div class="footer_logo">
								<a href="#"></a>
								<div>Laverna</div>
								<div>since 1945</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row footer_row">
					
					<!-- Address -->
					<div class="col-lg-3">
						<div class="footer_title">Our Address</div>
						<div class="footer_list">
							<ul>
								<li>Beach Str. 345</li>
								<li>67559 Miami</li>
								<li>USA</li>
							</ul>
						</div>
					</div>

					<!-- Reservations -->
					<div class="col-lg-3">
						<div class="footer_title">Reservations</div>
						<div class="footer_list">
							<ul>
								<li>Tel: 345 5667 889</li>
								<li>Fax; 6783 4567 889</li>
								<li>reservations@hotellaverna.com</li>
							</ul>
						</div>
					</div>

					<!-- Newsletter -->
					<div class="col-lg-3">
						<div class="footer_title">Newsletter</div>
						<div class="newsletter_container">
							<form action="#" class="newsletter_form" id="newsletter_form">
								<input type="email" class="newsletter_input" placeholder="Your email address" required="required">
								<button class="newsletter_button">Subscribe</button>
							</form>
						</div>
					</div>

					<!-- Footer images -->
					<div class="col-lg-3">
						<div class="certificates d-flex flex-row align-items-start justify-content-lg-between justify-content-start flex-lg-nowrap flex-wrap">
							<div class="cert"><img src="{{ asset('assets/frontend/images/cert_1.png') }}" alt=""></div>
							<div class="cert"><img src="{{ asset('assets/frontend/images/cert_2.png') }}" alt=""></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Aslan
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
	</footer>
</div>

<script src="{{ asset('assets/frontend/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/frontend/styles/bootstrap-4.1.2/popper.js') }}"></script>
<script src="{{ asset('assets/frontend/styles/bootstrap-4.1.2/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/OwlCarousel2-2.3.4/owl.carousel.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/easing/easing.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/progressbar/progressbar.min.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/jquery-datepicker/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/colorbox/jquery.colorbox-min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/custom.js') }}"></script>
</body>
</html>