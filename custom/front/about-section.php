<?php
function render_about_section($sectiontitle, $subtitle, $img)
{
?>
  <section class="landing-about">
    <div class="landing-fg">
      <img src="<?php echo RESNPO_IMAGE . $img ?>" alt="">
    </div>

    <div class="side-content">
      <div class="social">
        <a href="https://liff.line.me/1645278921-kWRPP32q/?accountId=601qwusa">
          <img src="<?php echo RESNPO_IMAGE . '/line.png' ?>" alt="Line">
        </a>
        <a href="https://www.facebook.com/ChiikiKyouiku/">
          <img src="<?php echo RESNPO_IMAGE . '/facebook.png' ?>" alt="Facebook">
        </a>
        <a href="https://www.youtube.com/channel/UCEJ3QcF3DZ9o_MYbhMxgV4Q">
          <img src="<?php echo RESNPO_IMAGE . '/youtube.png' ?>" alt="YouTube">
        </a>
      </div>
      <div class="about-title">
        <div class="side-title">
          <a href="<?php echo get_site_url('/home') ?>"><img class="side-logo" src="<?php echo RESNPO_IMAGE . '/logo.png' ?>" alt=""></a>
          <div class="side-title-text">
            <a href="<?php echo get_site_url('/home') ?>">
              <h1>NPO法人</h1>
              <h3>REGIONAL EDUCATION SUPPORT</h3>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="au-title">
      <h1 class="outline au-main-title scaleIn"><?php echo $sectiontitle; ?></h1>
      <h3 class="au-sub-title sub-head-clr scaleIn">
        <?php echo $subtitle; ?></h3>
    </div>
  </section>
<?php
}
