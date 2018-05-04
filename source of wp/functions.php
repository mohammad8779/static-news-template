<?php
/**
 * PerfectPoingMarketing functions and definitions
 *
 * Sets up the theme and provides some helper functions. 
 *
 * @package WordPress
 * @subpackage PerfectPoingMarketing
 */
 
 
	/* Adding Latest jQuery from Wordpress */
	function news_reporter_latest_jquery() {
		wp_enqueue_script('jquery');
	}
	add_action('init', 'news_reporter_latest_jquery');


	// add menu support and fallback menu if menu doesn't exist
	add_action('init', 'wpj_register_menu');
	function wpj_register_menu() {
		if (function_exists('register_nav_menu')) {
			register_nav_menu( 'wpj-main-menu', __( 'Main Menu', 'brightpage' ) );
		}
	}
	register_nav_menu( 'top-menu', __( 'Top Menu', 'brightpage' ) );
	register_nav_menu( 'footer-menu', __( 'Footer Menu', 'brightpage' ) );
	function wpj_default_menu() {
		echo '<ul id="nav">';
		if ('page' != get_option('show_on_front')) {
			echo '<li><a href="'. home_url() . '/">Home</a></li>';
		}
		wp_list_pages('title_li=');
		echo '</ul>';
	}
	
	add_theme_support( 'post-thumbnails', array( 'post', 'slider') );
	add_image_size( 'slider-image', 670, 325, true );
	
 /* Register sidebars and widgetized areas ********************************************/
	
	function PerfectPoingMarketing_widget_areas() {


   	    register_sidebar( array(
			'name' => __( 'Footer Widget', 'PerfectPoingMarketing' ),
			'id' => 'footer_widgets',
			'before_widget' => '<div class="single_footer floatleft fix">',
	        'after_widget' => '</div>',
	        'before_title' => '<h2>',
	        'after_title' => '</h2>',
	    ) );
		

		

	}
	add_action('widgets_init', 'PerfectPoingMarketing_widget_areas');
	
	
	add_action( 'init', 'create_post_type' );
	function create_post_type() {
	
	
		register_post_type( 'slider',
			array(
				'labels' => array(
						'name' => __( 'Slider' ),
						'singular_name' => __( 'Slide' ),
						'add_new' => __( 'Add New' ),
						'add_new_item' => __( 'Add New Slide' ),
						'edit_item' => __( 'Edit Slide' ),
						'new_item' => __( 'New Slide' ),
						'view_item' => __( 'View Slide' ),
						'not_found' => __( 'Sorry, we couldn\'t find the Slide you are looking for.' )
				),
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => true,
			'menu_position' => 14,
			'has_archive' => true,
			'hierarchical' => true,
			'capability_type' => 'post',
			'rewrite' => array( 'slug' => 'slide' ),
			'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail' )
			)
		);
			
	}	
	
 
 ?>