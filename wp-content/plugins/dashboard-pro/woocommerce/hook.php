<?php
add_action('woocommerce_before_single_product', 'prouductView', 99);

add_action('woocommerce_add_to_cart', 'productAddToCart', 99);

add_action('woocommerce_review_order_before_submit', 'productsCheckout', 99);

function prouductView(){
	global $pdpEvent;
	$pdpEvent->updateProductTracking(1); 
}

function productAddToCart() {
    $productId = $_POST['add-to-cart'];
    // echo "<pre>"; var_dump($_POST); echo "</pre>";
    // WC()->cart->add_to_cart(intval($p_id));

	global $pdpEvent;
	$pdpEvent->updateProductTracking(atc: 1, productId: $productId); 
}

function productsCheckout(){
	global $pdpEvent;
	$pdpEvent->updateProductTracking(atc: 1, productId: 112); 
}