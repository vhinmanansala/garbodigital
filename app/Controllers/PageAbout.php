<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PageAbout extends Controller
{
    public function meet_our_team_title()
    {
        return get_field('meet_our_team_title');
    }
    
    public function members()
    {
        return get_field('members');
    }
}