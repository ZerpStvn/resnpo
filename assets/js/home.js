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

// END: GOOGLE MAP LOCATION NAV TAB
