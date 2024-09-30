<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('-', true, 'right'); ?> <?php bloginfo('name'); ?></title>

    <?php wp_head() ?>
</head>

<body>

    <header>
      <nav>
        <ul class="ul-nav-menu flex">
          <li>
            <img
              src="<?php echo RESNPO_URI . '/assets/image/homepage/header/top_nav_txt.png' ?>"
              alt=""
            />
          </li>
          <li>
            <img src="<?php echo RESNPO_URI . '/assets/image/homepage/header/nav-icon.png' ?>" alt="" />
          </li>
        </ul>
        <hr />
      </nav>
    </header>

    <main>


