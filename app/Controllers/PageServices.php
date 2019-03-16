<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PageServices extends Controller
{
    public function title()
    {
        return get_field('title');
    }

    public function content()
    {
        return get_field('content');
    }

    public function services()
    {
        return get_field('services');
    }
}