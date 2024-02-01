<?php get_header(); ?>

<main>
  <div class="p-fv l-fv">
    <div class="p-fv__inner l-inner">
      <div class="p-fv__swiper swiper js-fv-swiper">
        <div class="p-fv__swiper-wrapper swiper-wrapper">
          <div class="p-fv__img swiper-slide">
            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/fv1@2x.webp')); ?>" alt="" width=""
              height="" />
          </div>
          <div class="p-fv__img swiper-slide"><img
              src="<?php echo esc_url(get_theme_file_uri('assets/images/top/fv2@2x.webp')); ?>" alt="" width=""
              height="" /></div>
          <div class="p-fv__img swiper-slide"><img
              src="<?php echo esc_url(get_theme_file_uri('assets/images/top/fv3@2x.webp')); ?>" alt="" width=""
              height="" /></div>
        </div>
      </div>
      <div class="p-fv__read">
        <div class="p-fv__title">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/fv-title.svg')); ?>" alt="" width=""
            height="" />
        </div>
        <div class="p-fv__text">
          <picture>
            <source srcset="<?php echo esc_url(get_theme_file_uri('assets/images/top/fv-text_pc.svg')); ?>"
              media="(min-width:768px)" width="" height="" />
            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/fv-text.svg')); ?>" alt="" width=""
              height="" />
          </picture>
        </div>
      </div>

    </div>
  </div>
  <div class="p-message l-massage">
    <div class="p-message__inner l-inner">
      <div class="p-message__wrap">
        <div class="p-message__title">
          <h2 class="c-section-title">
            <span class="c-section-title__main">message</span><span class="c-section-title__sub">fiorituraの想い</span>
          </h2>
        </div>
        <div class="p-message__body">
          <p class="p-message__text c-text">同性の結婚だから…<br>
            年齢を重ねてからの結婚だから…<br>
            2回目の結婚だから…<br>
            2.5次元推しキャラとの結婚だから…
          </p>
          <p class="p-message__text c-text">FIORITURAでは悩まないで。<br>
            あなたの個性は美しい。<br>
            大切に残したいステキなあなたの今この瞬間を。<br>
            それぞれの想いに沿うウェディングフォトや<br class="u-mobile">
            記念写真を。<br>
            FIORITURAは尊い愛を永遠のフォトに創り上げる。</p>
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
        <h2 class="c-section-title">
          <span class="c-section-title__main">about</span><span class="c-section-title__sub">対象の方々</span>
        </h2>
      </div>
      <div class="p-about__list-wrap swiper js-about-swiper">
        <ul class="p-about__list swiper-wrapper">
          <?php foreach ($aboutItems as $item) : ?>
          <li class="p-about__item swiper-slide">
            <p class="p-about__item-head"><?php echo esc_html($item['head']); ?></p>
            <div class="p-about__item-img">
              <img src="<?php echo esc_url(get_theme_file_uri($item['img'])); ?>" alt="" width="" height=""
                loading="lazy" />
            </div>
            <p class="p-about__item-text"><?php echo esc_html($item['text']); ?></p>
          </li>
          <?php endforeach; ?>
        </ul>
        <!-- ページネーション -->
        <div class="p-about__pagination swiper-pagination"></div>
        <!-- 前後の矢印 -->
        <div class="p-about__button-prev swiper-button-prev"><img
            src="<?php echo esc_url(get_theme_file_uri('assets/images/common/arrow-prev.svg')); ?>" alt="" width=""
            height="" loading="lazy" /></div>
        <div class="p-about__button-next swiper-button-next"><img
            src="<?php echo esc_url(get_theme_file_uri('assets/images/common/arrow-next.svg')); ?>" alt="" width=""
            height="" loading="lazy" /></div>
      </div>
    </div>
  </div>
  <!-- 共通 -->


  <div class="l-inner">
    <h2 class="c-section-title">
      <span class="c-section-title__main">message</span><span class="c-section-title__sub">fiorituraの想い</span>
    </h2>
    <p class="c-text">同性の結婚だから…
      年齢を重ねてからの結婚だから…
      2回目の結婚だから…
      2.5次元推しキャラとの</p>
    <p class="c-text">
      2回目の結婚だから…
      2.5次元推しの</p>

    <ul class="p-list">
      <li class="p-list__item">
        <div class="p-list__item-img">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/plan/plan-img1.webp')); ?>" alt="" width=""
            height="" loading="lazy" />
        </div>
        <div class="p-list__item-body">
          <h3 class="p-list__item-head"><span class="p-list__item-head-main">個々のアイデンティティを尊重し、<br>
              真摯に向き合うカウンセリング</span>
            <span class="p-list__head-sub">（自己同一性、存在証明、同性愛など）</span>
          </h3>
          <p class="p-list__item-text">未来の幸せの形はさまざまです。私たちはそれを祝福致します。全ての幸せへの尊重を表現し、受け入れ、推奨する世界を一緒に創りたいと考えています。</p>
          <div class="p-list__item-button">
            <a class="c-button" href="#">more</a>
          </div>
        </div>
      </li>
      <li class="p-list__item">
        <div class="p-list__item-img">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/plan/plan-img2.webp')); ?>" alt="" width=""
            height="" loading="lazy" />
        </div>
        <div class="p-list__item-body">
          <h3 class="p-list__item-head"><span class="p-list__item-head-main">かけがえのない思い出になる
              <br>
              記念撮影</span>
            <span class="p-list__head-sub">（ロケーションの提案、ヘアメイク、小道具貸出など）</span>
          </h3>
          <p class="p-list__item-text">同性、年齢、未婚や既婚問わず、ご自身の「今」を残す撮影をいたします。ロケーションの提案、ヘアメイクや小道具の貸出も承っております。一緒に思い出を作りましょう！
          </p>
          <div class="p-list__item-button">
            <a class="c-button" href="#">more</a>
          </div>
        </div>
      </li>
    </ul>
    <a class="c-button--blank" href="#" target="_blank"><span>Instagram</span></a>

    <div class="p-form">
      <dl class="p-form__wrap">
        <dt class="p-form__label"><label for="name">お名前<span>必須</span></label></dt>
        <dd class="p-form__input p-form-input">
          <input id="name" name="name" type="text" aria-required="true" required />
        </dd>
      </dl>
      <dl class="p-form__wrap">
        <dt class="p-form__label"><label for="name">メールアドレス<span>必須</span></label>
        </dt>
        <dd class="p-form__input p-form-input">
          <input id="email" name="email" type="email" pattern=".+@.+\..+" />
        </dd>
      </dl>
      <dl class="p-form__wrap">
        <dt class="p-form__label"><label for="name">電話番号<span>必須</span></label></dt>
        <dd class="p-form__input p-form-input">
          <input id="tel" name="tel" type="tel" />
        </dd>
      </dl>
      <dl class="p-form__wrap">
        <dt class="p-form__label"><label for="name">お問い合わせ内容<span>必須</span></label></dt>
        <dd class="p-form__textarea p-form-textarea">
          <textarea id="message" name="message"></textarea>
        </dd>
      </dl>
      <div class="p-form__submit p-form-submit c-button">
        <input type="submit" value="SEND">
      </div>
    </div>



    <ul class="p-grid-list">
      <li class="p-grid-list__item p-grid-item">
        <div class="p-grid-item__img">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/instagram1.webp')); ?>" alt="" width=""
            height="" loading="lazy" />
        </div>
      </li>
    </ul>

  </div>
  <div class="l-inner--large">
    <div class="p-about-item">
      <p class="p-about-item__head">同性カップル</p>
      <div class="p-about-item__img">
        <img src="<?php echo esc_url(get_theme_file_uri("assets/images/top/about1.svg")); ?>" alt="" width="" height=""
          loading="lazy" />
      </div>
      <p class="p-about-item__text">男性同士、女性同士で愛し合っているカップル</p>
    </div>
  </div>


</main>

<?php get_footer(); ?>