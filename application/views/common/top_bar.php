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
                <li>
                <?php if(isset($_SESSION['user_logged_in']) && $this->session->userdata('user_logged_in')){?>
                    <li>
                        <i class="fa fa-user"></i>
                        <?php if($this->session->userdata('user_account_type') == 2){?>
                            <span>Welcome <?= $this->session->userdata('name')?></span>
                        <?php }else { ?>
                            <span>Welcome <?= $this->session->userdata('first_name')?></span>
                        <?php }?>
                    </li>
                <?php }else {?>
                    <a href="<?=base_url('login')?>">
                        <li>
                            <i class="fa fa-key"></i>
                            <span>Login</span>
                        </li>
                    </a>
                <?php }?>
                </li>
                <li>
                    <?php if(isset($_SESSION['user_logged_in']) && $this->session->userdata('user_logged_in')){?>
                        <a href="<?= base_url('login/logout') ?>">
                            <i class="fa fa-sign-out"></i>
                            <span>Logout</span>
                        </a>
                    <?php }else {?>
                        <a href="<?= base_url('registration') ?>">
                            <li>
                                <i class="fa fa-unlock-alt"></i>
                                <span>Register</span>
                            </li>
                        </a>
                    <?php }?>
                </li>
                <li>
                    <button><i class="fa fa-search"></i></button>
                </li>

            </ul>
        </div>
    </div>
</section>