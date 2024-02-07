<?php
// ページ設定を配列として定義
$pageSettings = [
  "single" => [
    "link" => "/case",
  ],
  "single-works" => [
    "link" => "/works",
  ],
  "photograph" => [
    "link" => "/plan",
  ],
  "consultation" => [
    "link" => "/plan",
  ],
];


// 現在のページの種類やスラッグに基づいてリンクを取得する
$link = '/'; // デフォルトのリンク
if (is_singular('post')) { // 通常の投稿ページの場合
  $link = $pageSettings['single']['link'];
} elseif (is_singular('works')) { // カスタム投稿タイプ「works」のページの場合
  $link = $pageSettings['single-works']['link'];
} elseif (is_page()) { // 固定ページの場合
  $slug = get_post_field('post_name', get_post()); // 現在のページのスラッグを取得
  if (array_key_exists($slug, $pageSettings)) { // スラッグが $pageSettings 配列に存在するか確認
    $link = $pageSettings[$slug]['link'];
  }
}
?>

<div class="p-buttons">
  <div class="p-buttons__button"><a href="<?php echo esc_url(home_url($link)); ?>" class="c-button">back</a></div>
  <div class="p-buttons__button"><a href="<?php echo esc_url(home_url()); ?>" class="c-button">top</a></div>
</div>