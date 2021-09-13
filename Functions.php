<?php

add_theme_support('menus');
add_theme_support( 'post-thumbnails' );

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'نمونه ',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
?>

