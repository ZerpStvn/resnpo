<?php

class PhotoGalleryPostType
{
  public function __construct()
  {
    add_action('init', [$this, 'register_post_type']);
    // add_action('add_meta_boxes', [$this, 'add_meta_boxes']);
  }

  public function register_post_type()
  {
    register_post_type(
      'photo_gallery',
      array(
        'labels' => array(
          'name' => __('Photo Galleries'),
          'singular_name' => __('Photo Gallery')
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-format-gallery',
      )
    );
  }
}
new PhotoGalleryPostType();
