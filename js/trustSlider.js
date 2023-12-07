const windowWidthd = window.innerWidth;  



// if (windowWidthd > 1301) {
//   var swiperTrust = new Swiper(".trust-section ", {
//     slidesPerView: 7.7,
//     spaceBetween: 10,
//     autoplay: {
//       delay: 2000,
//       disableOnInteraction: false,
//     },
//   });
// }

// if (windowWidthd > 1000 && windowWidthd < 1301) {
//   var swiperTrust = new Swiper(".trust-section ", {
//     slidesPerView: 5.7,
//     spaceBetween: 10,
//     autoplay: {
//       delay: 2000,
//       disableOnInteraction: false,
//     },

//   });

// }

// if (windowWidthd < 550) {
//   var swiperTrust = new Swiper(".trust-section ", {
//     slidesPerView: 2.4,
//     spaceBetween: 3,
//     autoplay: {
//       delay: 2000,
//       disableOnInteraction: false,
//     },

//   });
// }
// // ths slider of comment section

// var swiperComment = new Swiper(".desktop-comments", {
//   direction: "vertical",
//   slidesPerView: 2,
//   spaceBetween: 10,
//   autoplay: {
//     delay:2000,
//     disableOnInteraction: false,
//   },

//   navigation: {
//     nextEl: ".arrow_down_comments",
//     prevEl: " .arrow_up_comments",
//   },


// });

// var swiperM = new Swiper(".mobile-comments", {
//   slidesPerView: 1,
//   spaceBetween: 20,

//   navigation: {
//     nextEl: " .moving-comment-arrow-r",
//     prevEl: " .moving-comment-arrow-l",
//   },
//   autoplay: {
//     delay: 2000,
//     disableOnInteraction: false,
//   }
// });


// the trust logo slider 

if (windowWidthd > 1301) {
  var swiperTrust = new Swiper(".trust-section ", {
    slidesPerView: 7.7,
    spaceBetween: 10,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
  });
}

if (windowWidthd > 1000 && windowWidthd < 1301) {
  var swiperTrust = new Swiper(".trust-section ", {
    slidesPerView: 5.7,
    spaceBetween: 10,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },

  });

}

if (windowWidthd < 550) {
  var swiperTrust = new Swiper(".trust-section ", {
    slidesPerView: 2.4,
    spaceBetween: 3,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },

  });
}

