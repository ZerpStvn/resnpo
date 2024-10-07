<?php

function featurefront($feature_location = null)
{
?>
  <section id="features-section" class="features-section">
    <h2 class="feature-section-title">特徴</h2>

    <div class="main-feature-container">
      <div class="feature-card-container">
        <?php
        $featurecontentquery = new WP_Query(
          array(
            'post_type' => 'featuresection',
            'posts_per_page' => -1,
            'meta_query' => array(
              array(
                'key' => 'page_feature',
                'value' => $feature_location,
                'compare' => '='
              )
            )
          )
        );
        if ($featurecontentquery->have_posts()) {
          while ($featurecontentquery->have_posts()) {
            $featurecontentquery->the_post();
            $featuretitle = get_the_title();
            $featureimage = get_the_post_thumbnail_url();
        ?>

            <div class="feature-card">
              <img src="<?php echo $featureimage; ?>" alt="Project Image 1">
              <p class="p-bold-25-white"><?php echo $featuretitle; ?></p>
            </div>

        <?php
          }
          wp_reset_postdata();
        }
        ?>
      </div>
    </div>
  </section>

<?php
}
