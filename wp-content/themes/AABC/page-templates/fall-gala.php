<?php
// Template Name: Fall Gala
?>

<?php get_header(); ?>

<?php include( get_template_directory() . '/headers/fall-gala-header.php'); ?>

<div class="row">
	<div class="text-center small-12 columns main-title">
		<h1><?php echo get_the_title(); ?> </h1>
	</div>

	<div class="small-12 large-centered columns text-center fall-gala-btn-row">
		<a href="http://www.taabc.org/download/2165/"><button>Underwrite The Gala</button></a>
		<a href="http://www.taabc.org/download/2168/"><button>Donate Auction Items</button></a>
		<a href="#" target="_blank"><button>Purchase Gala Tickets<br/>(On Sale Sept. 1)</button>
		<a href="http://www.bidpal.net/taabc"><button>Bid In Online Auction<br/>(Coming Soon)</button></a>
	</div>

    <div class="small-12 large-8 columns left general-content-right">
        <?php dynamic_sidebar('fall-gala-main-content'); ?>
    </div>

    <div class="small-12 large-4 columns right sidebar-right fall-gala-sidebar">
        <?php dynamic_sidebar('fall-gala-sidebar'); ?>
    </div>
</div>


<?php get_footer(); ?>
