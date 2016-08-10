<?php
// Template Name: Accolades
?>

<?php get_header(); ?>

<?php include( get_template_directory() . '/headers/accolades-header.php'); ?>

<div class="accolades row">
    <div class="small-12 medium-12 large-10 columns text-center large-centered">
        <h1>Accolades</h1>
        <p>We acknowledge and thank the following foundations, companies and individuals who provided significant program and operating support and sponsorship to The All-American Boys Chorus from 2013 to 2016</p>
    </div>
    <ul class="accolades-list small-12 large-4 columns small-text-center large-text-left">
        <li>Wendy and Tom Ahlering</li>
        <li>Angels Baseball Foundation</li>
        <li>Julia and George Argyros</li>
        <li>Bank of America</li>
        <li>Barbara and Russell Bell</li>
        <li>John and Donna Crean Foundation</li>
        <li>Vien and Tom Courtney</li>
        <li>Cathy and Roger Dale</li>
        <li>Bill Gilbert and the Langdale Company</li>
    </ul>
    <ul class="accolades-list small-12 large-4 columns small-text-center large-text-left">
        <li>George Hoag Family Foundation</li>
        <li>Jeff and Susan Hamar</li>
        <li>Diana and Michael Hoffman</li>
        <li>Lilian and John Kappos</li>
        <li>Lynn Krogh</li>
        <li>Greg and Kathy May</li>
        <li>Lynn and Paul Multari</li>
    </ul>
    <ul class="accolades-list small-12 large-3 columns small-text-center large-text-left">
        <li>Rita and Bob Pipta</li>
        <li>Pacific Life Foundation</li>
        <li>Michele and John Page</li>
        <li>Diana and Bill Sanderson</li>
        <li>Glenn and Mindy Stearns</li>
        <li>The Charitable Foundation</li>
        <li>The Rose Hills Foundation</li>
        <li>U.S. Bank</li>
        <li>Wells Fargo Bank</li>
    <ul>
</div>
<?php

$args = array(
    'post_type' => 'seasonsponsor',
    'orderby' => 'rand',
    'posts_per_page' => '8'
);

$the_query = new WP_Query( $args );

?>

<div class="season-sponsors row-full">
    <div class="small-12 columns text-center">
        <h1>Our Season Sponsors</h1>
        <?php if( have_posts() ) : ?>
            <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <a href="#" ><img src="<?php the_field('logo'); ?>"/></a>
            <?php endwhile;
        else :
        endif;
        ?>
    </div>
</div>
    </div>
</div>

<?php get_footer(); ?>
