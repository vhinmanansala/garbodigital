<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function services_title()
    {
        return get_field('services_title');
    }

    public function services()
    {
        return get_field('services');
    }

    public function about_title()
    {
        return get_field('about_title');
    }

    public function about_content()
    {
        return get_field('about_content');
    }

    public function about_link()
    {
        return get_field('about_link');
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
