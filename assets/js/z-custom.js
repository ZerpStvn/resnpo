jQuery.noConflict();

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
  jQuery("button").css({ "background-color": "", color: "#8c8c8c" });

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
