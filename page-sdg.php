<?php get_header('sdg') ?>

<div id="sdg-page-id">

  <!-- SECTION 1: FRONT -->
  <?php articlefront("RESのSDGs
<br>甲子園とは", " 新学習指導要綱に記載されている「持続可能な社会の創り手」を育成するために、地域社会のSDGs課題に焦点を当て、その解決に向けて研究や活動を行う高校生たちが、その取り組みの経過や成果をプレゼンテーション等で競う場を提供します。 私たちが求めるのは単なる知識の獲得や表彰の場ではありません。ESD（持続可能な開発のための教育）実践の場として、「世代や立場を超えた交流」「一緒に取り組む仲間との交流」「自ら考え行動する大切さ」「行動（実体験）による学び」「情報発信と新たな関係の構築」の経験やその価値観を深める機会を通じて、未来を担う若者たちの成長を促します。します", "/header-mission.png") ?>


  <!-- Section: Feature -->
  <?php featurefront('sdg') ?>



  <!-- SECTION 3: SCREENING -->
  <section class="screening-section">
    <div class="screening-page-title">
      ５つの審査基準
    </div>
    <div class="slider-container">
      <div class="slider">

        <!-- s1 -->
        <div class="slide slide-1">
          <h2>企画力</h2>
          <p class="text-centered">新規性および革新性を評価<br><br></p>
          <p class="text-justified">
            活動内容が斬新かつ革新的で、これまでの実践とは一味違った取り組みであるか。
          </p>
        </div>

        <!-- s2 -->
        <div class="slide slide-2">
          <h2>表現力</h2>
          <p class="text-centered">共感を得るためのストーリーおよび表現手法を評価
          </p>
          <br>
          <p class="text-justified">
            共感を得るためのストーリー構成となっており、分かりやすいプレゼンテーションができているか。
          </p>
        </div>

        <!-- s3 -->
        <div class="slide slide-3">
          <h2>つながり力</h2>
          <p class="text-centered">人とのつながり、周りを巻き込む力を評価</p>
          <br>
          <p class="text-justified">地域、社会と交流し、人とより広く、または、深くつながることができているか。
          </p>
        </div>

        <!-- s4 -->
        <div class="slide slide-4">
          <h2>持続可能力</h2>
          <p class="text-centered">継続することで、目標達成に繋がるかを評価</p>
          <br>
          <p class="text-justified">一過性のものではなく、SDGsのゴール達成に結び付くものになっているか。</p>
        </div>

        <!-- s5 -->
        <div class="slide slide-5">
          <h2>活動力</h2>
          <p class="text-centered">課題解決のため、実際に行動ができたかを評価</p>
          <p class="text-justified">アイデアだけでなく、課題解決のため、実際にアクションを起こせたかどうか
          </p>
        </div>
      </div>
      <button id="prevBtn" class="nav-button"><img src="<?php echo RESNPO_IMAGE . '/arrowleft.png' ?>" alt=""></button>
      <button id="nextBtn" class="nav-button"><img src="<?php echo RESNPO_IMAGE . '/arrowright.png' ?>" alt=""></button>
    </div>
  </section>
  <!-- END SECTION 3 -->


  <!-- SECTION 4: PHOTO GALLERY -->
  <?php photogallerysection('sdg') ?>
  <!-- END SECTION 4 -->


  <!-- SECTION 5: UPCOMING EVENTS -->
  <?php get_template_part('template-parts/upcoming-events') ?>
  <!-- END SECTION 4 -->

  <!-- SECTION 5: PAST PERFORMANCE -->
  <?php get_template_part('template-parts/past-performance') ?>
  <!-- END SECTION 5 -->


  <!-- SECTION 6: JOINED SCHOOLS -->
  <?php get_template_part('template-parts/joined-schools') ?>
  <!-- END SECTION 6 -->


  <!-- SECTION 7: Contact Opportunity -->
  <?php get_template_part('template-parts/contact-opp') ?>


  <!-- END SECTION 7 -->
</div>

</main>
<?php get_footer() ?>