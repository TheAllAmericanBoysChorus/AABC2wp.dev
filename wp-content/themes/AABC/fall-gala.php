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
		<a href="http://www.taabc.org/download/3581/"><button>Underwrite The Gala</button></a>
		<a href="http://www.taabc.org/download/3576/"><button>Donate Auction Items</button></a>
		<a href="https://my.bidpal.net/taabcgala16" target="_blank"><button>Purchase Gala Tickets</button>
		<a href="https://my.bidpal.net/taabcgala16"><button>Bid In Online Auction<br/></button></a>
	</div>

    <div class="small-12 large-8 columns text-center large-centered">
        <?php dynamic_sidebar('fall-gala-main-content'); ?>
    </div>

    <div class="small-12 large-4 columns right sidebar-right fall-gala-sidebar">
        <?php dynamic_sidebar('fall-gala-sidebar'); ?>
    </div>
</div>


<?php get_footer(); ?>
