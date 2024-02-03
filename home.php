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
  // instaの情報を配列に格納
  $caseItems = [
    [
      'img' => 'assets/images/common/noimage@2x.webp',
      'label' => '同性カップル',
      'text' => '目黒様（仮）からのご相談',
    ],
    [
      'img' => 'assets/images/common/noimage@2x.webp',
      'label' => 'エイジングカップル',
      'text' => '小野様（仮）からのご相談',
    ],
    [
      'img' => 'assets/images/common/noimage@2x.webp',
      'label' => '再婚カップル',
      'text' => '稲葉様（仮）からのご相談',
    ],
  ] ?>
  <div class="p-case l-common">
    <div class="p-case__inner l-inner">
      <div class="p-case__title">
        <div class="c-section-title">
          <span class="c-section-title__en">case</span>
          <h2 class="c-section-title__ja">ご相談事例</h2>
          </h1>
        </div>
        <div class="p-case__content">
          <ul class="p-cards">
            <?php foreach ($caseItems as $item) : ?>
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
          <div class="p-case__button">
            <a class="c-button" href="#"><span>top</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php get_template_part('parts/contact'); ?>
</main>

<?php get_footer(); ?>