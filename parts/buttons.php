<?php
// ページ設定を配列として定義
$pageSettings = [
  "single" => [
    "link" => "/case",
  ],
  "single-works" => [
    "link" => "/works",
  ],
];

// 現在のページ名を取得する関数
if (!function_exists('getCurrentPageNameButtons')) {
  function getCurrentPageNameButtons()
  {
    if (is_front_page() || is_home()) {
      error_log('Current Page: home');
      return 'home';
    } elseif (is_singular("works")) {
      return 'single-works';
    } elseif (is_singular()) { // 任意の投稿タイプの個別ページであるか判定
      return 'single';
    } elseif (is_archive()) {
      return get_queried_object()->name;
    }
    return null; // 該当しない場合
  }
}

$current_page = getCurrentPageNameButtons();
$link = $pageSettings[$current_page]['link'] ?? "";

?>

<div class="p-buttons">
  <div class="p-buttons__button"><a href="<?php echo esc_url(home_url("$link")); ?>" class="c-button">back</a></div>
  <div class="p-buttons__button"><a href="<?php echo esc_url(home_url("")); ?>" class="c-button">top</a></div>
</div>