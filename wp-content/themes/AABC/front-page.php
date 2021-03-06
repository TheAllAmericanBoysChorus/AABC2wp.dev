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

<div class="row-full event-cta">
    <div class="small-12 medium-6 large-6 columns">
        <div class="event-unit">
            <?php if( $the_query->have_posts() ) : ?>
                <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <h1><?php the_field('title');?></h1>
                    <div style="background: url('<?php the_field('image');?>'); background-size: cover; min-height: 550px; max-height: 550px; background-position: center;">

                      <a href="<?php the_field('button_link');?>">
                        <div class="black-bg">
                            <div class="event-info">
                                <h2><?php the_field( 'title' );?></h2>
                                <span class="date"><?php the_field( 'date' );?></span><br/>
                                <span class="location"><?php the_field( 'location' );?></span><br/>
                                <span class="address"><?php the_field( 'address' );?></span><br/>
                                <a href="<?php the_field('button_link');?>"><button class="event-unit-btn"><?php the_field('button_text');?></button></a>
                            </div>
                        </div>
                      </a>


                    </div>

                <?php endwhile; else : ?>
                    <h1>The Blog</h1>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/ferry-ride.jpg">
                    <a href="<?php echo site_url();?>/blog"><button class="secondary-cta-btn">View Posts</button></a>
            <?php endif; ?>

        </div>
    </div>

    <?php wp_reset_query(); ?>

    <?php

    $args = array(
        'post_type' => 'main_event_right',
    );

    $the_query = new WP_Query( $args );

    ?>


    <div class="small-12 medium-6 large-6 columns">
        <div class="event-unit">
            <?php if( $the_query->have_posts() ) : ?>
            <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <h1><?php the_field('title');?></h1>
                <div style="background: url('<?php the_field('image');?>'); background-size: cover; min-height: 550px; max-height: 550px; background-position: center;">

                  <a href="<?php the_field('button_link');?>">
                    <div class="black-bg">
                        <div class="event-info">
                            <h2><?php the_field( 'title' );?></h2>
                            <span class="date"><?php the_field( 'date' );?></span><br/>
                            <span class="location"><?php the_field( 'location' );?></span><br/>
                            <span class="address"><?php the_field( 'address' );?></span><br/>
                            <a href="<?php the_field('button_link');?>"><button class="event-unit-btn"><?php the_field('button_text');?></button></a>
                        </div>
                    </div>
                  </a>


                </div>
              <!-- <?php if(get_field('title') == 'Jog-A-Thon') :?>
                <div style="position: absolute; top: 55%; left: 50%; -webkit-transform: translate(-50%, -50%); -ms-transform: translate(-50%, -50%); transform: translate(-50%, -50%);">
                <?php the_field('jog_a_thon_link');?>
              </div>
              <?php else : ?> -->

            <?php endif; ?>
                <?php endwhile; else : ?>
                <h1>Up Coming Events</h1>
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/bus.jpg">
                <a href="<?php echo site_url();?>/calendar"><button class="secondary-cta-btn">View Events</button></a>
            <?php endif; ?>
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
            <a href="<?php echo site_url();?>/book-us-3"><button class="main-cta-btn">Book Us</button></a>
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

<?php

$args = array(
    'post_type' => 'calendar',
    'posts_per_page' => '3'
);

$the_query = new WP_Query( $args );

?>

<div class="row-full">
    <div class="small-12 columns text-center">
        <h1 class="upcoming-events-headline">Upcoming Events</h1>
    </div>
    <div class="small-12 columns">
        <div class="upcoming-events-home">
            <?php if( have_posts() ) : ?>
                <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="large-4 small-12 medium-4 columns">
                        <div class="calendar-event-bg" style="background:url(<?php the_field('featured_image')?>); background-size: cover; background-position: center;">
                            <div class="black-bg">
                                <div class="event-info">
                                    <h2><?php the_field( 'title' );?></h2>
                                    <span class="event-category"><?php the_field( 'event_category' );?></span><br/>
                                    <span class="date"><?php the_field( 'date' );?></span><br/>
                                    <span class="time"><?php the_field( 'time' );?></span><br/>
                                    <span class="location"><?php the_field( 'location' );?></span><br/>
                                    <span class="address"><?php the_field( 'address' );?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

                <?php else : ?>

            <?php endif; ?>
            </ul>
        </div>
    </div>
</div>

<div class="row-full clearfix alumni-upcoming">
    <a href="<?php echo site_url();?>/alumni-corner">
        <div class="home-widget-left small-12 large-6 columns">
          <div class="black-bg">
            <h1>Alumni Corner</h1>
          </div>
        </div>
    </a>
    <a href="<?php echo site_url();?>/calendar">
        <div class="home-widget-right small-12 large-6 columns">
          <div class="black-bg">
            <h1>Upcoming Events</h1>
          </div>
        </div>
    </a>
</div>


<div class="contact-home">
    <div class="row">
        <div class="small-11 small-centered columns text-center">
            <h1>Travel The World, Make Great Friends, And Learn New Skills.</h1>
            <h2>Now THAT’s Worth Singing About.</h2>
        </div>
        <div class="small-11 large-7 small-centered columns">
           <?php dynamic_sidebar('fp-contact-form'); ?>
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
