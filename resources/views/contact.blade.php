@extends('layout')

@section('title')
	News
@stop

@section('content')
<section id="author">
		<div class="container">
			<div class="col-md-3 col-sm-12">
				<img src="assets/img/author.jpg" class="img-responsive">
			</div>
			<div class="col-md-9 col-sm-12">
				<h1>About John Doe</h1>
				<p class="link">
					<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
					<a href="facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-wifi" aria-hidden="true"></i></a>
				</p>
				<p class="tittle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			</div>
			<div class="col-md-12 col-sm-12">
				<p class="border">“Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker ”<br>
					<span>&ndash;&ndash; <i>Admin</i></span>
				</p>
			</div>
			<div class="archives">
				<div class="col-md-3 col-sm-12"><h2>Author's Archives</h2></div>
				<div class="col-md-9 hidden-sm"><div class="xett"></div></div>
				<div class="col-md-12">
					<div class="col-md-3 col-sm-12"><img src="assets/img/arch.jpg" class="img-responsive"></div>
					<div class="col-md-9 col-sm-12">
						<a href="#"><h4>
						Extreme Bike Ride in Ecuador Mountains</h4></a>
						<a href="#"><span>25 January, 2015</span></a>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</p>
					</div>
				</div>
			</div>
		</div>
	</section>
@stop
