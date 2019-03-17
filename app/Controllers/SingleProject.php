<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SingleProject extends Controller
{
    public function client()
    {
        return get_field('client');
    }

    public function roles()
    {
        return get_field('role');
    }

    public function completion_date()
    {
        return get_field('completion_date');
    }

    public function images()
    {
        return get_field('images');
    }
}