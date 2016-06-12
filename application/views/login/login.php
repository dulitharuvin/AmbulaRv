<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ambula| Login</title>
	<!-- viewport meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- helpers -->
	<link rel="stylesheet" href="<?php echo base_url() ?>/public/plugins/bootstrap/css/bootstrap.min.css">
	<!-- fontawesome css -->
	<link rel="stylesheet" href="/AmbulaRV/public/plugins/font-awesome/css/font-awesome.min.css">
	<!-- strock gap icons -->
	<link rel="stylesheet" href="/AmbulaRV/public/plugins/Stroke-Gap-Icons-Webfont/style.css">
	<!-- revolution slider css -->
	<link rel="stylesheet" href="/AmbulaRV/public/plugins/revolution/css/settings.css">
	<link rel="stylesheet" href="/AmbulaRV/public/plugins/revolution/css/layers.css">
	<link rel="stylesheet" href="/AmbulaRV/public/plugins/revolution/css/navigation.css">
	<!-- flaticon css -->
	<link rel="stylesheet" href="/AmbulaRV/public/plugins/flaticon/flaticon.css">
	<!-- jQuery ui css -->
	<link href="<?php echo base_url() ?>/public/plugins/jquery-ui-1.11.4/jquery-ui.css" rel="stylesheet">
	<!-- owl carousel css -->
	<link rel="stylesheet" href="<?php echo base_url() ?>/public/plugins/owl.carousel-2/assets/owl.carousel.css">
	<link rel="stylesheet"
		  href="<?php echo base_url() ?>/public/plugins/owl.carousel-2/assets/owl.theme.default.min.css">
	<!-- animate css -->
	<link rel="stylesheet" href="<?php echo base_url() ?>/public/plugins/animate.min.css">
	<!-- fancybox -->
	<link rel="stylesheet" href="<?php echo base_url() ?>/public/plugins/fancyapps-fancyBox/source/jquery.fancybox.css">
	<!-- bxslider -->
	<link rel="stylesheet" href="<?php echo base_url() ?>/public/plugins/bx-slider/jquery.bxslider.css">

	<link href="<?php echo base_url() ?>/public/plugins/plupload-2.1.8/js/jquery.ui.plupload/css/jquery.ui.plupload.css"
		  rel="stylesheet">

	<!-- master stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url() ?>/public/css/style.css">
	<!-- responsive stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url() ?>/public/css/responsive.css">

	<!-- fav icon -->
	<link rel="icon" href="<?php echo base_url() ?>/public/images/fav_ico.png" type="image/gif" sizes="16x16">

</head>

<body>

<section id="top-bar">
	<div class="thm-container clearfix">
		<div class="social pull-left">
			<ul>
				<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
				<li><a href="#"><i class="fa fa-skype"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
			</ul>
		</div>
		<div class="top-contact-info pull-right">
			<ul>
				<li>
					<i class="fa fa-globe"></i>
					<span>Languages:</span>
					<form action="#" class="contact-form">
						<select class="select-menu">
							<option value="">English</option>
							<option value="">Hindi</option>
							<option value="">Bangla</option>
							<option value="">Arabic</option>
							<option value="">Russian</option>
							<option value="">German</option>
						</select>
					</form>
				</li>
				<li>
					<a href="login-register.html">
						<i class="fa fa-key"></i>
						<span> Login</span>
					</a>
				</li>
				<li>
					<a href="login-register.html">
						<i class="fa fa-lock"></i>
						<span>Register</span>
					</a>
				</li>
				<li>
					<button><i class="fa fa-search"></i></button>
				</li>

			</ul>
		</div>
	</div>
</section>

<header id="header" class="stricky">
	<div class="thm-container clearfix">
		<div class="logo pull-left">
			<a href="index.html">
				<img src="<?php echo base_url()?>/public/images/logo.png" alt="Ambula Logo">
			</a>
		</div>
		<div class="nav-holder pull-right">
			<div class="nav-header">
				<button><i class="fa fa-bars"></i></button>
			</div>
			<div class="nav-footer">
				<ul class="nav">
					<li><a href="index.html"><i class="flaticon-food"></i>Home</a></li>		
					<li class="has-submenu">
						<a href="recipe-v1.html"><i class="flaticon-food-2"></i>recipes</a>
						<ul class="submenu">
							<li><a href="recipe-v1.html">Recipes One</a></li>
							<li><a href="recipe-v2.html">Recipes Two</a></li>
							<li><a href="browse-recipes.html">Browse Recipes</a></li>
							<li><a href="single-recipe.html">Single Recipe</a></li>
						</ul>
					</li>
					<li><a href="submit-recipe.html"><i class="flaticon-food-4"></i>submit recipe</a></li>
					<li class="has-submenu">
						<a href="#"><i class="flaticon-food-3"></i>pages</a>
						<ul class="submenu">
							<li><a href="about.html">About Page</a></li>
							<li><a href="404.html">404 Page</a></li>
							<li><a href="faq.html">Faq Page</a></li>
							<li><a href="testimonials.html">Testimonials Page</a></li>
							<li><a href="editors.html">Editor Page</a></li>
							<li><a href="user-account.html">Account Page</a></li>
							<li><a href="login-register.html">Login/Register Page</a></li>
						</ul>
					</li>
					<li class="has-submenu">
						<a href="blog-left.html"><i class="flaticon-tool"></i>blog</a>
						<ul class="submenu">
							<li><a href="blog-left.html">Blog Left Bar</a></li>
							<li><a href="blog-right.html">Blog Right Bar</a></li>
							<li><a href="blog-details.html">Blog Details</a></li>
						</ul>
					</li>
					
					<li><a href="contact.html"><i class="flaticon-food-1"></i>contact us</a></li>
				</ul>
			</div>
		</div>
	</div>
</header>


<section class="inner-banner">
	<div class="thm-container">
		<div class="box clearfix">
			<h2 class="pull-left">Login</h2>
			<ul class="breadcumb pull-right">
				<li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
				<li><span>Login</span></li>
			</ul>
		</div>
	</div>
</section>


<section class="login-register sec-padding">
	<div class="thm-container">
		<div class="row">
			<div class="col-md-6">
				<div class="sec-title">
					<h2>Login</h2>
				</div>				
				<form action="include/sendemail.php" class="contact-form login">
					<p><input type="text" placeholder="Username" name="name"></p>
					<p><input type="password" placeholder="Password" name="password"></p>
					<ul class="special-checkbox">
						<li>
	                    	<span class="input-checker">
								<input type="checkbox" name="apt_vehicle_services_needed" value="">
	                    	</span>Remember me</li>
					</ul>
					<button type="submit" class="thm-btn"><span>Login now</span></button>
				</form>
			</div>
		</div>
	</div>
</section>



<footer id="footer" class="sec-padding">
	<div class="thm-container">
		<div class="row">
			<div class="col-md-3 col-sm-6 footer-widget email-newsletter">
				<div class="box clearfix">
					<div class="title">
						<h3><span>E-mail Newsletter</span></h3>					
					</div>
					<p>Subscribe to received inspiration, ideas, and news in your inbox.</p>
					<form action="#">
						<input type="text" placeholder="Enter Your Email Address">
						<button type="submit" class="thm-btn">subscribe</button>
					</form>
					<img src="<?php echo base_url()?>/public/images/footer-newsletter.png" alt="Awesome Image"/>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 footer-widget poplular-recipe">
				<div class="title">
					<h3><span>Most popular recipes</span></h3>
				</div>
				<ul>
					<li>
						<div class="img-box">
							<img src="<?php echo base_url()?>/public/images/popular-post1.jpg" alt="">
						</div>
						<div class="content-box">
							<a href="single-recipe.html"><h3>Home Made Pizza</h3></a>
							<ul class="list-inline">
								<li><i class="fa fa-star-o active"></i></li>
								<li><i class="fa fa-star-o active"></i></li>
								<li><i class="fa fa-star-o active"></i></li>
								<li><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
							</ul>
						</div>
					</li>
					<li>
						<div class="img-box">
							<img src="<?php echo base_url()?>/public/images/popular-post2.jpg" alt="">
						</div>
						<div class="content-box">
							<a href="single-recipe.html"><h3>Chilled Mocha</h3></a>
							<ul class="list-inline">
								<li><i class="fa fa-star-o active"></i></li>
								<li><i class="fa fa-star-o active"></i></li>
								<li><i class="fa fa-star-o active"></i></li>
								<li><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
							</ul>
						</div>
					</li>
					<li>
						<div class="img-box">
							<img src="<?php echo base_url()?>/public/images/popular-post3.jpg" alt="">
						</div>
						<div class="content-box">
							<a href="single-recipe.html"><h3>Vegetarian Korma</h3></a>
							<ul class="list-inline">
								<li><i class="fa fa-star-o active"></i></li>
								<li><i class="fa fa-star-o active"></i></li>
								<li><i class="fa fa-star-o active"></i></li>
								<li><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
			<div class="col-md-3 col-sm-6 footer-widget">
				<div class="title">
					<h3><span>popular categories</span></h3>
				</div>
				<ul class="link-list">
					<li><a href="browse-recipes.html">Beverages</a></li>
					<li><a href="browse-recipes.html">Ice Cream</a></li>
					<li><a href="browse-recipes.html">Appetizers</a></li>
					<li><a href="browse-recipes.html">Pudding</a></li>
					<li><a href="browse-recipes.html">Foods</a></li>
				</ul>
				<ul class="link-list">
					<li><a href="browse-recipes.html">Beverages</a></li>
					<li><a href="browse-recipes.html">Ice Cream</a></li>
					<li><a href="browse-recipes.html">Appetizers</a></li>
					<li><a href="browse-recipes.html">Pudding</a></li>
					<li><a href="browse-recipes.html">Foods</a></li>
				</ul>
			</div>
			<div class="col-md-3 col-sm-6 footer-widget">
				<div class="title">
					<h3><span>Get In Touch</span></h3>
				</div>
				<ul class="contact-infos">
					<li>
						<div class="icon-box">
							<i class="fa fa-map-marker"></i>
						</div>
						<div class="text-box">
							<p>Lorance Road 542B, Tailstoi Town <br>5248 MT, Wordwide Country</p>
						</div>
					</li>
					<li>
						<div class="icon-box">
							<i class="fa fa-phone"></i>
						</div>
						<div class="text-box">
							<p>+ 1 (1800) 459 123 7</p>
						</div>
					</li>
					<li>
						<div class="icon-box">
							<i class="fa fa-envelope-o"></i>
						</div>
						<div class="text-box">
							<p>support@recipex.com</p>
						</div>
					</li>
					<li>
						<div class="icon-box">
							<i class="fa fa-globe"></i>
						</div>
						<div class="text-box">
							<p>http://recipex.com</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>

<section class="bottom-bar text-center">
	<div class="thm-container clearfix">
		<p>Copyright &copy; Recipex 2016. All rights reserved. <span>Created by DesignArc</span></p>
	</div>
</section>


<!-- JS -->
<!-- jQuery js -->
<script src="<?php echo base_url() ?>/public/plugins/jquery/jquery-1.11.3.min.js"></script>
<!-- bootstrap js -->
<script src="<?php echo base_url() ?>/public/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- jQuery ui js -->
<script src="<?php echo base_url() ?>/public/plugins/jquery-ui-1.11.4/jquery-ui.js"></script>
<!-- owl carousel js -->
<script src="<?php echo base_url() ?>/public/plugins/owl.carousel-2/owl.carousel.min.js"></script>
<!-- jQuery appear -->
<script src="<?php echo base_url() ?>/public/plugins/jquery-appear/jquery.appear.js"></script>
<!-- jQuery countTo -->
<script src="<?php echo base_url() ?>/public/plugins/jquery-countTo/jquery.countTo.js"></script>
<!-- jQuery validation -->
<script src="<?php echo base_url() ?>/public/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<!-- gmap.js helper -->
<script src="http://maps.google.com/maps/api/js"></script>
<!-- gmap.js -->
<script src="<?php echo base_url() ?>/public/plugins/gmap.js"></script>
<!-- mixit up -->
<script src="<?php echo base_url() ?>/public/plugins/jquery.mixitup.min.js"></script>
<!-- bxslider js -->
<script src="<?php echo base_url() ?>/public/plugins/bx-slider/jquery.bxslider.min.js"></script>

<!-- revolution slider js -->
<script src="<?php echo base_url() ?>/public/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo base_url() ?>/public/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script
	src="<?php echo base_url() ?>/public/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script
	src="<?php echo base_url() ?>/public/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script
	src="<?php echo base_url() ?>/public/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script
	src="<?php echo base_url() ?>/public/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script
	src="<?php echo base_url() ?>/public/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script
	src="<?php echo base_url() ?>/public/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script
	src="<?php echo base_url() ?>/public/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script
	src="<?php echo base_url() ?>/public/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script
	src="<?php echo base_url() ?>/public/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>

<!-- fancy box -->
<script src="<?php echo base_url() ?>/public/plugins/fancyapps-fancyBox/source/jquery.fancybox.pack.js"></script>
<!-- type script -->
<script src="<?php echo base_url() ?>/public/plugins/typed.js-master/dist/typed.min.js"></script>


<script src="<?php echo base_url() ?>/public/plugins/plupload-2.1.8/js/plupload.full.min.js"></script>
<script
	src="<?php echo base_url() ?>/public/plugins/plupload-2.1.8/js/jquery.ui.plupload/jquery.ui.plupload.min.js"></script>


<!-- theme custom js  -->
<script src="<?php echo base_url() ?>/public/js/main.js"></script>

</body>
</html>