<?php

// Template Name: Alumni Corner

get_header();
?>

<?php get_template_part( 'alumni-corner-header' ); ?>

<div class="row">
    <div class="small-12 medium-10 large-7 small-centered text-center columns main-title">
        <h1>Alumni Corner</h1>
        <h5>Our Alumni Succeed At Life. See What They Are Up To!</h5>
    </div>
</div>

<hr>

<div class="row">
    <div class="small-12 medium-10 large-7 small-centered text-center columns main-title">
        <h1>Hallelujah Chorus</h1>
        <a style="background: #242133; display: inline-block; color: #fff; margin-top: 1rem; padding: 0.5rem 1.5rem;" href="https://drive.google.com/open?id=0BytbGNc6KNy_WkdCMnFpd1hrVEU"><h5 style="color: white;">Download Files</h5></a>
    </div>
</div>

<div class="row-full clearfix">
        <?php dynamic_sidebar('alumni-corner'); ?>
</div>

<?php get_footer(); ?>
