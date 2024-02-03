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
          <div class="c-title">
            <span class="c-title__en">message</span>
            <h2 class="c-title__ja">fiorituraの想い</span>
            </h2>
          </div>
          <div class="p-message__body">
            <p class="p-message__text">同性の結婚だから…<br>
              年齢を重ねてからの結婚だから…<br>
              2回目の結婚だから…<br>
              2.5次元推しキャラとの結婚だから…
            </p>
            <p class="p-message__text">fioritureでは悩まないで。<br>
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
  <?php
  // aboutの情報を配列に格納
  $aboutItems = [
    [
      'head' => '同性カップル',
      'img' => 'assets/images/top/about1.svg',
      'text' => '男性同士、女性同士で愛し合っているカップル',
    ],
    [
      'head' => 'エイジングカップル',
      'img' => 'assets/images/top/about2.svg',
      'text' => '共に年を重ねた人生経験豊富な熟年のカップル',
    ],
    [
      'head' => '再婚カップル',
      'img' => 'assets/images/top/about3.svg',
      'text' => '一方もしくは二人とも結婚経験があるカップル',
    ],
    [
      'head' => 'ソロ',
      'img' => 'assets/images/top/about4.svg',
      'text' => '年齢や未婚・既婚問わず自由にウエディングフォトを希望される方',
    ],
    [
      'head' => '2次元カップル',
      'img' => 'assets/images/top/about5.svg',
      'text' => '推しさんのうちわなどのグッズ・思い出の品と一緒に撮影を希望される方',
    ],
    [
      'head' => '十三詣り',
      'img' => 'assets/images/top/about6.svg',
      'text' => '13歳になったお子さまの撮影を希望される方',
    ],
    [
      'head' => 'コスプレ',
      'img' => 'assets/images/top/about7.svg',
      'text' => '推しキャラになりきって撮影を希望される方',
    ],
    [
      'head' => 'ロケーション（新潟県内）',
      'img' => 'assets/images/top/about8.svg',
      'text' => '政令指定都市でもある新潟県の街、自然の中で撮影を希望される方',
    ],
    [
      'head' => 'ドローン',
      'img' => 'assets/images/top/about9.svg',
      'text' => '主に商用利用向けのドローン撮影を希望される方',
    ],
  ];

  ?>
  <div class="p-about l-about">
    <div class="p-about__inner l-inner">
      <div class="p-about__title">
        <div class="c-title">
          <span class="c-title__en">about</span>
          <h2 class="c-title__ja">対象の方々</span>
          </h2>
        </div>
        <div class="p-about__list-wrap swiper js-about-swiper">
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
          <!-- 前後の矢印 -->
          <div class="p-about__button-prev swiper-button-prev"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/arrow-prev.svg')); ?>" alt="" width="" height="" loading="lazy" /></div>
          <div class="p-about__button-next swiper-button-next"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/arrow-next.svg')); ?>" alt="" width="" height="" loading="lazy" /></div>
        </div>
      </div>
    </div>

    <div class="p-plan l-plan">
      <div class="p-plan__inner l-inner">
        <div class="p-plan__title">
          <div class="c-title">
            <span class="c-title__en">plan</span>
            <h2 class="c-title__ja">プラン紹介</span>
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
                  <h3 class="p-list__item-head"><span class="p-list__item-head-main">個々のアイデンティティを尊重し、<br>
                      真摯に向き合うカウンセリング</span>
                    <span class="p-list__head-sub">（自己同一性、存在証明、同性愛など）</span>
                  </h3>
                  <p class="p-list__item-text">未来の幸せの形はさまざまです。私たちはそれを祝福致します。全ての幸せへの尊重を表現し、受け入れ、推奨する世界を一緒に創りたいと考えています。
                  </p>
                  <div class="p-list__item-button">
                    <a class="c-button" href="#">more</a>
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
                  <h3 class="p-list__item-head"><span class="p-list__item-head-main">かけがえのない思い出になる
                      <br>
                      記念撮影</span>
                    <span class="p-list__head-sub">（ロケーションの提案、ヘアメイク、小道具貸出など）</span>
                  </h3>
                  <p class="p-list__item-text">
                    同性、年齢、未婚や既婚問わず、ご自身の「今」を残す撮影をいたします。ロケーションの提案、ヘアメイクや小道具の貸出も承っております。一緒に思い出を作りましょう！
                  </p>
                  <div class="p-list__item-button">
                    <a class="c-button" href="#">more</a>
                  </div>
                </div>
              </li>
            </ul>
            <div class="p-plan__button">
              <a class="c-button" href="#"><span>view all</span></a>
            </div>
          </div>
        </div>
      </div>
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
    <div class="p-case l-case">
      <div class="p-case__inner l-inner">
        <div class="p-case__title">
          <div class="c-title">
            <span class="c-title__en">case</span>
            <h2 class="c-title__ja">ご相談事例</h2>
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
              <a class="c-button" href="#"><span>view all</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
    // worksの情報を配列に格納
    $worksItems = [
      [
        'img' => 'assets/images/works/wokrs1@2x.webp',
        'label' => '十三詣り',
        'text' => '丸山様（仮）の撮影',
      ],
      [
        'img' => 'assets/images/works/wokrs2@2x.webp',
        'label' => 'ソロ',
        'text' => '鈴木様（仮）の撮影',
      ],
      [
        'img' => 'assets/images/common/noimage@2x.webp',
        'label' => 'エイジングカップル',
        'text' => '稲葉様（仮）の撮影',
      ],
    ] ?>
    <div class="p-works l-works">
      <div class="p-works__inner l-inner">
        <div class="p-works__title">
          <div class="c-title">
            <span class="c-title__en">works</span>
            <h2 class="c-title__ja">撮影事例</h2>
            </d>
          </div>
          <div class="p-works__content">
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
              <a class="c-button" href="#"><span>view all</span></a>
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
    <div class="p-instagram l-instagram">
      <div class="p-instagram__inner l-inner">
        <div class="p-instagram__title">
          <div class="c-title">
            <span class="c-title__en">instagram</span>
            <h2 class="c-title__ja">インスタグラム</span>
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
    </div>
  </div>
  <div class="p-profile l-profile">
    <div class="p-profile__inner l-inner">
      <div class="p-profile__title">
        <div class="c-title">
          <span class="c-title__en">profile</span>
          <h2 class="c-title__ja">プロフィール</span>
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
            <p class="p-profile__head">肩書が入ります。肩書が入ります。</p>
            <p class="p-profile__name">石井 由香里</p>
            <p class="p-profile__text">
              ここにプロフィールが入ります。ここにプロフィールが入ります。ここにプロフィールが入ります。ここにプロフィールが入ります。ここにプロフィールが入ります。ここにプロフィールが入ります。ここにプロフィールが入ります。ここにプロフィールが入ります。ここにプロフィールが入ります。ここにプロフィールが入ります。ここにプロフィールが入ります。ここにプロフィールが入ります。ここにプロフィールが入ります。ここにプロフィールが入ります。ここにプロフィールが入ります。
            </p>
          </div>
        </div>
      </div>
    </div>
</main>

<?php get_footer(); ?>