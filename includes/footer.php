<?php 
  $url = 'https://demo.skillsafari.in';
  $customJS =  $url . '/js/script.js';
  $bootstrapJS = $url . '/js/bootstrap.bundle.min.js ';
  $owlCarouselJS = $url . '/js/owl.carousel.js';
  $parsleyJS = $url . '/js/parsley.min.js';
?>
<!-- footer section started -->
<footer class="bg-footer shadow position-relative">
  <div class="container">
    <div class="row pt-5 mx-auto">
      <div class="col-md-4">
        <img src="images/logo.png" class="img-fluid" alt="" title="">
        <div class="footer-para pt-3">
          <p class="school-para">Join us at Skill Safari as we rush into the new era of e-learning, where boring
            classroom education is not the ruler. We are here to provide you with knowledge and skills that make you
            think and help you build a new and better future. </p>
        </div>
      </div>
      <div class="col-md col-sm-4 col-6 pt-md-0 pt-4">
        <h6 class="footer-linkheads">Courses</h6>
        <ul class="list-group">
          <li class="list-group-item"><a class="text-decoration-none" href="fullstack.php">Full Stack Developers</a>
          </li>
          <li class="list-group-item"><a class="text-decoration-none" href="datascience.php">Data Analytics program</a>
          </li>
        </ul>
      </div>
      <div class="col-md col-sm-4 col-6 pt-md-0 pt-4">
        <h6 class="footer-linkheads">Quicklinks</h6>
        <ul class="list-group">
          <li class="list-group-item"><a class="text-decoration-none" href="community.php">Community</a></li>
          <li class="list-group-item"><a class="text-decoration-none" href="events.php">Events</a></li>
          <li class="list-group-item"><a class="text-decoration-none" href="testimony.php">Testimonials</a></li>
          <li class="list-group-item"><a class="text-decoration-none" href="events.php#faq">FAQ</a></li>
          <li class="list-group-item"><a class="text-decoration-none" href="">Contact Us</a></li>
        </ul>
      </div>
      <div class="col-md col-sm-4 col-6 pt-md-0 pt-4">
        <h6 class="footer-linkheads">Company</h6>
        <ul class="list-group">
          <li class="list-group-item"><a class="text-decoration-none" href="vm.php">About Us</a></li>
          <li class="list-group-item"><a class="text-decoration-none" href="hire.php">Hire From Us</a></li>
          <li class="list-group-item"><a class="text-decoration-none" href="training.php">Corporate Training</a></li>
          <li class="list-group-item"><a class="text-decoration-none" href="companyprofile.php">Our Team</a></li>
          <li class="list-group-item"><a class="text-decoration-none" href="index.php#specialist">Industry
              Specialist</a></li>
        </ul>
      </div>
    </div>
    <div class="row pb-5 align-items-center mx-auto">
      <div class="col-lg-4 col-md-6 socailicon">
        <ul class="list-group list-group-horizontal">
          <li class="list-group-item"><a href=""><i class="shadow fab fa-facebook-f facebook"></i></a></li>
          <li class="list-group-item"><a href=""><i class="shadow fab fa-instagram twitter"></i></a></li>
          <li class="list-group-item"><a href=""><i class="shadow fab fa-twitter twitter"></i></a></li>
          <li class="list-group-item"><a href=""><i class="shadow fab fa-google-plus-g twitter"></i></a></li>
          <li class="list-group-item"><a href=""><i class="shadow fab fa-linkedin-in twitter"></i></a></li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-8 col-12 text-center  pt-md-0 pt-4">
        <p class="copyrights pb-0 mb-0"> © Copyright Skillsafari All Rights Reserved.</p>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-4 col-12 text-center pt-lg-0 pt-4">
        <p class="designby pb-0 mb-0">Design By <a href="https://webchirpy.com/"
            class="text-decoration-none">Webchirpy</a></p>
      </div>
    </div>
    <div class="cir-dot-yellow d-none d-lg-block">
      <img src="images/dotyellow.png" class="img-fluid" alt="" title="">
    </div>
    <div class="cir-dot-blue d-none d-lg-block">
      <img src="images/bluecircle.png" class="img-fluid" alt="" title="">
    </div>
  </div>
</footer>
<!-- footer section ended -->
<!-- bootstrap -->
<script src="<?php echo $bootstrapJS; ?>"></script>
<!-- carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="<?php echo $owlCarouselJS; ?>" type="text/javascript"></script>
<script src="<?php echo $parsleyJS; ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="<?php echo $customJS; ?>"></script>
</body>

</html>