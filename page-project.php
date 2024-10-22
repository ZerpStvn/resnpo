<?php get_header() ?>

<div id="projectid">

  <?php render_about_section('PROJECTS<br> ', 'Explore our Projects', '/joinus/joinus-landing-fg.png'); ?>

  <main class="global-width">
    <div class="marquee-container">
      <div class="marquee">
        <ul class="flex space-between marquee-item-list">
          <?php
          $items = ['実学', '文化交流', '海外支援'];
          $imagePath = RESNPO_URI . '/assets/image/project/leaves.png';
          for ($i = 0; $i < 12; $i++) {
            foreach ($items as $item) {
              echo '<li><img src="' . $imagePath . '" alt=""></li>';
              echo '<li><p>' . $item . '</p></li>';
            }
          }
          ?>
        </ul>
      </div>
    </div>
    <div class="proj-sgd">
      <?php render_projects_cards('SDGs', '「SDGs甲子園」の過去実績 をご 紹介します。', 'SDGsの17の目標に沿って学校や地域社会の課題解決を考え、実際の行動に繋げます。SDGsの取り組み事例を学んだり、ゲームを通じてSDGsの理念について考えたりします。学校同士の交流も図りながら、それぞれの課題を掘り下げていきます。', 'section-one/people-img.png', '/sdg') ?>
    </div>
    <div id="proj-sa">
      <?php render_projects_cards('海外留学', '「海外留学/ツアー」の過去実績をご紹介します。', '様々な活動を通して日本と東南アジアの学生をつなぐ活動を主として行っています。同年代の仲間たちとの様々な活動や異文化体験を通じて、国内では経験できない多様性に触れ、自国や自分自身の新たな面に気づかされます。', 'section-two/people-img.png', '/study-abroad') ?>
    </div>

    <!-- hidden -->
    <div id="abroad_studying" class="no-display">
      <?php render_projects_cards('海外進学', '「海外進学サポー<br>ト」の過去実績<br>をご紹介します。', '海外の大学への進学を徹底サポートします。言語の違いや距離を理由に選択肢から外していませんか？その挑戦がなりたい自分への近道かもしれません。', 'section-three/people-img.png', '/studying-abroad') ?>
    </div>


    <svg version="1.1" xmlns="//www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" style="display:none;">
      <defs>
        <filter id="stroke-text-svg-filter">
          <feMorphology operator="dilate" radius="2"></feMorphology>
          <feComposite operator="xor" in="SourceGraphic" />
        </filter>
      </defs>
    </svg>
  </main>


</div>
<?php get_footer() ?>