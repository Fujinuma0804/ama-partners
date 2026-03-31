<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AMA Partners Global</title>
    <meta name="description" content="有泉麻依子の公式サイト。サービス内容、プロフィール、実績をご紹介しています。お問い合わせはこちらから。">
    <meta property="og:title" content="有泉 麻依子 | 公式サイト">
    <meta property="og:description" content="有泉麻依子の公式サイト。サービス内容、プロフィール、実績をご紹介。">
    <meta property="og:url" content="https://maikoariizumi.com/">
    <meta property="og:type" content="website">
    <link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon.png">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <?php wp_head(); ?> 
  </head>

  <body>
    <!-- Header Component -->
    <header class="site-header">
        <div class="header-container">
            <!-- Logo Area -->
            <a href="index.html" class="logo-area">
                <div class="logo-icon">
                    <!-- Example Logo Placeholder like AMA -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo.png" alt="logo" />
                </div>
                <!-- <div class="logo-text">
                    <span class="logo-title">AMA PARTNERS GLOBAL</span>
                    <span class="logo-title sub">BY MAIKO ARIIZUMI</span>
                </div> -->
            </a>

            <nav class="desktop-nav">
                <a href="<?php echo home_url(); ?>">Home</a>
                <a href="<?php echo site_url();?>/services">Service</a>
                <a href="<?php echo site_url();?>/profile">Profile</a>
                <a href="<?php echo site_url();?>/contact">お問い合わせ &rarr;</a>
            </nav>

            <!-- Hamburger Button (Visible on Mobile) -->
            <button class="hamburger-btn" aria-label="Open Mobile Menu" id="open-menu-btn">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 12H21M3 6H21M3 18H21" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
        </div>
    </header>

    <!-- Mobile Drawer and Overlay -->
    <div class="drawer-overlay" id="drawer-overlay"></div>
    <div class="mobile-drawer" id="mobile-drawer">
        <!-- Drawer Header with Logo and Close Button -->
        <div class="drawer-header">
            <a href="<?php echo home_url(); ?>" class="drawer-logo">
                <a href="<?php echo home_url(); ?>" class="logo-area">
                    <div class="logo-icon">
                        <!-- Example Logo Placeholder like AMA -->
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo.png" alt="logo" />
                    </div>
                    <!-- <div class="logo-text">
                        <span class="logo-title">AMA PARTNERS GLOBAL</span>
                        <span class="logo-title">BY MAIKO ARIIZUMI</span>
                    </div> -->
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
                <a href="<?php echo home_url(); ?>">Home</a>
                <a href="<?php echo site_url();?>/services">Service</a>
                <a href="<?php echo site_url();?>/profile">Profile</a>
                <a href="<?php echo site_url();?>/contact">お問い合わせ &rarr;</a>
        </nav>


    </div>