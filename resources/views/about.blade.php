<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Finance In a Banking Category Bootstrap Responsive Website Template | About :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Finance In Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="fonts/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="header">
			<div class="container">
				<div class="header-left">
					<div class="w3layouts-logo">
						<h1>
							<a href="index.html">Finance In</a>
						</h1>
					</div>
					<div class="agileinfo-phone">
						<p><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +1 234 567 8901</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="top-nav">
						<nav class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li><a class="active" href="inicio">Inicio</a></li>
									@if (Auth::check())
										<li><a href="servicios">Depósitos/Retiros</a></li>
										<li><a href="pagos">pagos</a></li>
										@if (Auth::user()->isAdmin())
											<li><a href="clientes">Catálogo de clientes</a></li>
										@endif
									@else
										<li><a href="signin">Crear cuenta</a></li>
										<li><a href="login">Inicio de sesión</a></li>
									@endif
									<li><a href="contact.html">Contact</a></li>
								</ul>
								<div class="clearfix"> </div>
							</div>
						</nav>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="wthree-banner-info">
			<div class="container">
				<h2>About Us</h2>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- about -->
	<!-- w3l-about -->
	<div class="w3l-about">
		<div class="container">
			<div class="agile-about-grids">
				<div class="col-md-6 w3labout-left">
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">
							<li role="presentation"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">01.</a></li>
							<li role="presentation"><a href="#tours" role="tab" id="tours-tab" data-toggle="tab" aria-controls="tours">02.</a></li>
							<li role="presentation" class="active"><a href="#tree" role="tab" id="tree-tab" data-toggle="tab" aria-controls="tree">03.</a></li>
						</ul>
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
								<div class="tab-info">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mattis pharetra turpis, a scelerisque enim venenatis luctus. Cras blandit dolor a facilisis tincidunt. Vivamus sed orci aliquam aliquet tellus ut ornare nunc. Sed interdum interdum accumsan. Aenean nec purus ac orci finibus facilisis. </p>
									<p>Donec ultricies faucibus ante in mattis. Praesent tristique, eros vitae consequat rutrum, mi leo vulputate quam.</p>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tours" aria-labelledby="tours-tab">
								<div class="tab-info">
									<p>Vivamus mattis pharetra turpis, a scelerisque enim venenatis luctus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras blandit dolor a facilisis tincidunt. Vivamus sed orci aliquam aliquet tellus ut ornare nunc. Sed interdum interdum accumsan. Aenean nec purus ac orci finibus facilisis. </p>
									<p>Praesent tristique, eros vitae consequat rutrum, mi leo vulputate quam. Donec ultricies faucibus ante in mattis. </p>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tree" aria-labelledby="tree-tab">
								<div class="tab-info">
									<p>Cras blandit dolor a facilisis tincidunt. Vivamus sed orci aliquam aliquet tellus ut ornare nunc. Sed interdum interdum accumsan. Aenean nec purus ac orci finibus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mattis pharetra turpis, a scelerisque enim venenatis luctus. </p>
									<p>Faucibus ante in mattis donec ultricies . Praesent tristique, eros vitae consequat rutrum, mi leo vulputate quam.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 w3labout-right">
					<h5>Who we are</h5>
					<h4>Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software</h4>
					<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //w3l-about -->
	<!-- choose -->
	<div class="jarallax w3-agileits-choose">
			<div class="container">
				<div class="agileits-heading testimonial-heading">
					<h3>Why choose us?</h3>
				</div>
				<div class="agileits-about-top-heading agileits-w3layouts-choose-heading">
					<h3></h3>
				</div>
				<div class="agile-choose-grids">
					<div class="col-sm-4 agile-choose-grid">
						<div class="choose-icon">
							<i class="fa fa-user" aria-hidden="true"></i>
						</div>
						<div class="choose-info">
							<h4>Suspendisse ornare vitae ex nec aliquam</h4>
							<p>Nunc et massa ut purus porta euismod quis eu erat. Nam ornare faucibus elit sed tempor. Quisque iaculis odio nibh, et auctor tellus rhoncus vel.</p>
						</div>
					</div>
					<div class="col-sm-4 agile-choose-grid">
						<div class="choose-icon">
							<i class="fa fa-cogs" aria-hidden="true"></i>
						</div>
						<div class="choose-info">
							<h4>Suspendisse ornare vitae ex nec aliquam</h4>
							<p>Nunc et massa ut purus porta euismod quis eu erat. Nam ornare faucibus elit sed tempor. Quisque iaculis odio nibh, et auctor tellus rhoncus vel..</p>
						</div>
					</div>
					<div class="col-sm-4 agile-choose-grid">
						<div class="choose-icon">
							<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
						</div>
						<div class="choose-info">
							<h4>Suspendisse ornare vitae ex nec aliquam</h4>
							<p>Nunc et massa ut purus porta euismod quis eu erat. Nam ornare faucibus elit sed tempor. Quisque iaculis odio nibh, et auctor tellus rhoncus vel.</p>
						</div>
					</div>
				</div>
			</div>
	</div>
	<!-- //choose -->

	<!-- team -->
	<div class="team">
			<div class="container">
				<div class="agileits-heading">
					<h3>Our Team</h3>
				</div>
				<div class="team-grids">
					<!-- Bottom to top-->
						<div class="col-sm-4 team-grid">
							<!-- normal -->
							<div class="ih-item circle effect10 bottom_to_top">
								<div class="img"><img src="images/14.jpg" alt="img"></div>
								<div class="info">
									<h3>David Watson</h3>
									<div class="team-icons">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- end normal -->
						</div>
						<div class="col-sm-4 team-grid">
							<!-- normal -->
							<div class="ih-item circle effect10 bottom_to_top">
								<div class="img"><img src="images/15.jpg" alt="img"></div>
								<div class="info">
									<h3>Shane Smith</h3>
									<div class="team-icons">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- end normal -->
						</div>
						<div class="col-sm-4 team-grid">
							<!-- normal -->
							<div class="ih-item circle effect10 bottom_to_top">
								<div class="img"><img src="images/16.jpg" alt="img"></div>
								<div class="info">
									<h3>Steve Warner</h3>
									<div class="team-icons">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- end normal -->
						</div>
						<div class="clearfix"> </div>
					<!-- end Bottom to top-->
				</div>
			</div>
	</div>
	<!-- //team -->
	<!-- //about -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<h3><a href="index.html">Finance In</a></h3>
			<p>© 2017 Finance In. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			<div class="social-icons">
				<ul>
					<li><a href="#" class="fa fa-facebook icon icon-border facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter icon icon-border twitter"> </a></li>
					<li><a href="#" class="fa fa-google-plus icon icon-border googleplus"> </a></li>
					<li><a href="#" class="fa fa-dribbble icon icon-border dribbble"> </a></li>
					<li><a href="#" class="fa fa-rss icon icon-border rss"> </a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>

	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
	<!-- //here ends scrolling icon -->
</body>
</html>
