<?php get_header(); ?>
<div id="whatsnewid">
  <!-- whatsnew page -->

  <section class="donation-header">
    <div class="border relative">
      <div class="donation-container relative slidedown">

        <div class="b-titles text-centered">

          <p class="b-title">WHAT’S NEW</p>
          <p class="b-title">WHAT’S NEW</p>
          <p class="b-title">WHAT’S NEW</p>
          <p class="b-title">WHAT’S NEW</p>

        </div>
        <!-- <p class="wk-s-5">WHAT’S NEW</p>
        <div class="text-deco-donation">
          <p class="wk-s-5">WHAT’S NEW</p>
        </div>
        <div class="text-deco-donation">
          <p class="wk-s-5">WHAT’S NEW</p>
        </div>
        <div class="text-deco-donation">
          <p class="wk-s-5">WHAT’S NEW</p>
        </div> -->

        <div class="header-txt-container absolute">
          <p>RESニュース</p>
        </div>
        <div class="res-txt-container absolute">
          <ul class="flex gap-15">
            <li>
              <img src="<?php echo RESNPO_URI . '/assets/image/donation/header/resnpo-ico.png'; ?>" alt="" />
            </li>
            <li>
              <p class="w-700 p-14 white-clr">NPO法人</p>
              <p class="w-700 p-14 white-clr">REGIONAL EDUCATION SUPPORT</p>
            </li>
          </ul>
        </div>
      </div>
      <div class="social-icons absolute">
        <ul class="social-icons-ul flex align-items-center">
          <li>
            <img src="<?php echo RESNPO_URI . '/assets/image/donation/header/sm-line-icon.png'; ?>" alt="" />
          </li>
          <li>
            <img src="<?php echo RESNPO_URI . '/assets/image/donation/header/sm-fb-icon.png'; ?>" alt="" />
          </li>
          <li>
            <img src="<?php echo RESNPO_URI . '/assets/image/donation/header/sm-yt-icon.png'; ?>" alt="" />
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="section_news relative global-width">
    <div class="news-container">
      <ul class="flex relative ul-main-news">

        <li class="relative" id="main-article">
          <img class="news-img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">

          <div class="main-news-details">
            <p class="w-500 p-20 sub-head-clr"><?php
                                                $whatsnew_date = get_post_meta(get_the_ID(), '_whatsnew_date', true);
                                                echo esc_html($whatsnew_date); ?></p>
            <p class="w-700 p-50 head-clr text-center"><?php the_title(); ?></p>
            <div class="news-content w-500 p-20 head-clr">
              <?php the_content(); ?>
            </div>
          </div>
        </li>
        <li>
          <p class="w-500 p-20 label-recents">RECENTS</p>

          <ul class="ul-recent-news">
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
                    <div class="img-container-news-recent">
                      <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
                    </div>
                    <div>
                      <p class="p-14 w-700 head-clr">
                        <?php echo get_the_title() ?>
                      </p>
                      <p class="p-12 text-clr"><?php echo esc_html($recent_whatsnew_date); ?></p>
                    </div>
                  </div>
                </a>
            <?php
              endwhile;
              wp_reset_postdata();
            endif;
            ?>
          </ul>
        </li>
      </ul>
    </div>
  </section>
</div>
<?php get_footer(); ?>