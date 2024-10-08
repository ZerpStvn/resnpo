<?php

class PastPerformancePostType
{
  public function __construct()
  {
    add_action('init', [$this, 'register_post_type']);
    add_action('add_meta_boxes', [$this, 'add_meta_boxes']);
    add_action('save_post', [$this, 'save_meta_boxes']);
  }
  public function register_post_type()
  {
    $labels = [
      'name' => _x('Past Performances', 'Post Type General Name', 'textdomain'),
      'singular_name' => _x('Past Performance', 'Post Type Singular Name', 'textdomain'),
      'menu_name' => __('Past Performances', 'textdomain'),
      'name_admin_bar' => __('Past Performance', 'textdomain'),
    ];

    $args = [
      'label' => __('Past Performance', 'textdomain'),
      'labels' => $labels,
      'supports' => ['title', 'editor', 'thumbnail'],
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_icon' => 'dashicons-star-filled',
    ];

    register_post_type('pastperformance', $args);
  }

  public function add_meta_boxes()
  {
    add_meta_box(
      'category',
      'Category',
      [$this, 'category_meta_box_callback'],
      'pastperformance',
      'normal',
      'high'
    );

    add_meta_box(
      'dateNtime',
      'Date and Time',
      [$this, 'dateNtime_meta_box_callback'],
      'pastperformance',
      'normal',
      'high'
    );

    add_meta_box(
      'location',
      'Location',
      [
        $this,
        'location_meta_box_callback'
      ],
      'pastperformance',
      'normal',
      'high'
    );

    add_meta_box(
      'main_content',
      'Main Content',
      [$this, 'content_meta_box_callback'],
      'pastperformance',
      'normal',
      'high'
    );
  }

  public function category_meta_box_callback($post)
  {
    $value = get_post_meta($post->ID, 'category', true);
?>
    <label for="category">Category</label>
    <input type="text" id="category" name="category" value="<?php echo $value; ?>">
  <?php
  }

  public function dateNtime_meta_box_callback($post)
  {
    $value = get_post_meta($post->ID, 'dateNtime', true);
  ?>
    <label for="dateNtime">Date and Time</label>
    <input type="text" id="dateNtime" name="dateNtime" value="<?php echo $value; ?>">
  <?php
  }

  public function location_meta_box_callback($post)
  {
    $value = get_post_meta($post->ID, 'location', true);
  ?>
    <label for="location">Location</label>
    <input type="text" id="location" name="location" value="<?php echo $value; ?>">
  <?php
  }

  public function content_meta_box_callback($post)
  {
    $value = get_post_meta($post->ID, 'main_content', true);
  ?>
    <label for="main_content">Main Content</label>
    <textarea id="main_content" name="main_content" rows="10" style="width: 100%;"><?php echo $value; ?></textarea>
<?php
  }

  public function save_meta_boxes($post_id)
  {
    if (array_key_exists('category', $_POST)) {
      update_post_meta($post_id, 'category', sanitize_text_field($_POST['category']));
    }

    if (array_key_exists('dateNtime', $_POST)) {
      update_post_meta($post_id, 'dateNtime', sanitize_text_field($_POST['dateNtime']));
    }

    if (array_key_exists('location', $_POST)) {
      update_post_meta($post_id, 'location', sanitize_text_field($_POST['location']));
    }

    if (array_key_exists('main_content', $_POST)) {
      update_post_meta($post_id, 'main_content', sanitize_text_field($_POST['main_content']));
    }
  }
}

new PastPerformancePostType();
