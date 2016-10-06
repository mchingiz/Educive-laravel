@extends('layouts.app')

@section('title')
Your all posts
@stop

@section('head')
<style>
	img{
		width:100px;
	}
</style>
@stop

@section('content')
<div class="container">
	@if( empty( $posts ) )
		<div class="alert alert-default">
			<h1>You don't have any post yet</h1>
		</div>
	@else
	<table class='table table-striped table-hover'>
		<thead>
			<tr>
				<td>
					Post title
				</td>
				<td>
					Post body
				</td>
				<td>
					Post image
				</td>
				<td colspan="4">
					Operations
				</td>
				<td>
					Approval
				</td>
			</tr>
		</thead>
		<tbody>
			@foreach( $posts as $post)
				<tr>
					<td>{{ $post->title }}</td>
					<td>{!! str_limit($post->body, 255) !!}</td>
					<td><img src='{{ $post->image }}'></td>
					<td><a href="{{url('/posts/'.$post->slug)}}" class='btn btn-default'>View</a></td>
					<td><a href="{{ url('/post/'.$post->id) }}" class='btn btn-primary'>Edit</a></td>
					<td>
						@if($post->published)
						<form method="post" action="{{ url('/post/unpublish/'.$post->id) }}">
							{{ csrf_field() }}
							<input type="submit" name="submit" class="btn btn-warning" value="Unpublish">
						</form>
						@else
						<form method="post" action="{{ url('/post/publish/'.$post->id) }}">
							{{ csrf_field() }}
							<input type="submit" name="submit" class="btn btn-success" value="Publish">
						</form>
						@endif
					</td>
					<td><a href="{{ url('/post/delete/'.$post->id) }}" class='btn btn-danger'>Delete</a></td>
					<td>
						@if($post->approved)
							<i class="fa fa-check-circle-o" aria-hidden="true"></i>
						@else
							<i class="fa fa-circle-o" aria-hidden="true"></i>
						@endif
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	@endif
	<a href="/add" class="btn btn-primary">Add post</a>
<div>
@stop
