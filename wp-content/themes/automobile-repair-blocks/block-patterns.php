<?php
/**
 * Automobile Repair Blocks: Block Patterns
 *
 * @since Automobile Repair Blocks 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Automobile Repair Blocks 1.0
 *
 * @return void
 */
function automobile_repair_blocks_register_block_patterns() {
	$block_pattern_categories = array(
		'automobile-repair-blocks'    => array( 'label' => __( 'Automobile Repair Blocks', 'automobile-repair-blocks' ) ),
	);

	$block_pattern_categories = apply_filters( 'automobile_repair_blocks_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'automobile_repair_blocks_register_block_patterns', 9 );
