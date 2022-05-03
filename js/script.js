//OWL Carousel
$('#owl-demo').owlCarousel({
  loop: true,
  nav: true,
  dots: true,
  autoplayTimeout: 10000,
  autoplay: false,
  autoplayHoverPause: true,
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
  autoplayHoverPause: true,
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
  dots: false,
  autoplayTimeout: 8000,
  autoplay: true,
  autoplayHoverPause: true,
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
  autoplayHoverPause: true,
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
  autoplayHoverPause: true,
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
  autoplayHoverPause: true,
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

$('#partner-carouselOne').owlCarousel({
  loop: true,
  nav: false,
  dots: false,
  autoplayTimeout: 2000,
  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 2,
    },
    576: {
      items: 3,
    },
    768: {
      items: 5,
    },
    992: {
      items: 6,
    },
    1030: {
      items: 8,
    },
  },
});

$('#partner-carouselTwo').owlCarousel({
  loop: true,
  nav: false,
  dots: false,
  autoplayTimeout: 2000,
  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 2,
    },
    576: {
      items: 3,
    },
    768: {
      items: 5,
    },
    992: {
      items: 6,
    },
    1030: {
      items: 8,
    },
  },
});

$('#tech-carousel').owlCarousel({
  loop: true,
  nav: true,
  navText: [
    "<i class='fa-regular fa-circle-arrow-left'></i>",
    "<i class='fa-regular fa-circle-arrow-right'></i>",
  ],
  dots: false,
  autoplayTimeout: 2000,
  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1,
    },
    576: {
      items: 2,
    },
    768: {
      items: 3,
    },
    992: {
      items: 3,
    },
    1024: {
      items: 3,
    },
  },
});

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

$('#lead-form').parsley();
$('#popup-form').parsley();
$('#scroll-form').parsley();

var queryForm = function (settings) {
  var reset = settings && settings.reset ? settings.reset : false;
  var self = window.location.toString();
  var querystring = self.split('?');
  if (querystring.length > 1) {
    var pairs = querystring[1].split('&');
    for (i in pairs) {
      var keyval = pairs[i].split('=');
      if (reset || sessionStorage.getItem(keyval[0]) === null) {
        sessionStorage.setItem(keyval[0], decodeURIComponent(keyval[1]));
      }
    }
  }
  var hiddenFields = document.querySelectorAll(
    'input[type=hidden], input[type=text]',
  );
  for (var i = 0; i < hiddenFields.length; i++) {
    var param = sessionStorage.getItem(hiddenFields[i].name);
    if (param)
      document.getElementsByName(hiddenFields[i].name)[0].value = param;
  }
};

setTimeout(function () {
  queryForm({ reset: true });
}, 3000);

var stickyElement = new Sticksy('.sidebar');
// you can handle state changing
stickyEl.onStateChanged = function (state) {
  if (state === 'fixed') {
    stickyEl.nodeRef.classList.add('widget--sticky');
  } else {
    stickyEl.nodeRef.classList.remove('widget--sticky');
  }
};
