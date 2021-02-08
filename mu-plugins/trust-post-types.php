<?php 
function trust_post_types() {
   // event post type
   register_post_type('event', array(
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'excerpt'),
      'has_archive' => true,
      'rewrite' => array(
         'slug' => 'events'
      ),
      'public' => true,
      'labels' => array(
         'name' => 'Events',
         'add_new_item' => 'Add New Events',
         'edit_item' => 'Edit Event',
         'all_items' => 'All Events',
         'singuler_name' => 'Event'
      ),
      'menu_icon' => 'dashicons-calendar'
   ));
   // location post type
   register_post_type('location', array(
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'excerpt'),
      'public' => true,
      'labels' => array(
         'name' => 'Locations',
         'add_new_item' => 'Add New Locations',
         'edit_item' => 'Edit Location',
         'all_items' => 'All Locations',
         'singuler_name' => 'Location'
      ),
      'menu_icon' => 'dashicons-location-alt'
   ));
   // person post type
   register_post_type('person', array(
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array(
         'slug' => 'contact'
      ),
      'labels' => array(
         'name' => 'People',
         'add_new_item' => 'Add New People',
         'edit_item' => 'Edit Person',
         'all_items' => 'All People',
         'singuler_name' => 'Person'
      ),
      'menu_icon' => 'dashicons-universal-access'
   ));
}

add_action('init', 'trust_post_types');

function trust_custom_rest() {
  register_rest_field('person', 'email', array(
    'get_callback' => function() { return get_field("email");}
  ));
  register_rest_field('person', 'portrait_url', array(
    'get_callback' => function() { 
      return get_the_post_thumbnail_url(get_the_id(), "portrait_full");}
  ));
}
add_action('rest_api_init', 'trust_custom_rest');

?>