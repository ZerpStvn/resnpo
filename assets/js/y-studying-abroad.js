document.addEventListener("DOMContentLoaded", function () {
  const slides = document.querySelectorAll(".fsa-slide");
  const buttons = document.querySelectorAll(".fsa-nav-button");
  const flowContent = document.getElementById("flow-content");
  let currentIndex = 0;
  const intervalTime = 3000; // Time in milliseconds for each slide

  function isMobile() {
    return window.matchMedia("(max-width: 768px)").matches;
  }

  window.showSlide = function (index) {
    // Update button active state for both mobile and desktop
    buttons.forEach((button, i) => {
      if (i === index) {
        button.classList.add("active");
      } else {
        button.classList.remove("active");
      }
    });

    if (!isMobile()) {
      slides.forEach((slide, i) => {
        const slideDisplay = slide.querySelector(".fsa-slide-display");
        if (i === index) {
          slide.classList.add("active");
          slideDisplay.classList.add("active");
        } else {
          slide.classList.remove("active");
          slideDisplay.classList.remove("active");
        }
      });
      currentIndex = index;
      flowContent.style.display = "none";
    } else {
      // On mobile, just update the flow-content
      const slide = slides[index];
      const content = slide.querySelector(".fsa-slide-desc").innerHTML;
      flowContent.innerHTML = content;
      flowContent.style.display = "flex";
      const computedStyles = window.getComputedStyle(slide);
      flowContent.style.backgroundColor = computedStyles.backgroundColor;
    }

    currentIndex = index;
  };

  // Initialize slides based on device type
  if (isMobile()) {
    // Remove active class from all slides and buttons on mobile
    slides.forEach((slide, index) => {
      slide.classList.remove("active");
      buttons[index].classList.remove("active");
      const slideDisplay = slide.querySelector(".fsa-slide-display");
      if (slideDisplay) {
        slideDisplay.classList.remove("active");
      }
    });
    flowContent.style.display = "none";
  } else {
    showSlide(0);
  }

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

  function resetAutoplay() {
    clearInterval(autoplay);
    autoplay = setInterval(() => {
      currentIndex = (currentIndex + 1) % slides.length;
      showSlide(currentIndex);
    }, intervalTime);
  }

  let autoplay = setInterval(() => {
    currentIndex = (currentIndex + 1) % slides.length;
    showSlide(currentIndex);
  }, intervalTime);
});

const inquireTitles = document.querySelectorAll(".inq-title");
let InqcurrentIndex = 0;

function animateInquire() {
  inquireTitles.forEach((title, index) => {
    if (index === InqcurrentIndex) {
      title.classList.remove("outline");
    } else {
      title.classList.add("outline");
    }
  });

  InqcurrentIndex = (InqcurrentIndex + 1) % inquireTitles.length;
}

animateInquire();

setInterval(animateInquire, 200);

document.querySelectorAll("details").forEach((details) => {
  details.addEventListener("click", (e) => {
    if (details.open) {
      e.preventDefault();
      details.classList.add("closing");
      setTimeout(() => {
        details.open = false;
        details.classList.remove("closing");
      }, 300); // This should match the transition duration in your CSS
    }
  });
});

// FOR PAGES DONATION MEMBERSHIP
const bTitle = document.querySelectorAll(".b-title");
let bTitleCurrentIndex = 0;

function animateInquireB() {
  bTitle.forEach((title, index) => {
    if (index === bTitleCurrentIndex) {
      title.classList.remove("outline");
    } else {
      title.classList.add("outline");
    }
  });

  bTitleCurrentIndex = (bTitleCurrentIndex + 1) % bTitle.length;
}

animateInquireB();

setInterval(animateInquireB, 200);
