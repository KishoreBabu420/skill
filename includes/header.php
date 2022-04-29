<!DOCTYPE html>
<html>
<?php 
			if($description==""){
					$description = 'Skill Safari';
			}
			$url = 'https://www.skillsafari.in';
			$customCSS =  $url . '/css/style.css';
			$bootstrapCSS = $url . '/css/bootstrap.min.css';
			$owlCarouselCSS = $url . '/css/owl.carousel.css';
			$owlThemeCSS = $url . '/css/owl.theme.default.min.css';
    ?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" itemprop="keywords" content="<?php echo $keywords; ?>" />
  <meta name="description" itemprop="description" content="<?php echo $description; ?>">
  <meta name="robots" content="index, follow">
  <title><?php echo $title; ?></title>
  <link rel="icon" type="image/png"
    href="https://res.cloudinary.com/skill-safari/image/upload/v1632810869/website/ssfavicon_vspiah.png">
  <link rel="stylesheet" type="text/css" href="<?php echo $customCSS; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo $bootstrapCSS; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo $owlCarouselCSS; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo $owlThemeCSS; ?>">
  <script src="https://kit.fontawesome.com/7096014502.js" crossorigin="anonymous"></script>
  <script>
  (function(w, d, s, c, r, a, m) {
    w['KiwiObject'] = r;
    w[r] = w[r] || function() {
      (w[r].q = w[r].q || []).push(arguments)
    };
    w[r].l = 1 * new Date();
    a = d.createElement(s);
    m = d.getElementsByTagName(s)[0];
    a.async = 1;
    a.src = c;
    m.parentNode.insertBefore(a, m)
  })(window, document, 'script', "https://app.interakt.ai/kiwi-sdk/kiwi-sdk-17-prod-min.js?v=" + new Date().getTime(),
    'kiwi');
  window.onload = function() {
    kiwi.init('', 'K9PNNCjPcfU6zCMtU7GWg5EISqOr6FT0', {});
  }
  </script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-XS84CYLEYF"></script>
  <script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-XS84CYLEYF');
  </script>

  <!-- Meta Pixel Code -->
  <script>
  ! function(f, b, e, v, n, t, s) {
    if (f.fbq) return;
    n = f.fbq = function() {
      n.callMethod ?
        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    };
    if (!f._fbq) f._fbq = n;
    n.push = n;
    n.loaded = !0;
    n.version = '2.0';
    n.queue = [];
    t = b.createElement(e);
    t.async = !0;
    t.src = v;
    s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s)
  }(window, document, 'script',
    'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '190087729661951');
  fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=190087729661951&ev=PageView&noscript=1" /></noscript>
  <!-- End Meta Pixel Code -->
</head>

<body>
  <!-- Header section started -->
  <header class="bg-header nav-down shadow w-100 bg-white">
    <div class="container">
      <div class="row align-items-center pt-3 pb-3">
        <div class="col-md-3 d-none d-md-block">
          <a href="/">
            <img src="https://res.cloudinary.com/skill-safari/image/upload/v1650535621/website/logo-black_rxyr58.png"
              class="img-fluid" alt="" title="">
          </a>
        </div>
        <div class="col-lg-6 col-md-9">
          <nav class="navbar navbar-expand-md navbar-light">
            <div class="container-fluid">
              <a class="navbar-brand d-block d-md-none" href="/">
                <img
                  src="https://res.cloudinary.com/skill-safari/image/upload/v1650535621/website/logo-black_rxyr58.png"
                  class="img-fluid" alt="" title="">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  mb-lg-0 m-auto">
                  <li class="nav-item">
                    <a class="nav-link <?php if($page==1) echo 'active';  ?>" aria-current="page"
                      href="https://www.skillsafari.in/fullstack-web-developer/">Full
                      Stack Developer</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?php if($page==2) echo 'active';  ?>" aria-current="page"
                      href="https://www.skillsafari.in/hire-from-us">Hire from
                      us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://blog.skillsafari.in/" target="_blank">Blog</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php if($page==9) echo 'active';  ?>" href=""
                      id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Events
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="https://skillsafari.in/events/build-a-nodejs-quiz-application">
                          <span class="img-sec me-3">
                            <i class="fas fa-code"></i>
                          </span>
                          Quiz Application
                        </a>
                      </li>
                      <li><a class="dropdown-item"
                          href="https://skillsafari.in/events/know-about-industry-trends-and-recruitment-patterns">
                          <span class="img-sec me-3">
                            <i class="fas fa-chart-line"></i>
                          </span>
                          Recruitment Trends
                        </a>
                      </li>
                      <li><a class="dropdown-item"
                          href="https://skillsafari.in/events/how-to-get-recruited-in-top-product-based-companies">
                          <span class="img-sec me-3">
                            <i class="fas fa-chart-line"></i>
                          </span>
                          Product Companies
                        </a>
                      </li>
                    </ul>
                  </li>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
    </div>
  </header>
  <!-- Header section ended -->