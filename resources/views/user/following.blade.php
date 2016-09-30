@extends('layout')

@section('title')
	My followings
@stop

@section('head')
<style>
	table{
		width:70% !important;
		margin:30px auto;

	}

	thead tr {
		font-weight:bold;
	}

</style>
@stop

@section('content')
<div class="container">
	@if($noFollower)
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<td>
						Company
					</td>
					<td>
						Operations
					</td>
				</tr>
			</thead>
			<tbody>
				@foreach( $followings as $following )
					<tr>
						<td>
							{{ $following->name }}
						</td>
						<td>
							<form method="post" action="{{ url('/unfollow/'.$user->id.'/'.$following->id) }}" id="follow">
								{{ csrf_field() }}
								<input type="submit" class="btn btn-warning" value="Unfollow">
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	@else
		<h1>You don't follow any company</h1>
	@endif
	<a href="{{ url('/deleteMe/'.$user->id) }}" class="btn btn-danger">Delete my account</a>

</div>
@stop
