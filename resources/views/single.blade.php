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
                <h2>Architecture Building In Dublin, Ireland</h2>
            </div>
        </div>
    </div>
    <div id="fh5co-portfolio">
        <div class="row">

            <div class="col-md-4 col-md-push-8 sticky-parent">
                <div class="detail" id="sticky_item">
                    <div class="animate-box">
                        <h2>Dublin Stadium</h2>
                        <span>Architectural Design</span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts far from the countries Vokalia and Consonantia, there live the
                            blind texts.</p>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem
                            provident. Odit ab aliquam dolor eius. </p>
                        <p><a class="btn btn-primary btn-demo" href="#"></i> View Project</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-7 col-md-pull-4 image-content">
                <div class="image-item  animate-box">
                    <img src="{{$image1}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                </div>
                <div class="image-item  animate-box">
                    <img src="{{$image2}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                </div>
                <div class="image-item  animate-box">
                    <img src="{{$image3}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                </div>
                <div class="image-item  animate-box">
                    <img src="{{$image4}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                </div>
                <div class="image-item  animate-box">
                    <img src="{{$image5}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                </div>
            </div>

        </div>
    </div>
</div><!-- END container-wrap -->
@endsection