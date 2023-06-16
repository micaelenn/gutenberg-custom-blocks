<?php 
/**
 * Plugin Name:       Gutenberg Custom Blocks
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Micaelen Miranda
 * Author URI:        
 * License:           GPL v2 or later
 */

require_once dirname( __FILE__ ) . '/inc/categories.php';

function gcb_register_block() {
    wp_register_script(
        'gutenberg-custom-blocks-js',
        plugin_dir_url(__FILE__) . 'dist/js/blocks.min.js', 
        [
            'wp-element',
            'wp-i18n',
            'wp-blocks',
        ],
        '',
        null,
        true
    );
    
    wp_register_style(
        'gutenberg-custom-blocks-css',
        plugin_dir_url(__FILE__) . 'dist/css/index.min.css',
        [],
        null
    );
    
    register_block_type(
        'demo/block', [
            'editor_script' => 'gutenberg-custom-blocks-js',
            'editor_style'  => 'gutenberg-custom-blocks-css',
            'style'         => 'gutenberg-custom-blocks-css',
        ]
    );
}
add_action( 'init', 'gcb_register_block' );
