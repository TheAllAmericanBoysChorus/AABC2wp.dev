<?php
// Template Name: Donate Page
?>

<?php get_header(); ?>

<?php get_template_part( 'donate-header' ); ?>

<div class="row-full info-right clearfix">
    <img class="left small-12 large-6 columns" src="<?php bloginfo( 'template_directory' )?>/assets/images/3-boys.jpg">
    <div class="small-11 medium-10 large-4 columns content left small-text-center medium-text-center large-text-left">
        <h1>It’s Time To Sing Your Song</h1>
        <h5>Be A Part Of A World-Class Organization That Gives Back.</h5>
        <p>Each year the AABC must conduct a fundraising and Season Sponsorship campaigns to fill the gap between total annual expenses and the revenue realized from tuition, ticket sales, performance fees, and other earned income.  This season, AABC must raise $180,000 (25% of its 2014 operating budget).</p>
    </div>
</div>

<div class="blue-bg">
    <div class="row">
        <div class="small-12 text-center columns">
            <h1>How You Can Support The AABC</h1>
        </div>
    </div>
    <div class="row donate">
        <div class="small-12 medium-6 large-3 columns text-center donate-option">
            <h2>Cash Donations</h2>
            <p>You can make a meaningful difference in the lives of children by making a sustaining, tax-deductible gift to the AABC today.</p>
            <a href="#"><button class="donate-btn">Donate</button></a>
        </div>
        <div class="small-12 medium-6 large-3 columns text-center donate-option">
            <h2>Gifts of Stock</h2>
            <p>Contact the AABC for instructions.</p>
            <a href="#"><button class="donate-btn">Donate</button></a>
        </div>
        <div class="small-12 medium-6 large-3 columns text-center donate-option">
            <h2>Planned Giving</h2>
            <p>Designate the AABC as the beneficiary of a life insurance policy, retirement plan, or living trust.</p>
            <a href="#"><button class="donate-btn">Donate</button></a>
        </div>
        <div class="small-12 medium-6 large-3 columns text-center donate-option">
            <h2>Vehicle Donation</h2>
            <p>roceeds from the sale of your donated vehicle can support the Chorus. Help our program and receive a valid tax-deductible receipt for the full market value of your vehicle. </p>
            <a href="#"><button class="donate-btn">Donate</button></a>
        </div>
    </div>
</div>

<div class="about-us-cta">
    <div class="row">
        <div class="small-12 small-centered columns text-center">
            <h1> All donations are tax deductible to the fullest extent of the law. AABC is a 501(c)(3) nonprofit organization. Tax ID number: 23-7376151.</h1>
            <a href="<?php echo site_url(); ?>/contact-us"><button class="red-cta">Donate</button>
        </div>
    </div>
</div>

<?php get_footer(); ?>




