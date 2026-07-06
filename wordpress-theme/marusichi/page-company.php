<?php
/* Template Name: 会社案内 */
if (!defined('ABSPATH')) exit;
get_header();
$img = get_template_directory_uri() . '/images';
?>

<!-- ========== ページヒーロー ========== -->
<section class="page-hero" style="background-image:url('<?php echo $img; ?>/company/company-head.jpg')">
  <div class="inner">
    <p class="en">COMPANY</p>
    <span class="jp">会社案内</span>
  </div>
</section>

<!-- ========== リード ========== -->
<section class="company-lead-sec">
  <div class="wrap">
    <div class="page-lead">
      <p class="head">ゼネラルコントラクターとして<br>地域発展に貢献を</p>
      <p class="body">
        ともに歩み続ける大自然<br>
        丸七高橋組は世界自然遺産である斜里・知床の<br class="br-pc">
        雄大な自然とともに歩んできました。<br>
        私たちに多くの恵みを与えてくれるこの自然環境や動植物と<br class="br-pc">
        調和した事業を常に心がけています。
      </p>
    </div>
  </div>
</section>

<!-- ========== CORPORATE MOVIE ========== -->
<section class="section">
  <div class="wrap">
    <div class="sec-head">
      <p class="en-title">CORPORATE MOVIE</p>
      <span class="jp-sub">企業イメージムービー</span>
    </div>
    <a href="#" class="movie-box" data-movie="gjFNEufrs6M" aria-label="企業イメージムービーを再生">
      <img src="<?php echo $img; ?>/company/company-movie-btn.jpg" alt="企業イメージムービー">
      <span class="play"></span>
    </a>
  </div>
</section>

<!-- ========== MESSAGE ========== -->
<section class="section band company-message">
  <div class="wrap">
    <div class="sec-head">
      <p class="en-title">MESSAGE</p>
      <span class="jp-sub">代表挨拶</span>
    </div>
    <div class="page-lead">
      <p class="sub-ttl">地域に根ざし、未来へ挑み続ける</p>
      <p class="body">
        丸七高橋組は、斜里町に根ざし、<br class="br-pc">
        地域の暮らしを支える建設会社として68年の歩みを重ねてきました。<br class="br-pc">
        私たちは歴史に甘んじることなく、新しい技術や設備を積極的に取り入れ、<br class="br-pc">
        地域とともに次の未来をつくる会社でありたいと考えています。
      </p>
      <p class="body">
        建設の仕事に、頂上はありません。<br class="br-pc">
        だからこそ、仲間と支え合い、技術を磨き合いながら、<br class="br-pc">
        一歩ずつ登り続ける面白さがあります。
      </p>
      <p class="body">
        自然豊かな斜里で、自分らしい暮らしを大切にしながら、<br class="br-pc">
        地域に必要とされる仕事に挑戦したい方をお待ちしています。
      </p>
      <p class="sign">
        <span class="role">代表取締役</span><br>
        <span class="name">高橋 一成</span>
      </p>
    </div>
  </div>
</section>

<!-- ========== キャラクター帯 ========== -->
<section class="section company-character">
  <div class="wrap">
    <div class="char-img"><img src="<?php echo $img; ?>/company/character_01.svg" alt="丸七高橋組 キャラクター"></div>
    <p class="char-head">ともに積み上げ、ともにつくる未来</p>
    <div class="page-lead">
      <p class="char-body">
        海や山の恵みに囲まれ、穏やかな暮らしが息づく斜里町で、<br>
        仲間とともに経験を重ね、どこまでも成長していく。
      </p>
      <p class="char-body">
        一つひとつの仕事を積み上げながら、チームを強くし、<br>
        地域に必要とされる会社をつくっていく。
      </p>
      <p class="char-body">
        丸七高橋組は、このまちのこれからを、ともにつくる会社です。
      </p>
    </div>
  </div>
</section>

<!-- ========== CSR ========== -->
<section class="section band company-csr">
  <div class="wrap">
    <div class="sec-head">
      <p class="en-title">CSR</p>
      <span class="jp-sub">社会貢献活動</span>
    </div>
    <div class="cards-3">
      <div class="card-item">
        <div class="thumb"><img src="<?php echo $img; ?>/company/company-csr01.jpg" alt="インフラの維持"></div>
        <h4>インフラの維持</h4>
        <p>道路や河川の維持管理を通じ、地域の安全と安心な暮らしを支えるまちづくりに貢献します。</p>
      </div>
      <div class="card-item">
        <div class="thumb"><img src="<?php echo $img; ?>/company/company-csr02.jpg" alt="現場体験ができるインターンシップ"></div>
        <h4>現場体験ができるインターンシップ</h4>
        <p>斜里町や北見の生徒が現場就業体験を通じ、建設業への理解と地域の未来を考える機会に。</p>
      </div>
      <div class="card-item">
        <div class="thumb"><img src="<?php echo $img; ?>/company/company-csr03.jpg" alt="前浜清掃などのボランティア活動"></div>
        <h4>前浜清掃などのボランティア活動</h4>
        <p>海岸等の清掃活動を通じ、地域の自然環境を守り、次世代へ豊かな自然をつなぎます。</p>
      </div>
      <div class="card-item">
        <div class="thumb"><img src="<?php echo $img; ?>/company/company-csr04.jpg" alt="安全大会の実施"></div>
        <h4>安全大会の実施</h4>
        <p>安全大会を通じて事故防止と安全意識を高め、安心して働ける環境づくりにも取り組みます。</p>
      </div>
      <div class="card-item">
        <div class="thumb"><img src="<?php echo $img; ?>/company/company-csr05.jpg" alt="植栽などの地域の景観づくり"></div>
        <h4>植栽などの地域の景観づくり</h4>
        <p>国道沿いの花壇整備を通じ、季節の彩りを届け、地域に親しまれる環境を明るくつくります。</p>
      </div>
      <div class="card-item">
        <div class="thumb"><img src="<?php echo $img; ?>/company/company-csr06.jpg" alt="通行環境を守る取り組み"></div>
        <h4>通行環境を守る取り組み</h4>
        <p>冬の除雪や夏の除草で道路環境を安全に保ち、地域の日々の暮らしと交通を支え続けます。</p>
      </div>
    </div>
  </div>
</section>

<!-- ========== CORPORATE PROFILE ========== -->
<section class="section">
  <div class="wrap">
    <div class="sec-head">
      <p class="en-title dark">CORPORATE PROFILE</p>
      <span class="jp-sub">会社概要</span>
    </div>
    <table class="spec-table top-line">
      <tbody>
        <tr>
          <th>会社名</th>
          <td>株式会社 丸七高橋組</td>
        </tr>
        <tr>
          <th>代表取締役</th>
          <td>高橋 一成</td>
        </tr>
        <tr>
          <th>創業</th>
          <td>昭和33（1958）年5月</td>
        </tr>
        <tr>
          <th>設立</th>
          <td>昭和43（1968）年4月</td>
        </tr>
        <tr>
          <th>資本金</th>
          <td>3,300 万円</td>
        </tr>
        <tr>
          <th>所在地</th>
          <td>
            □本社<br>
            〒099-4115　北海道斜里郡斜里町光陽町16番地8<br>
            TEL.0152-23-2441（代表）<br>
            FAX.0152-23-3052（総務部）<br>
            FAX.0152-23-3770（土木部・建築部）<br><br>
            □北見営業所<br>
            〒090-0834<br>
            北海道北見市とん田西町218番地13号 1F<br>
            TEL&amp;FAX: 0157-57-1533
          </td>
        </tr>
        <tr>
          <th>登録</th>
          <td>
            北海道知事許可（特-4）オ 第437号<br>
            土木工事業、建築工事業、舗装工事業、解体工事業<br>
            北海道知事許可（般-4）オ 第437号<br>
            大工工事業、とび・土工工事業、水道施設工事業<br>
            二級建築士事務所／北海道知事登録（オホ）第740号<br>
            宅地建物取引業免許／北海道知事 オホ（4）第371号<br>
            （公社）北海道宅地建物取引業協会会員<br>
            （公社）全国宅地建物取引業保証協会会員<br>
            （株）日本住宅保証検査機構／登録 A1000594<br>
            ISO9001：2015認証取得（本社）、ISO14001：2015認証取得（本社）
          </td>
        </tr>
        <tr>
          <th>事業内容</th>
          <td>
            建設業、宅地建物取引業、建築の設計および工事監理、<br class="br-pc">
            前各号に附帯する一切の業務
          </td>
        </tr>
        <tr>
          <th>営業エリア</th>
          <td>
            北見市、網走市、紋別市、美幌町、大空町、遠軽町、斜里町、清里町、<br class="br-pc">
            小清水町、訓子府町、置戸町、津別町、佐呂間町、湧別町、上湧別町、<br class="br-pc">
            興部町、雄武町、滝上町、等
          </td>
        </tr>
        <tr>
          <th>主要取引金融機関</th>
          <td>網走信用金庫 斜里支店、北洋銀行 斜里支店、北海道銀行 斜里支店</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<!-- ========== HISTORY ========== -->
<section class="section band">
  <div class="wrap">
    <div class="sec-head">
      <p class="en-title dark">HISTORY</p>
      <span class="jp-sub">沿革</span>
    </div>
    <table class="spec-table top-line">
      <tbody>
        <tr><th>1958（昭和33）年 5月</th><td>丸七高橋組、創業</td></tr>
        <tr><th>1968（昭和43）年 4月</th><td>組織変更　（株）丸七高橋組　設立　資本金300万円</td></tr>
        <tr><th>1968（昭和43）年 4月</th><td>代表取締役　高橋七郎</td></tr>
        <tr><th>1968（昭和43）年 4月</th><td>知事登録（ヨ）網第1161号</td></tr>
        <tr><th>1973（昭和48）年 9月</th><td>増資　資本金900万円</td></tr>
        <tr><th>1976（昭和51）年 10月</th><td>建設業許可　一般〜特定</td></tr>
        <tr><th>1977（昭和52）年 1月</th><td>増資　資本金1,300万円</td></tr>
        <tr><th>1979（昭和54）年 3月</th><td>土木事業　許可</td></tr>
        <tr><th>1981（昭和56）年 3月</th><td>水道施設工事業　許可</td></tr>
        <tr><th>1983（昭和58）年 5月</th><td>増資　資本金3,300万円</td></tr>
        <tr><th>1988（昭和63）年 4月</th><td>建設業許可　土木工事業・建築工事業　特定建設業許可1本化<br>許可番号-北海道知事（特・般）網第437号</td></tr>
        <tr><th>1990（平成2）年 6月</th><td>高橋七郎辞任　高橋太志・高橋勝人就任</td></tr>
        <tr><th>1990（平成2）年 12月</th><td>斜里町本町4番地〜斜里町本町21番地12</td></tr>
        <tr><th>1991（平成3）年 8月</th><td>斜里町本町21番地12〜斜里町光陽町16番地8</td></tr>
        <tr><th>2008（平成20）年 1月</th><td>高橋勝人（専務）退任</td></tr>
        <tr><th>2010（平成22）年 5月</th><td>高橋一成（副社長）就任</td></tr>
        <tr><th>2011（平成23）年 6月</th><td>高橋太志（代表取締役会長）就任・高橋一成（代表取締役社長）就任</td></tr>
        <tr><th>2021（令和3）年 5月</th><td>高橋太志辞任・高橋一成（代表取締役社長）</td></tr>
      </tbody>
    </table>
  </div>
</section>

<!-- ========== ACCESS ========== -->
<section class="section company-access">
  <div class="wrap">
    <div class="sec-head">
      <p class="en-title dark">ACCESS</p>
      <span class="jp-sub">アクセス</span>
    </div>

    <div class="access-item">
      <div class="info">
        <p class="label">□本社</p>
        <p>
          〒099-4115<br>
          北海道斜里郡斜里町光陽町16番地8<br>
          TEL: 0152-23-2441（代表）<br>
          FAX: 0152-23-3052
        </p>
      </div>
      <div class="map">
        <iframe src="https://maps.google.com/maps?q=北海道斜里郡斜里町光陽町16番地8&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="本社の地図"></iframe>
      </div>
    </div>

    <div class="access-item">
      <div class="info">
        <p class="label">□北見営業所</p>
        <p>
          〒090-0834<br>
          北海道北見市とん田西町218-13<br>
          TEL/FAX: 0157-57-1533
        </p>
      </div>
      <div class="map">
        <iframe src="https://maps.google.com/maps?q=北海道北見市とん田西町218番地13号&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="北見営業所の地図"></iframe>
      </div>
    </div>
  </div>
</section>

<?php get_footer();
