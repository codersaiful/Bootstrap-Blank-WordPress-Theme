<?php
/**
 * Bootstrap Blank for Default Theme Support
 *
 * @package WordPress
 * @subpackage Bootstrap_Blank
 * @since Bootstrap-Blank 1.0
 */

if ( !isset($content_width) )
    $content_width = 900;

/**
 * Theme Support
 * Added few default theme support by this function
 *
 * @since Bootstrap-Blank 1.0
 * 
 * @param $userSocial SocialMethod.
 */
function bootstrap_blank_require_theme_support() {
    // Add theme support for Automatic Feed Links.
    add_theme_support( 'automatic-feed-links' );


    add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
    // Set custom thumbnail dimensions.
    set_post_thumbnail_size( 200, 250, array( 'center', 'center' ) ); // 50 pixels wide by 50 pixels tall, crop from the center
    // Add theme support for Automatic Feed Links.
    add_theme_support( 'automatic-feed-links' );
    
    // Theme Support for post format.
    $post_format_args = array( 'standerd','video','aside', 'gallery','chat','audio' );
    add_theme_support( 'post-formats', $post_format_args );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

    // Add theme support for custom CSS in the TinyMCE visual editor.
    add_editor_style();
    add_theme_support( "title-tag" );
    add_theme_support( 'custom-logo', array(
        'default-image' => get_template_directory_uri() . '/images/defalult-logo.png',
        'flex-width' => true,
    ) );

    // Woocommerce Theme Support.
    add_theme_support( 'woocommerce' );    
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
    
    //Custome Header Image.
    $defaults = array(
        'default-image' => FALSE,
        'width' => 1500,
        'height' => 140,
        'flex-height' => TRUE,
        'flex-width' => TRUE,
        'uploads' => true,
        'random-default' => false,
        'header-text' => false,
    );
    add_theme_support( 'custom-header', $defaults );
    
    // Custom Background Image.
    $bg_default_arg = array(
        'default-image' => get_template_directory_uri() . '/images/default-bg.png',
        'default-preset' => 'default',
        'default-position-x' => 'center',
        'default-position-y' => 'center',
        'default-size' => 'auto',
        'default-repeat' => 'repeat',
        'default-attachment' => 'scroll',
        'default-color' => '',
        'wp-head-callback' => '_custom_background_cb',
        'admin-head-callback' => '',
        'admin-preview-callback' => '',
    );
    add_theme_support( 'custom-background', $bg_default_arg );
}

add_action( 'after_setup_theme', 'bootstrap_blank_require_theme_support' );


if ( !function_exists( 'bootstrap_blank_vertical_check' ) ) :
/**
 * Additional Theme Support for Thumbs
 * Add support for Vertical Featured Images
 *
 * @since Bootstrap-Blank 1.0
 * 
 * @param $userSocial SocialMethod.
 */
    function bootstrap_blank_vertical_check( $html, $post_id, $post_thumbnail_id, $size, $attr ) {

        $image_data = wp_get_attachment_image_src( $post_thumbnail_id, 'large' );

        //Get the image width and height from the data provided by wp_get_attachment_image_src()
        $width = $image_data[1];
        $height = $image_data[2];

        if ($height > $width) {
            $html = str_replace( 'attachment-', 'vertical-image attachment-', $html );
        }
        return $html;
    }

endif;

add_filter( 'post_thumbnail_html', 'bootstrap_blank_vertical_check', 10, 5 );


