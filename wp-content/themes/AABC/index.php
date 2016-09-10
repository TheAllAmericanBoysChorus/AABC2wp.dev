<?php
/**
 * DEFAULT TEMPLATE
 *
 * This is the global default template. If WordPress can't find a more appropriate, specific template file,
 * it will use this one.
 */

?>
<?php get_header();?>


    <div id="container" class="row">
        <div id="content" class="small-12 large-8 columns">
            <?php get_template_part('parts/archive-nav') ?>
        </div>

        <div id="sidebar" class="small-12 large-4 columns">
            <?php dynamic_sidebar( 'sidebar-1' ) ?>
        </div>

    </div>
<?php get_footer();