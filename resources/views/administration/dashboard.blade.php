@extends('administration.layout')

@section('title')
Educive - dashboard
@stop

<!-- @section('username')
$user->name
@stop -->

@section('content')
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
				 <span class="info-box-icon bg-red"><i class="fa fa-eye" aria-hidden="true"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Views</span>
              <span class="info-box-number">{{ $viewCount }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-share" aria-hidden="true"></i></span>

            <div class="info-box-content">
					<span class="info-box-text">Posts</span>
					<span class="info-box-number">{{ $postCount }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
				 <span class="info-box-icon bg-aqua"><i class="fa fa-building" aria-hidden="true"></i></span>

            <div class="info-box-content">
				  <span class="info-box-text">Companies</span>
				  <span class="info-box-number">{{ $companyCount }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total members</span>
              <span class="info-box-number">{{ $registrationCount }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
@stop
