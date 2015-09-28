<?php
// Template Name: General Template (Basic Page)
?>

<?php get_header(); ?>

<?php get_template_part( 'donate-header' ); ?>

<div class="row">
    <div class="small-12 large-8 columns general-content-left">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
           <h1><?php the_title(); ?></h1>

            <?php the_content(); ?>

        <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

    </div>
</div>


<?php get_footer(); ?>




