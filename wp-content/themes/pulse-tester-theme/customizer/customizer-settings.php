<?php /* Logo Fields */

function ns_customizer_fields( $wp_customize ) {

    $wp_customize->add_setting("logo_main_name", array(
        'default'   => ''
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'logo_main_name',
        array(
            'label'     =>  __( 'Company Name', 'jb_theme'),
            'section'   => 'logos',
            'settings'  => 'ogo_main_name',
            'type'      => 'text'
        )
    ));
}

add_action( 'customizer_register', 'ns_customizer_fields');