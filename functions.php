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
  // WordPressに含まれているjquery.jsを読み込まない
  wp_deregister_script('jquery');

  // フォント
  wp_enqueue_style('google-fonts-noto-serif', '//fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;500;600;700&display=swap', array(), '1.0.1', 'all');

  // swiper
  wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.7.1.min.js', array(), '1.0.1');
  wp_enqueue_script('slider-js', '//unpkg.com/swiper@10/swiper-bundle.min.js', array(), '', true);
  wp_enqueue_style('slider-css', '//unpkg.com/swiper@10/swiper-bundle.min.css', array(), '', 'all');

  //lightbox
  // wp_enqueue_script('lightbox-js', '//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox-plus-jquery.min.js', array(), '', 'true');
  // wp_enqueue_style('lightbox-css', '//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css', array(), '', 'all');

  //luminous
  wp_enqueue_script('luminous-js', get_template_directory_uri() . '/assets/luminous/luminous.min.js', array('jquery'), '', true);
  wp_enqueue_style('luminous-css', get_template_directory_uri() . '/assets/luminous/luminous-basic.min.css', array(), '', 'all');

  // Ajax


  // JavaScript
  wp_enqueue_script('my-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.1', true);

  // css
  wp_enqueue_style('my-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.1', 'all');
}
add_action('wp_enqueue_scripts', 'my_script_init');

// エディターを非表示
function my_custom_init()
{
  remove_post_type_support('post', 'editor');
  remove_post_type_support('works', 'editor');
}
add_action('admin_init', 'my_custom_init');

// 相談事例詳細のスラッグを自動設定
function set_custom_post_slug($data, $postarr)
{
  if ($data['post_type'] === 'post' && isset($postarr['ID'])) {
    $data['post_name'] = 'case-article' . $postarr['ID'];
  }
  return $data;
}
add_filter('wp_insert_post_data', 'set_custom_post_slug', 10, 2);

// 撮影事例詳細のスラッグを自動設定
function set_custom_archive_slug($data, $postarr)
{
  if ($data['post_type'] === 'works' && isset($postarr['ID'])) {
    $data['post_name'] = 'works-article-' . $postarr['ID']; // スラッグの形式を変更
  }
  return $data;
}
add_filter('wp_insert_post_data', 'set_custom_archive_slug', 10, 2);

// 繰り返しフィールドの画像IDを取得
function get_attachment_id_from_url($image_url)
{
  global $wpdb;
  $query = "SELECT post_id FROM $wpdb->postmeta WHERE meta_value = %s";
  $attachment_id = $wpdb->get_var($wpdb->prepare($query, $image_url));

  // IDが見つからない場合は、URLを再構成して再試行
  if (empty($attachment_id)) {
    $upload_dir_paths = wp_upload_dir();
    // URLからベースURLを削除
    $image_path = str_replace($upload_dir_paths['baseurl'] . '/', '', $image_url);
    $query = "SELECT post_id FROM $wpdb->postmeta WHERE meta_value LIKE %s";
    $attachment_id = $wpdb->get_var($wpdb->prepare($query, '%' . $wpdb->esc_like($image_path)));
  }

  return $attachment_id;
}



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
// function my_theme_pagination()
// {
//   global $wp_query;
//   $big = 999999999; // need an unlikely integer

//   echo paginate_links(array(
//     'base'    => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
//     'format'  => '?paged=%#%',
//     'current' => max(1, get_query_var('paged')),
//     'total'   => $wp_query->max_num_pages,
//     'type'    => 'list',
//   ));
// }

// if (!function_exists('my_pagination')) {
//   function my_pagination()
//   {
//     if (is_singular())
//       return;

//     global $wp_query;

//     /** Stop execution if there's only 1 page */
//     if ($wp_query->max_num_pages <= 1)
//       return;

//     $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
//     $max   = intval($wp_query->max_num_pages);

//     /** Add current page to the array */
//     if ($paged >= 1)
//       $links[] = $paged;

//     /** Add the pages around the current page to the array */
//     if ($paged >= 3) {
//       $links[] = $paged - 1;
//       $links[] = $paged - 2;
//     }

//     if (($paged + 2) <= $max) {
//       $links[] = $paged + 2;
//       $links[] = $paged + 1;
//     }

//     echo '<div class="pagination"><ul>' . "\n";

//     /** Previous Post Link */
//     if (get_previous_posts_link())
//       printf('<li>%s</li>' . "\n", get_previous_posts_link());

//     /** Link to first page, plus ellipses if necessary */
//     if (!in_array(1, $links)) {
//       $class = 1 == $paged ? ' class="active"' : '';

//       printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');

//       if (!in_array(2, $links))
//         echo '<li>…</li>';
//     }

//     /** Link to current page, plus 2 pages in either direction if necessary */
//     sort($links);
//     foreach ((array) $links as $link) {
//       $class = $paged == $link ? ' class="active"' : '';
//       printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
//     }

//     /** Link to last page, plus ellipses if necessary */
//     if (!in_array($max, $links)) {
//       if (!in_array($max - 1, $links))
//         echo '<li>…</li>' . "\n";

//       $class = $paged == $max ? ' class="active"' : '';
//       printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
//     }

//     /** Next Post Link */
//     if (get_next_posts_link())
//       printf('<li>%s</li>' . "\n", get_next_posts_link());

//     echo '</ul></div>' . "\n";
//   }
// }
