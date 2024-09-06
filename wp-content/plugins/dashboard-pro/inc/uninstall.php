<?php

if(!class_exists("DashboardProSetup")) {
    class DashboardProSetup
    {

        function __construct()
        {
            register_uninstall_hook(__FILE__, 'uninstall_plugin');
        }


        function uninstall_plugin()
        {
            // if uninstall.php is not called by WordPress, die
        

            // $option_name = 'wporg_option';

            // delete_option( $option_name );

            // // for site options in Multisite
            // delete_site_option( $option_name );

            // drop a custom database table
            global $wpdb;
            $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}tqdp_product_traffic");
        }
    }
    $unistallObj = new DashboardProSetup();
}