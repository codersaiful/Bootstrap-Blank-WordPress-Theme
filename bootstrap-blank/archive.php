<?php
/**
 * The template for displaying All Archive page
 * Such: Category, tag etc
 *
 * @package WordPress
 * @subpackage Bootstrap_Blank
 * @since Bootstrap-Blank 1.0
 */

get_header(); ?>

<section class="container content_section">
    <div class="col-md-9 <?php echo get_theme_mod( 'bootstrap_blank_sidebar_layout','right_sidebar_setting' );?>">
        <h3><?php the_archive_title(); ?></h3>
        <div role="main" class="post_area">
            <?php 
            $bootstrap_blank_loop_file_name = get_theme_mod( 'bootstrap_blank_archive_page_loop','blog-loop' );
            get_template_part( $bootstrap_blank_loop_file_name ); ?>
        </div>
    </div>
    <div class="col-md-3 sidebar_wrapper <?php echo get_theme_mod( 'bootstrap_blank_sidebar_layout','right_sidebar_setting' ); ?>">
    <?php get_sidebar(); ?>
    </div>
</section>

<?php get_footer(); ?>
