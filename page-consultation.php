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

  <div class="p-sub-consultation l-sub-consultation">
    <div class="p-sub-consultation__inner l-inner">
      <div class="p-sub-consultation__head">
        <h2 class="p-sub-consultation__head-main">個々のアイデンティティを尊重し、<br class="u-mobile">
          真摯に向き合うカウンセリング</h2>
        <span class="p-sub-consultation__head-sub">（自己同一性、存在証明、同性愛など）</span>
      </div>
      <div class="p-sub-consultation__content">
        <div class="p-sub-consultation__img">
          <picture>
            <source srcset="<?php echo esc_url(get_theme_file_uri('assets/images/consultation/consultation_pc@2x.webp')); ?>" media="(min-width:768px)" width="" height="" />
            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/consultation/consultation@2x.webp')); ?>" alt="" width="" height="" loading="lazy" />
          </picture>
        </div>
        <p class="p-sub-consultation__text">
          未来の幸せの形はさまざまです。私たちはそれを祝福致します。<br>
          全ての幸せへの尊重を表現し、受け入れ、推奨する世界を一緒に創りたいと考えています。<br>
          ご自身のパートナーのことや恋愛対象、なかなか家族や友人に相談できないことなどお気軽にご相談ください。<br>
          スタッフ一同、サポートいたします。
      </div>
    </div>
  </div>

  <div class="p-sub-access l-sub-access">
    <div class="p-sub-access__inner l-inner">
      <div class="p-sub-access__content">
        <div class="p-sub-access__head c-title">
          <span class="c-title__en">access</span>
          <h2 class="c-title__ja">アクセス</h2>
        </div>
        <div class="p-sub-access__img">
          <picture>
            <source srcset="<?php echo esc_url(get_theme_file_uri('assets/images/access/access_pc@2x.webp')); ?>" media="(min-width:768px)" width="" height="" />
            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/access/access@2x.webp')); ?>" alt="" width="" height="" loading="lazy" />
          </picture>
        </div>
        <p class="p-sub-access__text">
          未来の幸せの形はさまざまです。私たちはそれを祝福致します。<br>
          全ての幸せへの尊重を表現し、受け入れ、推奨する世界を一緒に創りたいと考えています。<br>
          ご自身のパートナーのことや恋愛対象、なかなか家族や友人に相談できないことなどお気軽にご相談ください。<br>
          スタッフ一同、サポートいたします。
      </div>
    </div>
  </div>
  <?php get_template_part("parts/contact") ?>
</main>

<?php get_footer(); ?>