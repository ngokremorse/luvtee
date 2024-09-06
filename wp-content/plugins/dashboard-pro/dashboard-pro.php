<?php
if (!class_exists('DashboardProAdmin')) {
    class DashboardProAdmin
    {
        function __constructor(){

            if (!defined('ABSPATH')) {
                die('Not found ABSPATH');
            }
        }

        public function init()
        {
            require_once DASH_BOARD_PRO_PATH . '/inc/database/create-database.php';
            require_once DASH_BOARD_PRO_PATH . '/inc/database/product-dashboard-repository.php';
            include_once DASH_BOARD_PRO_PATH . '/inc/init.php';
            include_once DASH_BOARD_PRO_PATH . '/inc/include/option-page.php';
        }
    }
    $dashboardProAdmin = new DashboardProAdmin();
    $dashboardProAdmin->init();
}
