<?php

function load_ah_admin_assets() {
    if($_GET['page'] != 'ah_main_controller' && $_GET['page'] != 'ah_settings' && $_GET['page'] != 'ah_support') {
            return;
        }
    else {
        wp_enqueue_style(
        $handle =       'ah-admin',
        $src =          '/wp-content/plugins/adshouse/admin/menu/assets/css/ah-admin.css',
        $media =        'all');
    }
}
