<?php
/* =================================================================

	Global Settings

 ================================================================= */

/* Misc Settings
=================================== */

/* WordPress by default, creates attachment pages for all media attached
to posts. They tend to be pointless, and no one one knows why they exist.
(That's a FACT.) Often, attachment pages are neglected and unstyled, and
look ugly. These pages will now be turned off by default. To turn them
back on, for whatever dumb reason, change this value to false. */
define("KILL_ATTACHMENT_PAGE", true); //(true/false)


/* Fixes bug in 4.7.2 that breaks mime types. Was supposed to be fixed
in 4.7.3 ...but that doesn't seem to be the case, so this has been added
to ns-core for the moment. */
define("DISABLE_REAL_MIME_CHECK", true); //(true/false)



/* =================================================================

	Theme Supports

================================================================= */

add_theme_support('post-thumbnails');
add_theme_support( 'title-tag' );
add_theme_support( 'html5', array( 'gallery', 'caption' ) );



/* =================================================================

	Required Files

	It's best to avoid editing these files directly! If you need
	to adjust something, do it in this functions.php file.

================================================================= */

/* Functions that require no configuration and are worth being in every WordPress theme. Also includes Mobile_Detect */
require_once('inc/core.php');

// Custom Posts Setup
require_once( 'inc/customposts.php' );

// Custom Taxonomy Setup
require_once( 'inc/customtax.php' );

// Custom Gutenberg Script
require_once( 'inc/gutenberg.php' );



/* ==========================================================================

	Htpasswd Settings

========================================================================= */

// define('HTA_USER', 'replace');
// define('HTA_PWD', 'replace');



/* ==========================================================================

	Mobile & Tablet Detection

========================================================================= */

if (!class_exists('Mobile_Detect')) {
	require_once( get_template_directory() . '/inc/Mobile_Detect.php' );
}
global $deviceType;
$detect = new Mobile_Detect;

$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');



/* ==========================================================================

	Get Customizer info

========================================================================== */

include( get_stylesheet_directory() . '/customizer/customizer-setup.php');



/* ==========================================================================

	Admin Simplification.

========================================================================== */

add_action( 'admin_menu', function() {
	remove_meta_box( 'commentsdiv', array('page', 'post'), 'normal' ); 		// Comments meta box
	remove_meta_box( 'authordiv', array('page', 'post'), 'normal' ); 			// Author meta box
	remove_meta_box( 'tagsdiv-post_tag', array('page', 'post'), 'side' ); 		// Post tags meta box
	// remove_meta_box( 'categorydiv', array('page', 'post'), 'side' ); 		// Category meta box
	// remove_meta_box( 'postexcerpt', array('page', 'post'), 'normal' ); 		// Excerpt meta box
	remove_meta_box( 'trackbacksdiv', array('page', 'post'), 'normal' ); 		// Trackbacks meta box
	// remove_meta_box( 'postcustom', array('page', 'post'), 'normal' ); 		// Custom fields meta box
	remove_meta_box( 'commentstatusdiv', array('page', 'post'), 'normal' ); 	// Comment status meta box
	// remove_meta_box( 'postimagediv', array('page', 'post'), 'side' ); 		// Featured image meta box
	// remove_meta_box( 'pageparentdiv', array('page', 'post'), 'side' ); 		// Page attributes meta box
	// remove_menu_page('index.php'); 							// Dashboard
	// remove_menu_page('edit.php'); 							// Posts
	// remove_menu_page('upload.php');							// Media
	remove_menu_page('link-manager.php'); 						// Links
	// remove_menu_page('edit.php?post_type=page'); 			// Pages
	remove_menu_page('edit-comments.php'); 						// Comments
	// remove_menu_page('themes.php'); 							// Appearance
	// remove_menu_page('plugins.php'); 						// Plugins
	// remove_menu_page('users.php'); 							// Users
	// remove_menu_page('tools.php'); 							// Tools
	// remove_menu_page('options-general.php'); 				// Settings
});


/* Remove Meta Boxes */
// add_action( 'add_meta_boxes', function() {
	// remove_meta_box( 'tagsdiv-post_tag', 'post', 'side' ); // remove the Tags box
	// remove_meta_box( 'formatdiv', 'post', 'side' ); // remove the Format box
	// remove_meta_box( 'categorydiv', 'post', 'side' ); // remove the Categories box
// });



/* =================================================================

	Menus & Image Size

	NS-Core-Theme adds a 'primary' & 'footer' navigation by default.
	Specify any additional navigation menus and image sizes you
	may need for this build here.

================================================================= */
add_filter( 'intermediate_image_sizes_advanced', 'jb_remove_default_image_sizes' );

function jb_remove_default_image_sizes( $sizes ) {
	// unset( $sizes['thumbnail']); // 150px
	unset( $sizes['medium']); // 300px
	unset( $sizes['medium_large']); // 768px
	unset( $sizes['large']); // 1024px
	return $sizes;
}

add_action( 'after_setup_theme', function(){
	register_nav_menus(array('primary' => 'Primary Navigation'));
	// register_nav_menus(array('footer' => 'Footer Navigation'));

	// add_image_size( 'post-thumbnail', 600, 400, true );
}, 15 );



/* =================================================================

	Scripts & Styles

	Make adjustments / additions as necessary. If you are using
	Google Fonts, add them in here in the 'google-fonts' section.

================================================================= */

add_action( 'wp_enqueue_scripts', function() {

	/* filetime() portion is important! It will automatically flush out the old css or js file when you make a new change to said file! */

	/* All Public Pages
	------------------------ */
	wp_enqueue_script('site-js', get_stylesheet_directory_uri() . '/js/site-min.js', array('jquery'), filemtime( get_stylesheet_directory() . '/js/site-min.js'), true);

	// wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap', array(), false, 'all');

	wp_enqueue_style('theme-css', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime( get_stylesheet_directory() . '/css/theme.css'), 'all');

	wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css', array('theme-css'), filemtime( get_stylesheet_directory() . '/style.css'), 'all');

});

add_theme_support( 'editor-styles' );
add_editor_style( 'css/backend.css' );

/* Prep site-js to run ajax scripts */
// function ajax_enqueue() {
//    	wp_localize_script( 'site-js', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));
// }
// add_action( 'wp_enqueue_scripts', 'ajax_enqueue' );



/* =================================================================

	NS Custom Posts Setup


	Simple function (that should be built into WordPress!) that greatly simplifies the creation of custom taxonomies.

		@param  string			$post_type						(REQUIRED)  The slug of the new Post type.
	@param  string 			$post_name 						(REQUIRED)  Plural name of Post (e.g., Books)
	@param  string 			$post_singular_name 			(Optional) 	Singular name of Taxonomy. Defaults to $tax_name. (e.g., Book)
	@param  boolean 		$is_public 						(Optional) 	Set whether users will be able to see the post
	@param  array 			$extras 						(Optional) 	Additional settings to overwrite defaults

	@return void

================================================================= */

// add_action( 'init', function() {
// 	jb_custom_posts(
// 		'example',
// 		'Example Custom Post Type',
// 		'Post',
// 		true,
// 		array(
// 			'supports'	=>	array( 'title', 'editor', 'page-attributes' )
// 		)
// 	);
// });



/* =================================================================
	Custom Post Taxonomies.

	Creating custom taxonomies has been greatly simplified with
	the function jb_custom_taxonomy.

	Call it once for each Custom Tax you need to create, using
	the format below.

		@param  string 				$tax  				(REQUIRED)  The slug of the new Taxonomy type.
		@param  array/string  		$posttypes 			(REQUIRED)  An array of post types to attach the Taxonomy to.
														Also accepts one posttype as a string.
		@param  string 				$tax_name 			(REQUIRED)  Plural name of Taxonomy (e.g., Companies)
		@param  string 				$tax_singular_name 	(Optional) 	Singular name of Taxonomy. Defaults to $tax_name. (e.g., Company)
		@param  boolean 			$hierarchical 		(Optional) 	Should it have heiracthy like a Category (true),
														or not like a Tag (false). Defaults to True.
		@param  string 				$text_domain 		(Optional) 	Theme domain

================================================================= */

// add_action( 'init', function() {
// 	jb_custom_taxonomy(
// 		'example',
// 		array( 'bio' ),
// 		'Companies',
// 		'Company',
// 		true,
// 		'skeleton-theme'
// 	);
// }, 0);



/* ==========================================================================

	ACF - add theme options page

========================================================================= */
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Sitewide Content',
		'menu_title'	=> 'Sitewide Content',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

/* ==========================================================================

	ACF Block
	- Register blocks
	- Register Block Category
	- Blocks allowed

========================================================================= */
function jb_register_acf_blocks() {
    register_block_type( __DIR__ . '/blocks/content-row' );
	register_block_type( __DIR__ . '/blocks/hero' );
	register_block_type( __DIR__ . '/blocks/text' );
}
add_action( 'init', 'jb_register_acf_blocks' );


add_filter( 'block_categories_all', 'jb_block_category', 10, 2);
function jb_block_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'pulse-blocks',
				'title' => __( 'Pulse Blocks', 'pulse-blocks' ),
			),
		)
	);
}

add_filter( 'allowed_block_types_all', 'jb_allowed_block_types' );
function jb_allowed_block_types() {
	return array(
		// allow core blocks
		// 'core/freeform',

		// allow acf blocks
		'acf/content-row',
		'acf/hero',
		'acf/text'
	);
}

function qode_use_dashicons_on_front_end() {
	wp_enqueue_style( 'dashicons' );
	}
	add_action( 'wp_enqueue_scripts', 'qode_use_dashicons_on_front_end' );