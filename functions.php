<?php

/* 基本設定 */
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // titleタグ自動生成
  add_theme_support('html5', array( // HTML5による出力
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
}
add_action('after_setup_theme', 'my_setup');

/* Contact Form 7で自動挿入されるPタグ、brタグを削除 */
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
  return false;
}

/* wordpressバージョン情報の削除 */
remove_action("wp_head", "wp_generator");

/* 投稿者一覧ページを自動で生成されないようにする */
function disable_author_archive()
{
  if (preg_match('#/author/.+#', $_SERVER['REQUEST_URI'])) {
    wp_redirect(esc_url(home_url('/404.php')));
    exit;
  }
}
add_action('init', 'disable_author_archive');

/* テンプレートパスの取得 */
function temp_path()
{
  echo esc_url(get_template_directory_uri());
}

/* assetsパスの取得 */
function assets_path()
{
  echo esc_url(get_template_directory_uri() . '/assets');
}

/* imgパスの取得 */
function img_path()
{
  echo esc_url(get_template_directory_uri() . '/assets/images');
}

/* blogの最大投稿数 */
function custom_posts_per_page($query)
{
  if (!is_admin() && $query->is_main_query()) {
    // カスタム投稿のスラッグを記述
    if (is_post_type_archive('blog')) {
      // 表示件数を指定
      $query->set('posts_per_page', 6);
    }
  }
}
add_action('pre_get_posts', 'custom_posts_per_page');

/* script、style設定 */
function my_script_init()
{
  // フォント
  wp_enqueue_style('NotoSerifJP', '//fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;500;600;700&display=swap', array(), null);

  // WordPressに含まれているjquery.jsを読み込まない
  wp_deregister_script('jquery');

  // swiper
  wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.7.1.min.js', array(), '1.0.1');
  wp_enqueue_script('slider-js', '//unpkg.com/swiper@11/swiper-bundle.min.js', array(), '', true);
  wp_enqueue_style('slider-css', '//unpkg.com/swiper@11/swiper-bundle.min.css', array(), '', 'all');

  // JavaScript
  wp_enqueue_script('my-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.1', true);

  // css
  wp_enqueue_style('my-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.1', 'all');
}
add_action('wp_enqueue_scripts', 'my_script_init');

// // パンくずリスト文字数制限
// add_filter('bcn_breadcrumb_title', 'truncate_bc_title', 10, 3);
// function truncate_bc_title($title, $type, $id)
// {
//   $limit = 10;
//   $truncated = mb_substr($title, 0, $limit);

//   if (mb_strlen($title) > $limit) {
//     $truncated .= '...';
//   }

//   return $truncated;
// }

// // パンくずリスト除外
// function custom_remove_pages_from_breadcrumbs($trail)
// {
//   // 現在のページIDを取得
//   $current_page_id = get_queried_object_id();

//   // contact、confirm、および complete ページのIDを取得
//   $contact_id = get_page_by_path('contact')->ID;
//   $confirm_id = get_page_by_path('contact/confirm')->ID;
//   $complete_id = get_page_by_path('contact/confirm/complete')->ID; // このパスは調整が必要かもしれません

//   foreach ($trail->breadcrumbs as $key => $crumb) {
//     if ($crumb->get_id() == $contact_id) {
//       // 現在のページが confirm または complete の場合は contact を非表示
//       if ($current_page_id == $confirm_id || $current_page_id == $complete_id) {
//         unset($trail->breadcrumbs[$key]);
//       }
//     } elseif ($crumb->get_id() == $confirm_id && $current_page_id != $confirm_id) {
//       unset($trail->breadcrumbs[$key]);
//     }
//   }
// }
// add_filter('bcn_after_fill', 'custom_remove_pages_from_breadcrumbs');

// // ページネーション
// function custom_pagination()
// {
//   global $wp_query;
//   $big = 999999999; // この値は適当に大きな数字を設定

//   $pages = paginate_links(array(
//     'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
//     'format'    => '?paged=%#%',
//     'current'   => max(1, get_query_var('paged')),
//     'total'     => $wp_query->max_num_pages,
//     'mid_size'  => 2,
//     'end_size'  => 0,
//     'prev_text' => '前のページへ',
//     'next_text' => '次のページへ',
//     'type'      => 'array',
//   ));

//   if (is_array($pages)) {
//     $paged = (get_query_var('paged') == 0) ? 1 : get_query_var('paged');
//     echo '<div class="pagination"><ul>';
//     foreach ($pages as $page) {
//       echo "<li>$page</li>";
//     }
//     echo '</ul></div>';
//   }
// }