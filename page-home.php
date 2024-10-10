<?php get_header('home') ?>
<div id="homeid">
  <section class="section_1">
    <div class="header-container">
      <img src="<?php echo RESNPO_URI . '/assets/image/homepage/header/top_nav_txt.png' ?>" alt="">
      <hr>
      <div>
        <ul class="flex">
          <li>
            <div class="header-first relative">

              <div class="slick-slider-container">
                <div class="slider-img-container slider">
                  <!-- <div class="flex slider"> -->
                  <img class="header-people relative"
                    src="<?php echo RESNPO_URI . '/assets/image/homepage/header/people-2.png' ?>" alt="">
                  <!-- <img class="header-people relative" src="<?php echo RESNPO_URI . '/assets/image/homepage/header/people-2.png' ?>" alt="">
                    <img class="header-people relative" src="<?php echo RESNPO_URI . '/assets/image/homepage/header/people-3.png' ?>" alt=""> -->
                  <!-- </div> -->
                </div>
              </div>

              <img class="header-border absolute"
                src="<?php echo RESNPO_URI . '/assets/image/homepage/header/img-border.png' ?>" alt="">
              <p class="p-35 w-700 white-clr absolute realxlink-txt">「REAL✕LINK」</p>
              <p class="p-25 w-700 absolute border-text">世界で活躍する</p>
              <ul class="flex absolute home-side-sm">
                <li>
                  <p class="p-16 w-700 white-clr">CONTACT</p>
                </li>
                <li><img src="<?php echo RESNPO_URI . '/assets/image/homepage/header/sm-line-icon.png' ?>" alt=""></li>
                <li><img src="<?php echo RESNPO_URI . '/assets/image/homepage/header/sm-fb-icon.png' ?>" alt=""></li>
                <li><img src="<?php echo RESNPO_URI . '/assets/image/homepage/header/sm-yt-icon.png' ?>" alt=""></li>
              </ul>
            </div>

          </li>
          <li>
            <div class="flex relative header-second">
              <img class="header-green-icon"
                src="<?php echo RESNPO_URI . '/assets/image/homepage/header/header-green-icon.png' ?>" alt="">
              <img class="header-res-img"
                src="<?php echo RESNPO_URI . '/assets/image/homepage/header/res-img-txt.png' ?>" alt="">
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="section_2 relative">
    <ul class="flex main-ul">
      <li>
        <div class="img-container">
          <img src="<?php echo RESNPO_URI . '/assets/image/homepage/section-third/main-img.png' ?>" alt="" />
        </div>
      </li>
      <li>
        <p class="p-16 sub-head-clr">Activities</p>
        <p class="p-40 w-700 mb-3 head-clr">SDGs甲子園</p>
        <p class="p-16 head-clr">
          地域社会のSDGs課題に焦点を当て、その解決に向けて研究や活動を行う高校生たちが<br />その取り組みの経過や成果をプレゼンテーション等で競います。
        </p>
      </li>
    </ul>

    <ul class="flex sub-ul absolute text-center">
      <li>
        <img src="<?php echo RESNPO_URI . '/assets/image/homepage/section-third/sub-img-1.png' ?>" alt="" />
        <div class="sub-ul-details">
          <p class="p-12">
            同年代の仲間たちとの様々な活動や異文化体験を通じて、国内では経験できない多様性に触れ、自国や自分自身の新たな面に気づかされます。
          </p>
          <p class="p-18 mt-15 w-700">海外留学/ツアー</p>
        </div>
      </li>
      <li>
        <img src="<?php echo RESNPO_URI . '/assets/image/homepage/section-third/sub-img-2.png' ?>" alt="" />
        <div class="sub-ul-details">
          <p class="p-12">
            海外の大学への進学を徹底サポートします。言語の違いや距離を理由に選択肢から外していませんか？その挑戦がなりたい自分への近道かもしれません。
          </p>
          <p class="p-18 mt-15 w-700">海外進学サポート</p>
        </div>
      </li>
    </ul>

    <div class="side-text absolute">
      <p class="inline-txt p-30 w-600 head-clr">ACTIVITIES</p>
      <img src="<?php echo RESNPO_URI . '/assets/image/homepage/side-section-img.png' ?>" alt="" />
    </div>

    <div class="absolute sect-head">
      <p class="w-900 act-txt-section section-head-clr">ACTIVITIES</p>
    </div>
  </section>

  <!-- SECTION: UPCOMING EVENTS -->
  <?php get_template_part('template-parts/upcoming-events') ?>
  <!-- END SECTION -->

  <!-- SECTION: RECENT NEWS -->
  <section class="section_3 relative">
    <ul class="flex ul-news">
      <li>
        <div class="img-container-news">
          <img src="<?php echo RESNPO_URI . '/assets/image/homepage/section-fourth/main-img.png' ?>" alt="" />
        </div>
        <div class="news-detils">
          <p class="p-16 sub-head-clr">August 8, 2024</p>
          <p class="p-50 head-clr">
            【えひめSDGs甲子園2024】本選出場チームが決定しました。
          </p>
          <p class="p-16 details">
            愛媛県内の高校から29のチームがエントリーした「えひめSDGs甲子園2024」の予選審査が終了し、本選出場チームが発表されました。・・・
          </p>

          <div class="relative btn-container" id="btn-news">
            <a href="">
              <button class="main-button-logo relative">支援者様</button>
              <img class="home-icon-button absolute"
                src="<?php echo RESNPO_URI . '/assets/image/homepage/side-section-img.png' ?>" alt="" />
            </a>
          </div>
        </div>
      </li>
      <li>
        <p class="p-20 mb-5 recents">RECENTS</p>
        <ul class="ul-recents">
          <li>
            <div class="flex with-img">
              <div class="img-container-news-recent">
                <img src="<?php echo RESNPO_URI . '/assets/image/homepage/section-fourth/sub-img-1.png' ?>" alt="" />
              </div>
              <div>
                <p class="p-14 head-clr">
                  小中学生が過去最少、大学生は過去最多…学校基本調査
                </p>
                <p class="p-14 read-more">
                  READ MORE
                  <img src="<?php echo RESNPO_URI . '/assets/images/homepage/section-fourth/Vector.png' ?>" alt="" />
                </p>
                <p class="p-12 text-clr">2024/09/02</p>
              </div>
            </div>
          </li>
          <li>
            <div class="flex with-img">
              <div class="img-container-news-recent">
                <img src="<?php echo RESNPO_URI . '/assets/image/homepage/section-fourth/sub-img-2.png' ?>" alt="" />
              </div>
              <div>
                <p class="p-14 head-clr">
                  優勝は「くまもるず」（上浮穴高等学校）
                </p>
                <p class="p-14 read-more">
                  READ MORE
                  <img src="<?php echo RESNPO_URI . '/assets/images/homepage/section-fourth/Vector.png' ?>" alt="" />
                </p>
                <p class="p-12 text-clr">2024/08/27</p>
              </div>
            </div>
          </li>
          <li>
            <div class="flex with-img">
              <div class="img-container-news-recent">
                <img src="<?php echo RESNPO_URI . '/assets/image/homepage/section-fourth/sub-img-3.png' ?>" alt="" />
              </div>
              <div>
                <p class="p-14 head-clr">
                  都道府県別・学習時間ランキング、都会が多い傾向
                </p>
                <p class="p-14 read-more">
                  READ MORE
                  <img src="<?php echo RESNPO_URI . 'assets/images/homepage/section-fourth/Vector.png' ?>" alt="" />
                </p>
                <p class="p-12 text-clr">2024/08/19</p>
              </div>
            </div>
          </li>
        </ul>
      </li>
    </ul>

    <div class="side-text absolute">
      <p class="inline-txt w-600 p-30 head-clr">NEWS</p>
      <img src="<?php echo RESNPO_URI . '/assets/image/homepage/side-section-img.png' ?>" alt="" />
    </div>
  </section>

  <!-- SECTION: NEWS/RESPRESENTATIVE -->

  <section class="section-representative">
    <div class="top-title-news relative">
      <p class="p-230 w-700">NEWS</p>
    </div>
    <div class="relative rep-container-main">
      <img class="absolute" style="z-index:66; bottom:0"
        src="<?php echo RESNPO_URI . '/assets/image/homepage/section-fifth/representative-img.png' ?>" alt="">

      <div class="side-text absolute" id="side-text-rep">
        <p class="inline-txt w-600 p-30 head-clr">RESPRESENTATIVE</p>
        <img src="<?php echo RESNPO_URI . '/assets/image/homepage/side-section-img.png' ?>" alt="" />
      </div>

      <div class="top-title-rep relative">
        <p class="p-120 w-700">RESPRESENTATIVE</p>
      </div>
      <div class="bot-content-rep relative">
        <div class="bot-content-rep-container">
          <ul class="flex gap-15 bot-ul-rep">
            <li>
              <p class="p-16 w-500 white-clr">NPO法人 RESは、ひとりでも多くの子どもたちが、未来の国際社会で活躍できる社会を目指し、自ら考え行動できる人材を育成する活動をしています。
              </p>
              <div class="relative btn-container">
                <a href="">
                  <button class="main-button-logo relative" id="btn-logo">支援者様</button>
                  <img class="home-icon-button absolute"
                    src="<?php echo RESNPO_URI . '/assets/image/homepage/side-section-img.png' ?>"="" />
                </a>
              </div>
            </li>
            <li>
              <div class="li-real-container">
                <p class="p-120 w-700">“</p>
                <p class="p-40 w-700">新時代の学びのカタチ<br>「REAL✕LINK」</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- END: SECTION: NEWS/RESPRESENTATIVE -->

  <!-- SECTION: ADVISOR -->
  <section id="advisor_home" class="flex flex-column relative">
    <h1 class="head-clr av-title ">ADVISOR</h1>
    <div class="av-container flex">
      <div class="av-schools flex">
        <div class="scl-col-1">

          <div class="scl head-clr">
            <img src="<?php echo RESNPO_URI . '/assets/image/homepage/section-fifth/ucam.png' ?>" alt="">
            <div class="scl-cntnt">
              <h1>ムルシア・カトリック大学（スペイン）</h1>
              <h3>副学長-教務担当</h3>
            </div>
          </div>

          <div class="scl head-clr">
            <img src="<?php echo RESNPO_URI . '/assets/image/homepage/section-fifth/liverpool.png' ?>" alt="">
            <div class="scl-cntnt">
              <h1> 博士号（PhD）
              </h1>
              <h3> リバプール大学　 • 経営学/人事管理/情報学
              </h3>
            </div>
          </div>

          <div class="scl head-clr">
            <img src="<?php echo RESNPO_URI . '/assets/image/homepage/section-fifth/iba.png' ?>" alt="">
            <div class="scl-cntnt">
              <h1>博士号（PhD）</h1>
              <h3>国際経営学・経済学アカデミー　経営学</h3>
            </div>
          </div>
        </div>


        <div class="scl-col-2">
          <div class="scl head-clr">
            <img src="<?php echo RESNPO_URI . '/assets/image/homepage/section-fifth/up.png' ?>" alt="">
            <div class="scl-cntnt">
              <h1>経営学修士</h1>
              <h3>フィリピン大学　公共経営
              </h3>
            </div>
          </div>


          <div class="scl head-clr">
            <img src="<?php echo RESNPO_URI . '/assets/image/homepage/section-fifth/up.png' ?>" alt="">
            <div class="scl-cntnt">
              <h1>経営学修士</h1>
              <h3>フィリピン大学　マーケティング</h3>
            </div>
          </div>


          <div class="scl head-clr">
            <div class="relative btn-container" id="btn-advisor">
              <a href="">
                <button class="main-button relative">
                  代表メッセージ
                </button>
                <img class="icon-button absolute"
                  src="<?php echo RESNPO_URI . '/assets/image/homepage/side-section-img.png' ?>" alt="" />
              </a>
            </div>
          </div>
        </div>

        <div class="av-img-col border-advisor">
          <div class="advisor-img-container"> <!--Make container -->
            <!-- <p>TEXT TRANSFORM HERE --Absolute</p> -->
            <img src="<?php echo RESNPO_URI . '/assets/image/homepage/section-fifth/advisor-img.png' ?>" alt="">
          </div>
          <div class="advisor-txt-container">
            <p class="p-16 w-500 head-clr">MARIA JADE CATALAN-OPULENCIA, PhD</p>
            <p class="p-16 w-500 head-clr">特別顧問</p>
          </div>
        </div>

      </div>

    </div>

    <div class="side-text absolute" id="side-text-adv">
      <p class="inline-txt w-600 p-30 head-clr">ADVISOR</p>
      <img src="<?php echo RESNPO_URI . '/assets/image/homepage/side-section-img.png' ?>" alt="" />
    </div>
  </section>
  <!-- END: SECTION: ADVISOR -->


  <section class="section_5 relative">
    <div class="absolute sect-location">
      <p class="w-800 loc-txt-section section-head-clr">LOCATION</p>
    </div>

    <ul class="flex">
      <li style="position: relative">
        <p class="p-heading1">どこにあるの？</p>

        <div class="loc-link-container">
          <div class="mb-3">
            <a href="#A" data-hash="A" class="hash">
              <div class="flex map-link map-link-active">
                <img src="<?php echo RESNPO_URI . '/assets/image/homepage/section-sixth/img-loc-1.png' ?>" alt="" />
                <p>
                  5/F PAFCPIC Building, Taft North, Brgy. Buhang,
                  Mandurriao, Iloilo City, Iloilo, Philippines
                </p>
              </div>
            </a>
          </div>
          <div class="mb-3">
            <a href="#B" data-hash="B" class="hash">
              <div class="flex map-link">
                <img src="<?php echo RESNPO_URI . '/assets/image/homepage/section-sixth/img-loc-2.png' ?>" alt="" />
                <p>愛媛県松山市平井町1426番地2</p>
              </div>
            </a>
          </div>
          <div class="mb-25">
            <a href="#C" data-hash="C" class="hash">
              <div class="flex map-link">
                <img src="<?php echo RESNPO_URI . '/assets/image/homepage/section-sixth/img-loc-3.png' ?>" alt="" />
                <p>島根県隠岐郡西ノ島町大字浦郷３１</p>
              </div>
            </a>
          </div>
        </div>
        <div class="absolute loc-icon">
          <img src="<?php echo RESNPO_URI . '/assets/image/homepage/section-sixth/icon-loc.png' ?>" alt="" />
        </div>
      </li>
      <li>
        <div class="map-content">
          <div id="A" class="tab">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.191698563597!2d122.55011257369502!3d10.719692760240388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aee520fcd35de7%3A0x28de841d5567073a!2sGrow%20Forward%20Jp%20Inc.!5e0!3m2!1sen!2sph!4v1727060277501!5m2!1sen!2sph"
              width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div id="B" class="tab hidden">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31361.61365486175!2d122.55731747276351!3d10.718920040542097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aee508bcc075c3%3A0x7f47e3a00fc75b26!2sLa%20Paz%2C%20Iloilo%20City%2C%20Iloilo!5e0!3m2!1sen!2sph!4v1727062902920!5m2!1sen!2sph"
              width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div id="C" class="tab hidden">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31361.61365486175!2d122.55731747276351!3d10.718920040542097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aee508bcc075c3%3A0x7f47e3a00fc75b26!2sLa%20Paz%2C%20Iloilo%20City%2C%20Iloilo!5e0!3m2!1sen!2sph!4v1727062902920!5m2!1sen!2sph"
              width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </li>
    </ul>
  </section>


  <section class="section_6 relative global_width">
    <ul class="flex ul-logo">
      <li>
        <div class="logo-details">
          <p class="p-40 w-700 head-clr">支援者の皆様</p>
          <p class="p-20 w-500 head-clr logo-text">
            活動に賛同し、支持してくださる全ての皆様に厚く御礼申し上げます。
          </p>
          <div class="relative btn-container">
            <a href="">
              <button class="main-button-logo relative" id="btn-logo">支援者様</button>
              <img class="home-icon-button absolute"
                src="<?php echo RESNPO_URI . '/assets/image/homepage/side-section-img.png' ?>" alt="" />
            </a>
          </div>
        </div>
      </li>
      <li>
        <div class="flex flex-wrap text-center logo-images">
          <div>
            <a href="https://www.leben.co.jp/">
              <img src="<?php echo RESNPO_URI . '/assets/image/homepage/section-seventh/logo-1.png' ?>" alt="" />
            </a>
          </div>
          <div>
            <a href="https://www.ably-net.com/">
              <img src="<?php echo RESNPO_URI . '/assets/image/homepage/section-seventh/logo-2.png' ?>" alt="" />
            </a>
          </div>
          <div>
            <a href="http://hasuclub.jp/public/">
              <img src="<?php echo RESNPO_URI . '/assets/image/homepage/section-seventh/logo-3.png' ?>" alt="" />
            </a>
          </div>
          <div>
            <a href="https://www.ohno-as.jp/">
              <img src="<?php echo RESNPO_URI . '/assets/image/homepage/section-seventh/logo-4.png' ?>" alt="" />
            </a>
          </div>
          <div>
            <a href="http://www.tubakisyokuhin.co.jp/">
              <img src="<?php echo RESNPO_URI . '/assets/image/homepage/section-seventh/logo-5.png' ?>" alt="" />
            </a>
          </div>
          <div>
            <a href="https://forward1992.com/">
              <img src="<?php echo RESNPO_URI . '/assets/image/homepage/section-seventh/logo-6.png' ?>" alt="" />
            </a>
          </div>
          <div>
            <a href="https://negum-tenpo.com/">
              <img src="<?php echo RESNPO_URI . '/assets/image/homepage/section-seventh/logo-7.png' ?>" alt="" />
            </a>
          </div>
        </div>
      </li>
    </ul>

    <div class="side-text side-supporter absolute">
      <p class="inline-txt p-30 w-600 head-clr">SUPPORTER</p>
      <img src="<?php echo RESNPO_URI . '/assets/image/homepage/side-section-img.png' ?>" alt="" />
      div>
      section>
</div>    
    <?php get_footer() ?>