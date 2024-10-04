let $ = jQuery.noConflict();
$(window).on("hashchange", function () {
  $("div.tab").hide();
  $(location.hash).fadeIn("slow");
});

$("a.hash").on("click", function (e) {
  e.preventDefault();
  location.hash = $(this).data("hash");
});

// Highlight link when it's Active

$(".hash").on("click", function () {
  var activeLink = $(".map-link-active");
  activeLink.removeClass("map-link-active");
  $(this).parent().addClass("map-link-active");
});

$("a.hash-donation").on("click", function (e) {
  e.preventDefault();
  location.hash = $(this).data("hash");
});
// END: GOOGLE MAP LOCATION NAV TAB

// Higlight link when it's Active Donations Page

$(".hash-donation").on("click", function (e) {
  e.preventDefault(); // Prevent the default behavior of the anchor tag

  // Remove active class from all buttons
  $(".donation-link-active").removeClass("donation-link-active");

  // Add active class to the clicked button's parent div
  $(this).parent().addClass("donation-link-active");

  // Reset background color for all buttons
  $("button").css({ "background-color": "", color: "#8c8c8c" });

  // Get the data-hash attribute value
  var hash = $(this).data("hash");

  // Change the background color based on the data-hash value
  if (hash === "A") {
    $(this)
      .find("button")
      .css({ "background-color": "#53B9B5", color: "#ffffff" });
  } else if (hash === "B") {
    $(this)
      .find("button")
      .css({ "background-color": "#FFBB54", color: "#ffffff" });
  } else if (hash === "C") {
    $(this)
      .find("button")
      .css({ "background-color": "#56C3E6", color: "#ffffff" });
  }
});
