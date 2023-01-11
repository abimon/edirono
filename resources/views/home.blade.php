@extends('layouts.app')

@section('content')
<?php
$image1 = asset('storage/images/backgrounds/image1.jpg');
$image2 = asset('storage/images/backgrounds/image2.jpg');
$image3 = asset('storage/images/backgrounds/image3.jpg');
$image4 = asset('storage/images/backgrounds/image4.jpg');
$image5 = asset('storage/images/backgrounds/image5.jpg');
$image6 = asset('storage/images/backgrounds/image6.jpg');
$image7 = asset('storage/images/backgrounds/image7.jpg');
?>
<div class="container">
	<div id="fh5co-intro">
		<div class="animate-box">
			<div class="col-md-pull-2">
				<h2 class="text-center">Rono Archs &amp; Knits</h2>
			</div>
		</div>
	</div>
	
	
	<div id="fh5co-portfolio">
		<div class="row nopadding">
			<div class="col-md-6 padding-right">
				<div class="row">
					<div class="col-md-12 animate-box">
						<a href="/single" class="portfolio-grid">
							<img src="{{$image1}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
							<div class="desc">
								<h3>Dublin Arena Architect Project</h3>
								<span>Building, Arena</span>
							</div>
						</a>
					</div>
					<div class="col-md-12 animate-box">
						<a href="/single" class="portfolio-grid">
							<img src="{{$image2}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
							<div class="desc">
								<h3>Dublin Arena Architect Project</h3>
								<span>Building, Arena</span>
							</div>
						</a>
					</div>
					<div class="col-md-12 animate-box">
						<a href="/single" class="portfolio-grid">
							<img src="{{$image3}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
							<div class="desc">
								<h3>Dublin Arena Architect Project</h3>
								<span>Building, Arena</span>
							</div>
						</a>
					</div>

				</div>
			</div>

			<div class="col-md-6 padding-left">
				<div class="row">
					<div class="col-md-12 animate-box">
						<a href="/single" class="portfolio-grid">
							<img src="{{$image4}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
							<div class="desc">
								<h3>Dublin Arena Architect Project</h3>
								<span>Building, Arena</span>
							</div>
						</a>
					</div>
					<div class="col-md-12 animate-box">
						<a href="/single" class="portfolio-grid">
							<img src="{{$image5}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
							<div class="desc">
								<h3>Dublin Arena Architect Project</h3>
								<span>Building, Arena</span>
							</div>
						</a>
					</div>
					<div class="col-md-12 animate-box">
						<a href="/single" class="portfolio-grid">
							<img src="{{$image6}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
							<div class="desc">
								<h3>Dublin Arena Architect Project</h3>
								<span>Building, Arena</span>
							</div>
						</a>
					</div>

					<div class="col-md-12 animate-box">
						<a href="/single" class="portfolio-grid">
							<img src="{{$image7}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
							<div class="desc">
								<h3>Dublin Arena Architect Project</h3>
								<span>Building, Arena</span>
							</div>
						</a>
					</div>

				</div>
			</div>
		</div>
	</div>
</div><!-- END container -->

@endsection