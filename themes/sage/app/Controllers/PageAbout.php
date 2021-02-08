<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PageAbout extends Controller
{
    public function getLocationsQuery()
    {
        $locationPosts = new \WP_Query(array(
            "posts_per_page" => -1,
            "post_type" => 'location',
        ));
        return $locationPosts;
    }
}
