<?php
// ページ設定を配列として定義
$pageSettings = [
  "single" => [
    "link" => "case",
  ],
  "single-works" => [
    "link" => "works",
  ],
  "photograph" => [
    "link" => "plan",
  ],
  "consultation" => [
    "link" => "plan",
  ],
];

// リンクの初期設定
$link = '/'; // デフォルトのリンク
$backButtonOnClick = ''; // 戻るボタンのonClickイベント

if (is_singular('post') || is_singular('works')) {
  // 「戻る」ボタンが1つ前のページに戻るようにJavaScriptのonClickイベントを設定
  $backButtonOnClick = 'onclick="window.history.back(); return false;"';
} elseif (is_page()) {
  $slug = get_post_field('post_name', get_post()); // 現在のページのスラッグを取得
  if (array_key_exists($slug, $pageSettings)) {
    $link = $pageSettings[$slug]['link'];
  }
}
?>

<div class="p-buttons">
  <?php if ($backButtonOnClick) : ?>
    <div class="p-buttons__button"><a href="#" <?php echo $backButtonOnClick; ?> class="c-button">back</a></div>
  <?php else : ?>
    <div class="p-buttons__button"><a href="<?php echo esc_url(home_url($link)); ?>" class="c-button">back</a></div>
  <?php endif; ?>
  <div class="p-buttons__button"><a href="<?php echo esc_url(home_url()); ?>" class="c-button">top</a></div>
</div>