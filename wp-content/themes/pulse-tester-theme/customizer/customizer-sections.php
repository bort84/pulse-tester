<?php /* Begin Customizer Stuff */

function ns_customize_register( $wp_customize ) {

	/* Remove sections */
	$wp_customize->remove_panel('widgets');
	$wp_customize->remove_section('custom_css');

	/* Add sections */
	$wp_customize->add_section("logos", array(
		"title" 	=> __("Site Logos", "customizer_ads_sections"),
		"priority" 	=> 10
	));

	include( get_stylesheet_directory() . '/customizer/primary-header-logo.php');
	include( get_stylesheet_directory() . '/customizer/secondary-header-logo.php');
	include( get_stylesheet_directory() . '/customizer/footer-logo.php');
}

add_action( 'customize_register', 'ns_customize_register');