<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function aether_register_pattern_categories() {

	register_block_pattern_category(
		'aether-six',
		array(
			'label' => __( 'Aether Six', 'aether-six' ),
		)
	);

}

add_action(
	'init',
	'aether_register_pattern_categories'
);