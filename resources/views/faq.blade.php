@extends('layouts.master')

@section('content')

<!-- start banner Area -->
<section class="home-banner-area">
	<div class="container">
		<div class="row fullscreen d-flex align-items-center justify-content-between">
			<div class="home-banner-content col-lg-6 col-md-6">
				<h1>
					App That <br> Suits You Better
				</h1>
				<p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards.</p>
				<div class="download-button d-flex flex-row justify-content-start">
					<div class="buttons flex-row d-flex">
						<i class="fa fa-apple" aria-hidden="true"></i>
						<div class="desc">
							<a href="#">
								<p>
									<span>Available</span> <br>
									on App Store
								</p>
							</a>
						</div>
					</div>
					<div class="buttons dark flex-row d-flex">
						<i class="fa fa-android" aria-hidden="true"></i>
						<div class="desc">
							<a href="#">
								<p>
									<span>Available</span> <br>
									on Play Store
								</p>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="banner-img col-lg-4 col-md-6">
				<img class="img-fluid" src="img/banner-img.png" alt="">
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->

<!-- Start feature Area -->
<section class="feature-area section-gap-top">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
					<h2>Unique Features</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
						magna aliqua.
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="single-feature">
					<a href="#" class="title">
						<span class="lnr lnr-book"></span>
						<h3>Expert Technicians</h3>
					</a>
					<p>
						Usage of the Internet is becoming more common due to rapid advancement of technology and power.
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-feature">
					<a href="#" class="title">
						<span class="lnr lnr-book"></span>
						<h3>Professional Service</h3>
					</a>
					<p>
						Usage of the Internet is becoming more common due to rapid advancement of technology and power.
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-feature">
					<a href="#" class="title">
						<span class="lnr lnr-book"></span>
						<h3>Great Support</h3>
					</a>
					<p>
						Usage of the Internet is becoming more common due to rapid advancement of technology and power.
					</p>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- End feature Area -->

<!-- Start about Area -->
<section class="about-area">
	<div class="container">

	</div>
</section>
<!-- End about Area -->

@endsection

@section('javascripts')

@endsection