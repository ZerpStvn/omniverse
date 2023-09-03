<?php
define("OMNI_URL", get_template_directory_uri());
define('OMNI_ASSETS', OMNI_URL . '/assets');
define('OMNI_CSS', OMNI_ASSETS . '/css');
define('OMNI_JS', OMNI_ASSETS . '/js');
define('OMNI_IMG', OMNI_ASSETS . '/images');

add_action("wp_enqueue_scripts", "add_theme");

function add_theme()
{
    wp_enqueue_style('common_css', OMNI_CSS . '/common.css');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('top_css', OMNI_CSS . '/top.css');
    wp_enqueue_style('bottom_css', OMNI_CSS . '/bottom.css');
    wp_enqueue_style('aos_css', OMNI_CSS . '/aos.css');
    wp_enqueue_script('aos_js', OMNI_JS . '/aos.js', NULL, 1.0, true);
    wp_enqueue_script('jquery_js', OMNI_JS . '/jquery.js', NULL, 1.0, true);
    wp_enqueue_script('common_js', OMNI_JS . '/common.js', NULL, array('jquery'), 1.0, true);
}

add_action('init', 'add_pages');
function add_pages()
{
    $pages = array(
        array(
            'post_title' => 'Home',
            'post_content' => 'Home page',
            'post_status' => 'publish',
            'post_author' => 1,
            'post_type' => 'page',
            'post_name' => 'home'
        ),
        array(
            'post_title' => 'About',
            'post_content' => 'About page',
            'post_status' => 'publish',
            'post_author' => 1,
            'post_type' => 'page',
            'post_name' => 'about'
        ),
        array(
            'post_title' => 'Benifits',
            'post_content' => 'Benefits page',
            'post_status' => 'publish',
            'post_author' => 1,
            'post_type' => 'page',
            'post_name' => 'benefits'
        ),

    );

    foreach ($pages as $page) {
        $existing_page = get_page_by_path($page['post_name']);
        if (is_null($existing_page)) {
            wp_insert_post($page);
        }
    }

    // Set the home page as the main page
    $homepage = get_page_by_path('home');
    update_option('page_on_front', $homepage->ID);
    update_option('show_on_front', 'page');
}