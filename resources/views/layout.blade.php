<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
   <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
   
</head>
<body>
<div>
<!-- 	Nigar header footer burda yazib o birsi sehifelerde paste elemelisen -->
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
         	<form action="math" method="POST" class="navbar-form navbar-right full-width-form">
         	{{csrf_field()}}
            	<div class="form-group">
               	<input type="text" name="search" class="form-control" placeholder="Search">
               	<button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
            	</div>
         	</form>
				@if (Auth::guest())
         	<ul class="nav navbar-nav navbar-right">
         		<li><a id="signUp" href="/register">Sign up</a></li>
         		<li><a href="/login">Log in</a></li>
         	</ul>
				@else
					<p style='color:white'>Hi, {{ Auth::user() -> name }} </p>
					<a href='/logout'>Logout</a>
				@endif
         </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
   </nav>
</section><!--  Nigar -->

@yield('content')

<section id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-xs-12">
				<span>Copyright &copy; Educive.com 2016</span>
			</div>

			<div class="col-md-6 col-xs-12 ">
				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</section><!--  Nigar -->
</div>

<script type="text/javascript" src="assets/vendors/jquery/jquery-3.1.0.js"></script>
<script type="text/javascript" src="assets/vendors/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>

</body>
</html>
