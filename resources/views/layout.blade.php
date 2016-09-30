<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/assets/vendors/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/assets/vendors/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
   <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	@yield('head')
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
						<form class="col-xs-5 show-in-collapse">
	 			    <div class="input-group">
	 			      <input type="text" class="form-control" placeholder="Search for...">
	 			      <span class="input-group-btn">
	 			        <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
	 			      </span>
	 			    </div><!-- /input-group -->
	 				</form>
         </div>

         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         	<ul class="nav navbar-nav">
					<li><a href="{{url('/')}}">Home</a></li>
					@foreach ($menus as $menu)
						@if( count($menu->submenus->all())>0)
						<li class="dropdown">
							<a href="{{url($menu->link)}}" class="dropdown-toggle"  role="button" aria-haspopup="true" aria-expanded="false">{{$menu->name}}<span class="caret"></span></a>
							<ul class="dropdown-menu" id="drop1">
								@foreach($menu->submenus as $submenu)
								<li><a href="{{url($submenu->link)}}">{{$submenu->name}}</a></li>
								@endforeach
							</ul>
						@else
							<li class="active"><a href="{{url($menu->link)}}">{{$menu->name}}<span class="sr-only">(current)</span></a></li>
						@endif
					@endforeach
         	</ul>

				@if (Auth::guest())
         	<ul class="nav navbar-nav navbar-right">
         		<li><a id="signUp" href="/register">Sign up</a></li>
         		<li><a href="/login">Log in</a></li>
         	</ul>
				@else
				<ul class="nav navbar-nav navbar-right hide-in-collapse">
					<li class="dropdown">
					<a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-2x" aria-hidden="true"></i></a>
						<ul class="dropdown-menu">
							<li><a href="#">Settings</a></li>
							@if( $user->type == 'company' )
								<li><a href="/posts">My Posts</a></li>
							@elseif( $user->type == 'user' )
								<li><a href="/myfollowings">Following</a></li>
							@elseif( $user->type == 'admin' )
								<li><a href="/dashboard">Dashboard</a></li>
							@endif
							<li><a href="/logout">Logout</a></li>
						</ul>
					</li>
				</ul>

				<ul class="nav navbar-nav navbar-right show-in-collapse">
					<li role="separator" class="divider"></li>
					<li class="show-in-collapse" ><a href="#">Settings</a></li>
					<li class="show-in-collapse" ><a href="#">Following</a></li>
					<li class="show-in-collapse" ><a href="/logout">Logout</a></li>
				</ul>
				@endif


				 <form class="navbar-form navbar-right hide-in-collapse">
			    <div class="input-group">
			      <input type="text" class="form-control" placeholder="Search for...">
			      <span class="input-group-btn">
			        <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
			      </span>
			    </div><!-- /input-group -->
				</form>

         </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
   </nav>
</section><!--  Nigar -->

@yield('content')
<section id="footer" class="@yield('footer-position')">
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

<script type="text/javascript" src="/assets/vendors/jquery/jquery-3.1.0.js"></script>
<script type="text/javascript" src="/assets/vendors/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="/assets/js/main.js"></script>

</body>
</html>
