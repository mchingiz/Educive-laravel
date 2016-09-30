@extends('layout')

@section('title')
Are you sure?
@stop

@section('head')
@stop

@section('content')
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<p>
					Are you sure to delete this post?
				</p>
			</div>
			<div class="modal-body">
				<p>
					You will not be able to undo this action
				</p>
			</div>
			<div class="modal-footer">
				<form method="post" action="">
					{{ csrf_field() }}
					<input type="submit" class="btn btn-danger pull-right" value="Delete my account">
					<a href="{{ url('/myfollowings') }}" class='btn btn-default' style="margin-right:10px;">Back</a>
				</form>
			</div>

		</div>
	</div>
@stop

@section('footer-position')
	footer-position
@endsection
