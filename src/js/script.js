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

    if (scrollPosition > 70) {
      pageTop.fadeIn();
    } else {
      pageTop.fadeOut();
    }

    if (bodyHeight - scrollPosition <= windowHeight + footerHeight) {
      pageTop.css({
        position: "absolute",
        bottom: footerHeight + 100 + "px",
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

// modal
// 画像が複数ある場合;
// var options = {
//   // ESCキーで閉じる(初期値：閉じる)
//   closeWithEscape: true,
//   // スクロールで閉じる(初期値：閉じない)
//   closeOnScroll: false,
//   // 閉じるボタンの表示(初期値：表示)
//   showCloseButton: true,
//   // aタグ以外でポップアップさせる場合のオプション(初期値：href)
//   sourceAttribute: "href",
//   // キャプション(初期値：なし)
//   caption: function (trigger) {
//     return trigger.querySelector("img").getAttribute("alt");
//   },
// };
// var luminousTrigger = document.querySelectorAll(".luminous");
// if (luminousTrigger !== null) {
//   new LuminousGallery(luminousTrigger, {}, options);
// }

// test
$(document).ready(function () {
  // Function to update lum-close-button top value
  function updateCloseButtonTop() {
    var totalHeight = 0;

    // Iterate through each lum-lightbox-position-helper element
    $(".lum-lightbox-position-helper").each(function () {
      // Accumulate the heights of all lum-lightbox-position-helper elements
      totalHeight += $(this).height();
    });

    // Calculate the average height
    var averageHeight = totalHeight / $(".lum-lightbox-position-helper").length;

    // Calculate the top value for lum-close-button
    var closeButtonTop = "calc(50% - " + (averageHeight / 2 + 30) + "px)";

    // Apply the calculated top value to lum-close-button
    $(".lum-close-button").css("top", closeButtonTop);
  }

  // Initial update on document ready
  updateCloseButtonTop();

  // Update lum-close-button top value on window resize
  $(window).on("resize", function () {
    updateCloseButtonTop();
  });
});

// modal
// document.addEventListener("DOMContentLoaded", function () {
//   // Get modal elements
//   const modal = document.querySelector(".js-modal");
//   const modalInner = document.querySelector(".modal__inner");
//   const modalClose = document.querySelector(".modal__close-button");
//   const modalImg = document.querySelector(".modal__img img");

//   // Get all image links with class js-modal-trigger
//   const modalTriggers = document.querySelectorAll(".js-modal-trigger");

//   // Function to open modal with a specific image source
//   function openModal(imgSrc) {
//     modalImg.src = imgSrc;
//     modal.style.display = "block";
//   }

//   // Function to close modal
//   function closeModal() {
//     modal.style.display = "none";
//     modalImg.src = ""; // Clear the image source
//   }

//   // Attach click event listeners to all modal triggers
//   modalTriggers.forEach((trigger, index) => {
//     trigger.addEventListener("click", function (e) {
//       e.preventDefault(); // Prevent default link behavior
//       const imgSrc = this.getAttribute("href");
//       openModal(imgSrc);
//     });
//   });

//   // Close modal when the overlay is clicked
//   modal.addEventListener("click", function () {
//     closeModal();
//   });

//   // Close modal when the overlay is clicked
//   modal.addEventListener("click", function (e) {
//     if (e.target === modal) {
//       closeModal();
//     }
//   });

//   // Close modal when the Esc key is pressed
//   document.addEventListener("keydown", function (e) {
//     if (e.key === "Escape" || e.key === "Esc") {
//       closeModal();
//     }
//   });

//   // Initial state: Hide modal
//   modal.style.display = "none";
// });

document.addEventListener("DOMContentLoaded", function () {
  // Get modal elements
  const modal = document.querySelector(".js-modal");
  const modalInner = document.querySelector(".modal__inner");
  const modalClose = document.querySelector(".modal__close-button");
  const modalImg = document.querySelector(".modal__img img");

  // Get all image links with class js-modal-trigger
  const modalTriggers = document.querySelectorAll(".js-modal-trigger");

  // Function to open modal with a specific image source
  function openModal(imgSrc) {
    modalImg.src = imgSrc;
    modal.style.display = "grid";
  }

  // Function to close modal
  function closeModal() {
    modal.style.display = "none";
    modalImg.src = ""; // Clear the image source
  }

  // Attach click event listeners to all modal triggers
  modalTriggers.forEach((trigger, index) => {
    trigger.addEventListener("click", function (e) {
      e.preventDefault(); // Prevent default link behavior
      const imgSrc = this.getAttribute("href");
      openModal(imgSrc);
    });
  });

  // Close modal when the overlay is clicked
  modal.addEventListener("click", function (e) {
    if (e.target === modal) {
      closeModal();
    }
  });

  // Prevent modal from closing when clicking inside the modalInner
  modalInner.addEventListener("click", function (e) {
    e.stopPropagation(); // Prevent event from bubbling up to the overlay
  });

  // Close modal when the close button is clicked
  modalClose.addEventListener("click", function (e) {
    closeModal();
  });

  // Close modal when the Esc key is pressed
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape" || e.key === "Esc") {
      closeModal();
    }
  });

  // Initial state: Hide modal
  modal.style.display = "none";
});
