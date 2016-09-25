@extends('layouts.app')

@section('title')
Your all news
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
			</tr>
		</thead>
		<tbody>
			@foreach( $posts as $post)
				<tr>
					<td>{{ $post->title }}</td>
					<td>{!! $post->body !!}</td>
					<td><img src='{{ $post->image }}'></td>
					<td><a href="#" class='btn btn-default'>View</a></td>
					<td><a href="{{ url('/post/'.$post->id) }}" class='btn btn-primary'>Edit</a></td>
					<td><a href="{{ url('/post/unpublish/'.$post->id) }}" class='btn btn-warning'>Unpublish</a></td>
					<td><a href="{{ url('/post/delete/'.$post->id) }}" class='btn btn-danger'>Delete</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<a href="/add" class="btn btn-primary">Add post</a>
<div>
@stop
