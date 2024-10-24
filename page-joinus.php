<?php get_header() ?>

<div id="joinusid" class="joinusid">

  <?php render_about_section('JOIN<br> US', 'Be Part of our Journey!', '/project/header/people-img.png');
  ?>


  <div class="marquee-container">
    <div class="marquee">
      <ul class="flex space-between">
        <li><img src="<?php echo RESNPO_URI . '/assets/image/project/leaves.png' ?>" alt=""></li>
        <li>
          <p>実学</p>
        </li>
        <li><img src="<?php echo RESNPO_URI . '/assets/image/project/leaves.png' ?>" alt=""></li>
        <li>
          <p>文化交流</p>
        </li>
        <li><img src="<?php echo RESNPO_URI . '/assets/image/project/leaves.png' ?>" alt=""></li>
        <li>
          <p>海外支援</p>
        </li>
        <li><img src="<?php echo RESNPO_URI . '/assets/image/project/leaves.png' ?>" alt=""></li>
        <li>
          <p>実学</p>
        </li>
        <li><img src="<?php echo RESNPO_URI . '/assets/image/project/leaves.png' ?>" alt=""></li>
        <li>
          <p>文化交流</p>
        </li>
        <li><img src="<?php echo RESNPO_URI . '/assets/image/project/leaves.png' ?>" alt=""></li>
        <li>
          <p>海外支援</p>
        </li>
      </ul>
    </div>
  </div>

  <section class="section-join-donation relative">
    <main class="global-width">
      <li>
        <p class="w-900 p-100 white-clr section2-side-title">寄付</p>
      </li>
      <div class="flex section2-flex-cont">
        <div class="section2-img"><img class="" src="<?php echo RESNPO_URI . '/assets/image/joinus/section-one/main-img.png' ?>" alt=""></div>
        </li>
        <div class="scaleIn section2-card">
          <p class="w-500 p-20 sub-head-clr">DONATE</p>
          <p class="w-700 p-40 head-clr donate-title">あなたの寄付が子どもたちの世界を拡げ輝かせます</p>
          <p class="w-500 p-20 head-clr donate-contents">
            刻一刻と変化する今の時代。子どもたちは、私たちがそうだった頃とは異なる環境に身を置き多種多様なスキルや能力を身につけることを求められています。<br>
            子どもたちに一つでも多くの機会を届けるため皆様の寄付を私たちの活動に利用させていただきます
          </p>
          <div>
            <div class="relative btn-container">
              <a href="">
                <button class="main-button relative">
                  <p>詳しく見る</p><img class="icon-button absolute" src="<?php echo RESNPO_URI . '/assets/image/homepage/side-section-img.png' ?>" alt="" />
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </main>
  </section>


  <?php render_join_section3('BENEFITS', 'ご寄付いただいた方には', '団体よりお礼のお手紙を郵送いたします', '毎年4月末ごろ、前年度の活動報告書をお送りいたします', '支援者ページにお名前を一定期間掲載させていただきます') ?>


  <section class="section-join-membership relative">
    <main class="global-width">
      <li>
        <p class="w-900 p-100 white-clr section2-side-title">メンバーシップ</p>
      </li>
      <div class="flex section2-flex-cont">
        <div class="section2-img">
          <img class="" src="<?php echo RESNPO_URI . '/assets/image/joinus/section-three/mori.png' ?>" alt="">
        </div>
        <div class="scaleIn section2-card">
          <p class="w-500 p-20 sub-head-clr">MEMBERSHIP</p>
          <p class="w-700 p-40 head-clr donate-title">あなたの寄付が子どもたちの世界を拡げ輝かせます</p>
          <p class="w-500 p-20 head-clr donate-contents">
            刻一刻と変化する今の時代。子どもたちは、私たちがそうだった頃とは異なる環境に身を置き多種多様なスキルや能力を身につけることを求められています。<br>
            子どもたちに一つでも多くの機会を届けるため皆様の寄付を私たちの活動に利用させていただきます
          </p>
          <div>
            <div class="relative btn-container">
              <a href="">
                <button class="main-button relative">
                  <p>詳しく見る</p><img class="icon-button absolute" src="<?php echo RESNPO_URI . '/assets/image/homepage/side-section-img.png' ?>" alt="" />
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </main>
  </section>

  <section class="section_3_don">
    <div class="title-top relative"> <!-- data-aos="flip-left" -->
      <p class="w-500 p-250 text-center relative ">PROCESS</p>
      <p class="w-900 p-100 light-blue absolute scaleIn">ご寄付いただいた方には</p>
    </div>

    <div class="fieldset-container slideright">
      <ul class="flex">
        <li>
          <fieldset>
            <legend>
              <p class="w-900 p-50 head-clr">01</p>
            </legend>
            <p class="w-500 p-20 head-clr fieldset-text">団体よりお礼のお手紙を郵送いたします</p>
          </fieldset>
        </li>
        <li>
          <fieldset>
            <legend>
              <p class="w-900 p-50 head-clr">02</p>
            </legend>
            <p class="w-500 p-20 head-clr fieldset-text">毎年4月末ごろ、前年度の活動報告書をお送りいたします</p>
          </fieldset>
        </li>
        <li>
          <fieldset>
            <legend>
              <p class="w-900 p-50 head-clr">03</p>
            </legend>
            <p class="w-500 p-20 head-clr fieldset-text">支援者ページにお名前を一定期間掲載させていただきます</p>
          </fieldset>
        </li>
      </ul>

    </div>
  </section>

  <?php get_template_part('template-parts/inquire') ?>

  </section>
  <svg version="1.1" xmlns="//www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" style="display:none;">
    <defs>
      <filter id="stroke-text-svg-filter">
        <feMorphology operator="dilate" radius="2"></feMorphology>
        <feComposite operator="xor" in="SourceGraphic" />
      </filter>
    </defs>
  </svg>
</div>
<?php get_footer() ?>