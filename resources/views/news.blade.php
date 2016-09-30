@extends('layout')

@section('title')
	News
@stop

@section('head')
<style>
	.infoPhoto img{
		width:100%;
	}
</style>
@stop

@section('content')
	<section id="pages">
		<div class="container">
			<div class="col-md-12">
				<p><a href="{{url($post->category->submenu->menu->link)}}">{{$post->category->submenu->menu->name}}</a> / <a href="{{url($post->category->submenu->menu->link)}}">{{$post->category->submenu->name}}</a> /{{$post->title}}</p>
			</div>
			<div class="col-lg-9 col-md-9 section-single">

			<div class="infoPhoto">
				<h1><b>{{$post->title}}</b></h1>
				<img src="{{$post->image}}" alt="Post img">
				<br>
				<br>
				<span class="fa fa-clock-o" aria-hidden="true">{{$post->deadline}}</span>  <span class="fa fa-rss" aria-hidden="true"> {{$post->user->name}}</span></br>
				<br>
			</div>
				<p>{!!$post->body!!}</p>

				<div class="row">
					<div class="col-md-12  section-tags">

						<div class="headline-row">
							<h1 class="section-title caticon sbx"><i>T</i><span class="sport"></span>Tags</h1>


							<ul class="post-tags">
								@foreach( $post->tags as $tag)
									<a href="#"><li>{{ $tag->name }}</li></a>
								@endforeach
							</ul>
						</div>
					</div>



				</div>
				<div class="row">
				<div class="col-md-12 section-post-related">

				<div class="headline-row">
					<h1 class="section-title caticon sbx"><i>T</i><span class="sport"></span>Author's Posts</h1>
				</div>

				<div class="row thumb-medium-with-content">
					<!-- Post -->
					@foreach( $authorPosts as $post)

					<article class="col-md-12 col-sm-12 col-xs-12 post post-spacer">
					<div class="row">
						<div style="height:10px;"></div>
						<div class="col-md-4 col-sm-4" style="height:255px;overflow:hidden">
							<div class="entry-header">
								<img style="width:100%" class="img-responsive" src="{{url($post->image)}}" alt="Post img">
							</div>
						</div>
						<div class="col-md-8 col-sm-8">
							<div class="post-txt">

								<h3><a href="{{url('/posts/'.$post->slug)}}" class="title">{{$post->title}}</a></h3>
								<p class="section-title caticon test"><span class="sidebar-trending"><i class="fa fa-clock-o" aria-hidden="true"></i></span> 25 January, 2015</p>
								<p class="hidden-xs">{!!str_limit($post->body, 255)!!}</p>
							</div>
						</div>
					</div>
					</article>
					@endforeach

				</div>
				</div>
			</div>
			</div>


			<div class="col-md-3">
				<div class="col-md-12">
					<div class="headline-row">
						<h1 class="section-title caticon sbx"><i>T</i><span class="sidebar-trending"></span>Trending</h1>
					</div>
						<ul class="media-list">
							@foreach($trendingPosts as $post)
							@if($post->approved==1 && $post->published==1)
							<li class="media post-spacer">
								<div class="media-body">
									<h4 class="media-heading"><a href="{{url('/posts/'.$post->slug)}}">{{str_limit($post->title, 55)}}</a></h4>
									<p class="section-title caticon test"><span class="sidebar-trending"><i class="fa fa-clock-o" aria-hidden="true"></i></span>{{$post->deadline}}</p>
								</div>
							</li>
							@endif
							@endforeach
						</ul>
				</div>


				<div class="col-lg-12 sidebar-popular">
				<div class="headline-row">
					<h1 class="section-title caticon sbx"><i>P</i><span class="sidebar-trending"></span>Other Posts</h1>
				</div>



				<div class="col-md-12">
					<div class="row">
					<ul class="media-list">
						@foreach($otherPosts as $post)
						<li class="media col-md-12">
							<div class="media-left" >
							<img class="media-object" src="{{url($post->image)}}" alt="Post img">
							</div>
							<div class="media-body">
							  <h4 class="media-heading"><a href="{{url('/posts/'.$post->slug)}}">{{str_limit($post->title, 45)}}</a></h4>
							  <p><span class="sidebar-trending"><i class="fa fa-clock-o" aria-hidden="true"></i></span> {{$post->deadline}}</p>
							</div>
						</li>

						@endforeach

					</ul>
					</div>
				</div>

			</div>
			</div>

		</div>
	</section>
@stop
