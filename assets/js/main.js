/* =========================================================
   丸七高橋組 — 共通スクリプト
   - ドロワー開閉
   - 外部リンク注入（config.js）
   - ヒーロースライダー
   - 動画モーダル（YouTube）
   - 施工実績ギャラリー サムネ切替
   ========================================================= */
(function () {
  "use strict";
  var S = window.SITE || {};

  /* ---------- ドロワー ---------- */
  var ham = document.querySelector(".hamburger");
  if (ham) {
    ham.addEventListener("click", function () {
      document.body.classList.toggle("drawer-open");
    });
    document.querySelectorAll(".drawer a").forEach(function (a) {
      a.addEventListener("click", function () {
        document.body.classList.remove("drawer-open");
      });
    });
  }

  /* ---------- 外部リンク注入 ---------- */
  var linkMap = {
    instagram: S.INSTAGRAM_URL,
    "recruit-site": S.RECRUIT_SITE_URL,
    "tel-honsha": S.TEL_HONSHA ? "tel:" + S.TEL_HONSHA.replace(/-/g, "") : "",
    "tel-kitami": S.TEL_KITAMI ? "tel:" + S.TEL_KITAMI.replace(/-/g, "") : ""
  };
  document.querySelectorAll("[data-link]").forEach(function (el) {
    var url = linkMap[el.getAttribute("data-link")];
    if (url) {
      el.setAttribute("href", url);
      if (/^https?:/.test(url)) { el.setAttribute("target", "_blank"); el.setAttribute("rel", "noopener"); }
    }
  });

  /* ---------- 動画モーダル（YouTube） ---------- */
  var movieTriggers = Array.prototype.slice.call(document.querySelectorAll("[data-movie]"));
  if (movieTriggers.length) {
    var modal = document.createElement("div");
    modal.className = "movie-modal";
    modal.innerHTML =
      '<div class="movie-modal-bg"></div>' +
      '<div class="movie-modal-inner"><button class="movie-modal-close" aria-label="閉じる">&times;</button>' +
      '<div class="movie-modal-frame"></div></div>';
    document.body.appendChild(modal);
    var frame = modal.querySelector(".movie-modal-frame");
    function openModal(id) {
      if (!id) return;
      // origin を明示（動的挿入iframeのエラー153＝リファラ設定エラー対策）
      var src = "https://www.youtube.com/embed/" + id +
        "?autoplay=1&rel=0&playsinline=1&enablejsapi=1&origin=" +
        encodeURIComponent(location.origin);
      frame.innerHTML = '<iframe src="' + src +
        '" title="movie" frameborder="0" allow="autoplay; encrypted-media; fullscreen; picture-in-picture" allowfullscreen></iframe>';
      document.body.classList.add("movie-open");
    }
    function closeModal() {
      document.body.classList.remove("movie-open");
      frame.innerHTML = "";
    }
    movieTriggers.forEach(function (t) {
      t.addEventListener("click", function (e) {
        e.preventDefault();
        openModal(t.getAttribute("data-movie") ||
          (t.getAttribute("data-movie") === "" ? "" : null));
      });
    });
    modal.querySelector(".movie-modal-bg").addEventListener("click", closeModal);
    modal.querySelector(".movie-modal-close").addEventListener("click", closeModal);
    document.addEventListener("keydown", function (e) { if (e.key === "Escape") closeModal(); });
  }

  /* ---------- ヒーロースライダー ---------- */
  var slides = Array.prototype.slice.call(document.querySelectorAll(".hero-slide"));
  var dots = Array.prototype.slice.call(document.querySelectorAll(".hero-dots button"));
  if (slides.length > 1) {
    var idx = 0, timer;
    function go(n) {
      slides[idx].classList.remove("is-active");
      if (dots[idx]) dots[idx].classList.remove("is-active");
      idx = (n + slides.length) % slides.length;
      slides[idx].classList.add("is-active");
      if (dots[idx]) dots[idx].classList.add("is-active");
    }
    function next() { go(idx + 1); }
    function play() { timer = setInterval(next, 5000); }
    function reset() { clearInterval(timer); play(); }
    dots.forEach(function (d, i) { d.addEventListener("click", function () { go(i); reset(); }); });
    play();
  }

  /* ---------- 施工実績ギャラリー（サムネ→メイン切替） ---------- */
  var gal = document.querySelector(".detail-gallery");
  if (gal) {
    var mainImg = gal.querySelector(".main-img");
    gal.querySelectorAll(".thumbs img").forEach(function (t) {
      t.addEventListener("click", function () {
        if (mainImg) mainImg.src = t.getAttribute("data-full") || t.src;
      });
    });
  }

  /* ---------- 郵便番号 → 住所 自動入力（zipcloud API） ---------- */
  document.querySelectorAll(".cf-zip-btn").forEach(function (btn) {
    btn.addEventListener("click", function () {
      var form = btn.closest("form") || document;
      var z1 = form.querySelector('[name="zip1"]');
      var z2 = form.querySelector('[name="zip2"]');
      var zip = (((z1 && z1.value) || "") + ((z2 && z2.value) || "")).replace(/[^0-9]/g, "");
      if (zip.length !== 7) { alert("郵便番号を7桁で入力してください。"); return; }
      var orig = btn.textContent;
      btn.disabled = true; btn.textContent = "検索中…";
      fetch("https://zipcloud.ibsnet.co.jp/api/search?zipcode=" + zip)
        .then(function (r) { return r.json(); })
        .then(function (d) {
          if (d && d.results && d.results[0]) {
            var r0 = d.results[0];
            var pref = form.querySelector('[name="pref"]');
            var city = form.querySelector('[name="city"]');
            if (pref) pref.value = r0.address1;
            if (city) city.value = r0.address2 + r0.address3;
          } else {
            alert("該当する住所が見つかりませんでした。");
          }
        })
        .catch(function () { alert("住所の取得に失敗しました。時間をおいて再度お試しください。"); })
        .then(function () { btn.disabled = false; btn.textContent = orig; });
    });
  });

  /* ---------- CF7 送信完了 → サンクスページへ遷移 ---------- */
  document.addEventListener("wpcf7mailsent", function (e) {
    var box = (e.target && e.target.closest && e.target.closest("[data-thanks]")) ||
      document.querySelector("[data-thanks]");
    var url = box && box.getAttribute("data-thanks");
    if (url) location.href = url;
  });

  /* ---------- プライバシーポリシー内の会社名プレースホルダを補正 ---------- */
  document.querySelectorAll(".cf-form .pp, .cf-privacy").forEach(function (box) {
    var h = box.innerHTML;
    var fixed = h
      .replace(/○+\s*（会社名）\s*[.．。]?/, "株式会社 丸七高橋組")
      .replace(/株式会社\s*○+/, "株式会社 丸七高橋組");
    if (fixed !== h) box.innerHTML = fixed;
  });
})();
