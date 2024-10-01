<?php get_header('study-abroad') ?>

<!-- SECTION 1: FRONT -->
<?php articlefront('RESのSDGs<br>甲子園とは
', 'SDGsの17の目標に沿って学校や地域社会の課題解決を考え、実際の行動に繋げます。<br> SDGsの取り組み事例を学んだり、ゲームを通じてSDGsの理念について考えたりします。<br> 学校同士の交流も図りながら、それぞれの課題を掘り下げていきます。', '/studyabroad/study-front.png') ?>
<!-- END SECTION 1 -->


<!-- SECTION 2: Feature -->
<?php featurefront('sdg') ?>



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







<!-- SECTION 5: PAST PERFORMANCE -->
<section class="past-performance">
  <h1 class="past-performance-title">
    <span class="dark-blue">「</span>
    SDGs甲子園
    <span class="dark-blue">」</span><span class="sub-title">の過去実績をご紹介します。</span>
  </h1>

  <div class="past-performance-box">
    <div class="pp-container">
      <div class="pp-content-box">

        <div class="past-performance-texts">
          <div class="column">
            <div class="row-1 pp-rows">
              <p class="p-green-20">カテゴリ</p>
              <p class="p-white-16">海外支援</p>
            </div>
            <div class="row-2 pp-rows">
              <p class="p-green-20">開催日時</p>
              <p class="p-white-16">2024年3月20日～3月28日</p>
            </div>
            <div class="row-3 pp-rows">
              <p class="p-green-20">開催場所</p>
              <p class="p-white-16">フィリピン　イロイロ市</p>
            </div>
            <div class="row-4 pp-rows">
              <p class="p-green-20">主な内容</p>
              <p class="p-white-16">
                フィリピンのイロイロ市を滞在拠点にし、様々なボランティア活動や、
                異文化に触れる体験を行いました。活動は現地の高校生と一緒に行い、
                他国の同年代との交流も行いました。
                <span class="p-green-20">
                  <br><br><br>
                  主なボランティア活動
                </span>
                <span class="p-white-16">
                  <br><br>
                  【マングローブ植樹】<br> 人々の生活や安全を守るため、沿岸部でマングローブの植樹を行い
                  ました。
                  <br><br>
                  【孤児院の訪問】
                  <br>
                  様々な理由で家族と一緒に暮らせない子どもたちが生活する孤児院
                  を訪問。子どもたちと一緒にバッグの染色を行い交流しました。
                  <br><br>
                  【海岸清掃】<br>
                  自国で廃棄されたものだけでなく様々な国からの廃棄物が漂着す
                  るフィリピン。イロイロ市の隣の島「ギマラス島」の海岸で、漂着
                  物などの回収を行いました。
                  <br><br>
                  【配給活動】<br> 交通や生活インフラの整っていない、先住民の方々が住む地区を
                  訪問。支援の物資を届け、地域の住人と交流を行いました
                </span>
                <span class="p-green-20">
                  <br><br><br>
                  異文化体験
                </span>
                <span class="p-white-16">
                  <br>
                  【山間部の生活体験】
                  <br>
                  都市部から少し離れた山間部の集落を訪問。豊かな自然の中で生活
                  を営む人々の暮らしを、見学・体験しました。
                  【Cityツアー】
                  <br>
                  イロイロ市に残る歴史的建造物や観光スポットを見学。今のフィリ
                  ピンの文化や価値観がどのように育まれてきたのかを肌で感じました。
                  <br><br>
                  参加者たちは、ボランティア活動やフィリピンの歴史や文化・習慣な
                  どに触れるプログラムに参加し、国際的な価値観や視野を育みました。
                </span>
              </p>
            </div>
          </div>
        </div>
        <div class="pp-vertical-slider">
          <img src="<?php echo RESNPO_IMAGE . '/hap.png' ?>" alt="Image 1" class="slider-image">
        </div>
      </div>
      <div class="pagination">
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
<!-- END SECTION 5 -->

<section id="impressions" class="impressions">
  <h1 class="impressions-title">
    参加者の感想
  </h1>
  <div class="impressions-slider">
    <div class="impression-image">
      <img src="<?php echo RESNPO_IMAGE . '/studyabroad/impression1.jpeg' ?>" alt="">
    </div>
    <div class="impression-image">
      <img src="<?php echo RESNPO_IMAGE . '/studyabroad/impression2.jpeg' ?>" alt="">
    </div>
    <div class="impression-image">
      <img src="<?php echo RESNPO_IMAGE . '/studyabroad/impression3.jpeg' ?>" alt="">
    </div>
    <div class="impression-image">
      <img src="<?php echo RESNPO_IMAGE . '/studyabroad/impression4.jpeg' ?>" alt="">
    </div>
    <div class="impression-image">
      <img src="<?php echo RESNPO_IMAGE . '/studyabroad/impression5.jpeg' ?>" alt="">
    </div>
  </div>
</section>

<!-- SECTION 4: PHOTO GALLERY -->
<section class="photo-gallery global-width">
  <div class="photo-gallery-texts">
    <div class="photo-gallery-title">
      <img src="<?php echo RESNPO_IMAGE . '/photo-gallery.png' ?>" alt="photogal">
    </div>
    <div class="photo-gallery-content">
      <p class="p-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
    </div>
  </div>

  <div class="photo-gallery-images swiper-pg mySwiperpg">
    <div class="gallery-images swiper-wrapper">
      <div class="swiper-slide gallery-images">
        <img class="gallery-image" src="<?php echo RESNPO_IMAGE . '/gal1.png' ?>" alt="">
      </div>
      <div class="swiper-slide gallery-images">
        <img class="gallery-image" src="<?php echo RESNPO_IMAGE . '/gal2.png' ?>" alt="">
      </div>
      <div class="swiper-slide gallery-images">
        <img class="gallery-image" src="<?php echo RESNPO_IMAGE . '/gal3.png' ?>" alt="">
      </div>
      <div class="swiper-slide gallery-images">
        <img class="gallery-image" src="<?php echo RESNPO_IMAGE . '/gal1.png' ?>" alt="">
      </div>
      <div class="swiper-slide gallery-images">
        <img class="gallery-image" src="<?php echo RESNPO_IMAGE . '/gal2.png' ?>" alt="">
      </div>
      <div class="swiper-slide gallery-images">
        <img class="gallery-image" src="<?php echo RESNPO_IMAGE . '/gal3.png' ?>" alt="">
      </div>
      <div class="swiper-slide gallery-images">
        <img class="gallery-image" src="<?php echo RESNPO_IMAGE . '/gal1.png' ?>" alt="">
      </div>
    </div>
  </div>
</section>



<!-- SECTION 6: JOINED SCHOOLS -->

<section class="joined-schools">
  <div class="joined-schools-title">
    <h1>参加校</h1>
    <h2>Joined Schools</h2>
  </div>
  <div class="schools">
    <div class="school">
      <img src="<?php echo RESNPO_IMAGE . '/lasalle.png' ?>" alt="">
    </div>
    <div class="school">
      <img src="<?php echo RESNPO_IMAGE . '/cpu.png' ?>" alt="">
    </div>
    <div class="school">
      <img src="<?php echo RESNPO_IMAGE . '/huasiong.png' ?>" alt="">
    </div>
    <div class="school">
      <img src="<?php echo RESNPO_IMAGE . '/sun-yat-sen.png' ?>" alt="">
    </div>
    <div class="school">
      <img src="<?php echo RESNPO_IMAGE . '/paref.png' ?>" alt="">
    </div>
  </div>
</section>

<!-- END SECTION 6 -->


<!-- SECTION: Info Session -->
<section id="info-session" class="info-session flex">
  <div class="info-texts flex">
    <h1 class="info-title sb_title">留学プログラム説明会</h1>
    <p class="info-content sg_description">高校生ボランティア留学の詳しい内容を知りたい方を対象に説明会を行います。 応募に迷っている方はもちろん、申し込みを済まされている方もご参加いただけます。
    </p>
    <div class="info-list">
      <li class="sg_description">※参加には予約が必要です。 </li>
      <li class="sg_description">※定数に達し次第、予約を締め切ります。</li>
    </div>
    <div class="relative btn-container">
      <a href="">
        <button class="main-button relative">
          参加申し込み
        </button>
        <img
          class="icon-button absolute"
          src="<?php echo RESNPO_IMAGE . '/leaves.png' ?>"
          alt="" />
      </a>
    </div>
  </div>
  <div class="info-image">
    <img src="<?php echo RESNPO_IMAGE . '/studyabroad/briefing-schedule.png' ?>" alt="">
  </div>

</section>


<!-- END INFO SECTION -->


<!-- SECTION 7: Contact Opportunity -->

<section class="contact-opp">
  <div class="contact-content">
    <h1>Want to provide many opportunities for
      children for a bright future?</h1>
    <button class="contact-button"><a href="donation.php">スポンサーになる</a></button>
  </div>
</section>

<!-- END SECTION 7 -->

</main>
<?php get_footer() ?>