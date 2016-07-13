<?php

// Template Name: Media Center

get_header();

?>

<?php include( get_template_directory() . '/headers/media-center-header.php'); ?>

<div class="row">
    <div class="small-12 medium-8 large-12 columns text-center small-centered main-title">
        <h1>Media Center</h1>
    </div>
</div>


<div class="row">
    <div class="small-12 large-8 columns right general-content-right">
        <?php dynamic_sidebar('media-center-right'); ?>
    </div>

    <div class="small-12 large-4 columns left sidebar-left">
        <?php dynamic_sidebar('media-center-sidebar'); ?>
    </div>
</div>

<?php get_footer(); ?>
