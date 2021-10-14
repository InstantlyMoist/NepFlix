<?php
 
	add_editor_style('style.css');

	add_theme_support( 'post-thumbnails' );

	add_filter( 'use_block_editor_for_post', '__return_false' );
	//add_filter('use_block_editor_for_post_type', 'return_false', 10);
	
	define( 'DISALLOW_FILE_EDIT', true);