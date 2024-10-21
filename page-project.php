<?php get_header() ?>



<div id="projectid">

  <?php render_about_section('PROJECTS<br> ', 'Explore our Projects', '/joinus/joinus-landing-fg.png'); ?>

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


  <div class="proj-sgd"><?php render_projects_cards('SDGs', '「SDGs甲子園」の過去実績 をご 紹介します。', 'SDGsの17の目標に沿って学校や地域社会の課題解決を考え、実際の行動に繋げます。SDGsの取り組み事例を学んだり、ゲームを通じてSDGsの理念について考えたりします。学校同士の交流も図りながら、それぞれの課題を掘り下げていきます。', 'section-one/people-img.png', 'sdg') ?></div>

  <div id="proj-sa"><?php render_projects_cards('海外留学', '「海外留学/ツ<br> アー」の過去実績<br>をご紹介します。', '様々な活動を通して日本と東南アジアの学生をつなぐ活動を主として行っています。同年代の仲間たちとの様々な活動や異文化体験を通じて、国内では経験できない多様性に触れ、自国や自分自身の新たな面に気づかされます。', 'section-two/people-img.png', 'study-abroad') ?></div>






  <section class="section-project-sgds relative " style="display: none;">
    <div class="relative project-sgds-container">

      <p class="w-700 p-150 white-clr section-title relative slideright">海外進学</p>

      <div class="overlay-arc relative">

        <img class="absolute arc-img-side" src="<?php echo RESNPO_URI . '/assets/image/project/section-three/people-img.png' ?>" alt="">
        <ul class="flex flex-proj-cont">
          <li>
            <p class="w-700 p-60 sub-head-clr scaleIn">「海外進学サポー<br>ト」の過去実績<br>をご紹介します。</p>
          </li>
          <li>
            <p class="w-700 p-25 white-clr">海外の大学への進学を徹底サポートします。言語の違いや距離を理由に選択肢から外していませんか？その挑戦がなりたい自分への近道かもしれません。</p>
            <div class="relative btn-container">
              <a href="<?php echo get_site_url() . '/studying-abroad' ?>">
                <button class="main-button relative">
                  <p>詳しく見る</p>
                </button>
                <img
                  class="icon-button absolute"
                  src="<?php echo RESNPO_URI . '/assets/image/homepage/side-section-img.png' ?>"
                  alt="" />
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
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