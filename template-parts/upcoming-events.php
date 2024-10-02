<!-- SECTION: UPCOMING EVENTS -->
<section class="upcoming-events">
  <div class="ue-container">
    <div class="ue-title">
      <svg viewbox="0 0 10 2">
        <text
          x="5"
          y="1"
          text-anchor="middle"
          font-size="1"
          fill="none"
          stroke-width=".015"
          stroke="#fff"
          font-family="var(--notsansjp)"
          stroke-opacity="0.8">
          UPCOMING EVENTS
        </text>
      </svg>
    </div>

    <div class="ue-details">
      <hr class="hr-pointer">
      <div class="ue-details-box">
        <div class="ue-details-text">
          <h1 class="ue-details-title"></h1>
          <p class="ue-details-content"></p>
          <div class="ue-date">
            <p class="monthyear"></p>
            <p class="monthday"></p>
          </div>
        </div>
      </div>
    </div>

    <div class="ue-swiper">
      <div class="swiper mySwiperue">
        <div class="swiper-wrapper">
          <?php
          $upcomingeventquery = new WP_Query(
            array(
              'post_type' => 'upcomingevent',
              'posts_per_page' => -1,
            )
          );
          if ($upcomingeventquery->have_posts()) {
            while ($upcomingeventquery->have_posts()):
              $upcomingeventquery->the_post();
              $monthyear = get_post_meta(get_the_ID(), "monthyear", true);
              $monthday = get_post_meta(get_the_ID(), "monthday", true);
          ?>
              <div class="swiper-slide swiper-ue" data-title="<?php the_title() ?>" data-content="<?php the_content() ?>" data-monthyear="<?php echo $monthyear ?>" data-monthday="<?php echo $monthday ?>">
                <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="" />
              </div>
          <?php
            endwhile;
            wp_reset_postdata();
          }
          ?>
        </div>
      </div>
    </div>
    <div class="swiper-navs">
      <div class="swiper-button-prev"></div>

      <div class="swiper-button-next"></div>
    </div>

</section>
<!-- END SECTION 4 -->