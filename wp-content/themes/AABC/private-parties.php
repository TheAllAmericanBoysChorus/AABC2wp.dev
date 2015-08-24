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

<div class="blue-bg">
    <div class="row">
        <div class="small-12 columns text-center small-centered">
            <h1>What Others Are Saying!</h1>
        </div>
        <div class="small-5 left">
            <p class="quote">“Thank you for your hard work on our KFC commercial. The footage looks and sounds fabulous. We could not be more pleased!”</p>
            <p class="quote-person">– Dektor Higgins and Associates</p>
        </div>
        <div class="small-5 right">
            <p class="quote">“I have absolutely loved working with Wes Martin and The All-American Boys Chorus. Just putting their beautiful tone on top of a more choral sound for Vocal Point seems to fit really well.”</p>
            <p class="quote-person">– Mckay Crockett, Director BYU Vocal Point</p>
        </div>
    </div>
</div>

<?php get_footer(); ?>




