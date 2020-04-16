<?php

function register_acf_options_pages()
{
    if (!function_exists('acf_add_options_page')) {
        return;
    }

    acf_add_options_page(array(
        'page_title' => __('Theme Setting'),
        'menu_title' => __('Theme Setting'),
        'menu_slug' => 'theme-general-form',
        'capability' => 'edit_posts',
        'redirect' => false,
    ));

}

add_action('acf/init', 'register_acf_options_pages');