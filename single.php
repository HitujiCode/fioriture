<?php get_header(); ?>
<?php
$post_type = get_post_type();
$post_type_data = get_post_type_object($post_type);
$post_type_label = $post_type_data->labels->name;
?>

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

  <div class="p-case-article">
    <article class="p-case-article__top">
      <div class="p-case-article__top-inner l-inner">
        <div class="p-case-article__top-conteiner">
          <div class="p-case-article__top-content">
            <div class="p-case-article__top-body">
              <div class="p-case-article__top-category">
                <span class=" c-category"><?php $category = get_the_category(); ?>
                  <?php if ($category) : ?>
                    <?php echo esc_html($category[0]->name); ?>
                  <?php endif; ?></span>
              </div>
              <h2 class="p-case-article__top-title c-title"><?php the_title(); ?></h2>
              <p class="p-case-article__top-text c-text"><?php the_field('case_textarea1'); ?></p>
            </div>
            <div class="p-case-article__top-img">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
              <?php else : ?>
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/noimage@2x.webp')); ?>" alt="No Image" width="" height="" loading="lazy" />
              <?php endif; ?>
            </div>
          </div>
          <div class="p-case-article__top-comment">
            <h2 class="p-case-article__top-title c-title">fiorituraから</h2>
            <p class="p-case-article__top-text c-text"><?php the_field('case_textarea2'); ?></p>
          </div>
        </div>
      </div>
    </article>
    <article class="p-case-artcile__bottom">
      <div class="p-case-article__bottom__inner l-inner">
        <ul class="p-case-article__bottom-list">
          <!-- <?php $fields = CFS()->get('case-article-bottom'); ?>
          <?php if ($fields) : ?>
            <?php foreach ($fields as $field) : ?>
              <li class="p-case-article__bottom-item">
                <div class="p-case-article__bottom-body">
                  <h2 class="p-case-article__bottom-title c-title"><?php echo esc_html($field['case-article-bottom_head']); ?></h2>
                  <p class="p-case-article__top-text c-text"><?php echo esc_html($field['case-article-bottom_textarea']); ?></p>
                </div>
                <div class="p-case-article__bottom-img">
                  <?php
                  // 画像URLを直接フィールドから取得、設定されていない場合はデフォルト画像を使用
                  $image_url = !empty($field['case-article-bottom_img']) ? $field['case-article-bottom_img'] : get_theme_file_uri('/assets/images/common/noimage@2x.webp');

                  // 画像がデフォルトのnoimageの場合、altをnoimageに設定
                  $image_alt = ($image_url === get_theme_file_uri('/assets/images/common/noimage@2x.webp')) ? 'noimage' : '';


                  // 画像IDからaltテキストを取得
                  $image_alt = !empty($image_id) ? get_post_meta($image_id, '_wp_attachment_image_alt', true) : '';
                  // altテキストが空の場合、alt属性も空に設定
                  if (empty($image_alt)) {
                    $image_alt = '';
                  }  ?>
                  <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>" width="" height="" loading="lazy" />
                </div>
              </li>
            <?php endforeach; ?>
          <?php endif; ?> -->

          <?php $fields = CFS()->get('case-article-bottom'); ?>
          <?php if ($fields) : ?>
            <?php foreach ($fields as $field) : ?>
              <li class="p-case-article__bottom-item">
                <div class="p-case-article__bottom-body">
                  <h2 class="p-case-article__bottom-title c-title"><?php echo esc_html($field['case-article-bottom_head']); ?></h2>
                  <p class="p-case-article__top-text c-text"><?php echo esc_html($field['case-article-bottom_textarea']); ?></p>
                </div>
                <div class="p-case-article__bottom-img">
                  <?php
                  $image_url = !empty($field['case-article-bottom_img']) ? $field['case-article-bottom_img'] : get_theme_file_uri('/assets/images/common/noimage@2x.webp');
                  $image_id = get_attachment_id_from_url($image_url); // URLからIDを取得

                  if ($image_url === get_theme_file_uri('/assets/images/common/noimage@2x.webp')) {
                    $image_alt = 'noimage';
                  } else {
                    $image_alt = !empty($image_id) ? get_post_meta($image_id, '_wp_attachment_image_alt', true) : '';
                  }
                  ?>
                  <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>" width="680" height="402" loading="lazy" />
                </div>
              </li>
            <?php endforeach; ?>
          <?php endif; ?>

          <!-- <li class="p-case-article__bottom-item">
            <div class="p-case-article__bottom-body">
              <h2 class="p-case-article__bottom-title c-title">互いのアイデンティティを尊重し合う絆を深めていくことができて、困難にも立ち向かえる勇気を</h2>
              <p class="p-case-article__top-text c-text">パートナーが自分のアイデンティティに忠実に生きる勇気を持っているのを見て、こちらも彼女を全力でサポートする決心ができた。彼女のそばにいることで本当の自分を見つけた気がします。いずれ形は変わるかもしれないけれど僕たちの絆は変わらないだろうし今後も一緒に歩んでいくということはここでハッキリ認識することができて嬉しく思います。</p>
            </div>
            <div class="p-case-article__bottom-img"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/noimage@2x.jpg')); ?>" alt="" width="" height="" loading="lazy" />
            </div>
          </li> -->
        </ul>
        <div class="p-case-article__bottom-buttons l-common">
          <?php get_template_part("parts/buttons") ?>
        </div>
      </div>
    </article>
  </div>

  <?php get_template_part('parts/contact'); ?>
</main>
<?php get_footer(); ?>