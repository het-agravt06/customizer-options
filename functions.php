<?php

//theme set up

// function my_custom_theme_setup()
// {
//     add_theme_support('title-tag');
//     // add_theme_support('post-thumbnails');

//     register_nav_menus(
//         array(
//             'primary' => 'Primary Menu'
//         )
//     );

//     register_nav_menus(
//         array(
//             'secondary' => 'Primary Menu2'
//         )
//     );
// }

// add_action('after_setup_theme', 'my_custom_theme_setup');




//custome sidebar with widget


function my_custom_theme_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    //creating a menus
    register_nav_menus(
        array(
            'primary'   => 'Primary Menu',
            'secondary' => 'Secondary Menu'
        )
    );
}

add_action('after_setup_theme', 'my_custom_theme_setup');

function my_custom_theme_scripts() {
    wp_enqueue_style('my-custom-theme-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');

function my_theme_sidebar() {

    register_sidebar(array(
        'name'          => 'Main Sidebar',
        'id'            => 'main-sidebar',
        'description'   => 'Widgets shown in the main sidebar.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

}

add_action('widgets_init', 'my_theme_sidebar');