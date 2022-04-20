<?php 
  $url = 'https://www.skillsafari.in';
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
          <p class="school-para w-75">Join us at Skill Safari as we rush into the new era of e-learning, where boring
            classroom education is not the ruler. We are here to provide you with knowledge and skills that make you
            think and help you build a new and better future. </p>
        </div>
      </div>
      <div class="col-md col-sm-4 col-6 pt-md-0 pt-4">
        <h6 class="footer-linkheads">Courses</h6>
        <ul class="list-group">
          <li class="list-group-item"><a class="text-decoration-none" href="fullstack.php">Full Stack Development</a>
          </li>
        </ul>
      </div>
      <div class="col-md col-sm-4 col-6 pt-md-0 pt-4">
        <h6 class="footer-linkheads">Quicklinks</h6>
        <ul class="list-group">
          <li class="list-group-item"><a class="text-decoration-none"
              href="https://skillsafari.in/join-community">Community</a>
          </li>
          <li class="list-group-item"><a class="text-decoration-none" href="https://skillsafari.in/hire-from-us">Hire
              From Us</a>
          </li>
          <li class="list-group-item"><a class="text-decoration-none"
              href="https://skillsafari.in/become-campus-ambassador">Become
              Campus Ambassador</a>
          </li>
        </ul>
      </div>
      <div class="col-md col-sm-4 col-6 pt-md-0 pt-4">
        <h6 class="footer-linkheads">Company</h6>
        <ul class="list-group">
          <li class="list-group-item"><a class="text-decoration-none" href="https://skillsafari.in/about-us">About
              Us</a></li>
          <li class="list-group-item"><a class="text-decoration-none"
              href="https://skillsafari.in/vison-and-mission">Our Vision</a></li>
        </ul>
      </div>
    </div>
    <div class="row pb-5 align-items-center mx-auto">
      <div class="col-lg-4 col-md-6 socailicon">
        <ul class="list-group list-group-horizontal">
          <li class="list-group-item">
            <a href="https://www.facebook.com/SkillSafari.in/" target="_blank">
              <i class="shadow fab fa-facebook-f facebook"></i>
            </a>
          </li>
          <li class="list-group-item">
            <a href="https://www.instagram.com/skillsafari.in/" target="_blank">
              <i class="shadow fab fa-instagram instagram"></i>
            </a>
          </li>
          <li class="list-group-item">
            <a href="https://twitter.com/Skill_Safari" target="_blank">
              <i class="shadow fab fa-twitter twitter"></i>
            </a>
          </li>
          <li class="list-group-item">
            <a href="https://www.linkedin.com/company/skill-safari/" target="_blank">
              <i class="shadow fab fa-linkedin-in linkedin"></i>
            </a>
          </li>
          <li class="list-group-item">
            <a href="https://www.youtube.com/channel/UCPue6kVuf98UZvqjkLFUAjA" target="_blank">
              <i class="shadow fab fa-youtube youtube"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="row pb-5 align-items-center mx-auto">
      <div class="col-12 text-center pt-md-0 pt-4">
        <p class="copyrights pb-0 mb-0 text-center"> Copyright<sup>©</sup> 2022 Skill Safari All Rights Reserved.</p>
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