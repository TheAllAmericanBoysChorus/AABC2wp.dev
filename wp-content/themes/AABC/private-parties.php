<?php
// Template Name: Private Parties Page
?>

<?php get_header(); ?>

<?php get_template_part( 'private-parties-header' ); ?>

<div class="row-full info-right clearfix">
    <img class="left small-12 large-6 columns" src="<?php bloginfo( 'template_directory' )?>/assets/images/concert-2.jpg">
    <div class="small-11 medium-7 large-4 large-push-1 small-centered columns content small-text-center medium-text-center large-text-left large-uncentered">
        <?php dynamic_sidebar( 'private-parties-1' ) ?>
    </div>
</div>

<?php get_footer(); ?>
