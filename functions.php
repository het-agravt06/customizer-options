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
 
// function my_theme_customize_register($wp_customize)
// {
//     // 1. Add Section
//     $wp_customize->add_section(
//         'my_theme_options',
//         array(
//             'title'    => 'Theme Options',
//             'priority' => 30,
//         )
//     );

//     // 2. Add Setting
//     $wp_customize->add_setting(
//         'footer_text',
//         array(
//             'default'           => '© 2026 My Website',
//             'sanitize_callback' => 'sanitize_text_field',
//         )
//     );

//     // 3. Add Control
//     $wp_customize->add_control(
//         'footer_text',
//         array(
//             'label'    => 'Footer Text',
//             'section'  => 'my_theme_options',
//             'type'     => 'text',
//         )
//     );
// }

// add_action(
//     'customize_register',
//     'my_theme_customize_register'
// );














//background color change task



/**
 * Theme Setup
 */
function my_theme_setup()
{
    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    register_nav_menus(
        array(
            'primary' => 'Primary Menu',
        )
    );
}

add_action('after_setup_theme', 'my_theme_setup');


/**
 * Enqueue Stylesheet
 */
function my_theme_scripts()
{
    wp_enqueue_style(
        'my-theme-style',
        get_stylesheet_uri()
    );
}

add_action('wp_enqueue_scripts', 'my_theme_scripts');


/**
 * Customizer
 */
function my_theme_customize_register($wp_customize)
{
    /**
     * Theme Options Section
     */
    $wp_customize->add_section(
        'my_theme_options',
        array(
            'title'    => 'Theme Options',
            'priority' => 30,
        )
    );

    

    /**
     * Footer Text Setting
     */
    $wp_customize->add_setting(
        'footer_text',
        array(
            'default'           => 'My Custom Website',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );


    /**
     * Footer Text Control
     */
    $wp_customize->add_control(
        'footer_text',
        array(
            'label'   => 'Footer Text',
            'section' => 'my_theme_options',
            'type'    => 'text',
        )
    );


    /**
     * Background Color Setting
     */
    $wp_customize->add_setting(
        'theme_background_color',
        array(
            'default'           => '#ffffff',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );


    /**
     * Background Color Control
     */
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'theme_background_color',
            array(
                'label'   => 'Background Color',
                'section' => 'my_theme_options',
            )
        )
    );


    /**
     * Text Color Setting
     */
    $wp_customize->add_setting(
        'theme_text_color',
        array(
            'default'           => '#000000',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );


    /**
     * Text Color Control
     */
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'theme_text_color',
            array(
                'label'   => 'Text Color',
                'section' => 'my_theme_options',
            )
        )
    );
}

add_action(
    'customize_register',
    'my_theme_customize_register'
);


/**
 * Apply Custom Colors
 */
function my_theme_custom_colors()
{
    $background_color = get_theme_mod(
        'theme_background_color',
        '#ffffff'
    );

    $text_color = get_theme_mod(
        'theme_text_color',
        '#000000'
    );
    ?>

    <style>
        body {
            background-color: <?php echo esc_attr($background_color); ?>;
            color: <?php echo esc_attr($text_color); ?>;
        }
    </style>

    <?php
}

add_action(
    'wp_head',
    'my_theme_custom_colors'
);


// register new customizer option ( footer options )

function add_customizer_options($wp_customize){
        $wp_customize->add_section(
        'footer_options',
        array(
            'title'    => 'footer Options',
            'priority' => 30,
        )
    );

    $wp_customize->add_setting(
        'footer_text',
        array(
            'default'           => 'Copyright © 2026 My Website',
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );

    $wp_customize->add_control(
        'footer_text',
        array(
            'label'   => 'Footer Text',
            'section' => 'footer_options',
            'type'    => 'text',
        )
    );

}

add_action('customize_register','add_customizer_options');