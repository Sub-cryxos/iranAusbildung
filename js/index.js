
const windowWidth = window.innerWidth;
if (windowWidth <= 612) {
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1.5,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    }, autoplay: {
      delay: 1000,
      disableOnInteraction: false,
    },
  });
} else {
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 6,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    }, autoplay: {
      delay: 1000,
      disableOnInteraction: false,
    },
  });

}
// ths slider best ausbildungs 
if (windowWidth <= 600) {

  var swiper = new Swiper(".best_ausbildungs", {
    slidesPerView: 1.08,
    spaceBetween: 20,
    autoplay: {
      delay: 100000,
      disableOnInteraction: false,
    },

    navigation: {
      nextEl: ".arrow_down_comments",
      prevEl: " .arrow_up_comments",
    },


  });

} else {
  var swiper = new Swiper(".best_ausbildungs", {
    slidesPerView: 2,
    spaceBetween: 50,
    autoplay: {
      delay: 100000,
      disableOnInteraction: false,
    },

    navigation: {
      nextEl: ".arrow_down_comments",
      prevEl: " .arrow_up_comments",
    },


  });

}
// ths slider of comment section

  var swiperComment = new Swiper(".comments_section", {
    direction: "vertical",
    slidesPerView: 2,
    spaceBetween: 20,
    autoplay: {
      delay: 1000,
      disableOnInteraction: false,
    },

    navigation: {
      nextEl: ".arrow_down_comments",
      prevEl: " .arrow_up_comments",
    },


  });

  
  var swiperM = new Swiper(".m-comment", {
    slidesPerView: 2,
    spaceBetween: 20,
    autoplay: {
      delay: 1000,
      disableOnInteraction: false,
    }

  });



