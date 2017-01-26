<?php
//function my_scripts_method() {
////    wp_enqueue_style('pushy', get_stylesheet_directory_uri().'/css/lib/menu/pushy.css');
////    wp_deregister_script( 'masonry' );
////    wp_register_script( 'masonry', 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js');
////    wp_enqueue_script( 'masonry' );
////    wp_enqueue_script('jquery', get_template_directory_uri().'/js/lib/jquery-3.1.1.js');
////    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/lib/bootstrap.min.js');
////    wp_enqueue_script('pushy-script', get_template_directory_uri().'/js/lib/menu/pushy.min.js');
////    wp_enqueue_script('slick', get_template_directory_uri().'/js/lib/menu/slick.min.js');
////    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js');
//
//
//}
//
//add_action('wp_enqueue_scripts', 'my_scripts_method');

register_nav_menu('menu','menu-nav');
?>