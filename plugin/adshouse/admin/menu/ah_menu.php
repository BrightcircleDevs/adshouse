<?php

include_once($ah_path.'admin/menu/menu_controller.php');

function admin_ah_setup() {
    admin_ah_main_be();
    admin_ah_support_be();
}

//Admin backend main page setup
function admin_ah_main_be() {
    //Menu variables
    $page_title =       'adshouse Admin';
    $menu_title =       'Adshouse';
    $required_level =   'administrator';
    $menu_slug =        'ah_main_controller';
    $content =          'ah_main_controller';
    $icon_url =         '';
    
    //Creating the menu page
    add_menu_page($page_title, $menu_title, $required_level, $menu_slug, $content, $icon_url);
}

//Admin backend support page setup
function admin_ah_support_be() {
    //Menu variables
    $parent_slug =      'ah_main_controller';
    $page_title =       'AH Admin Support';
    $menu_title =       'Support';
    $required_level =   'administrator';
    $menu_slug =        'ah_support';
    $content =          'ah_admin_support';
    
    //Creating the submenu page
    add_submenu_page($parent_slug, $page_title, $menu_title, $required_level, $menu_slug, $content);
}

//Creating the admin backend pages
add_action( 'admin_menu', 'admin_ah_setup' );