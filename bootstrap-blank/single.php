<?php
/**
 * Template for Single page
 *
 * @package WordPress
 * @subpackage Bootstrap_Blank
 * @since Bootstrap-Blank 1.0
 */
get_header(); ?>

<section class="container content_section">
    <div class="col-md-9 single_post_content_section">
        <div id="post-<?php the_ID(); ?>" <?php post_class( 'post_area row' ); ?> role="main">
            <?php if ( have_posts() ):while ( have_posts() ):the_post(); ?>
                    <div class="post_single">
                        
                        <div class="row single_post_title_wrapper">
                            <h3 title="<?php echo esc_attr( get_the_title() ); ?>" class="single_post_title"><?php the_title(); ?></h3>
                        </div>
                        <div class="well well-sm post_info_well">

                            <span title="<?php echo esc_attr( get_the_author() ); ?>"><i class="glyphicon glyphicon-user"></i> <?php the_author_posts_link(); ?> [<?php the_author_posts(); ?>]</span>
                            <span><i class="glyphicon glyphicon-time"></i> <?php the_date(); ?></span>
                            <span><i class="glyphicon glyphicon-comment"></i> <?php comments_number(); ?></span>
                        </div>
                        
                        <?php
                        if( has_post_thumbnail() ){
                            echo '<div class="row 12 single_post_feature_image"><div class="col-md-12">';
                            the_post_thumbnail( 'full', array('class'=>'img-responsive single_post_feature_image single_post_image', 'title'=>  get_the_title(),'alt'=>  get_the_title() . ' images') );
                            echo '</div></div>';
                        }
                            
                        ?>
                        
                        <div class="single_post_content">
                            <?php the_content(); ?>
                        </div>
                        
                        <?php
                        $bootstrap_blank_Tags = get_theme_mod( 'bootstrap_blank_tags_text', __( 'Tags:', 'bootstrap-blank' ) . ' ' );
                        the_tags( '<div class="tags_list cat_tag_list well well-sm post_info_well">'.$bootstrap_blank_Tags.' ', ', ', '</div>' );
                        if( get_the_category() ){
                            $bootstrap_blank_Category = get_theme_mod( 'bootstrap_blank_category_text',  __( 'Category:', 'bootstrap-blank' ) . ' ' );
                            echo '<div class="categories_list cat_tag_list well well-sm post_info_well">' . $bootstrap_blank_Category . ' ';
                            the_category( ', ' );
                            echo '</div>';
                        }
                        
                        
                        ?>
                    </div>

                    <?php
                endwhile;
            else:
                get_template_part( 'inc/nopost' );
            endif;
            ?>
        </div>
        <div class="post_pagination pagination_list">

            <?php
            $defaults = array(
                'before' => '<div class="row post_single pagination_wrapper post_page_pagination">' . __( 'Pages:', 'bootstrap-blank' ),
                'after' => '</div>',
                'link_before' => '',
                'link_after' => '',
                'next_or_number' => 'number',
                'separator' => ' ',
                'nextpagelink' => __( 'Next page', 'bootstrap-blank' ) . ' <i class="glyphicon glyphicon-arrow-right"></i>',
                'previouspagelink' => '<i class="glyphicon glyphicon-arrow-left"></i> ' . __( 'Previous page', 'bootstrap-blank' ),
                'pagelink' => '%',
                'echo' => 1
            );
            wp_link_pages( $defaults );
            ?>

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
    <div class="col-md-3 sidebar_wrapper">
        <div class="col-md-12 sidebar">
            <?php dynamic_sidebar( 'single_post_sidebar' ); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>




