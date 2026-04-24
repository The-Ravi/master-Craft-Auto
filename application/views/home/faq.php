<!DOCTYPE html>
<html lang="en">
   <head>
      
    <?php $this->load->view('themes/frontend/common/top-head'); ?>
    
    <?php 
    // Set page identifier for SEO tags
    $page_identifier = 'home_faq';
    // Include SEO head component
    $this->load->view('themes/frontend/common/seo-head', ['page_identifier' => $page_identifier, 'tags' => isset($tags) ? $tags : []]);
    ?>
    
    <style type="text/css">
      .alert-success {
          color: #0f5132;
          background-color: #d1e7dd;
          border-color: #badbcc;
          font-size: small;
      }
      .wrapper {
    margin-bottom: 0px;
}
    </style>
    <!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1455382731734891');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1455382731734891&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MRV985XJKT"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-MRV985XJKT');
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16680467599">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-16680467599');
</script>
   </head>
   <body>
    <!-- Header start -->
      <?php $this->load->view('themes/frontend/common/header'); ?>

      <!-- Header end -->

      <div class="main">
      <div class="wrapper">
      <section class="faq">
      <div class="container">
            <div class="row">
              <div class="col-md-8">
              <div class="accordion" id="faq">
                <?php foreach ($faqs as $faq): ?>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $faq->id; ?>" aria-expanded="false" aria-controls="collapse<?php echo $faq->id; ?>">
                      <?php echo $faq->question; ?>
                      </button>
                    </h2>
                    <?php foreach ($faq->answer as $faqans): ?>
                      <div id="collapse<?php echo $faq->id; ?>" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faq">
                        <div class="accordion-body">
                        <?php echo $faqans->answer; ?>
                        </div>
                      </div>
                    <?php endforeach ?>
                    
                  </div>
                <?php endforeach ?>
  
  <!-- <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      How can I book a car denting & painting service?      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faq">
      <div class="accordion-body">
      Simple! Just call us on 98738 89977 or email us at info.mastercraftggn@nipponpaint.co.in for immediately book a car dentig and pinting service. Our service executive will take on your request and will reach you shortly. 
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      Is the entire car painted at Mastercraft’s Gurugram’s denting painting services?      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faq">
      <div class="accordion-body">
      Yes, Our expert team is stationed at the Gurugram detailing workshop. The cetnre is equipped with the best of latest technologies. So your car can be serviced at the earliest'
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingfours">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingfour" aria-expanded="false" aria-controls="collapseTwo">
      How is color matching done at your workshop?      </button>
    </h2>
    <div id="headingfour" class="accordion-collapse collapse" aria-labelledby="headingfours" data-bs-parent="#faq">
      <div class="accordion-body">
      At Mastercraft, we use advanced technology, quality paints, and leverage the knowledge of our
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingfives">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingfive" aria-expanded="false" aria-controls="collapseTwo">
      My car is an older model, will you be able to match the paint?      </button>
    </h2>
    <div id="headingfive" class="accordion-collapse collapse" aria-labelledby="headingfives" data-bs-parent="#faq">
      <div class="accordion-body">
      At Mastercraft, we use advanced technology, quality paints, and leverage the knowledge of our
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingsixs">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingsix" aria-expanded="false" aria-controls="collapseTwo">
      What kind of paints do you use for painting services?      </button>
    </h2>
    <div id="headingsix" class="accordion-collapse collapse" aria-labelledby="headingsixs" data-bs-parent="#faq">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingsevens">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingseven" aria-expanded="false" aria-controls="collapseTwo">
      How much time will it take to paint my car at your workshop?      </button>
    </h2>
    <div id="headingseven" class="accordion-collapse collapse" aria-labelledby="headingsevens" data-bs-parent="#faq">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingeights">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingeight" aria-expanded="false" aria-controls="collapseTwo">
      Will I be able to see the difference in the paint?      </button>
    </h2>
    <div id="headingeight" class="accordion-collapse collapse" aria-labelledby="headingeights" data-bs-parent="#faq">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingnines">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingnine" aria-expanded="false" aria-controls="collapseTwo">
      What if I am not available to drop my car?      </button>
    </h2>
    <div id="headingnine" class="accordion-collapse collapse" aria-labelledby="headingnines" data-bs-parent="#faq">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div> -->
</div>
</div>
  <div class="col-md-4 ">
    <div class="card intro contact p-4 shadow">
      <div class="alert alert-success mt-2 d-none" role="alert" id="successMessage">Your Request submitted successfully</div>
      <div class="card-body">
        <h3 id="contact_main_heading">Got another </br><span>Question?</span></h3>
        <form id="contact_form" name="contact_form" method="post">
          <div class=" row">
            <div class="col-md-12">
              <label for="email_addr">FULL NAME</label>
              <input type="text" required="" maxlength="50" class="form-control full_name" id="name" name="name" placeholder="">
            </div> <div class="col-md-12">
              <label for="phone_input">EMAIL</label>
              <input type="email" class="form-control email" id="phone_input" name="EMAIL" placeholder="" required="">
            </div>
            <div class="col-md-12">
              <label for="phone_input">PHONE</label>
              <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10" minlength="10" class="form-control phone_number" id="phone_input" name="PHONE" placeholder="" required="">
            </div>
            <div class="col-md-12">
              <label for="message">QUESTION</label>
              <textarea class="form-control message" id="message" name="message" rows="2" required=""></textarea>
            </div>
          </div>
          <button type="submit" class="btn btn-primary px-4 btn-lg" id="contatSubmit">Book Your Mastercraft Session</button>
        </form>

        <!-- OTP Verification Form -->
        <h3 id="contact_otp_heading" style="display: none;">Verify OTP</h3>
        <form action="#" method="post" id="contact_otp_form" style="display: none;">
          <p>
            Please enter the OTP sent to
            +91-<span class="entered_phone_no">9205114537</span> <br>
          </p>
          <div class="form-group mb-3">
            <input type="text" name="otp" class="form-control" id="otp"
                   oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                   maxlength="6" title="Please enter OTP" value="" aria-required="true" aria-invalid="false" placeholder="Enter OTP">
            <input type="hidden" name="" id="hidden_full_name">
            <input type="hidden" name="" id="hidden_email">
            <input type="hidden" name="" id="hidden_mobile">
            <input type="hidden" name="" id="hidden_question">
          </div>
          <div class="resend-otp1" style="display: flex;gap:10px;">
            <span class="resend-otp-text">
              Didn't receive OTP?
            </span>
            <span class="resend-otp-link" style="display: none;">
              <a class="use-ajax" href="javascript:void(0)" id="resend-otp" data-once="ajax" onclick="resendOTPContact();">
                Resend OTP
              </a>
            </span>
            <div id="timer" class="timer">0:59</div>
          </div>
          <div class="form-group text-center formsubbtn">
            <button type="submit" class="btn btn-primary px-4 btn-lg">
              Verify
            </button> 
          </div>
        </form>
        
      </div>
    </div>
  </div>
</div>
</div>
</section>
      <!-- Footer start -->
      <?php $this->load->view('themes/frontend/common/footer', isset($tags) ? array('tags' => $tags) : array()); ?>
      <!-- Footer end -->

<script>

</script>
   </body>
</html>
<script type="text/javascript">
  // Contact Form Submit - Send OTP
  $('#contact_form').on('submit', function(e){
    e.preventDefault();
    
    // Prevent double submission
    if ($(this).data('submitting')) {
      return false;
    }
    $(this).data('submitting', true);
    
    var full_name = $('#contact_form').find('.full_name').val();
    var email = $('#contact_form').find('.email').val();
    var mobile = $('#contact_form').find('.phone_number').val();
    var question = $('#contact_form').find('.message').val();

    // Validate phone number
    if (mobile.length !== 10) {
      $.notify('Please enter a valid 10-digit phone number', 'error');
      $(this).data('submitting', false);
      return false;
    }

    $('#contatSubmit').prop('disabled', true).html('Sending OTP...');

    $.ajax({
        url:'<?php echo base_url(); ?>Home_public/sendOtp',
        type: 'POST',
        data : {
            'phone_number' : mobile,
            'full_name' : full_name,
            'message' : question
        },
        dataType: 'JSON',
        success:function(res){
            $('#contact_form').data('submitting', false);
            
            if(res.status == 200){
                $.notify('OTP sent successfully', 'success');
                
                // Hide main form heading and show OTP heading
                $('#contact_main_heading').hide();
                $('#contact_otp_heading').show();
                
                // Hide contact form and show OTP form
                $("#contact_form").hide();
                $("#contact_otp_form").show();
                
                // Populate hidden fields in OTP form
                $("#contact_otp_form").find('.entered_phone_no').html(mobile);
                $("#contact_otp_form").find('#hidden_mobile').val(mobile);
                $("#contact_otp_form").find('#hidden_full_name').val(full_name);
                $("#contact_otp_form").find('#hidden_email').val(email);
                $("#contact_otp_form").find('#hidden_question').val(question);
                
                // Start OTP timer
                userTimerstartContact(1);
                
                $('#contatSubmit').prop('disabled', false).html('Book Your Mastercraft Session');
            }else{
                $.notify(res.message || 'Failed to send OTP', 'error');
                $('#contatSubmit').prop('disabled', false).html('Book Your Mastercraft Session');
            }
        },
        error: function(error) {
          $('#contact_form').data('submitting', false);
          $.notify('Error sending OTP', 'error');
          $('#contatSubmit').prop('disabled', false).html('Book Your Mastercraft Session');
        }
    });
  });

  // OTP Form Submit - Verify OTP and Save Contact
  $('#contact_otp_form').on('submit', function(e){
    e.preventDefault();
    $('.error_class').remove();
    
    const otp = $('#contact_otp_form').find('#otp').val();
    const mobile = $("#contact_otp_form").find('#hidden_mobile').val();
    const full_name = $("#contact_otp_form").find('#hidden_full_name').val();
    const email = $("#contact_otp_form").find('#hidden_email').val();
    const question = $("#contact_otp_form").find('#hidden_question').val();
    
    if (!otp) {
      $('#contact_otp_form').find('#otp').after('<div class="error_class" style="color:red;">OTP is required</div>');
      $('#contact_otp_form').find('#otp').focus();
      return false;
    }
  
    $("#contact_otp_form").find('button[type="submit"]').prop('disabled', true);
    $("#contact_otp_form").find('button[type="submit"]').html('Verifying...');
    
    $.ajax({
        url:'<?php echo base_url(); ?>Home_public/saveFaqForm',
        type: 'POST',
        data : {
            'phone_number' : mobile,
            'full_name' : full_name,
            'email' : email,
            'question' : question,
            'otp' : otp
        },
        dataType: 'JSON',
        success:function(res){
            if(res.status == 200){
                $.notify(res.message || 'Your question has been submitted successfully!', 'success');
                
                // Redirect to thank you page
                window.location.href = '<?php echo base_url(); ?>thankyou';
            }else{
                $.notify(res.message || 'Invalid OTP. Please try again.', 'error');
                $("#contact_otp_form").find('button[type="submit"]').prop('disabled', false);
                $("#contact_otp_form").find('button[type="submit"]').html('Verify');
            }
        },
        error: function(error) {
          $.notify('Error verifying OTP', 'error');
          $("#contact_otp_form").find('button[type="submit"]').prop('disabled', false);
          $("#contact_otp_form").find('button[type="submit"]').html('Verify');
        }
    });
  });

  // Timer function for OTP
  window.userTimerstartContact = function(time) {
     var countDownDate = new Date().getTime() +  time * 60 * 1000;
      var x = setInterval(function() {
        var now = new Date().getTime();
        var distance = countDownDate - now;
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        $('#contact_otp_form').find('.timer').html( minutes + ":" + seconds);
        if (distance < 0) {
          $('#contact_otp_form').find('.resend-otp-text').hide();
          $('#contact_otp_form').find('.resend-otp-link').show();
          $('#contact_otp_form').find('.timer').html("0:00");
          clearInterval(x);
          return false;
        }
      }, 1000);
  }

  // Resend OTP function
  window.resendOTPContact = function() {
    const mobile = $("#contact_otp_form").find('#hidden_mobile').val();
    const full_name = $("#contact_otp_form").find('#hidden_full_name').val();
    const question = $("#contact_otp_form").find('#hidden_question').val();
    
    $.ajax({
        url:'<?php echo base_url(); ?>Home_public/sendOtp',
        type: 'POST',
        data : {
            'phone_number' : mobile,
            'full_name' : full_name,
            'message' : question
        },
        dataType: 'JSON',
        success:function(res){
            if(res.status == 200){
                $.notify('OTP resent successfully', 'success');
                $('#contact_otp_form').find('.resend-otp-text').show();
                $('#contact_otp_form').find('.resend-otp-link').hide();
                userTimerstartContact(1);
            }else{
                $.notify(res.message || 'Failed to resend OTP', 'error');
            }
        },
        error: function(error) {
          $.notify('Error resending OTP', 'error');
        }
    });
  }
</script>
