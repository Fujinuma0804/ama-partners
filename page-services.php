
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
            <p class="hero-subtitle">Services</p>
          </div>

          <div class="hero-image-wrapper">
            <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/contact.png"
              alt="Maiko Ariizumi"
              class="hero-person-img"
              onerror="
                this.src =
                  'https://via.placeholder.com/600x800?text=Insert+Image+Here'
              "
            />
            <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/lady.png" alt="lady" class="hero-person-main" onerror="
                this.src =
                  'https://via.placeholder.com/600x800?text=Insert+Image+Here'
              " /> -->
          </div>
        </div>
      </section>

      <section class="services-info-section">
        <div class="services-info-container">
          <div class="services-info-wrapper">
            <p class="services-info-subtitle">
              ナレッジ・パートナー型　会計専門アドバイザリー
            </p>
            <p class="services-info-description">
              国際・企業会計の専門知を軸に、必要な期間・ボリュームに応じて、<br />
              意思決定に必要な「数字の整理」と「経理・財務機能の整備」を支援します。<br />
              単なる作業代行ではなく、論点の見える化・仕組み化・ナレッジ継承までを視野に入れ、<br />
              組織が自走できる状態を目指します。
            </p>
          </div>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/services-info.svg" alt="services-info" />
        </div>
      </section>

      <section class="services-description-section">
        <div class="s1-sec">
          <h3>
            エグゼクティブ・コーチング <br />
            組織伴走コーチング
          </h3>
          <p>
            意思決定する人の内面を整え、チームの前進力へつなげる。<br />
            コーポレート部門では、正確さや整合性が求められる一方で、減点主義や過度なリスク回避が空気を硬くし、<br />
            率直な対話が生まれにくくなることがあります。<br />
            結果として、閉塞感やモチベーション低下につながり、組織が前に進みにくくなる<br />
            そんな場面を現場で多く見てきました。
            <br /><br />
            このコーチングは、リーダー個人の内省だけで完結させず、チームの関係性・期待値・対話の質まで含めて<br />
            整えることで、組織がしなやかに前進できる状態をつくります。
          </p>
        </div>
        <div class="horizontal-line-with-circle"></div>
        <div class="s2-sec">
          <h3>こんなテーマに</h3>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/info-2.png" alt="info-2" />
        </div>
      </section>

      <section class="info-table-section">
        <div class="table-container">
          <table class="custom-table">
            <thead>
              <tr>
                <th>対象</th>
                <th>進め方（例）</th>
                <th>得られる状態</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  ・経営者/役員/管理部門/リーダー層<br />
                  ・コーポレート部門（Finance/Accounting/Tax/Legal/HR等）で責任を担う方<br />
                  ・グローバル領域で意思決定を担う方
                </td>
                <td>
                  ・1on1（オンライン中心）<br />
                  ・必要に応じて、関係者とアリングや論点整理を組み合わせ（対面想定）<br />
                  ・セッション間は、簡易メモで気づきと論点を整理
                </td>
                <td>
                  ・判断の軸が明確になり、迷いが減る<br />
                  ・本質的な論点に集中し、チームが前進できる<br />
                  ・短期と中長期の両方で成果を出すための次の一手を選べる
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <section class="seminar-section">
        <div class="seminar-container">
          <h3>セミナー・講演</h3>
          <p class="seminar-text">
            数字と人をつなぎ、組織の意思決定を強くする。
            <br /><br />
            会計・財務・ガバナンスの「理解」は、組織を守り、前に進める力になります。<br />
            一方で、コーポレート部門では減点主義やリスク回避が空気を硬くし、学びが“守りのため”<br />
            だけに使われてしまうこともあります。<br />
            また、新人社員にとって作業重視になりがちで、全体像が把握しにくくモチベーションの低下につながる場合があります。<br />
            本セミナーでは、数字の読み解きと意思決定の整理に加え、<br />
            現場で実装できる対話・運用の視点を交え、組織がしなやかに強くなるための土台を整えます。
          </p>

          <div class="seminar-decorations">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/seminar.png" alt="circle" />
          </div>
        </div>
      </section>

      <section class="theme-section">
        <h3>こんなテーマに</h3>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/theme.svg" alt="theme" />
      </section>
      <section class="subject-section">
        <div class="subject-title">
          <h3>対象</h3>
        </div>
        <div class="subject-description">
          <p>
            ・経営層/管理職/コーポレート部門　・次世代リーダー育成、組織の土台づくり<br />
            ・海外拠点や多国籍チームを抱える組織　・ガバナンスや不正予防を「仕組み」と「文化」両面で強化したい組織<br />
          </p>
        </div>

        <!-- <img
          class="subject-table"
          src="<?php echo get_stylesheet_directory_uri(); ?>/assets/subject-table.svg"
          alt="subject"
        /> -->

        <div class="subject-table-services">
  <!-- Decorative Circles -->
  <div class="subject-table-services__circle subject-table-services__circle--left"></div>
  <div class="subject-table-services__circle subject-table-services__circle--right"></div>

  <div class="subject-table-services__wrapper">
    <h2 class="subject-table-services__title">主なテーマ例</h2>

    <div class="subject-table-services__table">
      
      <!-- Row 1 -->
      <div class="subject-table-services__row">
        <div class="subject-table-services__label">
          <span>
          ガバナンスと
           </span><br />
           <span>
          不正予防（仕組み × 文化）
        </span>
        </div>
        <div class="subject-table-services__content">
          不正が起きる「構造」と「心理（なぜ起こるか）」の両面から再発防止を考える設計<br />
          「言いにくいことが言える文化」と心理的安全性の実務的つくり方
        </div>
      </div>

      <!-- Row 2 -->
      <div class="subject-table-services__row">
        <div class="subject-table-services__label">
          <span>
          対話と合意形成
        </span><br />
        <span>
          （チームを前進させる）
        </span>
        </div>
        <div class="subject-table-services__content">
          減点主義や過度なリスク回避で停滞した場をほどく<br />
          期待値のズレ・役割の曖昧さを言語化する多様性のあるチームでの意思決定と推進
        </div>
      </div>

      <!-- Row 3 -->
      <div class="subject-table-services__row">
        <div class="subject-table-services__label">
          <span>
          新人研修
        </span>
        </div>
        <div class="subject-table-services__content">
          会社のお金の流れ・会計の全体像（点ではなく“線”で理解する）<br />
          コーポレート部門の役割と、他部門とのつながり<br />
          「ミスをしない」から一歩進む、仕事の価値の捉え方
        </div>
      </div>

    </div>
  </div>
</div>

        <div class="participating-main-wrapper">
          <div class="participating-section">
            <p>
              ・組織課題を「数字」と「人」の両面から整理する共通言語ができる<br />
              ・ガバナンス・不正予防を“運用できる形”で理解できる<br />
              ・コーポレート部門が前向きに機能するための具体的な打ち手が見える
            </p>
            <div class="fancy-circle">
              <h3>
                参加後に<br />
                得られること
              </h3>
            </div>
          </div>
        </div>
      </section>

      <?php
    get_footer(); 
?>