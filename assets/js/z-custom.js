jQuery.noConflict();

$(document).ready(function () {
  // Toggle the sub-menu when SDGs link is clicked
  $(".sdg-link").click(function (e) {
    e.preventDefault(); // Prevent the default link behavior
    $(this).siblings(".sub-menu").slideToggle(); // Toggle the visibility of the sub-menu
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
const mainListItems = document.querySelector(".main-ul");
const mainImg = mainListItems.querySelector(".img-container img");
const mainHeadings = mainListItems.querySelectorAll("p");

// Function to change the main content
function changeMainContent(index) {
  // Get the selected sub list item details
  const selectedItem = subListItems[index];
  const selectedImg = selectedItem.querySelector("img").src;
  const selectedDetails =
    selectedItem.querySelector(".sub-ul-details").innerHTML;

  // Save old data
  const oldImg = mainImg.src;
  const oldDetails = Array.from(mainHeadings)
    .map((p) => p.innerHTML)
    .join("");

  // Update main content
  mainImg.src = selectedImg;

  // Update headings in the main list
  const mainTexts = selectedDetails.split("</p>");
  mainHeadings[0].innerHTML = mainTexts[0] + "</p>"; // Update sub-head
  mainHeadings[1].innerHTML = mainTexts[1] + "</p>"; // Update head
  mainHeadings[2].innerHTML = mainTexts[2] + "</p>"; // Update content

  // Move old data to sub list
  const newSubItem = document.createElement("li");
  newSubItem.innerHTML = `
    <img src="${oldImg}" alt="" />
    <div class="sub-ul-details">
      ${oldDetails}
    </div>
  `;

  const subUl = document.querySelector(".sub-ul");
  subUl.appendChild(newSubItem);
}

// Attach click event listeners to each sub list item
subListItems.forEach((item, index) => {
  item.addEventListener("click", () => changeMainContent(index));
});

jQuery(document).ready(function ($) {
  $(document).ready(function () {
    $(".slider").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: false,
      dots: false,
      // Add more settings as needed
    });
  });
});
