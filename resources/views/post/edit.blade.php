@extends('layouts.app')

@section('title')
Edit news
@stop

@section('head')
	<script src="//cdn.ckeditor.com/4.5.11/basic/ckeditor.js"></script>
@stop

@section('content')
<div class="container">
	<form method='post' action='{{ url('post/'.$post->id) }}' enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class='form-group'>
			<label for='title'>Title</label>
			<input class="form-control" type="text" name="title" id='title' value='{{ $post->title }}'>
		</div>
		<div class="input-group" style='width:100%'>
			<label for='body'>Body</label>
			<textarea name="body"> {{ $post->body }} </textarea>
			<script>
				CKEDITOR.replace( 'body' );
         </script>
		</div>
		<div class="input-group" style='padding:10px 0'>
			<label for="deadline">Deadline</label>
			<input type="date" name="deadline" id="deadline" class='form-control' value='{{ $post->deadline }}'>
		</div>
		<div class="input-group">
			<label for='file'>Upload an image</label>
			<input type="file" id="file" name='image' class="custom-file-input">
		</div>
		<div class="input-group">
			<input type="submit" name="sumit" class="btn btn-success">
			<a href='/posts' class='btn btn-primary'>Go back to list</a>
		</div>
	</form>
	@if( $errors )
		@foreach( $errors->all() as $error)
			<div class="alert alert-warning">
				{{ $error }}
			</div>
		@endforeach
	@endif
<div>
@stop
