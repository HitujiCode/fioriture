<?php get_header(); ?>
<!-- <?php
      $post_type = get_post_type();
      $post_type_data = get_post_type_object($post_type);
      $post_type_label = $post_type_data->labels->name;

      ?> -->

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

  <!-- <article class="p-works-article l-common">
    <div class="p-works-article__inner l-inner">
      <div class="p-works-article__content">
        <div class="p-works-article__body">
          <?php
          $terms = get_the_terms(get_the_ID(), 'genre');
          if ($terms && !is_wp_error($terms)) :
            $display_terms = array_slice($terms, 0, 1);
            foreach ($display_terms as $term) {
              echo '<span class="c-category">' . esc_html($term->name) . '</span>';
            }
          endif;
          ?></div>
        <h2 class="p-works-article__title c-title"><?php the_title(); ?></h2>
      </div>
      <div class="p-works-article__images">
        <?php if (has_post_thumbnail()) : ?>
          <div class="luminous">
            <?php the_post_thumbnail(); ?>
          </div>
        <?php endif; ?>
        <?php $fields = CFS()->get('works_gallery'); ?>
        <?php if ($fields) : ?>
          <?php foreach ($fields as $field) : ?>
            <a href="<?php echo esc_html($field['works_img']); ?>" class="luminous">
              <img src="<?php echo esc_html($field['works_img']); ?>" alt="" width="" height="" />
            </a>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="p-works-article__buttons l-common">
      <?php get_template_part("parts/buttons") ?>
    </div>
    </div>
  </article> -->

  <article class="p-works-article l-common">
    <div class="p-works-article__inner l-inner">
      <div class="p-works-article__content">
        <div class="p-works-article__body">
          <?php
          $terms = get_the_terms(get_the_ID(), 'genre');
          if ($terms && !is_wp_error($terms)) :
            $display_terms = array_slice($terms, 0, 1);
            foreach ($display_terms as $term) {
              echo '<span class="c-category">' . esc_html($term->name) . '</span>';
            }
          endif;
          ?></div>
        <h2 class="p-works-article__title c-title"><?php the_title(); ?></h2>
      </div>
      <div class="p-works-article__images">
        <?php $fields = CFS()->get('works_gallery'); ?>
        <?php if ($fields) : ?>
          <?php foreach ($fields as $index => $field) : ?>
            <a href="<?php echo esc_html($field['works_img']); ?>" class="p-works-article__img js-modal-trigger" data-img-src="<?php echo esc_html($field['works_img']); ?>" data-index="<?php echo $index; ?>">
              <img src="<?php echo esc_html($field['works_img']); ?>" alt="投稿画像" width="" height="" />
            </a>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
      <div class="p-works-article__buttons l-common">
        <?php get_template_part("parts/buttons") ?>
      </div>
    </div>
  </article>

  <!-- モーダル -->
  <div class="p-modal js-modal">
    <div class="p-modal__inner">
      <!-- モーダルコンテンツ -->
      <div class="p-modal__prev">
        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/modal-prev.svg')); ?>" alt="前の画像へ" width="" height="" loading="lazy" />
      </div>
      <div class="p-modal__next">
        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/modal-next.svg')); ?>" alt="次の画像へ" width="" height="" loading="lazy" />
      </div>
      <!-- 画像表示用のimgタグ -->
      <div class="p-modal__wrap">
        <button class="p-modal__close-button"></button>
        <div class="p-modal__img">
          <img src="" alt="モーダル画像">
        </div>

      </div>
    </div>
  </div>

  <?php get_template_part('parts/contact'); ?>
</main>
<?php get_footer(); ?>