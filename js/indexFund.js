
$(document).ready(function () {
    $('.save-btn').click((e) => {
      $(e.target).toggleClass('saved-ausbildung');
      
    });

      $('.login-modal-footer strong').click(function (e) { 
        $('.login-modal-content').removeClass('active-form-login');
        $('.login-sign-content').addClass('active-form-login');

      });

      $('.signin-modal-footer strong').click(function (e) { 
        $('.login-sign-content').removeClass('active-form-login');
        $('.login-modal-content').addClass('active-form-login');

      });
  });   