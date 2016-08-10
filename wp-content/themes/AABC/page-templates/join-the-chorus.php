<?php

// Template Name: Join The Chorus

?>
<?php get_header(); ?>

<?php include( get_template_directory() . '/headers/join-the-chorus-header.php'); ?>

<div class="row-full info-right clearfix">
    <img class="left small-12 large-6 columns" src="<?php bloginfo( 'template_directory' )?>/assets/images/3-boys.jpg">
    <div class="small-11 medium-7 large-4 large-push-1 small-centered columns content small-text-center medium-text-center large-text-left large-uncentered">
        <div class="buffer">
            <?php dynamic_sidebar( 'join-the-chorus-1' ) ?>
        </div>
    </div>
</div>

<div class="row-full clearfix">
    <img class="right small-12 large-6 columns" src="<?php bloginfo( 'template_directory' )?>/assets/images/rehearsal-1.jpg">
    <div class="small-11 medium-7 large-4 large-uncentered large-push-1 small-centered columns content small-text-center medium-text-center large-text-left">
        <div class="buffer">
            <?php dynamic_sidebar( 'join-the-chorus-2' ) ?>
        </div>
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
            'terms'    => 'parents',
        ),
    ),
);
$the_query = new WP_Query( $args );

?>



<div class="blue-bg">
  <h1 class="testimonial-headline">What Our Parents Are Saying</h1>
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
        <?php endwhile; ?>
      <?php else : ?>
      <?php endif; ?>
    </div>
</div>


<div class="row-full info-right clearfix">
    <img class="left small-12 large-6 columns" src="<?php bloginfo( 'template_directory' )?>/assets/images/clipper-game.jpg">
    <div class="small-11 medium-7 large-4 large-push-1 small-centered columns content small-text-center medium-text-center large-text-left large-uncentered">
        <div class="buffer">
            <?php dynamic_sidebar( 'join-the-chorus-3' ) ?>
        </div>
    </div>
</div>

<div class="about-us-info-right clearfix">
    <img class="right small-12 large-6 columns" src="<?php bloginfo( 'template_directory' )?>/assets/images/staff-2015.jpg">
    <div class="small-11 medium-7 large-4 large-uncentered large-push-1 small-centered columns content small-text-center medium-text-center large-text-left">
        <div class="buffer">
            <?php dynamic_sidebar( 'join-the-chorus-4' ) ?>
        </div>
    </div>
</div>

<div class="blue-bg">
    <div class="row music-magic text-center">
        <?php dynamic_sidebar('music-magic'); ?>
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
