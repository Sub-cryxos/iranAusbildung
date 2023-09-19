
const windowWidth = window.innerWidth;

if (windowWidth <= 460) {

  var swiper = new Swiper(".best-cities", {
    slidesPerView: 2.1,
    spaceBetween: 10,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },

    navigation: {
      nextEl: ".moving-arrow-l",
      prevEl: " .moving-arrow-r",
    },


  });

}

if (windowWidth <= 1000) {

  var swiper = new Swiper(".best-cities", {
    slidesPerView: 2,
    spaceBetween: 10,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },

    navigation: {
      nextEl: ".moving-arrow-l",
      prevEl: " .moving-arrow-r",
    },


  });

}
else {

  var swiper = new Swiper(".best-cities", {
    slidesPerView: 4,
    spaceBetween: 10,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },

    navigation: {
      nextEl: ".moving-arrow-l",
      prevEl: " .moving-arrow-r",
    },


  });

}



