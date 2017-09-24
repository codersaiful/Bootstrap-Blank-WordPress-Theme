<?php
/**
 * The template for displaying Thumbs Images
 *
 * @package WordPress
 * @subpackage Bootstrap_Blank
 * @since Bootstrap-Blank 1.0
 */
?>

<a href="<?php echo esc_url( get_the_permalink() ); ?>" title="<?php echo esc_attr( get_the_title() ); ?>">
    <?php
    if ( has_post_thumbnail() ) {
        the_post_thumbnail( 'thumbnail', array( 'class' => 'img-responsive', 'alt' => esc_attr( get_the_title() ) . ' images' ) );
    } else {
    ?>
        <img class="img-responsive hidden-xs" src="<?php echo get_template_directory_uri(); ?>/images/no-preview.jpg" alt="<?php echo _e( 'No preview image', 'bootstrap-blank' ); ?>">
    <?php } ?>
</a>