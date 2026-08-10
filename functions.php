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


// function my_custom_theme_setup() {

//     add_theme_support('title-tag');
//     add_theme_support('post-thumbnails');

//     //creating a menus
//     register_nav_menus(
//         array(
//             'primary'   => 'Primary Menu',
//             'secondary' => 'Secondary Menu'
//         )
//     );
// }

// add_action('after_setup_theme', 'my_custom_theme_setup');

// function my_custom_theme_scripts() {
//     wp_enqueue_style('my-custom-theme-style', get_stylesheet_uri());
// }

// add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');

// function my_theme_sidebar() {

//     register_sidebar(array(
//         'name'          => 'Main Sidebar',
//         'id'            => 'main-sidebar',
//         'description'   => 'Widgets shown in the main sidebar.',
//         'before_widget' => '<div id="%1$s" class="widget %2$s">',
//         'after_widget'  => '</div>',
//         'before_title'  => '<h3 class="widget-title">',
//         'after_title'   => '</h3>',
//     ));

// }

// add_action('widgets_init', 'my_theme_sidebar');








//add customize api  -> appereance -> customize ->..

//  cuatomizer api  changing content on footer 
//  appereance->costimize->theme option ->change content 
 
function my_theme_customize_register($wp_customize)
{
    // 1. Add Section
    $wp_customize->add_section(
        'my_theme_options',
        array(
            'title'    => 'Theme Options',
            'priority' => 30,
        )
    );

    // 2. Add Setting
    $wp_customize->add_setting(
        'footer_text',
        array(
            'default'           => '© 2026 My Website',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    // 3. Add Control
    $wp_customize->add_control(
        'footer_text',
        array(
            'label'    => 'Footer Text',
            'section'  => 'my_theme_options',
            'type'     => 'text',
        )
    );
}

add_action(
    'customize_register',
    'my_theme_customize_register'
);

