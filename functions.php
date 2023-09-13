<?php
define("OMNI_DIR", get_template_directory());
define("OMNI_URL", get_template_directory_uri());
define("OMNI_INC", OMNI_DIR . '/include');
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
    wp_enqueue_style('product_css', OMNI_CSS . '/product.css');
    wp_enqueue_style('contact_css', OMNI_CSS . '/contact.css');
    wp_enqueue_style('about_css', OMNI_CSS . '/about.css');
    wp_enqueue_style('aos_css', OMNI_CSS . '/aos.css');
    wp_enqueue_style('slick_css', OMNI_CSS . '/slick.css');
    wp_enqueue_script('aos_js', OMNI_JS . '/aos.js', NULL, 1.0, true);
    wp_enqueue_script('jquery_js', OMNI_JS . '/jquery.js', NULL, 1.0, true);
    wp_enqueue_script('common_js', OMNI_JS . '/common.js', NULL, array('jquery'), 1.0, true);
    wp_enqueue_script('slick_js', OMNI_JS . '/slick.js', NULL, 1.0, true);
}

add_action('init', 'add_pages');
function add_pages()
{
    $pages = array(
        array(
            'post_title' => 'Home',
            'post_content' => 'Home page',
            'post_excerpt' => 'Learn about our company and our mission to provide innovative solutions in clean energy. Discover our team and values at Company Name.',
            'post_status' => 'publish',
            'post_author' => 1,
            'post_type' => 'page',
            'post_name' => 'home'
        ),
        array(
            'post_title' => 'About',
            'post_content' => 'About page',
            'post_excerpt' => 'Learn all about Metaverse discover our awesome products',
            'post_status' => 'publish',
            'post_author' => 1,
            'post_type' => 'page',
            'post_name' => 'about'
        ),
        array(
            'post_title' => 'Team',
            'post_content' => 'Team page',
            'post_excerpt' => 'Explore our range of services, including renewable energy solutions, energy consulting, and sustainability assessments. Find out how we can help your business.',
            'post_status' => 'publish',
            'post_author' => 1,
            'post_type' => 'page',
            'post_name' => 'team'
        ),
        array(
            'post_title' => 'Contact',
            'post_content' => 'Contact page',
            'post_excerpt' => 'Getting to know us',
            'post_status' => 'publish',
            'post_author' => 1,
            'post_type' => 'page',
            'post_name' => 'contact'
        ),
        array(
            'post_title' => 'Products',
            'post_content' => 'Products page',
            'post_excerpt' => 'Explore our product Electromagnetic energy flux Reactor (EER) Stationary Power Generation (SPG)',
            'post_status' => 'publish',
            'post_author' => 1,
            'post_type' => 'page',
            'post_name' => 'products'
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
function custom_excerpt_length($length)
{
    return 220;
}

add_filter('excerpt_length', 'custom_excerpt_length');

// function remove_excerpt_more($more)
// {
//     return '...';
// }
// add_filter('excerpt_more', 'remove_excerpt_more');
add_theme_support('post-thumbnails');

include_once OMNI_INC . "/custom_post/content.php";