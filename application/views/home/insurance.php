<!DOCTYPE html>
<html lang="en">
   <head>
     <!-- top head start -->
     <?php $this->load->view('themes/frontend/common/top-head'); ?>
     <!-- top head end -->
     
     <?php 
     // Set page identifier for SEO tags
     $page_identifier = 'home_insurance';
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

.containers{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 10px;
}

.containers .image{
    margin-top: 20px;
    align-items: center;
    box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
}

.containers .image img{
    width: 100%;
    /* height: 100px; */
    padding: 10px 15px;
    background-repeat: no-repeat;
    background-size: cover;
   
}
.containers h3{
    font-size: 20px;
    font-weight: 700;
}
.content h3{
    color: #fff;
    background-color: #23488F;
    margin-top: 50px;
    padding: 5px 30px;
    padding-bottom: 10px;
    font-size: 20px;
}


/* ==========slider============= */


.demo__select {
  margin: 0 0 5px 0;
}



.hero {
  position: relative;
  height: auto;
  background-image: url(assets/frontend/images/banner.png);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  width: 100%;
  overflow: hidden;
}
.hero__content {
  color: #fff;
  width: 100%;
  text-align: center;
   z-index: 20;
}
.hero__content h3{
  text-align: center;
  font-size: 20px;
  font-family: 'Speed';
      text-shadow: rgb(222, 26, 40) 2px 1px 0px;
  font-weight: 500;
}

.strip{
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: -20px;
  padding-bottom: 20px;
}
.strip img{
  height: 6px;
}
.hero__title {
  font-size: 54px;
  text-align: center;
  text-shadow: 2px 1px 0px rgb(222 26 40);
   font-family: 'Speed', sans-serif;
  margin: 0 0 2.5rem 0;
  line-height: 1;
}

.hero__title:first-letter {
  text-transform: uppercase;
}
.hero__text {
  font-size: 1.125rem;
  line-height: 1.33;
  text-align: center;
  font-weight: 600;
  padding: 40px 200px;
  margin: 0;
}


.hero--has-shadow-bottom-left .hero__content {
  bottom: 0;
  left: 0;
  text-align: left;
  padding: 152px 15px 120px 15px;
}

.hero--has-shadow-top-left .hero__content {
  top: 0;
  left: 0;
  text-align: left;
  padding: 50px 15px 15px 70px;
}

.hero--has-shadow-top-right .hero__content {
  top: 0;
  right: 0;
  text-align: right;
  padding: 50px 70px 15px 15px;
}
.wrapper {
    position: static;
}
/* ==============mediaquery================ */

@media screen and (max-width: 768px) {
   .hero__title {
    font-size: 2rem;
}
.hero__text {
    font-size: 1.125rem;
    padding: 40px 30px;
}
.hero--has-shadow-bottom-left .hero__content {
    padding: 111px 15px 0px 15px;
}
.containers.container  .col-sm-3 {
    width: 50%;
}
.content h3 {
    margin-top: 0px;
    padding: 10px 30px;
    text-align: center;
    font-size: 14px;
    line-height: 20px;
}
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
      <!-- Navbar start -->
      <?php $this->load->view('themes/frontend/common/header'); ?>

      <div class="wrapper">

        

<div class="hero hero--has-shadow-bottom-left">
  <div class="hero__content">
    <h4 class="hero__title">
        <?php echo get_tag($tags, 'insurance_h4_main', 'Cashless Repair'); ?>
        <br>
        <?php echo get_tag($tags, 'insurance_h4_with', 'with Mastercraft'); ?>
    </h4>
    <div class="strip">
        <img src="/assets/frontend/images/strip.png"
             alt="<?php echo get_tag($tags, 'insurance_strip_img_alt', 'Decorative Strip'); ?>">
    </div>
    <h3>
        <?php echo get_tag($tags, 'insurance_h3_main', 'Damage Happens. We Make It Disappear — cashless.'); ?>
    </h3>
    <p class="hero__text">
        <?php echo get_tag($tags, 'insurance_blurb', 'At Mastercraft, we make accidental damage repairs simple, fast, and cashless. Thanks to our partnerships
with top insurance providers. No paperwork chaos. No upfront payments. Just smooth, stress-free
service from the moment your car rolls in.'); ?>
    </p>
  </div>
</div>

<div class="containers container">
    <h3 class="mt-4">
      <?php echo get_tag($tags, 'insurance_h3_partners', 'Our Insurance Partners Include:'); ?>
    </h3>
    <div class="row d-flex justify-content-center">
        <?php
        // If you want to use a dynamic PHP loop, you could do something like:
        $partner_imgs = [
            'Picture.png',
            'picture1s.png',
            'Picture2.png',
            'picture3s.png',
            'picture4s.png',
            'picture5.png',
            'picture6s.png',
            'picture7s.png',
            'picture8s.png',
            'lo.jpg'
        ];
        foreach ($partner_imgs as $i => $img_fn): ?>
            <div class="col-sm-3">
                <div class="image">
                    <img src="/assets/frontend/images/<?php echo $img_fn; ?>" class="img-fluid"
                         alt="<?php echo get_tag($tags, 'insurance_partner_img_alt_' . ($i+1), 'Insurance Partner ' . ($i+1)); ?>">
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="content">
        <h3>
          <?php echo get_tag($tags, 'insurance_h3_pickdrop', 'Enjoy complimentary pickup and drop service — right from your home or office.'); ?>
        </h3>
    </div>
</div>

<?php $this->load->view('themes/frontend/common/footer'); ?>