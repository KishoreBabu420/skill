<!DOCTYPE html>
<html>
    
    <?php 
            if($description==""){
                $description = 'Skill Safari';
            }
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
    <link rel="stylesheet" href="css/style.css">
    <link href="css/font-awesome-min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">

</head>

<body>
    <!-- Header section started -->
    <header class="bg-header nav-down shadow w-100  bg-white">
        <div class="container">
            <div class="row align-items-center pt-3 pb-3">
                <div class="col-md-3 d-none d-md-block">
                    <a href="index.php">
                        <img src="images/logo.png" class="img-fluid" alt="" title="">
                    </a>
                </div>
                <div class="col-lg-6 col-md-5">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <div class="container-fluid">
                            <a class="navbar-brand d-block d-md-none" href="index.php">
                                <img src="images/logo.png" class="img-fluid" alt="" title="">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav  mb-lg-0 m-auto">
                                <li class="nav-item">
                                    <a class="nav-link <?php if($page==1) echo 'active';  ?>" aria-current="page" href="index.php">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle <?php if($page==2) echo 'active';  ?>" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Courses
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="fullstack.php">
                                            <span class="img-sec me-3"><img  class="w-75" src="images/code.png"></span>
                                            Full Stack Developer 
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item" href="datascience.php">
                                            <span class="img-sec me-3"><img  class="w-75" src="images/code.png"></span>
                                            Data Science
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle <?php if($page==3) echo 'active';  ?>" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Resources
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="blog-post.php">
                                            <span class="img-sec me-3"><img  class="w-75" src="images/code.png"></span>
                                            Blog Posts
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item" href="guide.php">
                                            <span class="img-sec me-3"><img  class="w-75" src="images/code.png"></span>
                                            Guide
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item" href="roadmap.php">
                                            <span class="img-sec me-3"><img  class="w-75" src="images/code.png"></span>
                                            Roadmaps
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if($page==4) echo 'active';  ?>" href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if($page==5) echo 'active';  ?>" href="community.php">Community</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle <?php if($page==6) echo 'active';  ?>" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        More
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">                                        
                                        <li><a class="dropdown-item" href="events.php">
                                            <span class="img-sec me-3"><img  class="w-75" src="images/code.png"></span>
                                            Events
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item" href="hire.php">
                                            <span class="img-sec me-3"><img  class="w-75" src="images/code.png"></span>
                                            Hire From us
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item" href="training.php">
                                            <span class="img-sec me-3"><img  class="w-75" src="images/code.png"></span>
                                            Training
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item" href="">
                                            <span class="img-sec me-3"><img  class="w-75" src="images/code.png"></span>
                                            Contact Us
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- <li class="nav-item">
                                <a class="nav-link" href="events.php">Events</a>
                                </li> -->
                                <li class="nav-item regbtn d-block d-md-none">
                                    <a href="" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal-newtop-1">I'm Interested</a>
                

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal-newtop-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    <div class="training-form bg-white shadow mt-4 pt-md-4 pb-md-4 p-md-5 p-3">
                                                        <h3 class="trainingform-head pb-3">I'm Interested</h3>

                                                        <form>
                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label">Full Name*</label>

                                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Full Name" />
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label">Phone*</label>

                                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Phone Number" />
                                                            </div>

                                                            <div class="mb-3">m
                                                                <label for="exampleInputEmail1" class="form-label">Email*</label>

                                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your email ID" />
                                                            </div>
                                                        </form>

                                                        <div class="callbackbtn mt-3">
                                                            <a href="" class="text-decoration-none">Request A Callback</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-4  d-none d-md-block">
                    <div class="regbtn text-md-end text-center">
                        <a href="" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal-newtop-2">Request a Callback</a>
                    </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal-newtop-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        <div class="training-form bg-white shadow pt-md-4 pb-md-4 p-md-5 p-3">
                                            <h3 class="trainingform-head pb-3">I'm Interested</h3>

                                            <form>
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Full Name*</label>

                                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Full Name" />
                                                </div>

                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Phone*</label>

                                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Phone Number" />
                                                </div>

                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Email*</label>

                                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your email ID" />
                                                </div>
                                            </form>

                                            <div class="callbackbtn mt-3">
                                                <a href="" class="text-decoration-none">Request A Callback</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </header>
    
   
    <!-- Header section ended -->