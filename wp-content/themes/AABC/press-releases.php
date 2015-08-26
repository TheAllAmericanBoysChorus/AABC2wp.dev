<?php

// Template Name: Press Releases

get_header();
?>

<?php get_template_part( 'calendar-header' ); ?>

<div class="row">
    <div class="small-12 medium-10 large-7 small-centered text-center columns main-title">
        <h1>Press Releases</h1>
    </div>
</div>


<?php

$args = array(
    'post_type' => 'press release',
);

$the_query = new WP_Query( $args );

?>


<div class="row">
    <div class="small-12 large-8 columns right general-content-right">
        <?php if( have_posts() ) : ?>
            <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="blog-post">

                    <h1><?php the_title(); ?></h1>

                    <div class="blog-post-details"><?php the_date(); ?></div>

                    <?php the_content(); ?>
                </div>
                <hr />
            <?php endwhile;
        else :
        endif;
        ?>
    </div>

    <div class="small-12 large-4 columns left sidebar-left">
        <?php dynamic_sidebar('calendar-sidebar'); ?>
    </div>
</div>

<?php get_footer(); ?>




