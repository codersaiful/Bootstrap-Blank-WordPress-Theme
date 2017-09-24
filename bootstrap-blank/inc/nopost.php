<?php
/**
 * Default Setting for nopost options
 *
 * @package WordPress
 * @subpackage Bootstrap_Blank
 * @since Bootstrap-Blank 1.0
 */
if (is_search()) {
    $bootstrap_blank_no_post_message = get_theme_mod( 'bootstrap_blank_search_nopost_text', __( 'There is no post founded.', 'bootstrap-blank' ) );
} else {
    $bootstrap_blank_no_post_message = get_theme_mod( 'bootstrap_blank_nopost_text', __( 'There is no post fount based on your Search.', 'bootstrap-blank' ) );
}
 echo '<h3 class="text-danger">' . $bootstrap_blank_no_post_message . '</h3>';