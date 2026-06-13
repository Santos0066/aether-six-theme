<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function aether_enqueue_assets() {
	wp_enqueue_style(
		'aether-variables',
		get_theme_file_uri(
			'/assets/css/base/variables.css'
		),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}

wp_enqueue_style(
	'aether-reset',
	get_theme_file_uri(
		'/assets/css/base/reset.css'
	),
	array( 'aether-variables' ),
	wp_get_theme()->get( 'Version' )
);