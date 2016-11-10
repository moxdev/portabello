<?php
/**
 * portabello Theme Customizer.
 *
 * @package portabello
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function mm4_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    $wp_customize->remove_section( 'colors' );

    // Company Information section
    $wp_customize->add_section ( 'company_contact_information', array(
        'title'       => 'Company Information',
        'description' => 'Fill out your company information',
        'priority'    => '1'
    ) );
    // Company name
    $wp_customize->add_setting ( 'setting_name', array(
        'default'           => 'Portabello Apartments',
        'sanitize_callback' => 'sanitize_text'
    ) );
    $wp_customize->add_control ( 'setting_name', array(
        'label'   => 'Company Name',
        'section' => 'company_contact_information',
        'type'    => 'text'
    ) );
    // Company address
    $wp_customize->add_setting ( 'setting_address', array(
        'sanitize_callback' => 'sanitize_text'
    ) );
    $wp_customize->add_control ( 'setting_address', array(
        'label'   => 'Street Address',
        'section' => 'company_contact_information',
        'type'    => 'text'
    ) );
    // City
    $wp_customize->add_setting ( 'setting_city', array(
            'sanitize_callback' => 'sanitize_text'
        ) );
    $wp_customize->add_control ( 'setting_city', array(
            'label'   => 'City',
            'section' => 'company_contact_information',
            'type'    => 'text'
        ) );
    // State
    $wp_customize->add_setting ( 'setting_state', array(
            'sanitize_callback' => 'sanitize_text'
        ) );
    $wp_customize->add_control ( 'setting_state', array(
            'label'   => 'State',
            'section' => 'company_contact_information',
            'type'    => 'text'
        ) );
    // Company zipcode
    $wp_customize->add_setting ( 'setting_zipcode', array(
            'sanitize_callback' => 'sanitize_text'
        ) );
    $wp_customize->add_control ( 'setting_zipcode', array(
            'label'   => 'Zip Code',
            'section' => 'company_contact_information',
            'type'    => 'text'
        ) );
    // Company phone number
    $wp_customize->add_setting ( 'setting_phone', array(
            'sanitize_callback' => 'sanitize_text'
        ) );
    $wp_customize->add_control ( 'setting_phone', array(
            'label'   => 'Phone Number',
            'section' => 'company_contact_information',
            'type'    => 'text'
        ) );
    // Fax number
    $wp_customize->add_setting ( 'setting_fax', array(
            'sanitize_callback' => 'sanitize_text'
        ) );
    $wp_customize->add_control ( 'setting_fax', array(
            'label'   => 'Fax Number',
            'section' => 'company_contact_information',
            'type'    => 'text'
        ) );
    // Email
    $wp_customize->add_setting ( 'setting_email', array(
            'sanitize_callback' => 'sanitize_text'
        ) );
    $wp_customize->add_control ( 'setting_email', array(
            'label'   => 'Email',
            'section' => 'company_contact_information',
            'type'    => 'text'
        ) );
    // Office Hours 1
    $wp_customize->add_setting ( 'setting_hours1', array(
            'sanitize_callback' => 'sanitize_text'
        ) );
    $wp_customize->add_control ( 'setting_hours1', array(
            'label'   => 'Office Hours 1',
            'section' => 'company_contact_information',
            'type'    => 'text'
        ) );
    // Office Hours 2
    $wp_customize->add_setting ( 'setting_hours2', array(
            'sanitize_callback' => 'sanitize_text'
        ) );
    $wp_customize->add_control ( 'setting_hours2', array(
            'label'   => 'Office Hours 2',
            'section' => 'company_contact_information',
            'type'    => 'text'
        ) );
    // Office Hours 3
    $wp_customize->add_setting ( 'setting_hours3', array(
            'sanitize_callback' => 'sanitize_text'
        ) );
    $wp_customize->add_control ( 'setting_hours3', array(
            'label'   => 'Office Hours 3',
            'section' => 'company_contact_information',
            'type'    => 'text'
        ) );
}
add_action( 'customize_register', 'mm4_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function mm4_customize_preview_js() {
	wp_enqueue_script( 'mm4_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'mm4_customize_preview_js' );

/**
 * SANITIZE WHAT IS ENTERED
*/

function sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}
