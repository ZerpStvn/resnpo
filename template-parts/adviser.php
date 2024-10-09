<!-- SECTION: ADVSIOR-->
<section id="advisor_section" class="advisor-section white-blue ">
  <div class="as-container flex flex-row global-width">
    <div class="as-img-col flex-column flex">



      <div class="av-img-col border-advisor">
        <div class="advisor-img-container"> <!--Make container -->
          <!-- <p>TEXT TRANSFORM HERE --Absolute</p> -->
          <img src="<?php echo RESNPO_IMAGE . '/studyingabroad/maria2.png' ?>" alt="">
        </div>
        <div class="advisor-txt-container">
          <p class="p-16 w-500 head-clr">MARIA JADE CATALAN-OPULENCIA, PhD</p>
          <p class="p-16 w-500 head-clr">特別顧問</p>
        </div>
      </div>




      <div class="as-cred-wrapper">
        <div class="as-carousel flex">
          <div class="as-cred flex flex-row head-clr">
            <img src="<?php echo RESNPO_IMAGE . '/studyingabroad/ucam.png' ?>" alt="UCAM logo">
            <div class="as-cred-texts">
              <h4 class="detail-title">ムルシア・カトリック大学（スペイン）</h4>
              <h5 class="as-cred-details">副学長-教務担当</h5>
            </div>
          </div>
          <div class="as-cred flex flex-row head-clr">
            <img src="<?php echo RESNPO_IMAGE . '/studyingabroad/liverpool.png' ?>" alt="Liverpool University logo">
            <div class="as-cred-texts">
              <h4 class="detail-title">ムルシア・カトリック大学（スペイン）</h4>
              <h5 class="as-cred-details">副学長-教務担当</h5>
            </div>
          </div>
          <div class="as-cred flex flex-row head-clr">
            <img src="<?php echo RESNPO_IMAGE . '/studyingabroad/iba.png' ?>" alt="IBA logo">
            <div class="as-cred-texts">
              <h4 class="detail-title">博士号（PhD）</h4>
              <h5 class="as-cred-details">国際経営学・経済学アカデミー　経営学</h5>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="as-text-col flex-column flex">
      <p class="sg_description head-clr">マリア・ジェイド・カタラン・オプレンシア教授は、イギリスのリバプール大学とフィリピンの国際ビジネスアカデミーの２校で経営学の博士号を取得し、30年以上の学術経験があります。 ジェイド教授の専門知識は、出版物、学会発表、およびハーバード大学のケースメソッド教育セミナーなどの名門プログラムへの参加によって示されています。 また、フィリピン大統領賞を含む多くの賞を受賞しており、世界中で様々な賞にノミネートされています。</p>
      <div class="as-details flex-row">
        <?php
        function generateDetails($degree, $university, $subjects, $thesis)
        {
          ob_start();
        ?>
          <details>
            <summary class='summary-title'>
              <h3 class='detail-title text-center'><?php echo $degree; ?></h3>
              <h3 class='detail-title text-center'><?php echo $university; ?></h3>
            </summary>
            <ul class='detail-list'>
              <li class="head-clr "><?php echo $subjects; ?></li>
              <li class="head-clr">論文題目："<?php echo $thesis; ?>"</li>
            </ul>
          </details>


        <?php
          return ob_get_clean();
        }

        function generateHonorsDetails($title, $honors)
        {
          ob_start();
        ?>
          <details>
            <summary class='summary-title'>
              <h3 class='detail-title'></h3>
              <h3 class='detail-title'><?php echo $title; ?></h3>
            </summary>
            <ul class='detail-list head-clr'>
              <?php foreach ($honors as $honor) : ?>
                <li><?php echo $honor; ?></li>
              <?php endforeach; ?>
            </ul>
          </details>
        <?php
          return ob_get_clean();
        }

        ?>
        <div class="detail-col-1">
          <?php
          echo generateDetails('博士号（PhD）', 'リバプール大学', '経営学/人事管理/情報学', 'ソフトウェア・アズ・ア・サービス（SAAS）モデル：候補者関係管理とキャリアパス計画への影響');
          echo generateDetails('博士号（PhD）', 'リバプール大学', '経営学/人事管理/情報学', 'ソフトウェア・アズ・ア・サービス（SAAS）モデル：候補者関係管理とキャリアパス計画への影響');
          echo generateDetails('経営学修士', 'フィリピン大学', '経営学/人事管理/情報学', 'ソフトウェア・アズ・ア・サービス（SAAS）モデル：候補者関係管理とキャリアパス計画への影響');
          echo generateDetails('経営学修士', 'フィリピン大学', '経営学/人事管理/情報学', 'ソフトウェア・アズ・ア・サービス（SAAS）モデル：候補者関係管理とキャリアパス計画への影響');
          ?>
        </div>
        <div class="detail-col-2">
          <?php
          $honors = [
            '教育における傑出したリーダーシップ、フィリピン系アメリカ人教育者連合　教育　2022',
            'ビジネス学部のベストリサーチャー賞（UAE) 研究　2020',
            '世界の教育者TOP50（オックスフォードジャーナル） 教育賞　2016',
            'Presidential Lingkod Bayan Award（フィリピン大統領府） 大統領賞　2001',
            'フィリピン警察庁 (PNP) 「PNPへのカリキュラム提供の拡充に対する表彰状」　2001'
          ];
          echo generateHonorsDetails('栄誉/ 受賞', $honors);
          echo generateHonorsDetails('リソーススピーカー/ 会議参加  ', $honors);
          ?>
        </div>
      </div>
    </div>
</section>
<!-- END ADVISER SECTION -->