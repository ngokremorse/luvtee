<?php
add_action('init', 'loadResource');
function loadResource()
{
    wp_register_style('dashboard-pro', plugins_url('dashboard-pro/inc/css/flowbite.min.css'));
    wp_enqueue_style('dashboard-pro');
    wp_register_script('dashboard-pro', plugins_url('dashboard-pro/inc/js/flowbite.min.js'));
    wp_enqueue_script('dashboard-pro');
}
