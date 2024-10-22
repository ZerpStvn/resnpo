<?php
/* Template Name: Contact Page */
get_header();
?>



<div id="contactid">
  <!-- donation page -->
  <?php render_join_landing('CONTACT', 'お問い合わせ') ?>

  <section id="contact_section" class="relative">
    <main class="contact-cont global-width">
      <div class="contact-row">
        <h2 class="">電話からのお問い合わせ</h2>
        <h1 class="">089 - 999 - 999</h1>
        <ul>
          <li>※ご返信には3営業日程度いただくことがございます。ご了承ください。 </li>
          <li>※入力いただいた情報は、<span class="sub-head-clr"><a href="<?php echo get_site_url() . '/privacy' ?>">個人情報保護指針に</a></span>もとづいて適正に管理
            <br>・取り扱いをさせていただきます。
          </li>
        </ul>
      </div>
      <div class="contact-row">
        <h2 class="">フォームからのお問い合わせ</h2>
        <ul>
          <li>下記のフォームに入力いただき、お問い合わせください。</li>
          <li> <a href="">※全て必須入力です。</a></li>
        </ul>
      </div>

      <div class="contact-form">
        <form class="edu-contact-form" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post">
          <div class="form-group">
            <label for="company">会社名/組織名</label>
            <input type="text" id="company" name="company" placeholder="例)" required>
          </div>
          <div class="form-group">
            <label for="name">お名前</label>
            <input type="text" id="name" name="name" placeholder="例) 山田 太郎" required>
          </div>
          <div class="form-group">
            <label for="email">メールアドレス</label>
            <input type="email" id="email" name="email" placeholder="例) info@edu-app.com" required>
          </div>
          <div class="form-group">
            <label for="phone">電話番号</label>
            <input type="tel" id="phone" name="phone" placeholder="例) 000-000-000" required>
          </div>
          <div class="form-group">
            <label for="inquiry">お問い合わせ内容</label>
            <textarea rows="20" cols="50" id="inquiry" name="inquiry" required></textarea>
          </div>

          <div class="submit-form">
            <div class="relative btn-container">
              <button type="submit" class="main-button relative">
                送信
              </button>
              <img class="icon-button absolute" src="<?php echo RESNPO_IMAGE . '/leaves.png' ?>" alt="" />
            </div>
          </div>
        </form>
      </div>
    </main>
  </section>
</div>

<?php get_footer(); ?>