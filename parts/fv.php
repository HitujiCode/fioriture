<?php
// 現在の投稿タイトルを取得
$current_post_title = get_the_title();
// $current_post_name = get_the_title();
// CFSからcase_article_bottom-nameフィールドの値を取得
$case_name = get_field('case_name');
$works_name = get_field('works_name');
// ページ設定を配列として定義
$pageSettings = [
  "plan" => [
    "image_pc" => "/assets/images/plan/fv_pc@2x.webp",
    "image_sp" => "/assets/images/plan/fv@2x.webp",
    "title_en" => "plan",
    "title_ja" => "プラン紹介"
  ],
  "consultation" => [
    "image_pc" => "/assets/images/consultation/fv_pc@2x.webp",
    "image_sp" => "/assets/images/consultation/fv@2x.webp",
    "title_en" => "consultation service",
    "title_ja" => "様々なお悩みに応えるカウンセリング"
  ],
  "photograph" => [
    "image_pc" => "/assets/images/photo/fv_pc@2x.webp",
    "image_sp" => "/assets/images/photo/fv@2x.webp",
    "title_en" => "photograph",
    "title_ja" => "かけがえのない思い出になる記念撮影"
  ],
  "home" => [
    "image_pc" => "/assets/images/case/fv_pc@2x.webp",
    "image_sp" => "/assets/images/case/fv@2x.webp",
    "title_en" => "case",
    "title_ja" => "ご相談事例"
  ],
  "single" => [
    "image_pc" => "/assets/images/case/fv_pc@2x.webp",
    "image_sp" => "/assets/images/case/fv@2x.webp",
    "title_name_case" => $case_name,
    "title_en" => "consultation from",
    "title_ja" => $current_post_title,
  ],
  "flow" => [
    "image_pc" => "/assets/images/flow/fv_pc@2x.webp",
    "image_sp" => "/assets/images/flow/fv@2x.webp",
    "title_en" => "flow",
    "title_ja" => "撮影の流れ"
  ],
  "works" => [
    "image_pc" => "/assets/images/works/fv_pc@2x.webp",
    "image_sp" => "/assets/images/works/fv@2x.webp",
    "title_en" => "works",
    "title_ja" => "プラン紹介"
  ],
  "single-works" => [
    "image_pc" => "/assets/images/works/fv_pc@2x.webp",
    "image_sp" => "/assets/images/works/fv@2x.webp",
    "title_name_works" => "$works_name",
    "title_en" => "photo shoot",
    "title_ja" => "$current_post_title"
  ],
  "404" => [
    "image_pc" => "",
    "image_sp" => "",
    "title_en" => "404 not found",
    "title_ja" => "お探しのページが見つかりません"
  ],
];

function getCurrentPageType()
{
  global $post;

  if (is_front_page() || is_home()) {
    return 'home';
  } elseif (is_single() && get_post_type() == 'post') {
    return 'single';
  } elseif (is_single() && get_post_type() == 'works') {
    return 'single-works';
  } elseif (is_tax() || is_category() || is_tag()) {
    return 'taxonomy';
  } elseif (is_page()) {
    // 固定ページの場合、スラッグに基づいてページタイプを返す
    return $post->post_name; // ここでスラッグを返す
  } else {
    // 他のページタイプに基づいて条件分岐を追加
    return null;
  }
}

// 現在のページタイプに基づいて設定を取得
$current_page_type = getCurrentPageType();

// ページタイプをキーとしてページ設定を取得
$pageConfig = $pageSettings[$current_page_type] ?? null;


// ページ設定が存在する場合、それに基づいてHTMLを出力
if ($pageConfig) {
  $image_pc = $pageConfig['image_pc'] ?? "/assets/images/common/noimage_pc@2x.webp";
  $image_sp = $pageConfig['image_sp'] ?? "/assets/images/common/noimage@2x.webp";
  $title_name_works = $pageConfig['title_name_works'] ?? "";
  $title_en = $pageConfig['title_en'] ?? "タイトルが設定されていません";
  $title_name_case = $pageConfig['title_name_case'] ?? "";
  $title_ja = $pageConfig['title_ja'] ?? "タイトルが設定されていません";

  // HTML出力部分は以前のコードを保持
}
?>

<div class="p-sub-fv__bg">
  <picture>
    <source srcset="<?php echo esc_url(get_theme_file_uri("$image_pc")); ?>" media="(min-width:768px)" width="" height="" />
    <img src="<?php echo esc_url(get_theme_file_uri("$image_sp")); ?>" alt="" width="" height="" />
  </picture>
</div>
<div class="p-sub-fv__inner l-inner<?php if (is_single() && (get_post_type() == 'post' || get_post_type() == 'works')) echo ' p-sub-fv__inner--article'; ?>">

  <div class="p-sub-fv__title">
    <div class="c-section-title--left">
      <!-- $title_nameが空でない場合のみ出力 -->
      <?php if (!empty($title_name_works)) : ?>
        <span class="c-section-title__name"><?php echo $title_name_works; ?></span>
      <?php endif; ?>
      <span class="c-section-title__en"><?php echo $title_en; ?>
        <!-- $title_nameが空でない場合のみ出力 -->
        <?php if (!empty($title_name_case)) : ?>
          <span class="c-section-title__name"><?php echo $title_name_case; ?></span>
        <?php endif; ?></span>
      <h2 class="c-section-title__ja"><?php echo $title_ja; ?></h2>
    </div>
  </div>
</div>