<?php

// Template Name: Season Sponsorship

get_header();
?>

<?php include( get_template_directory() . '/headers/season-sponsorship-header.php'); ?>

<div class="row">
    <div class="small-12 medium-10 large-7 small-centered text-center columns main-title">
        <h1>It’s Time To Sing Your Song.</h1>
        <h5>Be A Part Of A World Class Organization That Gives Back.</h5>
    </div>
</div>

<div class="row clearfix season-sponsorship">
	<div class="small-12 medium-10 large-8 columns large-centered">
        <?php dynamic_sidebar('season-sponsor-info-1'); ?>
    </div>
</div>

<div class="row-full sponsor-levels-grid clearfix blue-bg">

	<div class="text-center small-12 columns">
		<h1 class="season-sponsor-section-title">Season Sponsor Levels</h1>
	</div>

	<div class="small-12 medium-3 large-2 medium-offset-1 columns sponsorship-unit text-center accolades-sponsor">
		<div class="level-amount">$5,000</div>
		<h1>Accolades Sponsor</h1>
		<ul class="level-list text-left">
			<li>Recognition in all promotion material (50,000)</li>
			<li>Sponsorship mention in all social media posts</li>
			<li>Mention in concert media releases</li>
			<li>Recognition on the Chorus website</li>
			<li>Mention in all donor mailings (15,000)</li>
			<li>Recognition in all newsletters (1,500)</li>
			<li>1/2 page ad in all event programs (2,000)</li>
			<li>Special seating at each of the season events: 4 tickets Holiday Concert, 4 tickets Summer Concert.</li>
			<div class="text-center">
				<button class="sponsor-button">Sponsor The Chorus</button>
			</div>
		</ul>
	</div>

	<div class="small-12 medium-3 large-2 columns sponsorship-unit text-center applause-sponsor">
		<div class="level-amount">$10,000</div>
		<h1>Applause Sponsor</h1>
		<ul class="level-list text-left">
			<li>Live mention of sponsorship from stage at concerts</li>
			<li>Recognition in all promotion material (50,000)</li>
			<li>Sponsorship mention in all social media posts</li>
			<li>Mention in concert media releases</li>
			<li>Recognition on the Chorus website</li>
			<li>Mention in all donor mailings (15,000)</li>
			<li>Recognition in all newsletters (1,500)</li>
			<li>1/2 page ad in all event programs (2,000)</li>
			<li>2 tickets for special hosted VIP and media reception</li>
			<li>Special seating at each of the season events: 6 tickets Holiday Concert, 6 tickets</li>
			<div class="text-center">
				<button class="sponsor-button">Sponsor The Chorus</button>
			</div>
		</ul>
	</div>

	<div class="small-12 medium-3 large-2 columns sponsorship-unit text-center encore-sponsor">
		<div class="level-amount">$50,000</div>
		<h1>Encore</h1>
		<ul class="level-list large-text-left">
			<li>Chorus bus branded with your company’s name and logo</li>
			<li>Private 45 minute concert by the All-American Boys Chorus Chamber Choir</li>
			<li>Guest conductor at the Chorus’ Holiday Concert</li>
			<li>Live mention of sponsorship from stage at concerts</li>
			<li>Recognition in all promotion material (50,000)</li>
			<li>Sponsorship mention in all social media posts</li>
			<li>Mention in concert media releases</li>
			<li>Recognition on the Chorus website</li>
			<li>Mention in all donor mailings (15,000)</li>
			<li>Recognition in all newsletters (1,500)</li>
			<li>Full page ad in the inside front cover of event programs (2,000)</li>
			<li>10 tickets for special hosted VIP and media reception</li>
			<li>Special seating at each of the season events: 20 Tickets Holiday Concert, 20 tickets Summer Concert.</li>
			<div class="text-center">
				<button class="sponsor-button">Sponsor The Chorus</button>
			</div>

		</ul>
	</div>





	<div class="small-12 medium-5 large-2 columns sponsorship-unit text-center standing-ovation-sponsor">
		<div class="level-amount">$25,000</div>
		<h1>Standing Ovation</h1>
		<ul class="level-list text-left">
			<li>Private 45 minute concert by the All-American Boys Chorus Chamber Choir</li>
			<li>Guest conductor at the Chorus’ Holiday Concert</li>
			<li>Live mention of sponsorship from stage at concerts</li>
			<li>Recognition in all promotion material (50,000)</li>
			<li>Sponsorship mention in all social media posts</li>
			<li>Mention in concert media releases</li>
			<li>Recognition on the Chorus website</li>
			<li>Mention in all donor mailings (15,000)</li>
			<li>Recognition in all newsletters (1,500)</li>
			<li>Full page ad in the inside front cover of event programs (2,000)</li>
			<li>5 tickets for special hosted VIP and media reception</li>
			<li>Special seating at each of the season events: 10 Tickets Holiday Concert, 10 tickets Summer Concert.</li>
			<div class="text-center">
				<button class="sponsor-button">Sponsor The Chorus</button>
			</div>
		</ul>
	</div>

	<div class="small-12 medium-5 large-2 end columns sponsorship-unit text-center kudos-sponsor">
		<div class="level-amount">$2,500</div>
		<h1>Kudos Sponsor</h1>
		<ul class="level-list text-left">
			<li>Recognition on the Chorus website</li>
			<li>Mention in all donor mailings (15,000)</li>
			<li>Recognition in all newsletters (1,500)</li>
			<li>1/4 page ad in all event programs (2,000)</li>
			<li>Special seating at each of the season events: 2 tickets Holiday Concert, 2 tickets Summer Concert.</li>
			<div class="text-center">
				<button class="sponsor-button">Sponsor The Chorus</button>
			</div>
		</ul>
	</div>

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

<?php get_footer(); ?>
