@extends('layout')

@section('title')
	Educive
@stop

@section('content')
<section id="index">
<div class="container">
<div class="row" id="upcoming">
	<div class="col-md-9">
		<div class="row" id="row1">
			<div class="col-md-8">
				<div class="slider">
@for($i=1;$i<=3;$i++)
					<div class="bigItem item" id="sliderItem{{$i}}">
						<div class="itemImg">
							<img class="img-responsive" src="{{url($lastPosts[0]->image)}}">
						</div>
						<div class="gradient"></div>
						<div class="itemContent innerItemContent">
							<a style="text-decoration:none; color:black" href="{{url('/posts/'.$lastPosts[$i]->slug)}}"><h1>{{$lastPosts[$i]->title}}</h1></a>
							<span class="fa fa-clock-o" aria-hidden="true"></span>
							<span class="deadline">{{$lastPosts[$i]->deadline}}</span>
							<p>{!!str_limit($lastPosts[$i]->body, 255)!!}</p>
						</div>
					</div>
@endfor


				<span class="fa fa-chevron-left" aria-hidden="true"></span>
				<span class="fa fa-chevron-right" aria-hidden="true"></span>
				</div>
			</div>
			<div class="col-md-4 col-xs-12">
				<div class="mediumItem item col-md-12 col-sm-6">
					<div class="itemImg">
						<img class="img-responsive" src="{{url($lastPosts[4]->image)}}">
					</div>
					<div class="gradient"></div>
					<div class="itemContent innerItemContent">
						<a style="text-decoration:none; color:black" href="{{url('/posts/'.$lastPosts[4]->slug)}}">
							<h1>{!!str_limit($lastPosts[4]->title, 70)!!}</h1>
						</a>
						<span class="fa fa-clock-o" aria-hidden="true"></span>
						<span class="deadline">{{$lastPosts[4]->deadline}}</span>
					</div>
				</div>
				<!-- Divider -->
				<div style="height:40px;" class="hidden-sm hidden-xs col-md-12"></div>

				<div class="mediumItem item col-md-12 col-sm-6">
					<div class="itemImg">
						<img class="img-responsive" src="{{url($lastPosts[5]->image)}}">
					</div>
					<div class="gradient"></div>
					<div class="itemContent innerItemContent">
						<a style="text-decoration:none; color:black" href="{{url('/posts/'.$lastPosts[5]->slug)}}">
							<h1>{!!str_limit($lastPosts[5]->title, 70)!!}</h1>
						</a>
						<span class="fa fa-clock-o" aria-hidden="true"></span>
						<span class="deadline">{{$lastPosts[5]->deadline}}</span>
					</div>
				</div>
			</div>
		</div>

		<div class="row" id="row2">
			@for($i=6;$i<=8;$i++)
			<div class="col-md-4 col-sm-4">
				<div class="mediumItem item">
					<div class="itemImg">
						<img class="img-responsive" src="{{url($lastPosts[$i]->image)}}">
					</div>
					<div class="gradient"></div>
					<div class="itemContent outerItemContent">
						<a style="text-decoration:none; color:black" href="{{url('/posts/'.$lastPosts[$i]->slug)}}">
							<h1>{!!str_limit($lastPosts[$i]->title, 70)!!}</h1>
						</a>
						<span class="fa fa-clock-o" aria-hidden="true"></span>
						<span class="deadline">{{$lastPosts[$i]->deadline}}</span>
						<p>{!!str_limit($lastPosts[$i]->body, 100)!!}</p>
					</div>
				</div>
			</div>
			@endfor
			<!-- <div class="col-md-4 col-sm-4">
				<div class="mediumItem item">
					<div class="itemImg">
						<img class="img-responsive" src="images/item2.jpg">
					</div>
					<div class="gradient"></div>
					<div class="itemContent outerItemContent">
						<h1>Popular Destinations in North America</h1>
						<span class="fa fa-clock-o" aria-hidden="true"></span>
						<span class="deadline">25 Jan, 2016</span>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="mediumItem item">
					<div class="itemImg">
						<img class="img-responsive" src="images/item8.jpeg">

					</div>
					<div class="gradient"></div>
					<div class="itemContent outerItemContent">
						<h1>Extreme Bike Ride in Ecuador Mountains</h1>
						<span class="fa fa-clock-o" aria-hidden="true"></span>
						<span class="deadline">25 Jan, 2016</span>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</p>
					</div>
				</div>
			</div> -->
		</div>
	</div>

	<div class="col-md-3">
				<div class="col-md-12">
					<div class="headline-row">
						<div style="height:10px"></div>
						<h1 class="section-title caticon sbx"><i></i><span class="sidebar-trending"></span>Trending</h1>
						<div style="height:25px"></div>
					</div>
						<ul class="media-list">
							@foreach( $trendingPosts as $post)
							<li class="media post-spacer">
								<div class="media-body">
									<h4 class="media-heading"><a href="{{url('/posts/'.$post->slug)}}">{{str_limit($post->title, 55)}}</a></h4>
									<p class="section-title caticon test"><span class="sidebar-trending"><i class="fa fa-clock-o" aria-hidden="true"></i></span>{{$post->deadline}}</p>
								</div>
							</li>
							@endforeach
						</ul>
				</div>
			</li>
		</ul>
	</div>
</div><!--  End of upcoming deadlines row -->

@foreach($menus as $menu)
<?php
	$menuID=-1;
	$menuID++;
 ?>
<div class="sectionHeader">
	<h1>{{ $menu->name }}</1>
</div>

<div class="row" id="vacancies">
<!--Big and medium items-->
<div class="row">
	<div class="col-md-6">
		<div class="bigItem item">
			<div class="itemImg">
				<img class="img-responsive" src="{{ url($allposts[$menuID][0]->image) }}">
			</div>
			<div class="gradient"></div>
			<div class="itemContent innerItemContent">
				<a href="{{ url('/posts/'.$allposts[$menuID][1]->slug) }}"><h1>{{ $allposts[$menuID][0]->title }}</h1></a>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">{{ $allposts[$menuID][0]->deadline }}</span>
				<p>{!! str_limit( $allposts[$menuID][0]->body,100 ) !!}</p>
			</div>
		</div>
	</div>
	<div class="col-md-3 col-sm-6">
		<div class="mediumItem item">
			<div class="itemImg">
				<img class="img-responsive" src="{{ url($allposts[$menuID][1]->image) }}">
			</div>
			<div class="gradient"></div>
			<div class="itemContent innerItemContent">
				<a href="{{ url('/posts/'.$allposts[$menuID][1]->slug) }}"><h1>{{ $allposts[$menuID][1]->title }}</h1></a>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">{{ $allposts[$menuID][1]->deadline }}</span>
			</div>
		</div>
		<!-- Divider -->
		<div style="height:40px;" class="hidden-sm hidden-xs"></div>

		<div class="mediumItem item">
			<div class="itemImg">
				<img class="img-responsive" src="{{ url($allposts[$menuID][2]->image) }}">
			</div>

			<div class="gradient"></div>
			<div class="itemContent innerItemContent">
				<a href="{{ url('/posts/'.$allposts[$menuID][2]->slug) }}"><h1>{{ $allposts[$menuID][2]->title }}</h1></a>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">{{ $allposts[$menuID][2]->deadline }}</span>
			</div>
		</div>
	</div>
	<div class="col-md-3 col-sm-6">
		<div class="mediumItem item">
			<div class="itemImg">
				<img class="img-responsive" src="{{ url($allposts[$menuID][3]->image) }}">
			</div>

			<div class="gradient"></div>
			<div class="itemContent innerItemContent">
				<a href="{{ url('/posts/'.$allposts[$menuID][3]->slug) }}"><h1>{{ $allposts[$menuID][3]->title }}</h1></a>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">{{ $allposts[$menuID][3]->deadline }}</span>
			</div>
		</div>
		<!-- Divider -->
		<div style="height:40px;" class="hidden-sm hidden-xs"></div>

		<div class="mediumItem item">
			<div class="itemImg">
				<img class="img-responsive" src="{{ url($allposts[$menuID][4]->image) }}">
			</div>

			<div class="gradient"></div>
			<div class="itemContent innerItemContent">
				<a href="{{ url('/posts/'.$allposts[$menuID][4]->slug) }}"><h1>{{ $allposts[$menuID][4]->title }}</h1></a>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">{{ $allposts[$menuID][4]->deadline }}</span>
			</div>
		</div>
	</div>
</div>
	<div class="row">
		@for($i=5;$i<9;$i++)
		<div class="col-md-3 col-sm-6 hidden-xs item smallItem">
			<div class="col-md-4 col-sm-4 smallItemImg">
				<img class="img-responsive" src="{{ url($allposts[$menuID][$i]->image) }}">
			</div>
			<div class="col-md-8 col-sm-8 itemContent smallItemContent">
				<a href="{{ url('/posts/'.$allposts[$menuID][$i]->slug) }}"><h1>{{ $allposts[$menuID][$i]->title }}</h1></a>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">{{ $allposts[$menuID][$i]->deadline }}</span>
			</div>
		</div>
		@endfor
	</div>
</div><!--  End of vacancies row -->

@endforeach

<div class="sectionHeader">
	<h1>Editors' Choice</1>
</div>

<div class="row" id="special">
	<!-- Will contain a section like "Editors' Choice"-->
	@foreach($editorChoices as $post)
	<div class="col-md-2 col-sm-4 col-xs-4">
		<div class="item specialItem">
			<div class="itemImg">
				<img src="{{url($post->image)}}" class="img-responsive">
			</div>
			<div class="itemContent">
				<a href="{{url('/posts/'.$post->slug)}}"><h1>{{$post->title}}</h1></a>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">{{$post->deadline}}</span>
			</div>
		</div>
	</div>
	@endforeach
	<!-- <div class="col-md-2 col-sm-4 col-xs-4">
		<div class="item specialItem">
			<div class="itemImg">
				<img src="images/item1.jpg" class="img-responsive">
			</div>
			<div class="itemContent">
				<h1>Lets Organize Your Office Workspace</h1>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">25 Mar, 2014</span>
			</div>
		</div>
	</div>
	<div class="col-md-2 col-sm-4 col-xs-4">
		<div class="item specialItem">
			<div class="itemImg">
				<img src="images/item4.jpg" class="img-responsive">
			</div>
			<div class="itemContent">
				<h1>Lets Organize Your Office Workspace</h1>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">25 Mar, 2014</span>
			</div>
		</div>
	</div>
	<div class="col-md-2 col-sm-4 col-xs-4">
		<div class="item specialItem">
			<div class="itemImg">
				<img src="images/item2.jpg" class="img-responsive">
			</div>
			<div class="itemContent">
				<h1>Lets Organize Your Office Workspace</h1>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">25 Mar, 2014</span>
			</div>
		</div>
	</div>
	<div class="col-md-2 col-sm-4 col-xs-4">
		<div class="item specialItem">
			<div class="itemImg">
				<img src="images/item4.jpg" class="img-responsive">
			</div>
			<div class="itemContent">
				<h1>Lets Organize Your Office Workspace</h1>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">25 Mar, 2014</span>
			</div>
		</div>
	</div>
	<div class="col-md-2 col-sm-4 col-xs-4">
		<div class="item specialItem">
			<div class="itemImg">
				<img src="images/item3.jpg" class="img-responsive">
			</div>
			<div class="itemContent">
				<h1>Lets Organize Your Office Workspace</h1>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">25 Mar, 2014</span>
			</div>
		</div>
	</div> -->
</div>
</div><!--  End of container -->
</section><!--  Cingiz -->
@stop
