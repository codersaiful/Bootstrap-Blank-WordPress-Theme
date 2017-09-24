<?php 
/**
 * Template for WooCommerce
 *
 * @package WordPress
 * @subpackage Bootstrap_Blank
 * @since Bootstrap-Blank 1.0
 */
get_header(); ?>

<section class="container content_section">
    <div class="col-md-12">
        <div <?php post_class( 'post_entry single_page_content' ); ?> role="main">
            <?php if( have_posts() ): ?>
            <div class="row post_single">
                <div class="single_post_content">
                    <?php woocommerce_content(); ?>
                </div>
            </div>
            
            <?php 
            endif;?>
        </div>

    </div>
</section>

<?php get_footer(); ?>


























