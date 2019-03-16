<?php

namespace App\Controllers;

use WP_Query;
use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public function site_url()
    {
        return get_bloginfo('url');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public function logo()
    {
        return get_field('logo', 'options');
    }

    public function socialMedias()
    {
        return get_field('social_medias', 'option');
    }

    public function projects()
    {
        $args = array('post_type' => 'project', 'posts_per_page' => 3);
        return new WP_Query($args);
    }

    public function header_background()
    {
        return get_field('header_background');
    }

    public function sub_heading()
    {
        return get_field('sub_heading');
    }

    public function customers_title()
    {
        return get_field('customers_title');
    }

    public function customers_content()
    {
        return get_field('customers_content');
    }

    public function customer_logos()
    {
        return get_field('customer_logos');
    }

    public function customers_background()
    {
        return get_field('customers_background');
    }
}
