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
                <form action="<?= base_url('login/login') ?>" class="contact-form login" method="POST" role="form">
                    <p><input type="text" placeholder="Username or Email" id="username" name="username"></p>

                    <p><input type="password" placeholder="Password" id="password" name="password"></p>
                    <ul class="special-checkbox">
                        <li>
	                    	<span class="input-checker">
								<input type="checkbox" name="remember" value="">
	                    	</span>Remember me
                        </li>
                    </ul>
                    <button type="submit" class="thm-btn"><span>Login now</span></button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php $this->view('common/footer_bar'); ?>

<?php $this->view('common/script_footer_with_bottom_bar'); ?>

</body>
</html>