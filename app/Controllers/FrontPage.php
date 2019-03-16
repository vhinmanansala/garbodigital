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

    
}
