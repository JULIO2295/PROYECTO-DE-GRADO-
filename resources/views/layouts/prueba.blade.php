<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Slander - Responsive HTML5 Landing Page">
	<meta name="author" content="dkpixels.com">

    <title>Momental - Multipurpose HTML5 Bootstrap theme</title>

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicons -->
	<link rel="shortcut icon" href="{{ asset('recur/img/favicon.ico')}}">
	<link rel="apple-touch-icon" href="{{ asset('recur/img/apple-touch-icon.png')}}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('recur/img/apple-touch-icon-72x72.png')}}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('recur/img/apple-touch-icon-114x114.png')}}">
	<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('recur/img/apple-touch-icon-144x144.png')}}">

	<!-- Google Webfonts -->
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,300,300italic,400italic,500,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,100,100italic,200,300,300italic,400italic,500,700,900' rel='stylesheet' type='text/css'>

    <!-- CSS -->
    <link href="{{ asset('recur/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('recur/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('recur/js/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{ asset('recur/js/owl-carousel/owl.theme.css')}}" rel="stylesheet">
    <link href="{{ asset('recur/js/owl-carousel/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{ asset('recur/js/easytabs/easy-responsive-tabs.css')}}" rel="stylesheet"/>
    <link href="{{ asset('recur/js/flex-slider/flexslider.css')}}" rel="stylesheet" />
    <link href="{{ asset('recur/css/prettyphoto.css')}}" rel="stylesheet" />
    <link href="{{ asset('recur/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('recur/css/style-responsive.css')}}" rel="stylesheet">

	<!-- Add custom CSS here -->
	<link href="{{ asset('recur/css/custom.css')}}" rel="stylesheet">

	<!--[if lt IE 9]>
      	<script src="./js/html5shiv.js"></script>
	      <script src="./js/respond.js"></script>
	<![endif]-->

</head>
<body id="page-top">

<!-- Outer-wrap -->
<div class="outer-wrap">
	<div class="container">
	
		<!-- Fixed Left Navigaton -->
		<div class="col-md-3 m-left">
		
			<!-- Navmenu -->
			<header>
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="./index.html"><img src="img/logo.png" class="img-responsive" alt=""/></a>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right menu-effect">
							<li class="current"><a href="./index.html" data-hover="Home">Home</a></li>
							<li>
								<a class="dropdown" data-hover="About&nbsp;Us&nbsp;&#9663;">About Us &#9662;</a>
								<ul class="v-dropdown">
									<li><a href="./about.html" data-hover="About&nbsp;Us&nbsp;1">About Us 1</a></li>
									<li><a href="./about.html" data-hover="About&nbsp;Us&nbsp;2">About Us 2</a></li>
									<li><a href="./about.html" data-hover="About&nbsp;Us&nbsp;3">About Us 3</a></li>
									<li><a href="./about.html" data-hover="About&nbsp;Us&nbsp;4">About Us 4</a></li>
								</ul>
							</li>
							<li><a href="./portfolio.html" data-hover="Portfolio">Portfolio</a></li>
							<li><a href="./blog.html" data-hover="Blog">Blog</a></li>
							<li><a href="./single-post.html" data-hover="Blog&nbsp;-&nbsp;Single">Blog - Single</a></li>
							<li><a href="./contact.html" data-hover="Contact">Contact</a></li>
						</ul>
					</div>
				</nav>
				<!-- Navmenu -->
				
				<!-- Hidden Content -->
				<div class="m-header">
					<ul class="mh-social">
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
					</ul>
					<p class="mh-copy">&copy; 2014 Momental, All Rights Reserved</p>
				</div>
				<div class="m-hide"><i class="fa fa-plus-circle"></i></div>
				<!-- Hidden Content -->
				
			</header>
		</div>
		<!-- Fixed Left Navigaton - END -->
		
		<!-- Right Main Content -->
		<div class="col-md-9 m-right">
		
			<!-- Intro Slider -->
			<div class="row" data-animated="0">
				<div class="col-md-12">
					<div id="intro">
						<div id="intro-slider" class="owl-carousel owl-theme">
							<div class="item"><img src="{{ asset('recur/img/slider/intro/1.jpg')}}" class="img-responsive" alt=""></div>
							<div class="item"><img src="{{ asset('recur/img/slider/intro/2.jpg')}}" class="img-responsive" alt=""></div>
							<div class="item"><img src="{{ asset('recur/img/slider/intro/3.jpg')}}" class="img-responsive" alt=""></div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Welcome Content -->
			<div class="row" data-animated="0">
				<div class="col-md-12">
					<div id="welcome">
						<h3>We design & develop awesome websites and smart Apps</h3>
						<a href="#" class="btn-default btn-center">learn more</a>
					</div>
				</div>
			</div>
			
			<!-- Services Content -->
			<div class="row" data-animated="0">
				<div class="col-md-12">
					<div id="services">
						<ul>
							<li data-animated="0">
								<i class="fa fa-edit"></i>
								<h4>Design from scratch</h4>
								<p>professional design</p>
							</li>
							<li data-animated="0">
								<i class="fa fa-html5"></i>
								<h4>Html Coding</h4>
								<p>front-end development</p>
							</li>
							<li data-animated="0">
								<i class="fa fa-cog"></i>
								<h4>WP development</h4>
								<p>wordpress themes</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
			
			<!-- Tab content -->
			<div class="row">
				<div class="col-md-12">
					<div id="features-tab" data-animated="0">
					
						<!-- Tab nav -->
						<ul class="nav-tabs" role="tablist" id="myTab">
							<li class="active"><a href="#tab1" role="tab" data-toggle="tab">Amazing Features</a></li>
							<li><a href="#tab2" role="tab" data-toggle="tab">Unique Design</a></li>
							<li><a href="#tab3" role="tab" data-toggle="tab">Clean Code</a></li>
							<li><a href="#tab4" role="tab" data-toggle="tab">24/7 Support</a></li>
						</ul>
						
						<!-- Tab panes -->
						<div class="tab-content">
							<div class="tab-pane active fade in" id="tab1">
								<div class="row">
									<div class="col-md-4">
										<img src="img/tabs/1.png" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-8 tab-right-content">
										<h4>Amazing Features</h4>
										<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum.</p>
										<p>Auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit,  duis sed odio sit amet nibh vulputate cursus a sit amet.</p>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="tab2">
								<div class="row">
									<div class="col-md-8 tab-left-content">
										<h4>Amazing Features</h4>
										<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum.</p>
										<p>Auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit,  duis sed odio sit amet nibh vulputate cursus a sit amet.</p>
									</div>
									<div class="col-md-4">
										<img src="img/tabs/1.png" class="img-responsive" alt=""/>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="tab3">
								<div class="row">
									<div class="col-md-4">
										<img src="img/tabs/1.png" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-8 tab-right-content">
										<h4>Amazing Features</h4>
										<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum.</p>
										<p>Auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit,  duis sed odio sit amet nibh vulputate cursus a sit amet.</p>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="tab4">
								<div class="row">
									<div class="col-md-8 tab-left-content">
										<h4>Amazing Features</h4>
										<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum.</p>
										<p>Auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit,  duis sed odio sit amet nibh vulputate cursus a sit amet.</p>
									</div>
									<div class="col-md-4">
										<img src="img/tabs/1.png" class="img-responsive" alt=""/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Portfolio -->
			<div class="row">
				<div class="col-md-12">
					<div id="m-portfolio" data-animated="0">
						<h3>Portfolio</h3>
						<div class="row">
							<div class="col-md-4" data-animated="0">
								<div class="mp-thumb">
									<img src="img/projects/1.jpg" class="img-responsive" alt=""/>
									<div class="overlay1">
										<h4>Shtipalkat e drunit</h4>
									</div>
									<div class="overlay1-hr">
										<a href="#" class="link"><i class="fa fa-file-text-o"></i></a>
										<a href="img/projects/1.jpg" class="prettyPhoto zoom"><i class="fa fa-search"></i></a>
									</div>
								</div>
							</div>
							<div class="col-md-4" data-animated="0">
								<div class="mp-thumb">
									<img src="img/projects/2.jpg" class="img-responsive" alt=""/>
									<div class="overlay1">
										<h4>First Walk</h4>
									</div>
									<div class="overlay1-hr">
										<a href="#" class="link"><i class="fa fa-file-text-o"></i></a>
										<a href="img/projects/2.jpg" class="prettyPhoto zoom"><i class="fa fa-search"></i></a>
									</div>
								</div>
							</div>
							<div class="col-md-4" data-animated="0">
								<div class="mp-thumb">
									<img src="img/projects/3.jpg" class="img-responsive" alt=""/>
									<div class="overlay1">
										<h4>Taraba Street</h4>
									</div>
									<div class="overlay1-hr">
										<a href="#" class="link"><i class="fa fa-file-text-o"></i></a>
										<a href="img/projects/3.jpg" class="prettyPhoto zoom"><i class="fa fa-search"></i></a>
									</div>
								</div>
							</div>
							<div class="col-md-4" data-animated="0">
								<div class="mp-thumb">
									<img src="img/projects/4.jpg" class="img-responsive" alt=""/>
									<div class="overlay1">
										<h4>Riding in a City</h4>
									</div>
									<div class="overlay1-hr">
										<a href="#" class="link"><i class="fa fa-file-text-o"></i></a>
										<a href="img/projects/4.jpg" class="prettyPhoto zoom"><i class="fa fa-search"></i></a>
									</div>
								</div>
							</div>
							<div class="col-md-4" data-animated="0">
								<div class="mp-thumb">
									<img src="img/projects/5.jpg" class="img-responsive" alt=""/>
									<div class="overlay1">
										<h4>Street Art</h4>
									</div>
									<div class="overlay1-hr">
										<a href="#" class="link"><i class="fa fa-file-text-o"></i></a>
										<a href="img/projects/5.jpg" class="prettyPhoto zoom"><i class="fa fa-search"></i></a>
									</div>
								</div>
							</div>
							<div class="col-md-4" data-animated="0">
								<div class="mp-thumb">
									<img src="img/projects/6.jpg" class="img-responsive" alt=""/>
									<div class="overlay1">
										<h4>Dru t'sharrita</h4>
									</div>
									<div class="overlay1-hr">
										<a href="#" class="link"><i class="fa fa-file-text-o"></i></a>
										<a href="img/projects/6.jpg" class="prettyPhoto zoom"><i class="fa fa-search"></i></a>
									</div>
								</div>
							</div>
							<div class="col-md-4" data-animated="0">
								<div class="mp-thumb">
									<img src="img/projects/7.jpg" class="img-responsive" alt=""/>
									<div class="overlay1">
										<h4>Romantic Horsie</h4>
									</div>
									<div class="overlay1-hr">
										<a href="#" class="link"><i class="fa fa-file-text-o"></i></a>
										<a href="img/projects/7.jpg" class="prettyPhoto zoom"><i class="fa fa-search"></i></a>
									</div>
								</div>
							</div>
							<div class="col-md-4" data-animated="0">
								<div class="mp-thumb">
									<img src="img/projects/8.jpg" class="img-responsive" alt=""/>
									<div class="overlay1">
										<h4>Relaxing at Beach</h4>
									</div>
									<div class="overlay1-hr">
										<a href="#" class="link"><i class="fa fa-file-text-o"></i></a>
										<a href="img/projects/8.jpg" class="prettyPhoto zoom"><i class="fa fa-search"></i></a>
									</div>
								</div>
							</div>
							<div class="col-md-4" data-animated="0">
								<div class="mp-thumb">
									<img src="img/projects/9.jpg" class="img-responsive" alt=""/>
									<div class="overlay1">
										<h4>Autumn Feel</h4>
									</div>
									<div class="overlay1-hr">
										<a href="#" class="link"><i class="fa fa-file-text-o"></i></a>
										<a href="img/projects/9.jpg" class="prettyPhoto zoom"><i class="fa fa-search"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Blog Slider -->
			<div class="row">
				<div class="col-md-12">
					<div id="blog" data-animated="0">
						<h3>Blog Posts</h3>
						
						<div id="m-blog" class="owl-carousel owl-theme">
							<div class="item">
								<div class="mb-thumb">
									<img src="img/blog/1.jpg" class="img-responsive" alt=""/>
									<div class="date">18<span>aug</span></div>
									<span class="rmore"><a href="#">read more</a></span>
								</div>
								<h4><a href="#">Improving and Removing Envato Market Image Watermarking</a></h4>
								<div class="blog-meta">
									<span><i class="fa fa-comments"></i> 2 comments</span>
									<span><i class="fa fa-user"></i> premiumlayers</span>
								</div>
								<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor</p>
							</div>
							
							<div class="item">
								<div class="mb-thumb">
									<img src="img/blog/2.jpg" class="img-responsive" alt=""/>
									<div class="date">06<span>aug</span></div>
									<span class="rmore"><a href="#">read more</a></span>
								</div>
								<h4><a href="#">A More Balanced Envato MarketImportant Changes!</a></h4>
								<div class="blog-meta">
									<span><i class="fa fa-comments"></i> 4 comments</span>
									<span><i class="fa fa-user"></i> admin</span>
								</div>
								<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor</p>
							</div>
							
							<div class="item">
								<div class="mb-thumb">
									<img src="img/blog/1.jpg" class="img-responsive" alt=""/>
									<div class="date">18<span>aug</span></div>
									<span class="rmore"><a href="#">read more</a></span>
								</div>
								<h4><a href="#">Improving and Removing Envato Market Image Watermarking</a></h4>
								<div class="blog-meta">
									<span><i class="fa fa-comments"></i> 2 comments</span>
									<span><i class="fa fa-user"></i> premiumlayers</span>
								</div>
								<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor</p>
							</div>
							
							<div class="item">
								<div class="mb-thumb">
									<img src="img/blog/2.jpg" class="img-responsive" alt=""/>
									<div class="date">06<span>aug</span></div>
									<span class="rmore"><a href="#">read more</a></span>
								</div>
								<h4><a href="#">A More Balanced Envato MarketImportant Changes!</a></h4>
								<div class="blog-meta">
									<span><i class="fa fa-comments"></i> 4 comments</span>
									<span><i class="fa fa-user"></i> admin</span>
								</div>
								<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor</p>
							</div>
							
							<div class="item">
								<div class="mb-thumb">
									<img src="img/blog/1.jpg" class="img-responsive" alt=""/>
									<div class="date">18<span>aug</span></div>
									<span class="rmore"><a href="#">read more</a></span>
								</div>
								<h4><a href="#">Improving and Removing Envato Market Image Watermarking</a></h4>
								<div class="blog-meta">
									<span><i class="fa fa-comments"></i> 2 comments</span>
									<span><i class="fa fa-user"></i> premiumlayers</span>
								</div>
								<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor</p>
							</div>
							
							<div class="item">
								<div class="mb-thumb">
									<img src="img/blog/2.jpg" class="img-responsive" alt=""/>
									<div class="date">06<span>aug</span></div>
									<span class="rmore"><a href="#">read more</a></span>
								</div>
								<h4><a href="#">A More Balanced Envato MarketImportant Changes!</a></h4>
								<div class="blog-meta">
									<span><i class="fa fa-comments"></i> 4 comments</span>
									<span><i class="fa fa-user"></i> admin</span>
								</div>
								<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor</p>
							</div>
							
							<div class="item">
								<div class="mb-thumb">
									<img src="img/blog/1.jpg" class="img-responsive" alt=""/>
									<div class="date">18<span>aug</span></div>
									<span class="rmore"><a href="#">read more</a></span>
								</div>
								<h4><a href="#">Improving and Removing Envato Market Image Watermarking</a></h4>
								<div class="blog-meta">
									<span><i class="fa fa-comments"></i> 2 comments</span>
									<span><i class="fa fa-user"></i> premiumlayers</span>
								</div>
								<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor</p>
							</div>
							
							<div class="item">
								<div class="mb-thumb">
									<img src="img/blog/2.jpg" class="img-responsive" alt=""/>
									<div class="date">06<span>aug</span></div>
									<span class="rmore"><a href="#">read more</a></span>
								</div>
								<h4><a href="#">A More Balanced Envato MarketImportant Changes!</a></h4>
								<div class="blog-meta">
									<span><i class="fa fa-comments"></i> 4 comments</span>
									<span><i class="fa fa-user"></i> admin</span>
								</div>
								<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor</p>
							</div>
							
							<div class="item">
								<div class="mb-thumb">
									<img src="img/blog/1.jpg" class="img-responsive" alt=""/>
									<div class="date">18<span>aug</span></div>
									<span class="rmore"><a href="#">read more</a></span>
								</div>
								<h4><a href="#">Improving and Removing Envato Market Image Watermarking</a></h4>
								<div class="blog-meta">
									<span><i class="fa fa-comments"></i> 2 comments</span>
									<span><i class="fa fa-user"></i> premiumlayers</span>
								</div>
								<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor</p>
							</div>
							
							<div class="item">
								<div class="mb-thumb">
									<img src="img/blog/2.jpg" class="img-responsive" alt=""/>
									<div class="date">06<span>aug</span></div>
									<span class="rmore"><a href="#">read more</a></span>
								</div>
								<h4><a href="#">A More Balanced Envato MarketImportant Changes!</a></h4>
								<div class="blog-meta">
									<span><i class="fa fa-comments"></i> 4 comments</span>
									<span><i class="fa fa-user"></i> admin</span>
								</div>
								<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor</p>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<!-- Pricing Table -->
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-12" id="m-pricing" data-animated="0">
						<h3>Pricing tables</h3>
						<div class="row">
							<div class="col-md-4">
								<div class="pricing-table">
									<div class="mp-icon"></div>
									<div class="mp-title">Basic</div>
									<div class="mp-price"><small>$</small>40<span>.99<em>month</em></span></div>
									<ul>
										<li><i class="fa fa-check-circle"></i> Unlimited Bandwith</li>
										<li><i class="fa fa-times-circle"></i> Professional Cpanel</li>
										<li><i class="fa fa-check-circle"></i> Unlimited E-mails</li>
										<li><i class="fa fa-times-circle"></i> 24/7 Support</li>
										<li><i class="fa fa-check-circle"></i> High Security</li>
									</ul>
									<div class="mp-btn"><a href="#">Select this plan</a></div>
								</div>
							</div>
							
							<div class="col-md-4">
								<div class="pricing-table">
									<div class="mp-icon"></div>
									<div class="mp-title">Standard</div>
									<div class="mp-price"><small>$</small>60<span>.99<em>month</em></span></div>
									<ul>
										<li><i class="fa fa-check-circle"></i> Unlimited Bandwith</li>
										<li><i class="fa fa-times-circle"></i> Professional Cpanel</li>
										<li><i class="fa fa-check-circle"></i> Unlimited E-mails</li>
										<li><i class="fa fa-times-circle"></i> 24/7 Support</li>
										<li><i class="fa fa-check-circle"></i> High Security</li>
									</ul>
									<div class="mp-btn"><a href="#">Select this plan</a></div>
								</div>
							</div>
							
							<div class="col-md-4">
								<div class="pricing-table">
									<div class="mp-icon"></div>
									<div class="mp-title">Professional</div>
									<div class="mp-price"><small>$</small>90<span>.99<em>month</em></span></div>
									<ul>
										<li><i class="fa fa-check-circle"></i> Unlimited Bandwith</li>
										<li><i class="fa fa-times-circle"></i> Professional Cpanel</li>
										<li><i class="fa fa-check-circle"></i> Unlimited E-mails</li>
										<li><i class="fa fa-times-circle"></i> 24/7 Support</li>
										<li><i class="fa fa-check-circle"></i> High Security</li>
									</ul>
									<div class="mp-btn"><a href="#">Select this plan</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Testimonials -->
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-12" id="m-testimonials" data-animated="0">
						<h3>Testimonials</h3>
						<div class="row">
							<div class="col-md-12">
								<div id="testimonials" class="owl-carousel owl-theme">
									<div class="item">
										<img src="img/quote/1.png" class="img-responsive" alt="">
										<p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit class aptent taciti sociosqu ad litora</p>
										<i class="fa fa-user"></i>
										<cite>John Smith, CEO at <span>Envato</span></cite>
									</div>
									<div class="item">
										<img src="img/quote/1.png" class="img-responsive" alt="">
										<p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit class aptent taciti sociosqu ad litora</p>
										<i class="fa fa-user"></i>
										<cite>John Smith, CEO at <span>Envato</span></cite>
									</div>
									<div class="item">
										<img src="img/quote/1.png" class="img-responsive" alt="">
										<p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit class aptent taciti sociosqu ad litora</p>
										<i class="fa fa-user"></i>
										<cite>John Smith, CEO at <span>Envato</span></cite>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Icons content -->
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-12" id="icons-wrap" data-animated="0">
						<h3>Font Awesome</h3>
						<ul>
							<li><i class="fa fa-play-circle"></i> Play Circle icon</li>
							<li><i class="fa fa-signal"></i> Signal icon</li>
							<li><i class="fa fa-envelope-o"></i> Envelope icon</li>
							<li><i class="fa fa-home"></i> Home icon</li>
							<li><i class="fa fa-volume-up"></i> Volume icon</li>
							<li><i class="fa fa-refresh"></i> Refresh icon</li>
							<li><i class="fa fa-download"></i> Download icon</li>
							<li><i class="fa fa-camera"></i> Camera icon</li>
							<li><i class="fa fa-comments"></i> Comments icon</li>
							<li><i class="fa fa-lock"></i> Lock icon</li>
							<li><i class="fa fa-search"></i> Search icon</li>
							<li><i class="fa fa-folder-open"></i> Folder icon</li>
						</ul>
					</div>
				</div>
			</div>
			
			<!-- Vertical Tab -->
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-12" id="vertical-tabs" data-animated="0">
						<h3>Vertikal Tabs</h3>
						<!--vertical Tabs-->
						<div id="verticalTab">
							<ul class="resp-tabs-list">
								<li><i class="fa fa-laptop"></i> Responsive Layout</li>
								<li><i class="fa fa-suitcase"></i> Multiple Portfolios</li>
								<li><i class="fa fa-youtube-play"></i> Video Support</li>
							</ul>
							<div class="resp-tabs-container">
								<div>
									<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
									<p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet</p>
								</div>
								<div>
									<p>Curabitur mauris lorem, egestas sit amet interdum vel, pretium nec quam. Nullam non vestibulum ligula. Fusce eget faucibus mauris, nec ornare orci. Fusce ac magna at turpis tempor iaculis.</p>
									<p>Praesent scelerisque sed leo id pellentesque. Donec ipsum nibh, feugiat id neque sed, posuere malesuada nibh. Integer consequat dolor a ligula condimentum ultricies. Nam pellentesque magna ut condimentum elementum. Etiam sit amet orci euismod, mollis risus eu, sagittis magna. Proin vel metus blandit diam accumsan ornare. Sed a quam odio. Sed ut erat nec purus ultrices ultricies.</p>
								</div>
								<div>
									<p>Integer lacinia commodo est, nec consequat dui fermentum nec. Quisque dapibus magna sit amet sapien tincidunt, vitae condimentum mauris lacinia. Vestibulum eu porta nibh. Curabitur aliquam metus bibendum dolor feugiat, cursus facilisis lectus maximus. Ut porta neque sit amet enim viverra, eu tincidunt ex hendrerit.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non est non tellus sollicitudin sollicitudin. Donec fermentum id dolor eget posuere. Morbi malesuada lacus non urna mattis vulputate. Nulla id fermentum velit, vel aliquet tortor.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Timeline -->
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-12" id="timeline-wrap" data-animated="0">
						<h3>Timeline</h3>
						<ol id="timeline">
							<li class="t-left" data-animated="0">
								<div class="t-time">Lorem ipsum<span>2000 - 2005</span></div>
								<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit</p>
							</li>
							<li class="t-right" data-animated="0">
								<div class="t-time">Dolor sit<span>2000 - 2005</span></div>
								<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit</p>
							</li>
							<li class="t-left" data-animated="0">
								<div class="t-time">Aenan Auctor<span>2000 - 2005</span></div>
								<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit</p>
							</li> 
							<li class="t-right" data-animated="0">
								<div class="t-time">Gravida prin<span>2000 - 2005</span></div>
								<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit</p>
							</li>
							<li class="t-left" data-animated="0">
								<div class="t-time">Lorem Quis<span>2000 - 2005</span></div>
								<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit</p>
							</li>
							<li class="t-right" data-animated="0">
								<div class="t-time">Bibendum<span>2000 - 2005</span></div>
								<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit</p>
							</li>
							<li class="t-left" data-animated="0">
								<div class="t-time">Nisi solic<span>2000 - 2005</span></div>
								<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit</p>
							</li>
							<li class="t-right" data-animated="0">
								<div class="t-time">Proin Gravida<span>2000 - 2005</span></div>
								<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit</p>
							</li>
						</ol>
					</div>
				</div>
			</div>
			
			<!-- Home-Shop -->
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-12" id="m-products" data-animated="0">
						<h3>Our Products</h3>
						<div class="row">
							<div class="col-md-4">
								<div class="product-wrap">
									<div class="pw-price">$540.99</div>
									<img src="img/products/1.jpg" class="img-responsive" alt=""/>
									<div class="pw-inner">
										<h4>Classic Bicycle</h4>
										<ul>
											<li><a href="#"><span><i class="fa fa-heart"></i></span></a></li>
											<li><a href="#"><span><i class="fa fa-shopping-cart"></i></span></a></li>
											<li><a href="#"><span><i class="fa fa-exchange"></i></span></a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="col-md-4">
								<div class="product-wrap">
									<div class="pw-price">$789.50</div>
									<img src="img/products/2.jpg" class="img-responsive" alt=""/>
									<div class="pw-inner">
										<h4>Antic Car</h4>
										<ul>
											<li><a href="#"><span><i class="fa fa-heart"></i></span></a></li>
											<li><a href="#"><span><i class="fa fa-shopping-cart"></i></span></a></li>
											<li><a href="#"><span><i class="fa fa-exchange"></i></span></a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="col-md-4">
								<div class="product-wrap">
									<div class="pw-price">$210.00</div>
									<img src="img/products/3.jpg" class="img-responsive" alt=""/>
									<div class="pw-inner">
										<h4>Vintage Panorama</h4>
										<ul>
											<li><a href="#"><span><i class="fa fa-heart"></i></span></a></li>
											<li><a href="#"><span><i class="fa fa-shopping-cart"></i></span></a></li>
											<li><a href="#"><span><i class="fa fa-exchange"></i></span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Promo banner -->
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-12" id="m-promo" data-animated="0">
						<h3>Promo banner</h3>
						<a href="#"><img src="img/promo-banner.png" class="img-responsive" alt=""/></a>
					</div>
				</div>
			</div>
			
			<!-- Footer contact -->
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-12" id="m-contact" data-animated="0">
						<h3>Send us a message</h3>

						<form class="contact-form" data-animated="0" id="contactForm" action="php/contact.php" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="mc-name">
										<input type="text" name="senderName" id="senderName" placeholder="name" Required>
										<span><i class="fa fa-user"></i></span>
									</div>
									<div class="mc-email">
										<input type="email" name="senderEmail" id="senderEmail" placeholder="Email Address" Required>
										<span><i class="fa fa-envelope-o"></i></span>
									</div>
									<div class="mc-website">
										<input type="text" name="subject" id="subject" placeholder="subject">
										<span><i class="fa fa-link"></i></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mc-message">
										<textarea name="message" id="message" placeholder="Message" Required></textarea>
										<button type="submit"><span>Send</span></button>
									</div>
								</div>
							</div>
						</form>
						<div id="successMessage" class="successmessage">
							<p><span class="success-ico"></span> Thanks for sending your message! We'll get back to you shortly.</p>
						</div>
						<div id="failureMessage" class="errormessage">
							<p><span class="error-ico"></span> There was a problem sending your message. Please try again.</p>
						</div>
						<div id="incompleteMessage" class="statusMessage">
							<p>Please complete all the fields in the form before sending.</p>
						</div>

						<div class="contact-info" data-animated="0">
							<h4>Contact Info</h4>
							<ul>
								<li><i class="fa fa-home"></i> lorem ipsum street</li>
								<li><i class="fa fa-phone"></i> +399 (500) 321 9548</li>
								<li><i class="fa fa-envelope"></i> info@domain.com</li>
							</ul>
						</div>
						<div class="flickr-widget" data-animated="0">
							<h4>Flickr Gallery</h4>
							<ul id="flickr" class="thumbs"></ul>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Footer - copyright -->
			<footer data-animated="0">
				<p>&copy; 2014 Momental. All Rights Reserved</p>
				<a href="#page-top" class="backtotop-icon page-scroll"></a>
			</footer>
		</div>
		<!-- Right Main Content - END -->
	</div>
</div>
<!-- Outer-wrap - END -->

<!-- jQuery -->
<script src="{{ asset('recur/js/jquery.js')}}"></script>
<script src="{{ asset('recur/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('recur/js/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{ asset('recur/js/easytabs/easyResponsiveTabs.js')}}"></script>
<script src="{{ asset('recur/js/jflickrfeed.min.js')}}"></script>
<script src="{{ asset('recur/js/jquery.easing.min.js')}}"></script>
<script src="{{ asset('recur/js/flex-slider/jquery.flexslider.js')}}"></script>
<script src="{{ asset('recur/js/jCProgress-1.0.3.js')}}"></script>
<script src="{{ asset('recur/js/jquery.appear.js')}}"></script>
<script src="{{ asset('recur/js/jquery.inview.js')}}"></script>
<script src="{{ asset('recur/js/jquery.prettyphoto.js')}}"></script>
<script src="{{ asset('recur/js/jquery.nicescroll.js')}}"></script>
<script src="{{ asset('recur/js/contact.js')}}"></script>
<script src="{{ asset('recur/js/main.js')}}"></script>

<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="{{ asset('recur/js/gmaps.js')}}"></script>

</body>
</html>
