<?php

function load_stylesheets(){
    wp_register_style('main', get_template_directory_uri() . '/css/main.css ', array(), false,'all' );
    wp_enqueue_style('main');
    wp_register_style('mediaQ', get_template_directory_uri() . '/css/mediaQ.css ', array(), false,'all' );
    wp_enqueue_style('mediaQ');
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

register_nav_menus(

    array(
        'top-menu' => __('Top Menu','theme'),
        'footer-menu' => __('Footer Menu','theme'),
    )
    );

    function wpdocs_custom_excerpt_length( $length ) {
        return 5;
    }
    add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

    function wpdocs_excerpt_more( $more ) {
        if ( ! is_single() ) {
            $more = sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
                get_permalink( get_the_ID() ),
                __( ' ', 'textdomain' )
            );
        }
     
        return $more;
    }
    add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
    
  
    
    
?>
