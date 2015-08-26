<?php

/**
 * Load Styles Into Theme
 */
function load_styles() {
    wp_enqueue_style( 'foundation', get_template_directory_uri() . '/assets/css/foundation/css/foundation.css' );
    wp_enqueue_style( 'flickity_css', 'https://cdnjs.cloudflare.com/ajax/libs/flickity/1.1.0/flickity.css' );
    wp_enqueue_style( 'custom-login', get_template_directory_uri() . 'assets/css/style-login.css' );
    wp_enqueue_style( 'app', get_template_directory_uri() . '/assets/css/app.css' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/foundation_js/vendor/jquery.js', array(), '1.0.0', true );
    wp_enqueue_script( 'foundation', get_template_directory_uri() . '/assets/js/foundation_js/foundation.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'flickity', 'https://cdnjs.cloudflare.com/ajax/libs/flickity/1.1.0/flickity.pkgd.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), '2.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'load_styles' );

/**
 * Load Scripts Into Theme
 */

register_nav_menu( 'primary', __('Primary Menu', 'nvLangScope' ));

 function display_nav_menu() {
    wp_nav_menu( array(
        'theme_location' => 'primary',
        'menu' => 'Primary Menu',
        'container' => false, // remove nav container
        'container_class' => '', // class of container
        'menu_class' => 'top-bar-menu left', // adding custom nav class
        'before' => '', // before each link <a>
        'after' => '', // after each link </a>
        'link_before' => '', // before each link text
        'link_after' => '', // after each link text
        'depth' => 5, // limit the depth of the nav
        'fallback_cb' => false, // fallback function (see below)
        'walker' => new top_bar_walker()
    ) );
}

    /**
     * Foundation 5 Top Bar Menu Walker Class for WordPress 3.9+
     */

    class top_bar_walker extends \Walker_Nav_Menu {

        function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
            $element->has_children = !empty( $children_elements[$element->ID] );
            $element->classes[] = ( $element->current || $element->current_item_ancestor ) ? 'active' : '';
            $element->classes[] = ( $element->has_children ) ? 'has-dropdown not-click' : '';

            parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
        }

        function start_el( &$output, $object, $depth = 0, $args = array(), $current_object_id = 0 ) {
            $item_html = '';
            parent::start_el( $item_html, $object, $depth, $args );

            $output .= ( $depth == 0 ) ? '<li class="divider"></li>' : '';

            $classes = empty( $object->classes ) ? array() : (array) $object->classes;
            if ( in_array('label', $classes) ) {
                $output .= '<li class="divider"></li>';
                $item_html = preg_replace( '/<a[^>]*>(.*)<\/a>/iU', '<label>$1</label>', $item_html );
            }

            if ( in_array('divider', $classes) ) {
                $item_html = preg_replace( '/<a[^>]*>( .* )<\/a>/iU', '', $item_html );
            }

            $output .= $item_html;
        }

        function start_lvl( &$output, $depth = 0, $args = array() ) {
            $output .= "\n<ul class=\"sub-menu dropdown\">\n";
        }

    }



register_sidebar(array(
        'name'          => __( 'Blog Sidebar', 'nvLangScope' ),
        'id'            => 'blog-sidebar',
        'description'   => __( 'Drag widgets for Blog sidebar here. These widgets will only appear on the blog portion of your site.', 'nvLangScope' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __( 'Blog Single Sidebar', 'nvLangScope' ),
        'id'            => 'blog-single-sidebar',
        'description'   => __( 'Drag widgets for the Blog Single sidebar here. These widgets will only appear on single blog pages.', 'nvLangScope' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __( 'Footer', 'nvLangScope' ),
        'id'            => 'sidebar-3',
        'description'   => __( 'Drag footer widgets here.', 'nvLangScope' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __( 'Front Page First Info Section', 'nvLangScope' ),
        'id'            => 'fp-info-1',
        'description'   => __( 'Drag widgets for Blog sidebar here. These widgets will only appear on the first white section of the home page.', 'nvLangScope' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __( 'Front Page Second Info Section', 'nvLangScope' ),
        'id'            => 'fp-info-2',
        'description'   => __( 'Drag widgets for Blog sidebar here. These widgets will only appear on the blog portion of your site.', 'nvLangScope' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __( 'About Us Page First Info Section', 'nvLangScope' ),
        'id'            => 'about-us-info-1',
        'description'   => __( 'Drag widgets for Blog sidebar here. These widgets will only appear on the blog portion of your site.', 'nvLangScope' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __( 'About Us Page Second Info Section', 'nvLangScope' ),
        'id'            => 'about-us-info-2',
        'description'   => __( 'Drag widgets for Blog sidebar here. These widgets will only appear on the blog portion of your site.', 'nvLangScope' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __( 'About Us Page Third Info Section', 'nvLangScope' ),
        'id'            => 'about-us-info-3',
        'description'   => __( 'Drag widgets for Blog sidebar here. These widgets will only appear on the blog portion of your site.', 'nvLangScope' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __( 'Our Team (About Page)', 'nvLangScope' ),
        'id'            => 'about-us-info-4',
        'description'   => __( 'Drag widgets for Blog sidebar here. These widgets will only appear on the blog portion of your site.', 'nvLangScope' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));


    register_sidebar(array(
        'name'          => __( 'Join The Chorus First Info Section', 'nvLangScope' ),
        'id'            => 'join-the-chorus-1',
        'description'   => __( 'Drag widgets for Blog sidebar here. These widgets will only appear on the blog portion of your site.', 'nvLangScope' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __( 'Join The Chorus Second Info Section', 'nvLangScope' ),
        'id'            => 'join-the-chorus-2',
        'description'   => __( 'Drag widgets for Blog sidebar here. These widgets will only appear on the blog portion of your site.', 'nvLangScope' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __( 'Join The Chorus Third Info Section', 'nvLangScope' ),
        'id'            => 'join-the-chorus-3',
        'description'   => __( 'Drag widgets for Blog sidebar here. These widgets will only appear on the blog portion of your site.', 'nvLangScope' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __( 'Join The Chorus Fourth Info Section', 'nvLangScope' ),
        'id'            => 'join-the-chorus-4',
        'description'   => __( 'Drag widgets for Blog sidebar here. These widgets will only appear on the blog portion of your site.', 'nvLangScope' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __( 'Book Us First Info Section', 'nvLangScope' ),
        'id'            => 'book-us-1',
        'description'   => __( 'Drag widgets for Blog sidebar here. These widgets will only appear on the blog portion of your site.', 'nvLangScope' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __( 'Wedding Songs', 'nvLangScope' ),
        'id'            => 'wedding-songs',
        'description'   => __( 'Drag widgets for Blog sidebar here. These widgets will only appear on the blog portion of your site.', 'nvLangScope' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __( 'Calendar Sidebar', 'nvLangScope' ),
        'id'            => 'calendar-sidebar',
        'description'   => __( 'Drag widgets for calendar sidebar here. These widgets will only appear on the calendar portion of your site.', 'nvLangScope' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __( 'Our Parents Sidebar', 'nvLangScope' ),
        'id'            => 'our-parents-sidebar',
        'description'   => __( 'Drag widgets for our parents sidebar here. These widgets will only appear on the our parents portion of your site.', 'nvLangScope' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __( 'Our Parents Right Content', 'nvLangScope' ),
        'id'            => 'our-parents-right',
        'description'   => __( 'Drag widgets for our parents right content here. These widgets will only appear on the our parents portion of your site.', 'nvLangScope' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __( 'Alumni Corner', 'nvLangScope' ),
        'id'            => 'alumni-corner',
        'description'   => __( 'Drag widgets for our alumni corner content here. These widgets will only appear on the our alumni corner portion of your site.', 'nvLangScope' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __( 'Presenters Info Section 1', 'nvLangScope' ),
        'id'            => 'presenters-1',
        'description'   => __( 'Drag widgets for our alumni corner content here. These widgets will only appear on the our alumni corner portion of your site.', 'nvLangScope' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __( 'Presenters Song List Left', 'nvLangScope' ),
        'id'            => 'presenters-2',
        'description'   => __( 'Drag widgets for our alumni corner content here. These widgets will only appear on the our alumni corner portion of your site.', 'nvLangScope' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __( 'Presenters Song List Right', 'nvLangScope' ),
        'id'            => 'presenters-3',
        'description'   => __( 'Drag widgets for our alumni corner content here. These widgets will only appear on the our alumni corner portion of your site.', 'nvLangScope' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __( 'Presenters Info Section 2', 'nvLangScope' ),
        'id'            => 'presenters-4',
        'description'   => __( 'Drag widgets for our alumni corner content here. These widgets will only appear on the our alumni corner portion of your site.', 'nvLangScope' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __( 'Private Parties Info Section 1', 'nvLangScope' ),
        'id'            => 'private-parties-1',
        'description'   => __( 'Drag widgets for our alumni corner content here. These widgets will only appear on the our alumni corner portion of your site.', 'nvLangScope' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __( 'Season Sponsor Info 1', 'nvLangScope' ),
        'id'            => 'season-sponsor-info-1',
        'description'   => __( 'Drag widgets for our alumni corner content here. These widgets will only appear on the our alumni corner portion of your site.', 'nvLangScope' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));






function my_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/aabc-wordpress-login-logo.png);
            background-size: 320px 230px;
            background-position: center top;
            background-repeat: no-repeat;
            color: #999;
            height: 230px;
            font-size: 20px;
            font-weight: normal;
            line-height: 1.3em;
            margin: 0 auto 25px;
            text-decoration: none;
            width: 320px;
            text-indent: -9999px;
            outline: none;
            overflow: hidden;
            display: block;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

?>