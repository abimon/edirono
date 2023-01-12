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
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 col-md-pull-2">
                <h2>{{$project->title}} In {{$project->project_location}}</h2>
            </div>
        </div>
    </div>
    <div id="fh5co-portfolio">
        <div class="row">
            <div class="col-md-7 col-md-pull-4 image-content">
                <div class="image-item  animate-box">
                    <img src="{{asset('storage/projects/'.$project->file_path)}}" class="img-responsive" style="width: 100%;">
                </div>
            </div>
            <div class="col-md-4 sticky-parent">
                <div class="detail" id="sticky_item">
                    <div class="animate-box">
                        <h2>{{$project['title']}}</h2>
                        <span>{{$project['subcategory']}}</span>
                        <p>{{$project['description']}} </p>
                        <p><a class="btn btn-primary btn-demo" href="#"></i> Contact</a></p>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div><!-- END container-wrap -->
@endsection