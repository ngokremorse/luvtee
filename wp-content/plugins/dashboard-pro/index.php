<?php
/**
 * Plugin Name: Dasboard Pro
 * Descriotion: Traffic statistics for the site
 * Version: 1.0.0
 * Author: thanhtq
 * Requires at least: 5.2
 * Requires PHP: 7.2
 * Text Domain: Dasboard Pro
 */

// check woocommerce active
$plugin_path = trailingslashit(WP_PLUGIN_DIR) . 'woocommerce/woocommerce.php';

if (!in_array($plugin_path, wp_get_active_and_valid_plugins())) {
    die("Wocommerce need install and active!");
}

define("DASH_BOARD_PRO_PATH", plugin_dir_path(__FILE__));
require_once DASH_BOARD_PRO_PATH . '/dashboard-pro.php';
require_once DASH_BOARD_PRO_PATH . '/inc/uninstall.php';