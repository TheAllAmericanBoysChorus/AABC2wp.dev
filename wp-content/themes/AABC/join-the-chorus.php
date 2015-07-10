<?php

// Template Name: Join The Chorus

?>
<?php get_header(); ?>

<?php get_template_part( 'join-the-chorus-header' ); ?>

<div class="row-full info-right clearfix">
    <img class="left small-12 large-6 columns" src="<?php bloginfo( 'template_directory' )?>/assets/images/3-boys.jpg">
    <div class="small-12 medium-7 large-4 columns content left small-text-center medium-text-center large-text-left">
        <?php dynamic_sidebar( 'join-the-chorus-1' ) ?>
    </div>
</div>

<!--<div class="travel-map">-->
<!--    <div class="row">-->
<!--        <div class="small-12 text-center columns">-->
<!--            <h1>Travel The World, Make Great Friends, And Learn New Skills.</h1>-->
<!--            <h2>Now THAT’s Worth Singing About.</h2>-->
<!--            <a href="#"><button>Join Today</button></a>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<div class="row-full clearfix">
    <img class="right small-12 large-6 columns"src="<?php bloginfo( 'template_directory' )?>/assets/images/rehearsal-1.jpg">
    <div class="small-11 large-4 columns content left small-text-center medium-text-center large-text-left">
        <?php dynamic_sidebar( 'join-the-chorus-2' ) ?>
    </div>
</div>
</div>

<div class="blue-bg">
    <div class="row">
        <div class="small-12 columns text-center small-centered">
            <h1>What Our Parents Are Saying</h1>
        </div>
        <div class="small-5 left">
            <p class="quote">Our son … has obtained significant and enduring personal benefits. The Chorus’ instruction in self-discipline … good personal habits, succeeding in school, setting goals, exercising leadership skills, respecting adults, practicing religion, and being independent has been invaluable.”</p>
            <p class="quote-person">– Carol and Larry Jones, Parents</p>
        </div>
        <div class="small-5 right">
            <p class="quote">“The All-American Boys Chorus has given both my boys an unequaled educational experience. I will forever be grateful to the Chorus for its help in molding my boys into men.”</p>
            <p class="quote-person">– Denny Lynn Engelke, Parent of Chorus Alumni</p>
        </div>
    </div>
</div>

<div class="row-full info-right clearfix">
    <img class="left small-12 large-6 columns" src="<?php bloginfo( 'template_directory' )?>/assets/images/clipper-game.jpg">
    <div class="small-12 large-4 columns content left small-centered">
        <h1>How Cool Are We?</h1>
        <h5>We Have The Power To Make People Cry.</h5>
        <p>The Concert Chorus performs 30+ concerts per year in Southern California for a wide range of clients and for diverse audiences in varied venues and settings (e.g., country clubs, concert halls, sacred spaces, stadiums, amphitheaters) for private, corporate and civic events.</p>
    </div>
</div>

<div class="about-us-info-right clearfix">
    <div class="image-right">
        <img src="<?php bloginfo( 'template_directory' )?>/assets/images/staff-1.jpg">
    </div>
    <div class="content-left">
        <div class="content">
            <h1>Our Staff Are Youth Protection Trained.</h1>
            <h5>A Testament To Our Phenomenal Leadership Commitment.</h5>
            <p>The Concert Chorus performs 30+ concerts per year in Southern California for a wide range of clients and for diverse audiences in varied venues and settings (e.g., country clubs, concert halls, sacred spaces, stadiums, amphitheaters) for private, corporate and civic events.</p>
        </div>
    </div>
</div>

<?php get_footer(); ?>




