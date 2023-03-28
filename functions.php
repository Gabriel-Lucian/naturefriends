<?php

register_nav_menus( [ 'primary' => 'Primary menu'] );

function naturefriends_assets() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'naturefriends_assets');

?>
