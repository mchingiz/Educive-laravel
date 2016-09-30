@extends('layout')

@section('title')
	{{ $company->name }}
@stop

@section('content')
<section id="author">
		<div class="container">
			<div class="col-md-3 col-sm-12">
				<img src="{{ $company->logo }}" class="img-responsive">
			</div>
			<div class="col-md-9 col-sm-12">
				<h1>{{ $company->name }}</h1>
				@unless( $user->type == 'company')
					@if(!$follow)
						<form method="post" action="{{ url('/follow/'.$user->id.'/'.$company->id) }}" id="follow">
							{{ csrf_field() }}
							<input type="submit" class="btn btn-success" value="Follow">
						</form>
					@else
						<form method="post" action="{{ url('/unfollow/'.$user->id.'/'.$company->id) }}" id="follow">
							{{ csrf_field() }}
							<input type="submit" class="btn btn-warning" value="Unfollow">
						</form>
					@endif
				@endunless
				<p class="link">
					@if( $company->facebook )
					<a href="{{ $company->facebook }}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					@endif
					@if( $company->linkedin )
					<a href="{{$company->linkedin}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
					@endif
					@if( $company->linkedin )
					<a href="{{$company->instagram}}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					@endif
					@if( $company->website )
					<a href="{{$company->instagram}}"><i class="fa fa-globe" aria-hidden="true"></i></a>
					@endif
					@if( $company->website )
					<a href="mailto:{{$company->email}}"><i class="fa fa-envelope" aria-hidden="true"></i></a>
					@endif
				</p>
				<p class="tittle">{{ $company->definition}}</p>
			</div>
			<!-- <div class="col-md-12 col-sm-12">
				<p class="border">“Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker ”<br>
					<span>&ndash;&ndash; <i>Admin</i></span>
				</p>
			</div> -->
			@if($posts)
				<div class="archives col-md-12">
					<div class="col-md-3 col-sm-12"><h2>{{ $company->name }}'s Posts</h2></div>
					<div class="col-md-9 hidden-sm"><div class="xett"></div></div>
					@foreach( $posts as $post )
					<div class="col-md-12 post">
						<div class="col-md-3 col-sm-12"><img src="{{ $post->image }}" class="img-responsive"></div>
						<div class="col-md-9 col-sm-12">
							<a href="#"><h4>
							{{ $post->title }}</h4></a>
							<span>25 January, 2015</span>
							<p>{!! $post->body !!}</p>
						</div>
					</div>
					@endforeach
				</div>
			@endif
		</div>
	</section>
@stop
