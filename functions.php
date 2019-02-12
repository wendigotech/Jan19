<?php
if ( ! function_exists( 'jan19_setup' ) ) :

function jan19_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'jan19', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );
    

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'jan19' ),
        'social'  => __( 'Social Links Menu', 'jan19' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );
}
endif; // jan19_setup

add_action( 'after_setup_theme', 'jan19_setup' );

/**
* Add support for Gutenberg.
*
* @link https://wordpress.org/gutenberg/handbook/reference/theme-support/
*/
function jan19_setup_theme_supported_features() {
		
		// Theme supports wide images, galleries and videos.
		add_theme_support( 'align-wide' );
    	add_theme_support( 'wp-block-styles' );
    	add_theme_support( 'responsive-embeds' );
		
}

add_action( 'after_setup_theme', 'jan19_setup_theme_supported_features' );

if ( ! function_exists( 'jan19_init' ) ) :

function jan19_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // jan19_setup

add_action( 'init', 'jan19_init' );


if ( ! function_exists( 'jan19_widgets_init' ) ) :

function jan19_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'jan19_widgets_init' );
endif;// jan19_widgets_init



if ( ! function_exists( 'jan19_customize_register' ) ) :

function jan19_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    $wp_customize->add_section( 'Submenu', array(
        'title' => __( 'Submenu', 'jan19' )
    ));

    $wp_customize->add_section( 'Submenu', array(
        'title' => __( 'Submenu Strategy Link', 'jan19' )
    ));

    $wp_customize->add_section( 'Submenu', array(
        'title' => __( 'News link', 'jan19' )
    ));
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_section( 'footer', array(
        'title' => __( 'Footer', 'jan19' )
    ));

    $wp_customize->add_setting( 'footer_icon1', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'footer_icon1', array(
        'label' => __( 'Footer icon#1', 'jan19' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'footer'
    ) ) );

    $wp_customize->add_setting( 'footer_icon2', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'footer_icon2', array(
        'label' => __( 'Footer icon#2', 'jan19' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'footer'
    ) ) );

    $wp_customize->add_setting( 'footer_icon3', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'footer_icon3', array(
        'label' => __( 'Footer icon#3', 'jan19' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'footer'
    ) ) );

    $wp_customize->add_setting( 'footer_icon4', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'footer_icon4', array(
        'label' => __( 'Footer icon#4', 'jan19' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'footer'
    ) ) );

    $wp_customize->add_setting( 'footer_text', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_text', array(
        'label' => __( 'Footer Text', 'jan19' ),
        'type' => 'text',
        'section' => 'footer'
    ));

    $wp_customize->add_setting( 'footer_bottom', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_bottom', array(
        'label' => __( 'Footer Bottom', 'jan19' ),
        'type' => 'text',
        'section' => 'footer'
    ));

    $wp_customize->add_setting( 'tips_title', array(
        'type' => 'theme_mod',
        'default' => __( 'Strategy &amp; Tips', 'jan19' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'tips_title', array(
        'label' => __( 'Tips title', 'jan19' ),
        'type' => 'text',
        'section' => 'submenu'
    ));

    $wp_customize->add_setting( 'submenu_link1', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'submenu_link1', array(
        'label' => __( 'Submenu News Link', 'jan19' ),
        'type' => 'text',
        'section' => 'Submenu'
    ));

    $wp_customize->add_setting( 'submenu_link2', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'submenu_link2', array(
        'label' => __( 'Submenu Strategy Link', 'jan19' ),
        'type' => 'url',
        'section' => 'Submenu'
    ));

    $wp_customize->add_setting( 'submenu_text', array(
        'type' => 'theme_mod',
        'default' => __( 'A production-ready theme for your projects', 'jan19' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'submenu_text', array(
        'label' => __( 'Submenu Text', 'jan19' ),
        'type' => 'text',
        'section' => 'Submenu'
    ));

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'jan19_customize_register' );
endif;// jan19_customize_register


if ( ! function_exists( 'jan19_enqueue_scripts' ) ) :
    function jan19_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_enqueue_script( 'jquery', null, null, null, true );

    wp_deregister_script( 'app' );
    wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.min.js', false, null, true);

    wp_deregister_script( 'popper' );
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.js', false, null, true);

    wp_deregister_script( 'bootstrap' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', false, null, true);

    wp_deregister_script( 'swiper' );
    wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper.min.js', false, null, true);

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */
        

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'bootstrap' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', false, null, 'all');

    wp_deregister_style( 'style' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.min.css', false, null, 'all');

    wp_deregister_style( 'swiper' );
    wp_enqueue_style( 'swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css', false, null, 'all');

    wp_deregister_style( 'hero' );
    wp_enqueue_style( 'hero', get_template_directory_uri() . '/hero.css', false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'jan19_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/bootstrap/wp_bootstrap4_navwalker.php";

    /* Pinegrow generated Include Resources End */
?>