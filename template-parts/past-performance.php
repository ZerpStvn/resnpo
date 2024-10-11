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
?>
<section class="past-performance">
  <h1 class="past-performance-title">
    <span class="dark-blue">「</span>
    <span class="pp-main-title"><?php echo display_title() ?></span>
    <span class="dark-blue">」</span>
    <span class="sub-title head-clr">の過去実績をご紹介します。</span>
  </h1>

  <div class="past-performance-box flex">
    <div class="pp-container">
      <div class="pp-content-box flex">
        <?php
        $args = [
          'post_type' => 'pastperformance',
          'posts_per_page' => -1,
        ];
        $query = new WP_Query($args);
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
          wp_reset_postdata();
        else :
          echo '<p>No past performances found.</p>';
        endif;
        ?>
        <div class="pp-slider flex">
          <div class="scroll-container">
            <div class="scroll-content">
              <?php
              $query = new WP_Query($args);
              if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                  $images = get_post_meta(get_the_ID(), 'images', true) ?: [];
                  foreach ($images as $image) {
                    echo '<img src="' . esc_url($image) . '" alt="Image" class="slider-image">';
                  }
                endwhile;
                wp_reset_postdata();
              endif;
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="pagination flex">
        <a class="mr-r-87" href="#">&laquo;</a>
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">...</a>
        <a class="mr-l-87" href="#">&raquo;</a>
      </div>
    </div>
  </div>
</section>