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
    $("body").css("overflow", "clip");
  }
  function closeDrawer() {
    $(".js-drawer").removeClass("is-open");
    $(".js-hamburger").removeClass("is-open");
    $("body").css("overflow", "");
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
  const fvSwiperContainer = document.querySelector(".js-fv-swiper");
  if (fvSwiperContainer) {
    const fvSwiper = new Swiper(fvSwiperContainer, {
      loop: true,
      effect: "fade",
      speed: 3000,
      fadeEffect: {
        crossFade: true,
      },
      autoplay: {
        delay: 2000,
      },
    });
  }

  // Aboutスライダー
  // const swiperSlides = document.getElementsByClassName("swiper-slide");
  // const breakPoint = 767; // ブレークポイントを設定
  // let swiper;
  // let swiperBool;

  // window.addEventListener(
  //   "load",
  //   () => {
  //     if (breakPoint < window.innerWidth) {
  //       swiperBool = false;
  //     } else {
  //       createSwiper();
  //       swiperBool = true;
  //     }
  //   },
  //   false
  // );

  // window.addEventListener(
  //   "resize",
  //   () => {
  //     if (breakPoint < window.innerWidth && swiperBool) {
  //       swiper.destroy(false, true);
  //       swiperBool = false;
  //     } else if (breakPoint >= window.innerWidth && !swiperBool) {
  //       createSwiper();
  //       swiperBool = true;
  //     }
  //   },
  //   false
  // );

  // const createSwiper = () => {
  //   const swiperContainer = document.querySelector(".js-about-swiper");
  //   if (swiperContainer) {
  //     swiper = new Swiper(swiperContainer, {
  //       loop: true,
  //       speed: 1500,
  //       autoplay: {
  //         disableOnInteraction: false,
  //       },
  //       pagination: {
  //         el: ".swiper-pagination",
  //         clickable: true,
  //       },
  //       navigation: {
  //         nextEl: ".swiper-button-next",
  //         prevEl: ".swiper-button-prev",
  //       },
  //     });
  //   }
  // };
  window.onload = function () {
    const swiperContainer = document.querySelector(".js-about-swiper");

    if (swiperContainer) {
      let swiper;
      let swiperBool = false; // 初期状態ではSwiperは未初期化とする
      const breakPoint = 767; // ブレークポイントを設定

      const createSwiper = () => {
        swiper = new Swiper(swiperContainer, {
          loop: true,
          speed: 1500,
          autoplay: {
            disableOnInteraction: false,
          },
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });
        swiperBool = true; // Swiperが初期化されたことを示す
      };

      // ページロード時にSwiperの初期化を決定
      if (window.innerWidth <= breakPoint) {
        createSwiper();
      }

      // ウィンドウのリサイズ時にSwiperの初期化/破棄を決定
      window.addEventListener(
        "resize",
        () => {
          if (window.innerWidth > breakPoint && swiperBool) {
            swiper.destroy(true, true);
            swiperBool = false; // Swiperが破棄されたことを示す
          } else if (window.innerWidth <= breakPoint && !swiperBool) {
            createSwiper();
          }
        },
        false
      );
    }
  };
});
