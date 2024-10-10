document.addEventListener("DOMContentLoaded", () => {
  let currentSlide = 1;
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
    videoElement.classList.add("slide-out");
    setTimeout(() => {
      videoElement.querySelector("source").src = videos[currentSlide];
      videoElement.load();
      videoElement.classList.remove("slide-out");
      videoElement.classList.add("slide-in");
    }, 1000);
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

var swiperPG = new Swiper(".mySwiperpg", {
  effect: "slide",
  loop: true,
  freeMode: true,
  slidesPerView: "3",
  speed: 5000,
  autoplay: {
    delay: 1,
    pauseOnMouseEnter: true,
    disableOnInteraction: false,
    waitForTransition: true,
    stopOnLastSlide: false,
  },
});

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
        document.querySelector(".monthyear").textContent = monthyear;
        document.querySelector(".monthday").textContent = monthday;
      }
    } else {
      console.error("activeIndex is out of bounds");
    }
  }

  function initSwiper() {
    swiper = new Swiper(".mySwiperue", {
      slidesPerView: 3,
      spaceBetween: 20,
      centeredSlides: true,
      loop: true,
      speed: 500,
      autoplay: {
        delay: 5000,
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
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
      on: {
        init: updateDetails,
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

// Animation Slide Left and Right
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

jQuery(document).ready(function ($) {
  var $slider = $(".feature-card-container");

  $slider.slick({
    slidesToShow: 3,
    slidesToScroll: 1,
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
        },
      },
    ],
  });

  $(window).on("resize", function () {
    $slider.slick("setPosition");
  });
});
