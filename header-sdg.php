<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('-', true, 'right'); ?> <?php bloginfo('name'); ?></title>

  <?php wp_head() ?>
</head>

<body>
  <main>
    <?php //landing_sdg_page_template('SDGs 甲子園') ?>
        <section class="sdg-home">
            <div class="bg-border">
                <header>
                    <img src="<?php echo RESNPO_IMAGE . '/menu-button.png' ?>" alt="">
                </header>

                <div class="social">
                    <img src="<?php echo RESNPO_IMAGE . '/line.png' ?>" alt="">
                    <img src="<?php echo RESNPO_IMAGE . '/facebook.png' ?>" alt="">
                    <img src="<?php echo RESNPO_IMAGE . '/youtube.png' ?>" alt="">
                </div>

                <div class="sdg-title">
                    <div class="side-title">
                        <img class="side-logo" src="<?php echo RESNPO_IMAGE . '/logo.png' ?>" alt="">
                        <div class="side-title-text">
                            <h1>NPO法人</h1>
                            <h3>REGIONAL EDUCATION SUPPORT</h3>
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
                        <svg width="550" height="150" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <filter id="shadow" x="0" y="0" width="200%" height="200%">
                                    <feOffset result="offOut" in="SourceAlpha" dx="0" dy="5" />
                                    <feGaussianBlur result="blurOut" in="offOut" stdDeviation="4" />
                                    <feBlend in="SourceGraphic" in2="blurOut" mode="normal" />
                                </filter>
                            </defs>
                            <text x="20" y="100" font-family="var(--notsansjp)" font-size="80" font-weight="bold"
                                fill="none" stroke="white" stroke-width="1" letter-spacing="0.1em"
                                filter="url(#shadow)">
                                SDGs 甲子園
                            </text>
                        </svg>
                    </div>
                </div>
            </div>
            <!-- Background Video Container -->
            <div class="video-container">
                <video id="background-video" autoplay muted loop>
                    <source src="<?php echo RESNPO_IMAGE . '/vid1.mp4' ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <!-- Hidden div to store video paths -->
            <div id="video-paths" data-video1="<?php echo RESNPO_IMAGE . '/vid1.mp4' ?>"
                data-video2="<?php echo RESNPO_IMAGE . '/vid2.mp4' ?>"
                data-video3="<?php echo RESNPO_IMAGE . '/vid3.mp4' ?>"
                data-video4="<?php echo RESNPO_IMAGE . '/vid4.mp4' ?>"></div>
        </section>