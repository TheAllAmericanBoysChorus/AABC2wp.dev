<?php
// Template Name: Accolades
?>

<?php get_header(); ?>

<?php get_template_part( 'about-us-header' ); ?>

<div class="accolades row">
    <div class="small-12 medium-12 large-10 columns text-center large-centered">
        <h1>Accolades</h1>
        <p>We acknowledge and thank the following foundations, companies and individuals who provided significant program and operating support and sponsorship to The All-American Boys Chorus from 2012 to 2015</p>
    </div>
    <ul class="accolades-list small-12 large-4 columns small-text-center large-text-left">
        <li>Angels Baseball Foundation</li>
        <li>Julia and George Argyros</li>
        <li>Bank of America</li>
        <li>Barbara and Russell Bell</li>
        <li>Boeing Company</li>
        <li>John and Donna Crean Foundation</li>
        <li>Vien and Tom Courtney</li>
        <li>Cathy and Roger Dale</li>
        <li>Edison International</li>
        <li>Bill Gilbert and the Langdale Company</li>
    </ul>
    <ul class="accolades-list small-12 large-4 columns small-text-center large-text-left">
        <li>George Hoag Family Foundation</li>
        <li>Gorfaine/Schwartz Agency</li>
        <li>Tracy and Scott Hughes</li>
        <li>The Foresters</li>
        <li>Lilian and John Kappos</li>
        <li>Jacqueline and Leighton Ko</li>
        <li>Lynn Krogh</li>
        <li>Hazel and Ivan Lin</li>
        <li>Lynn and Paul Multari</li>
        <li>Orange County Fair</li>
    </ul>
    <ul class="accolades-list small-12 large-3 columns small-text-center large-text-left">
        <li>Pacific Life Foundation</li>
        <li>Michele and John Page</li>
        <li>Robinson Foundation</li>
        <li>Diana and Bill Sanderson</li>
        <li>Glenn and Mindy Stearns</li>
        <li>The Charitable Foundation</li>
        <li>The Rose Hills Foundation</li>
        <li>Val Hongo-Whiting</li>
        <li>U.S. Bank</li>
        <li>Wells Fargo Bank</li>
        <li>Grace and Li Xu</li>
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




