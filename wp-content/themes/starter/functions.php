<?php
$theme_text_domain = 'starter';

$lang = get_stylesheet_directory_uri() . '/languages';

load_theme_textdomain($theme_text_domain, $lang);



// Backend Options

require_once ('admin/index.php');



//Custom fields:

include dirname( __FILE__ ) . '/framework/Custom-Metaboxes/metabox-functions.php';

//Theme Set up:



// Create Sidebar column 1

$args = array(

    'name' => sprintf( __( 'Sidebar Footer 1' ), 'folioum' ),

    'id' => "sidebar-footer-1",

    'description' => __( 'Sidebar Footer 1', 'folioum' ),

    'class' => '',

    'before_widget' => '<div id="%1$s" class="widget %2$s">',

    'after_widget' => "</div>",

    'before_title' => '<h3 class="widget-title">',

    'after_title' => "</h3>",

);

register_sidebar( $args );

// End Create Sidebar column 1



// Create Sidebar column 2

$args = array(

    'name' => sprintf( __( 'Sidebar Footer 2' ), 'folioum' ),

    'id' => "sidebar-footer-2",

    'description' => __( 'Sidebar Footer 2', 'folioum' ),

    'class' => '',

    'before_widget' => '<div id="%1$s" class="widget %2$s">',

    'after_widget' => "</div>",

    'before_title' => '<h3 class="widget-title">',

    'after_title' => "</h3>",

);

register_sidebar( $args );

// End Create Sidebar column 2



// Create Sidebar column 3

$args = array(

    'name' => sprintf( __( 'Sidebar Footer 3' ), 'folioum' ),

    'id' => "sidebar-footer-3",

    'description' => __( 'Sidebar Footer 3', 'folioum' ),

    'class' => '',

    'before_widget' => '<div id="%1$s" class="widget %2$s">',

    'after_widget' => "</div>",

    'before_title' => '<h3 class="widget-title">',

    'after_title' => "</h3>",

);

register_sidebar( $args );

// End Create Sidebar column 3



function starter_theme_setup() {

    /*

     * Makes Twenty Thirteen available for translation.

     *

     */

    load_theme_textdomain( 'starter', get_template_directory() . '/languages' );



    // Adds RSS feed links to <head> for posts and comments.

    add_theme_support( 'automatic-feed-links' );



    // This theme styles the visual editor with editor-style.css to match the theme style.

    //add_editor_style();



    // Switches default core markup for search form, comment form, and comments

    // to output valid HTML5.

    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );



    /*

     * This theme supports all available post formats by default.

     * See http://codex.wordpress.org/Post_Formats

     */

    add_theme_support( 'post-formats', array(

        'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'

    ) );



    add_theme_support( 'post-thumbnails' );



    add_shortcode('gallery', '__return_false');

	

	add_image_size( 'thumbnail_80x60', '80', '60', true );

	add_image_size('thumbnail_230x185','230','185', true);

    add_image_size('thumbnail_230','230','', true);

	add_image_size('thumbnail_474','474','', false);

	add_image_size('thumbnail_310x200','310','200', true);	

	add_image_size('thumbnail_142x135','142','135', true);

	







    // This theme uses wp_nav_menu() in one location.

    register_nav_menu( 'primary', __( 'Menu Top', 'starter' ) );

    register_nav_menu( 'footer', __( 'Menu Footer', 'starter' ) );

    register_nav_menu( 'Dropdown', __( 'Menu Dropdown', 'starter' ) );

    register_nav_menu( 'intro', __( 'Menu intro', 'starter' ) );
}

add_action( 'after_setup_theme', 'starter_theme_setup' );



/**
 * Enqueues scripts and styles for front end.
 *
 */

function mint_theme_scripts_styles() {
    // Adds JavaScript to pages with the comment form to support sites with

    wp_enqueue_script("jquery");

    wp_enqueue_script("bootstrap_js", get_stylesheet_directory_uri()."/assets/js/bootstrap.min.js",array(),false,true);
    wp_enqueue_script("js_main", get_stylesheet_directory_uri()."/js/main.js");
    // Loads our main stylesheet.

    wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri().'/assets/css/bootstrap.css');

    wp_enqueue_style( 'style-css', get_stylesheet_directory_uri().'/assets/css/style.css');
    
    wp_enqueue_style( 'awesome', get_stylesheet_directory_uri().'/assets/css/font-awesome.min.css');

    wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array(), '2015-03-26' );

}

add_action( 'wp_enqueue_scripts', 'mint_theme_scripts_styles' );

//Ajax



//For IE

function cams_script_ie() {

    echo '

   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

   <!--[if lt IE 9]>

   <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

   <script src="'.get_stylesheet_directory_uri().'/js/respond.min.js"></script>

   <![endif]-->

  ';

}

add_action( 'wp_head', 'cams_script_ie' );