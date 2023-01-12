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
	<div id="carouselExampleDark" class="carousel carousel-dark slide mb-5" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active" data-bs-interval="10000">
				<img src="{{$image5}}" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5 class="text-white">TV Room</h5>
					<p class="text-white">The best Place to watch your fevourite TV program or movie.</p>
				</div>
			</div>
			<div class="carousel-item" data-bs-interval="2000">
				<img src="{{$image6}}" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5 class="text-white">Sitting Room</h5>
					<p class="text-white">Rest isn't satisfying unless it is comfortable. Get your sitting room done.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="{{$image7}}" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5 class="text-white">Dinning Rooms</h5>
					<p class="text-white">The best places to take your meals with a lot of serenity.</p>
				</div>
			</div>
		</div>
	</div>
	<div id="fh5co-portfolio">
		<div class="row nopadding">
			@foreach($projects as $project)
			<div class="col-md-6 animate-box">
				<a href="/projects/{{$project->title}}" class="portfolio-grid">
					<img src="{{asset('storage/projects/'.$project->file_path)}}" class="img-responsive">
					<div class="desc">
						<h3>{{$project->title}} Project</h3>
						<span>{{$project->project_location}}</span>
					</div>
				</a>
			</div>
			@endforeach
		</div>
	</div>
</div><!-- END container -->

@endsection