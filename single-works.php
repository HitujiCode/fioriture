<?php get_header(); ?>
<?php
$post_type = get_post_type();
$post_type_data = get_post_type_object($post_type);
$post_type_label = $post_type_data->labels->name;

?>

<main class="l-main">

  <div class="p-sub-fv">
    <?php if (function_exists('bcn_display')) { ?>
      <div class="p-sub-fv__breadcrumb c-breadcrumb breadcrumb">
        <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
          <?php bcn_display(); ?>
        </div>
      </div>
    <?php } ?>
    <?php get_template_part("parts/fv"); ?>
  </div>

  <article class="p-works-article l-common">
    <div class="p-works-article__inner l-inner">
      <div class="p-works-article__content">
        <div class="p-works-article__body">
          <span class="p-works-article__category c-category">ソロ</span>
          <h2 class="p-works-article__title c-title">鈴木様（仮）の撮影</h2>
          <p>出で立ち、撮影までの経緯など出で立ち、撮影までの経緯など出で立ち、撮影までの経緯など出で立ち、撮影までの経緯など出で立ち、撮影までの経緯など出で立ち、撮影までの経緯など出で立ち、撮影までの経緯など出で立ち、撮影までの経緯など出で立ち、撮影までの経緯など出で立ち、撮影までの経緯など出で立ち、撮影までの経緯など</p>
        </div>
        <div class="p-works-article__images">
          <?php for ($i = 0; $i < 4; $i++) : ?>
            <div class="p-works-article__img">
              <a href="<?php echo esc_url(get_theme_file_uri('assets/images/common/noimage@2x.jpg')); ?>" class="luminous">
                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/noimage@2x.jpg')); ?>" alt="" width="" height="" loading="lazy" />
              </a>
            </div>
          <?php endfor; ?>
        </div>
      </div>
      <div class="p-works-article__buttons l-common">
        <?php get_template_part("parts/buttons") ?>
      </div>
    </div>
  </article>
  </article>

  <?php get_template_part('parts/contact'); ?>
</main>
<?php get_footer(); ?>