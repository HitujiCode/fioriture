<?php get_header(); ?>

<main class="l-main">
  <div class="p-fv">
    <div class="p-fv__inner l-inner">
      <div class="p-fv__swiper swiper js-fv-swiper">
        <div class="p-fv__swiper-wrapper swiper-wrapper">
          <div class="p-fv__img swiper-slide">
            <picture>
              <source srcset="<?php echo esc_url(get_theme_file_uri('assets/images/top/fv1_pc@2x.webp')); ?>" width="" height="" />
              <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/fv1@2x.webp')); ?>" alt="" width="" height="" />
            </picture>
          </div>
          <div class="p-fv__img swiper-slide">
            <picture>
              <source srcset="<?php echo esc_url(get_theme_file_uri('assets/images/top/fv2_pc@2x.webp')); ?>" width="" height="" />
              <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/fv2@2x.webp')); ?>" alt="" width="" height="" />
            </picture>
          </div>
          <div class="p-fv__img swiper-slide">
            <picture>
              <source srcset="<?php echo esc_url(get_theme_file_uri('assets/images/top/fv3_pc@2x.webp')); ?>" width="" height="" />
              <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/fv3@2x.webp')); ?>" alt="" width="" height="" />
            </picture>
          </div>
        </div>
      </div>
      <div class="p-fv__read">
        <div class="p-fv__title">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/fv-title.svg')); ?>" alt="" width="" height="" />
        </div>
        <div class="p-fv__text">
          <picture>
            <source srcset="<?php echo esc_url(get_theme_file_uri('assets/images/top/fv-text_pc.svg')); ?>" media="(min-width:768px)" width="" height="" />
            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/fv-text.svg')); ?>" alt="" width="" height="" />
          </picture>
        </div>
      </div>

    </div>
  </div>
  <div class="p-message l-massage">
    <div class="p-message__inner l-inner">
      <div class="p-message__wrap">
        <div class="p-message__title">
          <div class="c-section-title">
            <span class="c-section-title__en">message</span>
            <h2 class="c-section-title__ja">fiorituraの想い</span>
            </h2>
          </div>
          <div class="p-message__body">
            <p class="p-message__text c-text-message">同性の結婚だから…<br>
              年齢を重ねてからの結婚だから…<br>
              2回目の結婚だから…<br>
              2.5次元推しキャラとの結婚だから…
            </p>
            <p class="p-message__text c-text-message">fioritureでは悩まないで。<br>
              あなたの個性は美しい。<br>
              大切に残したいステキなあなたの今この瞬間を。<br>
              それぞれの想いに沿うウェディングフォトや<br class="u-mobile">
              記念写真を。<br>
              fioritureは尊い愛を永遠のフォトに創り上げる。</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="p-about l-about">
    <div class="p-about__inner l-inner">
      <div class="p-about__title">
        <div class="c-section-title">
          <span class="c-section-title__en">about</span>
          <h2 class="c-section-title__ja">対象の方々</span>
          </h2>
        </div>
        <div class="p-about__swiper-wrap">
          <div class="p-sub-about__swiper swiper js-about-swiper">
            <ul class="p-about__list swiper-wrapper">
              <?php foreach ($aboutItems as $item) : ?>
                <li class="p-about__item swiper-slide">
                  <p class="p-about__item-head"><?php echo esc_html($item['head']); ?></p>
                  <div class="p-about__item-img">
                    <img src="<?php echo esc_url(get_theme_file_uri($item['img'])); ?>" alt="" width="" height="" loading="lazy" />
                  </div>
                  <p class="p-about__item-text"><?php echo $item['text']; ?></p>
                </li>
              <?php endforeach; ?>
            </ul>
            <!-- ページネーション -->
            <div class="p-about__pagination swiper-pagination"></div>
          </div>
          <!-- 前後の矢印 -->
          <div class="p-about__button-prev swiper-button-prev js-about-swiper-prev"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/arrow-prev.svg')); ?>" alt="" width="" height="" loading="lazy" /></div>
          <div class="p-about__button-next swiper-button-next js-about-swiper-next"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/arrow-next.svg')); ?>" alt="" width="" height="" loading="lazy" /></div>
        </div>
      </div>
    </div>
  </section>

  <div class="p-plan l-plan">
    <div class="p-plan__inner l-inner">
      <div class="p-plan__title">
        <div class="c-section-title">
          <span class="c-section-title__en">plan</span>
          <h2 class="c-section-title__ja">プラン紹介</span>
          </h2>
        </div>
        <div class="p-plan__content">
          <ul class="p-list">
            <li class="p-list__item">
              <div class="p-list__item-img">
                <picture>
                  <source srcset="<?php echo esc_url(get_theme_file_uri('assets/images/plan/plan1_pc@2x.webp')); ?>" media="(min-width:768px)" width="" height="" />
                  <img src="<?php echo esc_url(get_theme_file_uri('assets/images/plan/plan1@2x.webp')); ?>" alt="" width="" height="" loading="lazy" />
                </picture>
              </div>
              <div class="p-list__item-body">
                <div class="p-list__item-head">
                  <h3 class="p-list__item-head-main">個々のアイデンティティを尊重し、<br>
                    真摯に向き合うカウンセリング</h3>
                  <span class="p-list__head-sub">（自己同一性、存在証明、同性愛など）</span>
                </div>
                <p class="p-list__item-text">未来の幸せの形はさまざまです。私たちはそれを祝福致します。全ての幸せへの尊重を表現し、受け入れ、推奨する世界を一緒に創りたいと考えています。
                </p>
                <div class="p-list__item-button">
                  <a class="c-button" href="<?php echo esc_url(home_url("consultation")) ?>">more</a>
                </div>
              </div>
            </li>
            <li class="p-list__item">
              <div class="p-list__item-img">
                <picture>
                  <source srcset="<?php echo esc_url(get_theme_file_uri('assets/images/plan/plan2_pc@2x.webp')); ?>" media="(min-width:768px)" width="" height="" />
                  <img src="<?php echo esc_url(get_theme_file_uri('assets/images/plan/plan2@2x.webp')); ?>" alt="" width="" height="" loading="lazy" />
                </picture>
              </div>
              <div class="p-list__item-body">
                <div class="p-list__item-head">
                  <h3 class="p-list__item-head-main">かけがえのない思い出になる
                    <br>
                    記念撮影
                  </h3>
                  <span class="p-list__head-sub">（ロケーションの提案、ヘアメイク、小道具貸出など）</span>
                  </d>
                  <p class="p-list__item-text">
                    同性、年齢、未婚や既婚問わず、ご自身の「今」を残す撮影をいたします。ロケーションの提案、ヘアメイクや小道具の貸出も承っております。一緒に思い出を作りましょう！
                  </p>
                  <div class="p-list__item-button">
                    <a class="c-button" href="<?php echo esc_url(home_url("photograph")) ?>">more</a>
                  </div>
                </div>
            </li>
          </ul>
          <div class="p-plan__button">
            <a class="c-button" href="<?php echo esc_url(home_url("plan")) ?>"><span>view all</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="p-case l-case">
    <div class="p-case__inner l-inner">
      <div class="p-case__title">
        <div class="c-section-title">
          <span class="c-section-title__en">case</span>
          <h2 class="c-section-title__ja">ご相談事例</h2>
          </h1>
        </div>
        <div class="p-case__content">
          <ul class="p-cards">
            <?php

            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 3,
              'orderby' => 'date',
              'order' => 'DESC'

            );

            $the_query = new WP_Query($args);

            if ($the_query->have_posts()) :
              while ($the_query->have_posts()) : $the_query->the_post();
            ?>

                <li class="p-cards__item">
                  <a href="<?php the_permalink(); ?>" class="p-card">
                    <div class="p-card__img">
                      <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="サムネイル画像" width="" height="" loading="lazy" />
                      <?php else : ?>
                        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/noimage@2x.webp')); ?>" alt="NoImage" width="" height="" loading="lazy" />
                      <?php endif; ?>
                    </div>
                    <div class="p-card__category">
                      <?php
                      $categories = get_the_category();
                      $display_categories = array_slice($categories, 0, 2);

                      foreach ($display_categories as $category) {
                        echo '<span class="c-category">' . esc_html($category->name) . '</span>';
                      }
                      ?>
                    </div>
                    <p class="p-card__title"><?php the_title(); ?></p>
                  </a>
                </li>
              <?php
              endwhile;
              wp_reset_postdata();
            else :
              ?>
              <p>最新の投稿はありません。</p>
            <?php
            endif;
            ?>
          </ul>
          <div class="p-case__button">
            <a class="c-button" href="<?php echo esc_url(home_url("case")) ?>"><span>view all</span></a>
          </div>
        </div>
      </div>
    </div>
    </div>

    <div class="p-works l-works">
      <div class="p-works__inner l-inner">
        <div class="p-works__title">
          <div class="c-section-title">
            <span class="c-section-title__en">works</span>
            <h2 class="c-section-title__ja">撮影事例</h2>
            </d>
          </div>
          <div class="p-works__content">
            <ul class="p-cards">
              <?php

              $args = array(
                'post_type' => 'works',
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DESC'

              );

              $the_query = new WP_Query($args);

              if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
              ?>

                  <li class="p-cards__item">
                    <a href="<?php the_permalink(); ?>" class="p-card">
                      <div class="p-card__img">
                        <?php if (has_post_thumbnail()) : ?>
                          <img src="<?php the_post_thumbnail_url(); ?>" alt="サムネイル画像" width="" height="" loading="lazy" />
                        <?php else : ?>
                          <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/noimage@2x.webp')); ?>" alt="NoImage" width="" height="" loading="lazy" />
                        <?php endif; ?>
                      </div>
                      <div class="p-card__category">
                        <?php
                        $categories = get_the_category();
                        if (!empty($categories)) : // カテゴリがある場合のみ実行
                          foreach ($categories as $category) {
                            echo '<span class="c-category">' . esc_html($category->name) . '</span>';
                          }
                        endif;
                        ?>
                      </div>
                      <p class="p-card__title"><?php the_title(); ?></p>
                    </a>
                  </li>
                <?php
                endwhile;
                wp_reset_postdata();
              else :
                ?>
                <p>最新の投稿はありません。</p>
              <?php
              endif;
              ?>
            </ul>
            <div class="p-works__button">
              <a class="c-button" href="<?php echo esc_url(home_url("works")) ?>"><span>view all</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
    // instaの情報を配列に格納 後でプラグインで実装
    $instaItem = [
      [
        'img' => 'assets/images/top/instagram@2x.webp',
      ],
    ] ?>
    <section class="p-instagram l-instagram">
      <div class="p-instagram__inner l-inner">
        <div class="p-instagram__title">
          <div class="c-section-title">
            <span class="c-section-title__en">instagram</span>
            <h2 class="c-section-title__ja">インスタグラム</span>
            </h2>
          </div>
          <div class="p-instagram__content">
            <ul class="p-grid-list">
              <?php for ($i = 0; $i < 10; $i++) : ?>
                <li class="p-grid-list__item p-grid-item">
                  <div class="p-grid-item__img">
                    <img src="<?php echo esc_url(get_theme_file_uri($instaItem[0]['img'])); ?>" alt="" width="" height="" loading="lazy" />
                  </div>
                </li>
              <?php endfor; ?>
            </ul>
            <div class="p-instagram__button">
              <a class="c-button--blank" href="#"><span>Instagram</span></a>
            </div>
          </div>
        </div>
      </div>
      <?php get_template_part("parts/contact") ?>
    </section>

    <section class="p-profile l-profile">
      <div class="p-profile__inner l-inner">
        <div class="p-profile__title">
          <div class="c-section-title">
            <span class="c-section-title__en">profile</span>
            <h2 class="c-section-title__ja">プロフィール</span>
            </h2>
          </div>
          <div class="p-profile__content">
            <div class="p-profile__img">
              <picture>
                <source srcset="<?php echo esc_url(get_theme_file_uri('assets/images/top/profile_pc@2x.webp')); ?>" media="(min-width:768px)" width="" height="" />
                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/profile@2x.webp')); ?>" alt="プロフィール写真" width="" height="" loading="lazy" />
              </picture>
            </div>
            <div class="p-profile__body">
              <p class="p-profile__name">石井 由香里</p>
              <p class="p-profile__text">
                長岡市生まれ。前職は日本旅行 子会社新潟JATS時代、日中国交３０周年記念「新潟県日中友好の翼」等アジアを中心として国内・海外添乗業務に従事。<br>
                中国語を学ぶことの面白さを知り、中国江蘇省 蘇州に語学ホームステイを経験、多種多様なジャンルから新潟への想いを再認識経験、東京ツアコンへの移籍。<br>
                2006年に結婚を機に退職、その後、サービス業経験を活かし結婚式場にて、サービス部門アテンドやキッチン飲食部門等で8年間勤務。この経験が大きく影響し繋ぎ深く感化、この事業の指針・使命となっている。<br>
                家族４人2児の母<br> 国内・海外で培った経験・視点からこの街の未来を明るく照らしたいと願い日々奮闘…。<br>
                座右の銘は「知覚動考」
              </p>
            </div>
          </div>
        </div>
      </div>
</main>

<?php get_footer(); ?>