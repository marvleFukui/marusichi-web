# 丸七高橋組 WordPressテーマ 設置手順

静的デザインをWordPress化したテーマです。**テスト環境で構築 → All-in-One WP Migration で本番へ**の流れを想定。

## 1. 必要プラグイン（テスト・本番とも）
- **Advanced Custom Fields PRO**（施工実績詳細のフィールドに必須）
- **Smash Balloon Instagram Feed**（TOPのInstagram）
- **Classic Editor**（マニュアル準拠のクラシックエディタ運用）

## 2. テーマ設置
- `marusichi` フォルダ（または zip）を `wp-content/themes/` へ設置し、**外観 → テーマ → 有効化**。
- 有効化時に自動で登録されるもの：
  - カスタム投稿 **施工実績（`works_post`）**
  - タクソノミー **実績カテゴリーA/B/C**（`jisseki_cat_a/b/c`）＋初期ターム（A=土木/建築、B=土木（公共）/土木（民間）/建築（公共）/建築（民間））
  - ACFフィールドグループ **「施工実績詳細」**（既存フォーマットと同一キーで再現）

## 3. 固定ページの作成（スラッグ厳守）
以下の**空の固定ページ**を作成（本文は不要、テンプレートは自動適用）：

| ページタイトル | スラッグ | 使われるテンプレート |
|---|---|---|
| ホーム | `home` | front-page.php（TOP） |
| 会社案内 | `company` | page-company.php |
| 建築・土木事業 | `construction` | page-construction.php |
| 住宅事業 | `housing` | page-housing.php |
| 採用情報 | `recruit` | page-recruit.php |
| 求人募集 | `joblist` | page-joblist.php |
| お問い合わせ | `contact` | page-contact.php |
| お知らせ | `news` | home.php（NEWS一覧） |

## 4. 表示設定（設定 → 表示設定）
- **ホームページの表示**：固定ページ
- **ホームページ**：`ホーム`（home）
- **投稿ページ**：`お知らせ`（news）
→ これでTOP＝front-page.php、`/news/`＝NEWS一覧になります。

## 5. パーマリンク（設定 → パーマリンク）
- **「投稿名」**を選択して**保存**（`/works/`・`/news/` 等のURL生成に必須。移行後も必ず再保存）。

## 6. NEWS（投稿）
- 通常の「投稿」で追加。**カテゴリー**に `NEWS` / `BLOG` / `MEDIA` を作成して運用（サイドバーCATEGORYに反映）。
- アイキャッチ画像＝一覧のサムネイル（未設定時はロゴ枠を自動表示）。
- TOPの「RECRUIT INFO」は最新NEWS3件を自動表示。

## 7. WORKS（施工実績）※マニュアル通り
- 左メニュー「施工実績」→ 新規投稿。タイトル・本文（任意）・**実績カテゴリーA/B**を選択・**アイキャッチ**。
- **施工実績詳細（ACF）**：
  - 「施工実績登録」（繰り返し：項目タイトル／項目本文）＝ **詳細ページの仕様表**（用途・竣工・概要・構造・場所 等）
  - 「画像タイプ選択」→ **ギャラリー**（複数画像）＝ 詳細のスライダー ／ **画像**（1枚）
  - 「商品コピートップ」＝ タイトル下のサブ表記（例：開発発注）
- 一覧 `/works/`、絞り込みは 業態（A）・実行内容（B）。

## 8. Instagram（TOP）
- Smash Balloon を有効化し、Instagramアカウントを連携。
- front-page.php 内に **`[instagram-feed]`** を設置済み。フィードのカラム数を **5列**程度に設定するとデザインに近づきます。

## 9. お問い合わせフォーム（要対応）
- `page-contact.php` のフォームは**現状は見た目のHTMLのみ**（送信機能なし）。
- 公開前に **Contact Form 7**（または既存フォーム）でフォームを作成し、`page-contact.php` のフォーム部分をショートコードに差し替えてください。

## 10. 本番へ移行
- **All-in-One WP Migration** でテスト→本番へエクスポート/インポート（URL自動置換）。
- 移行後：**パーマリンクを再保存**、Instagram連携の再認証（必要な場合）、ACF PRO/Smash Balloon が本番にも入っていること。

---
### 備考
- デザインCSSは `assets/css/style.css` に一本化（各ページ固有スタイルも統合済み）。
- 画像はテーマ同梱の `images/`（デザイン用）＋メディアライブラリ（WORKS/NEWS投稿用）。
- ヘッダー/フッター/ドロワーは `header.php`/`footer.php`（全ページ共通）。
