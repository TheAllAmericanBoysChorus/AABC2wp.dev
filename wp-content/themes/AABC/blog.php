<?php

// Template Name: Blog Page

get_header();
?>

<?php get_template_part( 'calendar-header' ); ?>

<div class="row">
    <div class="small-12 medium-10 large-7 small-centered text-center columns main-title">
        <h1>The Official AABC Blog</h1>
        <h5>Look Around And See What We Are Talking About!</h5>
    </div>
</div>

<div class="row-full clearfix">
        <?php dynamic_sidebar('blog-sidebar'); ?>
</div>

<?php get_footer(); ?>




