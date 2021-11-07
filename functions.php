<?php
// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true; // リライトを有効にする
        $args['has_archive'] = 'tam_diary'; // 任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);
add_theme_support('post-thumbnails');

remove_filter('the_content', 'wpautop'); // 記事の自動整形を無効にする
remove_filter('the_excerpt', 'wpautop'); // 抜粋の自動整形を無効にする


// カスタム投稿タイプの追加
add_action('init', 'create_post_type');
function create_post_type()
{
    register_post_type(
        'case_study', // 投稿タイプ名の定義
        array(
            'labels' => array(
                'name' => __('管理事例'), // 表示する投稿タイプ名
                'singular_name' => __('管理事例')
            ),
            'public' => true,
            'menu_position' => 5,
            'menu_icon'     => 'dashicons-edit', // メニューで使用するアイコン
            'supports' => array('title','editor','thumbnail') // アイキャッチ画像
        )
    );
}


// カスタムタクソノミーの追加
function add_custom_taxonomy()
{
    // 制作実績(カテゴリー)
    register_taxonomy(
        'case_study-category', // 1.タクソノミーの名前
        'case_study',          // 2.利用する投稿タイプ
        array(            // 3.オプション
            'label' => 'カテゴリー', // タクソノミーの表示名
            'hierarchical' => true, // 階層を持たせるかどうか
            'public' => true, // 利用する場合はtrueにする
        )
    );
    // 制作実績(タグ)
    register_taxonomy(
        'case_study-tag', // 1.タクソノミーの名前
        'case_study',     // 2.利用する投稿タイプ
        array(       // 3.オプション
            'label' => 'タグ', // タクソノミーの表示名
            'hierarchical' => false, // 階層を持たせるかどうか
            'public' => true, // 利用する場合はtrueにする
        )
    );
}
add_action('init', 'add_custom_taxonomy');


// メニュー追加
add_action('after_setup_theme', 'register_menu');
function register_menu()
{
    register_nav_menu('header-navigation', __('header-navigation Menu', 'theme-slug'));
    register_nav_menu('footer1-navigation', __('footer1-navigation Menu', 'theme-slug'));
    register_nav_menu('footer2-navigation', __('footer2-navigation Menu', 'theme-slug'));
}
