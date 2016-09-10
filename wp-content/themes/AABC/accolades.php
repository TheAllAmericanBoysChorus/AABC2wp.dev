<?php
// Template Name: Accolades
?>

<?php get_header(); ?>

<?php get_template_part( 'accolades-header' ); ?>

<div class="accolades row">
    <div class="small-12 medium-12 large-10 columns text-center large-centered">
        <h1>Accolades</h1>
        <p>We acknowledge and thank the following foundations, companies and individuals who provided significant program and operating support and sponsorship to The All-American Boys Chorus from 2012 to 2015</p>
    </div>
    <ul class="accolades-list small-12 large-4 columns small-text-center large-text-left">
        <li>Julia and George Argyros</li>
        <li>Bank of America</li>
        <li>Barbara and Russell Bell</li>
        <li>R.G. Canning</li>
        <li>Charitable Foundation</li>
        <li>Vien and Tom Courtney</li>
        <li>Crean Foundation</li>
        <li>Cushman Wakefield</li>
    </ul>
    <ul class="accolades-list small-12 large-4 columns small-text-center large-text-left">
        <li>Bill Gilbert and the Langdale Company</li>
        <li>George Hoag Family Foundation</li>
        <li>Lilian and John Kappos</li>
        <li>Lynn Krogh</li>
        <li>Lynn and Paul Multari</li>
        <li>Huey Yann Ooi</li>
        <li>Pacific Life Foundation</li>
        <li>Michele and John Page</li>

    </ul>
    <ul class="accolades-list small-12 large-3 columns small-text-center large-text-left">
        <li>Robinson Foundation</li>
        <li>Diana and Bill Sanderson</li>
        <li>SunTrust Bank</li>
        <li>Charles & Kathy Tarrant</li>
        <li>Larry Whiting & Val Hongo-Whiting</li>
        <li>U.S. Bank</li>
        <li>Wells Fargo Bank</li>
    <ul>
</div>


Charitable Foundation
Vien and Tom Courtney
Crean Foundation
Cushman &amp; Wakefield
Bill Gilbert and the Langdale Company
George Hoag Family Foundation
Lilian and John Kappos
Lynn Krogh
Lynn and Paul Multari
Huey Yann Ooi
Pacific Life Foundation
Michele and John Page
Rita and Bob Pipta
Robinson Foundation
Diana and Bill Sanderson
Suntrust Bank
Charles and Kathy Tarrant
Larry Whiting and Val Hongo-Whiting
U.S. Bank
Wells Fargo Bank


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




