@extends('layout')

@section('title')
	News
@stop

@section('content')
	<section id="pages">
		<div class="container">
			<div class="col-md-12">
				<p><a href="{{url($post->category->submenu->menu->link)}}">{{$post->category->submenu->menu->name}}</a> / <a href="{{url($post->category->submenu->menu->link)}}">{{$post->category->submenu->name}}</a> /{{$post->title}}</p>
			</div>
			<div class="col-lg-9 col-md-9 section-single">
				<h1><b>{{$post->title}}</b></h1>
				<img src="/img/{{$post->image}}" alt="Post img">
				<br>
				<br>
				<span class="fa fa-clock-o" aria-hidden="true">{{$post->deadline}}</span>  <span class="fa fa-rss" aria-hidden="true"> {{$post->user->name}}</span></br>
				<br>
				<p>{{$post->body}}</p>


				<div class="col-md-9  section-tags">

					<div class="headline-row">
						<h1 class="section-title caticon sbx"><i>T</i><span class="sport"></span>Tags</h1>
					</div>

					<ul class="post-tags">
						@foreach( $post->tags as $tag)
							<li><a href="#">{{ $tag->name }}</a></li>
						@endforeach
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
								<img class="img-responsive" src="/img/middle-post-thumb1.jpg" alt="Post img">
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
				<div class="col-md-12">
					<div class="headline-row">
						<h1 class="section-title caticon sbx"><i>T</i><span class="sidebar-trending"></span>Trending</h1>
					</div>
						<ul class="media-list">
							<li class="media post-spacer">
								<div class="media-body">
									<h4 class="media-heading"><a href="#">Startup released a chip for little pets</a></h4>
									<p class="section-title caticon test"><span class="sidebar-trending"><i class="fa fa-clock-o" aria-hidden="true"></i></span> 25 January, 2015</p>
								</div>
							</li>
							<li class="media post-spacer">
								<div class="media-body">
									<h4 class="media-heading"><a href="#">How to save money without leaving your couch </a></h4>
									<p class="section-title caticon test"><span class="sidebar-trending"><i class="fa fa-clock-o" aria-hidden="true"></i></span> 25 January, 2015</p>
								</div>
							</li>
							<li class="media post-spacer">
								<div class="media-body">
									<h4 class="media-heading"><a href="#">$160G worth of cheese stolen in Wisconsin</a></h4>
									<p class="section-title caticon test"><span class="sidebar-trending"><i class="fa fa-clock-o" aria-hidden="true"></i></span> 25 January, 2015</p>
								</div>
							</li>
							<li class="media post-spacer">
								<div class="media-body">
									<h4 class="media-heading"><a href="#">Revolutionary new health tech scares some experts </a></h4>
									<p class="section-title caticon test"><span class="sidebar-trending"><i class="fa fa-clock-o" aria-hidden="true"></i></span> 25 January, 2015</p>
								</div>
							</li>
						</ul>
				</div>


				<div class="col-lg-12 sidebar-popular">
				<div class="headline-row">
					<h1 class="section-title caticon sbx"><i>P</i><span class="sidebar-trending"></span>Popular</h1>
				</div>



				<div class="col-md-12">
					<div class="row">
					<ul class="media-list">

						<li class="media col-md-12">
							<div class="media-left">
							  <a href="#"><img class="media-object" src="/img/xs-post-thumb.jpg" alt="Post img"></a>
							</div>
							<div class="media-body">
							  <h4 class="media-heading"><a href="#">Startup released a chip for little pets</a></h4>
							  <p><span class="sidebar-trending"><i class="fa fa-clock-o" aria-hidden="true"></i></span> 25 January,2015</p>
							</div>
						</li>

						<li class="media col-md-12">
							<div class="media-left">
							  <a href="#"><img class="media-object" src="/img/xs-post-thumb.jpg" alt="Post img"></a>
							</div>
							<div class="media-body">
							  <h4 class="media-heading"><a href="#">New Canon lens available</a></h4>
							  <p><span class="sidebar-trending"><i class="fa fa-clock-o" aria-hidden="true"></i></span> 25 January,2015</p>
							</div>
						</li>

						<li class="media col-md-12">
							<div class="media-left">
							  <a href="#"><img class="media-object" src="/img/xs-post-thumb.jpg" alt="Post img"></a>
							</div>
							<div class="media-body">
							  <h4 class="media-heading"><a href="#">Pioneer makes you better DJs</a></h4>
							  <p><span class="sidebar-trending"><i class="fa fa-clock-o" aria-hidden="true"></i></span> 25 January,2015</p>
							</div>
						</li>

						<li class="media col-md-12">
							<div class="media-left">
							  <a href="#"><img class="media-object" src="/img/xs-post-thumb.jpg" alt="Post img"></a>
							</div>
							<div class="media-body">
							  <h4 class="media-heading"><a href="#">Minimal organized special gadgets</a></h4>
							  <p><span class="sidebar-trending"><i class="fa fa-clock-o" aria-hidden="true"></i></span> 25 January,2015</p>
							</div>
						</li>


					</ul>
					</div>
				</div>

			</div>
			</div>

		</div>
	</section>
@stop
