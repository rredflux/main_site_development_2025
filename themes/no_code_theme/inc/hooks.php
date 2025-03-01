<?php
// Enqueue block editor 
function themeslug_enqueue_block_editor_assets() {
	wp_enqueue_script(
		'themeslug-block-editor',
		get_theme_file_uri( 'assets/js/block-editor.js' ),
		array( 
			'wp-blocks', 
			'wp-dom-ready', 
			'wp-edit-post' 
		)
	);
}
add_action( 'enqueue_block_editor_assets', 'themeslug_enqueue_block_editor_assets' );


function themeslug_enqueue_block_assets() {
	wp_enqueue_style(
		'themeslug-block-style',
		get_theme_file_uri( 'assets/ccs/block-style.css' ),
	);
}
add_action( 'enqueue_block_assets', 'themeslug_enqueue_block_assets' );
