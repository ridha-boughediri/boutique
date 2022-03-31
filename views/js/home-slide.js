$(document).ready(function () {
  $(".home-carousel .slick-slider").slick({
    dots: true,
    infinite: true,
    draggable: true,
    autoplay: true,
    prevArrow:
      '<span class="slick-prev slick-arrow" aria-label="Previous"></span>',
    nextArrow: '<span class="slick-next slick-arrow" aria-label="Next"></span>',
    speed: 200,
    slidesToShow: 1,
    slidesToScroll: 1,
  });

  $(".slick-dots li button").empty();
});
