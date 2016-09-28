@extends('layouts.app')

@section('title')
Add Menu
@stop

@section('content')

<div class="row">
<form  method='post' action='{{ url('/editsubmenu/'.$submenu->id)}}' enctype="multipart/form-data" class="col-md-6 col-md-offset-3">
  {{ csrf_field() }}
  <div class='form-group'>
    <label for='title'>Title</label>
    <input class="form-control" type="text" name="name" value="{{$submenu->name}}" id='title'>
  </div>
  <div class="input-group">
    <input type="submit" name="sumit" class="btn btn-success">
  </div>
</form>
</div>
@if( $errors )
  @foreach( $errors->all() as $error)
    <div class="alert alert-warning">
      {{ $error }}
    </div>
  @endforeach
@endif

<div>
@stop
