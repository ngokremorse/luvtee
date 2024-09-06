<?php
// Back-End
global $jal_db_version;

if(!class_exists('ProductPersonalizedBe')) {
    class ProductPersonalizedBe {
        function __constructor(){
            $this->init();
        }
        function init(){
        
        }
    }
    $ProductPersonalized = new ProductPersonalizedBe();
}

//  Install database
function createTable() {
    global $wpdb;
    $table_name = "wp_product_personalized";
    $charset_collate = $wpdb->get_charset_collate(); 
    $sql = "CREATE TABLE $table_name (
            id              INT(9)       NOT NULL   AUTO_INCREMENT,
            productConfig   TEXT         NOT NULL,
            PRIMARY KEY  (id)
    );";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta($sql);
    add_option( 'jal_db_version', $jal_db_version);
}
register_activation_hook(__FILE__, "createTable");

