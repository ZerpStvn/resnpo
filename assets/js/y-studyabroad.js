let $ = jQuery.noConflict();

$(document).ready(function () {
  $(".impressions-slider").slick({
    centerMode: true,
    centerPadding: "60px",
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
    dots: true,
    arrows: true,
    // pauseOnHover: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: "40px",
          slidesToShow: 1,
        },
      },
    ],
  });
});
