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

        <div class="btn-close relative">
          <p class="p-25 absolute btn-close">X</p>
        </div>

        <ul class="nav-container flex">
          <li>
            <div class="nav-company-details">
              <img class="logo-green" src="<?php echo RESNPO_IMAGE . '/green-logo.png' ?>" alt="">
              <img class="text-logo" src="<?php echo RESNPO_URI . '/assets/image/homepage/header/res-img-txt.png' ?>" alt="">
            </div>
          </li>
          <li>
            <ul>
              <li><a href="<?php echo get_site_url() ?>">Home</a></li>
              <li><a href="<?php echo get_site_url() . '/about' ?>">About Us</a></li>

              <!-- SDGs Section with clickable submenu -->
              <li class="sdg-toggle">
                <a href="<?php echo get_site_url() . '/project' ?>" class="sdg-link">Project</a>
                <ul class=" sub-menu" style="display: none;">
                  <li><a href="<?php echo get_site_url() . '/sdg' ?>">SDGs</a></li>

                  <li><a href="<?php echo get_site_url() . '/study-abroad' ?>">海外留学</a></li>
                  <li><a href="<?php echo get_site_url() . '/studying-abroad' ?>">海外進学</a></li>
                </ul>
              </li>

              <li><a href="<?php echo get_site_url() . '/joinus' ?>">Join Us</a></li>
              <li><a href="<?php echo get_site_url() . '/donation' ?>">Donation</a></li>
              <li><a href="<?php echo get_site_url() . '/membership' ?>">Membership</a></li>
              <li><a href="<?php echo get_site_url() . '/whatsnew' ?>">What's New</a></li>
            </ul>
          </li>
        </ul>


      </div>
    </nav>
  </header>

  <main>