
const windowWidth = window.innerWidth;

if (windowWidth <= 390) {

  var swiper = new Swiper(".best-cities", {
    slidesPerView: 2,
    spaceBetween: 1,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },

    navigation: {
      nextEl: ".moving-arrow-l",
      prevEl: " .moving-arrow-r",
    },


  });
  console.log('yes2')

}



if (windowWidth <= 460 && windowWidth > 399) {

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

  console.log('yes')
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


if (windowWidth <= 1490) {
  var swiper = new Swiper(".best-cities", {
    slidesPerView: 3.68,
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


if (windowWidth <= 5090) {
  var swiper = new Swiper(".best-cities", {
    slidesPerView: 4.25,

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



