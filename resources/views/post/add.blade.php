@extends('layouts.app')

@section('title')
Add news
@stop

@section('head')
	<script src="//cdn.ckeditor.com/4.5.11/basic/ckeditor.js"></script>
@stop

@section('content')
<div class="container">
	<form method='post' action='{{ url('/user/addpost') }}' enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class='form-group'>
			<label for='title'>Title</label>
			<input class="form-control" type="text" name="title" id='title' value=" {{ old('title') }} ">
		</div>
		<div class="input-group" style='width:100%'>
			<label for='body'>Body</label>
			<textarea name="body">{{ old('body') }}</textarea>
			<script>
				CKEDITOR.replace( 'body' );
         </script>
		</div>
		<div class="input-group" style='padding:10px 0'>
			<label for="deadline">Deadline</label>
			<input type="date" name="deadline" id="deadline" class='form-control'value="{{old('deadline')}}">
		</div>
		<div class="input-group">
			<label for='file'>Upload an image</label>
			<input type="file" id="file" name='image' class="custom-file-input">
		</div>
		<div class="input-group">
			<label for='category'>Choose category</label>
			<select class="form-control" id="category" name="category">
				@foreach( $menu as $menuItem )
				<optgroup label="{{ $menuItem->name }}">
					@foreach( $submenu as $submenuItem)
						@if( $submenuItem->menu_id == $menuItem->id)
							<option>{{ $submenuItem->name }}</option>
						@endif
					@endforeach
				</optgroup>
				@endforeach
			</select>
		</div>

		<div class="input-group">
			<label for='selectTag' style='display:block'>Choose tags</label>
			<select class="js-example-basic-multiple" multiple="multiple" name="tag" id='selectTag' style="width:235px">
				@foreach( $tags as $tag )
					<option value="{{$tag->id}}">{{ $tag->name }}</option>
				@endforeach
			</select>

			<script type="text/javascript">
				$("select.js-example-basic-multiple").select2();
			</script>
		</div>
		<div class="input-group">
			<input type="submit" name="sumit" class="btn btn-success" style="margin-top:20px">
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
