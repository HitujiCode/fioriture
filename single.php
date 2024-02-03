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


  <div class="p-case-article__wrap">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <!-- サムネイル表示 -->
        <?php if (has_post_thumbnail()) : ?>
          <figure class="p-case-article__main-img">
            <?php the_post_thumbnail('large'); ?>
          </figure>
        <?php endif; ?>

        <div class="p-case-article__content">
          <div class="p-case-article__content-inner">
            <div class="p-case-article__content-wrap">
              <div class="p-case-article__info">
                <?php
                $categories = get_the_category();
                if (!empty($categories)) :
                ?>
                  <ul class="p-case-article__category">
                    <?php foreach ($categories as $category) : ?>
                      <li><?php echo esc_html($category->name); ?></li>
                      <!-- カテゴリのリンクが必要な場合 -->
                      <!-- <li><a href="<?php //echo esc_url(get_category_link($category->term_id)); 
                                        ?>"><?php //echo esc_html($category->name); 
                                            ?></a></li> -->
                    <?php endforeach; ?>
                  </ul>
                <?php endif; ?>
                <time class="p-case-article__data" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
              </div>
              <div class="p-case-article__title-box">
                <h2 class="p-case-article__title"><?php the_title(); ?></h2>
              </div>
              <div class="p-case-article__contents">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>

    <!-- pager -->
    <?php get_template_part('parts/common/p-pager-list'); ?>
  </div>
  </div>
  </section>
  <!-- 関連スタッフブログ -->
  <?php get_template_part('parts/contact'); ?>
</main>
<?php get_footer(); ?>