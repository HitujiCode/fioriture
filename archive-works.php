<?php get_header(); ?>

<main class="l-main">

  <div class="p-sub-fv">
    <?php if (function_exists('bcn_display')) { ?>
      <div class="p-sub-fv__breadcrumb c-breadcrumb top-breadcrumb">
        <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
          <?php bcn_display(); ?>
        </div>
      </div>
    <?php } ?>
    <?php get_template_part("parts/fv"); ?>
  </div>

  <?php
  $worksItems = [
    [
      'img' => 'assets/images/common/noimage@2x.webp',
      'label' => 'ソロ',
      'text' => '鈴木様（仮）の撮影',
    ],
    [
      'img' => 'assets/images/common/noimage@2x.webp',
      'label' => 'エイジングカップル',
      'text' => '稲葉様（仮）の撮影',
    ],
  ] ?>
  <div class="p-archive-works l-common">
    <div class="p-archive-works__inner l-inner">
      <div class="p-archive-works__title">
        <div class="c-head">
          <h2 class="c-head__main">通常の撮影</h2>
          <span class="c-head__sub">（同性、エイジング、再婚、ソロ、2次元、コスプレ、ロケーション）</span>
        </div>
      </div>
      <div class="p-archive-works__content">
        <ul class="p-cards">
          <?php foreach ($worksItems as $item) : ?>
            <li class="p-cards__item">
              <a href="#" class="p-card">
                <div class="p-card__img">
                  <img src="<?php echo esc_url(get_theme_file_uri($item['img'])); ?>" alt="" width="" height="" loading="lazy" />
                </div>
                <div class="p-card__body">
                  <p class="p-card__category"><?php echo esc_html($item['label']); ?></p>
                  <p class="p-card__title"><?php echo esc_html($item['text']); ?></p>
                </div>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>

  <?php
  $worksItems = [
    [
      'img' => 'assets/images/common/noimage@2x.webp',
      'label' => '十三詣り',
      'text' => '丸山様（仮）の撮影',
    ],
  ] ?>
  <div class="p-archive-works l-common">
    <div class="p-archive-works__inner l-inner">
      <div class="p-archive-works__title">
        <div class="c-head">
          <h2 class="c-head__main">十三詣り</h2>
        </div>
      </div>
      <div class="p-archive-works__content">
        <ul class="p-cards">
          <?php foreach ($worksItems as $item) : ?>
            <li class="p-cards__item">
              <a href="#" class="p-card">
                <div class="p-card__img">
                  <img src="<?php echo esc_url(get_theme_file_uri($item['img'])); ?>" alt="" width="" height="" loading="lazy" />
                </div>
                <div class="p-card__body">
                  <p class="p-card__category"><?php echo esc_html($item['label']); ?></p>
                  <p class="p-card__title"><?php echo esc_html($item['text']); ?></p>
                </div>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
        <div class="p-works__button">
          <a class="c-button" href="#"><span>top</span></a>
        </div>
      </div>
    </div>
  </div>

  <?php get_template_part("parts/contact") ?>
</main>

<?php get_footer(); ?>