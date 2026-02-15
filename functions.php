<?php
/**
 * Prespa SaaS functions and definitions
 *
 * @since 1.0.0
 */

/**
 * Register child theme's styles
 */
function prespa_saas_enqueue_theme_styles() {
	wp_enqueue_style( 'prespa-saas-styles', get_stylesheet_directory_uri() . '/style.css', array(), filemtime( get_stylesheet_directory() . '/style.css' ) );
}

add_action( 'wp_enqueue_scripts', 'prespa_saas_enqueue_theme_styles' );

/**
 * Enqueue editor styles for the block editor.
 */
function prespa_saas_editor_styles() {
	add_editor_style( 'admin/editor-styles.css' );
}
add_action( 'after_setup_theme', 'prespa_saas_editor_styles' );

/**
 * Registers block patterns categories, and type.
 */
function prespa_saas_register_block_patterns() {
	$block_pattern_categories = array(
		'prespa-saas' => array( 'label' => esc_html__( 'Prespa SaaS', 'prespa-saas' ) ),
	);

	$block_pattern_categories = apply_filters( 'prespa_saas_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}

add_action( 'init', 'prespa_saas_register_block_patterns', 9 );

// Change theme defaults in the customizer preview
function prespa_saas_customize_register( $wp_customize ) {
	$primary_accent_color_setting   = $wp_customize->get_setting( 'primary_accent_color' );
	$secondary_accent_color_setting = $wp_customize->get_setting( 'secondary_accent_color' );
	$body_bgr_color_setting         = $wp_customize->get_setting( 'body_bgr_color' );
	$content_layout_setting         = $wp_customize->get_setting( 'content_layout' );
	$header_button_text             = $wp_customize->get_setting( 'header_button_text' );

	if ( $primary_accent_color_setting ) {
		$primary_accent_color_setting->default = '#3D81F1';
	}

	if ( $secondary_accent_color_setting ) {
		$secondary_accent_color_setting->default = '#f9fafb';
	}
}

add_action( 'customize_register', 'prespa_saas_customize_register', 999, 1 );

// Overwrite parent theme customizer defaults
function prespa_customizer_values( $value ) {
	$defaults = array(
		'primary_accent_color'     => '#3D81F1',
		'secondary_accent_color'   => '#f9fafb',
		'body_bgr_color'           => '',
		'headings_text_color'      => '#404040',
		'link_headings_text_color' => '#404040',
		'content_layout'           => 'seperate_containers',
		'header_button_text'       => __( 'Contact', 'prespa-saas' ),
		'has_secondary_menu'       => true,
		'header-menu-position'     => 'static',
		'woo_btn_bgr_color'        => '',
		'woo_btn_text_color'       => '',
	);
	// Return the value from the theme mod, or fallback to the default
	return get_theme_mod( $value, $defaults[ $value ] );
}

function prespa_starter_content_setup() {
	$default_page_content = '
	<!-- wp:pattern {"slug":"prespa-saas/hero-image"} /-->
	<!-- wp:pattern {"slug":"prespa-saas/partners"} /-->
	<!-- wp:pattern {"slug":"prespa-saas/why-choose-us"} /-->
	<!-- wp:pattern {"slug":"prespa-saas/featured-solutions"} /-->
	<!-- wp:pattern {"slug":"prespa-saas/benefits-deep-purple"} /-->
	<!-- wp:pattern {"slug":"prespa-saas/pricing-plans"} /-->
	<!-- wp:pattern {"slug":"prespa-saas/banner"} /-->
	';

	add_theme_support(
		'starter-content',
		array(
			'posts'     => array(
				'home' => array(
					'post_type'    => 'page',
					'post_title'   => _x( 'Home', 'Theme starter content', 'prespa-saas' ),
					'post_content' => $default_page_content,
				),
				'blog',
			),
			'options'   => array(
				'show_on_front'  => 'page',
				'page_on_front'  => '{{home}}',
				'page_for_posts' => '{{blog}}',
			),
			'nav_menus' => array(
				'menu-1' => array(
					'name'  => __( 'Primary', 'prespa-saas' ),
					'items' => array(
						'page_home',
						'page_blog',
					),
				),
			),
		)
	);
}

require get_stylesheet_directory() . '/tgm/plugin-activation.php';
require get_stylesheet_directory() . '/tgm/recommended-plugins.php';
