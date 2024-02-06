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
    "title_ja" => "プラン紹介"
  ],
  "home" => [
    "image_pc" => "/assets/images/case/fv_pc@2x.webp",
    "image_sp" => "/assets/images/case/fv@2x.webp",
    "title_en" => "case",
    "title_ja" => "プラン紹介"
  ],
  "single" => [
    "image_pc" => "/assets/images/case/fv_pc@2x.webp",
    "image_sp" => "/assets/images/case/fv@2x.webp",
    "title_name" => $case_name,
    "title_en" => "PHOTO SHOOT",
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
    "title_name" => "$works_name",
    "title_en" => "PHOTO SHOOT",
    "title_ja" => "$current_post_title"
  ],
  "404" => [
    "image_pc" => "",
    "image_sp" => "",
    "title_en" => "404 not found",
    "title_ja" => "お探しのページが見つかりません"
  ],
];

// 現在のページ名を取得する関数
function getCurrentPageName()
{
  if (is_front_page() || is_home()) {
    error_log('Current Page: home');
    return 'home';
  } elseif (is_singular("works")) {
    return 'single-works';
  } elseif (is_singular()) {
    return 'single';
  } elseif (is_archive()) {
    return get_queried_object()->name;
  } elseif (is_404()) {
    return '404';
  }
  return null; // 該当しない場合
}

// 現在のページ名を取得
$current_page = getCurrentPageName();

// 'single' の 'title_ja' を動的に設定
if ($current_page == 'single') {
  $pageSettings['single']['title_ja'] =
    $current_post_title; // get_the_title() の結果を使用
}

// 現在のページの設定を取得（ページが配列に存在しない場合はデフォルト値を使用）
$image_pc = !empty($pageSettings[$current_page]['image_pc']) ? $pageSettings[$current_page]['image_pc'] : "/assets/images/common/noimage_pc@2x.webp";
$image_sp = !empty($pageSettings[$current_page]['image_sp']) ? $pageSettings[$current_page]['image_sp'] : "/assets/images/common/noimage@2x.webp";
$title_name = $pageSettings[$current_page]['title_name'] ?? "";
$title_en = $pageSettings[$current_page]['title_en'] ?? "タイトルが設定されていません";
$title_ja = $pageSettings[$current_page]['title_ja'] ?? "タイトルが設定されていません";

?>

<div class="p-sub-fv__bg">
  <picture>
    <source srcset="<?php echo esc_url(get_theme_file_uri("$image_pc")); ?>" media="(min-width:768px)" width="" height="" />
    <img src="<?php echo esc_url(get_theme_file_uri("$image_sp")); ?>" alt="" width="" height="" />
  </picture>
</div>
<div class="p-sub-fv__inner l-inner">
  <div class="p-sub-fv__title">
    <div class="c-section-title--left">
      <!-- $title_nameが空でない場合のみ出力 -->
      <?php if (!empty($title_name)) : ?>
        <span class="c-section-title__name"><?php echo $title_name; ?></span>
      <?php endif; ?>
      <span class="c-section-title__en"><?php echo $title_en; ?></span>
      <h2 class="c-section-title__ja"><?php echo $title_ja; ?></h2>
    </div>
  </div>
</div>