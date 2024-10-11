<?php
class newsPostType
{
  public function __construct()
  {
    add_action('init', array($this, 'register_post_type'));
    add_action('add_meta_boxes', [$this, 'add_meta_boxes']);
    add_action('save_post', [$this, 'save_meta_box_data']);
  }

  public function register_post_type()
  {
    $labels = [
      'name' => _x('News', 'Post Type General Name', 'textdomain'),
      'singular_name' => _x('News', 'Post Type Singular Name', 'textdomain'),
      'menu_name' => __('News', 'textdomain'),
      'name_admin_bar' => __('News', 'textdomain'),
    ];

    $args = [
      'label' => __('News', 'textdomain'),
      'labels' => $labels,
      'supports' => ['title', 'editor', 'thumbnail'],
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_icon' => 'dashicons-star-filled',
    ];

    register_post_type('news', $args);
  }

  public function add_meta_boxes()
  {
    add_meta_box(
      'news_date',
      'News Date',
      [$this, 'news_date_meta_box_callback'],
      'news',
      'normal',
      'high'
    );
  }



  public function news_date_meta_box_callback($post)
  {
    wp_nonce_field('save_news_date', 'news_date_nonce');
    $date = get_post_meta($post->ID, '_news_date', true);
?>
    <label for="news_date">News Date</label>
    <input type="date" id="news_date" name="news_date" value="<?php echo $date; ?>">
<?php
  }

  public function save_meta_box_data($post_id)
  {
    if (array_key_exists('news_date', $_POST)) {
      update_post_meta($post_id, '_news_date', sanitize_text_field($_POST['news_date']));
    }
  }
}

new newsPostType();
