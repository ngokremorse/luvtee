<?php

global $pdpRepo;
if (!class_exists("ProductDashboardRepository")) {
    class ProductDashboardRepository
    {

        function __constructor() {}
        public function get_product_dashboard_traffic($date, $idLast, $pageSize)
        {
            global $wpdb;
            $date = date('Y-m-d', strtotime($date));
            $table = $wpdb->prefix .'tqdp_product_traffic';
            if($idLast == 0) {
                $sql = $wpdb->prepare("select * from $table where createDate = %s order by orderCount desc limit %d", $date, $pageSize);
            } else {
                $sql = $wpdb->prepare("select * from $table where id < %d and createDate = %s order by orderCount desc limit %d", $idLast, $date, $pageSize);
            }
            return $wpdb->get_results($sql);
        }

        public function get_product_dashboard_traffic_today($idlast, $pageSize)
        {
            $now = date('Y-m-d');
            return $this->get_product_dashboard_traffic($now, $idlast, $pageSize);
        }

        public function get_product_names($ids) {
            global $wpdb;
            $table = $wpdb->prefix .'posts';
            $id_in_caluse = ["("];
            foreach($ids as $id) {
                array_push($id_in_caluse, $id.",");
            }
            $id_in_caluse =  trim(join("", $id_in_caluse),",") . ")";
            $products =  $wpdb->get_results("select post_title, id from $table where id in $id_in_caluse");
            $productMaps = [];
            foreach($products as $product) {
                $productMaps[$product->id] = $product->post_title;
            }
            return $productMaps;
        }
    }
    $pdpRepo = new ProductDashboardRepository();
}
