<?php get_header('studying-abroad') ?>

<?php articlefront('RESの海外進学
サポートとは', '日本の高校で学ぶあなたが世界各地にあるRESの提携大学で学べるようにサポートします。 夢に近づける学校・学部・学科のアドバイス、英語力向上、入学方法や手続き書類、現地の生活や住居まで現地教授監修のもと最適なプランをご提案します。', '/studyingabroad/studying-front.jpeg') ?>


<div class="wave-container">
  <!-- Placeholder SDG -->
  <?php featurefront('sdg') ?>
  <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 250" version="1.1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
    <defs>
      <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
        <stop stop-color="rgba(255, 255, 255, 1)" offset="0%"></stop>
        <stop stop-color="rgba(255, 255, 255, 1)" offset="100%"></stop>
      </linearGradient>
    </defs>
    <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,50L21.8,66.7C43.6,83,87,117,131,120.8C174.5,125,218,100,262,100C305.5,100,349,125,393,137.5C436.4,150,480,150,524,129.2C567.3,108,611,67,655,79.2C698.2,92,742,158,785,175C829.1,192,873,158,916,120.8C960,83,1004,42,1047,29.2C1090.9,17,1135,33,1178,58.3C1221.8,83,1265,117,1309,125C1352.7,133,1396,117,1440,95.8C1483.6,75,1527,50,1571,50C1614.5,50,1658,75,1702,100C1745.5,125,1789,150,1833,133.3C1876.4,117,1920,58,1964,29.2C2007.3,0,2051,0,2095,33.3C2138.2,67,2182,133,2225,137.5C2269.1,142,2313,83,2356,83.3C2400,83,2444,142,2487,175C2530.9,208,2575,217,2618,220.8C2661.8,225,2705,225,2749,208.3C2792.7,192,2836,158,2880,145.8C2923.6,133,2967,142,3011,145.8C3054.5,150,3098,150,3120,150L3141.8,150L3141.8,250L3120,250C3098.2,250,3055,250,3011,250C2967.3,250,2924,250,2880,250C2836.4,250,2793,250,2749,250C2705.5,250,2662,250,2618,250C2574.5,250,2531,250,2487,250C2443.6,250,2400,250,2356,250C2312.7,250,2269,250,2225,250C2181.8,250,2138,250,2095,250C2050.9,250,2007,250,1964,250C1920,250,1876,250,1833,250C1789.1,250,1745,250,1702,250C1658.2,250,1615,250,1571,250C1527.3,250,1484,250,1440,250C1396.4,250,1353,250,1309,250C1265.5,250,1222,250,1178,250C1134.5,250,1091,250,1047,250C1003.6,250,960,250,916,250C872.7,250,829,250,785,250C741.8,250,698,250,655,250C610.9,250,567,250,524,250C480,250,436,250,393,250C349.1,250,305,250,262,250C218.2,250,175,250,131,250C87.3,250,44,250,22,250L0,250Z"></path>
  </svg>
</div>

<!-- Partner Schools -->
<section id="partner_schools" class="partner-schools flex">

  <div class="ps-container flex">
    <div class="ps-title flex">
      <h1 class="sg_description sub-head-clr">提携大学</h1>
      <h2 class="sd_title">Partner Schools</h2>
    </div>

    <div class="ps-images-wrapper flex">
      <img class="ps-image" src="<?php echo RESNPO_IMAGE . '/studyingabroad/cumberland.png' ?>" alt="">
      <img class="ps-image" src="<?php echo RESNPO_IMAGE . '/studyingabroad/la-salle.png' ?>" alt="">
      <img class="ps-image" src="<?php echo RESNPO_IMAGE . '/studyingabroad/golden-gate.png' ?>" alt="">
    </div>
  </div>
</section>
<!-- END SECTION PARTNER SCHOOLS -->

<!-- Section: FLOW -->
<section id="flow_studying_abroad" class="flow-studying-abroad">
  <h1 class="fsa-title sb_title head-clr text-center">海外進学の流れ</h1>
  <div class="fsa-slider-wrapper flex">
    <div class="fsa-slide-container flex">
      <?php fsaSlide('1', '登録・申込・申込金振込', '専用フォームからお申込みください。 申込み完了後、指定期日までに申込金（4万円）のお振込みをお願いいたします。 ※申込金は活動費用の一部として取扱います。', 'active') ?>
      <?php fsaSlide('2', 'パスポート取得', '専用フォームからお申込みください。 申込み完了後、指定期日までに申込金（4万円）のお振込みをお願いいたします。 ※申込金は活動費用の一部として取扱います。', '') ?>
      <?php fsaSlide('3', '参加者説明会', '専用フォームからお申込みください。 申込み完了後、指定期日までに申込金（4万円）のお振込みをお願いいたします。 ※申込金は活動費用の一部として取扱います。', '') ?>
      <?php fsaSlide('4', '活動費・渡航費の振込', '専用フォームからお申込みください。 申込み完了後、指定期日までに申込金（4万円）のお振込みをお願いいたします。 ※申込金は活動費用の一部として取扱います。', '') ?>
      <?php fsaSlide('5', '出発！', '専用フォームからお申込みください。 申込み完了後、指定期日までに申込金（4万円）のお振込みをお願いいたします。 ※申込金は活動費用の一部として取扱います。', '') ?>
    </div>
  </div>
  <div id="flow-content" class="flow-content"></div>

</section>



<!-- SECTION: ADVSIOR-->
<section id="advisor_section" class="advisor-section white-blue">
  <div class="as-container flex flex-row">
    <div class="as-img-col flex-column flex">
      <img class="as-prof-img" src="<?php echo  RESNPO_IMAGE . '/studyingabroad/maria.png' ?>" alt="">
      <div class="as-cred-wrapper">
        <div class="as-carousel flex">
          <div class="as-cred flex flex-row head-clr">
            <img src="<?php echo RESNPO_IMAGE . '/studyingabroad/ucam.png' ?>" alt="UCAM logo">
            <div class="as-cred-texts">
              <h4 class="detail-title">ムルシア・カトリック大学（スペイン）</h4>
              <h5 class="as-cred-details">副学長-教務担当</h5>
            </div>
          </div>
          <div class="as-cred flex flex-row head-clr">
            <img src="<?php echo RESNPO_IMAGE . '/studyingabroad/liverpool.png' ?>" alt="Liverpool University logo">
            <div class="as-cred-texts">
              <h4 class="detail-title">ムルシア・カトリック大学（スペイン）</h4>
              <h5 class="as-cred-details">副学長-教務担当</h5>
            </div>
          </div>
          <div class="as-cred flex flex-row head-clr">
            <img src="<?php echo RESNPO_IMAGE . '/studyingabroad/iba.png' ?>" alt="IBA logo">
            <div class="as-cred-texts">
              <h4 class="detail-title">博士号（PhD）</h4>
              <h5 class="as-cred-details">国際経営学・経済学アカデミー　経営学</h5>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="as-text-col flex-column flex">
      <p class="sg_description head-clr">マリア・ジェイド・カタラン・オプレンシア教授は、イギリスのリバプール大学とフィリピンの国際ビジネスアカデミーの２校で経営学の博士号を取得し、30年以上の学術経験があります。 ジェイド教授の専門知識は、出版物、学会発表、およびハーバード大学のケースメソッド教育セミナーなどの名門プログラムへの参加によって示されています。 また、フィリピン大統領賞を含む多くの賞を受賞しており、世界中で様々な賞にノミネートされています。</p>
      <div class="as-details flex-row">
        <?php
        function generateDetails($degree, $university, $subjects, $thesis)
        {
          ob_start();
        ?>
          <details>
            <summary class='summary-title'>
              <h3 class='detail-title text-center'><?php echo $degree; ?></h3>
              <h3 class='detail-title text-center'><?php echo $university; ?></h3>
            </summary>
            <ul class='detail-list'>
              <li class="head-clr "><?php echo $subjects; ?></li>
              <li class="head-clr">論文題目："<?php echo $thesis; ?>"</li>
            </ul>
          </details>


        <?php
          return ob_get_clean();
        }

        function generateHonorsDetails($title, $honors)
        {
          ob_start();
        ?>
          <details>
            <summary class='summary-title'>
              <h3 class='detail-title'></h3>
              <h3 class='detail-title'><?php echo $title; ?></h3>
            </summary>
            <ul class='detail-list head-clr'>
              <?php foreach ($honors as $honor) : ?>
                <li><?php echo $honor; ?></li>
              <?php endforeach; ?>
            </ul>
          </details>
        <?php
          return ob_get_clean();
        }

        ?>
        <div class="detail-col-1">
          <?php
          echo generateDetails('博士号（PhD）', 'リバプール大学', '経営学/人事管理/情報学', 'ソフトウェア・アズ・ア・サービス（SAAS）モデル：候補者関係管理とキャリアパス計画への影響');
          echo generateDetails('博士号（PhD）', 'リバプール大学', '経営学/人事管理/情報学', 'ソフトウェア・アズ・ア・サービス（SAAS）モデル：候補者関係管理とキャリアパス計画への影響');
          echo generateDetails('経営学修士', 'フィリピン大学', '経営学/人事管理/情報学', 'ソフトウェア・アズ・ア・サービス（SAAS）モデル：候補者関係管理とキャリアパス計画への影響');
          echo generateDetails('経営学修士', 'フィリピン大学', '経営学/人事管理/情報学', 'ソフトウェア・アズ・ア・サービス（SAAS）モデル：候補者関係管理とキャリアパス計画への影響');
          ?>
        </div>
        <div class="detail-col-2">
          <?php
          $honors = [
            '教育における傑出したリーダーシップ、フィリピン系アメリカ人教育者連合　教育　2022',
            'ビジネス学部のベストリサーチャー賞（UAE) 研究　2020',
            '世界の教育者TOP50（オックスフォードジャーナル） 教育賞　2016',
            'Presidential Lingkod Bayan Award（フィリピン大統領府） 大統領賞　2001',
            'フィリピン警察庁 (PNP) 「PNPへのカリキュラム提供の拡充に対する表彰状」　2001'
          ];
          echo generateHonorsDetails('栄誉/ 受賞', $honors);
          echo generateHonorsDetails('リソーススピーカー/ 会議参加  ', $honors);
          ?>
        </div>
      </div>
    </div>
</section>
<!-- END ADVISER SECTION -->


<!-- SECTION: PG -->
<?php photogallerysection('Study Abroad') ?>
<!-- END SECTION PG -->

<!-- SECTION: Recruiting PArtner -->

<section id="recruiting_partner" class="recruiting_partner">
  <div class="rp-container flex flex-row">
    <div class="rp-col-1">
      <div class="image-container">
        <img src="<?php echo RESNPO_IMAGE . '/studyingabroad/bg-recruit.png' ?>" alt=" ">
        <h1 class="p-100 outline">提携高校募集</h1>
      </div>
    </div>
    <div class="rp-col-2 flex flex-column">
      <div class="flex flex-row rp-card-wrapper head-clr">
        <div class="rp-card flex flex-column jc-center">
          <img src="<?php echo RESNPO_IMAGE . '/studyingabroad/recruit-1.png' ?>" alt="">
          <h3 class="text-center">Inter-School Collaborative Project</h3>
        </div>
        <div class="rp-card flex flex-column jc-center">
          <img src="<?php echo RESNPO_IMAGE . '/studyingabroad/recruit-2.png' ?>" alt="">
          <h3 class="text-center">Cross-School Teamwork Program</h3>
        </div>
        <div class="rp-card flex flex-column jc-centers">
          <img src="<?php echo RESNPO_IMAGE . '/studyingabroad/recruit-3.png' ?>" alt="">
          <h3 class="text-center">Multi-School Joint Project</h3>
        </div>
      </div>
      <div class="relative btn-container">
        <a href="">
          <button class="main-button relative">
            詳しく見る </button>
          <img
            class="icon-button absolute"
            src="<?php echo RESNPO_IMAGE . '/leaves.png' ?>"
            alt="" />
        </a>
      </div>
    </div>

  </div>
</section>


<!-- SECTION: INQUIRE NOW -->
<section id="inquire_section" class="white-blue">
  <div class="inq-titles text-centered">

    <h1 class="inq-title">INQUIRE</h1>
    <h1 class="outline inq-title">INQUIRE</h1>
    <h1 class="outline inq-title">INQUIRE</h1>
    <h1 class="outline inq-title">INQUIRE</h1>
    <h1 class="outline inq-title">INQUIRE</h1>
    <h1 class="outline inq-title">INQUIRE</h1>
    <h1 class="outline inq-title">INQUIRE</h1>
  </div>

  <div class="inq-title-overlay flex flex-column scaleIn">
    <h1 class="p-60 head-clr">お問い合わせはコチラから！</h1>
    <h4 class="p-30 head-clr ">サービス利用に関するご相談やご質問など、 <br>お電話もしくはフォームよりお気軽にご連絡ください。
    </h4>
    <div class="relative btn-container">
      <a href="">
        <button class="main-button relative">
          INQUIRE NOW </button>
        <img
          class="icon-button absolute"
          src="<?php echo RESNPO_IMAGE . '/leaves.png' ?>"
          alt="" />
      </a>
    </div>
  </div>


  <svg version="1.1" xmlns="//www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" style="display:none;">
    <defs>
      <filter id="stroke-text-svg-filter">
        <feMorphology operator="dilate" radius="4"></feMorphology>
        <feComposite operator="xor" in="SourceGraphic" />
      </filter>
    </defs>
  </svg>
</section>

</main>
<?php get_footer() ?>