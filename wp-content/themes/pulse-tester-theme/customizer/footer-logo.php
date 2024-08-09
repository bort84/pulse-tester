<?php /* Footer Header Logo */

$wp_customize->add_setting("logo_footer", array(
    'default'   => ''
));

$wp_customize->add_control(new WP_Customize_Media_Control(
    $wp_customize,
    'logo_footer',
    array(
        'label'      =>  __( 'Footer Logo', 'jb_theme'),
        'section'    =>  'logos',
        'settings'   =>  'logo_footer',
        'extensions' => array( 'jpg', 'jpeg', 'gif', 'png', 'svg' )
    )
)); 

$wp_customize->add_setting("logo_footer_width", array(
    'default'   => 140
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'logo_footer_width',
    array(
        'label'         =>  __( 'Footer Logo Width', 'jb_theme'),
        'section'       =>  'logos',
        'settings'      =>  'logo_footer_width',
        'type'          =>  'number'
    )
)); 

$wp_customize->add_setting("logo_footer_name", array(
    'default'   => ''
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'logo_footer_name',
    array(
        'label'     =>  __( 'Company Name', 'jb_theme'),
        'section'   => 'logos',
        'settings'  => 'logo_footer_name',
        'type'      => 'text'
    )
));

$wp_customize->add_setting("logo_footer_url", array(
    'default'   => ''
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'logo_footer_url',
    array(
		'label'     	=>  __( 'Company URL/Link', 'jb_theme'),
		'description'	=> 	__( 'Leave blank to disable link', 'jb_theme'),
        'section'   	=> 	'logos',
        'settings'  	=> 	'logo_footer_url',
        'type'      	=> 	'url'
    )
));