<?php
// Template Name: General Template (Basic Page)
?>

<?php get_header(); ?>

<?php include( get_template_directory() . '/headers/donate-header.php'); ?>

<div class="row">
    <div class="small-12 large-7 columns general-content-left">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

           <h1><?php the_title(); ?></h1>

            <?php the_content(); ?>

        <?php

            $images = get_field('gallery');

            if( $images ): ?>
                <div class="basic-gallery">
                    <?php foreach ( $images as $image ): ?>
                        <div class="gallery-cell">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

        <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

    </div>

    <div class="small-12 large-4 columns right sidebar-right fall-gala-sidebar" style="margin-top: 4rem;">
        <?php dynamic_sidebar('fall-gala-sidebar'); ?>
    </div>
</div>


<?php get_footer(); ?>
