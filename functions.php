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
	register_block_type( __DIR__ . '/build/blockone');
    register_block_type( __DIR__ . '/build/blocktwo' );
    register_block_type( __DIR__ . '/build/blockthree' );
    register_block_type( __DIR__ . '/build/blockfive' );
    register_block_type( __DIR__ . '/build/blocksix' );
    register_block_type( __DIR__ . '/build/Product-First-Container' );
    register_block_type( __DIR__ . '/build/Product-Pricing-Container' );
    register_block_type( __DIR__ . '/build/Product-Second-Container' );
    register_block_type( __DIR__ . '/build/qr-code-generator-blockone' );
    register_block_type( __DIR__ . '/build/qr-code-generator-blocktwo' );
    register_block_type( __DIR__ . '/build/barcode-generator-blockone' );
    register_block_type( __DIR__ . '/build/barcode-generator-blocktwo' );
}
add_action( 'init', 'themeblocks_blockone_block_init' );