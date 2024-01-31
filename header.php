<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="p-header js-header">
    <?php if (is_front_page()) :
    ?>
    <div class="p-header__inner">
      <a href="./" class="p-header__logo c-logo">
        <h1 class="c-logo__img">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/logo.svg')); ?>" alt="Logo" width=""
            height="" />
        </h1>
        <?php else : ?>
        <div class="c-logo__img">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/logo.svg')); ?>" alt="Logo" width=""
            height="" />
        </div>
        <?php endif; ?>
      </a>
      <nav class="p-header__nav">
        <ul class="p-header__nav-items">
          <li class="p-header__nav-item">
            <a class="p-header__nav-link" href="./#mission"><span>plan</span></a>
          </li>
          <li class="p-header__nav-item">
            <a class="p-header__nav-link" href="./#service"><span>case</span></a>
          </li>
          <li class="p-header__nav-item">
            <a class="p-header__nav-link" href="./#works"><span>works</span></a>
          </li>
          <li class="p-header__nav-item">
            <a class="p-header__nav-link" href="./#flow"><span>flow</span></a>
          </li>
        </ul>
        <ul class="p-header__sns-icons p-sns-icons">
          <li class="p-sns-icons__item">
            <a href="" target="_blank" rel="noopener noreferrer">
              <img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/instagram.svg')); ?>"
                alt="Instagram" width="" height="" /></a>
          </li>
          <li class="p-sns-icons__item">
            <a href="" target="_blank" rel="noopener noreferrer">
              <img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/x.svg')); ?>" alt="X" width=""
                height="" /></a>
          </li>
          <li class="p-sns-icons__item">
            <a href="" target="_blank" rel="noopener noreferrer">
              <img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/facebook.svg')); ?>" alt="Facebook"
                width="" height="" /></a>
          </li>
        </ul>
      </nav>
      <button class="p-header__hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="p-header__drawer js-drawer">
        <nav class="p-header__drawer-nav">
          <ul class="p-header__drawer-items">
            <li class="p-header__drawer-item">
              <a class="p-header__nav-link" href="./#works"><span>plan</span></a>
            </li>
            <li class="p-header__drawer-item">
              <a class="p-header__nav-link" href="./#flow"><span>case</span></a>
            </li>
            <li class="p-header__drawer-item">
              <a class="p-header__nav-link" href="./#profile"><span>works</span></a>
            </li>
            <li class="p-header__drawer-item">
              <a class="p-header__nav-link" href="./#contact" target="_blank" rel="noopener"><span>flow</span></a>
            </li>
          </ul>
          <ul class="p-header__drawer-icons p-sns-icons">
            <li class="p-sns-icons__item">
              <a href="" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/instagram.svg')); ?>"
                  alt="Instagram" width="" height="" /></a>
            </li>
            <li class="p-sns-icons__item">
              <a href="" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/x.svg')); ?>" alt="X" width=""
                  height="" /></a>
            </li>
            <li class="p-sns-icons__item">
              <a href="" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/facebook.svg')); ?>"
                  alt="Facebook" width="" height="" /></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>