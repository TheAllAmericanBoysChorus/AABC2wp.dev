<header>
    <div class="main-cta-bg-home">
        <div class="row clearfix logo-sm-container">
            <div class="logo large-4 small-12 columns">
                <a href="<?php get_site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo-white.png"/></a>
            </div>
            <div class="social-media-icons small-12 large-7 columns">
                <ul class="right">
                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/images/facebook-icon-white.png"></a></li>
                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/images/twitter-icon-white.png"></a></li>
                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/images/instagram-icon-white.png"></a></li>
                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/images/youtube-icon-white.png"></a></li>
                </ul>
            </div>
        </div>

        <div class="contain-to-grid">
            <nav class="top-bar" data-topbar role="navigation">
                <ul class="title-area">
                    <li class="name"></li>
                    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                </ul>
                <section class="top-bar-section">
                    <?php display_nav_menu(); ?>
                </section>
            </nav><!-- .top-bar -->
        </div>

        <div class="main-cta">
            <div class="row">
                <div class="small-10 small-centered columns text-center">
                    <h1>Developing The Voices Of Young Boys</h1>
                    <h2>To Shape The Men Of The Future</h2>
                    <a href="<?php echo site_url();?>/join-a-boys-chorus"><button class="main-cta-btn">Join The Team!</button></a>
                </div>
            </div>
        </div>
    </div>
</header>