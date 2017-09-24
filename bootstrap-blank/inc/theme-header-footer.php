<?php
/**
 * Css file, JS File or any other file adding at Header and footer
 *
 * @package WordPress
 * @subpackage Bootstrap_Blank
 * @since Bootstrap-Blank 1.0
 */

$bootstrap_blank_theme_version = '1.4'; //btb = Bootstrap-blank.

/**
 * Header CSS include
 * Header Bootstrap Include
 * Register Style File
 * 
 * @since Bootstrap-Blank 1.0
 * 
 * @link https://codex.wordpress.org/Plugin_API/Action_Reference/admin_enqueue_scripts
 */
function bootstrap_blank_head_styles() {
    global $bootstrap_blank_theme_version;
    wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', 'bootstrap', '3.3.7' );
    wp_enqueue_style( 'bootstrap' );
    
    wp_register_style( 'bootstrap-blank-main-css', get_bloginfo( 'stylesheet_url' ), false, $bootstrap_blank_theme_version );
    wp_enqueue_style( 'bootstrap-blank-main-css' );
    
    wp_register_style( 'botstrap-blank-css', get_template_directory_uri() . '/css/style.css', false, $bootstrap_blank_theme_version );
    wp_enqueue_style( 'botstrap-blank-css' );
    if( is_singular() ){
        wp_enqueue_script( "comment-reply" );
    }
}
add_action( 'wp_enqueue_scripts', 'bootstrap_blank_head_styles', 99 );

/**
 * JS File include
 * jQuery and Bootstrap JavaScript File including
 * 
 * @since Bootstrap-Blank 1.0
 * 
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 */
function bootstrap_blank_footer_scrips() {
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', false, '1.12.4', TRUE );
    wp_enqueue_script( 'jquery' );
    
    wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', false, '3.3.7', true );
    wp_enqueue_script( 'bootstrap' );
}
add_action( 'wp_enqueue_scripts', 'bootstrap_blank_footer_scrips', 1 );