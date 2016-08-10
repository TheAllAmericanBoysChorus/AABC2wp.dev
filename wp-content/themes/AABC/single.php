<?php
/**
 * SINGLE BLOG POSTS
 *
 * This is the template for single, full-page blog posts.
 */
get_header();
?>

<?php include( get_template_directory() . '/headers/single-blog-header.php'); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div id="container" class="row blog-content">
        <div class="small-12 large-8 columns right general-content-right">
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
        </div>
<?php endwhile; // end of the loop. ?>
        <div class="small-12 large-4 columns sidebar-left">
            <?php dynamic_sidebar( 'blog-single-sidebar' ) ?>
        </div>
    </div>
<?php get_footer();
