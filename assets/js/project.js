(function (jquery) {
  jquery(function () {
    jquery(".marquee-item-list, ").slick({
      dots: false,
      arrows: false,
      infinite: true,
      slidesToShow: 9,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 0,
      speed: 1000, // Increased speed
      cssEase: "linear",
      responsive: [
        {
          breakpoint: 680,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
            speed: 3000,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            speed: 3000,
          },
        },
      ],
    });
    // jquery(".scroll-content").slick({
    //   dots: false,
    //   arrows: false,
    //   infinite: true,
    //   vertical: true,
    //   slidesToShow: 3,
    //   slidesToScroll: 1,
    //   autoplay: true,
    //   autoplaySpeed: 2000,
    //   speed: 1000,
    //   cssEase: "linear",
    //   responsive: [
    //     {
    //       breakpoint: 680,
    //       settings: {
    //         slidesToShow: 2,
    //         slidesToScroll: 1,
    //         speed: 3000,
    //       },
    //     },
    //     {
    //       breakpoint: 480,
    //       settings: {
    //         slidesToShow: 1,
    //         slidesToScroll: 1,
    //         speed: 3000,
    //       },
    //     },
    //   ],
    // });
  });
})(jQuery);
