<?php
/**
 * ヘッダー（共通）
 */
if (!defined('ABSPATH')) exit;
$img = get_template_directory_uri() . '/images';
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- ========== ヘッダー ========== -->
<header class="site-header">
  <div class="header-inner">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="header-logo"><img src="<?php echo esc_url($img); ?>/common/logo_col.svg" alt="丸七高橋組"></a>
    <nav class="gnav">
      <ul class="gnav-list">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
        <li><a href="<?php echo esc_url(home_url('/company/')); ?>">COMPANY</a></li>
        <li><a href="<?php echo esc_url(home_url('/construction/')); ?>">CONSTRUCTION</a></li>
        <li><a href="<?php echo esc_url(home_url('/housing/')); ?>">HOUSING</a></li>
        <li><a href="<?php echo esc_url(home_url('/works/')); ?>">WORKS</a></li>
      </ul>
      <div class="gnav-btns">
        <a href="<?php echo esc_url(home_url('/recruit/')); ?>" class="btn-pill">RECRUIT</a>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-pill">CONTACT</a>
      </div>
      <button class="hamburger" aria-label="メニュー"><span></span><span></span><span></span></button>
    </nav>
  </div>
</header>

<!-- ========== ドロワー ========== -->
<div class="drawer">
  <ul class="drawer-list">
    <li><a href="<?php echo esc_url(home_url('/')); ?>">HOME<span class="jp">ホーム</span></a></li>
    <li><a href="<?php echo esc_url(home_url('/company/')); ?>">COMPANY<span class="jp">会社案内</span></a></li>
    <li><a href="<?php echo esc_url(home_url('/construction/')); ?>">CONSTRUCTION<span class="jp">建築・土木</span></a></li>
    <li><a href="<?php echo esc_url(home_url('/housing/')); ?>">HOUSING<span class="jp">住宅事業</span></a></li>
    <li><a href="<?php echo esc_url(home_url('/works/')); ?>">WORKS<span class="jp">施工実績</span></a></li>
    <li><a href="<?php echo esc_url(home_url('/recruit/')); ?>">RECRUIT<span class="jp">採用情報</span></a></li>
    <li><a href="<?php echo esc_url(home_url('/joblist/')); ?>">JOB LIST<span class="jp">求人募集</span></a></li>
    <li><a href="<?php echo esc_url(home_url('/news/')); ?>">NEWS<span class="jp">お知らせ</span></a></li>
  </ul>
  <div class="drawer-btns">
    <a href="<?php echo esc_url(home_url('/contact/')); ?>">CONTACT</a>
  </div>
</div>

<main>
