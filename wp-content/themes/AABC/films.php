<?php
// Template Name: Films & Recordings Page
?>

<?php get_header(); ?>

<?php get_template_part( 'films-recordings-header' ); ?>

<div class="row">
    <div class="small-12 medium-10 large-7 small-centered text-center columns main-title">
        <h1>How Cool Are We?</h1>
        <h5>We Hang Out With BYU Vocal Point.</h5>
        <p>Producers, directors, and advertising agency executives rave about The All-American Boys Chorus! Our versatility and experience allow us to meet your exact needs, from a 30-sec. musical segment to a movie soundtrack.</p>
        <div class="flex-video">
            <iframe height="320" src="https://www.youtube.com/embed/caUIXLxqiPU" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</div>

<div class="full-width-cta-banner">
    <div class="small-12 large-8 small-centered text-center columns">
        <h1>Write Tag Line Here</h1>
        <button class="full-width-cta-banner-btn">Book Us</button>
    </div>
</div>

<div class="full-width-gray">
    <div class="row film-logos">
        <div class="small-6 medium-4 large-2 columns film-logo">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/mazda.png">
        </div>
        <div class="small-6 medium-4 large-2 columns film-logo">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/vocal-point.png">
        </div>
        <div class="small-6 medium-4 large-2 columns film-logo">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/cartoon-network.png">
        </div>
        <div class="small-6 medium-4 large-2 columns film-logo">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/ktla5.png">
        </div>
        <div class="small-6 medium-4 large-2 columns film-logo">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/scrubs.png">
        </div>
        <div class="small-6 medium-4 large-2 columns film-logo">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/toshiba.png">
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
            'terms'    => 'films',
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




