<?php
/**
 * 求人情報 一覧（archive-recruit_post.php）= /jobinfo/
 * 参考テンプレート(tmpl_recruit)の構造を丸七デザインで再現：
 *   上部＝求人切替ボタン（各求人へアンカージャンプ）
 *   各求人＝見出し ＋ 求人情報テーブル（.spec-table）＋ ENTRY（応募）ボタン
 */
if (!defined('ABSPATH')) exit;
get_header();

$jobs = get_posts([
    'post_type'      => 'recruit_post',
    'posts_per_page' => -1,
    'orderby'        => 'date',
    'order'          => 'DESC',
]);
?>

<!-- ページタイトル -->
<section class="page-title">
  <p class="en">RECRUIT INFO</p>
  <span class="jp">求人情報</span>
</section>

<section class="section" style="padding-top:32px;">
  <div class="w900">

    <?php if ($jobs) : ?>

    <!-- 求人切替ボタン -->
    <ul class="job-switch">
      <?php foreach ($jobs as $job) : ?>
      <li><a class="job-switch-btn" href="#job-<?php echo (int) $job->ID; ?>"><?php echo esc_html(get_the_title($job)); ?></a></li>
      <?php endforeach; ?>
    </ul>

    <!-- 各求人 -->
    <div class="job-blocks">
      <?php foreach ($jobs as $job) :
          $rows  = function_exists('get_field') ? (get_field('求人情報テーブル', $job->ID) ?: []) : [];
          $terms = get_the_terms($job->ID, 'recruit_cat');
          $cat   = (!is_wp_error($terms) && $terms) ? $terms[0]->name : '';
          $entry = add_query_arg('recruit', (int) $job->ID, home_url('/entry/')); // 応募専用フォーム(/entry/固定ページ)へ。募集要項を自動プリセット
      ?>
      <div class="job-block" id="job-<?php echo (int) $job->ID; ?>">
        <?php if ($cat) : ?><span class="news-cat job-block-cat"><?php echo esc_html($cat); ?></span><?php endif; ?>
        <h2 class="job-block-ttl"><?php echo esc_html(get_the_title($job)); ?></h2>

        <?php if ($rows) : ?>
        <table class="spec-table top-line">
          <?php foreach ($rows as $r) :
              $th = $r['求人情報テーブル（見出し）'] ?? '';
              $td = $r['求人情報テーブル（本文）'] ?? '';
              if ($th === '' && $td === '') continue; ?>
          <tr>
            <th><?php echo esc_html($th); ?></th>
            <td><?php echo wp_kses_post($td); ?></td>
          </tr>
          <?php endforeach; ?>
        </table>
        <?php endif; ?>

        <div class="job-entry">
          <a class="job-entry-btn" href="<?php echo esc_url($entry); ?>">
            <span class="b">ENTRY</span><span class="s">応募する</span>
          </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <?php else : ?>
    <p style="text-align:center;padding:40px 0;">求人情報は準備中です。</p>
    <?php endif; ?>

  </div>
</section>

<?php get_footer();
