@extends('layout')

@section('title')
	News
@stop

@section('content')
<section id="header">
        <nav class="navbar navbar-fixed-top">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <a class="navbar-brand" href="#">Educive.com</a>
                 <form style="float:left" class="col-xs-5">
                    <div class="form-group collapsed-form">
                        <input type="text" class="form-control" placeholder="Search">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </form>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle"  role="button" aria-haspopup="true" aria-expanded="false">Events <span class="caret"></span></a>
                  <ul class="dropdown-menu" id="drop1">
                    <li><a href="#">Trainings</a></li>
                    <li><a href="#">Camps</a></li>
                    <li><a href="#">Conferences</a></li>
                    <li><a href="#">Contest</a></li>
                    <li><a href="#">Workshops</a></li>
                    <li><a href="#">Adventures</a></li>
                    <li><a href="#">Exhibition</a></li>
                    <li><a href="#">Competition</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle"  role="button" aria-haspopup="true" aria-expanded="false">Vacancies<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Interships</a></li>
                    <li><a href="#">Volunteering</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Scholarship<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Bachelor</a></li>
                    <li><a href="#">Grants</a></li>
                    <li><a href="#">Master</a></li>
                    <li><a href="#">Phd</a></li>
                    <li><a href="#">Fellowship</a></li>
                  </ul>
                </li>
                <li><a href="#">Contact Us<span class="sr-only"</span></a></li>
              </ul>
              <form class="navbar-form navbar-right full-width-form">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
              </form>
              <ul class="nav navbar-nav navbar-right">
                <li><a id="signUp" href="#">Sign up</a></li>
                <li><a href="#">Log in</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </section><!--  Nigar -->
	<section id="index"></section><!--  Cingiz -->


</div>



<script type="text/javascript" src="assets/vendors/jquery/jquery-3.1.0.js"></script>
<script type="text/javascript" src="assets/vendors/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
	<section id="tags">
		
	</section>
@stop
