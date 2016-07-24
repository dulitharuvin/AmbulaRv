<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->view('common/script_header'); ?>
</head>
<body>

<?php $this->view('common/top_bar'); ?>
<?php $this->view('common/menu_bar'); ?>

<section class="inner-banner">
	<div class="thm-container">
		<div class="box clearfix">
			<h2 class="pull-left">Single Recipe</h2>
			<ul class="breadcumb pull-right">
				<li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
				<li><span>Single Recipe</span></li>
			</ul>
		</div>
	</div>
</section>


<section class="single-recipe-page-content sec-padding">

        <?php $jsonArray = $this->recipe->getRecipeDescription() ?>
	<div class="thm-container">
		<div class="row">
			<div class="col-md-7">
				<div class="single-recipe-carousel-content-box owl-carousel owl-theme">
					<div class="item">
						<img src="images/single-recipe-page/1.jpg" alt="Awesome Image"/>
					</div>
					<div class="item">
						<img src="images/single-recipe-page/2.jpg" alt="Awesome Image"/>
					</div>
					<div class="item">
						<img src="images/single-recipe-page/3.jpg" alt="Awesome Image"/>
					</div>
					<div class="item">
						<img src="images/single-recipe-page/4.jpg" alt="Awesome Image"/>
					</div>
					<div class="item">
						<img src="images/single-recipe-page/5.jpg" alt="Awesome Image"/>
					</div>
					<div class="item">
						<img src="images/single-recipe-page/6.jpg" alt="Awesome Image"/>
					</div>
				</div>
				<div class="single-recipe-carousel-thumbnail-box owl-carousel owl-theme">
					<div class="item">
						<img src="images/single-recipe-page/1-thumb.jpg" alt="">
					</div>
					<div class="item">
						<img src="images/single-recipe-page/2-thumb.jpg" alt="">
					</div>
					<div class="item">
						<img src="images/single-recipe-page/3-thumb.jpg" alt="">
					</div>
					<div class="item">
						<img src="images/single-recipe-page/4-thumb.jpg" alt="">
					</div>
					<div class="item">
						<img src="images/single-recipe-page/5-thumb.jpg" alt="">
					</div>
					<div class="item">
						<img src="images/single-recipe-page/6-thumb.jpg" alt="">
					</div>
				</div>

				<div class="sec-title">
					<h2>direction</h2>
				</div>

				<div class="direction-box">
					<ul>
						<li>
							<div class="count-box">
								<span>1</span>
							</div>
							<div class="text-box">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exe rcitation ullamco laboris nisi ut aliquip exea commodo consequat.</p>
							</div>
						</li>
						<li>
							<div class="count-box">
								<span>2</span>
							</div>
							<div class="text-box">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exe rcitation ullamco laboris nisi ut aliquip exea commodo consequat.</p>
							</div>
						</li>
						<li>
							<div class="count-box">
								<span>3</span>
							</div>
							<div class="text-box">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exe rcitation ullamco laboris nisi ut aliquip exea commodo consequat.</p>
							</div>
						</li>
						<li>
							<div class="count-box">
								<span>4</span>
							</div>
							<div class="text-box">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exe rcitation ullamco laboris nisi ut aliquip exea commodo consequat.</p>
							</div>
						</li>
						<li>
							<div class="count-box">
								<span>5</span>
							</div>
							<div class="text-box">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exe rcitation ullamco laboris nisi ut aliquip exea commodo consequat.</p>
							</div>
						</li>
						<li>
							<div class="count-box">
								<span>6</span>
							</div>
							<div class="text-box">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exe rcitation ullamco laboris nisi ut aliquip exea commodo consequat.</p>
							</div>
						</li>
					</ul>
				</div>

			</div>
			<div class="col-md-5">
				<div class="content-box-wrapper">
					<div class="title-box">
						<div class="top-meta clearfix">
							<div class="pull-left author">
								<span>By :</span> Michale John
							</div>
							<div class="pull-right starts">
								<ul class="list-inline">
									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="title">
							<h3>Pasta With Fried Lemons</h3>
						</div>
						<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
					</div>
					<div class="ingredients contact-form">
						<div class="sec-title">
							<h2>ingredients</h2>
						</div>
						<ul class="special-checkbox">
							<li>
		                    	<span class="input-checker">
									<input type="checkbox" name="apt_vehicle_services_needed" value="">
		                    	</span>1/2 cup chopped red onions</li>
		                    <li>
		                    	<span class="input-checker">
									<input type="checkbox" name="apt_vehicle_services_needed" value="">
		                    	</span>2 ounce lemon drops chupas chups bear</li>
		                    <li>
		                    	<span class="input-checker">
									<input type="checkbox" name="apt_vehicle_services_needed" value="">
		                    	</span>3 pound seasme snaps powder gingerbread</li>
		                    <li>
		                    	<span class="input-checker">
									<input type="checkbox" name="apt_vehicle_services_needed" value="">
		                    	</span>1/4 cup jujubes jelly chupa</li>
		                    <li>
		                    	<span class="input-checker">
									<input type="checkbox" name="apt_vehicle_services_needed" value="">
		                    	</span>1/2 cup sour cream (optional)</li>
		                    <li>
		                    	<span class="input-checker">
									<input type="checkbox" name="apt_vehicle_services_needed" value="">
		                    	</span>1 ounce suger plum pastry fruitcake</li>
		                    <li>
		                    	<span class="input-checker">
									<input type="checkbox" name="apt_vehicle_services_needed" value="">
		                    	</span>1/4 cup jujubes jelly chupa</li>
						</ul>
					</div>
					<div class="sec-title">
						<h2>Descriptions</h2>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<br>
					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					<div class="sec-title">
						<h2>nutrition</h2>
					</div>
					<div class="nutrition-box">
						<ul>
							<li>
								<span class="name">Protein</span>
								<span class="weight">3.2 gr</span>
								<span class="percent">5%</span>
								<span class="progress"><span class="inner" style="width: 50%;"></span></span>
							</li>

							<li>
								<span class="name">Fat</span>
								<span class="weight">6.5 gr</span>
								<span class="percent">6%</span>
								<span class="progress"><span class="inner" style="width: 60%;"></span></span>
							</li>

							<li>
								<span class="name">Carbohydrates</span>
								<span class="weight">3.2 gr</span>
								<span class="percent">9%</span>
								<span class="progress"><span class="inner" style="width: 90%;"></span></span>
							</li>

							<li>
								<span class="name">Calories</span>
								<span class="weight">4.8 gr</span>
								<span class="percent">2%</span>
								<span class="progress"><span class="inner" style="width: 20%;"></span></span>
							</li>

							<li>
								<span class="name">Cholesterol</span>
								<span class="weight">102 kcal</span>
								<span class="percent">8%</span>
								<span class="progress"><span class="inner" style="width: 80%;"></span></span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class=" blog-page single-post-page  browse-recipe single-recipe-page sec-padding">
	<div class="thm-container">
		<div class="row">
			<div class="col-md-4 pull-right single-sidebar-wrapper">
				<div class="single-sidebar-widget">
					<div class="sec-title">
						<h2><span>Search</span></h2>
					</div>
					<div class="search-box">
						<form action="#">
							<input type="text" placeholder="Enter Search Keywords">
							<button type="submit"><i class="icon icon-Search"></i></button>
						</form>
					</div>
				</div>
				<div class="single-sidebar-widget">
					<div class="sec-title">
						<h2><span>Top recipe of week</span></h2>
					</div>
					<div class="text-box">
						<img src="images/top-recipes-sidebar.jpg" alt="Awesome Image"/>
						<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem. </p>
						<a href="#">View Recipe <i class="fa fa-angle-double-right"></i></a>
					</div>
				</div>
				<div class="single-sidebar-widget">
					<div class="sec-title">
						<h2><span>recipe categories</span></h2>
					</div>
					<div class="categories">
						<ul>
							<li><a href="#">Beverages</a></li>
							<li><a href="#">Ice Cream</a></li>
							<li><a href="#">Appetizers</a></li>
							<li><a href="#">Pudding</a></li>
							<li><a href="#">Foods</a></li>
						</ul>
					</div>
				</div>
				<div class="single-sidebar-widget">
					<div class="sec-title">
						<h2><span>Popular Posts</span></h2>
					</div>
					<div class="popular-post">
						<ul>
							<li class="img-cap-effect">
								<div class="img-box">
									<img src="images/popular-post-s1.jpg" alt="Awesome Image"/>
									<div class="img-caption">
										<div class="box-holder">
											<ul>
												<li><a href="#"><i class="fa fa-link"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="content">
									<a href="#"><h4>Pesto Pizza With oasted Garlic & otat</h4></a>
									<span><i class="icon icon-Timer"></i> 02 Dec</span>
								</div>
							</li>
							<li class="img-cap-effect">
								<div class="img-box">
									<img src="images/popular-post-s2.jpg" alt="Awesome Image"/>
									<div class="img-caption">
										<div class="box-holder">
											<ul>
												<li><a href="#"><i class="fa fa-link"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="content">
									<a href="#"><h4>Pesto Pizza With oasted Garlic & otat</h4></a>
									<span><i class="icon icon-Timer"></i> 02 Dec</span>
								</div>
							</li>
							<li class="img-cap-effect">
								<div class="img-box">
									<img src="images/popular-post-s3.jpg" alt="Awesome Image"/>
									<div class="img-caption">
										<div class="box-holder">
											<ul>
												<li><a href="#"><i class="fa fa-link"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="content">
									<a href="#"><h4>Pesto Pizza With oasted Garlic & otat</h4></a>
									<span><i class="icon icon-Timer"></i> 02 Dec</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-8 pull-left">

				<div class="single-post-wrapper">

					<div class="comments-box">
						<div class="sec-title">
							<h2>comments (8)</h2>
						</div>
						<div class="single-comment">
							<div class="comment-img">
								<img src="images/blog-details/comment-1.png" alt="Awesome Image"/>
							</div>
							<div class="comment-text">
								<div class="inner">
									<h3>Michale John - <span>26 Aug</span></h3>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laud antium, totam rem ape riam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
									<a href="#" class="reply-button">Reply</a>
								</div>
							</div>
						</div>
						<div class="single-comment">
							<div class="comment-img">
								<img src="images/blog-details/comment-2.png" alt="Awesome Image"/>
							</div>
							<div class="comment-text">
								<div class="inner">
									<h3>Michale John - <span>26 Aug</span></h3>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laud antium, totam rem ape riam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
									<a href="#" class="reply-button">Reply</a>
								</div>
							</div>
						</div>
						<div class="single-comment">
							<div class="comment-img">
								<img src="images/blog-details/comment-3.png" alt="Awesome Image"/>
							</div>
							<div class="comment-text">
								<div class="inner">
									<h3>Michale John - <span>26 Aug</span></h3>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laud antium, totam rem ape riam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
									<a href="#" class="reply-button">Reply</a>
								</div>
							</div>
						</div>

						<a href="#" class="load-more-comment">load more comments +</a>

					</div>
					<div class="comment-form">
						<div class="sec-title">
							<h2>leave comments</h2>
						</div>
						<div class="form-box">
							<form action="#" class="row">
								<div class="col-md-6">
									<input type="text" placeholder="First Name">
								</div>
								<div class="col-md-6">
									<input type="text" placeholder="Email">
								</div>
								<div class="col-md-12">
									<textarea placeholder="Comments"></textarea>
									<button type="submit" class="thm-btn"><i class="icon icon-Goto"></i> Submit Now</button>
								</div>

							</form>
						</div>
					</div>

				</div>

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
					<img src="images/footer-newsletter.png" alt="Awesome Image"/>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 footer-widget poplular-recipe">
				<div class="title">
					<h3><span>Most popular recipes</span></h3>
				</div>
				<ul>
					<li>
						<div class="img-box">
							<img src="images/popular-post1.jpg" alt="">
						</div>
						<div class="content-box">
							<a href="single-recipe.php"><h3>Home Made Pizza</h3></a>
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
							<img src="images/popular-post2.jpg" alt="">
						</div>
						<div class="content-box">
							<a href="single-recipe.php"><h3>Chilled Mocha</h3></a>
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
							<img src="images/popular-post3.jpg" alt="">
						</div>
						<div class="content-box">
							<a href="single-recipe.php"><h3>Vegetarian Korma</h3></a>
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
<script src="plugins/jquery/jquery-1.11.3.min.js"></script>
<!-- bootstrap js -->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- jQuery ui js -->
<script src="plugins/jquery-ui-1.11.4/jquery-ui.js"></script>
<!-- owl carousel js -->
<script src="plugins/owl.carousel-2/owl.carousel.min.js"></script>
<!-- jQuery appear -->
<script src="plugins/jquery-appear/jquery.appear.js"></script>
<!-- jQuery countTo -->
<script src="plugins/jquery-countTo/jquery.countTo.js"></script>
<!-- jQuery validation -->
<script src="plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<!-- gmap.js helper -->
<script src="http://maps.google.com/maps/api/js"></script>
<!-- gmap.js -->
<script src="plugins/gmap.js"></script>
<!-- mixit up -->
<script src="plugins/jquery.mixitup.min.js"></script>
<!-- bxslider js -->
<script src="plugins/bx-slider/jquery.bxslider.min.js"></script>

<!-- revolution slider js -->
<script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>

<!-- fancy box -->
<script src="plugins/fancyapps-fancyBox/source/jquery.fancybox.pack.js"></script>
<!-- type script -->
<script src="plugins/typed.js-master/dist/typed.min.js"></script>





<script src="plugins/plupload-2.1.8/js/plupload.full.min.js"></script>
<script src="plugins/plupload-2.1.8/js/jquery.ui.plupload/jquery.ui.plupload.min.js"></script>


<!-- theme custom js  -->
<script src="js/main.js"></script>

</body>
</html>