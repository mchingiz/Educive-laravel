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
	<section id="header">
		<nav class="navbar navbar-fixed-top">
       <div class="container">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                 <i class="fa fa-bars" aria-hidden="true"></i>
             </button>
             <a class="navbar-brand" href="#">Educive.com</a>
              <form style="float:left" class="visible-xs-block col-xs-5">
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
               <a id="drop11" href="#" class="dropdown-toggle" data-toggle="dropdownn" role="button" aria-haspopup="true" aria-expanded="false">Events <span class="caret"></span></a>
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
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Vacancies<span class="caret"></span></a>
               <ul class="dropdown-menu">
                 <li><a href="#">Jobs</a></li>
                 <li><a href="#">Interships</a></li>
                 <li><a href="#">Volunteering</a></li>
               </ul>
             </li>
             <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Scholarship &amp; Grants<span class="caret"></span></a>
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
           <form class="navbar-form navbar-right hidden-xs">
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

<script type="text/javascript" src="assets/vendors/jquery/jquery-3.1.0.js"></script>
<script type="text/javascript" src="assets/vendors/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>

</body>
</html>
