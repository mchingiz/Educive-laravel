@extends('layouts.app')

@section('title')
Add Menu
@stop

@section('content')
<div class="container">
@foreach($data as $menuitem)
@if($menuitem->id <10 )
  <?php $id=$menuitem->id%10; ?>
  <table class="table table-hover">
    <thead>
      <tr class="success">
        <th class="col-md-4">{{$menuitem->name}}</th>
        <th class="col-md-4"><a href="{{ url('editmenu/'.$menuitem->id )}}" class="btn btn-success pull-right" style="margin-right:5px">Edit</a></th>
        <th class="col-md-4"><a href="{{ url('deletemenu/'.$menuitem->id )}}" class="btn btn-danger pull-right" style="margin-right:5px">Delete</a></th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $submenuitem)
        @if(floor($submenuitem->id/10)== $id)
        <tr>
          <td class="col-md-4">{{$submenuitem->name}}</td>
          <td class="col-md-4"><a href="{{ url('editmenu/'.$submenuitem->id )}}" class="btn btn-success pull-right" style="margin-right:5px">Edit</a></td>
          <td class="col-md-4"><a href="{{ url('deletemenu/'.$submenuitem->id )}}" class="btn btn-danger pull-right" style="margin-right:5px">Delete</a></td>
        </tr>
        @endif
      @endforeach
    </tbody>
  </table>
@endif
@endforeach

<button class="btn btn-success">Add Menu</button>

<form id="addsubmenu" method='post' action='' enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class='form-group'>
    <label for='title'>Title</label>
    <input class="form-control" type="text" name="title" id='title'>
  </div>
  <div class='form-group'>
    <label for='link'>Title</label>
    <input class="form-control" type="text" name="link" id='link'>
  </div>
  <div class="input-group">
    <input type="submit" name="sumit" class="btn btn-success">
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
