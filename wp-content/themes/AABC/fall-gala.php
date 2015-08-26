<?php
// Template Name: Fall Gala
?>

<?php get_header(); ?>

<?php get_template_part( 'weddings-header' ); ?>

<div class="row">
	<div class="text-center small-12 columns main-title">
		<h1><?php echo get_the_title(); ?> </h1>
	</div>

	<div class="small-12 large-centered columns text-center fall-gala-btn-row">
		<button>Underwrite The Gala</button>
		<button>Donate Auction Items</button>
		<button>Purchase Gala Tickets</button>
		<button>Bid In Online Auction</button>
	</div>

    <div class="small-12 large-8 columns right general-content-right">
        <?php dynamic_sidebar('fall-gala-main-content'); ?>
    </div>

    <div class="small-12 large-4 columns left sidebar-left fall-gala-sidebar">
        <?php dynamic_sidebar('fall-gala-sidebar'); ?>
    </div>
</div>


<?php get_footer(); ?>




