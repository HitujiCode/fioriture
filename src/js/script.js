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
  // window.onload = function () {
  //   const swiperContainer = document.querySelector(".js-about-swiper");

  //   if (swiperContainer) {
  //     let swiper;
  //     let swiperBool = false; // 初期状態ではSwiperは未初期化とする
  //     const breakPoint = 767; // ブレークポイントを設定

  //     const createSwiper = () => {
  //       swiper = new Swiper(swiperContainer, {
  //         loop: true,
  //         speed: 1500,
  //         autoplay: {
  //           disableOnInteraction: false,
  //         },
  //         pagination: {
  //           el: ".swiper-pagination",
  //           clickable: true,
  //         },
  //         navigation: {
  //           nextEl: ".swiper-button-next",
  //           prevEl: ".swiper-button-prev",
  //         },
  //       });
  //       swiperBool = true; // Swiperが初期化されたことを示す
  //     };

  //     // ページロード時にSwiperの初期化を決定
  //     if (window.innerWidth <= breakPoint) {
  //       createSwiper();
  //     }

  //     // ウィンドウのリサイズ時にSwiperの初期化/破棄を決定
  //     window.addEventListener(
  //       "resize",
  //       () => {
  //         if (window.innerWidth > breakPoint && swiperBool) {
  //           swiper.destroy(true, true);
  //           swiperBool = false; // Swiperが破棄されたことを示す
  //         } else if (window.innerWidth <= breakPoint && !swiperBool) {
  //           createSwiper();
  //         }
  //       },
  //       false
  //     );
  //   }
  // };

  // test2
  function initializeAboutSwiper() {
    const aboutSwiper = document.querySelector(".js-about-swiper");

    // コンテナとナビゲーションボタンが存在するかを確認
    if (
      aboutSwiper &&
      document.querySelector(".js-about-swiper-next") &&
      document.querySelector(".js-about-swiper-prev")
    ) {
      let swiperInstance = null;

      function createSwiper() {
        if (window.innerWidth >= 768) {
          if (swiperInstance) {
            swiperInstance.destroy();
            swiperInstance = null;
          }
          clearSwiperStyles(aboutSwiper);
          return;
        }

        if (!swiperInstance) {
          swiperInstance = new Swiper(aboutSwiper, {
            // initialSlide: 0,
            loop: true,
            spaceBetween: 45,
            slidesPerView: "auto",
            centeredSlides: true,
            pagination: {
              el: aboutSwiper.querySelector(".swiper-pagination"),
              clickable: true,
            },
            navigation: {
              nextEl: document.querySelector(".js-about-swiper-next"),
              prevEl: document.querySelector(".js-about-swiper-prev"),
            },
          });
        }
      }

      createSwiper();
      window.addEventListener("resize", createSwiper);
    }
  }

  function initializeFlowSwiper1() {
    const flowSwiper1 = document.querySelector(".js-flow-swiper1");

    // コンテナとナビゲーションボタンが存在するかを確認
    if (
      flowSwiper1 &&
      document.querySelector(".js-flow-swiper-next1") &&
      document.querySelector(".js-flow-swiper-prev1")
    ) {
      let swiperInstance = null;

      function createSwiper() {
        if (window.innerWidth >= 768) {
          if (swiperInstance) {
            swiperInstance.destroy();
            swiperInstance = null;
          }
          clearSwiperStyles(flowSwiper1);
          return;
        }

        if (!swiperInstance) {
          swiperInstance = new Swiper(flowSwiper1, {
            // initialSlide: 0,
            loop: true,
            spaceBetween: 45,
            slidesPerView: "auto",
            centeredSlides: true,
            pagination: {
              el: flowSwiper1.querySelector(".swiper-pagination"),
              clickable: true,
            },
            navigation: {
              nextEl: document.querySelector(".js-flow-swiper-next1"),
              prevEl: document.querySelector(".js-flow-swiper-prev1"),
            },
          });
        }
      }

      createSwiper();
      window.addEventListener("resize", createSwiper);
    }
  }

  function initializeFlowSwiper2() {
    const flowSwiper2 = document.querySelector(".js-flow-swiper2");

    // コンテナとナビゲーションボタンが存在するかを確認
    if (
      flowSwiper2 &&
      document.querySelector(".js-flow-swiper-next2") &&
      document.querySelector(".js-flow-swiper-prev2")
    ) {
      let swiperInstance = null;

      function createSwiper() {
        if (window.innerWidth >= 768) {
          if (swiperInstance) {
            swiperInstance.destroy();
            swiperInstance = null;
          }
          clearSwiperStyles(flowSwiper2);
          return;
        }

        if (!swiperInstance) {
          swiperInstance = new Swiper(flowSwiper2, {
            loop: true,
            spaceBetween: 45,
            slidesPerView: "auto",
            centeredSlides: true,
            pagination: {
              el: flowSwiper2.querySelector(".swiper-pagination"),
              clickable: true,
            },
            navigation: {
              nextEl: document.querySelector(".js-flow-swiper-next2"),
              prevEl: document.querySelector(".js-flow-swiper-prev2"),
            },
          });
        }
      }

      createSwiper();
      window.addEventListener("resize", createSwiper);
    }
  }

  function initializeFlowSwiper3() {
    const flowSwiper3 = document.querySelector(".js-flow-swiper3");

    // コンテナとナビゲーションボタンが存在するかを確認
    if (
      flowSwiper3 &&
      document.querySelector(".js-flow-swiper-next3") &&
      document.querySelector(".js-flow-swiper-prev3")
    ) {
      let swiperInstance = null;

      function createSwiper() {
        if (window.innerWidth >= 768) {
          if (swiperInstance) {
            swiperInstance.destroy();
            swiperInstance = null;
          }
          clearSwiperStyles(flowSwiper3);
          return;
        }

        if (!swiperInstance) {
          swiperInstance = new Swiper(flowSwiper3, {
            initialSlide: 0,
            loop: true,
            spaceBetween: 45,
            slidesPerView: "auto",
            centeredSlides: true,
            pagination: {
              el: flowSwiper3.querySelector(".swiper-pagination"),
              clickable: true,
            },
            navigation: {
              nextEl: document.querySelector(".js-flow-swiper-next3"),
              prevEl: document.querySelector(".js-flow-swiper-prev3"),
            },
          });
        }
      }

      createSwiper();
      window.addEventListener("resize", createSwiper);
    }
  }

  function clearSwiperStyles(container) {
    if (!container) return;
    // Swiperコンテナのスタイルをクリア
    container.style = "";
    // ページネーションとナビゲーションボタンのスタイルをクリア
    const pagination = container.querySelector(".swiper-pagination");
    if (pagination) pagination.style = "";
    const prevButton = document.querySelector(
      container.getAttribute("data-prev-button")
    );
    if (prevButton) prevButton.style = "";
    const nextButton = document.querySelector(
      container.getAttribute("data-next-button")
    );
    if (nextButton) nextButton.style = "";
  }

  window.addEventListener("load", function () {
    initializeAboutSwiper();
    initializeFlowSwiper1();
    initializeFlowSwiper2();
    initializeFlowSwiper3();
  });
});
