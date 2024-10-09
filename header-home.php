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
      <nav class="absolute navbar" > <!--data-aos="fade-left" -->
        <div class="nav-icon-container-home nav-icon" id="nav-icon">
          <img class="home-nav-ico" src="<?php echo RESNPO_URI .  '/assets/image/homepage/header/home-nav.png' ?>" alt="" />
        </div>

        <div class="nav-menu" id="nav-menu">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
      </nav>
    </header>

    <main>


