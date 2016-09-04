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
                            <option value="">Sinhala</option>
                        </select>
                    </form>
                </li>
                <?php if (isset($_SESSION['user_logged_in']) && $this->session->userdata('user_logged_in')) { ?>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <?php if ($this->session->userdata('user_provider_type') == 'FACEBOOK') { ?>
                                <img src="https://graph.facebook.com/<?= $this->session->userdata('fbid') ?>/picture"
                                     style="margin-top:7px;" height="35">
                            <?php } else if ($this->session->userdata('user_provider_type') == 'DEFAULT' && $this->session->userdata('user_avatar') == 1) {
                                if (isset($_SESSION['user_account_type'])) {
                                    if ($this->session->userdata('user_account_type') == 2) { ?>
                                        <img
                                            src="/AmbulaRV/uploads/profile/commercial_user/<?= $this->session->userdata('uid') ?>/<?= $this->session->userdata('uid') ?>.thumb.jpg"
                                            height="35">
                                    <?php } else {
                                        ?>
                                        <img
                                            src="/AmbulaRV/uploads/profile/personal_user/<?= $this->session->userdata('uid') ?>/<?= $this->session->userdata('uid') ?>.thumb.jpg"
                                            height="35">
                                    <?php }
                                } ?>
                            <?php } else if ($this->session->userdata('user_provider_type') == 'DEFAULT' && $this->session->userdata('user_avatar') == 0) { ?>
                                <img src="/AmbulaRV/public/images/profile_avatar.jpg" height="35">
                            <?php } ?>
                            <?php if ($this->session->userdata('user_account_type') == 2) { ?>
                                <span>Welcome <?= $this->session->userdata('name') ?></span>
                            <?php } else { ?>
                                <span>Welcome <?= $this->session->userdata('first_name') ?></span>
                            <?php } ?>
                            <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li class="profile-dropdown">
                                <a href="<?= base_url('profile/index/'.$this->session->userdata('username'))?>">
                                    <i class="fa fa-user"></i>
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li class="profile-dropdown">
                                <a href="<?= base_url('profile/'.$this->session->userdata('username'))?>">
                                    <i class="fa fa-cogs"></i>
                                    <span>Account Settings</span>
                                </a>
                            </li>
                            <?php if (isset($_SESSION['user_logged_in']) && $this->session->userdata('user_logged_in')) { ?>
                                <li class="profile-dropdown">
                                    <a href="<?= base_url('login/logout') ?>">
                                        <i class="fa fa-sign-out"></i>
                                        <span>Logout</span>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                <?php } else { ?>
                    <li>
                        <a href="<?= base_url('login') ?>">
                            <i class="fa fa-key"></i>
                            <span>Login</span>
                        </a>
                    </li>
                <?php } ?>
                <?php if (!isset($_SESSION['user_logged_in']) && !$this->session->userdata('user_logged_in')) { ?>

                    <li>
                        <a href="<?= base_url('registration') ?>">
                            <i class="fa fa-unlock-alt"></i>
                            <span>Register</span>
                        </a>
                    </li>
                <?php } ?>
                <li>
                    <button><i class="fa fa-search"></i></button>
                </li>

            </ul>
        </div>
    </div>
</section>