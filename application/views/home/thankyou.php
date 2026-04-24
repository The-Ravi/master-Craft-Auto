<!DOCTYPE html>
<html lang="en">
   <head>
     <!-- top head start -->
     <?php $this->load->view('themes/frontend/common/top-head'); ?>
     <!-- top head end -->
     
     <?php 
     // Set page identifier for SEO tags
     $page_identifier = 'home_thankyou';
     // Include SEO head component
     $this->load->view('themes/frontend/common/seo-head', ['page_identifier' => $page_identifier, 'tags' => isset($tags) ? $tags : []]);
     ?>

     <style>
      .navbar-light .navbar-nav .nav-link {
    color: #fff;
}div#carouselExampleControls .carousel-inner, div#carouselExampleControls .carousel-inner .carousel-item.active, .secondslider {
    height: auto;
}@media (min-width: 1200px) {
    .container, .container-lg, .container-md, .container-sm, .container-xl {
        max-width: 1160px;
    }
}
.fp-overflow.aboutus {
    padding: 150px 0px 200px 0px;
    height: auto !IMPORTANT;
    clear: both;
    max-height: fit-content;
    background-size: cover !important;
}
.thirdslider .secondslider h2 {
    text-align: left;
    text-indent: 13px;
}.strip {
    text-align: left;
}
.secondslidersthank {
    text-align: center;
    padding: 115px 0px;
}
.secondslidersthank h2 {
    color: #fff;
    font-weight: 800;
    margin-top: 20px;
}
.secondslidersthank p{
  font-size: 16px;
}


.secondslidersthank p>b {
    color: red;
}
@media (max-width: 700px) {
.fp-overflow.aboutus {
    background-position: 627px 0px !important;
}.fp-overflow.aboutus .row .col-md-6.d-flex.align-items-center.justify-content-center {
    background: #02020273;
}
.fp-overflow.aboutus {
    padding: 50px 0px 0px 0px;
    height: auto !IMPORTANT;
    clear: both;
    max-height: fit-content;
    background-size: cover !important;
}
.secondslidersthank p>b {
    color: red;
    word-wrap: break-word;
}

}.booknow {
    display: none;
}
      </style>
   </head>
   <body>
      <!-- Navbar start -->
      <?php $this->load->view('themes/frontend/common/header'); ?>

      <div class="fp-overflow aboutus" tabindex="-1" style="background:url(assets/frontend/images/thankyou.jpg)">
        <div class="intro">
          <div class="thirdslider">
            <div class="container">
              <div class="row">
                <div class="col-md-12 ">
                  <div class="content ">
                  <div class="secondslidersthank ">
                  <img src="assets/frontend/images/like.png" >
                    <h2>Thank You </h2>
                    <p>We have successfully received your service request.</br> Our service team will be in touch with you shortly. </p>
                    <p>For any query please reach out at: 
                    </p>
                    <p>Mobile: 9773592294, 9873889977</br>
Email: info.mastercraftggn@nipponpaint.co.in</p>
                  </div>
             

                  </div>
                </div>
                <div class="col-md-6">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer section start -->
     <?php $this->load->view('themes/frontend/common/footer', isset($tags) ? array('tags' => $tags) : array()); ?>
      <!-- Footer section end -->
    
      <!-- Meta Pixel Conversion Event -->
      <script>
        fbq('track', 'Lead');
      </script>
      
      <!-- Event snippet for Purchase conversion page -->
      <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-10865517213/Vd6gCNChocQbEJ3Fir0o',
            'value': 1.0,
            'currency': 'INR',
            'transaction_id': ''
        });
      </script>
       
   </body>
</html>