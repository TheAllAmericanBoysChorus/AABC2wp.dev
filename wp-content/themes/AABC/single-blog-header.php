<header>
    <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

    <div style="background: url(<?php echo $featuredImage ?>);
        width: 100%;
        background-size: cover;
        height: 700px;
        background-position: center;"
         class="main-cta-bg-single-blog">
        <div class="blue-overlay"></div>
    </div>

    <div class="head">
        <div class="row clearfix logo-sm-container">
            <div class="logo large-4 medium-6 small-12 columns small-centered small-text-center large-text-left medium-text-left medium-uncentered large-uncentered">
                <a href="<?php get_site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo-white.png"/></a>
            </div>
            <div class="social-media-icons small-12 medium-6 large-7 columns">
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
                    <h1><?php the_title();?></h1>
                </div>
            </div>
        </div>
    </div>
</header>