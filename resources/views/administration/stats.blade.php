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
				 <span class="info-box-icon bg-blue"><i class="fa fa-tags" aria-hidden="true"></i></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Most Used Tag</span>
              	<span class="info-box-number">Technology - 7</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-share" aria-hidden="true"></i></span>

            <div class="info-box-content">
					<span class="info-box-number">Last Week</span>
					<span class="info-box-number"><span style="font-weight:100"><strong>7</strong> posts have been added</span></span>
					<span class="info-box-number"><span style="font-weight:100"><strong>45</strong> posts views gained</span></span>
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
				 <span class="info-box-icon bg-yellow"><i class="fa fa-building" aria-hidden="true"></i></span>

            <div class="info-box-content">
				  <span class="info-box-text">Follows</span>
				  <span class="info-box-number"><span style="font-weight:100"><strong>6</strong> people followed <strong>23</strong> company in total</span></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total members</span>
              <span class="info-box-number"></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
@stop
