<?php
// Template Name: Book Us Page
?>

<?php get_header(); ?>

<?php include( get_template_directory() . '/headers/book-us-header.php'); ?>

<div class="row create-buzz">
    <div class="small-12 medium-10 large-8 small-centered text-center columns">
        <?php dynamic_sidebar( 'book-us-1' ) ?>
    </div>
</div>

<div class="book-us-options">
    <div class="book-us-option-wedding">
        <a href="<?php echo site_url();?>/weddings"><button class="book-us-option-btn">Weddings</button></a>
    </div>
    <div class="book-us-option-film">
        <a href="<?php echo site_url();?>/film"><button class="book-us-option-btn">Film</button></a>
    </div>
    <div class="book-us-option-private-parties">
        <a href="<?php echo site_url();?>/private-parties"><button class="book-us-option-btn">Private Parties</button></a>
    </div>
    <div class="book-us-option-holiday-events">
        <a href="<?php echo site_url();?>/holiday-events"><button class="book-us-option-btn">Holiday Events</button></a>
    </div>
    <div class="book-us-option-recording">
        <a href="<?php echo site_url();?>/recordings"><button class="book-us-option-btn">Recordings</button></a>
    </div>
    <div class="book-us-option-presenters">
        <a href="<?php echo site_url();?>/presenters"><button class="book-us-option-btn">Presenters</button></a>
    </div>
</div>

<div class="row-full info-right clearfix">
    <img class="left small-12 large-6 columns" src="<?php bloginfo( 'template_directory' )?>/assets/images/concert-1.jpg">
    <div class="small-12 medium-7 large-4 columns content left small-text-center medium-text-center large-text-left">
        <h1>Offer Your Audiences A Unique Sensory Experience</h1>
        <h5>But Advise Them To Wear Comfortable Shoes</h5>
        <p>For those seeking to offer a magical entertainment experience for their special event The All-American Boys Chorus is America’s quintessential and most internationally acclaimed contemporary boys choir that offers a professional repertoire of over 100 arrangements for almost any venue size so you can choose your genre, add prestige to your event and give your audience a performance to remember.</p>
    </div>
</div>

<?php

$args = array(
    'post_type' => 'testimonial',
    'orderby' => 'rand'
);

$the_query = new WP_Query( $args );

?>

<div class="blue-bg">
    <h1 class="testimonial-headline">What Our Fans Are Saying</h1>
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
    <img class="right small-12 large-6 columns" src="<?php bloginfo( 'template_directory' )?>/assets/images/performing-2.jpg">
    <div class="small-11 large-4 columns content left small-text-center medium-text-center large-text-left">
        <h1>Thrill Your Audience With Unique Arrangements And Stage Costumes</h1>
        <h5>Not To Mention The Pure Angelic Sounds From World-Class Choristers.</h5>
        <p>Over the years The All-American Boys Chorus has prided itself on being efficient enough to keep our performances easy on our presenters while still keeping our concerts engaging, fun, and dynamic for our audience.</p>
    </div>
</div>

<div class="row-full info-right clearfix">
    <img class="left small-12 large-6 columns" src="<?php bloginfo( 'template_directory' )?>/assets/images/performing-3.jpg">
    <div class="small-11 large-4 columns content left small-text-center medium-text-center large-text-left">
        <h1>We Offer A Professional Repertoire Of Over 40 Arrangements For Almost Any Venue Size Or Occasion.</h1>
        <h5>We’ll Even Bring Sound And Lighting.</h5>
        <p>Our concerts are true visits; with the boys always on hand to greet and meet the audience in the theatre lobby following the concert.The combination of the boys’ charm and professionalism is heartwarming, irresistible and fun!</p>
    </div>
</div>

<?php get_footer(); ?>
