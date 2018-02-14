<?php
/**
* Plugin Name: Adshouse
* Plugin URI:
* Description:
* Version: 0.1
* Author: Brightcircle
* Author URI:
**/

function adshouse() {
    //Current database version
    require_once(ABSPATH.'wp-admin/includes/upgrade.php');
    
    //Define basic plugin path
    $ah_path = ABSPATH.'wp-content/plugins/adshouse/';
    include_once($ah_path.'ah_setup.php');
}

//On plugin install
function ah_install() {
    global $wpdb;

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
}

//On plugin uninstall
function ah_uninstall() {
    global $wpdb;
    global $ah_db_version;
    delete_option('ah_version');
}

//Call functions on install and deletion of plugin
register_activation_hook( __FILE__, 'ah_install' );
register_uninstall_hook( __FILE__, 'ah_uninstall' );

adshouse();
