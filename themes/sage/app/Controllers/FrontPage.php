<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function getPostQuery()
    {
    $postQuery = new \WP_Query([
      'posts_per_page'=>'3',
      'post_type' => 'post'
    ]);
    return $postQuery;
    }

  public function getEventQuery()
  {
    $today = date('Ymd');
    $eventQuery = new \WP_Query(array(
        "posts_per_page" => 3,
        "post_type" => 'event',
        'orderby' => 'meta_value_num',
        'meta_key' => 'event_date',
        'order' => 'ASC',
        'meta_query' => array(
            array(
                'key' => 'event_date',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'
            )
        )
    ));
    return $eventQuery;
  }

  public function getCarouselImages() {
    return array(
        array(
            'path' => 'images/nature1.jpg',
            'alt' => 'A road into the sunset.'
        ),
        array(
            'path' => 'images/nature2.jpg',
            'alt' => 'A fallow field.'
        ),
        array(
            'path' => 'images/nature3.jpg',
            'alt' => 'A pond at twilight.'
        )
    );
  }
}
