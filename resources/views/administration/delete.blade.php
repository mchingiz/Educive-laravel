@extends('layouts.app')

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
				<form action="" method="post">
					{{ csrf_field() }}
					<div>
						<a href="" class='btn btn-default'>Back</a>
						<input type="submit" name="submit" class='btn btn-danger' value="Delete">
					</div>
				</form>
			</div>

		</div>
	</div>
@stop
