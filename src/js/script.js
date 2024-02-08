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
    const footerHeight = $(".p-footer").outerHeight();

    if (scrollPosition > 70) {
      pageTop.fadeIn();
    } else {
      pageTop.fadeOut();
    }

    if (bodyHeight - scrollPosition <= windowHeight + footerHeight) {
      pageTop.css({
        position: "absolute",
        bottom: footerHeight + 6 + "px",
      });
    } else {
      pageTop.css({ position: "fixed", bottom: "20px" });
    }
  });

  pageTop.click(function () {
    $("body,html").animate({ scrollTop: 0 }, 300, "swing");
    return false;
  });

  // アンカーリンク
  $(document).ready(function () {
    // 別ページからの遷移を考慮して、ページ読み込み時とハッシュ変更時に処理を実行
    function adjustAnchor() {
      const headerHeight = $(".js-header").outerHeight(); // ヘッダーの動的な高さを取得
      const hash = window.location.hash; // 現在のハッシュを取得

      if (hash) {
        const target = $(hash);
        if (target.length) {
          const position = target.offset().top - headerHeight; // ヘッダーの高さを考慮した位置を計算
          $("html, body").stop().animate({ scrollTop: position }, 600, "swing");
        }
      }
    }

    // ページ読み込み時とハッシュが変更された時にアンカー位置調整を実行
    $(window).on("load hashchange", function () {
      adjustAnchor();
    });

    // ページ内リンクに対するクリックイベント
    $('a[href^="#"]').click(function (e) {
      const href = $(this).attr("href");
      // 別ページへのアンカーの場合はデフォルトの動作を実行
      if (href.startsWith("#") && href.length > 1) {
        // ハッシュ変更をトリガーとして位置調整を実行する
        window.location.hash = href;
        return false; // デフォルトのアンカー動作をキャンセル
      }
    });
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

  // SPのみスライダー
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
            loop: true,
            spaceBetween: 45,
            slidesPerView: "auto",
            centeredSlides: true,
            speed: 1000,
            autoplay: {
              disableOnInteraction: false,
            },
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

  // 表示崩れ対策の共通関数
  function applyCommonSwiperStyles() {
    const flows = document.querySelectorAll(".p-sub-flow");
    flows.forEach(function (flow) {
      flow.style.opacity = 1;
      flow.style.visibility = "visible";
      flow.style.transform = "translateY(0px)";
    });
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
            // Swiper初期化後に共通スタイル適用関数を呼び出し
            on: {
              init: function () {
                applyCommonSwiperStyles();
              },
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
            // Swiper初期化後に共通スタイル適用関数を呼び出し
            on: {
              init: function () {
                applyCommonSwiperStyles();
              },
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
            // Swiper初期化後に共通スタイル適用関数を呼び出し
            on: {
              init: function () {
                applyCommonSwiperStyles();
              },
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

// modal
document.addEventListener("DOMContentLoaded", function () {
  const modal = document.querySelector(".js-modal");

  // `modal` 要素が存在する場合のみ処理を実行
  if (modal) {
    const modalWrap = modal.querySelector(".p-modal__wrap");
    const modalInner = modal.querySelector(".p-modal__inner"); // modal__inner 要素を取得
    const modalImgContainer = modal.querySelector(".p-modal__img");
    const modalImg = modalImgContainer
      ? modalImgContainer.querySelector("img")
      : null;
    const modalClose = document.querySelector(".p-modal__close-button");
    const prevButton = document.querySelector(".p-modal__prev");
    const nextButton = document.querySelector(".p-modal__next");

    let currentIndex = 0;
    let imageSources = [];

    const modalTriggers = document.querySelectorAll(".js-modal-trigger");
    modalTriggers.forEach((trigger, index) => {
      imageSources.push(trigger.getAttribute("href"));
      trigger.setAttribute("data-index", index);

      trigger.addEventListener("click", function (e) {
        e.preventDefault();
        currentIndex = parseInt(this.getAttribute("data-index"));
        if (modalImg) {
          openModal(this.getAttribute("href"));
        }
      });
    });

    function openModal(imgSrc) {
      if (modalImg) {
        modalImg.src = imgSrc;
      }
      modal.classList.add("show");
      if (modalWrap) {
        modalWrap.classList.add("show");
      }
      modal.style.visibility = "visible";
      updateButtonStates();
      document.body.style.overflow = "clip";
    }

    function updateModalImage(index) {
      if (modalImg) {
        // 既存のアニメーションクラスをクリア
        modalImg.classList.remove("fadeIn");

        // アニメーションが終了したらクラスを削除
        modalImg.addEventListener(
          "animationend",
          function () {
            modalImg.classList.remove("fadeIn");
          },
          { once: true }
        );

        // 新しい画像ソースを設定してアニメーションクラスを追加
        modalImg.src = imageSources[index];
        modalImg.classList.add("fadeIn");
      }
      updateButtonStates();
    }

    function updateButtonStates() {
      if (prevButton) {
        prevButton.classList.toggle("is-disabled", currentIndex <= 0);
      }
      if (nextButton) {
        nextButton.classList.toggle(
          "is-disabled",
          currentIndex >= imageSources.length - 1
        );
      }
    }

    if (prevButton) {
      prevButton.addEventListener("click", function () {
        if (currentIndex > 0) {
          currentIndex--;
          updateModalImage(currentIndex);
        }
      });
    }

    if (nextButton) {
      nextButton.addEventListener("click", function () {
        if (currentIndex < imageSources.length - 1) {
          currentIndex++;
          updateModalImage(currentIndex);
        }
      });
    }

    function closeModal() {
      modal.classList.remove("show");
      if (modalWrap) {
        modalWrap.classList.remove("show");
      }
      modal.addEventListener("transitionend", function onTransitionEnd() {
        modal.style.visibility = "hidden";
        modal.removeEventListener("transitionend", onTransitionEnd);
        document.body.style.overflow = "";
      });
    }

    modal.addEventListener("click", function (e) {
      if (
        e.target === modal ||
        e.target === modalInner ||
        e.target === modalInner
      ) {
        closeModal();
      }
    });

    // modalWrap をクリックした場合にも closeModal を実行
    if (modalWrap) {
      modalWrap.addEventListener("click", function (e) {
        if (e.target === modalWrap) {
          // クリックされた要素が modalWrap 自身である場合のみ
          closeModal();
        }
      });
    }

    if (modalClose) {
      modalClose.addEventListener("click", closeModal);
    }

    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape" || e.key === "Esc") {
        closeModal();
      }
    });
  }
});
