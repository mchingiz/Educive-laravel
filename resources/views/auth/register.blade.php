@extends('layout')

@section('content')
<section class="register">
<div class="container">
<div class="row usertype">
  <div style="height:150px"></div>
  <div id="registeras"class=" btn col-md-7 col-md-offset-2">Register as </div>
  <a href="{{ url('/register/user')}}" id="user"class="btn user-type-button col-md-3 col-md-offset-2">User</a>
  <a href="{{ url('/register/company')}}" id="company" class="btn user-type-button col-md-3 col-md-offset-1">Company</a>
</div>

</div>
</section>
@endsection
@section('footer-position')
footer-position
@endsection
