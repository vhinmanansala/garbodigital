<?php

namespace App\Controllers;

use WP_Query;
use Sober\Controller\Controller;

class Archive extends Controller
{
    public function project_types()
    {
        return get_terms([
            'taxonomy' => 'project_type',
            'hide_empty' => false,
        ]);
    }
}