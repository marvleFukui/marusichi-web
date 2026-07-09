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

    // ---------- 求人情報（recruit_post） ＝ RECRUIT INFO 用 ----------
    register_post_type('recruit_post', [
        'label'         => '求人情報',
        'labels'        => [
            'name'          => '求人情報',
            'singular_name' => '求人情報',
            'add_new'       => '新規追加',
            'add_new_item'  => '新規求人情報を追加',
            'edit_item'     => '求人情報を編集',
            'all_items'     => '求人情報一覧',
            'menu_name'     => '求人情報',
        ],
        'public'        => true,
        'has_archive'   => true,
        'menu_position' => 6,
        'menu_icon'     => 'dashicons-id',
        'supports'      => ['title', 'editor', 'thumbnail'],
        'rewrite'       => ['slug' => 'jobinfo', 'with_front' => false],
        'show_in_rest'  => false, // クラシックエディタ
    ]);

    // 求人カテゴリー（チェックボックスUI）
    register_taxonomy('recruit_cat', 'recruit_post', [
        'label'             => '求人カテゴリー',
        'labels'            => [
            'name'          => '求人カテゴリー',
            'singular_name' => '求人カテゴリー',
            'all_items'     => '求人カテゴリー一覧',
            'add_new_item'  => '新規求人カテゴリーを追加',
            'menu_name'     => '求人カテゴリー',
        ],
        'hierarchical'      => true,
        'public'            => true,
        'show_admin_column' => true,
        'rewrite'           => ['slug' => 'jobinfo/cat', 'with_front' => false],
    ]);
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

/* ---------- 求人カテゴリーの初期ターム（新卒/中途/説明会/インターンシップ） ---------- */
add_action('init', function () {
    if (get_option('marusichi_recruit_seeded')) return;
    if (!taxonomy_exists('recruit_cat')) return;
    foreach (['新卒', '中途', '説明会', 'インターンシップ'] as $t) {
        if (!term_exists($t, 'recruit_cat')) wp_insert_term($t, 'recruit_cat');
    }
    update_option('marusichi_recruit_seeded', 1);
}, 20);

/* ---------- クラシックエディタ（施工実績・求人情報・NEWS投稿） ---------- */
add_filter('use_block_editor_for_post_type', function ($use, $type) {
    if (in_array($type, ['works_post', 'recruit_post', 'post'], true)) return false;
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
function marusichi_recruit_query($n = 3, $args = []) {
    return new WP_Query(array_merge([
        'post_type'      => 'recruit_post',
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

/* ---------- Contact Form 7：タイトル名でフォームを埋め込むヘルパ ---------- */
function marusichi_cf7($title) {
    if (!shortcode_exists('contact-form-7')) {
        return '<p class="cf-noform">フォームを準備中です。（Contact Form 7 を有効化し、「' . esc_html($title) . '」という名前のフォームを作成してください）</p>';
    }
    $forms = get_posts([
        'post_type'      => 'wpcf7_contact_form',
        'posts_per_page' => -1,
        'post_status'    => 'any',
    ]);
    $want = trim($title);
    $partial = null;
    foreach ($forms as $f) {
        $t = trim($f->post_title);
        if ($t === $want) {                                   // 完全一致（前後空白は無視）
            return do_shortcode('[contact-form-7 id="' . $f->ID . '"]');
        }
        if ($partial === null && ($t !== '') &&               // 部分一致フォールバック
            (mb_strpos($t, $want) !== false || mb_strpos($want, $t) !== false)) {
            $partial = $f;
        }
    }
    if ($partial) {
        return do_shortcode('[contact-form-7 id="' . $partial->ID . '"]');
    }
    return '<p class="cf-noform">「' . esc_html($title) . '」フォームが見つかりません。Contact Form 7 で「' . esc_html($title) . '」という名前のフォームを作成してください。</p>';
}

/* ---------- CF7：メールアドレス（確認用）の一致チェック ---------- */
function marusichi_cf7_email_confirm($result, $tag) {
    $name = is_object($tag) ? $tag->name : (isset($tag['name']) ? $tag['name'] : '');
    if ($name === 'email-confirm') {
        $email   = isset($_POST['email']) ? trim(wp_unslash($_POST['email'])) : '';
        $confirm = isset($_POST['email-confirm']) ? trim(wp_unslash($_POST['email-confirm'])) : '';
        if ($email !== '' && $email !== $confirm) {
            $result->invalidate($tag, 'メールアドレスが一致しません。');
        }
    }
    return $result;
}
add_filter('wpcf7_validate_email*', 'marusichi_cf7_email_confirm', 20, 2);
add_filter('wpcf7_validate_email', 'marusichi_cf7_email_confirm', 20, 2);

/* ---------- COMPANY / RECRUIT はコンテンツ最大幅900px（bodyにis-w900付与） ---------- */
add_filter('body_class', function ($classes) {
    if (is_page('company') || is_page('recruit')
        || is_page_template('page-company.php') || is_page_template('page-recruit.php')) {
        $classes[] = 'is-w900';
    }
    return $classes;
});

/* ---------- アーカイブ見出しの接頭辞（「月別:」「カテゴリー:」等）を除去 ---------- */
add_filter('get_the_archive_title_prefix', '__return_empty_string');
