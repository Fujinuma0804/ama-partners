
<?php 
    get_header();
?>
    
    <main class="main-content">
      <section class="hero-section">
        <div class="hero-container">
          <div class="hero-content">
            <h1 class="hero-title">
              <span class="highlight">数字</span>を整え、<span class="highlight"
                >心</span
              >を整え、<br />
              <span class="highlight">組織</span>を<span class="highlight"
                >前進</span
              >させる
            </h1>
            <p class="hero-subtitle">
              国際・企業会計の専門知を軸に、経営と人間への深い洞察で、<br />
              組織のしなやかな強さを育む。組織と人に、ゆるぎない確信を。<br />
              伴走型・統合アドバイザリー。
            </p>
            <!-- <div class="hero-buttons">
            <a href="#" class="hero-btn hero-btn-dark">サービスを見る &nbsp;&rarr;</a>
            <a href="#" class="hero-btn hero-btn-light">プロフィールを見る &nbsp;&rarr;</a>
          </div> -->
            <div class="btn-wrapper">
              <button class="glass-btn light" onclick="window.location.href='<?php echo home_url('/services'); ?>'">
                <span class="btn-label">サービスを見る</span>
                <span class="arrow">→</span>
              </button>

              <button class="glass-btn light" onclick="window.location.href='<?php echo home_url('/profile'); ?>'">
                <span class="btn-label">プロフィールを見る</span>
                <span class="arrow">→</span>
              </button>
            </div>
          </div>

          <div class="hero-image-wrapper">
            <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/wave.png"
              alt="Maiko Ariizumi"
              class="hero-person-img"
              onerror="
                this.src =
                  'https://via.placeholder.com/600x800?text=Insert+Image+Here'
              "
            />
            <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/lady.png"
              alt="lady"
              class="hero-person-main"
              onerror="
                this.src =
                  'https://via.placeholder.com/600x800?text=Insert+Image+Here'
              "
            />
          </div>
        </div>
      </section>
      <!-- Personal Message Section -->
         <section class="personal-message-section">
        <div class="message-container">
          <div style="margin: 0 auto">
            <div class="message-content">
              <h2 class="message-label">Personal Message</h2>
              <h1 class="message-title">なぜ、<span class="highlight">数字</span>と<span class="highlight">心</span>の両方を見るのか</h1>

              <p class="message-text">
                企業の成長は、数字に現れます。<br />
                しかし、その数字を生み出すのは「人」です。<br />
                監査法人、事業会社、コンサルティング。
              </p>

              <p class="message-text">
                異なる立場を経験する中で感じたのは、<br />
                意思決定を担う人の思考や葛藤が、組織の未来を左右するということでした。<br />
              </p>

              <p class="message-text">
                だからこそ私は、財務構造だけでなく、<br />
                その奥にある価値観やリーダーの在り方まで扱います。
              </p>
            </div>
          </div>

          <div class="message-decorations">
            <!-- <div class="circle circle-1"></div>
                    <div class="circle circle-2"></div>
                    <div class="circle circle-3"></div> -->
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dots.png" alt="circle" />
          </div>
        </div>
      </section>     

      <!-- Strength Section -->
      <section class="strength-section">
        <div class="strength-container">
          <div class="strength-header">
            <h1 class="strength-title">
              3つの強み <span class="highlight">Strength</span>
            </h1>
          </div>

          <div class="strength-items">
            <div class="strength-item">
              <div class="strength-item-size">
                <div class="strength-number">01</div>
                <div class="strength-content">
                  <div class="strength-label-box">
                    数字と人を同時に扱う、統合型の視点
                  </div>
                  <p class="strength-description">
                    国際・企業会計の専門知に加え、意思決定を担う「人」の内面にも向き合う。<br />
                    数字だけでなく、感情・価値観・関係性まで含めて組織を見る、統合型のアプローチ。
                  </p>
                </div>
              </div>
            </div>

            <div class="strength-item">
              <div class="strength-item-size">
                <div class="strength-number">02</div>
                <div class="strength-content">
                  <div class="strength-label-box">
                    グローバル環境で培った実践的マネジメント経験
                  </div>
                  <p class="strength-description">
                    日本と英国を拠点に、多国籍チームや海外子会社を統括してきた実務経験。<br />
                    理論ではなく、現場で磨かれた感覚で、複雑な組織課題に対応します。
                  </p>
                </div>
              </div>
            </div>

            <div class="strength-item">
              <div class="strength-item-size">
                <div class="strength-number">03</div>
                <div class="strength-content">
                  <div class="strength-label-box">
                    組織の閉塞感をほどき、自走を促す「伴走型」支援
                  </div>
                  <p class="strength-description">
                    単発のアドバイスではなく、対話を重ねながら本質的な変化を支える伴走スタイル。<br />
                    組織と人が、自らの力で前進できる状態を共につくります。
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="services-section">
        <div class="service-title">
          <span> Service </span>
          <h2>提供サービス</h2>
        </div>
        <div class="services-main-content">
          <img
            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/services-main.png"
            alt="services"
            class="services-image"
          />
        </div>
        <button class="neo-btn" onclick="window.location.href='<?php echo home_url('/services'); ?>'">
          <span class="btn-title">サービスを見る</span>
          <span class="arrow">→</span>
        </button>
      </section>

      <!-- Quiet Moments Section -->
      <section class="personal-message-section">
        <div class="message-container">
          <div style="margin: 0 auto">
            <div class="message-content">
              <h2 class="message-label">In the Quiet Moments</h2>
              <h1 class="message-title">ライフワーク</h1>

              <p class="message-text">
                英国でのゴルフは、私にとって思考を整える時間です。 <br />
                自然の中で、数字から離れ、再び本質に立ち戻る。<br />
                そんな英国でのゴルフと気づきを発信しています。
              </p>
              <div class="quiet-moments-buttons">
                <a href="https://note.com/maichi77" class="qm-btn">
                  <span class="qm-text">Note</span>
                  <span class="qm-arrow">→</span>
                </a>
                <a href="https://www.instagram.com/maichi77.a?igsh=a3RsOXQ3bG95cWh4" class="qm-btn">
                  <span class="qm-text">Instagram</span>
                  <span class="qm-arrow">→</span>
                </a>
              </div>
            </div>
          </div>

          <div class="message-decorations">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Quiet.png" alt="circle" />
          </div>
        </div>
      </section>


<?php
    get_footer(); 
?>
