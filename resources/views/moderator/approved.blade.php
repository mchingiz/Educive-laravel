@extends('layouts.app')

@section('title')
Already Approved Posts
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
	@if( empty( $isEmpty ) )
		<div class="alert alert-default">
			<h1>There is no post</h1>
		</div>
	@else
		<table class='table table-striped table-hover'>
			<thead>
				<tr>
					<td>
						Author name
					</td>
					<td>
						Post title
					</td>
					<td>
						Created time
					</td>
					<td>
						Updated time
					</td>
					<td>
						Post link
					</td>
					<td colspan="3">
						Operations
					</td>
				</tr>
			</thead>
			<tbody>
				@foreach($posts as $post)
					<tr>
						<td>
							{{ $post->user->name }}
						</td>
						<td>
							{{ $post->title }}
						</td>
						<td>
							{{ $post->created_at }}
						</td>
						<td>
							{{ $post->updated_at }}
						</td>
						<td>
							Link
						</td>
						<td>
								<a href="{{ url('/post/editByModerator/'.$post->id ) }}" class='btn btn-default'>Edit</a>
						</td>
						<td>
							@if( $post->approved )
								<form method="post" action="{{ url('/post/refuse/'.$post->id) }}">
									{{ csrf_field() }}
									<input type="submit" name="submit" class="btn btn-warning" value="Refuse">
								</form>
							@else
								<form method="post" action="{{ url('/post/approve/'.$post->id) }}">
									{{ csrf_field() }}
									<input type="submit" name="submit" class="btn btn-success" value="Approve">
								</form>
							@endif
						</td>
						<td>
								<a href="{{ url('/post/deleteByModerator/'.$post->id ) }}" class='btn btn-danger'>Delete</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	@endif
<div>
@stop
