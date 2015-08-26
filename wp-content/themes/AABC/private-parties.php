<?php
// Template Name: Private Parties Page
?>

<?php get_header(); ?>

<?php get_template_part( 'private-parties-header' ); ?>

<div class="row-full info-right clearfix">
    <img class="left small-12 large-6 columns" src="<?php bloginfo( 'template_directory' )?>/assets/images/concert-2.jpg">
    <div class="small-12 medium-7 large-4 columns content left small-text-center medium-text-center large-text-left">
        <?php dynamic_sidebar( 'private-parties-1' ) ?>
    </div>
</div>

<?php get_footer(); ?>




