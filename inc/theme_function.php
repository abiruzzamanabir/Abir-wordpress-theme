<?php
function abir_customization_register($wp_customize)
{

    //Header Area Function
    $wp_customize->add_section('abir_header_area',array(
        'title'=> __('Header Area','abiruzzaman'),
        'description'=> 'If you want to update your header area,you can do it here.',
    ));
    $wp_customize->add_setting('abir_logo',array(
        'default'=> get_bloginfo('template_directory').'/img/logo.png'
    ));

    $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize,'abir_logo',array(
        'label'=> 'logo Upload',
        'description'=> 'If you want to update your logo,you can do it here.',
        'setting' => 'abir_logo',
        'section' => 'abir_header_area',
    )));

    //Menu Position Function
    $wp_customize->add_section('abir_menu_option',array(
        'title'=> __('Menu Position Option','abiruzzaman'),
        'description'=> 'If you want to change your menu position,you can do it here.',
    ));
    $wp_customize->add_setting('abir_menu_position',array(
        'default'=> 'right_menu',
    ));

    $wp_customize-> add_control('abir_menu_position',array(
        'label'=> 'Menu Position',
        'description'=> 'Select Your Menu Position From Here.',
        'setting' => 'abir_menu_position',
        'section' => 'abir_menu_option',
        'type'=>'radio',
        'choices'=>array(
            'left_menu'=>'Left Menu',
            'right_menu'=>'Right Menu',
            'center_menu'=>'Center Menu',
        )
    ));
        //Footer Option Function
        $wp_customize->add_section('abir_footer_option',array(
            'title'=> __('Footer Option','abiruzzaman'),
            'description'=> 'If you want to change or update your footer,you can do it here.',
        ));
        $wp_customize->add_setting('abir_copyright_section',array(
            'default'=> '© Copyright 2022 | ',
        ));
    
        $wp_customize-> add_control('abir_copyright_section',array(
            'label'=> 'Copyright Text',
            'description'=> 'You Can Update Your Copyright Text From Here.',
            'setting' => 'abir_copyright_section',
            'section' => 'abir_footer_option',
        ));

        $wp_customize->add_setting('abir_copyright_section_link',array(
            'default'=> 'https://www.facebook.com/',
        ));
    
        $wp_customize-> add_control('abir_copyright_section_link',array(
            'label'=> 'Copyright link',
            'description'=> 'You Can Update Your Copyright Link From Here.',
            'setting' => 'abir_copyright_section_link',
            'section' => 'abir_footer_option',
        ));

        $wp_customize->add_setting('abir_copyright_section_link_text',array(
            'default'=> 'Abir',
        ));
    
        $wp_customize-> add_control('abir_copyright_section_link_text',array(
            'label'=> 'Copyright link text',
            'description'=> 'You Can Update Your Copyright Link Text From Here.',
            'setting' => 'abir_copyright_section_link_text',
            'section' => 'abir_footer_option',
        ));
    }
    
    add_action('customize_register','abir_customization_register');
    