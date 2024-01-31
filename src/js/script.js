jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  // ハンバーガーメニュー
  $(".js-hamburger").click(function () {
    $(this).toggleClass("is-open");
    if ($(this).hasClass("is-open")) {
      openDrawer();
    } else {
      closeDrawer();
    }
  });
  // backgroundまたはページ内リンクをクリックで閉じる
  $(".js-drawer, .js-drawer a[href]").on("click", function () {
    closeDrawer();
  });
  // resizeイベント
  $(window).on("resize", function () {
    if (window.matchMedia("(min-width: 768px)").matches) {
      closeDrawer();
    }
  });

  // Drawerの開閉
  function openDrawer() {
    $(".js-drawer").addClass("is-open");
    $(".js-hamburger").addClass("is-open");
    $("body").addClass("is-fixed");
  }
  function closeDrawer() {
    $(".js-drawer").removeClass("is-open");
    $(".js-hamburger").removeClass("is-open");
    $("body").removeClass("is-fixed");
  }

  // ページトップボタン
  const pageTop = $(".js-pagetop");
  pageTop.hide();

  $(window).scroll(function () {
    const scrollPosition = $(this).scrollTop();
    const windowHeight = $(this).height();
    const bodyHeight = $(document).height();
    const footerHeight = $(".footer").outerHeight();
    const buttonHeightHalf = pageTop.outerHeight() / 2;

    if (scrollPosition > 70) {
      pageTop.fadeIn();
    } else {
      pageTop.fadeOut();
    }

    if (bodyHeight - scrollPosition <= windowHeight + footerHeight) {
      pageTop.css({
        position: "absolute",
        bottom: footerHeight - buttonHeightHalf + "px",
      });
    } else {
      pageTop.css({ position: "fixed", bottom: "20px" });
    }
  });

  pageTop.click(function () {
    $("body,html").animate({ scrollTop: 0 }, 300, "swing");
    return false;
  });

  // Fvスライダー
  const fvSwiper = new Swiper(".js-fv-swiper", {
    loop: true,
    clickable: true,
    // autoplay: {
    //   delay: 1000,
    // },
  });

  // Aboutスライダー
  const swiperSlides = document.getElementsByClassName("swiper-slide");
  const breakPoint = 767; // ブレークポイントを設定
  let swiper;
  let swiperBool;

  window.addEventListener(
    "load",
    () => {
      if (breakPoint < window.innerWidth) {
        swiperBool = false;
      } else {
        createSwiper();
        swiperBool = true;
      }
    },
    false
  );

  window.addEventListener(
    "resize",
    () => {
      if (breakPoint < window.innerWidth && swiperBool) {
        swiper.destroy(false, true);
        swiperBool = false;
      } else if (breakPoint >= window.innerWidth && !swiperBool) {
        createSwiper();
        swiperBool = true;
      }
    },
    false
  );

  const createSwiper = () => {
    swiper = new Swiper(".swiper", {
      loop: true, // ループさせる
      speed: 1500, // 少しゆっくり(デフォルトは300)
      // autoplay: {
      //   // 自動再生
      //   delay: 1000, // 1秒後に次のスライド
      //   disableOnInteraction: false, // 矢印をクリックしても自動再生を止めない
      // },
      // ページネーション
      pagination: {
        el: ".swiper-pagination",
        clickable: true, // クリック可能にする
      },
      // 前後の矢印
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  };
});
