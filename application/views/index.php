<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RecipeX - HTML 5 Template</title>
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
                <img src="<?php echo base_url() ?>/public/images/logo.png" alt="">
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


<section class="rev_slider_wrapper thm-banner-wrapper">
    <div id="slider1" class="rev_slider" data-version="5.0">
        <ul>

            <li data-transition="parallaxvertical" data-ease="SlowMo.ease">
                <img src="<?php echo base_url() ?>/public/images/slider/1.jpg" alt="">

                <div class="tp-caption sfb tp-resizeme"
                     data-x="right" data-hoffset="0"
                     data-y="center" data-voffset="0"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-transform_in="o:0"
                     data-transform_out="o:0"
                     data-start="500">
                    <img src="<?php echo base_url() ?>/public/images/slider/image-1.png" alt="Awesome Image"/>
                </div>
                <div class="tp-caption sfb tp-resizeme caption-h1"
                     data-x="left" data-hoffset="0"
                     data-y="top" data-voffset="128"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-transform_in="o:0"
                     data-transform_out="o:0"
                     data-start="1000">
                    Hot <span>recipe</span>
                </div>
                <div class="tp-caption sfl tp-resizeme caption-p"
                     data-x="left" data-hoffset="0"
                     data-y="top" data-voffset="222"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-transform_in="o:0"
                     data-transform_out="o:0"
                     data-start="1500">
                    Neque porro quisquam est, qui dolorem ipsum quia <br> dolor sit amet, consectetur, adipisci velit,
                    sed quia non <br> numm eius modi tempora incidunt.
                </div>
                <div class="tp-caption sfb tp-resizeme caption-recipe-cat"
                     data-x="left" data-hoffset="0"
                     data-y="top" data-voffset="340"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-transform_in="o:0"
                     data-transform_out="o:0"
                     data-start="2000">
                    <ul>
                        <li><a href="#"><i class="icon icon-Pizza"></i> For Family</a></li>
                        <li><a href="#"><i class="icon icon-Timer"></i> 1h 30 min</a></li>
                        <li><a href="#"><i class="icon icon-User"></i> by Michale</a></li>
                    </ul>
                </div>
                <div class="tp-caption sfb tp-resizeme"
                     data-x="left" data-hoffset="0"
                     data-y="top" data-voffset="420"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-transform_in="o:0"
                     data-transform_out="o:0"
                     data-start="2500">
                    <a href="#" class="thm-btn"><i class="icon icon-Goto"></i> <span>view receipe</span></a>
                </div>
            </li>
            <li data-transition="parallaxvertical" data-ease="SlowMo.ease">
                <img src="<?php echo base_url() ?>/public/images/slider/2.jpg" alt="">

                <div class="tp-caption sfb tp-resizeme caption-h1 style-two"
                     data-x="left" data-hoffset="0"
                     data-y="top" data-voffset="150"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-transform_in="o:0"
                     data-transform_out="o:0"
                     data-start="1000">
                    Hot recipe
                </div>
                <div class="tp-caption sfl tp-resizeme caption-p"
                     data-x="left" data-hoffset="0"
                     data-y="top" data-voffset="222"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-transform_in="o:0"
                     data-transform_out="o:0"
                     data-start="1500">
                    Neque porro quisquam est, qui dolorem ipsum quia <br> dolor sit amet, consectetur, adipisci velit
                </div>
                <div class="tp-caption sfb tp-resizeme caption-recipe-cat"
                     data-x="left" data-hoffset="0"
                     data-y="top" data-voffset="305"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-transform_in="o:0"
                     data-transform_out="o:0"
                     data-start="2000">
                    <ul>
                        <li><a href="#"><i class="icon icon-Pizza"></i> For Family</a></li>
                        <li><a href="#"><i class="icon icon-Timer"></i> 1h 30 min</a></li>
                        <li><a href="#"><i class="icon icon-User"></i> by Michale</a></li>
                    </ul>
                </div>
                <div class="tp-caption sfb tp-resizeme"
                     data-x="left" data-hoffset="0"
                     data-y="top" data-voffset="400"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-transform_in="o:0"
                     data-transform_out="o:0"
                     data-start="2500">
                    <a href="#" class="thm-btn"><i class="icon icon-Goto"></i> <span>view receipe</span></a>
                </div>
            </li>
            <li data-transition="parallaxvertical" data-ease="SlowMo.ease">
                <img src="<?php echo base_url() ?>/public/images/slider/3.jpg" alt="">

                <div class="tp-caption sfb tp-resizeme caption-h1"
                     data-x="right" data-hoffset="133"
                     data-y="top" data-voffset="128"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-transform_in="o:0"
                     data-transform_out="o:0"
                     data-start="1000">
                    Hot <span>recipe</span>
                </div>
                <div class="tp-caption sfl tp-resizeme caption-p"
                     data-x="right" data-hoffset="0"
                     data-y="top" data-voffset="222"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-transform_in="o:0"
                     data-transform_out="o:0"
                     data-start="1500">
                    Neque porro quisquam est, qui dolorem ipsum quia <br> dolor sit amet, consectetur, adipisci velit,
                    sed quia non <br> numm eius modi tempora incidunt.
                </div>
                <div class="tp-caption sfb tp-resizeme caption-recipe-cat"
                     data-x="right" data-hoffset="96"
                     data-y="top" data-voffset="340"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-transform_in="o:0"
                     data-transform_out="o:0"
                     data-start="2000">
                    <ul>
                        <li><a href="#"><i class="icon icon-Pizza"></i> For Family</a></li>
                        <li><a href="#"><i class="icon icon-Timer"></i> 1h 30 min</a></li>
                        <li><a href="#"><i class="icon icon-User"></i> by Michale</a></li>
                    </ul>
                </div>
                <div class="tp-caption sfb tp-resizeme"
                     data-x="right" data-hoffset="297"
                     data-y="top" data-voffset="420"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-transform_in="o:0"
                     data-transform_out="o:0"
                     data-start="2500">
                    <a href="#" class="thm-btn inverse"><span>view receipe</span></a>
                </div>
            </li>
        </ul>
    </div>
</section>


<section class="search-recipe">
    <div class="thm-container">
        <form action="#" class="contact-form">
            <div class="title">
                <h2>browse <span>Receipes</span></h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="text" placeholder="Search By Keywords">
                </div>
                <div class="col-md-4">
                    <select class="select-menu">
                        <option value="">Select Category</option>
                        <option value="">Select Category</option>
                        <option value="">Select Category</option>
                        <option value="">Select Category</option>
                        <option value="">Select Category</option>
                        <option value="">Select Category</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select class="select-menu">
                        <option value="">Select Level</option>
                        <option value="">Select Level</option>
                        <option value="">Select Level</option>
                        <option value="">Select Level</option>
                        <option value="">Select Level</option>
                        <option value="">Select Level</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select class="select-menu">
                        <option value="">Select Time Need</option>
                        <option value="">Select Time Need</option>
                        <option value="">Select Time Need</option>
                        <option value="">Select Time Need</option>
                        <option value="">Select Time Need</option>
                        <option value="">Select Time Need</option>
                    </select>
                </div>

                <div class="advance-box clearfix">
                    <div class="col-md-12">
                        <label>Select Type</label>
                        <ul class="special-checkbox">
                            <li>
		                    	<span class="input-checker">
									<input type="checkbox" value="">
		                    	</span>Egg Curry
                            </li>
                            <li>
		                    	<span class="input-checker">
									<input type="checkbox" value="">
		                    	</span>Vegetalbe Mix
                            </li>
                            <li>
		                    	<span class="input-checker">
									<input type="checkbox" value="">
		                    	</span>Chicken Masala
                            </li>
                            <li>
		                    	<span class="input-checker">
									<input type="checkbox" value="">
		                    	</span>Soup
                            </li>
                            <li>
		                    	<span class="input-checker">
									<input type="checkbox" value="">
		                    	</span>Noddles
                            </li>
                            <li>
		                    	<span class="input-checker">
									<input type="checkbox" value="">
		                    	</span>Mutton Curry
                            </li>
                            <li>
		                    	<span class="input-checker">
									<input type="checkbox" value="">
		                    	</span>Ice Cream
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6">
                    <a href="#" class="advance-expander">Advanced Search <I class="fa fa-angle-down"></I></a>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="thm-btn inverse pull-right">Search for recipes</button>
                </div>
            </div>
        </form>
    </div>
</section>


<section class="recent-recipes sec-padding">
    <div class="thm-container">
        <div class="sec-title">
            <h2>Recently Added <span>Receipes</span></h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="single-recent-recipes img-cap-effect">
                    <div class="img-box">
                        <img src="<?php echo base_url() ?>/public/images/recent-recipes/1.jpg" alt="">

                        <div class="img-caption">
                            <div class="box-holder">
                                <ul>
                                    <li><a href="#"><i class="icon icon-Goto"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
                    <div class="content-box">
                        <h3>Pasta With Fried Lemons</h3>

                        <p>eque porro quisquam est, qui dolorem ipsu quia dolor sit amet, consectetur ...</p>

                        <div class="inner-meta clearfix">
                            <div class="pull-left time">
                                <i class="icon icon-Timer"></i> 1 Hour Ago
                            </div>
                            <div class="pull-right read-more">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-recent-recipes img-cap-effect">
                    <div class="img-box">
                        <img src="<?php echo base_url() ?>/public/images/recent-recipes/2.jpg" alt="">

                        <div class="img-caption">
                            <div class="box-holder">
                                <ul>
                                    <li><a href="#"><i class="icon icon-Goto"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
                    <div class="content-box">
                        <h3>Pasta With Fried Lemons</h3>

                        <p>eque porro quisquam est, qui dolorem ipsu quia dolor sit amet, consectetur ...</p>

                        <div class="inner-meta clearfix">
                            <div class="pull-left time">
                                <i class="icon icon-Timer"></i> 1 Hour Ago
                            </div>
                            <div class="pull-right read-more">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-recent-recipes img-cap-effect">
                    <div class="img-box">
                        <img src="<?php echo base_url() ?>/public/images/recent-recipes/3.jpg" alt="">

                        <div class="img-caption">
                            <div class="box-holder">
                                <ul>
                                    <li><a href="#"><i class="icon icon-Goto"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
                    <div class="content-box">
                        <h3>Pasta With Fried Lemons</h3>

                        <p>eque porro quisquam est, qui dolorem ipsu quia dolor sit amet, consectetur ...</p>

                        <div class="inner-meta clearfix">
                            <div class="pull-left time">
                                <i class="icon icon-Timer"></i> 1 Hour Ago
                            </div>
                            <div class="pull-right read-more">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-recent-recipes img-cap-effect">
                    <div class="img-box">
                        <img src="<?php echo base_url() ?>/public/images/recent-recipes/4.jpg" alt="">

                        <div class="img-caption">
                            <div class="box-holder">
                                <ul>
                                    <li><a href="#"><i class="icon icon-Goto"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
                    <div class="content-box">
                        <h3>Pasta With Fried Lemons</h3>

                        <p>eque porro quisquam est, qui dolorem ipsu quia dolor sit amet, consectetur ...</p>

                        <div class="inner-meta clearfix">
                            <div class="pull-left time">
                                <i class="icon icon-Timer"></i> 1 Hour Ago
                            </div>
                            <div class="pull-right read-more">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-recent-recipes img-cap-effect">
                    <div class="img-box">
                        <img src="<?php echo base_url() ?>/public/images/recent-recipes/5.jpg" alt="">

                        <div class="img-caption">
                            <div class="box-holder">
                                <ul>
                                    <li><a href="#"><i class="icon icon-Goto"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
                    <div class="content-box">
                        <h3>Pasta With Fried Lemons</h3>

                        <p>eque porro quisquam est, qui dolorem ipsu quia dolor sit amet, consectetur ...</p>

                        <div class="inner-meta clearfix">
                            <div class="pull-left time">
                                <i class="icon icon-Timer"></i> 1 Hour Ago
                            </div>
                            <div class="pull-right read-more">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-recent-recipes img-cap-effect">
                    <div class="img-box">
                        <img src="<?php echo base_url() ?>/public/images/recent-recipes/6.jpg" alt="">

                        <div class="img-caption">
                            <div class="box-holder">
                                <ul>
                                    <li><a href="#"><i class="icon icon-Goto"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
                    <div class="content-box">
                        <h3>Pasta With Fried Lemons</h3>

                        <p>eque porro quisquam est, qui dolorem ipsu quia dolor sit amet, consectetur ...</p>

                        <div class="inner-meta clearfix">
                            <div class="pull-left time">
                                <i class="icon icon-Timer"></i> 1 Hour Ago
                            </div>
                            <div class="pull-right read-more">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="top-rated-recipe sec-padding has-overlay">
    <div class="thm-container">
        <div class="sec-title">
            <h2>top <span>Receipes</span></h2>
        </div>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="single-recent-recipes img-cap-effect">
                    <div class="img-box">
                        <img src="<?php echo base_url() ?>/public/images/top-recipes/1.jpg" alt="">

                        <div class="img-caption">
                            <div class="box-holder">
                                <ul>
                                    <li><a href="#"><i class="icon icon-Goto"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="content-box">
                        <div class="inner-box">
                            <div class="top-meta clearfix">
                                <div class="author">
                                    <span>By :</span> Michale John
                                </div>
                                <div class="starts">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h3>Pasta With Fried Lemons</h3>

                            <p>eque porro quisquam est, qui dolorem ipsu quia dolor sit amet, consectetur ...</p>

                            <div class="inner-meta clearfix">
                                <div class="pull-left time">
                                    <i class="icon icon-Timer"></i> 1 Hour Ago
                                </div>
                                <div class="pull-right read-more">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-recent-recipes img-cap-effect">
                    <div class="img-box">
                        <img src="<?php echo base_url() ?>/public/images/top-recipes/2.jpg" alt="">

                        <div class="img-caption">
                            <div class="box-holder">
                                <ul>
                                    <li><a href="#"><i class="icon icon-Goto"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="content-box">
                        <div class="inner-box">
                            <div class="top-meta clearfix">
                                <div class="author">
                                    <span>By :</span> Michale John
                                </div>
                                <div class="starts">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h3>Pasta With Fried Lemons</h3>

                            <p>eque porro quisquam est, qui dolorem ipsu quia dolor sit amet, consectetur ...</p>

                            <div class="inner-meta clearfix">
                                <div class="pull-left time">
                                    <i class="icon icon-Timer"></i> 1 Hour Ago
                                </div>
                                <div class="pull-right read-more">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-recent-recipes img-cap-effect">
                    <div class="img-box">
                        <img src="<?php echo base_url() ?>/public/images/top-recipes/1.jpg" alt="">

                        <div class="img-caption">
                            <div class="box-holder">
                                <ul>
                                    <li><a href="#"><i class="icon icon-Goto"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="content-box">
                        <div class="inner-box">
                            <div class="top-meta clearfix">
                                <div class="author">
                                    <span>By :</span> Michale John
                                </div>
                                <div class="starts">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h3>Pasta With Fried Lemons</h3>

                            <p>eque porro quisquam est, qui dolorem ipsu quia dolor sit amet, consectetur ...</p>

                            <div class="inner-meta clearfix">
                                <div class="pull-left time">
                                    <i class="icon icon-Timer"></i> 1 Hour Ago
                                </div>
                                <div class="pull-right read-more">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-recent-recipes img-cap-effect">
                    <div class="img-box">
                        <img src="<?php echo base_url() ?>/public/images/top-recipes/2.jpg" alt="">

                        <div class="img-caption">
                            <div class="box-holder">
                                <ul>
                                    <li><a href="#"><i class="icon icon-Goto"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="content-box">
                        <div class="inner-box">
                            <div class="top-meta clearfix">
                                <div class="author">
                                    <span>By :</span> Michale John
                                </div>
                                <div class="starts">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h3>Pasta With Fried Lemons</h3>

                            <p>eque porro quisquam est, qui dolorem ipsu quia dolor sit amet, consectetur ...</p>

                            <div class="inner-meta clearfix">
                                <div class="pull-left time">
                                    <i class="icon icon-Timer"></i> 1 Hour Ago
                                </div>
                                <div class="pull-right read-more">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-recent-recipes img-cap-effect">
                    <div class="img-box">
                        <img src="<?php echo base_url() ?>/public/images/top-recipes/1.jpg" alt="">

                        <div class="img-caption">
                            <div class="box-holder">
                                <ul>
                                    <li><a href="#"><i class="icon icon-Goto"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="content-box">
                        <div class="inner-box">
                            <div class="top-meta clearfix">
                                <div class="author">
                                    <span>By :</span> Michale John
                                </div>
                                <div class="starts">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h3>Pasta With Fried Lemons</h3>

                            <p>eque porro quisquam est, qui dolorem ipsu quia dolor sit amet, consectetur ...</p>

                            <div class="inner-meta clearfix">
                                <div class="pull-left time">
                                    <i class="icon icon-Timer"></i> 1 Hour Ago
                                </div>
                                <div class="pull-right read-more">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-recent-recipes img-cap-effect">
                    <div class="img-box">
                        <img src="<?php echo base_url() ?>/public/images/top-recipes/2.jpg" alt="">

                        <div class="img-caption">
                            <div class="box-holder">
                                <ul>
                                    <li><a href="#"><i class="icon icon-Goto"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="content-box">
                        <div class="inner-box">
                            <div class="top-meta clearfix">
                                <div class="author">
                                    <span>By :</span> Michale John
                                </div>
                                <div class="starts">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h3>Pasta With Fried Lemons</h3>

                            <p>eque porro quisquam est, qui dolorem ipsu quia dolor sit amet, consectetur ...</p>

                            <div class="inner-meta clearfix">
                                <div class="pull-left time">
                                    <i class="icon icon-Timer"></i> 1 Hour Ago
                                </div>
                                <div class="pull-right read-more">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-recent-recipes img-cap-effect">
                    <div class="img-box">
                        <img src="<?php echo base_url() ?>/public/images/top-recipes/1.jpg" alt="">

                        <div class="img-caption">
                            <div class="box-holder">
                                <ul>
                                    <li><a href="#"><i class="icon icon-Goto"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="content-box">
                        <div class="inner-box">
                            <div class="top-meta clearfix">
                                <div class="author">
                                    <span>By :</span> Michale John
                                </div>
                                <div class="starts">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h3>Pasta With Fried Lemons</h3>

                            <p>eque porro quisquam est, qui dolorem ipsu quia dolor sit amet, consectetur ...</p>

                            <div class="inner-meta clearfix">
                                <div class="pull-left time">
                                    <i class="icon icon-Timer"></i> 1 Hour Ago
                                </div>
                                <div class="pull-right read-more">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-recent-recipes img-cap-effect">
                    <div class="img-box">
                        <img src="<?php echo base_url() ?>/public/images/top-recipes/2.jpg" alt="">

                        <div class="img-caption">
                            <div class="box-holder">
                                <ul>
                                    <li><a href="#"><i class="icon icon-Goto"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="content-box">
                        <div class="inner-box">
                            <div class="top-meta clearfix">
                                <div class="author">
                                    <span>By :</span> Michale John
                                </div>
                                <div class="starts">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h3>Pasta With Fried Lemons</h3>

                            <p>eque porro quisquam est, qui dolorem ipsu quia dolor sit amet, consectetur ...</p>

                            <div class="inner-meta clearfix">
                                <div class="pull-left time">
                                    <i class="icon icon-Timer"></i> 1 Hour Ago
                                </div>
                                <div class="pull-right read-more">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="recent-recipes sec-padding">
    <div class="thm-container">
        <div class="sec-title">
            <h2>Most rated <span>Receipes</span></h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="single-recent-recipes img-cap-effect">
                    <div class="img-box">
                        <img src="<?php echo base_url() ?>/public/images/recent-recipes/4.jpg" alt="">

                        <div class="img-caption">
                            <div class="box-holder">
                                <ul>
                                    <li><a href="#"><i class="icon icon-Goto"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
                    <div class="content-box">
                        <h3>Pasta With Fried Lemons</h3>

                        <p>eque porro quisquam est, qui dolorem ipsu quia dolor sit amet, consectetur ...</p>

                        <div class="inner-meta clearfix">
                            <div class="pull-left time">
                                <i class="icon icon-Timer"></i> 1 Hour Ago
                            </div>
                            <div class="pull-right read-more">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-recent-recipes img-cap-effect">
                    <div class="img-box">
                        <img src="images/recent-recipes/5.jpg" alt="">

                        <div class="img-caption">
                            <div class="box-holder">
                                <ul>
                                    <li><a href="#"><i class="icon icon-Goto"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
                    <div class="content-box">
                        <h3>Pasta With Fried Lemons</h3>

                        <p>eque porro quisquam est, qui dolorem ipsu quia dolor sit amet, consectetur ...</p>

                        <div class="inner-meta clearfix">
                            <div class="pull-left time">
                                <i class="icon icon-Timer"></i> 1 Hour Ago
                            </div>
                            <div class="pull-right read-more">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-recent-recipes img-cap-effect">
                    <div class="img-box">
                        <img src="<?php echo base_url() ?>/public/images/recent-recipes/6.jpg" alt="">

                        <div class="img-caption">
                            <div class="box-holder">
                                <ul>
                                    <li><a href="#"><i class="icon icon-Goto"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
                    <div class="content-box">
                        <h3>Pasta With Fried Lemons</h3>

                        <p>eque porro quisquam est, qui dolorem ipsu quia dolor sit amet, consectetur ...</p>

                        <div class="inner-meta clearfix">
                            <div class="pull-left time">
                                <i class="icon icon-Timer"></i> 1 Hour Ago
                            </div>
                            <div class="pull-right read-more">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="testimonails-recipex">
    <div class="thm-container">
        <div class="row">
            <ul class="slides">
                <li class="slide">
                    <div class="col-lg-6 full-image">
                        <img src="<?php echo base_url() ?>/public/images/testimonials/1.jpg" alt="Awesome Image"/>

                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="content-box">
                            <div class="title">
                                <h3>Jhon Doe</h3>

                                <p>Ceo of founder of receipe</p>
                            </div>
                            <ul class="list-inline social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam
                                aliquam quaerat voluptatem. </p>
                        </div>
                    </div>
                </li>
                <li class="slide">
                    <div class="col-lg-6 full-image">
                        <img src="<?php echo base_url() ?>/public/images/testimonials/2.jpg" alt="Awesome Image"/>

                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="content-box">
                            <div class="title">
                                <h3>Michale John</h3>

                                <p>Ceo of founder of receipe</p>
                            </div>
                            <ul class="list-inline social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam
                                aliquam quaerat voluptatem. </p>
                        </div>
                    </div>
                </li>
                <li class="slide">
                    <div class="col-lg-6 full-image">
                        <img src="<?php echo base_url() ?>/public/images/testimonials/3.jpg" alt="Awesome Image"/>

                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="content-box">
                            <div class="title">
                                <h3>Sonakhsi Shinha</h3>

                                <p>Ceo of founder of receipe</p>
                            </div>
                            <ul class="list-inline social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam
                                aliquam quaerat voluptatem. </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <ul class="custom-pager">
            <li data-slide-index="0"><span><img src="<?php echo base_url() ?>/public/images/testimonials/1.png"
                                                alt="Awesome Image"/></span></li>
            <li data-slide-index="1"><span><img src="<?php echo base_url() ?>/public/images/testimonials/2.png"
                                                alt="Awesome Image"/></span></li>
            <li data-slide-index="2"><span><img src="<?php echo base_url() ?>/public/images/testimonials/3.png"
                                                alt="Awesome Image"/></span></li>
        </ul>
        <ul class="custom-nav list-inline">
            <li class="prev"><span><i class="fa fa-arrow-left"></i></span></li>
            <li class="next"><span><i class="fa fa-arrow-right"></i></span></li>
        </ul>
    </div>
</section>


<section class="blog-recipe sec-padding">
    <div class="thm-container">
        <div class="sec-title">
            <h2>Our <span>Blogs</span></h2>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="single-blog-post img-cap-effect">
                    <div class="img-box">
                        <img src="<?php echo base_url() ?>/public/images/blog/1.jpg" alt="Awesome Image"/>

                        <div class="img-caption">
                            <div class="box-holder">
                                <ul>
                                    <li><a href="#"><i class="icon icon-Goto"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="content-box">
                        <h3>Heading of Blog</h3>

                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consecte.</p>
                        <ul class="meta list-inline">
                            <li><a href="#">Jan 24 2016</a></li>
                            <li><a href="#">6 Comments</a></li>
                            <li><a href="#">Ice Cream</a></li>
                        </ul>
                    </div>
                </div>
                <div class="single-blog-post img-cap-effect">
                    <div class="img-box">
                        <img src="<?php echo base_url() ?>/public/images/blog/2.jpg" alt="Awesome Image"/>

                        <div class="img-caption">
                            <div class="box-holder">
                                <ul>
                                    <li><a href="#"><i class="icon icon-Goto"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="content-box">
                        <h3>Heading of Blog</h3>

                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consecte.</p>
                        <ul class="meta list-inline">
                            <li><a href="#">Jan 24 2016</a></li>
                            <li><a href="#">6 Comments</a></li>
                            <li><a href="#">Ice Cream</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 hidden-md col-sm-12">
                <div class="promotion">
                    <h3>join our <br><span>community</span></h3>

                    <p>Connect and interact with other <br>cooks who have the same interests <br>as you. It’s fun and
                        super easy to get <br>started!</p>
                    <a href="#" class="thm-btn">let’s Join us</a>
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
                    <img src="<?php echo base_url() ?>/public/images/footer-newsletter.png" alt="Awesome Image"/>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 footer-widget poplular-recipe">
                <div class="title">
                    <h3><span>Most popular recipes</span></h3>
                </div>
                <ul>
                    <li>
                        <div class="img-box">
                            <img src="<?php echo base_url() ?>/public/images/popular-post1.jpg" alt="">
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
                            <img src="<?php echo base_url() ?>/public/images/popular-post2.jpg" alt="">
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
                            <img src="<?php echo base_url() ?>/public/images/popular-post3.jpg" alt="">
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