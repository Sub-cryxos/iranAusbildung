
const windowWidth = window.innerWidth;



if (windowWidth <= 612) {
  
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1.11,
    spaceBetween: 0,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    }, autoplay: {
      delay: 1000,
      disableOnInteraction: false,
    },
  });
}   

else {

  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
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

if (windowWidth <= 612) {
  var swiper = new Swiper(".best_ausbildungs", {
    slidesPerView:1.000001,
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
}
else {
  var swiper = new Swiper(".best_ausbildungs", {
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
}



// ths slider of comment section


if (windowWidth <= 612) {
  var swiper = new Swiper(".comments_section", {
    direction: "vertical",
    slidesPerView: 1.01,
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
}
else {

  var swiper = new Swiper(".comments_section", {
    direction: "vertical",
    slidesPerView: 2,
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

}


