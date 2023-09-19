
var swiper = new Swiper(".best-cities", {
    slidesPerView:4,
    spaceBetween: 20,
     autoplay: {
      delay: 20000000,
      disableOnInteraction: false,
    },

    navigation: {
      nextEl: ".moving-arrow-l",
      prevEl: " .moving-arrow-r",
    },

   
  });