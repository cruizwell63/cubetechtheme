<?php

function dynamic_title() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'dynamic_title');

function load_css() {
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/styles/header.css');
}
add_action('wp_enqueue_scripts', 'load_css');
    
function themeblocks_block_init() {
    $blocks = [
        'blockone',
        'blocktwo',
        'blockthree',
        'frameblock',
        'carouselblock',
        'blockfive',
        'blocksix',
        'productfirstcontainer',
        'productpricingcontainer',
        'productsecondcontainer',
        'qrcodegeneratorblockone',
        'qrcodegeneratorblocktwo',
        'barcodegeneratorblockone',
        'barcodegeneratorblocktwo',
    ];

    foreach ($blocks as $block) {
        register_block_type(__DIR__ . '/build/' . $block);
    }
}
add_action('init', 'themeblocks_block_init');

function expose_yoast_seo_in_rest() {
    $fields = [
        '_yoast_wpseo_title'     => 'SEO Title',
        '_yoast_wpseo_metadesc'  => 'Meta Description',
        '_yoast_wpseo_focuskw'   => 'SEO Keywords',
    ];

    foreach ($fields as $meta_key => $description) {
        register_post_meta('post', $meta_key, [
            'type'         => 'string',
            'description'  => $description,
            'single'       => true,
            'show_in_rest' => true,
        ]);
    }
}
add_action('init', 'expose_yoast_seo_in_rest');
