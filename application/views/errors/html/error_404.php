<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ambula | Page Not Found</title>
    <?php $this->view('common/script_header'); ?>
</head>
<body>

<?php $this->view('common/top_bar'); ?>

<?php $this->view('common/menu_bar'); ?>

<section class="inner-banner text-center">
    <div class="thm-container">
        <div class="box clearfix">
            <h2>404 Error Page</h2>
        </div>
    </div>
</section>


<section class="error-404 sec-padding text-center">
    <div class="thm-container">
        <h2>404</h2>

        <h3>Oops! That page can’t be found</h3>
        <h4>Sorry, but the page you are looking for does not existing</h4>
        <a href="<?= base_url('') ?>" class="thm-btn">go to home Page</a>

    </div>
</section>

<?php $this->view('common/footer_bar'); ?>

<?php $this->view('common/script_footer_with_bottom_bar'); ?>

</body>
</html>