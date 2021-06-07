<?php
/**
 * Asthir blog Theme Customizer
 *
 * @package Asthir blog
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */


function asthir_blog_customize_register( $wp_customize ) {

    $wp_customize->remove_section( 'asthir_topbar' );

  //  $wp_customize->remove_control('asthir_blog_style');
    $wp_customize->remove_control('asthir_header_style');

        
    $wp_customize->add_setting('asthir_blog_header_style', array(
        'default'       => 'style1',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'asthir_sanitize_select',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('asthir_blog_header_style', array(
        'label'      => __('Site Header Style', 'asthir-blog'),
        'section'    => 'asthir_main_header',
        'settings'   => 'asthir_blog_header_style',
        'type'       => 'select',
        'choices'    => array(
            'style1' => __('Style One', 'asthir-blog'),
            'style2' => __('Style Two', 'asthir-blog'),
        ),
    ));
    // Typography section
	$wp_customize->add_section('asthir_blog_settings', array(
		'title' => __('Asthir Blog Settings', 'asthir-blog'),
		'capability'     => 'edit_theme_options',
		'description'     => __('You can setup Asthir blog by this options.', 'asthir-blog'),
		'priority'       => 40,

	));
        
    $wp_customize->add_setting('asthir_blog_style', array(
        'default'       => 'blog1',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'asthir_sanitize_select',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('asthir_blog_style', array(
        'label'      => __('Blog Style', 'asthir-blog'),
        'section'    => 'asthir_blog_settings',
        'settings'   => 'asthir_blog_style',
        'type'       => 'select',
        'choices'    => array(
            'blog1' => __('Style One', 'asthir-blog'),
            'blog2' => __('Style Two', 'asthir-blog'),
        ),
    ));
    $wp_customize->add_setting('asthir_blog_btn_text', array(
        'default' =>  __('Read More','asthir-blog'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('asthir_blog_btn_text', array(
        'label'      => __('Read More Button Text', 'asthir-blog'),
        'section'    => 'asthir_blog_settings',
        'settings'   => 'asthir_blog_btn_text',
        'type'       => 'text',

    ));
    


}
add_action( 'customize_register', 'asthir_blog_customize_register',99 );

