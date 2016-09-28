@extends('layout')

@section('title')
	Category
@stop

@section('content')
<div class="container">
<div class="row">
		<section class="col-md-12 col-sm-12 col-lg-12 section-main-content">
			 @foreach ($posts as $post)

		
		<div class="post col-md-4 col-sm-12 col-xs-6">
							<div class="row">

									<div class="col-md-6 col-sm-4">
										<img class="img-responsive" src="assets/img/{{$post->image}}" >
									</div>
									<div class="col-md-6 col-sm-8">
										<div class="post-txt">
											<h3>
												<a href="#link" class="title">{{$post->title}}</a>
											</h3>
											<a href="#category" class="caticon icon-space-medium"><span class="lifestyle"></span>{{$post->deadline}}</a>
											<p class="hidden-sm hidden-xs">{{substr("$post->body", 0,47).'...'}}</p>
										</div>
									</div>

							</div>

						</div>
	   


@endforeach
		</section>
	</div>
</div>


@stop
