<?php
/**
 * railster Theme Customizer
 *
 * @package railster
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function railster_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->add_section(
		'railster_events',
		array(
			'title'    => esc_html__( 'Events', 'railster' ),
			'priority' => 30,
		)
	);

	$wp_customize->add_setting(
		'railster_upcoming_events',
		array(
			'default'           => "25 August - at Visionario, with Sleeping Pills (for UdinElettronica) (UD)\n18 September - TBA (UD)",
			'sanitize_callback' => 'sanitize_textarea_field',
		)
	);
	$wp_customize->add_control(
		'railster_upcoming_events',
		array(
			'label'       => esc_html__( 'Upcoming gigs', 'railster' ),
			'description' => esc_html__( 'Enter one gig per line.', 'railster' ),
			'section'     => 'railster_events',
			'type'        => 'textarea',
		)
	);

	$wp_customize->add_setting(
		'railster_previous_events',
		array(
			'default'           => "13 July at Visionario (UD)\n29 March at Monsieur D (PN)\n16 April at Tarantola Lib. (UD)\n25 April at KK (UD)\n06 May at Lib. Tarantola for MattiaC (UD)\n24 May at Kaleidoscienza, 22:30 (UD)\n07 June at Mamm (UD)\n15 June at Terminal Festival (UD)",
			'sanitize_callback' => 'sanitize_textarea_field',
		)
	);
	$wp_customize->add_control(
		'railster_previous_events',
		array(
			'label'       => esc_html__( 'Previous gigs', 'railster' ),
			'description' => esc_html__( 'Enter one gig per line.', 'railster' ),
			'section'     => 'railster_events',
			'type'        => 'textarea',
		)
	);

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'railster_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'railster_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'railster_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function railster_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function railster_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function railster_customize_preview_js() {
	wp_enqueue_script( 'railster-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'railster_customize_preview_js' );
