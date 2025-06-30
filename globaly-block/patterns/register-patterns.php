<?php
/**
 * Block Pattern Registration
 *
 * @package Globaly_Block
 */

if ( function_exists( 'register_block_pattern_category' ) ) {
	register_block_pattern_category(
		'globaly-block',
		array( 'label' => esc_html__( 'Globaly Block Patterns', 'globaly-block' ) )
	);
}

if ( function_exists( 'register_block_pattern' ) ) {
	// Example Pattern Registration (to be replaced with actual patterns)
	/*
	register_block_pattern(
		'globaly-block/example-pattern',
		array(
			'title'       => __( 'Example Pattern', 'globaly-block' ),
			'description' => _x( 'A simple example pattern.', 'Block pattern description', 'globaly-block' ),
			'categories'  => array( 'globaly-block' ),
			'content'     => '<!-- wp:heading {"level":2} --><h2>' . esc_html__( 'Example Pattern Title', 'globaly-block' ) . '</h2><!-- /wp:heading --><!-- wp:paragraph --><p>' . esc_html__( 'This is a sample pattern content. Replace this with your actual block markup.', 'globaly-block' ) . '</p><!-- /wp:paragraph -->',
		)
	);
	*/
}
