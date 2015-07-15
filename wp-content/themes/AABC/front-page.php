
<?php
//Template Name: Home
?>
<?php get_header(); ?>

<?php get_template_part( 'home-header' ); ?>


<?php

$args = array(
    'post_type' => 'main_event_left',
);

$the_query = new WP_Query( $args );

?>


<div class="row event-cta">
    <div class="small-12 medium-6 large-5 columns">
        <div class="event-unit">
            <?php if( have_posts() ) : ?>
                <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <h1><?php the_field('title');?></h1>
                    <img src="<?php the_field('image');?>">
                    <a href="<?php the_field('button_link_url');?>"><button class="secondary-cta-btn"><?php the_field('button_text');?></button></a>
                <?php endwhile;
            else :

            endif;
            ?>
        </div>
    </div>

    <?php wp_reset_query(); ?>

    <?php

    $args = array(
        'post_type' => 'main_event_right',
    );

    $the_query = new WP_Query( $args );

    ?>


    <div class="small-12 medium-6 large-5 columns">
        <div class="event-unit">
            <?php if( have_posts() ) : ?>
            <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <h1><?php the_field('title');?></h1>
            <img src="<?php the_field('image');?>">
            <a href="<?php the_field('button_link_url');?>"><button class="secondary-cta-btn"><?php the_field('button_text');?></button></a>
                <?php endwhile;
            else : ?>
                <h1>Up Coming Events</h1>
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/module-box-1.jpg">
                <a href="www.taabc.org/calendar"><button class="secondary-cta-btn">View Calendar</button></a>
            <?php
            endif;
            ?>
        </div>
    </div>
</div>

<div class="info-section">
    <div class="row">
        <div class="small-11 large-7 small-centered columns text-center">
            <?php dynamic_sidebar( 'fp-info-1' ) ?>
        </div>
    </div>
</div>

<div class="book-us-cta">
    <div class="row">
        <div class="small-12 small-centered columns text-center">
            <h1>If We’re Having This Much Fun<br/>
                Imagine What We Can Do For You</h1>
            <a href="book-us.html"><button class="main-cta-btn">Book Us</button></a>
        </div>
    </div>
</div>

<div class="info-section">
    <div class="row">
        <div class="small-11 large-7 small-centered columns text-center">
            <?php dynamic_sidebar( 'fp-info-2' ) ?>
        </div>
    </div>
</div>

<?php wp_reset_query(); ?>

<?php

$args = array(
    'post_type' => 'testimonial',
    'orderby' => 'rand',
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field'    => 'slug',
            'terms'    => 'home',
        ),
    ),
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
    <div class="home-widget-left small-12 large-6 columns">
        <h1>Alumni Corner</h1>
    </div>
    <div class="home-widget-right small-12 large-6 columns">
        <h1>Upcoming Events</h1>
    </div>
</div>


<div class="contact-home">
    <div class="row">
        <div class="small-11 small-centered columns text-center">
            <h1>Travel The World, Make Great Friends, And Learn New Skills.</h1>
            <h2>Now THAT’s Worth Singing About.</h2>
        </div>
        <div class="small-11 large-7 small-centered columns">
            <form action="">
                <label for="name">Name</label>
                <input type="text" name="name">
                <label for="email">Email</label>
                <input type="text" name="email">
                <label for="message">Message</label>
                <textarea name="message"></textarea>
                <input type="submit" name="submit">

            </form>
        </div>
    </div>
</div>

<?php

$args = array(
    'post_type' => 'seasonsponsor',
    'orderby' => 'rand',
    'posts_per_page' => '8'
);

$the_query = new WP_Query( $args );

?>

<div class="season-sponsors row-full">
    <div class="small-12 columns text-center">
        <h1>Our Season Sponsors</h1>
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