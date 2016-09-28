@extends('layouts.app')

@section('title')
Add Menu
@stop

@section('content')
<script type="text/javascript" src="/assets/vendors/jquery/jquery-3.1.0.js"></script>
<script type="text/javascript" src="/assets/js/main.js"></script>
<div class="container">
@foreach($data as $menuitem)
  <table class="table table-hover">
    <thead>
      <tr class="success">
        <th class="col-md-4">{{$menuitem->name}}</th>
        <th class="col-md-4"><a href="{{ url('editmenu/'.$menuitem->id )}}" class="btn btn-success pull-right" style="margin-right:5px">Edit</a></th>
        <th class="col-md-4"><a href="{{ url('deletemenu/'.$menuitem->id )}}" class="btn btn-danger pull-right" style="margin-right:5px">Delete</a></th>
      </tr>
    </thead>
    <tbody>
      @foreach($menuitem->submenus as $submenuitem)
        <tr>
          <td class="col-md-4">{{$submenuitem->name}}</td>
          <td class="col-md-4"><a href="{{ url('editsubmenu/'.$submenuitem->id )}}" class="btn btn-success pull-right" style="margin-right:5px">Edit</a></td>
          <td class="col-md-4"><a href="{{ url('deletesubmenu/'.$submenuitem->id )}}" class="btn btn-danger pull-right" style="margin-right:5px">Delete</a></td>
        </tr>
      @endforeach
      <tr>
          <td><button class="btn btn-default addsubmenubutton" >Add Submenu</button></td>
          <td></td>
          <td></td>
      </tr>
      <tr>
        <td colspan="3">
          <form method='post' action='{{ url($menuitem->id.'/submenu')}}' enctype="multipart/form-data" class="col-md-8 addsubmenuform">
            {{ csrf_field() }}
            <div class='form-group'>
              <input type="text" name="menu_id" value="{{$menuitem->id}}"style="display:none">
              <label for='title'>Title</label>
              <input class="form-control" type="text" name="name" id='title'>
            </div>
            <div class="input-group">
              <input type="submit" name="submit" class="btn btn-success">
            </div>
          </form>
        </td>
      </tr>
      @if( $errors )
        @foreach( $errors->all() as $error)
          <div class="alert alert-warning">
            {{ $error }}
          </div>
        @endforeach
      @endif
    </tbody>
  </table>
@endforeach

<button class="btn btn-success" id="addmenubutton">Add Menu</button>
<div class="row">
<form id="addmenuform" method='post' action='{{ url('/menu')}}' enctype="multipart/form-data" class="col-md-8">
  {{ csrf_field() }}
  <div class='form-group'>
    <label for='title'>Title</label>
    <input class="form-control" type="text" name="name" id='title'>
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
