<?php 
    get_header();
?>

  <!-- Mobile Drawer and Overlay -->
  <div class="drawer-overlay" id="drawer-overlay"></div>
  <div class="mobile-drawer" id="mobile-drawer">
      <!-- Drawer Header with Logo and Close Button -->
      <div class="drawer-header">
          <a href="index.html" class="drawer-logo">
              <a href="index.html" class="logo-area">
                  <div class="logo-icon">
                      <!-- Example Logo Placeholder like AMA -->
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/main-logo.svg" alt="logo" />
                  </div>
                  <div class="logo-text">
                      <span class="logo-title">AMA PARTNERS GLOBAL</span>
                      <span class="logo-title">BY MAIKO ARIIZUMI</span>
                  </div>
              </a>
          </a>
          <button class="close-btn" aria-label="Close Mobile Menu" id="close-menu-btn">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" />
              </svg>
          </button>
      </div>

      <nav class="mobile-nav">
          <a href="index.html">Home</a>
          <a href="services.html">Service</a>
          <a href="profile.html">Profile</a>
          <a href="contact.html">お問い合わせ &rarr;</a>
      </nav>


  </div>
  <main class="main-content profile-section">
  <section class="hero-section contact">
      <div class="hero-container">
        <div class="hero-content">

          <p class="hero-subtitle">
            Contact
          </p>
        </div>

        <div class="hero-image-wrapper">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/contact.png" alt="Maiko Ariizumi" class="hero-person-img" onerror="
                this.src =
                  'https://via.placeholder.com/600x800?text=Insert+Image+Here'
              " />
          <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/lady.png" alt="lady" class="hero-person-main" onerror="
                this.src =
                  'https://via.placeholder.com/600x800?text=Insert+Image+Here'
              " /> -->
        </div>
      </div>
    </section>

 <section class="flow-section">
    <p class="flow-label">Flow</p>
    <h2 class="flow-title">ご相談から支援開始までの<strong>流れ</strong></h2>
 
    <div class="steps-track">
 
      <!-- Step 01 -->
      <div class="step">
        <div class="step-circle">
          <span class="step-word">atep</span>
          <span class="step-num">01</span>
        </div>
        <p class="step-label">問い合わせフォーム</p>
      </div>
 
      <!-- Arrow -->
      <div class="connector">
        <!-- <svg viewBox="0 0 24 42" fill="none" xmlns="http://www.w3.org/2000/svg">
          <polyline points="2,2 22,21 2,40" stroke="#1e2a4a" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
        </svg> -->
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/arrow.svg" alt="arrow" />
      </div>
 
      <!-- Step 02 -->
      <div class="step">
        <div class="step-circle">
          <span class="step-word">atep</span>
          <span class="step-num">02</span>
        </div>
        <p class="step-label">初回オンライン面談</p>
      </div>
 
      <!-- Arrow -->
      <div class="connector">
        <!-- <svg viewBox="0 0 24 42" fill="none" xmlns="http://www.w3.org/2000/svg">
          <polyline points="2,2 22,21 2,40" stroke="#1e2a4a" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
        </svg> -->
         <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/arrow.svg" alt="arrow" />
      </div>
 
      <!-- Step 03 -->
      <div class="step">
        <div class="step-circle">
          <span class="step-word">atep</span>
          <span class="step-num">03</span>
        </div>
        <p class="step-label">課題ヒアリング</p>
      </div>
 
      <!-- Arrow -->
      <div class="connector">
        <!-- <svg viewBox="0 0 24 42" fill="none" xmlns="http://www.w3.org/2000/svg">
          <polyline points="2,2 22,21 2,40" stroke="#1e2a4a" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
        </svg> -->
         <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/arrow.svg" alt="arrow" />
      </div>
 
      <!-- Step 04 -->
      <div class="step">
        <div class="step-circle">
          <span class="step-word">atep</span>
          <span class="step-num">04</span>
        </div>
        <p class="step-label">ご提案</p>
      </div>
 
      <!-- Arrow -->
      <div class="connector">
        <!-- <svg viewBox="0 0 24 42" fill="none" xmlns="http://www.w3.org/2000/svg">
          <polyline points="2,2 22,21 2,40" stroke="#1e2a4a" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
        </svg> -->
         <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/arrow.svg" alt="arrow" />
      </div>
 
      <!-- Step 05 -->
      <div class="step">
        <div class="step-circle">
          <span class="step-word">atep</span>
          <span class="step-num">05</span>
        </div>
        <p class="step-label">個別支援開始</p>
      </div>
 
    </div>
  </section>

     <section class="intro-section contact-page">
        <header class="page-header">
      <span class="section-label">Contact</span>
      <h1 class="page-title">お問い合わせフォーム</h1>
    </header>
 
    <!-- Card -->
     <div class="card-main-wrapper">
    <div class="card">
      <form class="contact-form" novalidate>
 
        <!-- お名前 -->
        <div class="form-group">
          <div class="form-label-wrap">
            <label class="form-label" for="name">お名前</label>
            <span class="badge-required" aria-label="必須">必須</span>
          </div>
          <div class="form-control-wrap">
            <input type="text" id="name" name="name" autocomplete="name" required />
          </div>
        </div>
 
        <!-- メールアドレス -->
        <div class="form-group">
          <div class="form-label-wrap">
            <label class="form-label" for="email">メールアドレス</label>
            <span class="badge-required" aria-label="必須">必須</span>
          </div>
          <div class="form-control-wrap">
            <input type="email" id="email" name="email" autocomplete="email" required />
          </div>
        </div>
 
        <!-- 電話番号 -->
        <div class="form-group">
          <div class="form-label-wrap">
            <label class="form-label" for="phone">電話番号</label>
            <span class="badge-required" aria-label="必須">必須</span>
          </div>
          <div class="form-control-wrap">
            <input type="tel" id="phone" name="phone" autocomplete="tel" required />
          </div>
        </div>
 
        <!-- 郵便番号 -->
        <div class="form-group">
          <div class="form-label-wrap">
            <label class="form-label" for="postal">郵便番号</label>
            <span class="badge-required" aria-label="必須">必須</span>
          </div>
          <div class="form-control-wrap">
            <input type="text" id="postal" name="postal" class="input-postal" autocomplete="postal-code" required />
          </div>
        </div>
 
        <!-- ご相談内容 -->
        <div class="form-group">
          <div class="form-label-wrap">
            <label class="form-label" for="message">ご相談内容</label>
            <span class="badge-required" aria-label="必須">必須</span>
          </div>
          <div class="form-control-wrap">
            <textarea id="message" name="message" required></textarea>
          </div>
        </div>
 
        <!-- Privacy Policy Checkbox -->
        <div class="checkbox-row">
          <input type="checkbox" id="privacy" name="privacy" required />
          <label class="checkbox-label" for="privacy">
            <a class="privacy-link" href="#">プライバシーポリシー</a>に同意する
          </label>
        </div>
 
        <!-- Submit -->
        <button type="submit" class="btn-submit">
          <span class="btn-text">送信する</span>
          <span class="arrow" aria-hidden="true">→</span>
        </button>
 
      </form>
    </div>
</div>

<?php
    get_footer(); 
?>
