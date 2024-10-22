<?php
function display_title()
{
  if (is_page()) {
    $slug = get_post_field('post_name', get_post());
    if ($slug === 'sdg') {
      echo 'SDGs甲子園';
    } elseif ($slug === 'study-abroad') {
      echo '海外留学';
    }
  }
}

// Get current page number
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

// Number of posts per page
$posts_per_page = 1; // Adjust this number as needed

$args = [
  'post_type' => 'pastperformance',
  'posts_per_page' => $posts_per_page,
  'paged' => $paged,
];

$query = new WP_Query($args);
?>

<section id="past-performance-section" class="past-performance">
  <h1 class="past-performance-title">
    <span class="dark-blue">「</span>
    <span class="pp-main-title"><?php display_title(); ?></span>
    <span class="dark-blue">」</span>
    <span class="sub-title head-clr">の過去実績をご紹介します。</span>
  </h1>

  <div class="past-performance-box flex">
    <div class="pp-container">
      <div class="pp-content-box flex">
        <?php
        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
        ?>
            <div class="past-performance-texts">
              <div class="column">
                <div class="row-1 pp-rows flex">
                  <p class="p-green-20">カテゴリ</p>
                  <p class="p-white-16"><?php echo esc_html(get_post_meta(get_the_ID(), 'category', true)); ?></p>
                </div>
                <div class="row-2 pp-rows flex">
                  <p class="p-green-20">開催日時</p>
                  <p class="p-white-16"><?php echo esc_html(get_post_meta(get_the_ID(), 'dateNtime', true)); ?></p>
                </div>
                <div class="row-3 pp-rows flex">
                  <p class="p-green-20">開催場所</p>
                  <p class="p-white-16"><?php echo esc_html(get_post_meta(get_the_ID(), 'location', true)); ?></p>
                </div>
                <div class="row-4 pp-rows flex">
                  <p class="p-green-20">主な内容</p>
                  <p class="p-white-16"><?php echo nl2br(esc_html(get_post_meta(get_the_ID(), 'main_content', true))); ?>
                    <?php
                    $activity_titles = get_post_meta(get_the_ID(), 'activity_titles', true) ?: [];
                    $activity_descriptions = get_post_meta(get_the_ID(), 'activity_descriptions', true) ?: [];
                    foreach ($activity_titles as $index => $title) {
                      echo '<br><br><br><span class="p-green-20">' . esc_html($title) . '</span><br><br>';
                      echo '<span class="p-white-16">' . nl2br(esc_html($activity_descriptions[$index])) . '</span><br>';
                    }
                    ?>
                  </p>
                </div>
              </div>
            </div>
        <?php
          endwhile;
        else :
          echo '<p>No past performances found.</p>';
        endif;
        ?>
        <div class="pp-slider flex">
          <div class="scroll-container">
            <div class="scroll-content">
              <?php
              if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                  $images = get_post_meta(get_the_ID(), 'images', true) ?: [];
                  foreach ($images as $image) {
                    echo '<img class="marquee-carousels" src="' . esc_url($image) . '" alt="Image" class="slider-image">';
                  }
                endwhile;
              endif;
              wp_reset_postdata();
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="pagination flex">
        <?php
        $total_pages = $query->max_num_pages;
        if ($total_pages > 1) :
          $current_page = max(1, get_query_var('paged'));
          echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => 'page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text'    => '&laquo;',
            'next_text'    => '&raquo;',
            'type'         => 'list',
            'end_size'     => 3,
            'mid_size'     => 3,
            'before_page_number' => '<span class="page-number">',
            'after_page_number' => '</span>',
          ));
        endif;
        ?>
      </div>
    </div>
  </div>
</section>