<?php get_header() ?>
<div id="aboutid" class="aboutid">

  <?php render_about_section('ABOUT <br>US', 'What is RES?', '/about/landing-fg5.png'); ?>


  <div class="vma-title scaleIn">
    <h1>ひとりでも多くの子どもたちが、<br>未来の可能性を芸術で表現できる社会を目指して</h1>
  </div>

  <?php
  $visionContent = <<<HTML
<div class="section-text">
    <h2 class="section-title scaleIn">実現したい社会</h2>
    <p>
        人の役に立ちたい！人に必要とされたい！そんな想いをきっかけに、ご縁があって2003年にこのNPO法人を立ち上げました。そして、フィリピンへ幼稚園の寄付、ボランティア活動などを行っていく中で湧いてきた新たな想い。

        <br><br>

        それは、「<span class="white-clr">このままではまずい…</span>」。

        <br>

        海外の若い人たちは、英語をコミュニケーションのツールとして使いこなし、国境や人種の壁を越えて活躍しています。その圧倒的な熱量と活発に動く姿をみていると、このままでは<span class="white-clr">日本は世界から取り残されてしまう</span>のではないか？そんな危機感を強く感じました

        <br><br>

        そんな時に現地で出会ったのがJICA（ジャイカ：青年海外協力隊）のメンバーとして活躍していた人たち、また、熱い想いを持って海外で活躍している人たち。

        <br><br>

        彼ら彼女らと交流することで、「日本人が活躍している社会」への希望を感じることができました。

        <br><br>
        今、私たちだけでできることには限りがあるかも知れない。だけど、無限の可能性を持つ子どもたちに、この先待ち受けるグローバル社会について一つでも多く伝えたい。また、その時代を生き抜く力を身につける、養うためのサポートをしたい。そう強く思っています。
    </p>
</div>
HTML;

  $missionContent = <<<HTML
<div class="section-text">
    <h2 class="section-title scaleIn">私たちの使命</h2>
    <p>
        あたり前のことをあたり前だからと思考停止するのではなく、なぜなんだろう？と考え、自分なりの答えを持つ。
        <br><br>
        間違っていてもいい
        <br><br>
        間違いに気づけば考えを改めればいい。そして、考えて終わりではなく、行動する。
        <br><br>
        私たちは3つのプロジェクトを通して、子供たちに自ら考えて行動することの大切さを伝えています。
    </p>
</div>
HTML;

  $actionContent = <<<HTML
<div class="section-text">
    <h2 class="section-title scaleIn">私たちの行動</h2>
    <p>
        あたり前のことをあたり前だからと思考停止するのではなく、なぜなんだろう？と考え、自分なりの答えを持つ。
        <br><br>
        間違っていてもいい
        <br><br>
        間違いに気づけば考えを改めればいい。そして、考えて終わりではなく、行動する。
        <br><br>
        私たちは3つのプロジェクトを通して、子供たちに自ら考えて行動することの大切さを伝えています。
    </p>
</div>
HTML;
  ?>

  <section id="vision-section" class="diagonal-section global-width">

    <div class="section-content head-clr flex-rr head-clr">
      <div class="rotated-text outline">VISION</div>

      <div class="image-placeholder slideleft">
        <img src="<?php echo RESNPO_IMAGE . '/about/vision1.png' ?>" alt="">
      </div>
      <div class="desktop-content">
        <?php echo $visionContent; ?>
      </div>
    </div>
    <!-- New div for mobile layout -->
    <div class="mobile-content">
      <div class="section-text-wrapper">
        <?php echo $visionContent; ?>
      </div>
    </div>
  </section>


  <section id="mission-section" class="diagonal-section global-width">
    <div class="section-content head-clr flex-row">
      <div class="rotated-text outline">MISSION</div>

      <div class="image-placeholder ">
        <img class="slideright" src="<?php echo RESNPO_IMAGE . '/about/mission1.png' ?>" alt="">
      </div>
      <div class="desktop-content">
        <?php echo $missionContent; ?>
      </div>
    </div>
    <!-- New div for mobile layout -->
    <div class="mobile-content">
      <div class="section-text-wrapper">
        <?php echo $missionContent; ?>
      </div>
    </div>
  </section>

  <section id="action-section" class="diagonal-section global-width">
    <div class="section-content head-clr head-clr flex-rr">
      <div class="rotated-text outline">ACTION</div>

      <div class="image-placeholder slideleft">
        <img src="<?php echo RESNPO_IMAGE . '/about/action1.png' ?>" alt="">
      </div>
      <div class="desktop-content">
        <?php echo $actionContent; ?>
      </div>
    </div>
    <!-- New div for mobile layout -->
    <div class="mobile-content">
      <div class="section-text-wrapper">
        <?php echo $actionContent; ?>
      </div>
    </div>
  </section>

  <section id="realxlink" class="">
    <div class="rxl-container flex flex-column gap_20 global-width">
      <div class="rxl-ur">
        <h1 class="qt flex">“</h1>
        <div class="content flex flex-row">
          <p class="scaleIn">
            NPO法人 RESは、ひとりでも多くの子どもたちが、
            未来の国際社会で活躍できる社会を目指し、
            自ら考え行動できる人材を育成する活動をしています。
          </p>
          <div class="message-cont slideright">
            <div class="relative">
              <img src="<?php echo RESNPO_IMAGE . '/about/message2.png' ?>" alt="">
            </div>
            <!-- <h1 class="outline">MESSAGE</h1> -->
          </div>
        </div>
      </div>
      <div class="rxl-lr flex">
        <div class="rxl-lr-img"><img src="<?php echo RESNPO_IMAGE . '/about/mori.jpeg' ?>" alt=""></div>
        <div class="rxl-lr-txt">
          <h1 class="sb_title text-center white-clr slideup">新時代の学びのカタチ<br>「REAL✕LINK」</h1>
          <p class="white-clr">
            新しい時代「令和」が始まりました。 新しい元号のもと、日本にとどまらず世界中から争いごとや飢えや難病が無くなっていくことを心から願っています。
            <br><br>
            さて、いつの時代においても最も重要な事業のひとつに位置づけられるのが「教育」です。 先進国も発展途上国も、大きな国も小さな地域も、都会でも田舎でも、「教育」はとても大切です。
            しかし現状では、将来を担う子供たちに人間形成の土台となる基礎知識や手法を伝え、 さらに創造性や思考力を育むのは「公的機関」だけでは不充分だと思います。
            <br><br>
            私たちは、身近な地域の子供たちに何かの手助けができないか、「民間」の利を活かした教育ができないかと考えました。
            <br><br>
            ますますグローバル化するこのREALな世界で生きる子供たちが、年齢や地域を越えてLINKし、いろんな人と繋がることで、 お互いを知り、「学ぶ心」や「人を想いやる心」を醸成し、共に考え共に成長する。 そんな新しい時代の学びの場（カタチ）をみんなで創って行きたいと思っています。 そして、その事を通して、一人でも多くの「自ら考え行動できる人」が育ってくれれば幸いです。
          </p>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/adviser') ?>

  <section id="org_overview" class="org_overview">
    <p class="p-30 w-700 head-clr org-title">団体概要</p>
    <p class="p-20 sub-head-clr">Outline</p>
    <div class="list-contact">
      <div class="flex gap-15 org-overview-items">
        <p class="p-16 sub-head-clr">団体名</p>
        <p class="p-16 head-clr">NPO法人 RES(旧名：地域教育サポートの会)</p>
      </div>
      <div class="flex gap-15 org-overview-items">
        <p class="p-16 sub-head-clr">代表者</p>
        <p class="p-16 head-clr">森章</p>
      </div>
      <div class="flex gap-15 org-overview-items">
        <p class="p-16 sub-head-clr">設立年</p>
        <p class="p-16 head-clr">2003年02月18日</p>
      </div>
      <div class="flex gap-15 org-overview-items">
        <p class="p-16 sub-head-clr">所在地</p>
        <p class="p-16 head-clr">〒791-0243 愛媛県松山市平井町1426番地2</p>
      </div>
      <div class="flex gap-15 org-overview-items">
        <p class="p-16 sub-head-clr">連絡先</p>
        <p class="p-16 head-clr">TEL:089-970-9210　FAX:089-970-9210</p>
      </div>
      <div class="flex gap-15 org-overview-items">
        <p class="p-16 sub-head-clr">法人番号</p>
        <p class="p-16 head-clr">1500005001859 （※内閣府Webサイトが開きます）</p>
      </div>
      <div class="flex gap-15 org-overview-items">
        <p class="p-16 sub-head-clr">目的</p>
        <p class="p-16 head-clr">自ら考え、行動できる人材を育てる</p>
      </div>
    </div>

    <p class="p-30 w-700 head-clr">前年度事業報告</p>
    <p class="sg_description">Reports</p>

    <div class="relative btn-container">
      <a href="https://www.npo-homepage.go.jp/npoportal/document/038000078/hokoku/202170/2021%E5%B9%B4%E5%BA%A6%E4%BA%8B%E6%A5%AD%E5%A0%B1%E5%91%8A%E6%9B%B8%E7%AD%89.pdf" target="_blank">
        <button class="main-button relative">
          詳しく見る
        </button>
        <img
          class="icon-button absolute"
          src="<?php echo RESNPO_IMAGE . '/leaves.png' ?>"
          alt="" />
      </a>
    </div>

  </section>

</div>


<svg version="1.1" xmlns="//www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" style="display:none;">
  <defs>
    <filter id="stroke-text-svg-filter">
      <feMorphology operator="dilate" radius="2"></feMorphology>
      <feComposite operator="xor" in="SourceGraphic" />
    </filter>
  </defs>
</svg>

<svg version="1.1" xmlns="//www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" style="display:none;">
  <defs>
    <filter id="stroke-text-svg-filter">
      <feMorphology operator="dilate" radius="4"></feMorphology>
      <feComposite operator="xor" in="SourceGraphic" />
    </filter>
  </defs>
</svg>
<?php get_footer() ?>