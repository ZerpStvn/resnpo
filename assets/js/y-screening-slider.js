const slider = document.querySelector(".slider");
const slides = document.querySelectorAll(".slide");
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");
let currentIndex = Math.floor(slides.length / 2);

const SLIDE_WIDTH = 220; // Match this with the CSS width
const VERTICAL_OFFSET = 40; // Keep the same vertical offset

function updateSlider() {
  const totalSlides = slides.length;
  const halfTotal = Math.floor(totalSlides / 2);

  slides.forEach((slide, index) => {
    let offset = (index - currentIndex + totalSlides) % totalSlides;
    if (offset > halfTotal) offset -= totalSlides;

    const xOffset = offset * (SLIDE_WIDTH + 20); // Add 30px for the margin
    const yOffset = Math.abs(offset) * VERTICAL_OFFSET;
    const zIndex = halfTotal - Math.abs(offset);
    const scale = 1 - Math.abs(offset) * 0.1;
    const opacity = 1 - Math.abs(offset) * 0.2;

    slide.style.transform = `translateX(${xOffset}px) translateY(-${yOffset}px) scale(${scale})`;
    slide.style.zIndex = zIndex;
    slide.style.opacity = opacity;
  });
}

prevBtn.addEventListener("click", () => {
  currentIndex = (currentIndex - 1 + slides.length) % slides.length;
  updateSlider();
});

nextBtn.addEventListener("click", () => {
  currentIndex = (currentIndex + 1) % slides.length;
  updateSlider();
});

// Initialize the slider
updateSlider();

// Automatically click the next button every 3 seconds
setInterval(() => {
  nextBtn.click();
}, 3000); // Adjust the interval as needed (3000ms = 3 seconds)
