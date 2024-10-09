<?php
function display_title()
{
  if (is_page()) {
    $slug = get_post_field('post_name', get_post());
    if ($slug === 'sdg') {
      echo 'SDGs甲子園';
    } elseif ($slug === 'study-abroad') {
      echo '海外留学';
    }
  }
}
?>
<section class="past-performance ">
  <h1 class="past-performance-title">
    <span class="dark-blue">「</span>
    <span class="pp-main-title"><?php echo display_title() ?></span>
    <span class="dark-blue">」</span>
    <span class="sub-title head-clr">の過去実績をご紹介します。</span>
  </h1>


  <div class="past-performance-box flex">
    <div class="pp-container">
      <div class="pp-content-box flex">

        <div class="past-performance-texts">
          <div class="column">
            <div class="row-1 pp-rows flex">
              <p class="p-green-20">カテゴリ</p>
              <p class="p-white-16">海外支援</p>
            </div>
            <div class="row-2 pp-rows flex">
              <p class="p-green-20">開催日時</p>
              <p class="p-white-16">2024年3月20日～3月28日</p>
            </div>
            <div class="row-3 pp-rows flex">
              <p class="p-green-20">開催場所</p>
              <p class="p-white-16">フィリピン　イロイロ市</p>
            </div>
            <div class="row-4 pp-rows flex">
              <p class="p-green-20">主な内容</p>
              <p class="p-white-16">
                フィリピンのイロイロ市を滞在拠点にし、様々なボランティア活動や、
                異文化に触れる体験を行いました。活動は現地の高校生と一緒に行い、
                他国の同年代との交流も行いました。
                <span class="p-green-20">
                  <br><br><br>
                  主なボランティア活動
                </span>
                <span class="p-white-16">
                  <br><br>
                  【マングローブ植樹】<br> 人々の生活や安全を守るため、沿岸部でマングローブの植樹を行い
                  ました。
                  <br><br>
                  【孤児院の訪問】
                  <br>
                  様々な理由で家族と一緒に暮らせない子どもたちが生活する孤児院
                  を訪問。子どもたちと一緒にバッグの染色を行い交流しました。
                  <br><br>
                  【海岸清掃】<br>
                  自国で廃棄されたものだけでなく様々な国からの廃棄物が漂着す
                  るフィリピン。イロイロ市の隣の島「ギマラス島」の海岸で、漂着
                  物などの回収を行いました。
                  <br><br>
                  【配給活動】<br> 交通や生活インフラの整っていない、先住民の方々が住む地区を
                  訪問。支援の物資を届け、地域の住人と交流を行いました
                </span>
                <span class="p-green-20">
                  <br><br><br>
                  異文化体験
                </span>
                <span class="p-white-16">
                  <br>
                  【山間部の生活体験】
                  <br>
                  都市部から少し離れた山間部の集落を訪問。豊かな自然の中で生活
                  を営む人々の暮らしを、見学・体験しました。
                  【Cityツアー】
                  <br>
                  イロイロ市に残る歴史的建造物や観光スポットを見学。今のフィリ
                  ピンの文化や価値観がどのように育まれてきたのかを肌で感じました。
                  <br><br>
                  参加者たちは、ボランティア活動やフィリピンの歴史や文化・習慣な
                  どに触れるプログラムに参加し、国際的な価値観や視野を育みました。
                </span>
              </p>
            </div>
          </div>
        </div>
        <div class="pp-slider flex">
          <div class="scroll-container">
            <div class="scroll-content">
              <img src="<?php echo RESNPO_IMAGE . '/pp-1.png' ?>" alt="Image 1" class="slider-image">
              <img src="<?php echo RESNPO_IMAGE . '/pp-2.png' ?>" alt="Image 2" class="slider-image">
              <img src="<?php echo RESNPO_IMAGE . '/pp-3.png' ?>" alt="Image 3" class="slider-image">
              <img src="<?php echo RESNPO_IMAGE . '/pp-1.png' ?>" alt="Image 4" class="slider-image">
            </div>
          </div>
        </div>
      </div>
      <div class="pagination flex">
        <a class="mr-r-87" href="#">&laquo;</a>
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">...</a>
        <a class="mr-l-87" href="#">&raquo;</a>
      </div>
    </div>
  </div>
</section>