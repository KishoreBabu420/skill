//OWL Carousel
$('#owl-demo').owlCarousel({
  loop: true,
  nav: true,
  dots: true,
  autoplayTimeout: 8000,
  autoplay: false,
  responsive: {
    0: {
      items: 1,
    },
    576: {
      items: 1,
    },
    768: {
      items: 1,
    },
    992: {
      items: 1,
    },
    1030: {
      items: 1,
    },
  },
});

$('#owl-demo-mob').owlCarousel({
  loop: true,
  nav: true,
  dots: true,
  autoplayTimeout: 8000,
  autoplay: true,
  responsive: {
    0: {
      items: 1,
    },
    576: {
      items: 1,
    },
    768: {
      items: 2,
    },
    992: {
      items: 3,
    },
    1030: {
      items: 3,
    },
  },
});
$('#owl-demo-mobnew').owlCarousel({
  loop: true,
  nav: true,
  dots: true,
  autoplayTimeout: 8000,
  autoplay: true,
  responsive: {
    0: {
      items: 1,
    },
    576: {
      items: 1,
    },
    768: {
      items: 1,
    },
    992: {
      items: 1,
    },
    1030: {
      items: 1,
    },
  },
});
$('#owl-bannerslider').owlCarousel({
  loop: true,
  nav: true,
  dots: true,
  autoplayTimeout: 8000,
  autoplay: true,
  responsive: {
    0: {
      items: 1,
    },
    576: {
      items: 1,
    },
    768: {
      items: 1,
    },
    992: {
      items: 1,
    },
    1030: {
      items: 1,
    },
  },
});

$('#owl-events').owlCarousel({
  loop: true,
  nav: true,
  dots: true,
  autoplayTimeout: 8000,
  autoplay: true,
  responsive: {
    0: {
      items: 1,
    },
    576: {
      items: 1,
    },
    768: {
      items: 2,
    },
    992: {
      items: 2,
    },
    1030: {
      items: 3,
    },
  },
});

$('#owl-recurit').owlCarousel({
  loop: true,
  nav: true,
  dots: true,
  autoplayTimeout: 8000,
  autoplay: true,
  responsive: {
    0: {
      items: 1,
    },
    576: {
      items: 1,
    },
    768: {
      items: 1,
    },
    992: {
      items: 1,
    },
    1030: {
      items: 1,
    },
  },
});

//Timer Code

if (document.getElementById('days')) {
  const second = 1000,
    minute = second * 60,
    hour = minute * 60,
    day = hour * 24;

  let countDown = new Date('Dec 3, 2022 00:00:00').getTime(),
    x = setInterval(function () {
      let now = new Date().getTime(),
        distance = countDown - now;

      (document.getElementById('days').innerText = Math.floor(distance / day)),
        (document.getElementById('hours').innerText = Math.floor(
          (distance % day) / hour,
        )),
        (document.getElementById('minutes').innerText = Math.floor(
          (distance % hour) / minute,
        )),
        (document.getElementById('seconds').innerText = Math.floor(
          (distance % minute) / second,
        ));
    }, second);
}

//Scroll Code

// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();

$(window).scroll(function (event) {
  didScroll = true;
});

setInterval(function () {
  if (didScroll) {
    hasScrolled();
    didScroll = false;
  }
}, 250);

function hasScrolled() {
  var st = $(this).scrollTop();

  // Make sure they scroll more than delta
  if (Math.abs(lastScrollTop - st) <= delta) return;

  // If they scrolled down and are past the navbar, add class .nav-up.
  // This is necessary so you never see what is "behind" the navbar.
  if (st > lastScrollTop && st > navbarHeight) {
    // Scroll Down
    $('header').removeClass('nav-down').addClass('nav-up');
  } else {
    // Scroll Up
    if (st + $(window).height() < $(document).height()) {
      $('header').removeClass('nav-up').addClass('nav-down');
    }
  }

  lastScrollTop = st;
}

//Spacing Code

$('a[href="#cd"]').click(function () {
  $('#cd').css('padding-top', '100px');
});

$('a[href="#why"]').click(function () {
  $('#why').css('padding-top', '100px');
});

$('a[href="#criteria"]').click(function () {
  $('#criteria').css('padding-top', '100px');
});

$('a[href="#curriculum"]').click(function () {
  $('#curriculum').css('padding-top', '100px');
});

$('a[href="#pricing"]').click(function () {
  $('#pricing').css('padding-top', '100px');
});

//Home TYpe OBL,
let typed = new Typed('.obl-principles', {
  strings: [
    'Learn and Earn Community',
    'Collaborative Learning',
    'Real-Time Learning',
    'Accountability',
    'Goal-Based Learning',
    'Build Networking',
  ],
  typeSpeed: 200,
  backSpeed: 200,
  loop: true,
});
