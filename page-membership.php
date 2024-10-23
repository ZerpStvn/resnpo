<?php get_header() ?>
<div id="membershipid">
  <!-- membership page -->
  <?php render_join_landing('MEMBERSHIP', 'メンバーシップ') ?>
  <?php render_join_section1('あなたの寄付が子どもたちの世界を拡げ輝かせます', '刻一刻と変化する今の時代。子どもたちは、私たちがそうだった頃とは異なる環境に身を置き多種多様なスキルや能力を身につけることを求められています。<br>
          子どもたちに一つでも多くの機会を届けるため皆様の寄付を私たちの活動に利用させていただきます', 'MEMBERSHIP') ?>

  <section class="section_2">
    <div class="flex-container flex">
      <div class="section-2-img">
        <img class="slideleft " src="<?php echo RESNPO_URI . '/assets/image/membership/main-img.png' ?>" alt="">
      </div>
      <div class="section-2-grid">
        <div class="grid benefits-grid slideright">
          <div class="benefits-container">
            <img class="benefits-icon" src="<?php echo RESNPO_IMAGE . '/svg/book.svg' ?>" alt="">
            <p class="w-700 p-20 head-clr benefits-title">Personal Growth & Learning</p>
            <p class="w-400 p-12 head-clr">
              Gain valuable skills such as communication, leadership, and problem-solving through hands-on experiences.
            </p>
          </div>

          <div class="benefits-container">
            <img class="benefits-icon" src="<?php echo RESNPO_IMAGE . '/svg/hand.svg' ?>" alt="">
            <p class="w-700 p-20 head-clr benefits-title">Contribution to Meaningful Causes</p>
            <p class="w-400 p-12 head-clr">
              Experience the satisfaction of making a positive difference in the lives of others and supporting causes you’re passionate about.
            </p>
          </div>

          <div class="benefits-container">
            <img class="benefits-icon" src="<?php echo RESNPO_IMAGE . '/svg/networking.svg' ?>" alt="">
            <p class="w-700 p-20 head-clr benefits-title">Networking Opportunities</p>
            <p class="w-400 p-12 head-clr">
              Build relationships with people who share similar values and interests, leading to potential collaborations or friendships.
            </p>
          </div>

          <div class="benefits-container">
            <img class="benefits-icon" src="<?php echo RESNPO_IMAGE . '/svg/airplane.svg' ?>" alt="">
            <p class="w-700 p-20 head-clr benefits-title">Travel and Exploration</p>
            <p class="w-400 p-12 head-clr">
              Enjoy immersive experiences that go beyond typical tourist activities, such as participating in local traditions or volunteer work.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php render_join_section3('PROCESS', 'メンバーになりたい方へ', '団体よりお礼のお手紙を郵送いたします', '毎年4月末ごろ、前年度の活動報告書をお送りいたします', '支援者ページにお名前を一定期間掲載させていただきます') ?>
</div>


<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none;">
  <defs>
    <filter id="color-change-filter">
      <feColorMatrix type="matrix" values="0 0 0 1 1  0 0 0 0 0  0 0 0 0 0  0 0 0 1 0" />
    </filter>
  </defs>
</svg>
<?php get_footer() ?>