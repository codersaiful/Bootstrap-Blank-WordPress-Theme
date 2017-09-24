<?php
/**
 * Bootstrap Blank Customizer functionality
 *
 * @package WordPress
 * @subpackage Bootstrap_Blank
 * @since Bootstrap-Blank 1.0
 */

/**
 * Customizwer for Text Setting
 *
 * @since Bootstrap-Blank 1.0
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function bootstrap_blank_theme_setting_text( $wp_customize ) {
    $description = __( 'Theme Setting availaable here. Such as: Read more, Search for text etc.', 'bootstrap-blank' );
    $panel_args = array(
        'title' => __( 'Theme Options', 'bootstrap-blank' ),
        'description' => $description, // Include html tags such as <p>!
        'priority' => 10, // Mixed with top-level-section hierarchy. 
    );
    $wp_customize->add_panel( 'bootstrap_blank_setting_text', $panel_args );

    $args = array(
        'title' => __( 'Change Default Text', 'bootstrap-blank' ),
        'priority' => 10,
        'description' => 'To change default text. Such: Read More, Search For etc',
        'panel' => 'bootstrap_blank_setting_text',
    );
    $wp_customize->add_section( 'bootstrap_blank_change_default_text', $args );



    // Theme Options for Read More Text!
    $setting_args = array(
        'default' => __( 'Read More', 'bootstrap-blank' ),
    );
    // $wp_customize->add_setting('bootstrap_blank_read_more_text', $setting_args);!
    $wp_customize->add_setting( 'bootstrap_blank_read_more_text', wp_parse_args( false, $setting_args ), array( 'sanitize_callback' => '__return_false' )  );

    $control_args = array(
        'label' => __( 'Read More Text', 'bootstrap-blank' ),
        'type' => 'text',
        'section' => 'bootstrap_blank_change_default_text',
        'settings' => 'bootstrap_blank_read_more_text'
    );
    $wp_customize->add_control( 'bootstrap_blank_theme_setting_control', $control_args );


    // Theme Options for CopyRight Text!
    $setting_args = array(
        'default' => '<a href="https://wordpress.org/" class="customize-unpreviewable">' . __( 'Proudly powered by ', 'bootstrap-blank' ) . 'WordPress</a>'
    );
    // $wp_customize->add_setting('bootstrap_blank_copyright_text', $setting_args)!
    $wp_customize->add_setting( 'bootstrap_blank_copyright_text', wp_parse_args( false, $setting_args ), array('sanitize_callback' => '__return_false' )  );

    $control_args = array(
        'label' => __( 'Footer Copyright Text','bootstrap-blank' ),
        'type' => 'textarea',
        'section' => 'bootstrap_blank_change_default_text',
        'settings' => 'bootstrap_blank_copyright_text'
    );
    $wp_customize->add_control( 'bootstrap_blank_copyright_text_control', $control_args );


    // Theme Options for Category Text!
    $setting_args = array(
        'default' => __( 'Category:', 'bootstrap-blank' ) . ' ',
    );
    //$wp_customize->add_setting('bootstrap_blank_category_text', $setting_args) !
    $wp_customize->add_setting( 'bootstrap_blank_category_text', wp_parse_args( false, $setting_args ), array( 'sanitize_callback' => '__return_false' )  );

    $control_args = array(
        'label' => __( 'Category Text from Single','bootstrap-blank' ),
        'type' => 'text',
        'section' => 'bootstrap_blank_change_default_text',
        'settings' => 'bootstrap_blank_category_text'
    );
    $wp_customize->add_control( 'bootstrap_blank_category_text_control', $control_args );

    // Theme Options for Tags Text!
    $setting_args = array(
        'default' => __( 'Tags:', 'bootstrap-blank' ) . ' ',
    );
    // $wp_customize->add_setting('bootstrap_blank_tags_text', $setting_args) !
    $wp_customize->add_setting( 'bootstrap_blank_tags_text', wp_parse_args( false, $setting_args ),array('sanitize_callback' => '__return_false',)  );

    $control_args = array(
        'label' => __( 'Tags Text from Single','bootstrap-blank' ),
        'type' => 'text',
        'section' => 'bootstrap_blank_change_default_text',
        'settings' => 'bootstrap_blank_tags_text'
    );
    $wp_customize->add_control( 'bootstrap_blank_tag_text_control', $control_args );




    // Theme Options for No Post Text!
    $setting_args = array(
        'default' => __( 'There is no post founded.', 'bootstrap-blank' ),
    );
    // $wp_customize->add_setting('bootstrap_blank_nopost_text', $setting_args) !
    $wp_customize->add_setting( 'bootstrap_blank_nopost_text', wp_parse_args( false, $setting_args ), array( 'sanitize_callback' => '__return_false' )  );

    
    $control_args = array(
        'label' => __( 'Post Not found Message','bootstrap-blank' ),
        'type' => 'text',
        'section' => 'bootstrap_blank_change_default_text',
        'settings' => 'bootstrap_blank_nopost_text'
    );
    $wp_customize->add_control( 'bootstrap_blank_nopost_control', $control_args );






    // Theme Options for Author Biography Text.
    $setting_args = array(
        'default' => __( 'Author Biography', 'bootstrap-blank' ),
    );
    // $wp_customize->add_setting('bootstrap_blank_biography_text', $setting_args) !
    $wp_customize->add_setting( 'bootstrap_blank_biography_text', wp_parse_args( false, $setting_args ),array('sanitize_callback' => '__return_false',)  );

    $control_args = array(
        'label' => __( 'Biography Title Text for Author','bootstrap-blank' ),
        'type' => 'text',
        'section' => 'bootstrap_blank_change_default_text',
        'settings' => 'bootstrap_blank_biography_text'
    );
    $wp_customize->add_control( 'bootstrap_blank_biography_control', $control_args );

    // Theme Options for user's all post Text.
    $setting_args = array(
        'default' => __( 's all post', 'bootstrap-blank' ),
    );
    // $wp_customize->add_setting('bootstrap_blank_user_post_text', $setting_args)!
    $wp_customize->add_setting( 'bootstrap_blank_user_post_text', wp_parse_args( false, $setting_args ), array( 'sanitize_callback' => '__return_false' )  );

    $control_args = array(
        'label' => __( 'User all post text','bootstrap-blank' ),
        'type' => 'text',
        'section' => 'bootstrap_blank_change_default_text',
        'settings' => 'bootstrap_blank_user_post_text'
    );
    $wp_customize->add_control( 'bootstrap_blank_user_allpost_control', $control_args );


    //Theme Options for Search Text
    $setting_args = array(
        'default' => __( 'Search', 'bootstrap-blank' ),
    );
    //$wp_customize->add_setting('bootstrap_blank_search_text', $setting_args);
    $wp_customize->add_setting( 'bootstrap_blank_search_text', wp_parse_args( false, $setting_args ), array( 'sanitize_callback' => '__return_false' )  );

    $control_args = array(
        'label' => __( 'Search Button text', 'bootstrap-blank' ),
        'type' => 'text',
        'section' => 'bootstrap_blank_change_default_text',
        'settings' => 'bootstrap_blank_search_text'
    );
    $wp_customize->add_control( 'bootstrap_blank_search_button_control', $control_args );


    // Theme Options for Search not found message Text.
    $setting_args = array(
        'default' => __( 'There is no post found based on your Search.', 'bootstrap-blank' ),
    );
    // $wp_customize->add_setting('bootstrap_blank_search_nopost_text', $setting_args) !
    $wp_customize->add_setting( 'bootstrap_blank_search_nopost_text', wp_parse_args( false, $setting_args ),array( 'sanitize_callback' => '__return_false' )  );

    $control_args = array(
        'label' => __( 'Search no post warning','bootstrap-blank' ),
        'type' => 'text',
        'section' => 'bootstrap_blank_change_default_text',
        'settings' => 'bootstrap_blank_search_nopost_text'
    );
    $wp_customize->add_control( 'bootstrap_blank_search_nopost_control', $control_args );



    // Theme Options 404 Error!
    $setting_args = array(
        'default' => __( '404 <small>Error</small>', 'bootstrap-blank' ),
    );
    // $wp_customize->add_setting('bootstrap_blank_404_error_text', $setting_args) !
    $wp_customize->add_setting( 'bootstrap_blank_404_error_text', wp_parse_args( false, $setting_args ), array( 'sanitize_callback' => '__return_false' )  );

    $control_args = array(
        'label' => __( '404 Error Text','bootstrap-blank' ),
        'type' => 'text',
        'section' => 'bootstrap_blank_change_default_text',
        'settings' => 'bootstrap_blank_404_error_text'
    );
    $wp_customize->add_control( 'bootstrap_blank_404_error_control', $control_args );



    // Theme Options 404 Error Message!

    $setting_args = array(
        'default' => 'Your select page/topic/subject not fount at <a href="' . get_home_url() . '">' . get_bloginfo( 'name' ) . '</a>. You can go to <a href="' . get_home_url() . '">Home Page</a> as well.
Or you can search',
    );
    // $wp_customize->add_setting('bootstrap_blank_404_error_msg_text', $setting_args)!
    $wp_customize->add_setting( 'bootstrap_blank_404_error_msg_text', wp_parse_args( false, $setting_args ), array( 'sanitize_callback' => '__return_false' )  );

    $control_args = array(
        'label' => __( '404 Error Text','bootstrap-blank' ),
        'type' => 'textarea',
        'section' => 'bootstrap_blank_change_default_text',
        'settings' => 'bootstrap_blank_404_error_msg_text'
    );
    $wp_customize->add_control( 'bootstrap_blank_404_error_msg_control', $control_args );
}

add_action( 'customize_register', 'bootstrap_blank_theme_setting_text' );

/**
 * Customizwer for Layout Setting
 *
 * @since Bootstrap-Blank 1.0
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function bootstrap_blank_theme_layoutsetting( $wp_customize ) {
    $description = 'Theme Setting availaable here. Such as: Read more, Search for text etc.';
    $panel_args = array(
        'title' => __( 'Theme Options', 'bootstrap-blank' ),
        'description' => $description, // Include html tags such as <p>.
        'priority' => 10, // Mixed with top-level-section hierarchy. 
    );
    // $wp_customize->add_panel( 'bootstrap_blank_setting_text', $panel_args)!

    $args = array(
        'title' => __( 'Layout Setting', 'bootstrap-blank'),
        'priority' => 11,
        'description' => 'To Customize Sidebar Layout, Blog style for Archive page, Blog page, Seach page and Author provie page',
        'panel' => 'bootstrap_blank_setting_text',
    );
    $wp_customize->add_section( 'bootstrap_blank_change_layout', $args );

    $setting_args = array(
        'default' => 'right_sidebar_setting',
    );
    // $wp_customize->add_setting('bootstrap_blank_sidebar_layout', $setting_arg)!
    $wp_customize->add_setting( 'bootstrap_blank_sidebar_layout', wp_parse_args( false, $setting_args ), array( 'sanitize_callback' => '__return_false' )  );


    $control_args = array(
        'label' => __( 'Sidebar Layout','bootstrap-blank' ),
        'type' => 'select',
        'section' => 'bootstrap_blank_change_layout',
        'settings' => 'bootstrap_blank_sidebar_layout',
        'choices' => array(
            'left_sidebar_setting' => 'Left Sidebar',
            'right_sidebar_setting' => 'Right Sidebar'
        ),
    );
    $wp_customize->add_control( 'bootstrap_blank_sidebar_setting_control', $control_args );
    
    
    
    //Blog Style setting Customizer.
    $blog_style_choice = array(
            'blog-loop' => 'Style One',
            'blog-loop-2' => 'Style Two',
            'blog-loop-3' => 'Style Three',
            'blog-loop-4' => 'Style Four',
            'blog-loop-5' => 'Style Five',
        );
    
    
    // For Blog page Loop setting.
    $setting_args = array(
        'default' => 'blog-loop'
    );
    // $wp_customize->add_setting('bootstrap_blank_blog_page_loop', $setting_arg).
    $wp_customize->add_setting( 'bootstrap_blank_blog_page_loop', wp_parse_args( false, $setting_args ), array( 'sanitize_callback' => '__return_false' )  );
    
    $control_args = array(
        'label' => __( 'Blog page Blog Style', 'bootstrap-blank' ),
        'type' => 'select',
        'section' => 'bootstrap_blank_change_layout',
        'settings' => 'bootstrap_blank_blog_page_loop',
        'choices' => $blog_style_choice,
    );
    $wp_customize->add_control( 'bootstrap_blank_blog_page_loop_control', $control_args );
    
    // For Author page Loop setting.
    $setting_args = array(
        'default' => 'blog-loop-2'
    );

    $wp_customize->add_setting( 'bootstrap_blank_author_page_loop', wp_parse_args( false, $setting_args ), array( 'sanitize_callback' => '__return_false' )  );

    $control_args = array(
        'label' => __( 'Author Blog Style', 'bootstrap-blank' ),
        'type' => 'select',
        'section' => 'bootstrap_blank_change_layout',
        'settings' => 'bootstrap_blank_author_page_loop',
        'choices' => $blog_style_choice,
    );
    $wp_customize->add_control( 'bootstrap_blank_author_page_loop_control', $control_args );
    
    // For Archive page Loop setting.
    $setting_args = array(
        'default' => 'blog-loop'
    );

    $wp_customize->add_setting( 'bootstrap_blank_archive_page_loop', wp_parse_args( false, $setting_args ), array( 'sanitize_callback' => '__return_false' )  );

    $control_args = array(
        'label' => __( 'Archive Blog Style', 'bootstrap-blank' ),
        'type' => 'select',
        'section' => 'bootstrap_blank_change_layout',
        'settings' => 'bootstrap_blank_archive_page_loop',
        'choices' => $blog_style_choice,
    );
    $wp_customize->add_control( 'bootstrap_blank_archive_page_loop_control', $control_args );
    
    // For Search page Loop setting.
    $setting_args = array(
        'default' => 'blog-loop-2'
    );
    
    $wp_customize->add_setting( 'bootstrap_blank_search_page_loop', wp_parse_args( false, $setting_args ), array( 'sanitize_callback' => '__return_false' )  );

    $control_args = array(
        'label' => __( 'Search Blog Style', 'bootstrap-blank' ),
        'type' => 'select',
        'section' => 'bootstrap_blank_change_layout',
        'settings' => 'bootstrap_blank_search_page_loop',
        'choices' => $blog_style_choice,
    );
    $wp_customize->add_control( 'bootstrap_blank_search_page_loop_control', $control_args );
 
}

add_action( 'customize_register', 'bootstrap_blank_theme_layoutsetting' );


