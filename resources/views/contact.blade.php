@extends('layouts.app')
@section('content')
	<div class="container">
		<div id="fh5co-intro">
			<div class="row animate-box">
				<div class="col-md-12 col-md-offset-2 col-md-pull-2">
					<h2 class="text-center">Contact Us</h2>
				</div>
			</div>
		</div>
		<div>
			<div class="row">
				<div class="col-md-4 animate-box">
					<h3 >Contact Information</h3>
					<ul class="contact-info">
						<li><i class="icon-location4"></i>198 West 21th Street, Suite 721 New York NY 10016</li>
						<li><i class="icon-phone3"></i>+ 1235 2355 98</li>
						<li><i class="icon-location3"></i><a href="#">info@yoursite.com</a></li>
						<li><i class="icon-globe2"></i><a href="#">www.yoursite.com</a></li>
					</ul>
				</div>
				<div class="col-md-8 animate-box">
					<div class="">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Name">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Email">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<textarea name="" class="form-control" id="" cols="30" rows="15" placeholder="Message"></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="submit" value="Send Message" class="btn btn-primary btn-modify">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- END container -->
@endsection