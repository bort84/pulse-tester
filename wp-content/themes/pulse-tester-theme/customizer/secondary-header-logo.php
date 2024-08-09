<?php /* Secondary Header Logo */

$wp_customize->add_setting("logo_secondary_header", array(
    'default'   => ''
));

$wp_customize->add_control(new WP_Customize_Media_Control(
    $wp_customize,
    'logo_secondary_header',
    array(
        'label'      =>  __( 'Secondary Header Logo', 'jb_theme'),
        'section'    =>  'logos',
        'settings'   =>  'logo_secondary_header',
        'extensions' => array( 'jpg', 'jpeg', 'gif', 'png', 'svg' )
    )
)); 

$wp_customize->add_setting("logo_secondary_header_width", array(
    'default'   => 140
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'logo_secondary_header_width',
    array(
        'label'         =>  __( 'Secondary Header Logo Width', 'jb_theme'),
        'section'       =>  'logos',
        'settings'      =>  'logo_secondary_header_width',
        'type'          =>  'number'
    )
)); 

$wp_customize->add_setting("logo_secondary_header_name", array(
    'default'   => ''
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'logo_secondary_header_name',
    array(
        'label'     =>  __( 'Company Name', 'jb_theme'),
        'section'   => 'logos',
        'settings'  => 'logo_secondary_header_name',
        'type'      => 'text'
    )
));

$wp_customize->add_setting("logo_secondary_header_url", array(
    'default'   => ''
));

$wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    'logo_secondary_header_url',
    array(
		'label'     	=>  __( 'Company URL/Link', 'jb_theme'),
		'description'	=> 	__( 'Leave blank to disable link', 'jb_theme'),
        'section'   	=> 	'logos',
        'settings'  	=> 	'logo_secondary_header_url',
        'type'      	=> 	'url'
    )
));