<?php // ページ設定を配列として定義
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
    "title_ja" => "プラン紹介"
  ],
  "photograph" => [
    "image_pc" => "/assets/images/photograph/fv_pc@2x.webp",
    "image_sp" => "/assets/images/photograph/fv@2x.webp",
    "title_en" => "photograph",
    "title_ja" => "プラン紹介"
  ],
  "case" => [
    "image_pc" => "/assets/images/case/fv_pc@2x.webp",
    "image_sp" => "/assets/images/case/fv@2x.webp",
    "title_en" => "case",
    "title_ja" => "プラン紹介"
  ],
  "flow" => [
    "image_pc" => "/assets/images/flow/fv_pc@2x.webp",
    "image_sp" => "/assets/images/flow/fv@2x.webp",
    "title_en" => "flow",
    "title_ja" => "プラン紹介"
  ],
  "works" => [
    "image_pc" => "/assets/images/works/fv_pc@2x.webp",
    "image_sp" => "/assets/images/works/fv@2x.webp",
    "title_en" => "works",
    "title_ja" => "プラン紹介"
  ],
];


// 現在のページ名を取得する関数
function getCurrentPageName()
{
  if (is_front_page() || is_home()) {
    return 'home'; // ホームページの識別子
  } elseif (is_page() || is_single()) {
    global $post;
    return $post->post_name; // 固定ページまたは投稿ページのスラッグ
  } elseif (is_archive()) {
    return get_queried_object()->name; // アーカイブページの場合（カテゴリー名、タグ名など）
  }
  // 他の条件も必要に応じて追加
  return null; // 該当しない場合
}

// 現在のページ名を取得
$current_page = getCurrentPageName();

// 現在のページの設定を取得（ページが配列に存在しない場合はデフォルト値を使用）
$image_pc = $pageSettings[$current_page]['image_pc'] ?? "/assets/images/common/noimage@2x.webp";
$image_sp = $pageSettings[$current_page]['image_sp'] ?? "/assets/images/common/noimage@2x.webp";
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
    <h2 class="c-title--left">
      <span class="c-title__main"><?php echo $title_en; ?></span><span class="c-title__sub"><?php echo $title_ja; ?></span>
    </h2>
  </div>
</div>