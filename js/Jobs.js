$(document).ready(function () {

       const langActive = $('.lang-active');
       $('.de-switch').click(function (e) {
              console.log(langActive)
              $(langActive).removeClass('lang-active');
              const availble = $('.de-switch').hasClass('lang-active');
              if (availble) {
                     $('.pr-switch').removeClass('lang-active');
                     $('.de-switch').removeClass('lang-active');
                     $('.letters-de').removeClass('letter-on')

              }
              else {
                     $('.pr-switch').removeClass('lang-active');
                     $('.de-switch').addClass('lang-active');
                     $('.letters-fa').removeClass('letter-on')
                     $('.letters-de').addClass('letter-on')

              }
       });

       $('.pr-switch').click(function (e) {
              $(langActive).removeClass('lang-active');
              const availble = $('.pr-switch').hasClass('lang-active');
              if (availble) {
                     $('.de-switch').removeClass('lang-active');
                     $('.pr-switch').removeClass('lang-active');
                     $('.letters-fa').removeClass('letter-on')

              }
              else {
                     $('.pr-switch').addClass('lang-active');
                     $('.de-switch').removeClass('lang-active');
                     $('.letters-fa').addClass('letter-on')
                     $('.letters-de').removeClass('letter-on')
              }
       });


       $('.letters-fa span').click((e) => {
              
              const activeLetter = $('.active-letter');
              const choosedOne = $('.choosed-letter')
              const target = e.target;
              $(activeLetter).removeClass('active-letter');
              $(target).addClass('active-letter');
              $(choosedOne).text(target.innerHTML);
       })


       $('.letters-de span').click((e) => {
              const activeLetter = $('.active-letter');
              const choosedOne = $('.choosed-letter')
              const target = e.target;

              $(activeLetter).removeClass('active-letter');
              $(target).addClass('active-letter');
              $(choosedOne).text(target.innerHTML);


       })

       $('.saved_post').click((e)=>{
              $(e.target).toggleClass('saved-ausbildung')
              console.log(e.target)
       });

       $('.sort').click(function (e) { 
              const active = $('.sort');
              const resualt =  $(active).hasClass('active_sort');

              if(resualt) {
                     $(active).removeClass('active_sort');
                     $(e.target).toggleClass('active_sort')

              }else {
                     $(e.target).toggleClass('active_sort')

              }
              
       });

});