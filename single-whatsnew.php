<?php get_header(); ?>
<div id="whatsnewid">
  <!-- whatsnew page -->

  <?php render_join_landing("WHAT'S NEW", 'RESニュース') ?>

  <section class="section_news relative global-width">
    <div class="news-container">
      <div class="flex relative main-news-container">

        <div class="relative main-article" id="main-article">
          <div class="img-cover">
            <img class="news-img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
          </div>

          <div class="flex flex-column news-contents">
            <div class="main-news-details">
              <p class="w-500 p-20 sub-head-clr"><?php
                                                  $whatsnew_date = get_post_meta(get_the_ID(), '_whatsnew_date', true);
                                                  echo esc_html($whatsnew_date); ?></p>
              <p class="w-700 p-50 head-clr text-center article-title"><?php the_title(); ?></p>
              <div class="news-content w-500 p-20 head-clr">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
        <div class="recent-news">
          <p class="w-500 p-20 label-recents">RECENTS</p>

          <div class="flex recent-news-container">
            <?php
            $recent_whatsnew_query = new WP_Query([
              'post_type' => 'whatsnew',
              'posts_per_page' => 3,
              'post__not_in' => [get_the_ID()],
            ]);

            if ($recent_whatsnew_query->have_posts()) :
              while ($recent_whatsnew_query->have_posts()) : $recent_whatsnew_query->the_post();
                $recent_whatsnew_date = get_post_meta(get_the_ID(), '_whatsnew_date', true);
            ?>
                <a href="<?php echo get_permalink() ?>">
                  <div class="flex with-img">
                    <div class="img-recent">
                      <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
                    </div>

                    <div class="flex flex-column">
                      <p class="p-16 w-700 head-clr">
                        <?php echo get_the_title() ?>
                      </p>
                      <p class="p-14 read-more">READ MORE &raquo;</p>
                      <p class="p-12 text-clr"><?php echo esc_html($get_the_date()); ?></p>

                    </div>
                  </div>
                </a>
            <?php
              endwhile;
              wp_reset_postdata();
            endif;
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php get_footer(); ?>