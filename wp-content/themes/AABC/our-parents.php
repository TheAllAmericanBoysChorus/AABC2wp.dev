<?php

// Template Name: Our Parents Page

get_header();

?>

<?php get_template_part( 'our-parents-header' ); ?>

<div class="row">
    <div class="small-12 medium-8 large-12 columns text-center small-centered main-title">
        <h1>Our Parents</h1>
    </div>
</div>

<?php

$args = array(
    'post_type' => 'calendar',
);

$the_query = new WP_Query( $args );

?>


<div class="row">
    <div class="small-12 large-8 columns right general-content-right">
        <?php dynamic_sidebar('our-parents-right'); ?>
    </div>

    <div class="small-12 large-4 columns left sidebar-left">
        <?php dynamic_sidebar('our-parents-sidebar'); ?>
    </div>
</div>

<?php get_footer(); ?>




