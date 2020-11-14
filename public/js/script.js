// On Load Modal Show JS
$(window).load(function () {
  $('#onLoadModal').modal('show');
});

// var leftSideBar = document.querySelector('.post-left');

// leftSideBar.addEventListener('onmouseover', function () {
//   document.querySelector('#mySidebar').classList.toggle(".show");
// });

$(document).ready(function () {
  $('.mySidebar-toggoler').click(
    function () {
      $('#mySidebar').toggleClass('show');
      $('.mySideBar-close-btn').toggleClass('mySideBar-close-btn-visible');
    },
    function () {
      $('#mySidebar').toggleClass('show');
      $('.mySideBar-close-btn').toggleClass('mySideBar-close-btn-visible');
    }
  );
});

$(document).ready(function () {
  $('.mySideBar-close-btn i').click(
    function () {
      $('#mySidebar').removeClass('show');
      $('.mySideBar-close-btn').removeClass('mySideBar-close-btn-visible');
    },
    function () {
      $('#mySidebar').removeClass('show');
      $('.mySideBar-close-btn').removeClass('mySideBar-close-btn-visible');
    }
  );
});

document.addEventListener('click', function () {
  $('.mySideBar-close-btn').removeClass('mySideBar-close-btn-visible');
});

// $(document).ready(function () {
//   $('.right-menu .menu-pic').hover(
//     function () {
//       for (
//         var i = 0;
//         i, document.querySelectorAll('.menu-pic-notification').length;
//         i++
//       ) {
//         document
//           .querySelectorAll('.menu-pic-notification')
//           [i].toggleClass('menu-pic-notification-hover');
//       }

//       $('.menu-pic-notification').toggleClass('menu-pic-notification-hover');
//     },
//     function () {
//       for (
//         var i = 0;
//         i, document.querySelectorAll('.menu-pic-notification').length;
//         i++
//       ) {
//         document
//           .querySelectorAll('.menu-pic-notification')
//           [i].toggleClass('menu-pic-notification-hover');
//       }

//       $('.menu-pic-notification').toggleClass('menu-pic-notification-hover');
//     }
//   );
// });

$(document).ready(function () {
  /*===Left Menu JS===*/
  $(function () {
    // TOGGLE CLASS ON ELEMENT
    $('.mySidebar-toggoler, .left-menu-closebtn').on(
      'onmouseover',
      function () {
        $('#mySidebar').toggleClass('show');
      }
    );
  });
  // Left Menu REMOVE CLASS WHEN YOU CLICK, EXCLUDE ELEMENTS
  $(function () {
    // elements to ignore
    var ignore = Array('.left-menu', '#mySidebar', '.left-menu-closebtn');
    ignore.forEach(function (item) {
      // loop through ignore array
      $(item).click(function () {
        return false;
      }); // ignore item
    });
    // remove class when you click anywhere else
    $(document).on('click', function () {
      $('#mySidebar').removeClass('show');
    });
  });

  /*===Create Tab JS===*/
  $(function () {
    // TOGGLE CLASS ON ELEMENT
    $('.create-tab').on('click', function () {
      $('.create-container').toggleClass('active');
    });
  });
  // Create Tab REMOVE CLASS WHEN YOU CLICK, EXCLUDE ELEMENTS
  $(function () {
    // elements to ignore
    var ignore = Array('.create-tab');
    ignore.forEach(function (item) {
      // loop through ignore array
      $(item).click(function () {
        return false;
      }); // ignore item
    });
    // remove class when you click anywhere else
    $(document).on('click', function () {
      $('.create-container').removeClass('active');
    });
  });

  /*===Right Menu JS===*/
  // $(function () {
  //   // TOGGLE CLASS ON ELEMENT
  //   $('.right-menu, .right-menu-closebtn').on('click', function () {
  //     $('#mySidebar1').toggleClass('show');
  //   });
  // });
  // Right Menu REMOVE CLASS WHEN YOU CLICK, EXCLUDE ELEMENTS
  $(function () {
    // elements to ignore
    var ignore = Array(
      '.right-menu',
      '#mySidebar1',
      '.right-menu-closebtn',
      '.messenger-chat'
    );
    ignore.forEach(function (item) {
      // loop through ignore array
      $(item).click(function () {
        // return false;
      }); // ignore item
    });
    // remove class when you click anywhere else
    $(document).on('click', function () {
      $('#mySidebar1').removeClass('show');
    });
  });

  /*===Off Canvas Toggoler JS===*/
  $(function () {
    // TOGGLE CLASS ON ELEMENT
    $('.off-canvas-toggoler').on('click', function () {
      $('.off-canvas-sidebar').toggleClass('show');
    });
  });
  // Off Canvas REMOVE CLASS WHEN YOU CLICK, EXCLUDE ELEMENTS
  $(function () {
    // elements to ignore
    var ignore = Array('.off-canvas-toggoler', '.off-canvas-sidebar');
    ignore.forEach(function (item) {
      // loop through ignore array
      $(item).click(function () {
        return false;
      }); // ignore item
    });
    // remove class when you click anywhere else
    $(document).on('click', function () {
      $('.off-canvas-sidebar').removeClass('show');
    });
  });

  /*===Contact list Show JS===*/
  $(function () {
    // TOGGLE CLASS ON ELEMENT
    $('.contact-list-toggoler').on('click', function () {
      $('.contact-list-container').toggleClass('show');
      $(this).toggleClass('close');
    });
  });
  // Contact list REMOVE CLASS WHEN YOU CLICK, EXCLUDE ELEMENTS
  $(function () {
    // elements to ignore
    var ignore = Array('.contact-list-container', '.contact-list-toggoler');
    ignore.forEach(function (item) {
      // loop through ignore array
      $(item).click(function () {
        return false;
      }); // ignore item
    });
    // remove class when you click anywhere else
    $(document).on('click', function () {
      $('.contact-list-container').removeClass('show');
      $('.contact-list-toggoler').removeClass('close');
    });
  });

  /*===Messenger Show JS===*/
  $(function () {
    // Add CLASS ON ELEMENT
    // $('.contact-list-items').on('click', function () {
    //   $('.messenger-chat').addClass('show-messenger');
    //   $('.contact-list-container').removeClass('show');
    //   $('.contact-list-toggoler').removeClass('close');
    // });
    // Add CLASS ON ELEMENT
    $('.mini-messenger-toggoler').on('click', function () {
      $('.mini-messenger-container').addClass('show');
      $('.messenger-chat').removeClass('show-messenger');
    });
    // Remove CLASS ON ELEMENT
    $('.close-messenger').on('click', function () {
      $('.messenger-chat').removeClass('show-messenger');
    });
    $('.close-btn').on('click', function () {
      $('.mini-messenger-container').removeClass('show');
    });
    $('.mini-messenger-content').on('click', function () {
      $('.messenger-chat').addClass('show-messenger');
      $('.mini-messenger-container').removeClass('show');
    });
  });

  /*===Story Card Toggoler JS===*/
  $(function () {
    $('.story-card-toggoler').on('click', function () {
      $('.switch').toggleClass('active');
      $('.story-card').toggleClass('show');
    });
    $('.story-card-toggoler').on('click', function () {
      $('.toggle-text').html(
        $('.toggle-text').html() == 'Show' ? 'Hide' : 'Show'
      );
    });
  });
});
//Story Slider
$('.story-card .card-body').slick({
  dots: false,
  speed: 500,
  infinite: true,
  slidesToShow: 5,
  slidesToScroll: 1,
  adaptiveHeight: true,
  autoplay: true,
  autoplaySpeed: 2000,
  prevArrow: '<i class="fas fa-chevron-left show-slider-left"></i>',
  nextArrow: '<i class="fas fa-chevron-right show-slider-right"></i>',
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
      },
    },
  ],
});

//Moments Slider
$('.news-card .moments-slider').slick({
  dots: false,
  speed: 800,
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  adaptiveHeight: true,
  autoplay: true,
  autoplaySpeed: 2000,
  prevArrow: '<i class="fas fa-chevron-left show-slider-left"></i>',
  nextArrow: '<i class="fas fa-chevron-right show-slider-right"></i>',
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 5,
      },
    },
    {
      breakpoint: 667,
      settings: {
        slidesToShow: 3,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
      },
    },
  ],
});

//Video Show Slider
$('.video-show-slider').slick({
  dots: false,
  speed: 700,
  infinite: true,
  slidesToShow: 5,
  slidesToScroll: 1,
  adaptiveHeight: true,
  autoplay: true,
  autoplaySpeed: 1000,
  prevArrow: '<i class="fas fa-chevron-left show-slider-left"></i>',
  nextArrow: '<i class="fas fa-chevron-right show-slider-right"></i>',
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 4,
      },
    },
    {
      breakpoint: 667,
      settings: {
        slidesToShow: 3,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
      },
    },
  ],
});

//Gallery Video Slider
$('.gallery-slider').slick({
  dots: false,
  speed: 600,
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  adaptiveHeight: true,
  autoplay: true,
  autoplaySpeed: 900,
  prevArrow: '<i class="fas fa-chevron-left show-slider-left"></i>',
  nextArrow: '<i class="fas fa-chevron-right show-slider-right"></i>',
  responsive: [
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 500,
      settings: {
        slidesToShow: 1,
      },
    },
  ],
});

//Moments Slider-2
$('.moments-slider-2').slick({
  dots: false,
  speed: 900,
  infinite: true,
  slidesToShow: 5,
  slidesToScroll: 1,
  adaptiveHeight: true,
  autoplay: true,
  autoplaySpeed: 1500,
  arrows: false,
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 4,
      },
    },
    {
      breakpoint: 667,
      settings: {
        slidesToShow: 3,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
      },
    },
  ],
});

//Video Banner Slider
$('.video-banner-slider').slick({
  dots: false,
  speed: 500,
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  adaptiveHeight: true,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: false,
});

// sticky create post market post back to top

window.onscroll = function () {
  myFunction();
};

var header = document.querySelector('.create-modify');
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add('sticky');
  } else {
    header.classList.remove('sticky');
  }
}

// application center view more button
var viewMoreBtn = document.querySelector('.view-more-btn');
viewMoreBtn.addEventListener('click', function () {
  for (var i = 0; i < document.querySelectorAll('.item-to-hide').length; i++) {
    document
      .querySelectorAll('.item-to-hide')
      [i].classList.toggle('hidden-about-list');
  }
  document.querySelector('.view-more-img').classList.toggle('rotate-full');
  var viewMoreText = document.querySelector('.view-more-text');
  if (viewMoreText.textContent === 'View More') {
    viewMoreText.textContent = 'View Less';
  } else if (viewMoreText.textContent === 'View Less') {
    viewMoreText.textContent = 'View More';
  }
});

// rating stars

$(document).ready(function () {
  $('.ratings-on-hover i').hover(
    function () {
      $('.ratings-on-hover i').toggleClass('far');
      $('.ratings-on-hover i').toggleClass('fas');
    },
    function () {
      $('.ratings-on-hover i').toggleClass('far');
      $('.ratings-on-hover i').toggleClass('fas');
    }
  );
});

// show moments when clicked

$(document).ready(function () {
  $('.open-moments').click(
    function () {
      $('.story-card-toggoler .rounded-pill').toggleClass('active');
      $('.big-moments-div').toggleClass('show');
      $('.open-moments img').toggleClass('rotate-moment-icon');
    },
    function () {
      $('.story-card-toggoler .rounded-pill').toggleClass('active');
      $('.big-moments-div').toggleClass('show');
      $('.open-moments img').toggleClass('rotate-moment-icon');
    }
  );
});

// right menu hide on click

$(document).ready(function () {
  $('.side-bar-reopen').click(
    function () {
      $('.right-menu-to-hide').toggleClass('right-menu-hidden');
      $('.side-bar-reopen').toggleClass('side-bar-reopen-rotate-full');
    },
    function () {
      $('.right-menu-to-hide').toggleClass('right-menu-hidden');
      $('.side-bar-reopen').toggleClass('side-bar-reopen-rotate-full');
    }
  );
});

// show close notification on hover

$(document).ready(function () {
  $('.side-bar-reopen').hover(
    function () {
      $('.side-bar-reopen-hint').toggleClass('reopen-hint-hover');
    },
    function () {
      $('.side-bar-reopen-hint').toggleClass('reopen-hint-hover');
    }
  );
});

// my profile and profile settings on hover

$(document).ready(function () {
  $('.profile-dropdown-toggler').click(
    function () {
      $('.profile-dropdown').toggleClass('profile-dropdown-show');
    },
    function () {
      $('.profile-dropdown').toggleClass('profile-dropdown-show');
    }
  );
});

// change notification icon pic on hover

let notificationIcons = document.querySelectorAll(
  '.notification-icons .nav-item .nav-link'
);
for (let i = 0; i < notificationIcons.length; i++) {
  notificationIcons[i].addEventListener('mouseover', function () {
    document.querySelectorAll('.top-notification-pic')[i].style.display =
      'none';
    document.querySelectorAll('.top-notification-pic-hover')[i].style.display =
      'inline-block';
  });
  notificationIcons[i].addEventListener('mouseout', function () {
    document.querySelectorAll('.top-notification-pic')[i].style.display =
      'inline-block';
    document.querySelectorAll('.top-notification-pic-hover')[i].style.display =
      'none';
  });
}

// $(document).ready(function () {
//   $('.notification-icons .nav-item .nav-link').hover(
//     function () {
//       $('.notification-icons .nav-item .nav-link img:first-child').toggleClass(
//         'menu-img-to-hide'
//       );
//       $('.notification-icons .nav-item .nav-link img:last-child').toggleClass(
//         'menu-img-to-hide'
//       );
//     },
//     function () {
//       $('.notification-icons .nav-item .nav-link img:first-child').toggleClass(
//         'menu-img-to-hide'
//       );
//       $('.notification-icons .nav-item .nav-link img:last-child').toggleClass(
//         'menu-img-to-hide'
//       );
//     }
//   );
// });



// let navbarImage = document.querySelector('.nav-logo-text');

// navbarImage.addEventListener('mouseover', function () {
//   navbarImage.setAttribute('src', './images/Fyre 02.svg');
// });

// navbarImage.addEventListener('mouseout', function () {
//   navbarImage.setAttribute('src', './images/Fyre 02-before.svg');
// });

// change tool tip on click

const togglerSwitch = document.querySelector('.show-moments-toggler-switch');
const togglerSwitchTip = document.querySelector('.toggle-tip');

togglerSwitch.addEventListener('click', function () {
  if (togglerSwitchTip.textContent === 'Show Moments') {
    togglerSwitchTip.textContent = 'Close Moments';
  } else if (togglerSwitchTip.textContent === 'Close Moments') {
    togglerSwitchTip.textContent = 'Show Moments';
  }
});

$(document).on('click', '.dropdown-menu', function (e) {
  e.stopPropagation();
});
