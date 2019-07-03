<?php

function load_stylesheets(){
    wp_register_style('main', get_template_directory_uri() . '/css/main.css ', array(), false,'all' );
    wp_enqueue_style('main');
}

function loadjs(){

    wp_register_script('customjs', get_template_directory_uri(). '/js/main.js', '', 1,true);
    wp_enqueue_script('customjs');
}


add_action('wp_enqueue_scripts', 'load_stylesheets');
add_action('wp_enqueue_scripts', 'loadjs');


add_action( 'wp_enqueue_scripts', 'my_jquery' );
function my_jquery() {
    wp_enqueue_script(
        'jquery_3.4.1.min', 
        get_template_directory_uri() . '/js/jquery-3.4.1.min.js', 
        array('jquery') 
    );
}

add_theme_support('menus');

?>
