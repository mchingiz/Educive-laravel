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

					<div class="bigItem item" id="sliderItem1">
						<div class="itemImg">
							<img class="img-responsive" src="images/item1.jpg">
						</div>
						<div class="gradient"></div>
						<div class="itemContent innerItemContent">
							<h1>NYC Love Bikers</h1>
							<span class="fa fa-clock-o" aria-hidden="true"></span>
							<span class="deadline">25 Jan, 2016</span>
							<p>Lorem ipsum dolor dummy text goes here</p>
						</div>
					</div>

					<div class="bigItem item"  id="sliderItem2" style="display:none">
						<div class="itemImg">
							<img class="img-responsive" src="images/item2.jpg">
						</div>
						<div class="gradient"></div>
						<div class="itemContent innerItemContent">
							<h1>Or they don't?</h1>
							<span class="fa fa-clock-o" aria-hidden="true"></span>
							<span class="deadline">25 Feb, 2016</span>
							<p>Lorem ipsum dolor dummy text goes here</p>
						</div>
					</div>

					<div class="bigItem item"  id="sliderItem3" style="display:none">
						<div class="itemImg">
							<img class="img-responsive" src="images/item3.jpg">
						</div>
						<div class="gradient"></div>
						<div class="itemContent innerItemContent">
							<h1>Or they don't?</h1>
							<span class="fa fa-clock-o" aria-hidden="true"></span>
							<span class="deadline">25 Feb, 2016</span>
							<p>Lorem ipsum dolor dummy text goes here</p>
						</div>
					</div>

				<span class="fa fa-chevron-left" aria-hidden="true"></span>
				<span class="fa fa-chevron-right" aria-hidden="true"></span>
				</div>
			</div>
			<div class="col-md-4 col-xs-12">
				<div class="mediumItem item col-md-12 col-sm-6">
					<div class="itemImg">
						<img class="img-responsive" src="images/item5.jpg">
					</div>
					<div class="gradient"></div>
					<div class="itemContent innerItemContent">
						<h1>London Stock Exchange intensified</h1>
						<span class="fa fa-clock-o" aria-hidden="true"></span>
						<span class="deadline">25 Jan, 2016</span>
					</div>
				</div>
				<!-- Divider -->
				<div style="height:40px;" class="hidden-sm hidden-xs col-md-12"></div>

				<div class="mediumItem item col-md-12 col-sm-6">
					<div class="itemImg">
						<img class="img-responsive" src="images/item2.jpg">
					</div>
					<div class="gradient"></div>
					<div class="itemContent innerItemContent">
						<h1>London Stock Exchange intensified</h1>
						<span class="fa fa-clock-o" aria-hidden="true"></span>
						<span class="deadline">25 Jan, 2016</span>
					</div>
				</div>
			</div>
		</div>
		<div class="row" id="row2">
			<div class="col-md-4 col-sm-4">
				<div class="mediumItem item">
					<div class="itemImg">
						<img class="img-responsive" src="images/item6.jpg">
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
			</div>
		</div>
	</div>

	<div class="col-md-3">
		<div class="headline-row">
			<h1 class="section-title caticon sbx"><i></i><span class="sidebar-trending"></span>Trending</h1>
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
			<li class="media post-spacer">
				<div class="media-body">
					<h4 class="media-heading"><a href="#">Revolutionary new health tech scares some experts </a></h4>
					<p class="section-title caticon test"><span class="sidebar-trending"><i class="fa fa-clock-o" aria-hidden="true"></i></span> 25 January, 2015</p>
				</div>
			</li><li class="media post-spacer">
				<div class="media-body">
					<h4 class="media-heading"><a href="#">Revolutionary new health tech scares some experts </a></h4>
					<p class="section-title caticon test"><span class="sidebar-trending"><i class="fa fa-clock-o" aria-hidden="true"></i></span> 25 January, 2015</p>
				</div>
			</li><li class="media post-spacer">
				<div class="media-body">
					<h4 class="media-heading"><a href="#">Revolutionary new health tech scares some experts </a></h4>
					<p class="section-title caticon test"><span class="sidebar-trending"><i class="fa fa-clock-o" aria-hidden="true"></i></span> 25 January, 2015</p>
				</div>
			</li>
		</ul>


	</div>
</div><!--  End of upcoming deadlines row -->

<div class="sectionHeader">
	<h1>Vacancies</1>
</div>

<div class="row" id="vacancies">
<!--Big and medium items-->
<div class="row">
	<div class="col-md-6">
		<div class="bigItem item">
			<div class="itemImg">
				<img class="img-responsive" src="images/item1.jpg">
			</div>
			<div class="gradient"></div>
			<div class="itemContent innerItemContent">
				<h1>NYC Love Bikers</h1>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">25 Jan, 2016</span>
				<p>Lorem ipsum dolor dummy text goes here</p>
			</div>
		</div>
	</div>
	<div class="col-md-3 col-sm-6">
		<div class="mediumItem item">
			<div class="itemImg">
				<img class="img-responsive" src="images/item2.jpg">
			</div>
			<div class="gradient"></div>
			<div class="itemContent innerItemContent">
				<h1>London Stock Exchange intensified</h1>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">25 Jan, 2016</span>
			</div>
		</div>
		<!-- Divider -->
		<div style="height:40px;" class="hidden-sm hidden-xs"></div>

		<div class="mediumItem item">
			<div class="itemImg">
				<img class="img-responsive" src="images/item4.jpg">
			</div>

			<div class="gradient"></div>
			<div class="itemContent innerItemContent">
				<h1>London Stock Exchange intensified</h1>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">25 Jan, 2016</span>
			</div>
		</div>
	</div>
	<div class="col-md-3 col-sm-6">
		<div class="mediumItem item">
			<div class="itemImg">
				<img class="img-responsive" src="images/item8.jpeg">
			</div>

			<div class="gradient"></div>
			<div class="itemContent innerItemContent">
				<h1>London Stock Exchange intensified</h1>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">25 Jan, 2016</span>
			</div>
		</div>
		<!-- Divider -->
		<div style="height:40px;" class="hidden-sm hidden-xs"></div>

		<div class="mediumItem item">
			<div class="itemImg">
				<img class="img-responsive" src="images/item2.jpg">
			</div>
			<div class="gradient"></div>
			<div class="itemContent innerItemContent">
				<h1>London Stock Exchange intensified</h1>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">25 Jan, 2016</span>
			</div>
		</div>
	</div>
</div>
	<div class="row">
		<div class="col-md-3 col-sm-6 hidden-xs item smallItem">
			<div class="col-md-4 col-sm-4 smallItemImg">
				<img class="img-responsive" src="images/item1.jpg">
			</div>
			<div class="col-md-8 col-sm-8 itemContent smallItemContent">
				<h1>Startup released a chip for little pets</h1>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">25 Jan, 2016</span>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 hidden-xs item smallItem">
			<div class="col-md-4 col-sm-4 smallItemImg">
				<img class="img-responsive" src="images/item3.jpg">
			</div>
			<div class="col-md-8 col-sm-8 itemContent smallItemContent">
				<h1>New Canon lens available</h1>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">25 Jan, 2016</span>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 hidden-xs item smallItem">
			<div class="col-md-4 col-sm-4 smallItemImg">
				<img class="img-responsive" src="images/item3.jpg">
			</div>
			<div class="col-md-8 col-sm-8 itemContent smallItemContent">
				<h1>Pioneer makes you better DJs</h1>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">25 Jan, 2016</span>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 hidden-xs item smallItem">
			<div class="col-md-4 col-sm-4 smallItemImg">
				<img class="img-responsive" src="images/item3.jpg">
			</div>
			<div class="col-md-8 col-sm-8 itemContent smallItemContent">
				<h1>Minimal organized special gadgets</h1>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">25 Jan, 2016</span>
			</div>
		</div>
	</div>
</div><!--  End of vacancies row -->

<div class="sectionHeader">
	<h1>Vacancies</1>
</div>

<div class="row" id="vacancies">
<!--Big and medium items-->
<div class="row">
	<div class="col-md-6">
		<div class="bigItem item">
			<div class="itemImg">
				<img class="img-responsive" src="images/item1.jpg">
			</div>
			<div class="gradient"></div>
			<div class="itemContent innerItemContent">
				<h1>NYC Love Bikers</h1>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">25 Jan, 2016</span>
				<p>Lorem ipsum dolor dummy text goes here</p>
			</div>
		</div>
	</div>
	<div class="col-md-3 col-sm-6">
		<div class="mediumItem item">
			<div class="itemImg">
				<img class="img-responsive" src="images/item4.jpg">
			</div>
			<div class="gradient"></div>
			<div class="itemContent innerItemContent">
				<h1>London Stock Exchange intensified</h1>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">25 Jan, 2016</span>
			</div>
		</div>
		<!-- Divider -->
		<div style="height:40px;" class="hidden-sm hidden-xs"></div>

		<div class="mediumItem item">
			<div class="itemImg">
				<img class="img-responsive" src="images/item2.jpg">
			</div>

			<div class="gradient"></div>
			<div class="itemContent innerItemContent">
				<h1>London Stock Exchange intensified</h1>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">25 Jan, 2016</span>
			</div>
		</div>
	</div>
	<div class="col-md-3 col-sm-6">
		<div class="mediumItem item">
			<div class="itemImg">
				<img class="img-responsive" src="images/item2.jpg">
			</div>

			<div class="gradient"></div>
			<div class="itemContent innerItemContent">
				<h1>London Stock Exchange intensified</h1>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">25 Jan, 2016</span>
			</div>
		</div>
		<!-- Divider -->
		<div style="height:40px;" class="hidden-sm hidden-xs"></div>

		<div class="mediumItem item">
			<div class="itemImg">
				<img class="img-responsive" src="images/item6.jpg">
			</div>
			<div class="gradient"></div>
			<div class="itemContent innerItemContent">
				<h1>London Stock Exchange intensified</h1>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">25 Jan, 2016</span>
			</div>
		</div>
	</div>
</div>
	<div class="row">
		<div class="col-md-3 col-sm-6 hidden-xs item smallItem">
			<div class="col-md-4 col-sm-4 smallItemImg">
				<img class="img-responsive" src="images/item1.jpg">
			</div>
			<div class="col-md-8 col-sm-8 itemContent smallItemContent">
				<h1>Startup released a chip for little pets</h1>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">25 Jan, 2016</span>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 hidden-xs item smallItem">
			<div class="col-md-4 col-sm-4 smallItemImg">
				<img class="img-responsive" src="images/item3.jpg">
			</div>
			<div class="col-md-8 col-sm-8 itemContent smallItemContent">
				<h1>New Canon lens available</h1>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">25 Jan, 2016</span>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 hidden-xs item smallItem">
			<div class="col-md-4 col-sm-4 smallItemImg">
				<img class="img-responsive" src="images/item3.jpg">
			</div>
			<div class="col-md-8 col-sm-8 itemContent smallItemContent">
				<h1>Pioneer makes you better DJs</h1>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">25 Jan, 2016</span>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 hidden-xs item smallItem">
			<div class="col-md-4 col-sm-4 smallItemImg">
				<img class="img-responsive" src="images/item3.jpg">
			</div>
			<div class="col-md-8 col-sm-8 itemContent smallItemContent">
				<h1>Minimal organized special gadgets</h1>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">25 Jan, 2016</span>
			</div>
		</div>
	</div>
</div><!--  End of vacancies row -->


<div class="sectionHeader">
	<h1>Vacancies</1>
</div>

<div class="row" id="vacancies">
<!--Big and medium items-->
<div class="row">
	<div class="col-md-6">
		<div class="bigItem item">
			<div class="itemImg">
				<img class="img-responsive" src="images/item1.jpg">
			</div>
			<div class="gradient"></div>
			<div class="itemContent innerItemContent">
				<h1>NYC Love Bikers</h1>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">25 Jan, 2016</span>
				<p>Lorem ipsum dolor dummy text goes here</p>
			</div>
		</div>
	</div>
	<div class="col-md-3 col-sm-6">
		<div class="mediumItem item">
			<div class="itemImg">
				<img class="img-responsive" src="images/item2.jpg">
			</div>
			<div class="gradient"></div>
			<div class="itemContent innerItemContent">
				<h1>London Stock Exchange intensified</h1>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">25 Jan, 2016</span>
			</div>
		</div>
		<!-- Divider -->
		<div style="height:40px;" class="hidden-sm hidden-xs"></div>

		<div class="mediumItem item">
			<div class="itemImg">
				<img class="img-responsive" src="images/item6.jpg">
			</div>

			<div class="gradient"></div>
			<div class="itemContent innerItemContent">
				<h1>London Stock Exchange intensified</h1>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">25 Jan, 2016</span>
			</div>
		</div>
	</div>
	<div class="col-md-3 col-sm-6">
		<div class="mediumItem item">
			<div class="itemImg">
				<img class="img-responsive" src="images/item4.jpg">
			</div>

			<div class="gradient"></div>
			<div class="itemContent innerItemContent">
				<h1>London Stock Exchange intensified</h1>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">25 Jan, 2016</span>
			</div>
		</div>
		<!-- Divider -->
		<div style="height:40px;" class="hidden-sm hidden-xs"></div>

		<div class="mediumItem item">
			<div class="itemImg">
				<img class="img-responsive" src="images/item2.jpg">
			</div>
			<div class="gradient"></div>
			<div class="itemContent innerItemContent">
				<h1>London Stock Exchange intensified</h1>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">25 Jan, 2016</span>
			</div>
		</div>
	</div>
</div>
	<div class="row">
		<div class="col-md-3 col-sm-6 hidden-xs item smallItem">
			<div class="col-md-4 col-sm-4 smallItemImg">
				<img class="img-responsive" src="images/item1.jpg">
			</div>
			<div class="col-md-8 col-sm-8 itemContent smallItemContent">
				<h1>Startup released a chip for little pets</h1>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">25 Jan, 2016</span>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 hidden-xs item smallItem">
			<div class="col-md-4 col-sm-4 smallItemImg">
				<img class="img-responsive" src="images/item3.jpg">
			</div>
			<div class="col-md-8 col-sm-8 itemContent smallItemContent">
				<h1>New Canon lens available</h1>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">25 Jan, 2016</span>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 hidden-xs item smallItem">
			<div class="col-md-4 col-sm-4 smallItemImg">
				<img class="img-responsive" src="images/item3.jpg">
			</div>
			<div class="col-md-8 col-sm-8 itemContent smallItemContent">
				<h1>Pioneer makes you better DJs</h1>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">25 Jan, 2016</span>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 hidden-xs item smallItem">
			<div class="col-md-4 col-sm-4 smallItemImg">
				<img class="img-responsive" src="images/item3.jpg">
			</div>
			<div class="col-md-8 col-sm-8 itemContent smallItemContent">
				<h1>Minimal organized special gadgets</h1>
				<span class="fa fa-clock-o" aria-hidden="true"></span>
				<span class="deadline">25 Jan, 2016</span>
			</div>
		</div>
	</div>
</div><!--  End of vacancies row -->



<div class="sectionHeader">
	<h1>Editors' Choice</1>
</div>

<div class="row" id="special">
	<!-- Will contain a section like "Editors' Choice"-->
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
	</div>
</div>
</div><!--  End of container -->
</section><!--  Cingiz -->
@stop
