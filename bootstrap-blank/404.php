<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Bootstrap_Blank
 * @since Bootstrap-Blank 1.0
 */

get_header( 'blank' ); 
?>
<section class="container error_404_wrapper">
    <div class="col-md-6 col-md-offset-3 text-center">
        <div class="row error_404 text-center">
            <h1 class="error_404_title large-text">
                <?php echo get_theme_mod( 'bootstrap_blank_404_error_text', __('404 <small>Error</small>','bootstrap-blank') ); ?> 
            </h1>
            <div class="error_404_text">
                <?php echo get_theme_mod( 'bootstrap_blank_404_error_msg_text',  __( 'Your select page/topic/subject not fount at', 'bootstrap-blank' ) . ' <a href="'.  esc_url(get_home_url() ) .'">'.  get_bloginfo( 'name' ).'</a>. ' . __( 'You can go to', 'bootstrap-blank' ) . ' <a href="'.  esc_url( get_home_url() ) . '">Home Page</a> ' . __( 'as well. Or you can search', 'bootstrap-blank' ) ); ?>
                <hr>
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer( 'blank' ); ?>