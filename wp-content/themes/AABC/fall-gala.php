<?php
// Template Name: Fall Gala
?>

<?php get_header(); ?>

<?php get_template_part( 'fall-gala-header' ); ?>

<div class="row">
	<div class="text-center small-12 columns main-title">
		<h1><?php echo get_the_title(); ?> </h1>
	</div>

	<div class="small-12 large-centered columns text-center fall-gala-btn-row">
		<a href="<?php echo site_url();?>/uploads/dlm_uploads/2015/05/NewYorkNewYork_Underwritting_Packet_web.pdf"><button>Underwrite The Gala</button></a>
		<a href="<?php echo site_url();?>/uploads/dlm_uploads/2015/05/NewYorkNewYork_Auction_Donation_Packet_web.pdf"><button>Donate Auction Items</button></a>
		<a href="https://portal11.bidpal.net/Portal/bpe293867/main/home.html"><button>Purchase Gala Tickets</button>
		<a href="#"><button>Bid In Online Auction<br/><em>(Opens October 7)</em></button></a>
	</div>

    <div class="small-12 large-8 columns left general-content-right">
        <?php dynamic_sidebar('fall-gala-main-content'); ?>
    </div>

    <div class="small-12 large-4 columns right sidebar-right fall-gala-sidebar">
        <?php dynamic_sidebar('fall-gala-sidebar'); ?>
    </div>
</div>


<?php get_footer(); ?>




