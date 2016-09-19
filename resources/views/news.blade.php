@extends('layout')

@section('title')
	News
@stop

@section('content')
<section id="pages">
	<div class="container">
		<div class="col-md-12">
			<p><a href="#">Home</a> / <a href="#">Category</a> / Mixed Classic Coffee Shop and Bistro opened</p>
		</div>
		<div class="col-lg-9 col-md-9 section-single">
			<h1 class="section-title caticon sbx"><i>T</i><span class="sidebar-trending"></span>Technology</h1>
			<h1><b>iWatch Pre-Order</b></h1>

			<img src="img/single-post-featured.jpg" alt="Post img">
			<br>
			<br>
			<span class="fa fa-clock-o" aria-hidden="true"> 25 January, 2015</span>  <span class="fa fa-rss" aria-hidden="true"> John Doe</span></br>
			<br>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br><br>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>


			<div class="col-md-9  section-tags">

				<div class="headline-row">
					<h1 class="section-title caticon sbx"><i>T</i><span class="sport"></span>Tags</h1>
				</div>

				<ul class="post-tags">
					<li><a href="#">Videos</a></li>
					<li><a href="#">Sport</a></li>
					<li><a href="#">Gastro</a></li>
					<li><a href="#">Tech</a></li>
					<li><a href="#">Urbanism</a></li>
				</ul>


			</div>
			<div class="col-md-12 section-post-related">

			<div class="headline-row">
				<h1 class="section-title caticon sbx"><i>T</i><span class="sport"></span>Related Posts</h1>
			</div>

			<div class="row thumb-medium-with-content">
				<!-- Post -->
				<article class="col-md-12 col-sm-12 col-xs-12 post post-spacer">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<div class="entry-header">
							<img class="img-responsive" src="img/middle-post-thumb1.jpg" alt="Post img">
						</div>
					</div>
					<div class="col-md-8 col-sm-8">
						<div class="post-txt">

							<h3><a href="#link" class="title">Extreme Bike Ride in Ecuador Mountains</a></h3>
							<p class="section-title caticon test"><span class="sidebar-trending"><i class="fa fa-clock-o" aria-hidden="true"></i></span> 25 January, 2015</p>
							<p class="hidden-xs">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</p>
						</div>
					</div>
				</div>
				</article>

			</div>
		</div>
		</div>


		<div class="col-md-3">

		</div>

	</div>
</section>
@stop
