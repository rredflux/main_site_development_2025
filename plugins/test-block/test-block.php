<?php
/**
 * Plugin Name:       test Block
 * Description:       First Try Test Block
 * Version:           0.1.1
 * Requires at least: 6.7
 * Requires PHP:      7.4
 * Author:            Richie Awiti
 * License:           Rra
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       test-block
 *
 * @package TestBlock
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function test_block_test_block_block_init() {
	register_block_type( __DIR__ . '/build/test-block' );
}
add_action( 'init', 'test_block_test_block_block_init' );
