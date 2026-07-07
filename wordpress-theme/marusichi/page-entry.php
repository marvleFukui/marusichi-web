<?php
/* Template Name: エントリー（応募フォーム） */
if (!defined('ABSPATH')) exit;
get_header();
// 求人一覧のENTRYボタンから ?recruit=<ID> で来た場合、募集要項を自動プリセット
$job = '';
if (isset($_GET['recruit'])) {
    $job = get_the_title((int) $_GET['recruit']);
}
?>

<!-- ========== ページタイトル ========== -->
<section class="page-title">
  <p class="en">ENTRY</p>
  <span class="jp">応募フォーム</span>
</section>

<!-- ========== イントロ ========== -->
<section class="cf-intro wrap">
  <p class="cf-note">下記フォームにご記入のうえ送信してください。<br>内容を確認のうえ、担当者よりご連絡いたします。</p>
</section>

<!-- ========== フォーム ========== -->
<section class="section" style="padding-top:24px;">
  <div class="cf-form" data-thanks="<?php echo esc_url(home_url('/entry-thanks/')); ?>">
    <?php echo marusichi_cf7('エントリー'); ?>
  </div>
</section>

<?php if ($job) : ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
  var el = document.querySelector('.cf-form [name="job"]');
  if (el && !el.value) el.value = <?php echo wp_json_encode($job); ?>;
});
</script>
<?php endif; ?>

<?php get_footer();
