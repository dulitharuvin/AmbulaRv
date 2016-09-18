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
            <h2 class="pull-left">Submmit Recipe</h2>
            <ul class="breadcumb pull-right">
                <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                <li><span>Submmit Recipe</span></li>
            </ul>
        </div>
    </div>
</section>

<section class=" blog-page browse-recipe submit-recipe-page">
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

            <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur,
                vel illum qui dolorem. </p>
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
    <div class="single-sidebar-widget">
        <div class="sec-title">
            <h2><span>Tag clouds</span></h2>
        </div>
        <div class="tag-cloud">
            <ul>
                <li><a href="#">Most Popular recipes</a></li>
                <li><a href="#">dessert</a></li>
                <li><a href="#">top rated recipes</a></li>
                <li><a href="#">Ice creams</a></li>
                <li><a href="#">top Editors</a></li>
                <li><a href="#">top recipes</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="col-md-8 pull-left has-side-background ">

<div class="single-post-wrapper">
<div class="sec-title">
    <h2>Welcome to Recipe <span>contributor</span></h2>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comm
    odo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
<br>

<form action="/AmbulaRV/recipe/submitRecipe" method="post" id="contact-form" class="contact-form">
    <div class="form-group">
        <label>recipe title</label>
        <input id="recipetitle" name="recipetitle" type="text" required>

        <p>Keep it short and descriptive</p>
    </div>
    <div class="form-group">
        <label>recipe video</label>
        <input type="text">

        <p>Optional: If you have recipe video on Youtube. Vimeo or any of the other supported Embed sites, then
            you�ll want to use the field abouve. Just paste in the URL (ex. http://youtube/1024_wCtm5s or
            hppt://vimeo.com/5426201) and it will show up as a pupup by clicking the recipe image.</p>
    </div>
    <!-- <div class="form-group">
        <label>difficult level</label>
        <select class="select-menu">
            <option value="">Easy</option>
            <option value="">Intermediate</option>
            <option value="">Pro</option>
        </select>
    </div> -->
    <p class="pupload-p">Add files to the upload queue and click the start button.</p>

    <div id="uploader">
        <p>Your browser doesn't have Flash, Silverlight or HTML5 support.</p>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>recipe category <?php echo $_SESSION['uid']; ?></label>
                <select name="category" class="select-menu" id="category">

                    <option value="0">Select</option>
                    <?php $catArray = json_decode($this->recipe->getCategoriesArray(), true);

                    foreach ($catArray as $category) {
                        ?>

                        <option value="<?= $category['idCategory'] ?>"><?= $category['title'] ?></option>
                    <?php
                    } ?>
                </select>
            </div>
        </div>
        </div>
<!--        <div class="col-md-4">-->
<!--            <div class="form-group">-->
<!--                <label>cooking method</label>-->
<!--                <select class="select-menu">-->
<!--                    <option value="">cooking method</option>-->
<!--                    <option value="">cooking method</option>-->
<!--                    <option value="">cooking method</option>-->
<!--                </select>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-md-4">-->
<!--            <div class="form-group">-->
<!--                <label>cuisine</label>-->
<!--                <select class="select-menu">-->
<!--                    <option value="">Choose a cuisine</option>-->
<!--                    <option value="">Choose a cuisine</option>-->
<!--                    <option value="">Choose a cuisine</option>-->
<!--                </select>-->
<!--            </div>-->
<!--        </div>-->
        <div class="col-md-12">
            <div class="form-group">
                <label>Ingredients</label>

                <span id="ing_error" style="color: red;"></span>


                <div class="col-md-5" style="color: brown"> Name</div>
                <div class="col-md-2" style="color: brown"> Qty</div>
                <br>

                <div class="ingredients-control">
                    <div class="entry">
                        <div class="input-group">
                            <div class="col-md-6">
                                <input class="form-control" id="recipetitle" name="ingname[]" type="text"
                                       placeholder="Example : sugar , salt"/>
                            </div>
                            <div class="col-md-2">
                                <input class="form-control" name="amount[]" placeholder="0" type="text"/>
                            </div>
                            <div class="col-md-3">
                                <select  class="select-menu"  name="metrics[]">
                                    <option value="0">select</option>
                                    <option value="kg">kg</option>
                                    <option value="g">g</option>
                                    <option value="oz">oz</option>
                                    <option value="tbspn">tbspn</option>
                                    <option value="tspn">tspn</option>
                                    <option value="cup">Cup</option>
                                    <option value="ml">ml</option>
                                    <option value="l">l</option>
                                    <option value="packet">packet</option>
                                    <option value="drops">drops</option>
                                    <option value="pieces">pieces</option>
                                    <option value="pinch">pinch</option>
                                    <option value="tin">tin</option>

                                </select>
                            </div>
                            <div class="col-md-1">
                                <button class="btn btn-success btn-add" type="button">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label>Description</label>

                <div class="directions-control" style="" id="fields">
                    <div class="entry2">

                        <div class="col-md-11">
                            Step<span class="num">1</span>.
                            <textarea  class="form-control" name="steps[]" rows="2" id="comment"></textarea>
                        </div>
                        <div class="col-md-1">
                            <br><br>
                            <button class="btn btn-success btn-add" type="button">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <br>
        <div class="col-md-6">
            <div class="form-group">
                <label>Preparation time</label>

                <div class="thm-spinner-wrapper">
                    <span class="spinner-value text-right"></span>

                    <div class="thm-spinner" data-min-value="5" data-max-value="720" data-default-value="90">
                        <!-- loaded content via jquery ui -->
                    </div>
                    <input type="hidden" class="time" name="prep_time">
                    <ul class="list-inline">
                        <li>00:05</li>
                        <li>HH:MM</li>
                        <li>12:00</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>cook time</label>

                <div class="thm-spinner-wrapper">
                    <span class="spinner-value text-right"></span>

                    <div class="thm-spinner" data-min-value="5" data-max-value="720" data-default-value="90">
                        <!-- loaded content via jquery ui -->
                    </div>
                    <input type="hidden" class="time" name="cook_time">
                    <ul class="list-inline">
                        <li>00:05</li>
                        <li>HH:MM</li>
                        <li>12:00</li>
                    </ul>
                </div>
            </div>
        </div>
       <!-- <div class="col-md-12">
            <div class="form-group">
                <label>additional notes</label>
                <textarea name="tags" placeholder="Summery"></textarea>

                <p>Add any other notes like recipe source, coloking hints etc. This section will show up under
                    the cooking directions.</p>
            </div>
        </div> -->
        <br>

        <div class="col-md-12">
            <div class="form-group mb0">
                <label class="mb0">Notice: </label>

                <p>The submitted recipe will only be visible to you until it has been approved by an
                    adminstrator.</p>
                <button type="submit" class="thm-btn"><i class="icon icon-Goto"></i> Submit Recipe</button>
            </div>
        </div>

</form>


</div>

</div>
</div>
</div>
</section>

<?php $this->view('common/footer_bar'); ?>

<?php $this->view('common/script_footer_with_bottom_bar'); ?>

</body>
</html>