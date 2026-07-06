<?php
/* Template Name: 採用情報 */
if (!defined('ABSPATH')) exit;
get_header();
$img = get_template_directory_uri() . '/images';
?>

<!-- ========== ページヒーロー ========== -->
<section class="page-hero" style="background-image:url('<?php echo $img; ?>/recruit/recruit-head.jpg')">
  <div class="inner">
    <p class="en">RECRUIT</p>
    <span class="jp">採用情報</span>
  </div>
</section>

<!-- ========== リード ========== -->
<section class="section">
  <div class="wrap">
    <p class="rec-lead-ttl">世界自然遺産の知床で働こう</p>
  </div>
</section>

<!-- ========== RECRUIT INFO ========== -->
<section class="band" style="padding:80px 0;">
  <div class="w900">
    <div class="rec-info-head">
      <div>
        <p class="en-title">RECRUIT INFO</p>
        <span class="jp-sub">インターンシップ・説明会情報</span>
      </div>
      <a href="<?php echo esc_url(home_url('/news/')); ?>" class="more">MORE <span class="arrow">&gt;</span></a>
    </div>
    <ul class="news-list rec-info-list">
      <li class="news-row"><span class="news-cat">NEWS</span><span class="news-date">2026.00.00</span><span class="news-ttl">新卒採用を対象とした募集を開始しました</span></li>
      <li class="news-row"><span class="news-cat">BLOG</span><span class="news-date">2026.00.00</span><span class="news-ttl">北見工業高校の生徒さんがインターンシップへ</span></li>
      <li class="news-row"><span class="news-cat">BLOG</span><span class="news-date">2026.00.00</span><span class="news-ttl">北海道斜里高等学校にて就職説明会を行いました</span></li>
    </ul>
  </div>
</section>

<!-- ========== CORPORATE MOVIE ========== -->
<section class="section">
  <div class="wrap">
    <div class="sec-head">
      <p class="en-title">CORPORATE MOVIE</p>
      <span class="jp-sub">企業イメージムービー</span>
    </div>
    <a href="<?php echo esc_url(home_url('/recruit/')); ?>" class="movie-box" aria-label="企業イメージムービーを再生">
      <img src="<?php echo $img; ?>/recruit/recruit-movie-btn.jpg" alt="企業イメージムービー">
      <span class="play"></span>
    </a>
  </div>
</section>

<!-- ========== 丸七高橋組について（ゼネラルコントラクター） ========== -->
<section class="section band">
  <div class="wrap">
    <p class="rec-sec-ttl">丸七高橋組について</p>
    <div class="rec-about">
      <div class="rec-about-card">
        <div class="rec-pyramid">
          <div class="rec-pyr-top">
            <div class="rec-tri"><span class="dot"></span></div>
            <div class="rec-pyr-callout">
              <span class="line"></span>
              <span class="rec-pyr-logo"><img src="<?php echo $img; ?>/common/logo_col.svg" alt="MARUSHICHI TAKAHASHI"></span>
            </div>
          </div>
          <p class="rec-tri-label">ゼネラルコントラクター</p>
          <div class="rec-trap mid">工務店<br>リフォーム会社 等</div>
          <div class="rec-trap bot">個人事業主（職人）</div>
        </div>
      </div>
      <div class="rec-about-txt">
        <h3>下請け企業をたばねる<br>ゼネラルコントラクター</h3>
        <p>多くの下請け業者を束ね、設計から施工までプロジェクト全体を<br class="br-pc">管理する役割を担う丸七高橋組。現場で汗を流すのではなく、<br class="br-pc">工程・品質・安全の管理で現場を動かし、地域の建設を支えます。</p>
      </div>
    </div>
    <div class="rec-job-box">
      <p class="lbl">募集職種</p>
      <p class="name">現場管理・施工管理スタッフ</p>
      <p class="body">工事の工程や安全性を管理するのが主な仕事です。<br>研修が充実しておりますので、建設系の知識がなくても大丈夫です。</p>
    </div>
  </div>
</section>

<!-- ========== 仕事も、暮らしも、知床で広がる。 ========== -->
<section class="section">
  <div class="wrap">
    <p class="rec-lead-ttl">仕事も、暮らしも、知床で広がる。</p>
    <p class="page-lead" style="margin-top:22px;">地域をつくる仕事をしながら、自然に近い暮らしを楽しむ。<br>丸七高橋組には、仲間とリフレッシュできる設備や、<br>休日を豊かにする環境があります。<br>働く場所が変わると、毎日の楽しみ方も変わります。</p>

    <div class="rec-hero-img" style="margin-top:52px;">
      <img src="<?php echo $img; ?>/recruit/recruit01.jpg" alt="トレーニングジム">
    </div>

    <div class="rec-media rev" style="margin-top:72px;">
      <div class="rec-media-txt">
        <h3>仕事終わりにも、自然と人が集まる</h3>
        <p>敷地内には、トレーニングジムやゴルフシミュレーターを完備。<br class="br-pc">仕事終わりに身体を動かしたり、自然と会話が生まれたり。<br class="br-pc">それぞれのスタイルでリフレッシュできる場所があります。</p>
      </div>
      <div class="rec-media-img"><img src="<?php echo $img; ?>/recruit/recruit02.jpg" alt="ゴルフシミュレーター"></div>
    </div>

    <div class="rec-media" style="margin-top:72px;">
      <div class="rec-media-txt">
        <h3>知床の自然が、日々を豊かにする。</h3>
        <p>少し足をのばせば、海も山も、雄大な景色も。<br class="br-pc">季節ごとに表情を変える知床の自然を身近に感じながら、<br class="br-pc">散策をしたり、景色を眺めたり、ゆっくり深呼吸したり。<br class="br-pc">休日を自分らしく、ゆったり過ごせる環境です。</p>
      </div>
      <div class="rec-media-img"><img src="<?php echo $img; ?>/recruit/recruit03.jpg" alt="知床の海岸"></div>
    </div>

    <div class="rec-cols3" style="margin-top:80px;">
      <div class="rec-col">
        <div class="thumb"><img src="<?php echo $img; ?>/recruit/recruit04.jpg" alt="釣り・カヤック"></div>
        <h4>釣りも、カヤックも、<br>休日の選択肢になる。</h4>
        <p>サケ・マス釣りやシーカヤック、景色を楽しむドライブ。自然体験が身近にあるから、休日の過ごし方が自然と広がります。働く場所を選ぶことが、暮らしの楽しみを増やすきっかけになります。</p>
      </div>
      <div class="rec-col">
        <div class="thumb"><img src="<?php echo $img; ?>/recruit/recruit05.jpg" alt="冬の知床"></div>
        <h4>寒い季節にも、<br>楽しみが待っている。</h4>
        <p>流氷が広がる冬には、流氷ウォークやウィンタースポーツなど、ここだからこそ体験できる休日の過ごし方があります。冬の厳しさも、自分らしい楽しみが見つかります。</p>
      </div>
      <div class="rec-col">
        <div class="thumb"><img src="<?php echo $img; ?>/recruit/recruit06.jpg" alt="知床の暮らし"></div>
        <h4>新しい暮らしを、<br>住まいの面から支える。</h4>
        <p>遠方から働きに来る人にとって、住まい探しは大きな不安のひとつ。丸七高橋組では住宅提供のある募集もあり、仕事だけでなく、新しい暮らしのスタートも支えています。</p>
      </div>
    </div>
  </div>
</section>

<!-- ========== 先輩の声 ========== -->
<section class="section band">
  <div class="wrap">
    <p class="rec-sec-ttl">先輩の声</p>
    <div class="rec-voice">
      <div class="rec-voice-txt">
        <h3>安心して挑戦できる環境で<br>成長し、現場を支える力へ</h3>
        <p>私は入社後、維持管理の仕事からキャリアをスタートしました。先輩方が丁寧にサポートしてくださり、一つひとつ学びながら成長することができました。<br>現在は、既設の法枠を撤去し、新たに法面を補強する工事を担当しています。現場での経験を通じて、専門的な知識や技術を身につけながら、日々やりがいを感じています。<br>特に印象に残っているのは、先輩方の現場管理力です。工程をしっかりと組み立て、計画通りに仕事を進めていく姿はとても頼もしく、自分も将来はそのような存在になりたいと感じています。<br>また、若手社員も多く、年齢の近い仲間と気軽にコミュニケーションが取れる点も魅力です。分からないことがあってもすぐに相談できる風通しの良い環境で、安心して働くことができます。</p>
        <p class="byline"><span class="role">入社3年目・土木</span>高橋瑠維</p>
      </div>
      <div class="rec-voice-img"><img src="<?php echo $img; ?>/recruit/interview01.jpg" alt="先輩社員インタビュー"></div>
    </div>

    <div class="rec-career-head">
      <span class="cap">例）N社員（地元高校卒業）　現在在籍　28歳</span>
      <span class="salary">年収500万円超</span>
    </div>
    <table class="rec-career">
      <tbody>
        <tr>
          <td class="c-year">1年目<span class="age">18歳</span></td>
          <td class="c-qual">入社</td>
          <td class="c-role">現場代理人の補佐</td>
        </tr>
        <tr class="hl">
          <td class="c-year gap-dot">5年目<span class="age">23歳</span></td>
          <td class="c-qual">2級建設機械 <span class="note">合格</span></td>
          <td class="c-role arrow">↓</td>
        </tr>
        <tr>
          <td class="c-year">6年目<span class="age">24歳</span></td>
          <td class="c-qual"></td>
          <td class="c-role">道農政部 <span class="sub">JV構成員 主任技術者</span></td>
        </tr>
        <tr>
          <td class="c-year">7年目<span class="age">25歳</span></td>
          <td class="c-qual">2級土木施工 <span class="note">合格</span></td>
          <td class="c-role">開発局 <span class="sub">現場技術員</span></td>
        </tr>
        <tr>
          <td class="c-year">8年目<span class="age">26歳</span></td>
          <td class="c-qual">1級土木施工技士補 <span class="note">（学科のみ）</span></td>
          <td class="c-role">斜里町 <span class="sub">現場代理人</span></td>
        </tr>
        <tr>
          <td class="c-year">9年目<span class="age">27歳</span></td>
          <td class="c-qual"></td>
          <td class="c-role">道建設部 <span class="sub">JV構成員 主任技術者</span></td>
        </tr>
        <tr class="hl">
          <td class="c-year">10年目<span class="age">28歳</span></td>
          <td class="c-qual"></td>
          <td class="c-role">道建設部 <span class="sub">現場代理人</span></td>
        </tr>
        <tr>
          <td class="c-year">11年目<span class="age">29歳</span></td>
          <td class="c-qual">現在</td>
          <td class="c-role arrow">↓</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<!-- ========== 主な採用実績校 ========== -->
<section class="section">
  <div class="wrap">
    <p class="rec-sec-ttl">主な採用実績校</p>
    <table class="spec-table top-line">
      <tbody>
        <tr>
          <th>大学・大学院</th>
          <td>同志社大学、日本大学、千葉工業大学、名城大学、<br>北海道科学大学、東北工業大学</td>
        </tr>
        <tr>
          <th>短大・専門学校</th>
          <td>道都短期大学、北海道測量専門学校、北海道立旭川高等技術専門学院</td>
        </tr>
        <tr>
          <th>高校</th>
          <td>斜里高等学校、清里高等学校、網走南ヶ丘高等学校、網走桂陽高等学校、<br>北見柏陽高等学校、札幌日本大学高等学校、札幌工業高等学校</td>
        </tr>
      </tbody>
    </table>
    <div class="rec-joblist-cta">
      <a href="<?php echo esc_url(home_url('/joblist/')); ?>" class="rec-joblist-btn">JOB LIST<span class="chev">&gt;</span></a>
    </div>
  </div>
</section>

<!-- ========== CONTACT ========== -->
<section class="section" style="padding-top:0;">
  <div class="wrap">
    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="contact-box">
      <div class="txt">
        <span class="en">CONTACT</span>
        <span class="jp">お問い合わせ・資料請求</span>
      </div>
      <span class="arrow">&gt;</span>
    </a>
  </div>
</section>

<?php get_footer();
