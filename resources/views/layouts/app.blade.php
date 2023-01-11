<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>RonoArchs&amp;Knits</title>
    <link rel="shortcut icon" href="{{asset('storage/images/backgrounds/LogoRono.png')}}" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Playfair+Display" rel="stylesheet">
	

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('storage/css/style.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('storage/css/bootstrap.css')}}">

	<!-- Modernizr JS -->
	<script src="{{asset('storage/js/modernizr-2.6.2.min.js')}}"></script>
	<style>
		a{
			text-decoration: none;
		}
	</style>
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="top-menu">
				<div class="row">
					<div class="col-sm-2">
                    <div id="fh5co-logo"><a href="/"><img src="{{asset('storage/images/backgrounds/LogoRono.png')}}" width="60" height="60"></a></div>
						<!--<div id="fh5co-logo"><a href="index.html">EDI<span>TH.</span></a></div>-->
					</div>
					<div class="col-sm-10 text-right menu-1">
						<ul>
							<li class="has-dropdown"><a href="/single">Archs</a>
								<ul class="dropdown">
									<li><a href="#">Infrastructure</a></li>
									<li><a href="#">Residential</a></li>
									<li><a href="#">Environmental</a></li>
									<li><a href="#">Megabuilders</a></li>
								</ul>
							</li>
                            <li><a href="/single">Knits</a></li>
							<li><a href="contact">Contact</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
	@yield('content')
	<div class="container">
		<footer id="fh5co-footer" role="contentinfo">
			<div class="row">
				<div class="col-md-3 fh5co-widget">
					<h4>About Us</h4>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
				</div>
				<div class="col-md-3 col-md-push-1">
					<h4>Latest Projects</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">JBC Stadium</a></li>
						<li><a href="#">T-Mobile Arena</a></li>
						<li><a href="#">Target Field</a></li>
						<li><a href="#">London Stadium</a></li>
					</ul>
				</div>

				<div class="col-md-3 col-md-push-1">
					<h4>Links</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Home</a></li>
						<li><a href="#">Work</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">About us</a></li>
					</ul>
				</div>

				<div class="col-md-3">
					<h4>Contact Information</h4>
					<ul class="fh5co-footer-links">
						<li>198 West 21th Street, <br> Suite 721 New York NY 10016</li>
						<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
						<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
						<li><a href="http://gettemplates.co">gettemplates.co</a></li>
					</ul>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; {{date('Y')}}RonoArchs&Knits. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="https://apekinc.top" target="_blank">APEK INC</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>
		</footer>
	</div><!-- END container -->
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{asset('storage/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('storage/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('storage/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('storage/js/jquery.waypoints.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{asset('storage/js/jquery.flexslider-min.js')}}"></script>
	<!-- Sticky Kit -->
	<script src="{{asset('storage/js/sticky-kit.min.js')}}"></script>
	<!-- Main -->
	<script src="{{asset('storage/js/main.js')}}"></script>

	</body>
</html>

