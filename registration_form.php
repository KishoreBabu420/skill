<?php 
$title = "Learn the Modern Way with Skill Safari";
$description = "Skill Safari is an e-learning platform where you can learn the latest technical skills. Become a Full Stack Developer and enroll in our job guarantee program";
$keywords = "Skill Safari, SkillSafari, skill safari, skillsafari, Skillsafari, skillSafari, Full Stack Developer Course, Data Science Boot Camp, Full Stack Developer, skillsafari.in, ";
$page = "16";
include_once("./includes/header.php");
?>
<!-- top-space -->
<section class="top-pagespace"></section>

<section class="bg-hero  vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="training-form bg-white shadow  pt-md-4 pb-md-4 p-md-5 p-3">
          <h5 class="trainingform-head pb-3">Register to know More?</h5>
          <form action="https://formsubmit.co/99a7386ade92b752097e7774d17f24fc" method="POST" id="registration_page">
            <div class="mb-3">
              <label for="fullName" class="form-label">Full Name*</label>
              <input type="name" class="form-control" id="fullName" aria-describedby="fullNameHelp" name="name"
                data-parsley-required-message="We require your name" placeholder="Enter Your Full Name" required />
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email Address*</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                placeholder="Enter Your Email ID" name="email" data-parsley-required-message="Email Address is required"
                required />
            </div>

            <div class="mb-3">
              <label for="mobile" class="form-label">Mobile Number*</label>
              <input type="tel" class="form-control" id="mobile" aria-describedby="mobileHelp"
                placeholder="Enter Your Mobile Number" name="phone"
                data-parsley-required-message="Mobile Number is required"
                data-parsley-error-message="Provide valid Mobile Number" required data-parsley-trigger="keyup"
                data-parsley-validation-threshold="1" data-parsley-debounce="500" data-parsley-type="digits"
                data-parsley-minlength="10" data-parsley-maxlength="11" />
            </div>
            <input type="hidden" name="utm_source" value="">
            <input type="hidden" name="utm_medium" value="">
            <input type="hidden" name="utm_campaign" value="">
            <input type="hidden" name="utm_term" value="">
            <input type="hidden" name="utm_content" value="">
            <input type="hidden" name="_webhook"
              value="https://connect.pabbly.com/workflow/sendwebhookdata/IjU3NmQwNTZmMDYzZjA0MzU1MjY0NTUzMCI_3D_pc">
            <input type="hidden" name="_next" value="https://connect.skillsafari.in/dr7">
            <div class="callbackbtn mt-3">
              <button class="text-decoration-none" type="submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
include_once("./includes/footer.php");
?>