<?php

/*Admin backend pages controller*/
function ah_main_controller() {
    $ah_path = ABSPATH.'wp-content/plugins/adshouse/';
    
    if(isset($_GET['ah_action'])) {
        $action = $_GET['ah_action'];
        switch($action) {
            case home:
                include_once($ah_path.'admin/menu/controllers/home-controller.php');
                break;
        }
    }
    else {
        include_once($ah_path.'admin/menu/controllers/home-controller.php');
    }
}

function ah_admin_support() {
  $ah_path = ABSPATH.'wp-content/plugins/adshouse/';

  include_once($ah_path.'admin/menu/controllers/support-controller.php');
}