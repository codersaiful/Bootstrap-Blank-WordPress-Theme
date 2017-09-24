<?php
/**
 * Pagination Bootstrap_Blank
 *
 * @package WordPress
 * @subpackage Bootstrap_Blank
 * @since Bootstrap-Blank 1.0
 */

echo '<br class="clear"><div class="row post_single pagination_wrapper">';
the_posts_pagination( array(
    'mid_size'  => 8,
    'prev_text'          => '<i class="glyphicon glyphicon-arrow-left"></i> ' . __( 'Previous page', 'bootstrap-blank' ),
    'next_text'          => __( 'Next page', 'bootstrap-blank' ) . ' <i class="glyphicon glyphicon-arrow-right"></i>',
) );
echo '</div>';