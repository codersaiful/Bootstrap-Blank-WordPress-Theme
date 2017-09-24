<?php
/**
 * Bootstrap Blank Author Social Link and Display description
 *
 * @package WordPress
 * @subpackage Bootstrap_Blank
 * @since Bootstrap-Blank 1.0
 */


/**
 * Social Field for user
 * Skype,Twitter,Facebook,LinkedIn
 *
 * @since Bootstrap-Blank 1.0
 * 
 * @param $bootstrap_blank_userSocial SocialMethod.
 */
function bootstrap_blank_users_social_info_adding( $bootstrap_blank_userSocial ){
    $bootstrap_blank_userSocial['skype'] = __( 'Skype Username', 'bootstrap-blank' );
    $bootstrap_blank_userSocial['twitter'] = __( 'Twitter Username', 'bootstrap-blank' );
    $bootstrap_blank_userSocial['fb'] = __( 'Facebook Username', 'bootstrap-blank' );
    $bootstrap_blank_userSocial['linkedin'] = __( 'LinkedIn Profile Link', 'bootstrap-blank' );
    return $bootstrap_blank_userSocial;
}
add_filter( 'user_contactmethods', 'bootstrap_blank_users_social_info_adding' );
