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
  <link rel="icon" type="image/png" href="images/favicon.png">
  <link rel="stylesheet" type="text/css" href="<?php echo $customCSS; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo $bootstrapCSS; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo $owlCarouselCSS; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo $owlThemeCSS; ?>">
  <script src="https://kit.fontawesome.com/7096014502.js" crossorigin="anonymous"></script>
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
                    <a class="nav-link" aria-current="page" href="https://www.skillsafari.in/hire-from-us">Hire from
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