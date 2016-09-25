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
					Are you sure to unpublish this post?
				</p>
			</div>
			<div class="modal-body">
				<p>
					You can publish this post again later
				</p>
			</div>
			<div class="modal-footer">
				<a href="" class='btn btn-default'>Back</a>
				<a href="" class='btn btn-warning'>Unpublish</a>
			</div>

		</div>
	</div>
@stop
