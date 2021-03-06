<?php
/**
 * CaribbeanMathAcademy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CaribbeanMathAcademy
 */

if ( ! function_exists( 'math_cseccxc_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function math_cseccxc_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on CaribbeanMathAcademy, use a find and replace
		 * to change 'CaribbeanMathAcademy' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'CaribbeanMathAcademy', get_template_directory() . '/languages' );

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

/*---------------------------------------------Menu Navigation----------------------------------------------------- */
		
  // This theme uses wp_nav_menu() in one location.
  // if you heve multiple words connect with an underscore
		
      register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'header_Menu' ),
		) );

		//Add support for core custom header image background	
		
		$args = array(
			'flex-width'    => true,
			'width'         => 980,
			'flex-height'   => true,
			'height'        => 200,
			'default-image' => get_template_directory_uri() . '/images/header.jpg',
		);
		add_theme_support( 'custom-header', $args );
		
		
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
		add_theme_support( 'custom-background', apply_filters( 'math_cseccxc_custom_background_args', array(
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
add_action( 'after_setup_theme', 'math_cseccxc_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function math_cseccxc_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'math_cseccxc_content_width', 640 );
}
add_action( 'after_setup_theme', 'math_cseccxc_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function math_cseccxc_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'CaribbeanMathAcademy' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'CaribbeanMathAcademy' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'math_cseccxc_widgets_init' );

function math_selftest_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'self-test', 'CaribbeanMathAcademy' ),
		'id'            => 'self-test',
		'description'   => esc_html__( 'Link to selftest here.', 'CaribbeanMathAcademy' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'math_selftest_widgets_init' );

function math_videolessons_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'video-lessons', 'CaribbeanMathAcademy' ),
		'id'            => 'video-lessons',
		'description'   => esc_html__( 'Link to video lessons here.', 'CaribbeanMathAcademy' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'math_videolessons_widgets_init' );

function math_pastpapers_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'past-papers', 'CaribbeanMathAcademy' ),
		'id'            => 'past-papers',
		'description'   => esc_html__( 'Link to video lessons here.', 'CaribbeanMathAcademy' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'math_pastpapers_widgets_init' );


function bidirectional_acf_update_value( $value, $post_id, $field  ) {
	
	// vars
	$field_name = $field['name'];
	$field_key = $field['key'];
	$global_name = 'is_updating_' . $field_name;
	
	
	// bail early if this filter was triggered from the update_field() function called within the loop below
	// - this prevents an inifinte loop
	if( !empty($GLOBALS[ $global_name ]) ) return $value;
	
	
	// set global variable to avoid inifite loop
	// - could also remove_filter() then add_filter() again, but this is simpler
	$GLOBALS[ $global_name ] = 1;
	
	
	// loop over selected posts and add this $post_id
	if( is_array($value) ) {
	
		foreach( $value as $post_id2 ) {
			
			// load existing related posts
			$value2 = get_field($field_name, $post_id2, false);
			
			
			// allow for selected posts to not contain a value
			if( empty($value2) ) {
				
				$value2 = array();
				
			}
			
			
			// bail early if the current $post_id is already found in selected post's $value2
			if( in_array($post_id, $value2) ) continue;
			
			
			// append the current $post_id to the selected post's 'related_posts' value
			$value2[] = $post_id;
			
			
			// update the selected post's value (use field's key for performance)
			update_field($field_key, $value2, $post_id2);
			
		}
	
	}
	
	
	// find posts which have been removed
	$old_value = get_field($field_name, $post_id, false);
	
	if( is_array($old_value) ) {
		
		foreach( $old_value as $post_id2 ) {
			
			// bail early if this value has not been removed
			if( is_array($value) && in_array($post_id2, $value) ) continue;
			
			
			// load existing related posts
			$value2 = get_field($field_name, $post_id2, false);
			
			
			// bail early if no value
			if( empty($value2) ) continue;
			
			
			// find the position of $post_id within $value2 so we can remove it
			$pos = array_search($post_id, $value2);
			
			
			// remove
			unset( $value2[ $pos] );
			
			
			// update the un-selected post's value (use field's key for performance)
			update_field($field_key, $value2, $post_id2);
			
		}
		
	}
	
	
	// reset global varibale to allow this filter to function as per normal
	$GLOBALS[ $global_name ] = 0;
	
	
	// return
    return $value;
    
}

add_filter('acf/update_value/name=related_posts', 'bidirectional_acf_update_value', 10, 3);

/**
 * Enqueue scripts and styles.
 */
function math_cseccxc_scripts() {
	wp_enqueue_style( 'CaribbeanMathAcademy-style', get_stylesheet_uri() );

	wp_enqueue_script( 'CaribbeanMathAcademy-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'CaribbeanMathAcademy-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'math_cseccxc_scripts' );

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

