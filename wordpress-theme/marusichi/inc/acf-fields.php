<?php
/**
 * ACF フィールドグループ「施工実績詳細」
 * 先方(nv_web_format ver2)の acf-export をそのまま PHP 登録で再現。
 * 対象カスタム投稿: works_post
 * ※ACF PRO 必須（repeater / image / tab フィールドを使用）
 */
if (!defined('ABSPATH')) exit;

add_action('acf/init', function () {
    if (!function_exists('acf_add_local_field_group')) return;

    acf_add_local_field_group([
        'key' => 'group_646f02162f9c7',
        'title' => '施工実績詳細',
        'fields' => [
            // ---- タブ：施工実績追加登録（テキスト登録） ----
            [
                'key' => 'field_646f022d36390',
                'label' => '施工実績追加登録',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'key' => 'field_648beebbe7ee5',
                'label' => '商品タイトル',
                'name' => '商品タイトル',
                'type' => 'text',
            ],
            [
                'key' => 'field_64b8d47545559',
                'label' => '商品コピートップ',
                'name' => '商品コピートップ',
                'type' => 'text',
            ],
            [
                'key' => 'field_646f0238d92bb',
                'label' => '商品コピーボトム',
                'name' => '商品コピーボトム',
                'type' => 'text',
            ],
            [
                'key' => 'field_646f0242d92bc',
                'label' => '施工実績登録',
                'name' => '施工実績登録',
                'type' => 'repeater',
                'layout' => 'table',
                'min' => 0,
                'max' => 0,
                'button_label' => '行を追加',
                'sub_fields' => [
                    [
                        'key' => 'field_646f0a200ec65',
                        'label' => '項目タイトル',
                        'name' => '項目タイトル',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_646f0a2a0ec66',
                        'label' => '項目本文',
                        'name' => '項目本文',
                        'type' => 'textarea',
                        'rows' => 2,
                        'new_lines' => '',
                    ],
                ],
            ],
            // ---- タブ：画像登録 ----
            [
                'key' => 'field_646f031ace701',
                'label' => '画像登録',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'key' => 'field_648fe4cd8a9f5',
                'label' => '画像タイプ選択',
                'name' => '画像タイプ選択',
                'type' => 'radio',
                'choices' => [
                    'img_select' => '画像',
                    'gallery_select' => 'ギャラリー',
                ],
                'layout' => 'horizontal',
                'return_format' => 'value',
                'default_value' => '',
            ],
            [
                'key' => 'field_646f03356921f',
                'label' => 'ギャラリー',
                'name' => 'ギャラリー',
                'type' => 'repeater',
                'layout' => 'table',
                'min' => 1,
                'max' => 0,
                'button_label' => '行を追加',
                'conditional_logic' => [
                    [
                        ['field' => 'field_648fe4cd8a9f5', 'operator' => '==', 'value' => 'gallery_select'],
                    ],
                ],
                'sub_fields' => [
                    [
                        'key' => 'field_646f034b69220',
                        'label' => 'ギャラリー画像登録',
                        'name' => 'ギャラリー画像登録',
                        'type' => 'image',
                        'return_format' => 'id',
                        'preview_size' => 'medium',
                        'library' => 'all',
                    ],
                ],
            ],
            [
                'key' => 'field_648fe537672ca',
                'label' => '画像登録',
                'name' => '画像登録',
                'type' => 'image',
                'return_format' => 'id',
                'preview_size' => 'medium',
                'library' => 'all',
                'conditional_logic' => [
                    [
                        ['field' => 'field_648fe4cd8a9f5', 'operator' => '==', 'value' => 'img_select'],
                    ],
                ],
            ],
        ],
        'location' => [
            [
                ['param' => 'post_type', 'operator' => '==', 'value' => 'works_post'],
            ],
        ],
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'active' => true,
    ]);
});
