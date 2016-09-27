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
	<section id="pages">
		<div class="container">
			<div class="col-md-12">
				<p><a href="#">Home</a> / <a href="#">Category</a> / Mixed Classic Coffee Shop and Bistro opened</p>
			</div>
			<div class="col-lg-9 col-md-9 section-single">
				<h1 class="section-title caticon sbx"><i>T</i><span class="sidebar-trending"></span>Technology</h1>
				
				


				<h1><b>{{$post->title}}</b></h1>
				
				<img src="/img/{{$post->image}}" alt="Post img">
				<br>
				<br>
				<span class="fa fa-clock-o" aria-hidden="true">{{$post->deadline}}</span>  <span class="fa fa-rss" aria-hidden="true"> John Doe</span></br>
				<br>
				<p>{{$post->body}}</p>


				<div class="col-md-9  section-tags">

					<div class="headline-row">
						<h1 class="section-title caticon sbx"><i>T</i><span class="sport"></span>Tags</h1>
					</div>

					<ul class="post-tags">
						@foreach( $teqler as $teq)
							<li><a href="#">{{ $teq->name }}</a></li>
						@endforeach
					</ul>


				</div>
				<div class="col-md-12 section-post-related">

				<div class="headline-row">
					<h1 class="section-title caticon sbx"><i>T</i><span class="sport"></span>Related Posts</h1>
				</div>

				<div class="row thumb-medium-with-content">
					<!-- Post -->
					<article class="col-md-12 col-sm-12 col-xs-12 post post-spacer">
					<div class="row">
						<div class="col-md-4 col-sm-4">
							<div class="entry-header">
								<img class="img-responsive" src="/img/middle-post-thumb1.jpg" alt="Post img">
							</div>
						</div>
						<div class="col-md-8 col-sm-8">
							<div class="post-txt">

								<h3><a href="#link" class="title">Extreme Bike Ride in Ecuador Mountains</a></h3>
								<p class="section-title caticon test"><span class="sidebar-trending"><i class="fa fa-clock-o" aria-hidden="true"></i></span> 25 January, 2015</p>
								<p class="hidden-xs">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</p>
							</div>
						</div>
					</div>
					</article>

				</div>
			</div>
			</div>


			<div class="col-md-3">
				<div class="col-md-12">
					<div class="headline-row">
						<h1 class="section-title caticon sbx"><i>T</i><span class="sidebar-trending"></span>Trending</h1>
					</div>
						<ul class="media-list">
							<li class="media post-spacer">
								<div class="media-body">
									<h4 class="media-heading"><a href="#">Startup released a chip for little pets</a></h4>
									<p class="section-title caticon test"><span class="sidebar-trending"><i class="fa fa-clock-o" aria-hidden="true"></i></span> 25 January, 2015</p>
								</div>
							</li>
							<li class="media post-spacer">
								<div class="media-body">
									<h4 class="media-heading"><a href="#">How to save money without leaving your couch </a></h4>
									<p class="section-title caticon test"><span class="sidebar-trending"><i class="fa fa-clock-o" aria-hidden="true"></i></span> 25 January, 2015</p>
								</div>
							</li>
							<li class="media post-spacer">
								<div class="media-body">
									<h4 class="media-heading"><a href="#">$160G worth of cheese stolen in Wisconsin</a></h4>
									<p class="section-title caticon test"><span class="sidebar-trending"><i class="fa fa-clock-o" aria-hidden="true"></i></span> 25 January, 2015</p>
								</div>
							</li>
							<li class="media post-spacer">
								<div class="media-body">
									<h4 class="media-heading"><a href="#">Revolutionary new health tech scares some experts </a></h4>
									<p class="section-title caticon test"><span class="sidebar-trending"><i class="fa fa-clock-o" aria-hidden="true"></i></span> 25 January, 2015</p>
								</div>
							</li>
						</ul>
				</div>


				<div class="col-lg-12 sidebar-popular">
				<div class="headline-row">
					<h1 class="section-title caticon sbx"><i>P</i><span class="sidebar-trending"></span>Popular</h1>
				</div>



				<div class="col-md-12">
					<div class="row">
					<ul class="media-list">

						<li class="media col-md-12">
							<div class="media-left">
							  <a href="#"><img class="media-object" src="/img/xs-post-thumb.jpg" alt="Post img"></a>
							</div>
							<div class="media-body">
							  <h4 class="media-heading"><a href="#">Startup released a chip for little pets</a></h4>
							  <p><span class="sidebar-trending"><i class="fa fa-clock-o" aria-hidden="true"></i></span> 25 January,2015</p>
							</div>
						</li>

						<li class="media col-md-12">
							<div class="media-left">
							  <a href="#"><img class="media-object" src="/img/xs-post-thumb.jpg" alt="Post img"></a>
							</div>
							<div class="media-body">
							  <h4 class="media-heading"><a href="#">New Canon lens available</a></h4>
							  <p><span class="sidebar-trending"><i class="fa fa-clock-o" aria-hidden="true"></i></span> 25 January,2015</p>
							</div>
						</li>

						<li class="media col-md-12">
							<div class="media-left">
							  <a href="#"><img class="media-object" src="/img/xs-post-thumb.jpg" alt="Post img"></a>
							</div>
							<div class="media-body">
							  <h4 class="media-heading"><a href="#">Pioneer makes you better DJs</a></h4>
							  <p><span class="sidebar-trending"><i class="fa fa-clock-o" aria-hidden="true"></i></span> 25 January,2015</p>
							</div>
						</li>

						<li class="media col-md-12">
							<div class="media-left">
							  <a href="#"><img class="media-object" src="/img/xs-post-thumb.jpg" alt="Post img"></a>
							</div>
							<div class="media-body">
							  <h4 class="media-heading"><a href="#">Minimal organized special gadgets</a></h4>
							  <p><span class="sidebar-trending"><i class="fa fa-clock-o" aria-hidden="true"></i></span> 25 January,2015</p>
							</div>
						</li>


					</ul>
					</div>
				</div>

			</div>
			</div>

		</div>
	</section>
@stop
