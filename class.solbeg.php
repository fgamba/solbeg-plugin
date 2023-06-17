<?php

class Solbeg {

    public function __construct() {
        add_action('admin_init', array($this, 'verify_php_version'));
        add_filter('the_title', array($this, 'add_creation_date_to_title'), 10, 2);

    }
    
    public function verify_php_version() {
        if (version_compare(PHP_VERSION, SOLBEG__MINIMUM_PHP_VERSION, '<')) {
            add_action('admin_notices', array($this, 'show_version_php_notice'));
            deactivate_plugins(plugin_basename(SOLBEG__PLUGIN_DIR . 'solbeg.php'));
        }
    }
    
    public function show_version_php_notice() {
        echo '<div class="notice notice-error is-dismissible">';
        echo '<p>Solbeg plugin requires a version of PHP 7.4 or higher. Your current version is '.SOLBEG_CURRENT_PHP_VERSION.' .</p>';
        echo '</div>';
    }

    public function add_creation_date_to_title($title){
        
        if(is_single()) {
          
            
            $datetime = current_time(get_option('date_format') . ' ' . get_option('time_format'));

            return $title.' - '.$datetime;
         
        }
    }
    
}