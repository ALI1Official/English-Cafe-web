<?php
/**
 * Override default customizer options.
 *
 * @package eLearning
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Override controls.
 */
// Outside container > background control.
//$wp_customize->get_control( 'background_color' )->section  = 'elearning_background_section';
//$wp_customize->get_control( 'background_color' )->priority = 20;
//$wp_customize->get_control( 'background_color' )->type     = 'elearning-color';
//
//$wp_customize->get_control( 'background_image' )->section  = 'elearning_background_section';
//$wp_customize->get_control( 'background_image' )->priority = 25;
//
//$wp_customize->get_control( 'background_preset' )->section  = 'elearning_background_section';
//$wp_customize->get_control( 'background_preset' )->priority = 30;
//
//$wp_customize->get_control( 'background_position' )->section  = 'elearning_background_section';
//$wp_customize->get_control( 'background_position' )->priority = 35;
//
//$wp_customize->get_control( 'background_size' )->section  = 'elearning_background_section';
//$wp_customize->get_control( 'background_size' )->priority = 40;
//
//$wp_customize->get_control( 'background_repeat' )->section  = 'elearning_background_section';
//$wp_customize->get_control( 'background_repeat' )->priority = 45;
//
//$wp_customize->get_control( 'background_attachment' )->section  = 'elearning_background_section';
//$wp_customize->get_control( 'background_attachment' )->priority = 50;

$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
$wp_customize->get_control( 'blogname' )->section          = 'elearning_header_builder_logo';
$wp_customize->get_control( 'blogname' )->priority         = 4;
$wp_customize->get_control( 'blogdescription' )->section   = 'elearning_header_builder_logo';
$wp_customize->get_control( 'blogdescription' )->priority  = 5;
$wp_customize->get_control( 'site_icon' )->section         = 'elearning_header_builder_logo';
$wp_customize->get_control( 'site_icon' )->priority        = 6;

// Site Identity.
//$wp_customize->get_control( 'custom_logo' )->priority         = 6;
//$wp_customize->get_control( 'site_icon' )->priority           = 12;
//$wp_customize->get_control( 'blogname' )->priority            = 14;
//$wp_customize->get_control( 'blogdescription' )->priority     = 16;
//$wp_customize->get_control( 'display_header_text' )->priority = 18;
//$wp_customize->get_control( 'header_textcolor' )->section     = 'title_tagline';
//$wp_customize->get_control( 'header_textcolor' )->priority    = 20;
//$wp_customize->get_control( 'header_textcolor' )->type        = 'elearning-color';
//
// Settings.
//$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
//$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
//$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

$wp_customize->remove_control( 'display_header_text' );
$wp_customize->remove_control( 'display_header_text' );
$wp_customize->remove_control( 'header_textcolor' );
$wp_customize->remove_control( 'background_attachment' );
$wp_customize->remove_control( 'background_repeat' );
$wp_customize->remove_control( 'background_size' );
$wp_customize->remove_control( 'background_position' );
$wp_customize->remove_control( 'background_preset' );
$wp_customize->remove_control( 'background_image' );
$wp_customize->remove_control( 'background_color' );

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'blogname',
		array(
			'selector'        => '.site-title a',
			'render_callback' => 'elearning_Customizer_Partials::customize_partial_blogname',
		)
	);

	$wp_customize->selective_refresh->add_partial(
		'blogdescription',
		array(
			'selector'        => '.site-description',
			'render_callback' => 'elearning_Customizer_Partials::customize_partial_blogdescription',
		)
	);

	$wp_customize->selective_refresh->add_partial(
		'document_title',
		array(
			'selector'        => 'head > title',
			'settings'        => array( 'blogname', 'blogdescription' ),
			'render_callback' => 'wp_get_document_title',
		)
	);
}

// Header Media.
$wp_customize->get_control( 'header_video' )->priority       = 6;
$wp_customize->get_control( 'header_image' )->priority       = 11;
$wp_customize->get_control( 'external_header_video' )->label = esc_html__( 'Header Video URL', 'elearning' );
