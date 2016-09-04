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
            <!--            <div class="col-md-4 pull-right single-sidebar-wrapper">-->
            <!--                <div class="single-sidebar-widget">-->
            <!--                    <div class="sec-title">-->
            <!--                        <h2><span>Top recipe of week</span></h2>-->
            <!--                    </div>-->
            <!--                    <div class="text-box">-->
            <!--                        <img src="images/top-recipes-sidebar.jpg" alt="Awesome Image"/>-->
            <!--                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem. </p>-->
            <!--                        <a href="#">View Recipe <i class="fa fa-angle-double-right"></i></a>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="single-sidebar-widget">-->
            <!--                    <div class="sec-title">-->
            <!--                        <h2><span>recipe categories</span></h2>-->
            <!--                    </div>-->
            <!--                    <div class="categories">-->
            <!--                        <ul>-->
            <!--                            <li><a href="#">Beverages</a></li>-->
            <!--                            <li><a href="#">Ice Cream</a></li>-->
            <!--                            <li><a href="#">Appetizers</a></li>-->
            <!--                            <li><a href="#">Pudding</a></li>-->
            <!--                            <li><a href="#">Foods</a></li>-->
            <!--                        </ul>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="single-sidebar-widget">-->
            <!--                    <div class="sec-title">-->
            <!--                        <h2><span>Popular Posts</span></h2>-->
            <!--                    </div>-->
            <!--                    <div class="popular-post">-->
            <!--                        <ul>-->
            <!--                            <li class="img-cap-effect">-->
            <!--                                <div class="img-box">-->
            <!--                                    <img src="images/popular-post-s1.jpg" alt="Awesome Image"/>-->
            <!--                                    <div class="img-caption">-->
            <!--                                        <div class="box-holder">-->
            <!--                                            <ul>-->
            <!--                                                <li><a href="#"><i class="fa fa-link"></i></a></li>-->
            <!--                                            </ul>-->
            <!--                                        </div>-->
            <!--                                    </div>-->
            <!--                                </div>-->
            <!--                                <div class="content">-->
            <!--                                    <a href="#"><h4>Pesto Pizza With oasted Garlic & otat</h4></a>-->
            <!--                                    <span><i class="icon icon-Timer"></i> 02 Dec</span>-->
            <!--                                </div>-->
            <!--                            </li>-->
            <!--                            <li class="img-cap-effect">-->
            <!--                                <div class="img-box">-->
            <!--                                    <img src="images/popular-post-s2.jpg" alt="Awesome Image"/>-->
            <!--                                    <div class="img-caption">-->
            <!--                                        <div class="box-holder">-->
            <!--                                            <ul>-->
            <!--                                                <li><a href="#"><i class="fa fa-link"></i></a></li>-->
            <!--                                            </ul>-->
            <!--                                        </div>-->
            <!--                                    </div>-->
            <!--                                </div>-->
            <!--                                <div class="content">-->
            <!--                                    <a href="#"><h4>Pesto Pizza With oasted Garlic & otat</h4></a>-->
            <!--                                    <span><i class="icon icon-Timer"></i> 02 Dec</span>-->
            <!--                                </div>-->
            <!--                            </li>-->
            <!--                            <li class="img-cap-effect">-->
            <!--                                <div class="img-box">-->
            <!--                                    <img src="images/popular-post-s3.jpg" alt="Awesome Image"/>-->
            <!--                                    <div class="img-caption">-->
            <!--                                        <div class="box-holder">-->
            <!--                                            <ul>-->
            <!--                                                <li><a href="#"><i class="fa fa-link"></i></a></li>-->
            <!--                                            </ul>-->
            <!--                                        </div>-->
            <!--                                    </div>-->
            <!--                                </div>-->
            <!--                                <div class="content">-->
            <!--                                    <a href="#"><h4>Pesto Pizza With oasted Garlic & otat</h4></a>-->
            <!--                                    <span><i class="icon icon-Timer"></i> 02 Dec</span>-->
            <!--                                </div>-->
            <!--                            </li>-->
            <!--                        </ul>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="single-sidebar-widget">-->
            <!--                    <div class="sec-title">-->
            <!--                        <h2><span>Tag clouds</span></h2>-->
            <!--                    </div>-->
            <!--                    <div class="tag-cloud">-->
            <!--                        <ul>-->
            <!--                            <li><a href="#">Most Popular recipes</a></li>-->
            <!--                            <li><a href="#">dessert</a></li>-->
            <!--                            <li><a href="#">top rated recipes</a></li>-->
            <!--                            <li><a href="#">Ice creams</a></li>-->
            <!--                            <li><a href="#">top Editors</a></li>-->
            <!--                            <li><a href="#">top recipes</a></li>-->
            <!--                        </ul>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <div class="col-md-7 has-side-background ">
                <div class="single-post-wrapper">
                    <div class="sec-title">
                        <h2>Welcome to Recipe <span>contributor</span></h2>
                    </div>
                    <br>

                    <form action="#" class="contact-form">
                        <div class="form-group">
                            <label>recipe title</label>
                            <input type="text">

                            <p>Keep it short and descriptive</p>
                        </div>
                        <p class="pupload-p">Add files to the upload queue and click the start button.</p>

                        <div id="uploader">
                            <p>Your browser doesn't have Flash, Silverlight or HTML5 support.</p>
                        </div>
                        <div class="form-group">
                            <label>recipe video</label>
                            <input type="text">
                        </div>
                        <div class="form-group">
                            <label>difficult level</label>
                            <select class="select-menu">
                                <option value="">Easy</option>
                                <option value="">Intermediate</option>
                                <option value="">Pro</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>recipe category</label>
                                    <select class="select-menu">
                                        <option value="">recipe category</option>
                                        <option value="">recipe category</option>
                                        <option value="">recipe category</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>cooking method</label>
                                    <select class="select-menu">
                                        <option value="">cooking method</option>
                                        <option value="">cooking method</option>
                                        <option value="">cooking method</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>cuisine</label>
                                    <select class="select-menu">
                                        <option value="">Choose a cuisine</option>
                                        <option value="">Choose a cuisine</option>
                                        <option value="">Choose a cuisine</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>short description</label>
                                    <textarea placeholder="Summery"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Preparation time</label>

                                    <div class="thm-spinner-wrapper">
                                        <span class="spinner-value text-right"></span>

                                        <div class="thm-spinner" data-min-value="5" data-max-value="720"
                                             data-default-value="90">
                                            <!-- loaded content via jquery ui -->
                                        </div>
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

                                        <div class="thm-spinner" data-min-value="5" data-max-value="720"
                                             data-default-value="90">
                                            <!-- loaded content via jquery ui -->
                                        </div>
                                        <ul class="list-inline">
                                            <li>00:05</li>
                                            <li>HH:MM</li>
                                            <li>12:00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>additional notes</label>
                                    <textarea placeholder="Summery"></textarea>

                                    <p>Add any other notes like recipe source, coloking hints etc. This section will
                                        show up under the cooking directions.</p>
                                </div>
                            </div>
                            <br>

                            <div class="col-md-12">
                                <div class="form-group mb0">
                                    <label class="mb0">Notice: </label>

                                    <p>The submitted recipe will only be visible to you until it has been approved by an
                                        adminstrator.</p>
                                    <button type="submit" class="thm-btn"><i class="icon icon-Goto"></i> Submit Recipe
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="ingredients-control col-md-5 col-sm-12 single-sidebar-wrapper" id="fields">
                <label class="control-label col-lg-12" for="field1"><h2><span>Ingredients</span></h2></label>

                <div class="row">
                    <div class="entry">
                        <div class="form-group col-lg-6">
                            <label class="control-label" for="ingname[]">Ingredient Name</label>

                            <div class="controls">
                                <input class="form-control" id="ingname" name="ingname[]" type="text"
                                       placeholder="Example : sugar , salt"/>
                            </div>
                            <p class="help-block with-errors"></p>
                        </div>
                        <div class="form-group col-lg-2">
                            <label class="control-label" for="amount[]">Quantity</label>

                            <div class="controls">
                                <input class="form-control" id="quantity" name="amount[]" placeholder="0" type="text"/>
                            </div>
                            <p class="help-block with-errors"></p>
                        </div>
                        <div class="form-group col-lg-3">
                            <label class="control-label" for="uint">Units</label>

                            <div class="controls">
                                <select class="form-control" name="metrics[]">
                                    <option value="">select</option>
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
                            <p class="help-block with-errors"></p>
                        </div>
                        <div class="form-group col-lg-1">
                            <div class="controls">
                                <button class="btn thm-btn" type="button">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button>
                            </div>
                            <p class="help-block with-errors"></p>
                        </div>
                        <div class="input-group">
                            <div class="col-xs-1 col-sm-2">
                                <button class="btn thm-btn" type="button">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->view('common/footer_bar'); ?>

<?php $this->view('common/script_footer_with_bottom_bar'); ?>

</body>
</html>