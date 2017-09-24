<?php
/**
 * Bootstrap Blank is a Free theme for Bootstrap website.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 * 
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Bootstrap_Blank
 * @since Bootstrap-Blank 1.0
 */


// Require file included for theme support.
require_once get_template_directory() . '/inc/theme-support.php';

// Register Custom Comment Walker.
require_once get_template_directory() . '/wp-bootstrap-commentwalker.php';

// Register Nav Menubar and Bootstrap Nav Walker including.
require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

/**
 * html5shiv for [if lt IE 9]
 * From: oss.maxcdn.com
 * respond for respond.min.js
 * 
 * @since Bootstrap-Blank 1.0
 */
function bootstrap_blank_maxcdn_ie9(){
?>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php
}
add_action( 'wp_head', 'bootstrap_blank_maxcdn_ie9', 55 );

/**
 * Register nav_menus
 * 
 * @since Bootstrap-Blank 1.0
 * 
 * @link https://codex.wordpress.org/Function_Reference/register_nav_menus
 */
function bootstrap_blank_register_navs() {
    $menus_arg = array(
        'primary' => 'Primary Menu'
    );
    register_nav_menus( $menus_arg );
}
add_action( 'after_setup_theme' , 'bootstrap_blank_register_navs' );

/**
 * Register widget area.
 * Register Sidebar for three section
 * 
 * @since Bootstrap-Blank 1.0
 * 
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function bootstrap_blank_widget_register() {
    $widget_arg_1 = array(
        'name' => 'Home Sidbar',
        'id' => 'home_sidebar',
        'before_widget' => '<div class="widget_wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="sidebar_title">',
        'after_title' => '</h3>',
    );

    $widget_arg_2 = array(
        'name' => 'Page Sidbar',
        'id' => 'page_sidebar',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    );

    $widget_arg_3 = array(
        'name' => 'Single Post Sidbar',
        'id' => 'single_post_sidebar',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    );

    register_sidebar( $widget_arg_1 );
    register_sidebar( $widget_arg_2 );
    register_sidebar( $widget_arg_3 );
}

add_action( 'widgets_init' , 'bootstrap_blank_widget_register' );

// Bootstrap Theme's Head and Footer Hook.
require_once get_template_directory() . '/inc/theme-header-footer.php';

// Require file included.
require_once get_template_directory() . '/inc/customizer.php';

// Dashboard Widget Remover.
if (is_admin()) {
    require_once get_template_directory() . '/inc/author_social.php';
}
