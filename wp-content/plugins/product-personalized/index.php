<?php
/**
 * Plugin Name: Personalized for product t shirt
 * Descriotion: Tùy chọn hình ảnh, thay đổi text cho t shirt, thay đổi số lượng art
 * Version: 1.0.0
 * Author: thanhtq
 * Requires at least: 5.2
 * Requires PHP: 7.2
 * Text Domain: product-personalized
 */

define("PRODUCT_PERSONALIZED_PATH", __FILE__);
define("PRODUCT_PERSONALIZED_PATH_DIR", untrailingslashit(dirname(PRODUCT_PERSONALIZED_PATH)));
define("PRODUCT_PERSONALIZED_PATH_INC", PRODUCT_PERSONALIZED_PATH_DIR . '/inc');
require_once(PRODUCT_PERSONALIZED_PATH_INC . '/admin.php');
require_once(PRODUCT_PERSONALIZED_PATH_INC . '/functions.php');
