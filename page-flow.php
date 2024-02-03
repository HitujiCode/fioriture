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
  <!-- 通常の撮影の流れ -->
  <section class="p-sub-flow l-common">
    <?php $flowItems1 = [
      [
        'num' => '01',
        'title' => 'ご予約',
        'text' => '撮影のご予約やお問合せ、インタビューのご予約は、お電話やWEB予約からお願いします。相談、要望をお伺いします。',
      ],
      [
        'num' => '02',
        'title' => 'カウンセリング',
        'text' => 'ロケーション決めや衣装選びなど、ご要望をお聞きし最適なご提案をいたします。一緒に素敵な撮影にしましょう！',
      ],
      [
        'num' => '03',
        'title' => '撮影当日',
        'text' => '支度場所にお越しいただき、ヘアメイク・着付けをさせて頂いた後、撮影場所へのご移動(ヘアメイク同伴)となります。',
      ],
      [
        'num' => '04',
        'title' => 'お振込',
        'text' => 'ご請求書をメールにてお送りしますので、撮影から2週間以内に指定の口座にお振込をお願いします。',
      ],
      [
        'num' => '05',
        'title' => '納品',
        'text' => 'データはDVDにて約3週間以内、アルバムは2ヶ月以内にお届けいたします。早めの納品も対応できますのでご相談ください。',
      ],
    ] ?>
    <div class="p-sub-flow__inner l-inner">
      <div class="p-sub-flow__head">
        <div class="c-head">
          <h2 class="c-head__main">通常の撮影の流れ</h2>
          <span class="c-head__sub">（同性、エイジング、再婚、ソロ、2次元、コスプレ、ロケーション）</span>
        </div>
      </div>
      <div class="p-sub-flow__swiper-wrap">
        <div class="p-sub-flow__swiper swiper js-flow-swiper1">
          <ol class="p-sub-flow__list p-flow-list swiper-wrapper">
            <?php foreach ($flowItems1 as $item) : ?>
              <li class="p-flow-list__item swiper-slide">
                <div class="p-flow-list__item-number"><span data-num="<?php echo esc_html($item['num']); ?>">step</span></div>
                <h3 class="p-flow-list__item-title"><?php echo esc_html($item['title']); ?></h3>
                <p class="p-flow-list__item-text"><?php echo esc_html($item['text']); ?></p>
              </li>
            <?php endforeach; ?>
          </ol>
          <!-- 前後の矢印 -->
          <div class="p-sub-flow__button-prev swiper-button-prev"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/arrow-prev.svg')); ?>" alt="" width="" height="" loading="lazy" /></div>
          <div class="p-sub-flow__button-next swiper-button-next"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/arrow-next.svg')); ?>" alt="" width="" height="" loading="lazy" /></div>
        </div>
        <!-- ページネーション -->
        <div class="p-sub-flow__pagination swiper-pagination"></div>
      </div>
    </div>
  </section>

  <!-- 十三詣りの撮影の流れ -->
  <section class="p-sub-flow l-common">
    <?php $flowItems1 = [
      [
        'num' => '01',
        'title' => 'ご予約',
        'text' => '撮影のご予約やお問合せ、インタビューのご予約は、お電話やWEB予約からお願いします。相談、要望をお伺いします。',
      ],
      [
        'num' => '02',
        'title' => 'カウンセリング',
        'text' => 'ロケーション決めや衣装選びなど、ご要望をお聞きし最適なご提案をいたします。一緒に素敵な撮影にしましょう！',
      ],
      [
        'num' => '03',
        'title' => '撮影当日',
        'text' => '支度場所にお越しいただき、ヘアメイク・着付けをさせて頂いた後、撮影場所へのご移動(ヘアメイク同伴)となります。',
      ],
      [
        'num' => '04',
        'title' => 'お振込',
        'text' => 'ご請求書をメールにてお送りしますので、撮影から2週間以内に指定の口座にお振込をお願いします。',
      ],
      [
        'num' => '05',
        'title' => '納品',
        'text' => 'データはDVDにて約3週間以内、アルバムは2ヶ月以内にお届けいたします。早めの納品も対応できますのでご相談ください。',
      ],
    ] ?>
    <div class="p-sub-flow__inner l-inner">
      <div class="p-sub-flow__head">
        <div class="c-head">
          <h2 class="c-head__main">通常の撮影の流れ</h2>
          <span class="c-head__sub">（同性、エイジング、再婚、ソロ、2次元、コスプレ、ロケーション）</span>
        </div>
      </div>
      <div class="p-sub-flow__swiper-wrap">
        <div class="p-sub-flow__swiper swiper js-flow-swiper2">
          <ol class="p-sub-flow__list p-flow-list swiper-wrapper">
            <?php foreach ($flowItems1 as $item) : ?>
              <li class="p-flow-list__item swiper-slide">
                <div class="p-flow-list__item-number"><span data-num="<?php echo esc_html($item['num']); ?>">step</span></div>
                <h3 class="p-flow-list__item-title"><?php echo esc_html($item['title']); ?></h3>
                <p class="p-flow-list__item-text"><?php echo esc_html($item['text']); ?></p>
              </li>
            <?php endforeach; ?>
          </ol>
          <!-- 前後の矢印 -->
          <div class="p-sub-flow__button-prev swiper-button-prev"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/arrow-prev.svg')); ?>" alt="" width="" height="" loading="lazy" /></div>
          <div class="p-sub-flow__button-next swiper-button-next"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/arrow-next.svg')); ?>" alt="" width="" height="" loading="lazy" /></div>
        </div>
        <!-- ページネーション -->
        <div class="p-sub-flow__pagination swiper-pagination"></div>
      </div>
    </div>
  </section>

  <!-- ドローンの撮影の流れ -->
  <section class="p-sub-flow l-common">
    <?php $flowItems1 = [
      [
        'num' => '01',
        'title' => 'ご予約',
        'text' => '撮影のご予約やお問合せ、インタビューのご予約は、お電話やWEB予約からお願いします。相談、要望をお伺いします。',
      ],
      [
        'num' => '02',
        'title' => 'カウンセリング',
        'text' => 'ロケーション決めや衣装選びなど、ご要望をお聞きし最適なご提案をいたします。一緒に素敵な撮影にしましょう！',
      ],
      [
        'num' => '03',
        'title' => '撮影当日',
        'text' => '支度場所にお越しいただき、ヘアメイク・着付けをさせて頂いた後、撮影場所へのご移動(ヘアメイク同伴)となります。',
      ],
      [
        'num' => '04',
        'title' => 'お振込',
        'text' => 'ご請求書をメールにてお送りしますので、撮影から2週間以内に指定の口座にお振込をお願いします。',
      ],
      [
        'num' => '05',
        'title' => '納品',
        'text' => 'データはDVDにて約3週間以内、アルバムは2ヶ月以内にお届けいたします。早めの納品も対応できますのでご相談ください。',
      ],
    ] ?>
    <div class="p-sub-flow__inner l-inner">
      <div class="p-sub-flow__head">
        <div class="c-head">
          <h2 class="c-head__main">十三詣りの撮影の流れ</h2>
        </div>
      </div>
      <div class="p-sub-flow__swiper-wrap">
        <div class="p-sub-flow__swiper swiper js-flow-swiper1">
          <ol class="p-sub-flow__list p-flow-list swiper-wrapper">
            <?php foreach ($flowItems1 as $item) : ?>
              <li class="p-flow-list__item swiper-slide">
                <div class="p-flow-list__item-number"><span data-num="<?php echo esc_html($item['num']); ?>">step</span></div>
                <h3 class="p-flow-list__item-title"><?php echo esc_html($item['title']); ?></h3>
                <p class="p-flow-list__item-text"><?php echo esc_html($item['text']); ?></p>
              </li>
            <?php endforeach; ?>
          </ol>
          <!-- 前後の矢印 -->
          <div class="p-sub-flow__button-prev swiper-button-prev"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/arrow-prev.svg')); ?>" alt="" width="" height="" loading="lazy" /></div>
          <div class="p-sub-flow__button-next swiper-button-next"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/arrow-next.svg')); ?>" alt="" width="" height="" loading="lazy" /></div>
        </div>
        <!-- ページネーション -->
        <div class="p-sub-flow__pagination swiper-pagination"></div>
      </div>
    </div>
  </section>
  <?php get_template_part("parts/contact") ?>
</main>

<?php get_footer(); ?>