<?php
/**
 * This footer file for displaying Header.
 * Specially for Blank Template
 *
 * @package WordPress
 * @subpackage Bootstrap_Blank
 * @since Bootstrap-Blank 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <?php
        $bootstrap_blank_custom_header_image = get_theme_mod( 'header_image' );
        $bootstrap_blank_custom_header_image_data = get_theme_mod( 'header_image_data' );
        
        if( $bootstrap_blank_custom_header_image != 'remove-header' ){
            if( isset( $bootstrap_blank_custom_header_image_data->height ) ){
                $bootstrap_blank_header_height = $bootstrap_blank_custom_header_image_data->height;
            }else{
                $bootstrap_blank_header_height = 140;
            }
        ?>
        <section role="banner" style="background-image: url('<?php echo esc_url( $bootstrap_blank_custom_header_image ); ?>');height:<?php echo (int) $bootstrap_blank_header_height;?>px;width:100%;" class="header_section header_image_header">
        <?php
        }else{
            echo '<section class="header_section">';
        }
        ?>
        
            <div class="container header">
                <div class="header_wrapper">
                    <div class="col-md-4">

                        <?php
                        $bootstrap_blank_custom_logo_id = get_theme_mod( 'custom_logo' );
                        $bootstrap_blank_image = wp_get_attachment_image_src( $bootstrap_blank_custom_logo_id, 'full' );
                        if ( $bootstrap_blank_image ) {
                        ?>
                        <a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                            <img class="img-responsive" src="<?php echo esc_url( $bootstrap_blank_image[0] ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> Logo"  title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                            </a>
                        <?php
                        } else {
                        ?>
                            <div class="text_logo_wrapper">
                                <h1 class="text_logo"><a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
                                <p><?php echo get_bloginfo( 'description' ); ?></p>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="col-md-8 header_add">

                    </div>
                </div>
            </div>
        </section>

        <nav role="navigation" class="navbar navbar-inverse" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only"><?php _e( 'Toggle navigation', 'bootstrap-blank' ); ?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php if ( $bootstrap_blank_image ) { ?>
                    <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>">
                            <?php bloginfo( 'name' ); ?>
                        </a>
                    <?php } ?>
                </div>

                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'depth' => 2,
                    'container' => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'bs-example-navbar-collapse-1',
                    'menu_class' => 'nav navbar-nav',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'walker' => new WP_Bootstrap_Navwalker()) 
                );
                ?>
            </div>
        </nav>
