<?php

/**
 * Load Styles Into Theme
 */
function load_styles() {
    wp_enqueue_style( 'foundation', get_template_directory_uri() . '/assets/css/foundation/css/foundation.css' );
    wp_enqueue_style( 'app', get_template_directory_uri() . '/assets/css/app.css' );
    wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/foundation_js/foundation.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/app.js', array(), '2.0.0', true );

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
        'id'            => 'sidebar-1',
        'description'   => __( 'Drag widgets for Blog sidebar here. These widgets will only appear on the blog portion of your site.', 'nvLangScope' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __( 'Site Sidebar', 'nvLangScope' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Drag widgets for the Site sidebar here. These widgets will only appear on non-blog pages.', 'nvLangScope' ),
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


?>