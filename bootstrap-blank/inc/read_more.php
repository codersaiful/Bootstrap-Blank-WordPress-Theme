<?php
/**
 * Read_More or Details_link for Bootstrap_Blank
 *
 * @package WordPress
 * @subpackage Bootstrap_Blank
 * @since Bootstrap-Blank 1.0
 */
?>
<div class="col-md-12 read_more_button_wrapper">
    <a title="<?php echo get_theme_mod( 'bootstrap_blank_read_more_text' , __( 'Read More', 'bootstrap-blank' ) ); ?>: <?php the_title(); ?>" class="btn btn-success btn-sm pull-right read_more_button" href="<?php echo esc_url( get_the_permalink() ); ?>"><?php echo get_theme_mod( 'bootstrap_blank_read_more_text', __( 'Read More', 'bootstrap-blank' ) ); ?></a>
    <br class="clear">
</div>