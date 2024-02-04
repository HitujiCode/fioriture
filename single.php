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
              <span class="p-case-article__top-category c-category">同性カップル</span>
              <h2 class="p-case-article__top-title c-title">目黒様（仮）からのご相談</h2>
              <p class="p-case-article__top-text c-text">ここ近年で、ようやく社会にその存在を知られるようになり、最近私たちは通常の形式にこだわる必要はないけど、この先ずっと一緒でよかったね、幸せだねと互いに話ができる形をのこしたいと考えました。何が最良か？考え、まずは2人だけの写真撮影を一番にと思い相談させていただきました。費用の事、理解ある式場の有無、内容の事、撮影の事について等など不安・心配な点、最良の選択、親身に対応していただき感謝しています。</p>
            </div>
            <div class="p-case-article__top-img">
              <img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/noimage@2x.jpg')); ?>" alt="" width="" height="" loading="lazy" />
            </div>
          </div>
          <div class="p-case-article__top-comment">
            <h2 class="p-case-article__top-title c-title">fiorituraから</h2>
            <p class="p-case-article__top-text c-text">何を一番望み実現したいですか？とお聞きし、先にあるものを一つづつ整理、混沌を解消していきましょう、そして自分たちの個性を表現した衣装で自分達自身オリジナルの演出のみ考え、一緒に創っていきましょうとご提案、実現いたしました。<br>アドバイスとして、まだ日本では同性婚は認められてないですが、最近ではパートナーシップ宣誓制度を取入れて認められる自治体が少しづつ増えています。オリジナル宣誓式としてご提案も宣誓書をお渡しすることも可能ですよと。周囲の理解や反応でどう伝えるか？と悩まれるカップルも多いと思いますが、豊富な結婚式を経験、様々な相談にも対応可能、同性婚の知識や経験を持つプランナーもおります。まずは安心してご相談することが有意義と考えます。</p>
          </div>
        </div>
      </div>
    </article>
    <article class="p-case-artcile__bottom">
      <div class="p-case-article__bottom__inner l-inner">
        <ul class="p-case-article__bottom-list">
          <li class="p-case-article__bottom-item">
            <div class="p-case-article__bottom-body">
              <h2 class="p-case-article__bottom-title c-title">何気ない幸せが写真を通じて内面にも写せるってことを痛切に実感した時間</h2>
              <p class="p-case-article__top-text c-text">私にとってこの撮影は普通の撮影以上のものでした。写真を通じて私の内面の女性的な部分を表現出来る機会が与えられたから。私が自分自身［女性］として認められ愛されることを実感できた時間が持てたことをこんなにも嬉しいものなのかとこれがホントの何気ない幸せ何だって感じました。</p>
            </div>
            <div class="p-case-article__bottom-img"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/noimage@2x.jpg')); ?>" alt="" width="" height="" loading="lazy" />
            </div>
          </li>
          <li class="p-case-article__bottom-item">
            <div class="p-case-article__bottom-body">
              <h2 class="p-case-article__bottom-title c-title">互いのアイデンティティを尊重し合う絆を深めていくことができて、困難にも立ち向かえる勇気を</h2>
              <p class="p-case-article__top-text c-text">パートナーが自分のアイデンティティに忠実に生きる勇気を持っているのを見て、こちらも彼女を全力でサポートする決心ができた。彼女のそばにいることで本当の自分を見つけた気がします。いずれ形は変わるかもしれないけれど僕たちの絆は変わらないだろうし今後も一緒に歩んでいくということはここでハッキリ認識することができて嬉しく思います。</p>
            </div>
            <div class="p-case-article__bottom-img"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/noimage@2x.jpg')); ?>" alt="" width="" height="" loading="lazy" />
            </div>
          </li>
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