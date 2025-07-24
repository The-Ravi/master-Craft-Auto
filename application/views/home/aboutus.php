<!DOCTYPE html>
<html lang="en">
   <head>
     <!-- top head start -->
     <?php $this->load->view('themes/frontend/common/top-head'); ?>
     <!-- top head end -->
     
     <?php 
     // Set page identifier for SEO tags
     $page_identifier = 'home_aboutus';
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
    padding: 150px 0px 70px 0px;
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
@media (max-width: 700px) {
.fp-overflow.aboutus {
    background-position: 627px 0px !important;
}.fp-overflow.aboutus .row .col-md-6.d-flex.align-items-center.justify-content-center {
    background: #02020273;
}}
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
      <!-- Navbar start -->
      <?php $this->load->view('themes/frontend/common/header'); ?>

      <div class="fp-overflow aboutus" tabindex="-1" style="background:url(assets/frontend/images/aboutbg.jpg)">
        <div class="intro">
          <div class="thirdslider">
            <div class="container">
              <div class="row">
                <div class="col-md-6 d-flex align-items-center justify-content-center">
                  <div class="content ">
                  <div class="secondslider ">
                    <h2><?= get_tag($tags, 'aboutus_h2_1') ?></h2>
                    <div class="strip">
                      <img src="https://agenziaviaggiinnepal.com/craft/assets/frontend/images/stripsline.png">
                    </div>
                  
                  </div>
                <p>  Welcome to Mastercraft, where precision meets passion in automotive craftsmanship. Born from the visionary expertise of Nippon Paint, Mastercraft stands as a pioneering force in the realm of paint and body shops. Nestled in the heart of Gurgaon, our state-of-the-art facility ushers in a new era of automotive care,  recognizing that every car is not just a vehicle but a reﬂection of its owner's identity.  </p>


                <p>At Mastercraft, we are dedicated to providing exemplary services, precise repairs, and a luxurious touch to your vehicle's interior.We promise unparalleled services, including exclusive paint jobs,  meticulous denting and painting, and comprehensive car detailing. Our commitment goes beyond just service - we love your car more than you do.  </p>

                <p>Experience automotive care like never before with Mastercraft, where your car receives the meticulous attention it truly deserves.  </p>
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
     <?php $this->load->view('themes/frontend/common/footer'); ?>
      <!-- Footer section end -->
    
       
   </body>
</html>