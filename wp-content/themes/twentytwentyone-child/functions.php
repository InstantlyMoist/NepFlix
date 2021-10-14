<?php
  add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'twentytwentyone-parent-style', get_template_directory_uri() . '/style.css' );
	});

	add_editor_style('style.css');

	add_filter( 'use_block_editor_for_post', '__return_false' );
	//add_filter('use_block_editor_for_post_type', 'return_false', 10);
	
	define( 'DISALLOW_FILE_EDIT', true);