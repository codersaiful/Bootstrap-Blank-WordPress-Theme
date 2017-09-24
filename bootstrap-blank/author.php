<?php
/**
 * The template for displaying Author profile page
 *
 * @package WordPress
 * @subpackage Bootstrap_Blank
 * @since Bootstrap-Blank 1.0
 */

get_header(); ?>

<section class="container content_section">
    <div role="main" class="col-md-9 <?php echo get_theme_mod( 'bootstrap_blank_sidebar_layout','right_sidebar_setting' ); ?>">

        <div class="row author_biography ahthor_head author_section_wrapper">
            <div class="col-md-12">
                <h3 class="author_title"><?php echo get_theme_mod( 'bootstrap_blank_biography_text', __('Author Biography','bootstrap-blank') ); ?></h3>
            </div>
            <?php
            $bootstrap_blank_email = get_the_author_meta( 'user_email' );
            $bootstrap_blank_authorInfo['email'] = $bootstrap_blank_email;
            $bootstrap_blank_authorInfo['name'] = get_the_author();
            $bootstrap_blank_authorInfo['description'] = get_the_author_meta( 'description' );
            $bootstrap_blank_authorInfo['avater'] = get_avatar( $bootstrap_blank_email, 220 );
            $bootstrap_blank_authorInfo['social']['fb'] = 'http://facebook.com/' . get_the_author_meta( 'fb' );
            $bootstrap_blank_authorInfo['social']['twitter'] = 'http://twitter.com/' . get_the_author_meta( 'twitter' );
            $bootstrap_blank_authorInfo['social']['linkedin'] = get_the_author_meta( 'linkedin' );
            $bootstrap_blank_authorInfo['social']['skype'] = get_the_author_meta( 'skype' );
            ?>

            <div class="col-md-12 author_wrapper">
                <div class="col-md-4">
                    <div class="row profile_image_wrapper"><?php echo $bootstrap_blank_authorInfo['avater']; ?></div>
                </div>
                <div class="col-md-8">
                    <h3 title="<?php echo esc_attr( $bootstrap_blank_authorInfo['name'] ); ?>"><?php echo $bootstrap_blank_authorInfo['name']; ?></h3>
                    <p class="author_description"><?php echo $bootstrap_blank_authorInfo['description']; ?></p>
                    <div class="social_icons_wrapper"> 
                        <h4 class="social_connection"><?php _e( 'Social Connections','bootstrap-blank' ); ?></h4>
                        <div class="social_icons"> 
                        <?php
                        $bootstrap_blank_socials = $bootstrap_blank_authorInfo['social'];
                        foreach ( $bootstrap_blank_socials as $bootstrap_blank_key=>$bootstrap_blank_social ) {
                            $bootstrap_blank_social = esc_url( $bootstrap_blank_social );
                            echo "<a class='bio_social {$bootstrap_blank_key}' href='{$bootstrap_blank_social}' target='_blank'><img src='".  get_template_directory_uri()."/images/{$bootstrap_blank_key}.png'></a>";
                        }
                        ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="post_area">
            <h3><?php echo $bootstrap_blank_authorInfo['name'] . ' '; echo get_theme_mod( 'bootstrap_blank_user_post_text', __('\'s all posts','bootstrap-blank') ); ?></h3>
            <?php 
            $bootstrap_blank_loop_file_name = get_theme_mod( 'bootstrap_blank_author_page_loop','blog-loop-2' );
            get_template_part( $bootstrap_blank_loop_file_name ); ?>
        </div>
    </div>
    <div class="col-md-3 sidebar_wrapper <?php echo get_theme_mod( 'bootstrap_blank_sidebar_layout','right_sidebar_setting' ); ?>">
<?php get_sidebar(); ?>
    </div>
</section>

<?php get_footer(); ?>
