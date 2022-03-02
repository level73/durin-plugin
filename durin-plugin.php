<?php
/*
Plugin Name:    Durin Plugin
Plugin URI:     https://github.com/level73/durin-plugin
Description:    Durin plugin for Wordpress - Basic setup & aesthetic tweaks to WP instance generated within the Durin Project
Version:        1.0
Author:         Level73
Author URI:     https://level73.it
License:        MIT
*/

list($pluginBaseDir, $pluginFile) = explode('/', plugin_basename(__FILE__));

define( "DURIN_PLUGIN_PATH", plugin_dir_path( __FILE__ ) );
define( "DURIN_PLUGIN_URL",  plugin_dir_url( __FILE__ ) );
define( "DURIN_DIR_NAME", $pluginBaseDir);

require_once (DURIN_PLUGIN_PATH . 'durin-plugin.class.php');

$WP_Durin = new WP_Durin();
