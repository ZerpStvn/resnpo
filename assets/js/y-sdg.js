// SDG Landing Slider
document.addEventListener("DOMContentLoaded", () => {
  let currentSlide = 0;
  const videoPaths = document.getElementById("video-paths");
  const videos = [
    videoPaths.getAttribute("data-video1"),
    videoPaths.getAttribute("data-video2"),
    videoPaths.getAttribute("data-video3"),
    videoPaths.getAttribute("data-video4"),
  ];

  function setSlide(index) {
    const dots = document.querySelectorAll(".dot");
    dots.forEach((dot, i) => {
      if (i === index) {
        dot.style.height = "20px";
        dot.style.width = "20px";
        dot.style.backgroundColor = "transparent";
        dot.style.border = "2px solid white";
      } else {
        dot.style.height = "10px";
        dot.style.width = "10px";
        dot.style.backgroundColor = "white";
        dot.style.border = "none";
      }
    });
    currentSlide = index;
    const videoElement = document.getElementById("background-video");
    videoElement.classList.remove("slide-in");
    videoElement.querySelector("source").src = videos[currentSlide];
    videoElement.load();
    videoElement.classList.add("slide-in");
  }

  function prevSlide() {
    currentSlide = (currentSlide - 1 + videos.length) % videos.length;
    setSlide(currentSlide);
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % videos.length;
    setSlide(currentSlide);
  }

  // Attach event listeners to arrows
  document.querySelector(".arrow-left").addEventListener("click", prevSlide);
  document.querySelector(".arrow-right").addEventListener("click", nextSlide);

  // Automatically change slides every 5 seconds
  setInterval(nextSlide, 5000);
});
// SDG Landing Slide

// Photo Gallery
var swiperPG = new Swiper(".mySwiperpg", {
  effect: "slide",
  loop: true,
  freeMode: true,
  slidesPerView: 4,
  speed: 5000,
  allowTouchMove: true,
  autoplay: {
    delay: 1,
    pauseOnMouseEnter: true,
    disableOnInteraction: false,
  },
  breakpoints: {
    768: {
      slidesPerView: 3,
      // spaceBetween: 20,
    },
  },
  on: {
    breakpoint: function (swiper) {
      if (window.innerWidth <= 768) {
        swiper.params.speed = 1500;
        swiper.params.autoplay.delay = 0; // Remove delay on mobile
      } else {
        swiper.params.speed = 5000;
        swiper.params.autoplay.delay = 1; // Keep minimal delay for desktop
      }
      swiper.update();
      if (swiper.autoplay) {
        swiper.autoplay.start(); // Ensure autoplay restarts after update
      }
    },
    init: function (swiper) {
      // Check width on initial load
      if (window.innerWidth <= 768) {
        swiper.params.speed = 1500;
        swiper.params.autoplay.delay = 0;
      }
      swiper.update();
      if (swiper.autoplay) {
        swiper.autoplay.start(); // Ensure autoplay starts on init
      }
    },
  },
});

// Start autoplay after initialization
swiperPG.autoplay.start();

//End Photo Gallery

// Upcoming Events Slider
document.addEventListener("DOMContentLoaded", function () {
  let swiper;

  function updateDetails() {
    if (!swiper || !swiper.slides || !Array.isArray(swiper.slides)) return;
    let activeIndex = (swiper.realIndex + 1) % swiper.slides.length;

    if (activeIndex >= 0 && activeIndex < swiper.slides.length) {
      const activeSlide = swiper.slides[swiper.activeIndex + 1];
      if (activeSlide) {
        const title = activeSlide.getAttribute("data-title");
        const content = activeSlide.getAttribute("data-content");
        const monthyear = activeSlide.getAttribute("data-monthyear");
        const monthday = activeSlide.getAttribute("data-monthday");
        const subdescription = activeSlide.getAttribute("data-subdescription");

        document.querySelector(".ue-details-title").textContent = title;
        document.querySelector(".ue-details-content").textContent = content;
        document.querySelector(".ue-details-subdescription").textContent =
          subdescription;
        document.querySelectorAll(".monthyear").forEach((element) => {
          element.textContent = monthyear;
        });
        document.querySelectorAll(".monthday").forEach((element) => {
          element.textContent = monthday;
        });
      }
    } else {
      console.error("activeIndex is out of bounds");
    }
  }

  function initSwiper() {
    swiper = new Swiper(".mySwiperue", {
      slidesPerView: 3,
      spaceBetween: 20,
      // allowTouchMove: false,
      centeredSlides: true,
      loop: true,
      speed: 500,
      autoplay: {
        delay: 0, // No delay for the first slide
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        480: {
          centeredSlides: true,
          loop: true,
          slidesPerView: 3,
        },
        768: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 3,
        },
      },
      on: {
        init: function () {
          updateDetails();
          setTimeout(() => {
            swiper.params.autoplay.delay = 5000; // Set delay to 5000ms for subsequent slides
            swiper.autoplay.start();
          }, 0); // Start autoplay immediately

          // Add click event listeners to slide images
          document
            .querySelectorAll(".mySwiperue .swiper-slide img")
            .forEach((img, index) => {
              img.addEventListener("click", () => {
                // Calculate the index to center the clicked slide minus one
                let centerIndex =
                  swiper.realIndex -
                  Math.floor(swiper.params.slidesPerView / 2) -
                  1;
                // Ensure the index stays within valid bounds
                if (centerIndex < 0) {
                  centerIndex = 0;
                }
                swiper.slideTo(centerIndex);
              });
            });
        },
        slideChange: updateDetails,
      },
    });
  }

  initSwiper();

  window.addEventListener("resize", () => {
    if (swiper) {
      swiper.destroy(true, true);
    }
    initSwiper();
  });
});

// End of UE SLider

// Animation Scale In
document.addEventListener("DOMContentLoaded", function () {
  const elements = document.querySelectorAll(".scaleIn");
  elements.forEach((element) => {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            console.log("Element is intersecting");
            element.classList.add("on");
            observer.unobserve(element);
          }
        });
      },
      {
        threshold: 0.1,
      }
    );

    observer.observe(element);
  });
});

// Animation Slide Left and Right, Up and Down
document.addEventListener("DOMContentLoaded", function () {
  const elements = document.querySelectorAll(
    ".slideleft, .slideright, .slideup, .slidedown"
  );

  elements.forEach((element) => {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            element.classList.add("on");
            const images = element.querySelectorAll("img");
            images.forEach((img) => {
              img.style.opacity = "1";
            });
            observer.unobserve(element);
          }
        });
      },
      {
        threshold: 0,
        rootMargin: "0px 0px -10% 0px",
      }
    );
    observer.observe(element);
  });
});

// Feature Card Slider
jQuery(document).ready(function ($) {
  var $slider = $(".feature-card-container");

  $slider.slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode: true,
          centerPadding: "20%",
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode: true,
          centerPadding: "20%",
          arrows: false,
          autoplay: true,
          autoplaySpeed: 3000,
        },
      },
    ],
  });

  $(window).on("resize", function () {
    $slider.slick("setPosition");
  });
});

// Past Performance Pagination
document.addEventListener("DOMContentLoaded", function () {
  const paginationLinks = document.querySelectorAll(".pagination a");

  paginationLinks.forEach((link) => {
    link.addEventListener("click", function (event) {
      event.preventDefault();
      const url = new URL(this.href);
      url.hash = "past-performance-section";
      window.location.href = url;
    });
  });

  if (window.location.hash === "#past-performance-section") {
    document.getElementById("past-performance-section").scrollIntoView();
  }
});
