<form class="pt-3 pb-4" id="contactForm" action="#" method="POST" novalidate>
    <div class='full-input p-2 col-md-12 me-4 mb-3'>
        <label for="exampleInputPassword1" class="form-label text-grey ft-14 mb-0">Full Name *</label>
        <input type="text" name='email' required data-parsley-minlength="4" placeholder="Enter Your full name">
    </div>
    <div class='full-input p-2 col-md-12 me-4 mb-3'>
        <label for="exampleInputEmail1" class="form-label text-grey ft-14 mb-0">Email *</label>
        <input type="text" name='email' required data-parsley-minlength="4" placeholder="Enter Your Email">
    </div>
    <div class='full-input p-2 col-md-12 me-4 mb-3'>
        <label for="exampleInputPassword1" class="form-label text-grey ft-14 mb-0">Phone Number *</label>
        <input type="text" name='email' required data-parsley-minlength="4" placeholder="Enter Your Phone Number">
    </div>
    <div class="row pt-2 align-items-center ">
        <div class="col-md-7 ">
            <div class="g-recaptcha" data-sitekey="6LfX55EbAAAAAOfxrtASLUNG14LFhb39dNoPvGNG"></div>
            <!--<input type="hidden" id="captcha-response" requried="" name="captcha-response" />-->
        </div>
        <div class="col-md-5 ">
            <div class="service-btn pt-5 pb-5 ">
                <input type="hidden" name="page" value="<?php echo $_SERVER['REQUEST_URI']; ?>"/>
                <input type="submit" class="text-decoration-none requestbtn" value="Request a callback"/>
            </div>
        </div>
    </div>
        <div style="margin-top:20px">
        <div id="success" style="display:none;color:green;">Thank you for your interest. We will be in touch with you soon.</div>
        <div id="error" style="display:none;color:red;">Problem submitting your request, Please try again later.</div>
        </div>
</form>   