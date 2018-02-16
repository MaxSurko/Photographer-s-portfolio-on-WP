<?php

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

show_admin_bar(false);

add_theme_support('menus');

add_theme_support('post-thumbnails');

add_theme_support( 'title-tag' );

function my_theme_load_resources() {

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/libs/bootstrap/css/bootstrap.min.css', array(), '0.1' );
	wp_enqueue_style( 'linea', get_template_directory_uri() . '/libs/linea/styles.css', array(), '0.1' );	
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/libs/magnific-popup/magnific-popup.css', array(), '0.1' );
	
	wp_enqueue_style( 'fonts', get_template_directory_uri() . '/css/fonts.css', array(), '0.1' );
	wp_enqueue_style( 'media', get_template_directory_uri() . '/css/media.css', array(), '0.1' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', array(), '0.1' );

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/libs/jquery/jquery-3.3.1.min.js', array(), '0.1', true );
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/libs/modernizr/modernizr.js', array(), '0.1' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/libs/bootstrap/js/bootstrap.min.js', array(), '0.1', true );
    wp_enqueue_script( 'freewall', get_template_directory_uri() . '/libs/freewall/freewall.js', array(), '0.1', true );
    wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/libs/magnific-popup/jquery.magnific-popup.min.js', array(), '0.1', true );
    wp_enqueue_script( 'nicescroll', get_template_directory_uri() . '/libs/nicescroll/jquery.nicescroll.min.js', array(), '0.1', true );
    wp_enqueue_script( 'lazyload', get_template_directory_uri() . '/libs/lazyload/jquery.lazyload.min.js', array(), '0.1', true );
	
    wp_enqueue_script( 'commonjs', get_template_directory_uri() . '/js/common.js', array(), '0.1', true );

};
add_action( 'wp_enqueue_scripts', 'my_theme_load_resources' );



//Добавление нового типа записей
add_action( 'init', 'tpl_portfolio' );
function tpl_portfolio() {
    register_post_type( 'portfolio', array(
            'public' => true,
            'labels' => array(
                'name' => 'Portfolio',
                'all_items' => 'All works',
                'add_new' => 'Add work',
                'add_new_item' => 'Add work to the portfolio'
            ),
            'supports' => array( 'title', 'thumbnail' ),
            'taxonomies' => array( 'post_tag', 'category ')
        )
    );
};

function deleteSpace($str) {
    return $str = str_replace(' ', '_',$str);
}

function get_ID_by_slug($page_slug) {
    $page = get_page_by_path($page_slug);
    if ($page) {
        return $page->ID;
    } else {
        return null;
    }
}