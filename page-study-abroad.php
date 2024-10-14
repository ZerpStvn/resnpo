<?php get_header() ?>
<?php landing_sdg_page_template('海外進学', 'vid5', 'vid6', 'vid7', 'vid4') ?>

<!-- SECTION 1: FRONT -->
<?php articlefront('RESのSDGs<br>甲子園とは
', 'SDGsの17の目標に沿って学校や地域社会の課題解決を考え、実際の行動に繋げます。<br>SDGsの取り組み事例を学んだり、ゲームを通じてSDGsの理念について考えたりします。<br>学校同士の交流も図りながら、それぞれの課題を掘り下げていきます。', '/studyabroad/study-front.png') ?>
<!-- END SECTION 1 -->


<!-- SECTION 2: Feature -->
<?php featurefront('study-abroad') ?>
<!-- END SECTION -->


<!-- SECTION: UPCOMING EVENTS -->
<?php get_template_part('template-parts/upcoming-events') ?>
<!-- END SECTION -->


<!-- SECTION: PAST PERFORMANCE -->
<?php get_template_part('template-parts/past-performance') ?>
<!-- END PAST PERFORMANCE -->


<!-- SECTION: IMPRESSIONS -->
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
<!-- END IMPRESSION SECTION -->

<!-- SECTION: PHOTO GALLERY -->
<?php photogallerysection('Study Abroad') ?>
<!-- END PHOTO GALLERY -->

<!-- SECTION 6: JOINED SCHOOLS -->
<?php get_template_part('template-parts/joined-schools') ?>
<!-- END SECTION 6 -->


<!-- SECTION: Info Session -->
<section id="info-session" class="info-session flex">
  <div class="info-texts flex">
    <h1 class="info-title sb_title scaleIn">留学プログラム説明会</h1>
    <p class="info-content sg_description">高校生ボランティア留学の詳しい内容を知りたい方を対象に説明会を行います。応募に迷っている方はもちろん、申し込みを済まされている方もご参加いただけます。
    </p>
    <div class="info-list">
      <li class="sg_description">※参加には予約が必要です。 </li>
      <li class="sg_description">※定数に達し次第、予約を締め切ります。</li>
    </div>
    <div class="relative btn-container">
      <a href="https://docs.google.com/forms/d/e/1FAIpQLScBWhbvkQglfEUcERY7xinQC8e1GCvbG9JyUUowdsf4oOCGQw/viewform">
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
<?php get_template_part('template-parts/contact-opp') ?>
<!-- END SECTION 7 -->

</main>
<?php get_footer() ?>