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
      videoElement.load(); // Reload the video to apply the new source
      videoElement.classList.remove("slide-out");
      videoElement.classList.add("slide-in");
    }, 1000); // Match the transition duration
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

// const swiperUC = new Swiper(".swiper-container", {
//   navigation: {
//     nextEl: ".swiper-button-next",
//     prevEl: ".swiper-button-prev",
//   },
//   on: {
//     slideChange: function () {
//       const activeSlide = swiper.slides[swiper.activeIndex];
//       const description = activeSlide.getAttribute("data-description");
//       document.getElementById("image-description").textContent = description;
//     },
//   },
// });
document.addEventListener("DOMContentLoaded", function () {
  let swiper;

  function updateDetails() {
    if (!swiper) return;
    // Calculate the index of the third visible slide
    // +4 because: +1 (to next set) +3 (to third child of that set)
    const activeIndex = (swiper.activeIndex + 1) % swiper.slides.length;
    const activeSlide = swiper.slides[activeIndex];
    if (activeSlide) {
      const title = activeSlide.getAttribute("data-title");
      const content = activeSlide.getAttribute("data-content");
      const monthyear = activeSlide.getAttribute("data-monthyear");
      const monthday = activeSlide.getAttribute("data-monthday");

      document.querySelector(".ue-details-title").textContent = title;
      document.querySelector(".ue-details-content").textContent = content;
      document.querySelector(".monthyear").textContent = monthyear;
      document.querySelector(".monthday").textContent = monthday;
    }
  }

  swiper = new Swiper(".mySwiperue", {
    slidesPerView: 3,
    loop: true,
    centeredSlides: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    on: {
      init: updateDetails,
      slideChange: updateDetails,
    },
  });
});
