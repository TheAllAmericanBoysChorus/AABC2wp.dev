<?php
// Template Name: Contact
?>

<?php get_header(); ?>

<?php include( get_template_directory() . '/headers/contact-header.php'); ?>

<div class="row">
    <div class="small-12 columns text-center contact-us">
    <h1><?php echo get_the_title(); ?> </h1>
        <img src="<?php bloginfo('template_directory')?>/assets/images/google-map.png">
    </div>

    <div class="small-12 columns contact-form">
        <?php dynamic_sidebar('contact-form'); ?>
    </div>
</div>


<?php get_footer(); ?>
