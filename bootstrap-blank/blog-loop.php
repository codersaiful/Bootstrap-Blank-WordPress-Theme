<?php
/**
 * Loop Name: BLOOG LOOP
 * 
 * @package WordPress
 * @subpackage Bootstrap_Blank
 * @since Bootstrap-Blank 1.0
 */
?>
<?php
if (have_posts()):while (have_posts()):the_post();
?>
<div <?php post_class( 'row post_single bloog_loop' ); ?>>
            <div class="row single_post_title_wrapper">
                <h3 class="single_post_title"><a title="<?php echo esc_attr( get_the_title() ); ?>" href="<?php echo esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></h3>
            </div>
            <div class="row">
                <div class="col-md-2 thumbs_wrapper">
                    <?php get_template_part( 'thumbs', 'images' ); ?>
                </div>
                <div class="col-md-10">
                    <div class="well well-sm post_info_well">

                        <span title="<?php echo esc_attr( get_the_author() ); ?>"><i class="glyphicon glyphicon-user"></i> <?php the_author_posts_link(); ?> [<?php the_author_posts() ?>]</span>
                        <span><i class="glyphicon glyphicon-time"></i> <?php echo get_the_time( 'd M, Y' ); ?></span>
                        <span><i class="glyphicon glyphicon-comment"></i> <?php comments_number(); ?></span>
                    </div>
                    <div class="single_post_content">

                        <?php the_excerpt(); ?>
                    </div>
                    <?php get_template_part( 'inc/read_more' ); ?>
                </div>
            </div>
        </div>

        <?php
    endwhile;
    get_template_part( 'inc/pagination' );
else:
    get_template_part( 'inc/nopost' );
endif;
?>