<?php /* Customizer Setup */

include get_stylesheet_directory() . '/customizer/customizer-sections.php';

add_action( 'customize_preview_init', 'ns_customizer' );
function ns_customizer() {
    wp_enqueue_script('ns_customizer', get_stylesheet_directory_uri() . '/js/customizer.js', array( 'jquery','customize-preview' ), '', true);
}