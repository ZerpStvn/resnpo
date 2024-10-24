<!-- SECTION: UPCOMING EVENTS -->
<section id="upcoming_event" class="upcoming-events">
  <main class="ue-container global-width">
    <div class="ue-title">
      <h1 class="upcoming-events-title outline">UPCOMING EVENTS</h1>
    </div>

    <svg version="1.1" xmlns="//www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" style="display:none;">
      <defs>
        <filter id="stroke-text-svg-filter">
          <feMorphology operator="dilate" radius="3"></feMorphology>
          <feComposite operator="xor" in="SourceGraphic" />
        </filter>
      </defs>
    </svg>

    <div class="ue-details flex">
      <hr class="hr-pointer">
      <div class="ue-details-box">
        <div class="ue-details-text">
          <h1 class="ue-details-title"></h1>
          <p class="ue-details-content"></p>
          <p class="ue-details-subdescription"></p>

          <div class="ue-date-container">
            <div class="ue-date-desktop">
              <div class="ue-date">
                <p class="monthyear"></p>
                <p class="monthday"></p>
              </div>
            </div>

            <div class="ue-date-mobile">
              <div class="swiper-button-prev"></div>
              <div class="ue-date">
                <p class="monthyear"></p>
                <p class="monthday"></p>
              </div>
              <div class="swiper-button-next"></div>
            </div>
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
              $subdescription = get_post_meta(get_the_ID(), "subdescription", true);
              $monthyear = get_post_meta(get_the_ID(), "monthyear", true);
              $monthday = get_post_meta(get_the_ID(), "monthday", true);
          ?>
              <div class="swiper-slide swiper-ue" data-title="<?php the_title(); ?>" data-content="<?php echo esc_attr(html_entity_decode(wp_strip_all_tags(get_the_content()))); ?>" data-subdescription="<?php echo esc_attr($subdescription); ?>" data-monthyear="<?php echo esc_attr($monthyear); ?>" data-monthday="<?php echo esc_attr($monthday); ?>">
                <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php the_title(); ?>" />
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
  </main>
</section>
<!-- END SECTION 4 -->