document.addEventListener("DOMContentLoaded", function () {
  const slides = document.querySelectorAll(".fsa-slide");
  const buttons = document.querySelectorAll(".fsa-nav-button");
  let currentIndex = 0;
  const intervalTime = 3000; // Time in milliseconds for each slide

  window.showSlide = function (index) {
    slides.forEach((slide, i) => {
      const slideDisplay = slide.querySelector(".fsa-slide-display");
      if (i === index) {
        slide.classList.add("active");
        buttons[i].classList.add("active");
        slideDisplay.classList.add("active");
      } else {
        slide.classList.remove("active");
        buttons[i].classList.remove("active");
        slideDisplay.classList.remove("active");
      }
    });
    currentIndex = index;
  };

  showSlide(0);

  buttons.forEach((button, index) => {
    button.addEventListener("click", () => {
      showSlide(index);
      resetAutoplay();
    });
  });

  slides.forEach((slide, index) => {
    slide.addEventListener("click", () => {
      showSlide(index);
      resetAutoplay();
    });
  });

  // Autoplay functionality
  function nextSlide() {
    const nextIndex = (currentIndex + 1) % slides.length;
    showSlide(nextIndex);
  }

  let autoplayInterval = setInterval(nextSlide, intervalTime);

  // Reset autoplay interval when a button or slide is clicked
  function resetAutoplay() {
    clearInterval(autoplayInterval);
    autoplayInterval = setInterval(nextSlide, intervalTime);
  }
});
