<?php
// Template Name: Weddings
?>

<?php get_header(); ?>

<?php get_template_part( 'weddings-header' ); ?>

<div class="row-full info-right clearfix">
    <div class="small-12 medium-10 large-4 columns content left small-text-center medium-text-center large-text-left">
        <h1>Dynamic Enough To Sing In An Opera House, Inimate Enough For Your Wedding. </h1>
        <h5>Our Performance Will Move You</h5>
        <p>For those seeking to offer a magical entertainment experience for their
            wedding The All-American Boys Chorus is America’s quintessential and most internationally acclaimed contemporary boys choir that offers a professional repertoire of over 100 arrangements for almost any venue size. Let us help you arrange exactly what you want for this special day of your lives.</p>
    </div>
    <img class="right small-12 large-6 columns" src="<?php bloginfo('template_directory')?>/assets/images/wedding-2.jpg">
</div>


<div class="row-full info-right clearfix">
    <div class="small-12 medium-7 large-4 columns content right small-text-center medium-text-center large-text-left wedding-song-list">
        <?php dynamic_sidebar( 'wedding-songs' ) ?>
    </div>
    <img class="left small-12 large-6 columns" src="<?php bloginfo( 'template_directory' )?>/assets/images/3-boys.jpg">
</div>

<?php

$args = array(
    'post_type' => 'testimonial',
    'orderby' => 'rand',
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field'    => 'slug',
            'terms'    => 'wedding',
        ),
    ),
);

$the_query = new WP_Query( $args );

?>

<div class="blue-bg">
    <h1 class="testimonial-headline">What Our Brides and Grooms Are Saying</h1>
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

<?php wp_reset_query(); ?>

<div class="row-full clearfix">
    <img class="right small-12 large-6 columns" src="<?php bloginfo('template_directory'); ?>/assets/images/boys-jumping.jpg">
    <div class="small-12 large-4 columns content left small-text-center large-text-left">
        <h1>Hmmm...
            Travel The World Before High School...
            Or Play Football After School?</h1>
        <h5>Decisions. Decisions.</h5>
        <p>It is remarkable to consider that only boys possess this extraordinary gift, but perhaps even more remarkable when one considers that they possess it only briefly. For a narrow window of time, a boy’s voice can be harnessed to uplift those who hear it and enhance the life of him who possesses it.</p>
    </div>
</div>

<?php get_footer(); ?>




