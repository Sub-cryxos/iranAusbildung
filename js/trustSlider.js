const windowWidthd = window.innerWidth;  

if (windowWidthd <= 1990) {
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4.7,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    }, autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".moving-arrow-r",
      prevEl: ".moving-arrow-l ",
    },
  });
}

if (windowWidthd <= 1285) {
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4.2,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    }, autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".moving-arrow-r",
      prevEl: ".moving-arrow-l ",
    },
  });
}

if (windowWidthd <= 1000) {
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4.2,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    }, autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".moving-arrow-r",
      prevEl: ".moving-arrow-l ",
    },
  });

}
if (windowWidthd <= 512) {
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 2.06,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    }, autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
  });

  console.log('done first')
}

// ths slider best ausbildungs 
if (windowWidthd <= 600) {

  var swiper = new Swiper(".best_ausbildungs", {
    slidesPerView: 1.17,
    spaceBetween: 20,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },

    navigation: {
      nextEl: ".arrow_down_comments",
      prevEl: " .arrow_up_comments",
    },


  });

} else {
  var swiper = new Swiper(".best_ausbildungs", {
    slidesPerView: 2.2,
    spaceBetween: 50,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },

    navigation: {
      nextEl: ".arrow_down_comments",
      prevEl: " .arrow_up_comments",
    },


  });

}
// ths slider of comment section

var swiperComment = new Swiper(".desktop-comments", {
  direction: "vertical",
  slidesPerView: 2,
  spaceBetween: 10,
  autoplay: {
    delay:2000,
    disableOnInteraction: false,
  },

  navigation: {
    nextEl: ".arrow_down_comments",
    prevEl: " .arrow_up_comments",
  },


});

var swiperM = new Swiper(".mobile-comments", {
  slidesPerView: 1,
  spaceBetween: 20,

  navigation: {
    nextEl: " .moving-comment-arrow-r",
    prevEl: " .moving-comment-arrow-l",
  },
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  }
});


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

if (windowWidthd > 1000 && windowWidth < 1301) {
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
