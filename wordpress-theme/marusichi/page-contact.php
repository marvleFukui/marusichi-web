<?php
/* Template Name: お問い合わせ */
if (!defined('ABSPATH')) exit;
get_header();
$img = get_template_directory_uri() . '/images';
?>

<!-- ========== ページタイトル ========== -->
<section class="page-title">
  <p class="en">CONTACT</p>
  <span class="jp">お問い合わせ</span>
</section>

<!-- ========== イントロ ========== -->
<section class="cf-intro wrap">
  <p class="cf-note">お問い合わせには3営業日以内にご返信をいたします。<br>連絡がない場合、お手数をお掛けいたしますが、<br>お電話にてご連絡いただくようお願いいたします。</p>
  <p class="cf-tel">0152-23-2441</p>
  <p class="cf-hours">営業時間 ／ [平日] 8:00–17:00</p>
</section>

<!-- ========== フォーム ========== -->
<section class="section" style="padding-top:24px;">
  <div class="cf-form" data-thanks="<?php echo esc_url(home_url('/thanks/')); ?>">
    <?php echo marusichi_cf7('お問い合わせ'); ?>
  </div>
</section>

<?php get_footer();
