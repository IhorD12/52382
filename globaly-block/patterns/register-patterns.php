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
	$block_patterns = array(
		'hero-section',
		'services-section',
		'cta-section',
		'latest-posts-section',
	);

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( '/patterns/' . $block_pattern . '.php' );
		if ( file_exists( $pattern_file ) ) {
			register_block_pattern(
				'globaly-block/' . $block_pattern,
				require $pattern_file
			);
		}
	}
}
