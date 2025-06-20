document.addEventListener("DOMContentLoaded", function () {
  /* START FAQ SEC CODE */
  const faqItems = document.querySelectorAll(".faq-item");

  faqItems.forEach((item) => {
    item.addEventListener("click", () => {
      // Remove 'active' class from all items
      faqItems.forEach((el) => {
        if (el !== item) {
          el.classList.remove("active");
        }
      });
      // Toggle the clicked item
      item.classList.toggle("active");
    });
  });
  /* END FAQ SEC CODE */

  /* START HEADER MENU CURRENT PAGE ACTIVE LINK CODE */
  var url = window.location.pathname;
  if (url == "/") {
    url = "/index.php";
  }

  var urlRegExp = new RegExp(url.replace(/\/$/, "") + "$");
  // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there

  // now grab every link from the navigation
  jQuery(".navbar ul li a").each(function () {
    //console.log("testlink"+this.href.replace(/\/$/, ''));
    // and test its normalized href against the url pathname regexp
    if (urlRegExp.test(this.href.replace(/\/$/, ""))) {
      jQuery(this).parent("li").addClass("active");
    }
  });

  /* END HEADER MENU CURRENT PAGE ACTIVE LINK CODE */

  // START FIXED HEADER ON SCROLL OR REFRESH

  function handleFixedHeader() {
    var scroll = window.scrollY;
    const header = document.querySelector("header");

    if (!header) return; // ✅ Prevent error if header is null

    if (scroll >= 140) {
      header.classList.add("fixed");
    } else {
      header.classList.remove("fixed");
    }
  }

  // Run on scroll
  window.addEventListener("scroll", handleFixedHeader);

  // Run on page load
  window.addEventListener("load", handleFixedHeader);

  // START HEADER HIDE/SHOW ON SCROLL
  (function () {
    var lastScrollTop = 0,
      delta = 15;
    var header = document.querySelector("header");

    if (!header) return; // ✅ Skip if header is not present

    window.addEventListener("scroll", function () {
      var st = window.scrollY;
      var headerHeight = header.clientHeight;

      if (Math.abs(lastScrollTop - st) <= delta) return;

      if (st > lastScrollTop && lastScrollTop > 0) {
        // downscroll
        header.style.top = -headerHeight + "px";
      } else {
        // upscroll
        header.style.top = "0px";
      }

      lastScrollTop = st;
    });
  })();

  // END HEADER HIDE/SHOW ON SCROLL

  /* START PHONE NUMBER INPUT VALIDATION */
  var phoneInput = document.getElementById("phoneNumber");
  if (phoneInput) {
    phoneInput.addEventListener("input", function (e) {
      let input = e.target.value;
      /* Remove any non-numeric characters except "+" */
      input = input.replace(/[^0-9+]/g, "");
      /* Ensure "+" is only at the beginning */
      if (input.includes("+") && input.indexOf("+") !== 0) {
        input = input.replace(/\+/g, ""); // Remove all "+"
      }
      /* maximum length of 16 characters (1 `+` + 15 digits) */
      if (input.length > 16) {
        input = input.slice(0, 16);
      }
      e.target.value = input;
    });
  }
  /* END PHONE NUMBER INPUT VALIDATION */

  // START HAMBURGER MENU BTN CODE
  if (typeof jQuery !== "undefined") {
    var hamburger = jQuery(".sm-hamburger");
    if (hamburger.length) {
      hamburger.click(function (e) {
        e.stopPropagation();
        if (jQuery(".sm-main-header-right-col").hasClass("show-menu")) {
          jQuery("body").removeClass("no-scroll");
          jQuery(".sm-main-header-right-col").removeClass("show-menu");
        } else {
          jQuery("body").addClass("no-scroll");
          jQuery(".sm-main-header-right-col").addClass("show-menu");
        }
      });
    }

    var closeDrawer = jQuery(".sm-close-drawer");
    if (closeDrawer.length) {
      closeDrawer.click(function (e) {
        e.stopPropagation();
        jQuery("body").removeClass("no-scroll");
        jQuery(".sm-main-header-right-col").removeClass("show-menu");
      });
    }

    // HIDE OPTIONS IF CLICKED ANYWHERE ELSE ON PAGE
    jQuery(document).bind("click", function (e) {
      var $clicked = jQuery(e.target);
      if (!$clicked.parents().hasClass("sm-menu")) {
        jQuery(".sm-main-header-right-col").removeClass("show-menu");
        jQuery("body").removeClass("no-scroll");
      }
    });
  }
  // END HAMBURGER MENU BTN CODE
});

/* START YOUTUBE VIDEO SWIPER SLIDER CODE */
var tag = document.createElement("script");
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName("script");
if (firstScriptTag.length) {
  firstScriptTag[0].parentNode.insertBefore(tag, firstScriptTag[0]);
}

var players = [];
var mySwiper;

function onYouTubeIframeAPIReady() {
  var swiperContainer = document.getElementById("video-swiper");
  if (swiperContainer) {
    var slides = swiperContainer.getElementsByClassName("swiper-slide");
    if (slides.length) {
      for (var i = 0; i < slides.length; i++) {
        var element = slides[i].getElementsByClassName("yt-player")[0];
        if (!element) continue;

        var videoId = element.getAttribute("data-id");
        if (videoId) {
          var player = new YT.Player(element, {
            videoId: videoId,
            playerVars: {
              autoplay: 0,
              modestbranding: 1,
              rel: 0,
              controls: 0,
              showinfo: 0,
            },
          });
          players.push(player);
        }
      }
    }

    setTimeout(function () {
      if (typeof Swiper !== "undefined") {
        mySwiper = new Swiper(".sm-swiper", {
          effect: "slide",
          spaceBetween: 0,
          slidesPerView: 1,
          centeredSlides: true,
          loop: true,
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          on: {
            slideChangeTransitionEnd: function () {
              if (!mySwiper) return;
              var activeIndex = mySwiper.realIndex;
              // Pause all videos
              players.forEach((player) => {
                if (player && typeof player.pauseVideo === "function") {
                  player.pauseVideo();
                }
              });
              // Play current slide's video
              setTimeout(function () {
                if (
                  players[activeIndex] &&
                  typeof players[activeIndex].playVideo === "function"
                ) {
                  players[activeIndex].playVideo();
                }
              }, 300);
            },
          },
        });
      }
    }, 500);

    function preventScroll(event) {
      var swiperRect = swiperContainer.getBoundingClientRect();
      var windowHeight =
        window.innerHeight || document.documentElement.clientHeight;
      players.forEach((player) => {
        if (
          player &&
          typeof player.getPlayerState === "function" &&
          player.getPlayerState() === 1
        ) {
          if (!(swiperRect.top >= 0 && swiperRect.bottom <= windowHeight)) {
            event.preventDefault();
            event.stopPropagation();
          }
        }
      });
    }

    function checkVideoVisibility() {
      var rect = swiperContainer.getBoundingClientRect();
      var windowHeight =
        window.innerHeight || document.documentElement.clientHeight;
      if (rect.top > windowHeight * 0.6 || rect.bottom < windowHeight * 0.4) {
        players.forEach((player) => {
          if (
            player &&
            typeof player.getPlayerState === "function" &&
            player.getPlayerState() === 1
          ) {
            player.pauseVideo();
          }
        });
      }
    }

    window.addEventListener("scroll", checkVideoVisibility);
    window.addEventListener("wheel", preventScroll, { passive: true });
    window.addEventListener("touchmove", preventScroll, { passive: true });
  }
}

/* START CATEGORIES FILTER CODE */
var filterButtons = document.getElementById("filter-buttons");
if (filterButtons) {
  filterButtons.addEventListener("click", function (e) {
    if (e.target.tagName === "BUTTON") {
      const category = e.target.getAttribute("data-category");
      if (category) {
        // Remove active class from all buttons
        const buttons = document.querySelectorAll("#filter-buttons button");
        if (buttons.length) {
          buttons.forEach((btn) => btn.classList.remove("active"));
        }
        // Add active class to the clicked button
        e.target.classList.add("active");
        // Scroll active button to center
        scrollActiveButtonToCenter(e.target);
        // Filter categories
        filterCategories(category);
      }
    }
  });
}

function filterCategories(category) {
  const items = document.querySelectorAll(".category-item");
  if (items.length) {
    items.forEach((item) => {
      if (
        category === "all" ||
        item.getAttribute("data-category") === category
      ) {
        item.style.display = "block";
      } else {
        item.style.display = "none";
      }
    });
  }
}

// Function to scroll active button to center
function scrollActiveButtonToCenter(activeButton) {
  const container = document.getElementById("filter-buttons");
  if (container && activeButton) {
    const buttonRect = activeButton.getBoundingClientRect();
    const containerRect = container.getBoundingClientRect();
    const scrollLeft =
      activeButton.offsetLeft + buttonRect.width / 2 - containerRect.width / 2;
    container.scrollTo({
      left: scrollLeft,
      behavior: "smooth",
    });
  }
}

// By default, show all categories, set 'All' button as active, and center it
document.addEventListener("DOMContentLoaded", function () {
  const allButton = document.querySelector(
    '#filter-buttons button[data-category="all"]'
  );
  if (allButton) {
    filterCategories("all");
    allButton.classList.add("active");
    scrollActiveButtonToCenter(allButton);
  }
});
/* END CATEGORIES FILTER CODE */

/* START TESTIMONIAL SLIDER DESIGN */
var swiper2 = new Swiper(".testimonialSwiper", {
  navigation: {
    nextEl: ".swiper-button-next2",
    prevEl: ".swiper-button-prev2",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
});
/* END TESTIMONIAL SLIDER DESIGN */
