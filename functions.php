<?php

// アイキャッチ
add_theme_support( 'post-thumbnails' );
add_image_size( 'newssize', 80, 80, true );

// 管理画面ロゴ
function my_custom_login_logo() {
  echo '<style type="text/css">
h1 a { background-image:url('.get_template_directory_uri().'/img/admin/custom-login-logo.png) !important; } </style>';
}
add_action('login_head', 'my_custom_login_logo');

// 不要なサイドバー項目の非表示
add_action( 'admin_menu', 'remove_admin_menu_links' );
function remove_admin_menu_links() {
     //remove_menu_page('index.php'); // ダッシュボード
     //remove_menu_page('edit.php'); // 記事投稿
     //remove_menu_page('upload.php'); // メディア
     remove_menu_page('link-manager.php'); // リンク
     //remove_menu_page('edit.php?post_type=page'); // 固定ページ
     remove_menu_page('edit-comments.php'); // コメント
     //remove_menu_page('themes.php'); // 外観
     //remove_menu_page('plugins.php'); // プラグイン
     //remove_menu_page('users.php'); // ユーザー
     //remove_menu_page('tools.php'); // ツール
     //remove_menu_page('options-general.php'); // 設定
}

?>