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




// JOIN US PAGES LANDING
function render_join_landing($pagetitle, $centertitle)
{
?>
  <section class="donation-header">
    <div class="border relative">
      <div class="donation-container slidedown relative">

        <div class="b-titles text-centered">

          <p class="b-title"><?php echo $pagetitle ?></p>
          <p class="b-title"><?php echo $pagetitle ?></p>
          <p class="b-title"><?php echo $pagetitle ?></p>
          <p class="b-title"><?php echo $pagetitle ?></p>
          <p class="b-title"><?php echo $pagetitle ?></p>
          <p class="b-title"><?php echo $pagetitle ?></p>

        </div>
        <div class="header-txt-container absolute">
          <p class="slideleft"><?php echo $centertitle ?></p>
        </div>
        <div class="res-txt-container absolute">
          <ul class="flex gap-15">
            <li>
              <img src="<?php echo RESNPO_URI . '/assets/image/donation/header/resnpo-ico.png' ?>" alt="" />
            </li>
            <li>
              <p class="w-700 p-14 white-clr">NPO法人</p>
              <p class="w-700 p-14 white-clr">REGIONAL EDUCATION SUPPORT</p>
            </li>
          </ul>
        </div>
      </div>
      <div class="social-icons absolute">
        <ul class="social-icons-ul flex align-items-center">
          <li>
            <img
              src="<?php echo RESNPO_URI . '/assets/image/donation/header/sm-line-icon.png' ?>"
              alt="" />
          </li>
          <li>
            <img src="<?php echo RESNPO_URI . '/assets/image/donation/header/sm-fb-icon.png' ?>" alt="" />
          </li>
          <li>
            <img src="<?php echo RESNPO_URI . '/assets/image/donation/header/sm-yt-icon.png' ?>" alt="" />
          </li>
        </ul>
      </div>

    </div>
  </section>

<?php
}


// JOINS US PAGES SECTION 1
function render_join_section1($title, $description, $nextpage)
{

?>
  <section class="section_1_don relative">
    <div class="donation-bottom-container ">
      <div class="donation-bottom-text">
        <p class="w-700 p-40 head-clr scaleIn"><?php echo $title ?></p>
        <p class="w-500 p-20 head-clr">
          <?php echo $description ?>
        </p>
      </div>
      <div class="donation-bottom-donate">
        <p class="w-900 p-100 section-head-clr slideup"><?php echo $nextpage ?></p>
      </div>
    </div>
  </section>
<?php
}

function render_join_section3($pagetitle, $overlaytitle, $fieldset1, $fieldset2, $fieldset3)
{
?>
  <section class="section_3_don">
    <div class="title-top relative">
      <p class="w-500 p-250 text-center relative"><?php echo $pagetitle ?></p>
      <p class="w-900 p-100 light-blue absolute scaleIn"><?php echo $overlaytitle ?></p>
    </div>

    <div class="fieldset-container">
      <ul class="flex">
        <li>
          <fieldset>
            <legend>
              <p class="w-900 p-50 head-clr">01</p>
            </legend>
            <p class="w-500 p-20 head-clr fieldset-text"><?php echo $fieldset1 ?></p>
          </fieldset>
        </li>
        <li>
          <fieldset>
            <legend>
              <p class="w-900 p-50 head-clr">02</p>
            </legend>
            <p class="w-500 p-20 head-clr fieldset-text"><?php echo $fieldset2 ?></p>
          </fieldset>
        </li>
        <li>
          <fieldset>
            <legend>
              <p class="w-900 p-50 head-clr">03</p>
            </legend>
            <p class="w-500 p-20 head-clr fieldset-text"><?php echo $fieldset3 ?></p>
          </fieldset>
        </li>
      </ul>

    </div>
  </section>

<?php
}

function render_projects_cards($cardTitle, $artTitle, $description, $img, $link)
{
?>
  <section class="section-projects relative">
    <div class="relative projects-container">
      <p class="w-700 p-200 white-clr section-title relative slideright"><?php echo $cardTitle ?></p>
      <div class="overlay-arc relative">
        <a href="<?php //echo get_site_url() . $link'
                  ?>">
          <div class="arc-img-side absolute">
            <img class="" src="<?php echo RESNPO_URI . '/assets/image/project/' . $img ?>" alt="">
          </div>
          <ul class="flex flex-proj-cont">
            <li>
              <p class="w-700 p-60 sub-head-clr scaleIn proj-title"><?php echo $artTitle ?></p>
            </li>
            <li>
              <p class="w-700 p-25 white-clr proj-desc"><?php echo $description ?></p>
              <div class="relative btn-container">
                <button class="main-button relative">
                  <p>詳しく見る</p>
                </button>
                <img
                  class="icon-button absolute"
                  src="<?php echo RESNPO_URI . '/assets/image/homepage/side-section-img.png' ?>"
                  alt="" />
              </div>
            </li>
          </ul>
        </a>
      </div>
    </div>
  </section>
<?php
}
