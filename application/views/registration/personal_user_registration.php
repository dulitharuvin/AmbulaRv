<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ambula-RV | Submit New Recipe</title>
    <?php $this->view('common/script_header'); ?>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/validator.js"></script>
    <script>
        // This is called with the results from from FB.getLoginStatus().
        function statusChangeCallback(response) {
            console.log('statusChangeCallback');
            console.log(response);
            // The response object is returned with a status field that lets the
            // app know the current login status of the person.
            // Full docs on the response object can be found in the documentation
            // for FB.getLoginStatus().
            if (response.status === 'connected') {
                // Logged into your app and Facebook.
                testAPI();
            } else if (response.status === 'not_authorized') {
                // The person is logged into Facebook, but not your app.
                document.getElementById('status').innerHTML = 'Please log ' +
                    'into this app.';
            } else {
                // The person is not logged into Facebook, so we're not sure if
                // they are logged into this app or not.
                document.getElementById('status').innerHTML = 'Please log ' +
                    'into Facebook.';
            }
        }

        // This function is called when someone finishes with the Login
        // Button.  See the onlogin handler attached to it in the sample
        // code below.
        function checkLoginState() {
            FB.getLoginStatus(function (response) {
                statusChangeCallback(response);
            });
        }

        window.fbAsyncInit = function () {
            FB.init({
                appId: '753864634705819',
                cookie: true,  // enable cookies to allow the server to access the session
                xfbml: true,  // parse social plugins on this page
                version: 'v2.5' // use graph api version 2.5
            });

            // Now that we've initialized the JavaScript SDK, we call
            // FB.getLoginStatus().  This function gets the state of the
            // person visiting this page and can return one of three states to
            // the callback you provide.  They can be:
            //
            // 1. Logged into your app ('connected')
            // 2. Logged into Facebook, but not your app ('not_authorized')
            // 3. Not logged into Facebook and can't tell if they are logged into
            //    your app or not.
            //
            // These three cases are handled in the callback function.

            FB.getLoginStatus(function (response) {
                statusChangeCallback(response);
            });

        };

        // Load the SDK asynchronously
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

        // Here we run a very simple test of the Graph API after login is
        // successful.  See statusChangeCallback() for when this call is made.
        function testAPI() {
            console.log('Welcome!  Fetching your information.... ');
            FB.api('/me', function (response) {
                console.log('Successful login for: ' + response.name);
                document.getElementById('status').innerHTML =
                    'Thanks for logging in, ' + response.name + '!';
            });
        }
    </script>

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
                    <h2>register</h2>
                </div>
                <form data-toggle="validator" role="form"
                      action="<?= base_url('registration/register_personal_user') ?>"
                      method="POST" class="">
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <!-- First Name -->
                            <label class="control-label" for="first_name">First Name</label>

                            <div class="controls">
                                <input type="text" id="firstname" maxlength="20" name="first_name" placeholder=""
                                       class="form-control" required>
                            </div>
                            <span class="help-block with-errors"></span>
                        </div>
                        <div class="form-group col-lg-6">
                            <!-- Username -->
                            <label class="control-label" for="last_name">Last Name</label>

                            <div class="controls">
                                <input type="text" id="lastname" maxlength="20" name="last_name" placeholder=""
                                       class="form-control" required>
                                <span class="help-block with-errors"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <!-- E-mail -->
                            <label class="control-label" for="email">E-mail</label>

                            <div class="controls">
                                <input type="email" data-native-error="Invalid email format" id="email" name="email"
                                       data-remote="<?= base_url('registration/check_email') ?>" placeholder=""
                                       class="form-control"
                                       data-error="The email address you have entered already has an account" required>

                                <p class="help-block with-errors"></p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <!-- Username -->
                            <label class="control-label" for="username">Username</label>

                            <div class="controls">
                                <input type="text" id="username" name="username" placeholder="" class="form-control"
                                       pattern="^[A-Za-z0-9_-]{3,16}$"
                                       data-native-error="Username should at least contain 3 Characters (letters numbers and underscore)"
                                       data-remote="<?= base_url('registration/check_username') ?>"
                                       data-error="Username already exists ,choose a different one" maxlength="10"
                                       required>

                                <p class="help-block with-errors"></p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <!-- Password-->
                            <label class="control-label" for="password">Password</label>

                            <div class="controls">
                                <input type="password" id="password" data-minlength="6"
                                       data-error="Password should contain at least 6 characters" name="password"
                                       placeholder="" class="form-control" required>

                                <p class="help-block with-errors"></p>
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <!-- Password -->
                            <label class="control-label" for="password_confirm">Password (Confirm)</label>

                            <div class="controls">
                                <input type="password" id="password_confirm" data-match="#password"
                                       name="password_confirm"
                                       placeholder=""
                                       class="form-control" required>

                                <p class="help-block with-errors">Please confirm password</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-4">
                            <!-- Register Button -->
                            <div class="controls">
                                <button type="submit" class="thm-btn">Register</button>
                            </div>
                        </div>
                        <div class="form-group col-lg-4">
                            <div class="controls">
                                <fb:login-button scope="public_profile,email" onlogin="checkLoginState();" size="xlarge" style="/*background : #4c69ba; background: linear-gradient(#4c69ba, #3b55a0); border-color: #4c69ba;*/">
                                </fb:login-button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>

<?php $this->view('common/footer_bar'); ?>

<?php $this->view('common/script_footer_with_bottom_bar'); ?>

</body>
</html>