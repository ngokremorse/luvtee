<?php

add_action('init', 'createTable');
function createTable()
{   
    global $wpdb;
    require_once ABSPATH . 'wp-admin/includes/upgrade.php';

    // Tạo bảng product_traffic
    $table_name = $wpdb->prefix . "tqdp_product_traffic";
    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id              INT(9)              NOT NULL   AUTO_INCREMENT,
        ipv4            varchar(50)         NOT NULL,
        device          varchar(50)         NOT NULL,
        source          varchar(50)         NOT NULL,
        productId       INT(9)              NOT NULL,
        view            SMALLINT            NOT NULL default 0,
        atc             SMALLINT            NOT NULL default 0,
        checkout        SMALLINT            NOT NULL default 0,
        orderCount      SMALLINT            NOT NULL default 0,
        orderItem       SMALLINT            NOT NULL default 0,
        orderAmount     DECIMAL(10,2)       NOT NULL default 0,
        createDate      DATE                NOT NULL default (CURRENT_DATE),
        lastModified    DATETIME            NOT NULL default NOW(),
        PRIMARY KEY  (id)
        ) $charset_collate;";
    dbDelta($sql);

    // Tạo bảng product_traffic_report
    $table_name = $wpdb->prefix . "tqdp_product_traffic_report";
    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id              INT(9)              NOT NULL   AUTO_INCREMENT,
        ipv4            varchar(50)         NOT NULL,
        device          varchar(50)         NOT NULL,
        source          varchar(50)         NOT NULL,
        productId       INT(9)              NOT NULL,
        view            SMALLINT            NOT NULL default 0,
        atc             SMALLINT            NOT NULL default 0,
        checkout        SMALLINT            NOT NULL default 0,
        orderCount      SMALLINT            NOT NULL default 0,
        orderItem       SMALLINT            NOT NULL default 0,
        orderAmount     DECIMAL(10,2)       NOT NULL default 0,
        createDate      DATE                NOT NULL default (CURRENT_DATE),
        lastModified    DATETIME            NOT NULL default NOW(),
        PRIMARY KEY  (id)
        ) $charset_collate;";
    dbDelta($sql);
}
