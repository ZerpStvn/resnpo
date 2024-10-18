jQuery.noConflict();

$(document).ready(function () {
  $(".sdg-link").click(function (e) {
    e.preventDefault();
    $(this).siblings(".sub-menu").slideToggle();
  });
});

// START: AOS ANIMATION EFFECTS
jQuery(document).ready(() => {
  AOS.init({
    duration: 600,
    once: true,
  });

  window.addEventListener("load", AOS.refresh);
});
// END: AOS ANIMATION EFFECTS

jQuery(window).on("hashchange", function () {
  jQuery("div.tab").hide();
  jQuery(location.hash).fadeIn("slow");
});

jQuery("a.hash").on("click", function (e) {
  e.preventDefault();
  location.hash = jQuery(this).data("hash");
});

// Highlight link when it's Active

jQuery(".hash").on("click", function () {
  var activeLink = jQuery(".map-link-active");
  activeLink.removeClass("map-link-active");
  jQuery(this).parent().addClass("map-link-active");
});

jQuery("a.hash-donation").on("click", function (e) {
  e.preventDefault();
  location.hash = jQuery(this).data("hash");
});
// END: GOOGLE MAP LOCATION NAV TAB

// Highlight link when it's Active Donations Page

jQuery(".hash-donation").on("click", function (e) {
  e.preventDefault(); // Prevent the default behavior of the anchor tag

  // Remove active class from all buttons
  jQuery(".donation-link-active").removeClass("donation-link-active");

  // Add active class to the clicked button's parent div
  jQuery(this).parent().addClass("donation-link-active");

  // Reset background color for all buttons
  jQuery(".tab-btn-donation").css({ "background-color": "", color: "#8c8c8c" });

  // Get the data-hash attribute value
  var hash = jQuery(this).data("hash");

  // Change the background color based on the data-hash value
  if (hash === "A") {
    jQuery(this)
      .find("button")
      .css({ "background-color": "#53B9B5", color: "#ffffff" });
  } else if (hash === "B") {
    jQuery(this)
      .find("button")
      .css({ "background-color": "#FFBB54", color: "#ffffff" });
  } else if (hash === "C") {
    jQuery(this)
      .find("button")
      .css({ "background-color": "#56C3E6", color: "#ffffff" });
  }
});

// NAVBAR SECTION

jQuery(document).ready(function () {
  jQuery("#nav-icon").click(function () {
    jQuery("#nav-menu").toggleClass("active");
  });

  jQuery(".btn-close").click(function () {
    jQuery("#nav-menu").removeClass("active");
  });
});

// Select the necessary elements
const subListItems = document.querySelectorAll(".sub-ul > li");
const mainImg = document.querySelector(".main-ul .img-container img");
const mainTitle = document.querySelector(".main-ul .class-title");
const mainContent = document.querySelector(".main-ul .class-content");

// Function to change the main content
function changeMainContent(index) {
  // Get the selected sub list item details
  const selectedItem = subListItems[index];
  const selectedImg = selectedItem.querySelector("img").src;
  const selectedTitle = selectedItem.querySelector(".class-title").innerHTML;
  const selectedContent =
    selectedItem.querySelector(".class-content").innerHTML;

  // Save the current main content (before change)
  const oldImg = mainImg.src;
  const oldTitle = mainTitle.innerHTML;
  const oldContent = mainContent.innerHTML;

  // Update the main image, title, and content
  mainImg.src = selectedImg;
  mainTitle.innerHTML = selectedTitle;
  mainContent.innerHTML = selectedContent;

  // Update the clicked sub-list item's content with the old main content
  selectedItem.querySelector("img").src = oldImg;
  selectedItem.querySelector(".class-title").innerHTML = oldTitle;
  selectedItem.querySelector(".class-content").innerHTML = oldContent;
}

// Attach click event listeners to each sub list item
subListItems.forEach((item, index) => {
  item.addEventListener("click", () => changeMainContent(index));
});

jQuery(document).ready(function ($) {
  $(".slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    speed: 10,
    autoplaySpeed: 2500,
    fade: true,
    cssEase: "linear",
    autoplay: true,
    arrows: false,
    dots: false,
    responsive: [
      {
        breakpoint: 478,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          dots: false,
          centerMode: true,
          adaptiveHeight: true,
        },
      },
    ],
  });

  $(".slider").on(
    "beforeChange",
    function (event, slick, currentSlide, nextSlide) {
      $(".header-people").removeClass("shake-once");
    }
  );

  $(".slider").on("afterChange", function (event, slick, currentSlide) {
    $(".slick-active .header-people").addClass("shake-once");
  });
  $(".slider").on(
    "beforeChange",
    function (event, slick, currentSlide, nextSlide) {
      $(".pg-flex-container").removeClass("pg-active");
      $(".hr-pagination").removeClass("active");

      $(".pg-flex-container").eq(nextSlide).addClass("pg-active");
      $(".hr-pagination").eq(nextSlide).addClass("active");
    }
  );

  $(".pg-flex-container").on("click", function () {
    var index = $(this).parent().index();
    $(".slider").slick("slickGoTo", index);
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const recentArticles = document.querySelectorAll(".recent-article");
  const mainArticle = document.getElementById("main-article");

  recentArticles.forEach((article) => {
    article.addEventListener("click", function (event) {
      event.preventDefault();

      // Get data from the clicked recent article
      const title = this.getAttribute("data-title");
      const date = this.getAttribute("data-date");
      const excerpt = this.getAttribute("data-excerpt");
      const link = this.getAttribute("data-link");
      const image = this.getAttribute("data-image");

      // Get data from the main article
      const mainTitle = mainArticle.querySelector(".head-clr").textContent;
      const mainDate = mainArticle.querySelector(".sub-head-clr").textContent;
      const mainExcerpt = mainArticle.querySelector(".details").textContent;
      const mainLink = mainArticle.querySelector(".btn-container a").href;
      const mainImage = mainArticle.querySelector(
        ".img-container-news img"
      ).src;

      // Update the main article with the clicked recent article's data
      mainArticle.querySelector(".img-container-news img").src = image;
      mainArticle.querySelector(".sub-head-clr").textContent = date;
      mainArticle.querySelector(".head-clr").textContent = title;
      mainArticle.querySelector(".details").textContent = excerpt;
      mainArticle.querySelector(".btn-container a").href = link;

      // Update the clicked recent article with the main article's data
      this.setAttribute("data-title", mainTitle);
      this.setAttribute("data-date", mainDate);
      this.setAttribute("data-excerpt", mainExcerpt);
      this.setAttribute("data-link", mainLink);
      this.setAttribute("data-image", mainImage);
      this.textContent = mainTitle;
      this.closest(".with-img").querySelector(
        ".img-container-news-recent img"
      ).src = mainImage;
      this.closest(".with-img").querySelector(".text-clr").textContent =
        mainDate;
    });
  });
});
