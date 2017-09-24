<?php
/**
 * Page Template for default page
 *
 * @package WordPress
 * @subpackage Bootstrap_Blank
 * @since Bootstrap-Blank 1.0
 */
get_header(); ?>
<section class="container content_section">
    <div class="col-md-12">
        <div <?php post_class( 'post_entry single_page_content' ); ?> role="main">
            <?php if( have_posts() ):while( have_posts() ):the_post();?>
            <div class="row post_single">
                <div class="single_post_content">
                    <?php the_content(); ?>
                </div>
            </div>
            
            <?php endwhile;
            else:
                get_template_part( 'inc/nopost' );
            endif; ?>

        </div>
        <?php
        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            echo '<div class="post_comment_area row"><div class="col-md-12">';
            comments_template();
            echo '</div></div>';
        endif;
        ?>
    </div>
</section>

<?php get_footer(); ?>


























