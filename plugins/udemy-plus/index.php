<?php 
/*
 * Plugin Name:       Udemy Plus
 * Plugin URI:        https://udemy.com
 * Description:       A plugin for adding blocks to a theme.
 * Version:           1.0.0
 * Requires at least: 5.9
 * Requires PHP:      8.0
 * Author:            John Doe
 * Author URI:        https://udemy.com
 * Text Domain:       udemy-plus
 * Domain Path:       /languages
 */

if(!function_exists('add_action')){
  echo 'Seems like you stumbled here by accident. 😛';
  exit;
}

// Setup
define('UP_PLUGIN_DIR', plugin_dir_path(__FILE__));

// Includes
$rootFiles = glob(UP_PLUGIN_DIR . 'includes/*.php');
$subdirectoryFiles = glob(UP_PLUGIN_DIR . 'includes/**/*.php');
$allFiles = array_merge($rootFiles, $subdirectoryFiles);
 
// print_r($subdirectoryFiles);

foreach($allFiles as $filename){
  include_once($filename);
}

// include(UP_PLUGIN_DIR . 'includes/register-blocks.php');
// include(UP_PLUGIN_DIR . 'includes/blocks/search-form.php');
// include(UP_PLUGIN_DIR . 'includes/blocks/page-header.php');

// Hooks
// activate recipe custom post type plugin = includes/activate.php
register_activation_hook(__FILE__, 'up_activate_plugin');

add_action('init', 'up_register_blocks');
add_action('rest_api_init', 'up_rest_api_init');
add_action('wp_enqueue_scripts', 'up_enqueue_scripts');
// custom post types
add_action('init', 'up_recipe_post_type');
// Custome Taxonomy Fields
add_action('cuisine_add_form_fields', 'up_cuisine_add_form_fields');
// Saving term metadata = admin/save-cuisine.php
add_action('create_cuisine', 'up_save_cuisine_meta');
// Editing Taxonomy Fields = edit the admin/cuisine-fields.php
add_action('cuisine_edit_form_fields', 'up_cuisine_edit_form_fields');
// Handle submission = admin/save-cuisine.php
add_action('edited_cuisine', 'up_save_cuisine_meta');
 