<?php
/**
 * @package Solbeg
 */
/*
Plugin Name: Solbeg
Plugin URI: https://solbeg.com/
Description: Solbeg test.
Version: 1.0
Requires at least: 5.0
Requires PHP: 7.4
Author: Fernando Gamba
Author URI: https://www.linkedin.com/in/fernando-gamba-566151b/
License: GPLv2 or later
Text Domain: solbeg
*/


// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

define( 'SOLBEG_CURRENT_PHP_VERSION', phpversion() );
define( 'SOLBEG__MINIMUM_PHP_VERSION', '7.4' );
define( 'SOLBEG__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

require_once( SOLBEG__PLUGIN_DIR . 'class.solbeg.php' );
$solbeg = new Solbeg();

