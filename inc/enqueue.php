<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function aether_enqueue_assets() {

	wp_enqueue_style(
		'aether-variables',
		get_theme_file_uri( '/assets/css/base/variables.css' ),
		array(),
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style(
		'aether-reset',
		get_theme_file_uri( '/assets/css/base/reset.css' ),
		array( 'aether-variables' ),
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style(
		'aether-typography',
		get_theme_file_uri( '/assets/css/base/typography.css' ),
		array( 'aether-reset' ),
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style(
		'aether-containers',
		get_theme_file_uri( '/assets/css/layout/containers.css' ),
		array( 'aether-typography' ),
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style(
		'aether-grid',
		get_theme_file_uri( '/assets/css/layout/grid.css' ),
		array( 'aether-containers' ),
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style(
		'aether-sections',
		get_theme_file_uri( '/assets/css/layout/sections.css' ),
		array( 'aether-grid' ),
		wp_get_theme()->get( 'Version' )
	);
}

add_action(
	'wp_enqueue_scripts',
	'aether_enqueue_assets'
);

wp_enqueue_style(
	'aether-buttons',
	get_theme_file_uri(
		'/assets/css/components/buttons.css'
	),
	array(
		'aether-sections'
	),
	wp_get_theme()->get( 'Version' )
);

wp_enqueue_style(
	'aether-cards',
	get_theme_file_uri(
		'/assets/css/components/cards.css'
	),
	array(
		'aether-buttons'
	),
	wp_get_theme()->get( 'Version' )
);

wp_enqueue_style(
	'aether-hero',
	get_theme_file_uri(
		'/assets/css/components/hero.css'
	),
	array(
		'aether-cards'
	),
	wp_get_theme()->get( 'Version' )
);