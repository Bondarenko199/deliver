<?php
/**
 * deliver Theme Customizer
 *
 * @package deliver
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function deliver_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// Settings

	//Header
	$wp_customize->add_setting( 'home_page_logo' , array(
		'default'     => '',
		'transport'   => 'refresh',
	));
	$wp_customize->add_setting( 'twitter' , array(
		'default'     => '',
		'transport'   => 'refresh',
	));
	$wp_customize->add_setting( 'facebook' , array(
		'default'     => '',
		'transport'   => 'refresh',
	));
	$wp_customize->add_setting( 'rss' , array(
		'default'     => '',
		'transport'   => 'refresh',
	));

	//section2
	$wp_customize->add_setting( 'section_2_headline' , array(
		'default'     => 'Headline',
		'transport'   => 'refresh'
	));
	$wp_customize->add_setting( 'section_2_refinement' , array(
		'default'     => '',
		'transport'   => 'refresh'
	));
	$wp_customize->add_setting( 'section_2_text' , array(
		'default'     => '',
		'transport'   => 'refresh'
	));

	//section3
	$wp_customize->add_setting( 'section_3_headline' , array(
		'default'     => 'Headline',
		'transport'   => 'refresh'
	));
	$wp_customize->add_setting( 'section_3_text' , array(
		'default'     => '',
		'transport'   => 'refresh'
	));

	//section4
	$wp_customize->add_setting( 'section_4_headline' , array(
		'default'     => 'Headline',
		'transport'   => 'refresh'
	));
	$wp_customize->add_setting( 'section_4_text' , array(
		'default'     => '',
		'transport'   => 'refresh'
	));

	//about-us
	$wp_customize->add_setting( 'about_us_text1_headline' , array(
		'default'     => '',
		'transport'   => 'refresh'
	));
	$wp_customize->add_setting( 'about_us_text1' , array(
		'default'     => '',
		'transport'   => 'refresh'
	));

	$wp_customize->add_setting( 'about_us_text2_headline' , array(
		'default'     => '',
		'transport'   => 'refresh'
	));
	$wp_customize->add_setting( 'about_us_text2' , array(
		'default'     => '',
		'transport'   => 'refresh'
	));

	$wp_customize->add_setting( 'about_us_text3_headline' , array(
		'default'     => '',
		'transport'   => 'refresh'
	));
	$wp_customize->add_setting( 'about_us_text3' , array(
		'default'     => '',
		'transport'   => 'refresh'
	));

//Panels
	$wp_customize->add_panel('section_options', array (
		'title' => __('Home-page options', 'deliver'),
		'description' => __('Choose a headline for your section.'),
		'priority'   => 10,
		'active_callback' =>'is_front_page'
	));

//Sections

	//section2
	$wp_customize->add_section( 'deliver_section_2' , array(
		'title'      => __( 'Section 2', 'deliver' ),
		'panel' => 'section_options',
		'priority'   => 10
	));

	//section3
	$wp_customize->add_section( 'deliver_section_3' , array(
		'title'      => __( 'Section 3', 'deliver' ),
		'panel' => 'section_options',
		'priority'   => 20
	));

	//section4
	$wp_customize->add_section( 'deliver_section_4' , array(
		'title'      => __( 'Section 4', 'deliver' ),
		'panel' => 'section_options',
		'priority'   => 30
	));
	
	//about-us
	$wp_customize->add_section('about_us_options', array (
		'title' => __('About Us options', 'deliver'),
		'priority'   => 10
	));

//Controls

	//Header
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'home_page_logo', array(
		'label'        => __( 'Home page logo', 'deliver' ),
		'section'    => 'title_tagline',
		'settings'   => 'home_page_logo',
		'priority' => 1
	)));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter', array(
		'label'        => __( 'Twitter URL', 'deliver' ),
		'section'    => 'title_tagline',
		'settings'   => 'twitter',
		'priority' => 30
	)));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook', array(
		'label'        => __( 'Facebook URL', 'deliver' ),
		'section'    => 'title_tagline',
		'settings'   => 'facebook',
		'priority' => 30
	)));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'rss', array(
		'label'        => __( 'RSS URL', 'deliver' ),
		'section'    => 'title_tagline',
		'settings'   => 'rss',
		'priority' => 30
	)));


	//section2
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'section_2_headline', array(
		'label'        => __( 'Section 2 headline', 'deliver' ),
		'section'    => 'deliver_section_2',
		'settings'   => 'section_2_headline'
	)));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'section_2_refinement', array(
		'label'        => __( 'Section 2 refinement', 'deliver' ),
		'section'    => 'deliver_section_2',
		'settings'   => 'section_2_refinement'
	)));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'section_2_text', array(
		'label'        => __( 'Section 2 text', 'deliver' ),
		'section'    => 'deliver_section_2',
		'settings'   => 'section_2_text'
	)));

	//section3
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'section_3_headline', array(
		'label'        => __( 'Section 3 headline', 'deliver' ),
		'section'    => 'deliver_section_3',
		'settings'   => 'section_3_headline'
	)));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'section_3_text', array(
		'label'        => __( 'Section 3 text', 'deliver' ),
		'section'    => 'deliver_section_3',
		'settings'   => 'section_3_text'
	)));

	//section4
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'section_4_headline', array(
		'label'        => __( 'Section 4 headline', 'deliver' ),
		'section'    => 'deliver_section_4',
		'settings'   => 'section_4_headline'
	)));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'section_4_text', array(
		'label'        => __( 'Section 4 text', 'deliver' ),
		'section'    => 'deliver_section_4',
		'settings'   => 'section_4_text'
	)));

	//about-us
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'about_us_text1_headline', array(
		'label'        => __( 'Text 1 headline', 'deliver' ),
		'section'    => 'about_us_options',
		'settings'   => 'about_us_text1_headline'
	)));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'about_us_text1', array(
		'label'        => __( 'Text 1', 'deliver' ),
		'section'    => 'about_us_options',
		'settings'   => 'about_us_text1'
	)));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'about_us_text2_headline', array(
		'label'        => __( 'Text 2 headline', 'deliver' ),
		'section'    => 'about_us_options',
		'settings'   => 'about_us_text2_headline'
	)));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'about_us_text2', array(
		'label'        => __( 'Text 2', 'deliver' ),
		'section'    => 'about_us_options',
		'settings'   => 'about_us_text2'
	)));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'about_us_text3_headline', array(
		'label'        => __( 'Text 3 headline', 'deliver' ),
		'section'    => 'about_us_options',
		'settings'   => 'about_us_text3_headline'
	)));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'about_us_text3', array(
		'label'        => __( 'Text 3', 'deliver' ),
		'section'    => 'about_us_options',
		'settings'   => 'about_us_text3'
	)));
}
add_action( 'customize_register', 'deliver_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function deliver_customize_preview_js() {
	wp_enqueue_script( 'deliver_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'deliver_customize_preview_js' );
