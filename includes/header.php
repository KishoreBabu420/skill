<!DOCTYPE html>
<html lang="en">
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
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" itemprop="keywords" content="<?php echo $keywords; ?>" />
  <meta name="description" itemprop="description" content="<?php echo $description; ?>">
  <meta name="robots" content="index, follow">
  <meta name="revisit-after" content="10 days">
  <meta name="author" content="Skill Safari">
  <title><?php echo $title; ?></title>

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo $webUrl; ?>">
  <meta property="og:title" content="<?php echo $title; ?>">
  <meta property="og:description" content="<?php echo $description; ?>">
  <meta property="og:image" content="<?php echo $image; ?>">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="<?php echo $webUrl; ?>">
  <meta property="twitter:title" content="<?php echo $title; ?>">
  <meta property="twitter:description" content="<?php echo $description; ?>">
  <meta property="twitter:image" content="<?php echo $image; ?>">
  <link rel="icon" type="image/png"
    href="https://res.cloudinary.com/skill-safari/image/upload/v1632810869/website/ssfavicon_vspiah.png">
  <link rel="stylesheet" type="text/css" href="<?php echo $customCSS; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo $bootstrapCSS; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo $owlCarouselCSS; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo $owlThemeCSS; ?>">
  <script src="https://kit.fontawesome.com/7096014502.js" crossorigin="anonymous"></script>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-MQSJSHQXP7"></script>
  <script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-MQSJSHQXP7');
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


  <!-- Microsoft Clarity -->
  <script type="text/javascript">
  (function(c, l, a, r, i, t, y) {
    c[a] = c[a] || function() {
      (c[a].q = c[a].q || []).push(arguments)
    };
    t = l.createElement(r);
    t.async = 1;
    t.src = "https://www.clarity.ms/tag/" + i;
    y = l.getElementsByTagName(r)[0];
    y.parentNode.insertBefore(t, y);
  })(window, document, "clarity", "script", "c5ws11dqxq");
  </script>
  <!-- Microsoft Clarity -->

</head>

<body>
  <!-- Header section started -->
  <header class="bg-header nav-down shadow w-100 bg-white">
    <div class="container">
      <div class="row align-items-center pt-3 pb-3">
        <div class="col-md-3 d-none d-md-block">
          <a href="/">
            <img src="https://res.cloudinary.com/skill-safari/image/upload/v1650535621/website/logo-black_rxyr58.png"
              class="img-fluid" alt="Skill Safari" title="Skill Safari">
          </a>
        </div>
        <div class="col-md-9">
          <nav class="navbar navbar-expand-md navbar-light">
            <div class="container-fluid">
              <a class="navbar-brand d-block d-md-none" href="/">
                <img
                  src="https://res.cloudinary.com/skill-safari/image/upload/v1650535621/website/logo-black_rxyr58.png"
                  class="img-fluid" alt="Skill Safari" title="Skill Safari">
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
                      href="https://www.skillsafari.in/full-stack-developer-course/">Full
                      Stack Developer</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?php if($page==15) echo 'active';  ?>" aria-current="page"
                      href="https://www.skillsafari.in/learning-hub/">Learning Hub</a>
                  </li>

                  <li class="nav-item ">
                    <a class="nav-link <?php if($page==10) echo 'active';  ?>" aria-current="page"
                      href="https://www.skillsafari.in/internship/internship2023.php">Internship Program</a>
                  </li>
                  <li class="nav-item d-none d-lg-block">
                    <a class="nav-link <?php if($page==2) echo 'active';  ?>" aria-current="page"
                      href="https://www.skillsafari.in/hire-from-us">Hire from
                      us</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="https://blog.skillsafari.in/" target="_blank">Blog</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php if($page==9) echo 'active';  ?>" href=""
                      id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Events
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item"
                          href="https://skillsafari.in/events/become-a-full-stack-developer-in-2023">
                          <span class="img-sec me-3">
                            <i class="fas fa-code"></i>
                          </span>
                          Become a full stack<br>developer in 2023
                        </a>
                      </li>
                      <li><a class="dropdown-item"
                          href="https://skillsafari.in/events/best-practices-to-become-a-frontend-developer">
                          <span class="img-sec me-3">
                            <i class="fas fa-chart-line"></i>
                          </span>
                          Best pratice to become<br>a frontend developer
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