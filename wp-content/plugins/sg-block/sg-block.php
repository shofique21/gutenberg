<?php 
/**
 * Plugin Name: Simple Gutenberg Block
 * Plugin URI: https://imransayed.com
 * Description: This plugin create a simple Guternberg block
 * Version: 1.0.0
 * Author: Shofique Shahariar
 * Author URI: https://profiles.wordpress.org/gsayed786
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: sg-block
 * Domain Path: /languages
 * 
 * @package Simple Gutenberg Block
 */
define( 'SB_PLUGIN_URL', plugins_url( 'sg-block' ) );
define( 'SB_PLUGIN_DIR_PATH', plugin_dir_path( __FILE__ ) );

function gutenberg_custom_blocks() {


   // Block front end styles.
   wp_register_style(
      'sg-block-front-end-styles',
      SB_PLUGIN_URL . '/style.css',
      array( 'wp-edit-blocks' ),
      filemtime( SB_PLUGIN_DIR_PATH . 'style.css' )
   );
   // Block editor styles.
   wp_register_style(
      'sg-block-editor-styles',
      SB_PLUGIN_URL . '/editor.css',
      array( 'wp-edit-blocks' ),
      filemtime( SB_PLUGIN_DIR_PATH . 'editor.css' )
   );

   // Block Editor Script.
   wp_register_script(
      'sg-block-editor-js',
      SB_PLUGIN_URL . '/simple-block.js',
      array( 'wp-blocks', 'wp-element', 'wp-editor', 'wp-components', 'wp-i18n' ),
      filemtime( SB_PLUGIN_DIR_PATH . 'simple-block.js' ),
      true
   );
   register_block_type(
      'sg-block/simple-block',
      array(
         'style'         => 'sg-block-front-end-styles',
         'editor_style'  => 'sg-block-editor-styles',
         'editor_script' => 'sg-block-editor-js',
      )
   );

}

add_action( 'init', 'gutenberg_custom_blocks' );