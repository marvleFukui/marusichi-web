<?php
/**
 * 丸七高橋組 テーマ functions.php
 * - 静的デザイン(assets/css/style.css, images/)を同梱してenqueue
 * - カスタム投稿「施工実績」= works_post（既存 nv_web_format と同一slug＝ACFが一致）
 * - タクソノミー（業態/実行内容）※先方確認により調整
 * - クラシックエディタ運用（マニュアル準拠）
 */
if (!defined('ABSPATH')) exit;

/* ---------- テーマ基本設定 ---------- */
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');       // アイキャッチ
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', ['search-form', 'gallery', 'caption', 'style', 'script']);
});

/* ---------- CSS / JS（既存の静的アセットを同梱） ---------- */
add_action('wp_enqueue_scripts', function () {
    $dir = get_stylesheet_directory();
    $uri = get_stylesheet_directory_uri();
    // filemtime でキャッシュバスト
    $cv  = fn($p) => file_exists($dir . $p) ? filemtime($dir . $p) : '1.0.0';

    wp_enqueue_style('marusichi-fonts',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Noto+Sans:wght@400;500;700;800&display=swap',
        [], null);
    wp_enqueue_style('marusichi-style', $uri . '/assets/css/style.css', [], $cv('/assets/css/style.css'));

    wp_enqueue_script('marusichi-config', $uri . '/assets/js/config.js', [], $cv('/assets/js/config.js'), true);
    wp_enqueue_script('marusichi-main',   $uri . '/assets/js/main.js', ['marusichi-config'], $cv('/assets/js/main.js'), true);
});

/* ---------- カスタム投稿「施工実績」＋タクソノミー ---------- */
add_action('init', function () {

    register_post_type('works_post', [
        'label'         => '施工実績',
        'labels'        => [
            'name'          => '施工実績',
            'singular_name' => '施工実績',
            'add_new'       => '新規投稿を追加',
            'add_new_item'  => '新規施工実績を追加',
            'edit_item'     => '施工実績を編集',
            'all_items'     => '施工実績一覧',
            'menu_name'     => '施工実績',
        ],
        'public'        => true,
        'has_archive'   => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-hammer',
        'supports'      => ['title', 'editor', 'thumbnail'],
        'rewrite'       => ['slug' => 'works', 'with_front' => false],
        'show_in_rest'  => false, // クラシックエディタ
    ]);

    // 実績カテゴリーA/B/C（既存 nv_web_format の管理画面・マニュアルに合わせた3タクソノミー）
    // A=業態、B=実行内容、C=予備（丸七は主にA/Bを使用）
    $jisseki = [
        'jisseki_cat_a' => '実績カテゴリーA',
        'jisseki_cat_b' => '実績カテゴリーB',
        'jisseki_cat_c' => '実績カテゴリーC',
    ];
    foreach ($jisseki as $slug => $label) {
        register_taxonomy($slug, 'works_post', [
            'label'             => $label,
            'labels'            => [
                'name'          => $label,
                'singular_name' => $label,
                'all_items'     => $label . '一覧',
                'add_new_item'  => '新規' . $label . 'を追加',
                'menu_name'     => $label,
            ],
            'hierarchical'      => true,   // チェックボックス表示（マニュアルと同じUI）
            'public'            => true,
            'show_admin_column' => true,
            'rewrite'           => ['slug' => 'works/' . str_replace('jisseki_cat_', 'cat-', $slug), 'with_front' => false],
        ]);
    }
});

/* ---------- 実績カテゴリーの初期ターム（A=業態: 土木/建築、B=実行内容: 4区分） ---------- */
add_action('init', function () {
    if (get_option('marusichi_jisseki_seeded')) return;
    $seed = [
        'jisseki_cat_a' => ['土木', '建築'],
        'jisseki_cat_b' => ['土木（公共）', '土木（民間）', '建築（公共）', '建築（民間）'],
    ];
    foreach ($seed as $tax => $terms) {
        if (!taxonomy_exists($tax)) continue;
        foreach ($terms as $t) {
            if (!term_exists($t, $tax)) wp_insert_term($t, $tax);
        }
    }
    update_option('marusichi_jisseki_seeded', 1);
}, 20);

/* ---------- クラシックエディタ（施工実績・NEWS投稿） ---------- */
add_filter('use_block_editor_for_post_type', function ($use, $type) {
    if (in_array($type, ['works_post', 'post'], true)) return false;
    return $use;
}, 10, 2);

/* ---------- ACF フィールド（施工実績詳細） ---------- */
require get_theme_file_path('inc/acf-fields.php');

/* ---------- 新着取得ヘルパ（TOP・RECRUITの差し込み用） ---------- */
function marusichi_works_query($n = 6, $args = []) {
    return new WP_Query(array_merge([
        'post_type'      => 'works_post',
        'posts_per_page' => $n,
        'no_found_rows'  => true,
    ], $args));
}
function marusichi_news_query($n = 3, $args = []) {
    return new WP_Query(array_merge([
        'post_type'      => 'post',
        'posts_per_page' => $n,
        'no_found_rows'  => true,
    ], $args));
}

/* ---------- 施工実績詳細：画像取得ヘルパ（画像/ギャラリー両対応） ---------- */
function marusichi_work_images($post_id) {
    $type = get_field('画像タイプ選択', $post_id);
    $ids  = [];
    if ($type === 'gallery_select') {
        $rows = get_field('ギャラリー', $post_id) ?: [];
        foreach ($rows as $r) {
            if (!empty($r['ギャラリー画像登録'])) $ids[] = (int) $r['ギャラリー画像登録'];
        }
    } elseif ($type === 'img_select') {
        $one = get_field('画像登録', $post_id);
        if ($one) $ids[] = (int) $one;
    }
    return $ids; // 添付ファイルIDの配列
}

/* ---------- 構造化データ（JSON-LD）: フロントページに出力 ---------- */
function marusichi_jsonld() {
    if (!is_front_page()) return;
    $home = home_url('/');
    $logo = get_template_directory_uri() . '/images/common/logo_col.svg';
    $data = [
        '@context' => 'https://schema.org',
        '@graph'   => [
            [
                '@type'         => 'GeneralContractor',
                '@id'           => $home . '#organization',
                'name'          => '株式会社丸七高橋組',
                'alternateName' => 'MARUSHICHI TAKAHASHI',
                'url'           => $home,
                'logo'          => $logo,
                'image'         => $logo,
                'description'   => '北海道斜里町の総合建設会社。建築・土木工事から注文住宅まで、知床・道東エリアで地域の暮らしを支えるゼネラルコントラクターです。',
                'telephone'     => '+81-152-23-2441',
                'faxNumber'     => '+81-152-23-3052',
                'foundingDate'  => '1958-05',
                'founder'       => ['@type' => 'Person', 'name' => '高橋七郎'],
                'address'       => [
                    '@type'           => 'PostalAddress',
                    'postalCode'      => '099-4115',
                    'addressRegion'   => '北海道',
                    'addressLocality' => '斜里郡斜里町',
                    'streetAddress'   => '光陽町16番地8',
                    'addressCountry'  => 'JP',
                ],
                'areaServed' => ['@type' => 'AdministrativeArea', 'name' => '北海道オホーツク・知床エリア'],
                'openingHoursSpecification' => [[
                    '@type'     => 'OpeningHoursSpecification',
                    'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
                    'opens'     => '08:00',
                    'closes'    => '17:00',
                ]],
                'sameAs'     => ['https://www.instagram.com/marushichi_takahashi/'],
                'department' => [[
                    '@type'     => 'GeneralContractor',
                    'name'      => '株式会社丸七高橋組 北見営業所',
                    'telephone' => '+81-157-57-1533',
                    'address'   => [
                        '@type'           => 'PostalAddress',
                        'postalCode'      => '090-0834',
                        'addressRegion'   => '北海道',
                        'addressLocality' => '北見市',
                        'streetAddress'   => 'とん田西町218番地13号 1F',
                        'addressCountry'  => 'JP',
                    ],
                ]],
            ],
            [
                '@type'      => 'WebSite',
                '@id'        => $home . '#website',
                'url'        => $home,
                'name'       => '株式会社丸七高橋組',
                'inLanguage' => 'ja',
                'publisher'  => ['@id' => $home . '#organization'],
            ],
        ],
    ];
    echo "\n<script type=\"application/ld+json\">\n"
        . wp_json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)
        . "\n</script>\n";
}
add_action('wp_head', 'marusichi_jsonld');
