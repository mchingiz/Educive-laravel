@extends('layout')

@section('content')
<section class="register">
<div class="container">
<div class="row usertype">
  <div style="height:150px"></div>
  <div id="registeras"class=" btn col-md-7 col-md-offset-2">Register as </div>
  <a href="{{ url('/register/user')}}" id="user"class="btn user-type-button col-md-3 col-md-offset-2">User</a>
  <a href="{{ url('/register/company')}}" id="company" class="btn user-type-button col-md-3 col-md-offset-1">Company</a>
  <!--  Previous version
  <div id="registeras" class="col-xs-12 col-md-7 col-md-offset-2">Register as </div>
  <div id="user" class="btn col-xs-12 user-type-button col-md-3 col-md-offset-2">User</div>
  <div id="company" class="btn user-type-button col-xs-12  col-md-3 col-md-offset-1">Company</div> -->
</div>

</div>
</section>
@endsection

@section('footer-position')
footer-position
@endsection
