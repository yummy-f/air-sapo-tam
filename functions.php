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
            'supports' => array(
                'title',
                'editor',
                'thumbnail', // アイキャッチ画像
                'custom-fields', //カスタムフィールド
            )
        )
    );
}


// カスタムタクソノミー（カテゴリ）の追加
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

// 管理事例一覧にカテゴリ名を表示
function add_custom_column($column)
{
    // global $post_type;
    // if( $post_type === 'case_study' ){
    $column['case_study-category'] = 'カテゴリ';
    // }
    return $column;
}
add_filter('manage_posts_columns', 'add_custom_column');

function add_custom_column_id($column_name, $id)
{
    if ($column_name === 'case_study-category') {
        echo get_the_term_list($id, 'case_study-category', '', ', ');
    }
}
add_action('manage_case_study_posts_custom_column', 'add_custom_column_id', 10, 2);

// 順番変更（カスタム投稿一覧でのカラムの表示順）
function sort_custom_columns($columns)
{
    $columns = array(
        'cb'     => '<input type="checkbox" />',
        'title' => 'タイトル',
        'case_study-category'   => 'カテゴリー',
        'date'   => '日時'
    );
    return $columns;
}
add_filter('manage_case_study_posts_columns', 'sort_custom_columns');

// sessionの開始
add_action('init', 'session_start1');
function session_start1()
{
    session_start();
}
