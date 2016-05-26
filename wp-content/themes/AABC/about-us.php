<?php
// Template Name: About Us
?>

<?php get_header(); ?>

<?php get_template_part( 'about-us-header' ); ?>

<div class="row-full info-right clearfix">
    <img class="left small-12 large-6 columns" src="<?php bloginfo( 'template_directory' )?>/assets/images/3-boys.jpg">
    <div class="small-11 medium-7 large-4 large-push-1 small-centered columns content small-text-center medium-text-center large-text-left large-uncentered">
        <div class="buffer">
            <?php dynamic_sidebar( 'about-us-info-1' ) ?>
        </div>
    </div>
</div>

<div class="row-full clearfix">
    <img class="right small-12 large-6 columns" src="<?php bloginfo( 'template_directory' )?>/assets/images/boys-jumping.jpg">
    <div class="small-11 medium-7 large-4 large-uncentered large-push-1 small-centered columns content small-text-center medium-text-center large-text-left">
        <div class="buffer">
            <?php dynamic_sidebar( 'about-us-info-2' ) ?>
        </div>
    </div>
</div>

<div class="row-full clearfix">
    <img class="left small-12 large-6 columns"  src="<?php bloginfo( 'template_directory' )?>/assets/images/iowa.jpg">
    <div class="small-11 medium-7 large-4 large-push-1 small-centered columns content small-text-center medium-text-center large-text-left large-uncentered">
    <div class="buffer">
        <?php dynamic_sidebar( 'about-us-info-3' ) ?>
    </div>
    </div>
</div>
<div class="blue-bg">
    <div class="row" style="padding: 3rem 0;">
        <div class="small-12 large-7 columns text-center small-centered">
            <h1>Our Mission</h1>
            <p style="color:white;">We provide a world-acclaimed music and performing arts curriculum that educates, motivates and builds character in boys through unparalleled opportunities for performance, leadership, travel and community service.</p>
        </div>
    </div>
</div>

<?php

$args = array(
    'post_type' => 'staff',
);

$the_query = new WP_Query( $args );

?>

<div class="row-full our-staff">
    <div class="small-12 medium1-12 large-4 columns text-center small-centered">
        <?php dynamic_sidebar( 'about-us-info-4' ) ?>
    </div>

    <ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-7">
        <?php if( have_posts() ) : ?>
            <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <li>
                    <div class="staff-unit">
                        <img src="<?php the_field('image'); ?>"/>
                        <div class="bio text-center">
                            <div class="name"><?php the_field('name');?></div>
                            <div class="title"><?php the_field('title');?></div>
                        </div>
                    </div>
                </li>
            <?php endwhile;
        else :
        endif;
        ?>
    </ul>
</div>

<div class="about-us-cta">
    <div class="row">
        <div class="small-12 small-centered columns text-center">
            <h1> All this we believe because we have witnessed it happen again and again, through the life-changing experience that is the All-American Boys Chorus.</h1>
            <a href="<?php echo site_url();?>/contact-us"><button class="red-cta">Join The Team</button></a>
        </div>
    </div>
</div>

<?php get_footer(); ?>
