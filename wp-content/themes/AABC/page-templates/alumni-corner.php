<?php

// Template Name: Alumni Corner

get_header();
?>

<?php include( get_template_directory() . '/headers/alumni-corner-header.php'); ?>

<div class="row">
    <div class="small-12 medium-10 large-7 small-centered text-center columns main-title">
        <h1>Alumni Corner</h1>
        <h5>Our Alumni Succeed At Life. See What They Are Up To!</h5>
    </div>
</div>

<div class="row-full clearfix">
        <?php dynamic_sidebar('alumni-corner'); ?>
</div>

<?php get_footer(); ?>
