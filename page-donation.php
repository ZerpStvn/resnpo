<?php get_header() ?>
<div id="donationid">
  <!-- donation page -->
  <?php render_join_landing('DONATION', '寄付') ?>
  <?php render_join_section1('あなたの寄付が子どもたちの世界を拡げ輝かせます', '刻一刻と変化する今の時代。子どもたちは、私たちがそうだった頃とは異なる環境に身を置き多種多様なスキルや能力を身につけることを求められています。<br>
          子どもたちに一つでも多くの機会を届けるため皆様の寄付を私たちの活動に利用させていただきます', 'DONATION') ?>

  <section class="section_2_don">
    <div class="flex section_2_oppor">
      <div class="video-container">
        <div class="video-column">
          <iframe
            width="600"
            height="391"
            src="https://www.youtube.com/embed/gJUy-fVnqyc"
            title="イロイロ市ボランティア"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen
            style="border-radius: 10px;">
          </iframe>
        </div>
      </div>
      <div class="text-column">
        <p class="w-900 p-40 mb-5 white-clr text-center scalein">
          寄付によって
          子どもたちに与えることができる機会
        </p>
        <div class="flex gap-35 donation-details slideup">
          <div>
            <img src="<?php echo RESNPO_URI . '/assets/image/donation/section-two/icon-1.png' ?>" alt="">
          </div>
          <div>
            <p>様々な職種について知ったり体験する機会</p>
            <p>Opportunity to learn and <br> experience various professions</p>
          </div>
        </div>

        <div class="flex gap-25 donation-details slideup">
          <div>
            <img src="<?php echo RESNPO_URI . '/assets/image/donation/section-two/icon-2.png' ?>" alt="">
          </div>
          <div>
            <p>実社会に活かせる知識やスキルを学ぶ機会</p>
            <p>Opportunities to learn knowledge and skills <br> that can be applied in the real world</p>
          </div>
        </div>

        <div class="flex gap-25 donation-details slideup">
          <div>
            <img src="<?php echo RESNPO_URI . '/assets/image/donation/section-two/icon-3.png' ?>" alt="">
          </div>
          <div>
            <p>地域や国、文化の異なる人たちとの交流を <br> 通して多様性を体感する機会</p>
            <p>Opportunities to experience diversity through interactions <br> with people from different regions, countries and cultures</p>
          </div>
        </div>

        <div class="flex gap-25 donation-details slideup">
          <div>
            <img src="<?php echo RESNPO_URI . '/assets/image/donation/section-two/icon-4.png' ?>" alt="">
          </div>
          <div>
            <p>あたり前のことをあたり前のことではないと<br>気づき感謝することができる心を育む機会</p>
            <p>An opportunity to develop a mindset that recognizes <br> and appreciates things that are taken for granted.</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php render_join_section3('BENEFITS', 'ご寄付いただいた方には', '団体よりお礼のお手紙を郵送いたします', '毎年4月末ごろ、前年度の活動報告書をお送りいたします', '支援者ページにお名前を一定期間掲載させていただきます') ?>


  <section id="section_4_don" class="section_4_don">
    <div class="title-top relative">
      <p class="w-600 p-150 text-center relative">HOW TO HELP</p>
      <p class="w-900 p-60 light-blue absolute scaleIn">お気持ちにあった寄付をお選びください</p>
    </div>

    <div class="payment-container">
      <div class="flex gap-15 btn-payment-container">
        <div>
          <a href="#A" data-hash="A" class="hash-donation "><button class="tab-btn-donation">
              <p>毎月寄付をする</p>
            </button></a>
        </div>
        <div>
          <a href="#B" data-hash="B" class="hash-donation"><button class="tab-btn-donation">
              <p>1回の寄付をする</p>
            </button></a>
        </div>
        <div>
          <a href="#C" data-hash="C" class="hash-donation"><button class="tab-btn-donation">
              <p>物品の寄付をする</p>
            </button></a>
        </div>
      </div>

      <!-- TAB 1 -->
      <div class="detail-payment-container tab" id="A">
        <div class="text-center first-payment-section">
          <p class="p-15">私たちと一緒に子どもたちの成長を見守りませんか？<br>毎月1,000円～継続的にご寄付いただけます。</p>
          <button>
            <p>お使いいただけるカード</p>
          </button>
          <div>
            <img src="<?php echo RESNPO_URI . '/assets/image/donation/last-section/img-1.png' ?>" alt="">
          </div>
          <p class="p-15">金額ボタンを押すとお申込画面に移動します。</p>
        </div>
        <div class="second-payment-section">
          <ul class="flex ul-first-payment gap-15">
            <li>
              <button>
                <p class="w-600 p-25">3,000円/月</p>
              </button>
            </li>
            <li>
              <button>
                <p class="w-600 p-25">10,000円/月</p>
              </button>
            </li>
          </ul>
          <ul class="flex ul-second-payment gap-15">
            <li>
              <button>
                <p class="w-600">1,000円/月</p>
              </button>
            </li>
            <li>
              <button>
                <p class="w-600">5,000円/月</p>
              </button>
            </li>
            <li>
              <button>
                <p class="w-600">30,000円/月</p>
              </button>
            </li>
            <li>
              <button>
                <p class="w-600">50,000円/月</p>
              </button>
            </li>
            <li>
              <button>
                <p class="w-600">100,000円/月</p>
              </button>
            </li>
          </ul>
        </div>

        <div class="third-payment-section">
          <p>
            ※経費を削減し、皆様のお気持ちを少しでも多く子どもたちのための活動に使用させていただく
            ために、カードでのお手続きにご協力をお願いいたします。。
          </p>
          <p>
            銀行振込での毎月寄付をご検討の方は、お問い合わせフォームよりご相談ください。
          </p>
          <a href="<?php echo get_site_url() . '/contact' ?>">
            <p class="sub-head-clr">❯ 問合せフォーム</p>
          </a>
        </div>

      </div>

      <!-- TAB 2 -->
      <div class="detail-payment-container tab hidden" id="B">
        <div class="text-center first-payment-section">
          <p class="p-15">私たちと一緒に子どもたちの成長を見守りませんか？<br>毎月1,000円～継続的にご寄付いただけます。</p>
          <a href="">
            <button>
              <p>お使いいただけるカード</p>
            </button></a>
          <div>
            <img src="<?php echo RESNPO_URI . '/assets/image/donation/last-section/img-1.png' ?>" alt="">
          </div>
          <p class="p-15">金額ボタンを押すとお申込画面に移動します。</p>
        </div>
        <div class="second-payment-section">
          <ul class="flex ul-first-payment gap-15">
            <li>
              <a href="">
                <button>
                  <p class="w-600 p-25 price-button">3,000円</p>
                </button></a>
            </li>
            <li>
              <a href=""><button>
                  <p class="w-600 p-25">10,000円</p>
                </button></a>
            </li>
          </ul>
          <ul class="flex ul-second-payment gap-15">
            <li>
              <a href=""><button>
                  <p class="w-600">1,000円</p>
                </button></a>
            </li>
            <li>
              <a href=""><button>
                  <p class="w-600">5,000円</p>
                </button></a>
            </li>
            <li>
              <a href=""><button>
                  <p class="w-600">30,000円</p>
                </button></a>
            </li>
            <li>
              <a href=""><button>
                  <p class="w-600">50,000円</p>
                </button></a>
            </li>
            <li>
              <a href=""><button>
                  <p class="w-600">100,000円</p>
                </button></a>
            </li>
          </ul>
        </div>

        <div class="third-payment-section">
          <p>
            ※経費を削減し、皆様のお気持ちを少しでも多く子どもたちのための活動に使用させていただく
            ために、カードでのお手続きにご協力をお願いいたします。。
          </p>
          <p>
            銀行振込での毎月寄付をご検討の方は、お問い合わせフォームよりご相談ください。
          </p>
          <a href="<?php echo get_site_url() . '/contact' ?>">
            <p class="sub-head-clr">❯ 問合せフォーム</p>
          </a>
        </div>

      </div>

      <!-- TAB 3 -->
      <div class="detail-payment-container tab hidden" id="C">
        <div class="third-tab">
          <p class="p-15 text-center">以下のようなモノを寄付として受け付けております。</p>

          <ul class="flex donation-items">
            <li>
              <img src="<?php echo RESNPO_URI . '/assets/image/donation/last-section/tab-img1.png' ?>" alt="">
              <p class="w-800 p-18 item-title">文具</p>
              <p class="p-14 item-desc">鉛筆、ペン、ボールペン、クレヨン、クレパス、消しゴム、ノート、定規、コンパス、ホチキス</p>
            </li>
            <li>
              <img src="<?php echo RESNPO_URI . '/assets/image/donation/last-section/tab-img2.png' ?>" alt="">
              <p class="w-800 p-18 item-title">絵本</p>
              <p class="p-14 item-desc">日本語の絵本、英語の絵本</p>
            </li>
            <li>
              <img src="<?php echo RESNPO_URI . '/assets/image/donation/last-section/tab-img3.png' ?>" alt="">
              <p class="w-800 p-18 item-title">不用品</p>
              <p class="p-14 item-desc">食器、電化製品、調理器具、アクセサリー、靴、スポーツ用品、バッグ、インテリア雑貨、工具、楽器</p>
            </li>
            <li>
              <img src="<?php echo RESNPO_URI . '/assets/image/donation/last-section/tab-img4.png' ?>" alt="">
              <p class="w-800 p-18 item-title">医療品</p>
              <p class="p-14 item-desc">ばんそうこう、包帯、ガーゼ、綿棒、マスク、救急箱、血圧計、車椅子</p>
            </li>
            <li>
              <img src="<?php echo RESNPO_URI . '/assets/image/donation/last-section/tab-img5.png' ?>" alt="">
              <p class="w-800 p-18 item-title">ぬいぐるみおもちゃ</p>
              <p class="p-14 item-desc">ディズニーなどのアニメキャラクター、テディベアなどの動物類、トミカ、プラレール</p>
            </li>
            <li>
              <img src="<?php echo RESNPO_URI . '/assets/image/donation/last-section/tab-img6.png' ?>" alt="">
              <p class="w-800 p-18 item-title">銀・プラチナ・金</p>
              <p class="p-14 item-desc">イヤリング、ピアス、ネックレス、指輪、ブレスレット、コイン ※片方だけでもOK</p>
            </li>
            <li>
              <img src="<?php echo RESNPO_URI . '/assets/image/donation/last-section/tab-img7.png' ?>" alt="">
              <p class="w-800 p-18 item-title">商品券</p>
              <p class="p-14 item-desc">イヤリング、ピアス、ネックレス、指輪、ブレスレット、コイン</p>
            </li>
          </ul>


          <div class="shipping-address">
            <div>
              <p class="label">発送先</p>
            </div>
            <div class="address">
              <strong>
                <p>NPO法人RES NPO法人RES 物流センター（事務太郎内） </p>
              </strong>
              <p>〒790-0951</p>
              <p>愛媛県松山市天山3丁目9-30</p>
              <p>TEL：089-933-1774</p>
              <br>
              <p>※発送時の<label class="hl-red">事前連絡は不要</label>です。</p>
              <p>※<label for="" class="hl-red">送料は寄付者様にご負担いただきます。</label>ご了承ください。</p>
            </div>
          </div>

          <div class="donation-received">
            <p class="label">～今までにいただいたご寄付の一例～</p>
            <ul class="donation-receive-items">
              <li>
                <img src="<?php echo RESNPO_URI . '/assets/image/donation/last-section/tab-img8.jpg' ?>" alt="">
                <p class="title">愛媛県　O様</p>
              </li>
              <li>
                <img src="<?php echo RESNPO_URI . '/assets/image/donation/last-section/tab-img9.jpg' ?>" alt="">
                <p class="title">愛媛県　Ｙ様</p>
              </li>
              <li>
                <img src="<?php echo RESNPO_URI . '/assets/image/donation/last-section/tab-img10.jpg' ?>" alt="">
                <p class="title">愛媛県　M様</p>
              </li>
            </ul>
          </div>

        </div>


      </div>
  </section>
</div>
<?php get_footer() ?>