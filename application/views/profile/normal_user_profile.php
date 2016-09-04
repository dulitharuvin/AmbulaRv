<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ambula-RV | Profile View <?= $this->session->userdata('name') ?></title>
    <?php $this->view('common/script_header'); ?>
</head>
<body>

<?php $this->view('common/top_bar'); ?>
<?php $this->view('common/menu_bar'); ?>

<section class="inner-banner">
    <div class="thm-container">
        <div class="box clearfix">
            <h2 class="pull-left">Profile</h2>
            <ul class="breadcumb pull-right">
                <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                <li><span>User Account</span></li>
            </ul>
        </div>
    </div>
</section>


<section class="recipe-user-account sec-padding">
    <div class="thm-container">
        <div class="row">
            <div class="col-md-7">
                <div class="author-box">
                    <div class="img-box">
                        <?php if ($normUser->user_provider_type == 'FACEBOOK') { ?>
                            <img id="profilePicture"
                                 src="https://graph.facebook.com/<?= $normUser->user_facebook_uid ?>/picture?type=large"
                                 class="img-responsive" alt="">
                        <?php } else if ($normUser->user_avatar == 1) { ?>
                            <img id="profilePicture"
                                 src="/Ambula/uploads/profile/personal_user/<?= $normUser->user_id ?>/<?= $normUser->user_id ?>.card.jpg"
                                 class="img-responsive" alt="<?= $normUser->user_name ?>">
                        <?php } else { ?>
                            <img id="profilePicture" src="/Ambula/public/img/profile_avatar.jpg"
                                 class="img-responsive"
                                 alt="">
                        <?php } ?>
                    </div>
                    <div class="content-box">
                        <?php if ($normUser->user_provider_type == 'FACEBOOK' && $normUser->first_name == null && $normUser->last_name == null) { ?>
                            <div class="title">
                                <h3><?= $user_name ?></h3>
                            </div>
                        <?php } else if ($normUser->user_provider_type == 'FACEBOOK' && $normUser->first_name != null && $normUser->last_name != null) { ?>
                            <div class="title">
                                <h3><?= $normUser->first_name ?> <?= $normUser->last_name ?></h3>
                            </div>
                        <?php } else { ?>
                            <div class="title">
                                <h3><?= $normUser->first_name ?> <?= $normUser->last_name ?></h3>
                            </div>
                        <?php } ?>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                            consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                            est, qui dolorem ipsum quia dolor.</p>
                        <ul class="list-inline">
                            <li><span>Connect with Michale John: </span></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="status-box">
                    <div class="single-status-box clearfix">
                        <i class="fa fa-cutlery"></i>
                        <span class="count">16</span>
                        <span class="name">Published <br>Recipes</span>
                    </div>
                    <div class="single-status-box clearfix">
                        <i class="icon icon-Timer"></i>
                        <span class="count">115</span>
                        <span class="name">Days since <br>Registration</span>
                    </div>
                    <div class="single-status-box clearfix">
                        <i class="fa fa-comments-o"></i>
                        <span class="count">31</span>
                        <span class="name">Posted <br> Comments</span>
                    </div>
                    <div class="single-status-box clearfix">
                        <i class="fa fa-eye"></i>
                        <span class="count">161</span>
                        <span class="name">Profile <br> Views</span>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="request-recipes">
                    <h2>Request a Recipe</h2>

                    <p>Fill in the form below to ask for Michale John advice <br>regarding recipe</p>

                    <form action="#">
                        <ul>
                            <li class="clearfix">
                                <div class="label">
                                    <span>intended for:</span>
                                </div>
                                <div class="input-box">
                                    <input type="text">
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="label">
                                    <span>Cuisine:</span>
                                </div>
                                <div class="input-box">
                                    <input type="text">
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="label">
                                    <span>Difficulty:</span>
                                </div>
                                <div class="input-box">
                                    <input type="text">
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="label">
                                    <span>Category:</span>
                                </div>
                                <div class="input-box">
                                    <input type="text">
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="label">
                                    <span>Comments:</span>
                                </div>
                                <div class="input-box">
                                    <textarea></textarea>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="label">
                                    &nbsp;
                                </div>
                                <div class="input-box">
                                    <button type="submit" class="thm-btn"><span>Read More</span></button>
                                </div>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="recipe-user-content sec-padding">
    <div class="thm-container">
        <div class="tab-title">
            <ul role="tablist">
                <li class="active" data-tab-name="recipes"><a href="#recipes" aria-controls="recipes" role="tab"
                                                              data-toggle="tab">REcipes (25)</a></li>
                <li data-tab-name="articles"><a href="#articles" aria-controls="articles" role="tab" data-toggle="tab">articles
                        (8)</a></li>
                <li data-tab-name="bookmark"><a href="#bookmark" aria-controls="bookmark" role="tab" data-toggle="tab">bookmark
                        (18)</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="row tab-pane fade in active" id="recipes">
                <div class="row">
                    <div id="recipe-list" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php foreach ($recipeList->result() as $recipe) { ?>
                            <div class="col-md-4">
                                <div class="single-recent-recipes img-cap-effect">
                                    <div class="img-box">

                                        <img src="/AmbulaRV/public/images/recent-recipes/1.jpg" alt="">

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
                                        <h3><?= $recipe->title ?></h3>

                                        <p>eque porro quisquam est, qui dolorem ipsu quia dolor sit amet, consectetur
                                            ...</p>

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
                        <?php } ?>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!--                        <ul class="page-navigation">
                                                    <li><a href="#"><i class="fa fa-arrow-left"></i></a></li>
                                                    <li><span>1</span></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#">4</a></li>
                                                    <li><a href="#">5</a></li>
                                                    <li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
                                                </ul>-->
                        <?php echo $page_links; ?>
                    </div>
                </div>

            </div>
            <div class="row tab-pane fade" id="articles">
                <div class="col-md-4">
                    <div class="single-recent-recipes img-cap-effect">
                        <div class="img-box">
                            <img src="images/recent-recipes/1.jpg" alt="">

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
                            <img src="images/recent-recipes/2.jpg" alt="">

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
                            <img src="images/recent-recipes/3.jpg" alt="">

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
                            <img src="images/recent-recipes/4.jpg" alt="">

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
                            <img src="images/recent-recipes/6.jpg" alt="">

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

                <ul class="page-navigation">
                    <li><a href="#"><i class="fa fa-arrow-left"></i></a></li>
                    <li><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
                </ul>
            </div>
            <div class="row tab-pane fade" id="bookmark">
                <div class="col-md-4">
                    <div class="single-recent-recipes img-cap-effect">
                        <div class="img-box">
                            <img src="images/recent-recipes/1.jpg" alt="">

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
                            <img src="images/recent-recipes/2.jpg" alt="">

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
                            <img src="images/recent-recipes/3.jpg" alt="">

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
                            <img src="images/recent-recipes/4.jpg" alt="">

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
                            <img src="images/recent-recipes/6.jpg" alt="">

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

                <ul class="page-navigation">
                    <li><a href="#"><i class="fa fa-arrow-left"></i></a></li>
                    <li><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php $this->view('common/footer_bar'); ?>

<?php $this->view('common/script_footer_with_bottom_bar'); ?>

<script>
    $("body").on("click", ".page-navigation a", function(){
        var theUrl = $(this).attr('href')
    });
</script>

</body>
</html>