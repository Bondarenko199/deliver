<?php
/**
 * deliver functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package deliver
 */

if ( ! function_exists( 'deliver_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function deliver_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on deliver, use a find and replace
	 * to change 'deliver' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'deliver', get_template_directory() . '/languages' );

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
		'menu-header' => esc_html__('Primary', 'deliver'),
		'menu-footer' => esc_html__('Footer', 'deliver'),
		'menu-social' => esc_html__('Social', 'deliver')
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
	add_theme_support( 'custom-background', apply_filters( 'deliver_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'deliver_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function deliver_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'deliver_content_width', 640 );
}
add_action( 'after_setup_theme', 'deliver_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function deliver_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'deliver' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'deliver' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Social menu', 'deliver' ),
		'id'            => 'social-menu',
		'description'   => esc_html__( 'Add widgets here.', 'deliver' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'deliver_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function deliver_scripts() {
	wp_enqueue_style( 'deliver-style', get_stylesheet_uri() );

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/layouts/bootstrap.css');

	wp_enqueue_style( 'bootstrap-grid', get_template_directory_uri() . '/layouts/bootstrap-grid.css');

	wp_enqueue_style( 'bootstrap-reboot', get_template_directory_uri() . '/layouts/bootstrap-reboot.css');

	wp_enqueue_style( 'owl', get_template_directory_uri() . '/layouts/owl.carousel.css');

	wp_enqueue_style( 'owl-defult', get_template_directory_uri() . '/layouts/owl.theme.default.css');

	wp_enqueue_style( 'style', get_template_directory_uri() . '/layouts/style.css');

	wp_enqueue_script( 'jquery', get_template_directory_uri(), false, true );

	wp_enqueue_script( 'deliver-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'tether', get_template_directory_uri() . '/js/tether.min.js', array() , false, true );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true );

	wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), false, true );

	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), false, true );

	wp_enqueue_script( 'deliver-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'deliver_scripts' );

//custom logo

add_theme_support( 'custom-logo' );

//SLIDER

function register_slider() {
	$labels = array(
		'name'               => _x( 'Slides', 'post type general name', 'deliver' ),
		'singular_name'      => _x( 'Slide', 'post type singular name', 'deliver' ),
		'menu_name'          => _x( 'Slides', 'admin menu', 'deliver' ),
		'name_admin_bar'     => _x( 'Slide', 'add new on admin bar', 'deliver' ),
		'add_new'            => _x( 'Add New', 'slide', 'deliver' ),
		'add_new_item'       => __( 'Add New Slide', 'deliver' ),
		'new_item'           => __( 'New Slide', 'deliver' ),
		'edit_item'          => __( 'Edit Slide', 'deliver' ),
		'view_item'          => __( 'View Slide', 'deliver' ),
		'all_items'          => __( 'All Slides', 'deliver' ),
		'search_items'       => __( 'Search Slides', 'deliver' ),
		'parent_item_colon'  => __( 'Parent Slides:', 'deliver' ),
		'not_found'          => __( 'No slides found.', 'deliver' ),
		'not_found_in_trash' => __( 'No slides found in Trash.', 'deliver' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'deliver' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'slide' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'slide', $args );
}
add_action( 'init', 'register_slider' );

/**
* Register Services
 **/

function register_services() {
	$labels = array(
		'name'               => _x( 'Services', 'post type general name', 'deliver' ),
		'singular_name'      => _x( 'Service', 'post type singular name', 'deliver' ),
		'menu_name'          => _x( 'Services', 'admin menu', 'deliver' ),
		'name_admin_bar'     => _x( 'Service', 'add new on admin bar', 'deliver' ),
		'add_new'            => _x( 'Add New', 'service', 'deliver' ),
		'add_new_item'       => __( 'Add New Service', 'deliver' ),
		'new_item'           => __( 'New Service', 'deliver' ),
		'edit_item'          => __( 'Edit Service', 'deliver' ),
		'view_item'          => __( 'View Service', 'deliver' ),
		'all_items'          => __( 'All Services', 'deliver' ),
		'search_items'       => __( 'Search Services', 'deliver' ),
		'parent_item_colon'  => __( 'Parent Service:', 'deliver' ),
		'not_found'          => __( 'No service found.', 'deliver' ),
		'not_found_in_trash' => __( 'No services found in Trash.', 'deliver' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'deliver' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'service' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'service', $args );
}
add_action( 'init', 'register_services' );

/**
 * Register Services
 **/

function register_portfolio() {
	$labels = array(
		'name'               => _x( 'Portfolio', 'post type general name', 'deliver' ),
		'singular_name'      => _x( 'Latest work', 'post type singular name', 'deliver' ),
		'menu_name'          => _x( 'Portfolio', 'admin menu', 'deliver' ),
		'name_admin_bar'     => _x( 'Portfolio', 'add new on admin bar', 'deliver' ),
		'add_new'            => _x( 'Add New', 'service', 'deliver' ),
		'add_new_item'       => __( 'Add New Work', 'deliver' ),
		'new_item'           => __( 'New Work', 'deliver' ),
		'edit_item'          => __( 'Edit Portfolio', 'deliver' ),
		'view_item'          => __( 'View Portfolio', 'deliver' ),
		'all_items'          => __( 'All Works', 'deliver' ),
		'search_items'       => __( 'Search Portfolio', 'deliver' ),
		'parent_item_colon'  => __( 'Parent Portfolio:', 'deliver' ),
		'not_found'          => __( 'No works found.', 'deliver' ),
		'not_found_in_trash' => __( 'No works found in Trash.', 'deliver' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'deliver' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'portfolio', $args );
}
add_action( 'init', 'register_portfolio' );

/**
 * Register Services
 **/

function register_team() {
	$labels = array(
		'name'               => _x( 'Team', 'post type general name', 'deliver' ),
		'singular_name'      => _x( 'Member', 'post type singular name', 'deliver' ),
		'menu_name'          => _x( 'Team', 'admin menu', 'deliver' ),
		'name_admin_bar'     => _x( 'Team', 'add new on admin bar', 'deliver' ),
		'add_new'            => _x( 'Add New', 'member', 'deliver' ),
		'add_new_item'       => __( 'Add New Member', 'deliver' ),
		'new_item'           => __( 'New Member', 'deliver' ),
		'edit_item'          => __( 'Edit Member', 'deliver' ),
		'view_item'          => __( 'View Team', 'deliver' ),
		'all_items'          => __( 'All Members', 'deliver' ),
		'search_items'       => __( 'Search Member', 'deliver' ),
		'parent_item_colon'  => __( 'Parent Team:', 'deliver' ),
		'not_found'          => __( 'No members found.', 'deliver' ),
		'not_found_in_trash' => __( 'No members found in Trash.', 'deliver' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'deliver' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'team' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields' )
	);

	register_post_type( 'team', $args );
}
add_action( 'init', 'register_team' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
* Reorder input fields
**/

// add_filter( 'comment_form_fields', 'example_order_comment_form_fields' );

// function example_order_comment_form_fields( $fields ) {

//     // Move comment field last.
//     $fields['comment'] = array_shift( $fields );

//     return $fields;

// }

// add_filter( 'comment_form_fields', 'order_comment_form_fields' );

// function order_comment_form_fields( $fields ) {

//     $comment = $fields['comment'];

//     unset( $fields['comment'] );

//     $fields['comment'] = $comment;

//     return $fields;

// }
