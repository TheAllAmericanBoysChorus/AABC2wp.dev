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

<div class="row-full info-right clearfix">
    <img class="left small-12 large-6 columns" src="<?php bloginfo( 'template_directory' )?>/assets/images/recording-1.jpg">
    <div class="small-12 medium-7 large-4 columns content left small-text-center medium-text-center large-text-left">
        <h1>Beautiful Choral Sound For Your Next Project</h1>
        <h5>Perfect For Video & Recordings</h5>
        <p>The All-American Boys Chorus, America’s quintessential professional boys chorus, has delighted viewers worldwide for over forty years. Based in Costa Mesa, California. the Chorus is comprised of over 100 boys ages 8 – 15 drawn from throughout Southern California. We are the perfect youth choral group for your next video or recording. Under the leadership of Artistic Director Wesley Martin, a veteran of Hungary’s renowned Kodaly Institute, the Chorus will provide you with sound ranging from angelic to the latest pop.</p>
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

<?php

$args = array(
    'post_type' => 'client logo',
    'orderby' => 'rand',
    'posts_per_page' => '8'
);

$the_query = new WP_Query( $args );

?>

<div class="season-sponsors row-full">
    <div class="small-12 columns text-center">
        <h1>Some Of Our Past Clients</h1>
        <?php if( have_posts() ) : ?>
            <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <a href="#" ><img src="<?php the_field('logo'); ?>"/></a>
            <?php endwhile;
        else :
        endif;
        ?>
    </div>
</div>





<?php get_footer(); ?>




