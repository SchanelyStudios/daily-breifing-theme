<?php

function register_menus() {
    register_nav_menus(
        array(
          'top' => __( 'Main Nav' ),
          'bottom' => __( 'Bottom Nav' )
        )
    );
}
add_action( 'init', 'register_menus' );

if ( function_exists ('register_sidebar')) {
    register_sidebar (array('name' => 'sidebar'));
    register_sidebar (array('name' => 'subscribe'));
}
