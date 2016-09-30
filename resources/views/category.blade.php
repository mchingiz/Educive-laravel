@extends('layout')

@section('title')
	Category
@stop

@section('head')
	<style>
		body{
			padding-top:20px;
		}
	</style>
@stop

@section('content')
<div class="container">
<div class="row">
		<section class="col-md-12 col-sm-12 col-lg-12 section-main-content">
			 @foreach ($posts as $post)


		<div class="post col-md-4 col-sm-12 col-xs-6">
							<div class="row">

									<div class="col-md-6 col-sm-4">
										<img class="img-responsive" src="{{$post->image}}" >
									</div>
									<div class="col-md-6 col-sm-8">
										<div class="post-txt">
											<h3>
												<a href="{{ url('/posts/'.$post->slug)}}" class="title">{{$post->title}}</a>
											</h3>
											<a href="#category" class="caticon icon-space-medium"><i class="fa fa-clock-o fa-2x" aria-hidden="true" style="position: absolute; color: white; z-index: 3;left: 18px;"></i>
											@if($post->deadline > date('Y-m-d'))<span class="lifestyle" style="background-color: gray"></span>

											@elseif($post->deadline < date('Y-m-d'))<span class="lifestyle" style="background-color: green"></span>
												@endif
											{{$post->deadline}}</a>
											@if( strlen($post->body) > 47)
									        	<p class="hidden-sm hidden-xs">{!! substr($post->body, 0,47).'...'!!} </p>
									       	@else
									       	<p class="hidden-sm hidden-xs">{!!$post->body!!}</p>
									       @endif

										</div>
									</div>

							</div>

						</div>



@endforeach
		</section>
	</div>
</div>


@stop
@section('footer-position')
footer-position
@endsection
