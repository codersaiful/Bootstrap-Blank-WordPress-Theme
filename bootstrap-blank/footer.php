<?php
/**
 * For Footer Shocket
 *
 * @package WordPress
 * @subpackage Bootstrap_Blank
 * @since Bootstrap-Blank 1.0
 */

?>
<div role="contentinfo" class="container footer_socket">
    <div class="col-md-12 text-center">
        <?php echo get_theme_mod( 'bootstrap_blank_copyright_text','<a href="' . esc_url( __( 'https://wordpress.org/', 'bootstrap-blank' ) ) . '">' . __( 'Proudly powered by ','bootstrap-blank' ) . ' WordPress</a>' ); ?>
    </div>
</div>
    <?php wp_footer(); ?>
  </body>
</html>