<?php
/**
 * Sahahamar functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sahahamar
 */

if ( ! function_exists( 'shahamar_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function shahamar_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Sahahamar, use a find and replace
		 * to change 'shahamar' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'shahamar', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'shahamar' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'shahamar_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'shahamar_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function shahamar_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'shahamar_content_width', 640 );
}
add_action( 'after_setup_theme', 'shahamar_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function shahamar_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'shahamar' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'shahamar' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'shahamar_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function shahamar_scripts() {
	
	wp_enqueue_style( 'shahamar-bootstrap', get_template_directory_uri().'/css/bootstrap.min.css' );
	wp_enqueue_style( 'shahamar-jquery-ui', get_template_directory_uri().'/css/jquery-ui.css' );
	wp_enqueue_style( 'shahamar-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-1/css/all.css' );
	wp_enqueue_style( 'shahamar-owl', get_template_directory_uri().'/css/owl.carousel.min.css' );
	wp_enqueue_style( 'shahamar-animate', get_template_directory_uri().'/css/animate.css' );
	wp_enqueue_style( 'shahamar-stellarnav', get_template_directory_uri().'/css/stellarnav.min.css' );
	wp_enqueue_style( 'shahamar-magnific', get_template_directory_uri().'/css/magnific-popup.css' );
	wp_enqueue_style( 'shahamar-font', get_template_directory_uri().'/fonts/stylesheet.css' );
	wp_enqueue_style( 'shahamar-style', get_stylesheet_uri() );
	wp_enqueue_style( 'shahamar-responsive', get_template_directory_uri().'/css/responsive.css' );

	wp_enqueue_script( 'shahamar-jquery-3', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '20151215', true );
	wp_enqueue_script( 'shahamar-jquery-ui', get_template_directory_uri() . '/js/jquery-ui.js', array(), '20151215', true );
	wp_enqueue_script( 'shahamar-owl', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20151215', true );
	wp_enqueue_script( 'shahamar-counterp', get_template_directory_uri() . '/js/jquery.counterup.min.js', array(), '20151215', true );
	wp_enqueue_script( 'shahamar-countdown', get_template_directory_uri() . '/js/countdown.js', array(), '20151215', true );
	wp_enqueue_script( 'shahamar-stellarnav', get_template_directory_uri() . '/js/stellarnav.min.js', array(), '20151215', true );
	wp_enqueue_script( 'shahamar-imageload', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array(), '20151215', true );
	wp_enqueue_script( 'shahamar-isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array(), '20151215', true );
	wp_enqueue_script( 'shahamar-magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), '20151215', true );
	wp_enqueue_script( 'shahamar-scrollup', get_template_directory_uri() . '/js/jquery.scrollUp.js', array(), '20151215', true );
	wp_enqueue_script( 'shahamar-waypoint', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), '20151215', true );
	wp_enqueue_script( 'shahamar-popper', get_template_directory_uri() . '/js/popper.min.js', array(), '20151215', true );
	wp_enqueue_script( 'shahamar-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'shahamar-theme', get_template_directory_uri() . '/js/theme.js', array(), '20151215', true );
	wp_enqueue_script( 'shahamar-wow', get_template_directory_uri() . '/js/wow.min.js', array(), '20151215', false );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'shahamar_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

//Adding CMB2 metabox
if( file_exists( dirname( __FILE__ ) . '/metabox/init.php')){
    require_once( dirname( __FILE__ ) . '/metabox/init.php');
}
if( file_exists( dirname( __FILE__ ) . '/metabox/cusmeta.php')){
    require_once( dirname( __FILE__ ) . '/metabox/cusmeta.php');
}



//Custom Posts 
// Testimonials
if(current_user_can('manage_options')){
	register_post_type('testimonial',array(
	'labels'    => array(
		'name'      =>'Testimonials',
		'add_new_item'  => 'Name',
		'view_item' => 'View Testimonial'
	),
	'public'    => true,
	'menu_icon' => 'dashicons-format-quote',
	'menu_position' => 4,
	'supports'  => array('title','editor','thumbnail','revisions'),
	'show_in_nav_menus' => false
	));
	
}


//Filterable_portfolio

if(current_user_can('manage_options')){
	register_post_type('portfolio',array(
	'labels'    => array(
		'name'      =>'Portfolio',
		'add_new_item'  => 'Add New Portfolio',
		'view_item' => 'View Portfolio'
	),
	'public'    => true,
	'menu_icon' => 'dashicons-awards',
	'menu_position' => 4,
	'supports'  => array('title','editor','thumbnail','revisions'),
	'show_in_nav_menus' => false
	));
}

//Custom texonomy for filterable portfolio
add_action( 'init', 'shahamar_portfolio_category' );

function shahamar_portfolio_category() {
	register_taxonomy(
		'portfolio_category',
		'portfolio',
		array(
			'label' => __( 'Portfolio Category' ),
			'rewrite' => array( 'slug' => 'portfolio-caegory' ),
			'hierarchical' => true,
		)
	);
}


function shahamar_excerpt_more( $more ) {
    return ' ...<a href="'.get_the_permalink().'" rel="nofollow">Read More</a>';
}
add_filter( 'excerpt_more', 'shahamar_excerpt_more' );


function shahamar_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'shahamar_custom_excerpt_length', 999 );



function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
// Remove issues with prefetching adding extra views
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


function wpdocs_my_search_form( $form ) {
    $form = '<div class="sidebar-widget"><form role="search" method="get" id="searchform" class="searchform search-form" action="' . home_url( '/' ) . '" >
    <div class="search-input-box">
    <input placeholder="Search" type="text" value="' . get_search_query() . '" name="s" id="s" />
	
	<button type="submit"><i class="fas fa-search"></i></button>
    </div>
	</form>
	</div>';
 
    return $form;
}
add_filter( 'get_search_form', 'wpdocs_my_search_form' );