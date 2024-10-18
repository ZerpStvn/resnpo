<?php

function landing_sdg_page_template($page_title = null, $vid1, $vid2, $vid3, $vid4)
{
?>
  <section class="sdg-home">
    <div class="bg-border">
      <!-- <header>
        <img src="<?php echo RESNPO_IMAGE . '/menu-button.png' ?>" alt="">
      </header> -->


      <div class="social">
        <a href="https://liff.line.me/1645278921-kWRPP32q/?accountId=601qwusa" target="_blank">
          <img src="<?php echo RESNPO_IMAGE . '/line.png' ?>" alt="">
        </a>
        <a href="https://www.facebook.com/ChiikiKyouiku/" target="_blank">
          <img src="<?php echo RESNPO_IMAGE . '/facebook.png' ?>" alt="">
        </a>
        <a href="https://www.youtube.com/channel/UCEJ3QcF3DZ9o_MYbhMxgV4Q" target="_blank">
          <img src="<?php echo RESNPO_IMAGE . '/youtube.png' ?>" alt="">
        </a>
      </div>

      <div class="sdg-title">
        <div class="side-title">
          <a href="<?php echo get_site_url() .  '/home' ?>"><img class="side-logo" src="<?php echo RESNPO_IMAGE . '/logo.png' ?>" alt=""></a>
          <div class="side-title-text">
            <a href="<?php echo get_site_url() .  '/home' ?>">
              <h1>NPO法人</h1>
              <h3>REGIONAL EDUCATION SUPPORT</h3>
            </a>
          </div>
        </div>
        <div class="main-title">
          <!-- Navigation dots -->
          <div class="navigation-dots">
            <!-- Previous arrow -->
            <span class="arrow arrow-left">
              <img src="<?php echo RESNPO_IMAGE . '/arrow-left-white.png' ?>" alt="">
            </span>
            <!-- Dots -->
            <span class="dot active" onclick="setSlide(0)"></span>
            <span class="dot" onclick="setSlide(1)"></span>
            <span class="dot" onclick="setSlide(2)"></span>
            <span class="dot" onclick="setSlide(3)"></span>
            <!-- Next arrow -->
            <span class="arrow arrow-right">
              <img src="<?php echo RESNPO_IMAGE . '/arrow-right-white.png' ?>" alt="">
            </span>
          </div>

          <!-- SDG Title -->
          <!-- <svg width="550" height="150" xmlns="http://www.w3.org/2000/svg">
            <defs>
              <filter id="shadow" x="0" y="0" width="200%" height="200%">
                <feOffset result="offOut" in="SourceAlpha" dx="0" dy="5" />
                <feGaussianBlur result="blurOut" in="offOut" stdDeviation="4" />
                <feBlend in="SourceGraphic" in2="blurOut" mode="normal" />
              </filter>
            </defs>
            <text x="20" y="100" font-family="var(--notsansjp)" font-size="80" font-weight="bold" fill="none" stroke="white" stroke-width="1" letter-spacing="0.1em" filter="url(#shadow)">
            </text>
          </svg> -->


          <h1 class="outline"> <?php echo $page_title ?>
          </h1>
        </div>
      </div>
    </div>
    <div class="video-container">
      <video id="background-video" autoplay muted loop>
        <source src="<?php echo RESNPO_IMAGE . '/' . $vid1 . '.mp4' ?>" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
    <div id="video-paths" data-video1="<?php echo RESNPO_IMAGE . '/' . $vid1 . '.mp4' ?>" data-video2="<?php echo RESNPO_IMAGE . '/' . $vid2 . '.mp4'  ?>" data-video3="<?php echo RESNPO_IMAGE . '/' . $vid3 . '.mp4'  ?>" data-video4="<?php echo RESNPO_IMAGE . '/' . $vid4 . '.mp4'  ?>"></div>
  </section>
<?php
}
