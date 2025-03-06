<?php

function dynamic_title(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'dynamic_title');

function load_css(){
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/styles/header.css');
    }
add_action('wp_enqueue_scripts', 'load_css');

function themeblocks_blockone_block_init() {
	register_block_type( __DIR__ . '/build/blockone' );
    register_block_type( __DIR__ . '/build/blocktwo' );
}
add_action( 'init', 'themeblocks_blockone_block_init' );