<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PagePastEvents extends Controller
{
    public function getPastEventQuery()
    {
        $today = date('Ymd');
        $pastEvents = new \WP_Query(array(
            'post_type' => 'event',
            'orderby' => 'meta_value_num',
            'meta_key' => 'event_date',
            'order' => 'DESC',
            'paged' => get_query_var('paged', 1),
            'meta_query' => array(
                array(
                    'key' => 'event_date',
                    'compare' => '<',
                    'value' => $today,
                    'type' => 'numeric'
                )
            )
        ));
        return $pastEvents;
    }
}
