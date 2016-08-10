<?php
// Template Name: Presenters Page
?>

<?php get_header(); ?>

<?php include( get_template_directory() . '/headers/presenters-header.php'); ?>

<div class="row-full info-right clearfix">
    <img class="left small-12 large-6 columns" src="<?php bloginfo( 'template_directory' )?>/assets/images/concert-2.jpg">
    <div class="small-11 medium-7 large-4 large-push-1 small-centered columns content small-text-center medium-text-center large-text-left large-uncentered">
        <div class="buffer">
            <?php dynamic_sidebar( 'presenters-1' ) ?>
        </div>
    </div>
</div>

<div class="blue-bg">
    <div class="row">
        <div class="small-12 columns text-center small-centered song-list-title">
            <h1>For The 2016 | 2017 Seasons</h1>
            <h5>An American Musical Journey</h5>
        </div>
        <ul style="margin-left:0;" class="small-12 large-4 columns song-list small-text-center large-text-left">
            <?php dynamic_sidebar( 'presenters-2' ) ?>
        </ul>
        <ul style="margin-left:0;" class="small-12 large-4 columns song-list small-text-center large-text-left">
            <?php dynamic_sidebar( 'presenters-3' ) ?>
        </ul>
    </div>
</div>

<div class="row-full clearfix">
    <img class="right small-12 large-6 columns" src="<?php bloginfo( 'template_directory' )?>/assets/images/concert-3.jpg">
    <div class="small-11 medium-7 large-4 large-uncentered large-push-1 small-centered columns content small-text-center medium-text-center large-text-left">
        <div class="buffer">
            <?php dynamic_sidebar( 'presenters-4' ) ?>
        </div>
    </div>
</div>

<?php

$args = array(
    'post_type' => 'testimonial',
    'orderby' => 'rand',
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field'    => 'slug',
            'terms'    => 'presenters',
        ),
    ),
);
$the_query = new WP_Query( $args );

?>



<div class="blue-bg">
    <h1 class="testimonial-headline">What Our Clients Are Saying</h1>
    <div class="main-gallery">
        <?php if( have_posts() ) : ?>
            <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="gallery-cell">
                    <div class="testimonial">
                        <img class="testimonial-avatar" src="<?php the_field('image'); ?>">
                        <q class="testimonial-quote"><?php the_field('testimonial'); ?></q>
                        <span class="testimonial-author"><?php the_field('name'); ?></span>
                    </div>
                </div>
            <?php endwhile;
        else :

        endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>
