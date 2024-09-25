<?php

// Thêm menu vào lef side
add_action('admin_menu', 'add_admin_page');
add_action('admin_menu', 'add_admin_submenu');

function add_admin_page() {
    add_menu_page('Product Dashboard Pro', 'Product Dashboard'  , 'administrator' , 'pdp' , 'show_page_menu' , 'icon_path' , 17.23);
    
}

function add_admin_submenu() {
    add_submenu_page('pdp', 'Settings', 'Settings', 'administrator', 'settings', 'show_setting_submenu_page');
}

function show_page_menu() { 
    require_once DASH_BOARD_PRO_PATH .'/inc/include/partials/master.php';
}

function show_setting_submenu_page(){
    echo '<h1>Đây là trang Settings</h1>';
}