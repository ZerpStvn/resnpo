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
      <nav class="absolute" data-aos="fade-left">
        <div class="nav-icon-container-home">
          <img class="home-nav-ico" src="<?php echo RESNPO_URI .  '/assets/image/homepage/header/home-nav.png' ?>" alt="" />
        </div>
      </nav>
    </header>

    <main>


