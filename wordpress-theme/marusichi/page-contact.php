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
    <?php
    // 固定ページ本文に貼った CF7 / MW WP Form 等のショートコードを描画
    while (have_posts()) : the_post();
      if (trim(get_the_content()) !== '') :
        the_content();
      else : ?>
        <p class="cf-noform">フォームを設置してください。<br>この固定ページ（お問い合わせ）の本文に、フォームのショートコード（CF7＝<code>[contact-form-7 ...]</code> / MW WP Form＝<code>[mwform_formkey key="番号"]</code>）を貼り付けてください。</p>
      <?php endif;
    endwhile;
    ?>
  </div>
</section>

<?php get_footer();
