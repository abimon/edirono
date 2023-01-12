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

	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('storage/css/bootstrap.min.css')}}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('storage/css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="{{asset('storage/js/modernizr-2.6.2.min.js')}}"></script>
	<style>
		a {
			text-decoration: none;
		}

		a:hover {
			color: cyan;
		}
	</style>
</head>

<body>

	<div class="fh5co-loader"></div>

	<div>
		<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
			<div class="container">
				<a class="navbar-brand" href="/"><img src="{{asset('storage/images/backgrounds/LogoRono.png')}}" width="60" height="60"></a>
				<div class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</div>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mb-2" style='font-family: "Times New Roman", Times, serif;  font-size: 18px; line-height: 32px; '>
						<li class="nav-item">
							<a class="nav-link text-dark" href="/knits">KNITS</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								ARCHS
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="#">Interiors</a></li>
								<li><a class="dropdown-item" href="#">Landscaping</a></li>
								<li><a class="dropdown-item" href="#">Structures</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div style="min-height:400px;">
			@yield('content')
		</div>
		<div class="container">
			<footer id="fh5co-footer" role="contentinfo">
				<div class="row">
						<div class="col-md-4 fh5co-widget">
							<h4>About Us</h4>
							<p>We are a focused and client prioritized organization. To us your request is a command we but have to obey. Daily, we are determined to make the best out of our efforts and meet the client's utmost need</p>
						</div>
						<div class="col-md-4"></div>
						<!--
					<div class="col-md-4 col-md-push-1">
						<h4>Latest Projects</h4>
						<ul class="fh5co-footer-links">
							<li><a href="#">JBC Stadium</a></li>
						</ul>
					</div>
					-->
						<div class="col-md-4">
							<h4>Contact Information</h4>
							<ul class="fh5co-footer-links">
								<li><i class="icon-whatsapp"></i> <a href="https://wa.me/+254715090098">+254 715 090 098</a></li>
								<li><i class="icon-phone"></i> <a href="tel://+254715090098">+254 715 090 098</a></li>
								<li><i class="icon-mail"></i> <a href="mailto:info@ronoarchsandknits.com">info@ronoarchsandknits.com</a></li>
							</ul>
						</div>
				</div>

				<div class="row copyright">
					<div class="col-md-12 text-center">
						<p>
							<small class="block">&copy; {{date('Y')}} RonoArchs&Knits. All Rights Reserved.</small>
							<small class="block">Designed by <a href="https://apekinc.top" target="_blank">APEK INC</a></small>
						</p>
						<p>
						<ul class="fh5co-social-icons">
							<li><a href=""><i class="icon-twitter"></i></a></li>
							<li><a href="https://www.facebook.com/edimon.ombati.3/"><i class="icon-facebook"></i></a></li>
							<li><a href=""><i class="icon-linkedin"></i></a></li>
							<li><a href="https://github.com/abimon"><i class="icon-github"></i></a></li>
							<li><a href="https://+254701583807"><i class="icon-whatsapp"></i></a></li>
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
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

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