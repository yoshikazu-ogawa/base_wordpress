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

// セルフピンバック禁止
function no_self_ping( &$links ) {
$home = get_option( 'home' );
foreach ( $links as $l => $link )
if ( 0 === strpos( $link, $home ) )
unset($links[$l]);
}
add_action( 'pre_ping', 'no_self_ping' );

//パンくず
function breadcrumb(){
	global $post;
	$str ='';
	if(!is_home()&&!is_admin()){ 
		$str.= '<div id="breadcrumb">';
		$str.= '<ul>';
		$str.= '<li><a href="'. home_url() .'/">HOME</a></li>';
		$str.= '<li>&gt;</li>';
		
		if(is_search()){
			$str.='<li>「'. get_search_query() .'」で検索した結果</li>';
		} elseif(is_tag()){
			$str.='<li>タグ : '. single_tag_title( '' , false ). '</li>';
		} elseif(is_404()){
			$str.='<li>404 Not found</li>';
		} elseif(is_date()){
			if(get_query_var('day') != 0){
				$str.='<li><a href="'. get_year_link(get_query_var('year')). '">' . get_query_var('year'). '年</a></li>';
				$str.='<li>&gt;</li>';
				$str.='<li><a href="'. get_month_link(get_query_var('year'), get_query_var('monthnum')). '">'. get_query_var('monthnum') .'月</a></li>';
				$str.='<li>&gt;</li>';
				$str.='<li>'. get_query_var('day'). '日</li>';
			} elseif(get_query_var('monthnum') != 0){
				$str.='<li><a href="'. get_year_link(get_query_var('year')) .'">'. get_query_var('year') .'年</a></li>';
				$str.='<li>&gt;</li>';
				$str.='<li>'. get_query_var('monthnum'). '月</li>';
			} else {
				$str.='<li>'. get_query_var('year') .'年</li>';
			}
		} elseif(is_category()) {
			$cat = get_queried_object();
			if($cat -> parent != 0){
				$ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
				foreach($ancestors as $ancestor){
					$str.='<li><a href="'. get_category_link($ancestor) .'">'. get_cat_name($ancestor) .'</a></li>';
					$str.='<li>&gt;</li>';
				}
			}
			$str.='<li>'. $cat -> name . '</li>';
		} elseif(is_author()){
			$str .='<li>投稿者 : '. get_the_author_meta('display_name', get_query_var('author')).'</li>';
		} elseif(is_page()){
			if($post -> post_parent != 0 ){
				$ancestors = array_reverse(get_post_ancestors( $post->ID ));
				foreach($ancestors as $ancestor){
					$str.='<li><a href="'. get_permalink($ancestor).'">'. get_the_title($ancestor) .'</a></li>';
					$str.='<li>&gt;</li>';
				}
			}
			$str.= '<li>'. $post -> post_title .'</li>';
			
		} elseif(is_attachment()){
			if($post -> post_parent != 0 ){
				$str.= '<li><a href="'. get_permalink($post -> post_parent).'">'. get_the_title($post -> post_parent) .'</a></li>';
				$str.='<li>&gt;</li>';
			}
			$str.= '<li>' . $post -> post_title . '</li>';
		} elseif(is_single()){
			$categories = get_the_category($post->ID);
			$cat = $categories[0];
			if($cat -> parent != 0){
				$ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
				foreach($ancestors as $ancestor){
					$str.='<li><a href="'. get_category_link($ancestor).'">'. get_cat_name($ancestor). '</a></li>';
					$str.='<li>&gt;</li>';
				}
			}
			$str.='<li><a href="'. get_category_link($cat -> term_id). '">'. $cat-> cat_name . '</a></li>';
			$str.='<li>&gt;</li>';
			$str.= '<li>'. $post -> post_title .'</li>';
		} else{
			$str.='<li>'. wp_title('', false) .'</li>';
		}
		$str.='</ul>';
		$str.='</div>';
	}
	echo $str;
}


?>