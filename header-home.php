<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('-', true, 'right'); ?> <?php bloginfo('name'); ?></title>

  <?php wp_head() ?>
</head>

<body>

  <header class="relative">
    <nav class="absolute navbar"> <!--data-aos="fade-left" -->
      <div class="nav-icon-container-home nav-icon flex" id="nav-icon">
        <img class="home-nav-ico" src="<?php echo RESNPO_URI .  '/assets/image/donation/header/nav-icon.png' ?>" alt="" />
      </div>

      <div class="nav-menu" id="nav-menu">


        <ul class="nav-container">
          <div class="btn-close">
            <p class="p-25 ">X</p>
          </div>
          <div class="nav-company-details">
            <img class="logo-green" src="<?php echo RESNPO_IMAGE . '/res-logo.png' ?>" alt="">



          </div>

          <li>
            <ul class="header-scol-links">
              <li><a href="<?php echo get_site_url() ?>">Top Page</a></li>
              <li><a href="<?php echo get_site_url() . '/about' ?>">About Us</a></li>

              <li class="projects-toggle">
                <a href="<?php echo get_site_url() . '/project' ?>">Project</a>
                <ul class="sub-menu" style="display: flex; flex-direction: row;">
                  <li><a href="<?php echo get_site_url() . '/sdg' ?>">SDGs</a></li>
                  <li><a href="<?php echo get_site_url() . '/study-abroad' ?>">海外留学</a></li>
                  <!-- <li><a href="<?php // echo get_site_url() . '/studying-abroad' 
                                    ?>">海外進学</a></li> -->
                </ul>
              </li>
              <li class="joinus-toggle">
                <a href="<?php echo get_site_url() . '/joinus' ?>">Join Us</a>
                <ul class="sub-menu" style="display: flex; flex-direction: row;">
                  <li><a href="<?php echo get_site_url() . '/donation' ?>">寄付</a></li>
                  <li><a href="<?php echo get_site_url() . '/membership' ?>">メンバーシップ</a></li>
                </ul>
              </li>
              <li><a href="#<?php //echo get_site_url() . '/whatsnew' 
                            ?>">Corporate/School</a></li>
            </ul>
          </li>
          <div class="header-fcol-lc">
            <div id="tbl_col" class="tbl-col">
              <table>
                <tr>
                  <td>
                    <a href="https://www.youtube.com/channel/UCEJ3QcF3DZ9o_MYbhMxgV4Q" target="_blank">
                      <img src="<?php echo RESNPO_IMAGE . '/yt-blue.png' ?>" alt="YouTube">
                    </a>
                  </td>
                  <td>
                    <a href="https://www.facebook.com/ChiikiKyouiku/" target="_blank">
                      <img src="<?php echo RESNPO_IMAGE . '/fb-blue.png' ?>" alt="Facebook">
                    </a>
                  </td>
                  <td>
                    <a href="https://liff.line.me/1645278921-kWRPP32q/?accountId=601qwusa" target="_blank">
                      <img class="line" src="<?php echo RESNPO_IMAGE . '/line-blue.png' ?>" alt="Line">
                    </a>
                  </td>
                  <td class="contact-text">CONTACT</td>
                </tr>
              </table>
            </div>
          </div>

        </ul>
      </div>
    </nav>
  </header>

  <main>