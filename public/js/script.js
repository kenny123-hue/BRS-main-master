/**
 * WEBSITE: https://themefisher.com
 * TWITTER: https://twitter.com/themefisher
 * FACEBOOK: https://www.facebook.com/themefisher
 * GITHUB: https://github.com/themefisher/
 */

(function ($) {
  'use strict';

  // Sticky Menu
  $(window).scroll(function () {
    if ($('.navigation').offset().top > 100) {
      $('.navigation').addClass('nav-bg');
    } else {
      $('.navigation').removeClass('nav-bg');
    }
  });

  // team slider
  $('.team-slider').slick({
    dots: false,
    infinite: false,
    speed: 1000,
    autoplay: true,
    autoplaySpeed: 5000,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    prevArrow: '<button type=\'button\' class=\'prevArrow\'><i class=\'ti-arrow-left\'></i></button>',
    nextArrow: '<button type=\'button\' class=\'nextArrow\'><i class=\'ti-arrow-right\'></i></button>',
    responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  // clients logo slider
  $('.client-logo-slider').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    dots: false,
    arrows: false,
    responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 400,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  // about video popup
  $(document).ready(function () {
    $('.venobox').venobox();
  });

  // animation scroll js
  var html_body = $('html, body');
  $('.page-scroll').on('click', function () { //use page-scroll class in any HTML tag for scrolling
    if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        html_body.animate({
          scrollTop: target.offset().top - 50
        }, 1500, 'easeInOutExpo');
        return false;
      }
    }
  });

  // easeInOutExpo Declaration
  jQuery.extend(jQuery.easing, {
    easeInOutExpo: function (x, t, b, c, d) {
      if (t === 0) {
        return b;
      }
      if (t === d) {
        return b + c;
      }
      if ((t /= d / 2) < 1) {
        return c / 2 * Math.pow(2, 10 * (t - 1));
      } + b;
      return c / 2 * (-Math.pow(2, -10 * --t) + 2) + b;
    }
  });

})(jQuery);



/*
var nxt_btn = document.querySelectorAll(".next_button");
var prev_btn = document.querySelectorAll(".previous_button");
var submit_btn = document.querySelectorAll(".submit_button");
var main_form = document.querySelectorAll(".main");
var main_signin_form = document.querySelectorAll(".main_signin");
var sign_in_submit = document.querySelector(".signin_submit_button")
var progressbar = document.querySelectorAll(".steps li");
var steps = document.querySelector(".steps");
let forumnumber = 0;
nxt_btn.forEach(function (butn) {
  butn.addEventListener('click', function () {
    if (!validateform()) {
      return false;
    }
    forumnumber++;
    progress('color');
    update_form();
  });
});


prev_btn.forEach(function (prev_button) {
  prev_button.addEventListener('click', function () {
    forumnumber--;
    progress('nocolor');
    update_form();
  });
});

submit_btn.forEach(function (submit_button) {
  submit_button.addEventListener('click', function () {
    if (!validateform()) {
      return false;
    }
    var f_name = document.querySelector("#user_name");
    var shown_name = document.querySelector("#shown_name");
    shown_name.innerHTML = f_name.value;
    forumnumber++;
    update_form();
    steps.classList.add("d-none");
  });
});

let signinnumber = 0;
sign_in_submit.addEventListener('click', function () {
  if (!validateformsignin()) return false;
  signinnumber++;
  main_signin_form.forEach(function (main) {
    main.classList.remove("active");
  });
  var f_name = document.querySelector("#user_signin_name");
  var shown_name = document.querySelector("#shown_signin_name");
  shown_name.innerHTML = f_name.value;
  main_signin_form[signinnumber].classList.add("active");
});




function progress(state) {
  if (state == 'color') {
    progressbar[forumnumber].classList.add('li-active');
  } else {

    progressbar[forumnumber + 1].classList.remove('li-active');
  }

}


function update_form() {
  main_form.forEach(function (main) {
    main.classList.remove('active');
  });
  main_form[forumnumber].classList.add('active');
}

function validateform() {
  validate = true;
  var validate_inputs = document.querySelectorAll(".main.active input");
  validate_inputs.forEach(function (input_valid) {
    input_valid.classList.remove('warning');
    if (input_valid.hasAttribute('require')) {
      if (input_valid.value.length == 0) {
        validate = false;
        input_valid.classList.add('warning');
      }
    }
  });
  return validate;
}

function validateformsignin() {
  validate = true;
  var validate_inputs = document.querySelectorAll(".main_signin.active input");
  validate_inputs.forEach(function (input_valid) {
    input_valid.classList.remove('warning');
    if (input_valid.hasAttribute('require')) {
      if (input_valid.value.length == 0) {
        validate = false;
        input_valid.classList.add('warning');
      }
    }
  });
  return validate;
}


var signin_toggle = document.querySelector(".sign-in-up-toggle");
var s_form = document.querySelectorAll(".s_form");
var account = document.querySelectorAll(".account");
var right_image = document.querySelectorAll(".right_img");
signin_toggle.addEventListener('click', function () {

  s_form.forEach(function (form) {
    form.classList.toggle("d-none");
  });

  account.forEach(function (acc) {
    acc.classList.toggle("d-none");
  });

  right_image.forEach(function (ri_img) {
    ri_img.classList.toggle("d-none");
  });

  if (signin_toggle.innerHTML == "Sign in") {
    signin_toggle.innerHTML = "Sign up";
  }
  else {
    signin_toggle.innerHTML = "Sign in";
  }


});*/




var create_acc = document.querySelector(".create");
var inputs = document.querySelectorAll(".input_text input");
var tick = document.querySelector(".check");

create_acc.addEventListener('click', function () {

  inputs.forEach((e) => {
    e.classList.remove('warn');
    if (e.value.length < 1) {
      e.classList.add('warn');
    }

  });

});


inputs.forEach((e) => {

  e.addEventListener('keyup', function () {
    if (e.value.length < 1) {
      e.classList.add('warn');
    }
    else {
      e.classList.remove('warn');
    }
  });

});

tick.addEventListener('click', function () {
  tick.classList.toggle('blue_tick');
});