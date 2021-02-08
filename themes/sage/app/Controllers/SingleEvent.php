<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SingleEvent extends Controller
{
    public function getArchiveLink()
    {
      $today = date('Ymd');
      $event_date = new \DateTime(get_field('event_date'));
      if($event_date->format('Ymd') >= $today) {
         return '<a class="link-dark back-link" href="' . site_url("/events") . '"><< Upcoming Events</a><br/>';
      } else {
         return '<a class="link-dark back-link" href="' . site_url("/past-events") . '"><< Past Events</a><br/>';
      }
    }

}
