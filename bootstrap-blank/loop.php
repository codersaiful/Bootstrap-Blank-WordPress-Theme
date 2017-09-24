<?php

/**
 * Loop Name: Loop
 */
?>
<?php
if ( have_posts() ):while ( have_posts() ):the_post();
        $bootstrap_blank_my_post_comment = get_comment_count( get_the_ID() );
        ?>
        <div class="row post_single">
            <div class="row single_post_title_wrapper">
                <h3 class="single_post_title"><a title="<?php echo esc_attr( get_the_title() ); ?>" href="<?php echo esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></h3>
            </div>
            <div class="single_post_content">
                <?php echo substr( get_the_excerpt(), 0, 100 ); ?>
            </div>

        </div>

    <?php
    endwhile;
else:
endif;
?>
