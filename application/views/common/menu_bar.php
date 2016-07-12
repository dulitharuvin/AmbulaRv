<header id="header" class="stricky">
    <div class="thm-container clearfix">
        <div class="logo pull-left">
            <a href="<?= base_url()?>">
                <img src="<?= base_url('public/images/logo.png')?>" alt="">
            </a>
        </div>
        <div class="nav-holder pull-right">
            <div class="nav-header">
                <button><i class="fa fa-bars"></i></button>
            </div>
            <div class="nav-footer">
                <ul class="nav">
                    <li><a href="<?php echo base_url()?>"><i class="flaticon-food"></i>Home</a></li>
                    <li class="has-submenu">
                        <a href="recipe-v1.html"><i class="flaticon-food-2"></i>recipes</a>
                        <ul class="submenu">
                            <li><a href="recipe-v1.html">Recipes One</a></li>
                            <li><a href="recipe-v2.html">Recipes Two</a></li>
                            <li><a href="browse-recipes.html">Browse Recipes</a></li>
                            <li><a href="single-recipe.html">Single Recipe</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= base_url('recipe/view_add_new_recipe')?>"><i class="flaticon-food-4"></i>submit recipe</a></li>
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
