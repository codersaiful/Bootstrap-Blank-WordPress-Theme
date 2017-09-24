<?php
/**
 * Loop Name: BLOOG LOOP 4
 *  
 * @package WordPress
 * @subpackage Bootstrap_Blank
 * @since Bootstrap-Blank 1.0
 */
?>
<div class="row post_single bloog_loop_5">
    <ol>
    <?php
    if ( have_posts() ):while ( have_posts() ):the_post();
    ?>
        <li <?php post_class(); ?>><a title="<?php echo esc_attr( get_the_title() ); ?>" href="<?php echo esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></li>
    <?php
        endwhile;
        get_template_part( 'inc/pagination' );
    else:
        get_template_part( 'inc/nopost' );
    endif;
    ?>
    </ol>
</div>