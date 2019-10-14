<?php


add_theme_support('title-tag');

// Google fonts

function load_google_fonts(){
    wp_enqueue_style('google_font', 'https://fonts.googleapis.com/css?family=Playfair+Display&display=swap', false);
}

add_action('wp_enqueue_scripts', 'load_google_fonts');

function load_theme_stylesheet(){
    wp_enqueue_style('style', get_stylesheet_uri(), []);
    wp_register_style('custom-style', get_template_directory_uri().'/css/aos.css', array(), '1.0.0', 'all');
    wp_enqueue_style('custom-style');

    wp_enqueue_script('custom-script', get_template_directory_uri().'/js/aos.js');
    
    wp_enqueue_script('jquery');

}

add_action('wp_enqueue_scripts', 'load_theme_stylesheet');


// Theme Functions

function load_customizer_register($wp_customize){
    $wp_customize->add_section('create_header_top_logo', array(
        'title' =>__('Header Area', 'create'),
        'description' => 'If you need to update your logo you can update.',
    ));

    $wp_customize->add_setting('create_logo', array(
        'default'=>get_bloginfo('template_directory') . '/img/main-logo.png',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'create_logo', array(
        'label'=>'Logo',
        'description'=>'Upload your logo',
        'section' =>'create_header_top_logo',
        'settings'=>'create_logo',

    )));

}


add_action('customize_register', 'load_customizer_register');

// svg menu


// function load_customizer_svg($wp_customize){
//     $wp_customize->add_section('create_header_top_svg', array(
//         'title' =>__('Header Area', 'create'),
//         'description' => 'If you need to update your logo you can update.',
//     ));

//     $wp_customize->add_setting('create_logo', array(
//         'default'=>get_bloginfo('template_directory') . '/img/main-logo.png',
//     ));
//     $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'create_logo', array(
//         'label'=>'Social',
//         'description'=>'Upload your social svg or image',
//         'section' =>'create_header_top_svg',
//         'settings'=>'create_logo',

//     )));

// }


// add_action('customize_register', 'load_customizer_svg');

// Menu function

register_nav_menu('primary', __('Main Menu', 'create') );


//SVG

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
   }
   add_filter('upload_mimes', 'cc_mime_types');


?>