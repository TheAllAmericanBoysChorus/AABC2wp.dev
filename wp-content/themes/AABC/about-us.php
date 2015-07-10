<?php
// Template Name: About Us
?>

<?php get_header(); ?>

<?php get_template_part( 'about-us-header' ); ?>

<div class="row-full info-right clearfix">
    <img class="left small-12 large-6 columns" src="<?php bloginfo( 'template_directory' )?>/assets/images/3-boys.jpg">
    <div class="small-12 medium-7 large-4 columns content left small-text-center medium-text-center large-text-left">
        <?php dynamic_sidebar( 'about-us-info-1' ) ?>
    </div>
</div>

<div class="row-full clearfix">
    <img class="right small-12 large-6 columns" src="<?php bloginfo( 'template_directory' )?>/assets/images/boys-jumping.jpg">
    <div class="small-11 large-4 columns content left small-text-center medium-text-center large-text-left">
        <?php dynamic_sidebar( 'about-us-info-2' ) ?>
    </div>
</div>

<div class="row-full clearfix">
    <img class="left small-12 large-6 columns"  src="<?php bloginfo( 'template_directory' )?>/assets/images/iowa.jpg">
    <div class="small-11 medium-10 large-4 columns content left small-text-center medium-text-center large-text-left">
        <?php dynamic_sidebar( 'about-us-info-3' ) ?>
    </div>
</div>

<div class="about-us-cta">
    <div class="row">
        <div class="small-12 small-centered columns text-center">
            <h1> All this we believe because we have witnessed it happen again and again, through the life-changing experience that is the All-American Boys Chorus.</h1>
            <a href="#"><button class="red-cta">Join The Team</button></a>
        </div>
    </div>
</div>

<?php get_footer(); ?>




