
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/frontend/images/logo.png">
    <link rel="icon" href="<?php echo base_url(); ?>assets/frontend/images/logo.png">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/frontend/images/logo.png">
    <link href="<?php echo base_url(); ?>assets/frontend/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/frontend/css/font/stylesheet.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/frontend/css/style.css?v=1.23" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.0/dist/aos.css" rel="stylesheet">
    
 
    <!--FullPage Js-->
    <!--End FullPage Js-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <?php 
    // Set page identifier for SEO tags
    $page_identifier = 'home_index';
    // Include SEO head component
    $this->load->view('themes/frontend/common/seo-head', ['page_identifier' => $page_identifier, 'tags' => isset($tags) ? $tags : []]);
    ?>
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
<style>
  #navbarSupportedContent li.nav-item.dropdown:hover ul.dropdown-menu {
    display: block;
}

  </style>
     <style>
          @media (max-width:767px){
              
             li.nav-item.mb-2.bricj {
    display: flex;
    justify-content: center;
} 
          }
          
      </style>
  </head>
  <body>
    <div class="booknow">
      <a href="#" data-bs-toggle="modal" data-bs-target="#cta">
        <img src="<?php echo base_url(); ?>assets/frontend/images/booknow.png" alt="book now" />
      </a>
    </div>
    <div class="loader">
<!--    <video class="loader-icons desk" width="100%" height="100%"   autoplay muted playsInline>-->
<!--  <source src="<?php echo base_url(); ?>assets/frontend/images/MasterCraft_Countdown.mp4" type="video/mp4">-->
<!--</video>-->
<!--<video class="loader-iconsmobile" width="100%" height="100%"   autoplay muted playsInline>-->
<!--  <source src="<?php echo base_url(); ?>assets/frontend/images/MasterCraft_Countdownm.mp4" type="video/mp4">-->
<!--</video>-->

      <svg class="loader-icon" width="100px" height="100px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
        <rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect>
        <rect x="46.5" y="40" width="7" height="20" rx="5" ry="5" fill="#47bbed" transform="rotate(0 50 50) translate(0 -30)">
          <animate attributeName="opacity" from="1" to="0" dur="0.5s" begin="0s" repeatCount="indefinite"></animate>
        </rect>
        <rect x="46.5" y="40" width="7" height="20" rx="5" ry="5" fill="#47bbed" transform="rotate(30 50 50) translate(0 -30)">
          <animate attributeName="opacity" from="1" to="0" dur="0.5s" begin="0.041666666666666664s" repeatCount="indefinite"></animate>
        </rect>
        <rect x="46.5" y="40" width="7" height="20" rx="5" ry="5" fill="#47bbed" transform="rotate(60 50 50) translate(0 -30)">
          <animate attributeName="opacity" from="1" to="0" dur="0.5s" begin="0.08333333333333333s" repeatCount="indefinite"></animate>
        </rect>
        <rect x="46.5" y="40" width="7" height="20" rx="5" ry="5" fill="#47bbed" transform="rotate(90 50 50) translate(0 -30)">
          <animate attributeName="opacity" from="1" to="0" dur="0.5s" begin="0.125s" repeatCount="indefinite"></animate>
        </rect>
        <rect x="46.5" y="40" width="7" height="20" rx="5" ry="5" fill="#47bbed" transform="rotate(120 50 50) translate(0 -30)">
          <animate attributeName="opacity" from="1" to="0" dur="0.5s" begin="0.16666666666666666s" repeatCount="indefinite"></animate>
        </rect>
        <rect x="46.5" y="40" width="7" height="20" rx="5" ry="5" fill="#47bbed" transform="rotate(150 50 50) translate(0 -30)">
          <animate attributeName="opacity" from="1" to="0" dur="0.5s" begin="0.20833333333333334s" repeatCount="indefinite"></animate>
        </rect>
        <rect x="46.5" y="40" width="7" height="20" rx="5" ry="5" fill="#47bbed" transform="rotate(180 50 50) translate(0 -30)">
          <animate attributeName="opacity" from="1" to="0" dur="0.5s" begin="0.25s" repeatCount="indefinite"></animate>
        </rect>
        <rect x="46.5" y="40" width="7" height="20" rx="5" ry="5" fill="#47bbed" transform="rotate(210 50 50) translate(0 -30)">
          <animate attributeName="opacity" from="1" to="0" dur="0.5s" begin="0.2916666666666667s" repeatCount="indefinite"></animate>
        </rect>
        <rect x="46.5" y="40" width="7" height="20" rx="5" ry="5" fill="#47bbed" transform="rotate(240 50 50) translate(0 -30)">
          <animate attributeName="opacity" from="1" to="0" dur="0.5s" begin="0.3333333333333333s" repeatCount="indefinite"></animate>
        </rect>
        <rect x="46.5" y="40" width="7" height="20" rx="5" ry="5" fill="#47bbed" transform="rotate(270 50 50) translate(0 -30)">
          <animate attributeName="opacity" from="1" to="0" dur="0.5s" begin="0.375s" repeatCount="indefinite"></animate>
        </rect>
        <rect x="46.5" y="40" width="7" height="20" rx="5" ry="5" fill="#47bbed" transform="rotate(300 50 50) translate(0 -30)">
          <animate attributeName="opacity" from="1" to="0" dur="0.5s" begin="0.4166666666666667s" repeatCount="indefinite"></animate>
        </rect>
        <rect x="46.5" y="40" width="7" height="20" rx="5" ry="5" fill="#47bbed" transform="rotate(330 50 50) translate(0 -30)">
          <animate attributeName="opacity" from="1" to="0" dur="0.5s" begin="0.4583333333333333s" repeatCount="indefinite"></animate>
        </rect>
      </svg>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light-none">
      <div class="container-fluid     align-items-start">
        <a class="navbar-brand" href="#">
          <img src="<?php echo base_url(); ?>assets/frontend/images/logo.png" width="100" height="" alt="Logo" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <svg width="35px" height="35px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" id="Editable-line" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><line fill="none" id="XMLID_103_" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="7" x2="25" y1="16" y2="16"/><line fill="none" id="XMLID_102_" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="7" x2="25" y1="25" y2="25"/><line fill="none" id="XMLID_101_" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="7" x2="25" y1="7" y2="7"/></svg>

          <svg class="cl" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 13">
  <polyline class="arrow" fill="none" stroke="#fff" points="1 1,6.5 6.5,12 1"/>
  <polyline class="arrow" fill="none" stroke="#fff" points="1 12,6.5 6.5,12 12"/>
</svg>
        </button>
        <div class="collapse navbar-collapse  justify-content-end" id="navbarSupportedContent">
          <ul id="menu" class="navbar-nav mb-2 mb-lg-0">
            <li data-menuanchor="firstPage" class=" nav-item ">
              <a class="nav-link" href="#firstPage"></a>
            </li>
            <li data-menuanchor="secondPage" class=" nav-item ">
              <a class="nav-link" href="#secondPage">Home</a>
            </li>
            <li data-menuanchor="3rdPage" class="active nav-item dropdown">

                     <a class="nav-link dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" href="<?php echo base_url(); ?>#3rdPage">Our Story </a>
                     <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="<?php echo base_url(); ?>aboutus">  About Us    </a></li>
    <li><a class="dropdown-item" href="<?php echo base_url(); ?>testimonials">Testimonials </a></li>
    <!--li><a class="dropdown-item" href="<?php echo base_url(); ?>gallery">Gallery </a></li!-->
    <li><a class="dropdown-item" href="<?php echo base_url(); ?>faq">FAQs </a></li>
  </ul> 
                  </li>
            <li data-menuanchor="fourth" class="nav-item">
              <a class="nav-link" href="#fourth">Our Promise</a>
            </li>
            <li data-menuanchor="fifth" class="nav-item">
              <a class="nav-link" href="#fifth">Why Choose Us</a>
            </li>
            <li data-menuanchor="six" class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>services/">Our Services</a>
            </li>
             <li data-menuanchor="centers" class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>centers">Locations</a>
            </li>
              <li class="nav-item"><a class="nav-link"  href="<?php echo base_url(); ?>gallery">Gallery </a></li>
            <li data-menuanchor="seven" class="nav-item">
              <a class="nav-link" href="#seven">Contact Us</a>
            </li>
            <li data-menuanchor="eight">
              <div class="togglemenu" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <svg width="35px" height="35px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" id="Editable-line" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><line fill="none" id="XMLID_103_" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="7" x2="25" y1="16" y2="16"/><line fill="none" id="XMLID_102_" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="7" x2="25" y1="25" y2="25"/><line fill="none" id="XMLID_101_" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="7" x2="25" y1="7" y2="7"/></svg>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div id="fullpage">
  <!-- SECTION 0 -->
  <div class="section firstsl" id="section0" style="background:url(<?php echo base_url(); ?>assets/frontend/images/Master-Craft-Website.jpg);background-size: cover;">
    <div class="firstslide" data-aos="fade-down">
      <h1 class="text1"><?php echo get_tag($tags, 'home_section0_h1', 'High On Craftsmanship'); ?></h1>
      <p class="text1"><?php echo get_tag($tags, 'home_section0_p', 'Every Car, A Masterpiece!'); ?></p>
    </div>
  </div>

  <!-- SECTION 1 (CAROUSEL) -->
  <div class="section seconds" id="section1" style="background:url(<?php echo base_url(); ?>assets/frontend/images/slider2.jpg);background-size: cover;">
    <div class="intro secondslider" data-aos="fade-down">
      <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="secondslider">
              <h2><?php echo get_tag($tags, 'home_section1_carousel1_h2', 'Flawless <span>Colour Match</span>'); ?></h2>
              <p><?php echo get_tag($tags, 'home_section1_carousel1_p', 'with precision and technology'); ?></p>
              <div class="strip">
                <img src="<?php echo base_url(); ?>assets/frontend/images/strip.png" alt="<?php echo get_tag($tags, 'home_section1_carousel1_strip_img_alt', 'Decorative strip'); ?>">
              </div>
              <div class="btnclaim">
                <a href="#" data-bs-toggle="modal" data-bs-target="#cta"><?php echo get_tag($tags, 'home_section1_carousel1_btn', 'Unlock Colour Perfection'); ?></a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="secondslider">
              <h2><?php echo get_tag($tags, 'home_section1_carousel2_h2', 'Your Car, <span>Our Canvas</span>'); ?></h2>
              <p><?php echo get_tag($tags, 'home_section1_carousel2_p', 'Artistry in motion'); ?></p>
              <div class="strip">
                <img src="<?php echo base_url(); ?>assets/frontend/images/strip.png" alt="<?php echo get_tag($tags, 'home_section1_carousel2_strip_img_alt', 'Decorative strip'); ?>">
              </div>
              <div class="btnclaim">
                <a href="#" data-bs-toggle="modal" data-bs-target="#cta"><?php echo get_tag($tags, 'home_section1_carousel2_btn', 'Craft Your Automotive Artistry'); ?></a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="secondslider">
              <h2><?php echo get_tag($tags, 'home_section1_carousel3_h2', 'Express <span>Repair With</span>'); ?></h2>
              <p><?php echo get_tag($tags, 'home_section1_carousel3_p', 'innovative solutions'); ?></p>
              <div class="strip">
                <img src="<?php echo base_url(); ?>assets/frontend/images/strip.png" alt="<?php echo get_tag($tags, 'home_section1_carousel3_strip_img_alt', 'Decorative strip'); ?>">
              </div>
              <div class="btnclaim">
                <a href="#" data-bs-toggle="modal" data-bs-target="#cta"><?php echo get_tag($tags, 'home_section1_carousel3_btn', 'Step Into Excellence'); ?></a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="secondslider">
              <h2><?php echo get_tag($tags, 'home_section1_carousel4_h2', 'Phenomenal <span>Finish With</span>'); ?></h2>
              <p><?php echo get_tag($tags, 'home_section1_carousel4_p', 'skilled craftsmanship'); ?></p>
              <div class="strip">
                <img src="<?php echo base_url(); ?>assets/frontend/images/strip.png" alt="<?php echo get_tag($tags, 'home_section1_carousel4_strip_img_alt', 'Decorative strip'); ?>">
              </div>
              <div class="btnclaim">
                <a href="#" data-bs-toggle="modal" data-bs-target="#cta"><?php echo get_tag($tags, 'home_section1_carousel4_btn', 'Discover Our Craft'); ?></a>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden"><?php echo get_tag($tags, 'home_section1_carousel_prev_text', 'Previous'); ?></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden"><?php echo get_tag($tags, 'home_section1_carousel_next_text', 'Next'); ?></span>
        </button>
      </div>
    </div>
  </div>

  <!-- SECTION 2 -->
  <div class="section thirds" id="section2" style="background:url(<?php echo base_url(); ?>assets/frontend/images/slider3.jpg);background-size: cover;">
    <div class="intro">
      <div class="thirdslider">
        <div class="container">
          <div class="row">
            <div class="col-md-4 d-flex align-items-center justify-content-center">
              <div class="content" data-aos="fade-left">
                <p><?php echo get_tag($tags, 'home_section2_left_p1', 'We are Mastercraft - driven by innovation, powered by Nippon Paints'); ?></p>
                <p><?php echo get_tag($tags, 'home_section2_left_p2', 'Mastercraft understands your love for flawless car 
                  finishes. As a pioneer in automative  paints 
                  manufacturing entering direct retailing, we offer
                  expert colour and detailing services.'); ?></p>
                <p><?php echo get_tag($tags, 'home_section2_left_p3', 'Whether you seek restoration to showroom glory or 
                  desire customization beyond imagination,
                  Mastercraft is your destination. Our swift, tech-driven
                  solution ensure a perfect match every time.'); ?></p>
                <p><?php echo get_tag($tags, 'home_section2_left_p4', 'Join us to effortlessly transform your car into a 
                  masterpiece of  automotive aesthetics.'); ?></p>
              </div>
            </div>
            <div class="col-md-8">
              <div class="secondslider"  data-aos="fade-right">
                <h2><?php echo get_tag($tags, 'home_section2_right_h2', 'Our Story <span>Crafting Flawless</span> <span>Paint Finishes</span>'); ?></h2>
                <div class="strip">
                  <img src="<?php echo base_url(); ?>assets/frontend/images/strip.png" alt="<?php echo get_tag($tags, 'home_section2_right_strip_img_alt', 'Decorative strip'); ?>">
                </div>
                <div class="btnclaim">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#cta"><?php echo get_tag($tags, 'home_section2_right_btn', 'Book Your Mastercraft Journey Today'); ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- SECTION 3 -->
  <div class="section fourtss" id="section3" style="background:url(<?php echo base_url(); ?>assets/frontend/images/slider4.jpg);background-size: cover;">
    <div class="intro fourths">
      <div class="container">
        <div class="row" data-aos="zoom-in">
          <div class="col-md-6">
            <div class="secondslider">
              <h2>
                <?php echo get_tag($tags, 'home_section3_left_h2', 'Our Promise <span>A Commitment To</span> <span>Excellence</span>'); ?>
              </h2>
              <div class="strip">
                <img src="<?php echo base_url(); ?>assets/frontend/images/strip_s.png" alt="<?php echo get_tag($tags, 'home_section3_left_strip_img_alt', 'Decorative strip'); ?>">
              </div>
              <div class="btnclaim">
                <a href="#" data-bs-toggle="modal" data-bs-target="#cta">
                  <?php echo get_tag($tags, 'home_section3_left_btn', 'Book to experience our promise'); ?>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-center justify-content-center flex-wrap relative">
            <div class="owl-carousel sliderp">
              <div>
                <p>
                  <span><?php echo get_tag($tags, 'home_section3_feature1_span', 'Exemplary Paintwork'); ?></span>
                  <?php echo get_tag($tags, 'home_section3_feature1_text', 'High-quality, eco-friendly paints for a stunning finish.'); ?>
                </p>
              </div>
              <div>
                <p>
                  <span><?php echo get_tag($tags, 'home_section3_feature2_span', 'Precision Repairs'); ?></span>
                  <?php echo get_tag($tags, 'home_section3_feature2_text', 'Quick and seamless repair services with superior finishes.'); ?>
                </p>
              </div>
              <div>
                <p>
                  <span><?php echo get_tag($tags, 'home_section3_feature3_span', 'Luxe Interiors'); ?></span>
                  <?php echo get_tag($tags, 'home_section3_feature3_text', 'Enhancing the interior aesthetics of your vehicle.'); ?>
                </p>
              </div>
              <div>
                <p>
                  <span><?php echo get_tag($tags, 'home_section3_feature4_span', 'Exclusive Services'); ?></span>
                  <?php echo get_tag($tags, 'home_section3_feature4_text', 'Personalized options for clients seeking unique detailing solutions.'); ?>
                </p>
              </div>
              <div>
                <p>
                  <span><?php echo get_tag($tags, 'home_section3_feature5_span', 'Artisanal Detailing'); ?></span>
                  <?php echo get_tag($tags, 'home_section3_feature5_text', 'Meticulous craftsmanship employed for detailing services.'); ?>
                </p>
              </div>
            </div>
            <div class="col-md-6s d-flex align-items-center justify-content-between">
              <div class="col">
                <div class="block">
                  <img src="<?php echo base_url(); ?>assets/frontend/images/icon1.png" alt="<?php echo get_tag($tags, 'home_section3_icon1_img_alt', 'Precise Paint Match'); ?>">
                  <p><?php echo get_tag($tags, 'home_section3_icon1_p', 'Precise Paint Match'); ?></p>
                </div>
              </div>
              <div class="col">
                <div class="block">
                  <img src="<?php echo base_url(); ?>assets/frontend/images/icon2.png" alt="<?php echo get_tag($tags, 'home_section3_icon2_img_alt', 'Skilled Craftsmen'); ?>">
                  <p><?php echo get_tag($tags, 'home_section3_icon2_p', 'Skilled Craftsmen'); ?></p>
                </div>
              </div>
              <div class="col">
                <div class="block">
                  <img src="<?php echo base_url(); ?>assets/frontend/images/icon3.png" alt="<?php echo get_tag($tags, 'home_section3_icon3_img_alt', 'Technology Integration'); ?>">
                  <p><?php echo get_tag($tags, 'home_section3_icon3_p', 'Technology Integration'); ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- SECTION 4 -->
  <div class="section fifthss" id="section4" style="background:url(<?php echo base_url(); ?>assets/frontend/images/slider5.jpg);background-size: cover;">
    <div class="intro fifths">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="secondslider" data-aos="fade-down">
              <h2>
                <?php echo get_tag($tags, 'home_section4_h2', 'Why Choose Us <span>Choose Innovation, Drive Perfection</span>'); ?>
              </h2>
              <div class="strip">
                <img src="<?php echo base_url(); ?>assets/frontend/images/strip.png" alt="<?php echo get_tag($tags, 'home_section4_strip_img_alt', 'Decorative strip'); ?>">
              </div>
              <div class="col-lg-6 m-auto" data-aos="fade-down">
                <div class="hc-saying__carousel">
                  <div class="hc-saying__carousel__item">

                    <div class="hc-saying__carousel__item__card">
                      <div class="whychoose">
                        <div class="hc-saying__carousel__item__card--reviewer">
                          <div class="hc-saying__carousel__item__card--reviewer--image">
                            <img src="<?php echo base_url(); ?>assets/frontend/images/w1.png" width="55" height="50" alt="<?php echo get_tag($tags, 'home_section4_carousel1_img_alt', 'AI Colour Match'); ?>">
                          </div>
                        </div>
                        <div class="hc-saying__carousel__item__card--content">
                          <p class="hc-saying__carousel__item__card--content--text"><?php echo get_tag($tags, 'home_section4_carousel1_p', 'AI Colour Match'); ?></p>
                          <span><?php echo get_tag($tags, 'home_section4_carousel1_span', 'Precise colour match for every shade, every time.'); ?></span>
                        </div>
                      </div>
                    </div>

                    <div class="hc-saying__carousel__item__card">
                      <div class="whychoose">
                        <div class="hc-saying__carousel__item__card--reviewer">
                          <div class="hc-saying__carousel__item__card--reviewer--image">
                            <img src="<?php echo base_url(); ?>assets/frontend/images/w2.png" width="55" height="55" alt="<?php echo get_tag($tags, 'home_section4_carousel2_img_alt', 'Concierge Services'); ?>">
                          </div>
                        </div>
                        <div class="hc-saying__carousel__item__card--content">
                          <p class="hc-saying__carousel__item__card--content--text"><?php echo get_tag($tags, 'home_section4_carousel2_p', 'Concierge Services'); ?></p>
                          <span><?php echo get_tag($tags, 'home_section4_carousel2_span', 'Doorstep convenience with pick-and-drop.'); ?></span>
                        </div>
                      </div>
                    </div>

                    <div class="hc-saying__carousel__item__card">
                      <div class="whychoose">
                        <div class="hc-saying__carousel__item__card--reviewer">
                          <div class="hc-saying__carousel__item__card--reviewer--image">
                            <img src="<?php echo base_url(); ?>assets/frontend/images/w3.png" width="55" height="55" alt="<?php echo get_tag($tags, 'home_section4_carousel3_img_alt', 'Velocity Repair'); ?>">
                          </div>
                        </div>
                        <div class="hc-saying__carousel__item__card--content">
                          <p class="hc-saying__carousel__item__card--content--text"><?php echo get_tag($tags, 'home_section4_carousel3_p', 'Velocity Repair'); ?></p>
                          <span><?php echo get_tag($tags, 'home_section4_carousel3_span', 'Express repairs to transform your ride before sunset.'); ?></span>
                        </div>
                      </div>
                    </div>

                    <div class="hc-saying__carousel__item__card">
                      <div class="whychoose">
                        <div class="hc-saying__carousel__item__card--reviewer">
                          <div class="hc-saying__carousel__item__card--reviewer--image">
                            <img src="<?php echo base_url(); ?>assets/frontend/images/waterbasedpaints.png" width="55" height="55" alt="<?php echo get_tag($tags, 'home_section4_carousel4_img_alt', 'Water-borne paints'); ?>">
                          </div>
                        </div>
                        <div class="hc-saying__carousel__item__card--content">
                          <p class="hc-saying__carousel__item__card--content--text"><?php echo get_tag($tags, 'home_section4_carousel4_p', 'Water-borne paints'); ?></p>
                          <span><?php echo get_tag($tags, 'home_section4_carousel4_span', 'Timeless finishes with sustainable paints.'); ?></span>
                        </div>
                      </div>
                    </div>

                    <div class="hc-saying__carousel__item__card">
                      <div class="whychoose">
                        <div class="hc-saying__carousel__item__card--reviewer">
                          <div class="hc-saying__carousel__item__card--reviewer--image">
                            <img src="<?php echo base_url(); ?>assets/frontend/images/LowVOCSolution.png" width="55" height="55" alt="<?php echo get_tag($tags, 'home_section4_carousel5_img_alt', 'Low VOC Solution'); ?>">
                          </div>
                        </div>
                        <div class="hc-saying__carousel__item__card--content">
                          <p class="hc-saying__carousel__item__card--content--text"><?php echo get_tag($tags, 'home_section4_carousel5_p', 'Low VOC Solution'); ?></p>
                          <span><?php echo get_tag($tags, 'home_section4_carousel5_span', "Innovative low VOC solutions for your well-being and the Planet's."); ?></span>
                        </div>
                      </div>
                    </div>

                    <div class="hc-saying__carousel__item__card">
                      <div class="whychoose">
                        <div class="hc-saying__carousel__item__card--reviewer">
                          <div class="hc-saying__carousel__item__card--reviewer--image">
                            <img src="<?php echo base_url(); ?>assets/frontend/images/NewGenerationPPF.png" width="55" height="55" alt="<?php echo get_tag($tags, 'home_section4_carousel6_img_alt', 'New Generation PPF'); ?>">
                          </div>
                        </div>
                        <div class="hc-saying__carousel__item__card--content">
                          <p class="hc-saying__carousel__item__card--content--text"><?php echo get_tag($tags, 'home_section4_carousel6_p', 'New Generation PPF'); ?></p>
                          <span><?php echo get_tag($tags, 'home_section4_carousel6_span', 'Future-proof your car’s shine with advanced paint protection.'); ?></span>
                        </div>
                      </div>
                    </div>

                    <div class="hc-saying__carousel__item__card">
                      <div class="whychoose">
                        <div class="hc-saying__carousel__item__card--reviewer">
                          <div class="hc-saying__carousel__item__card--reviewer--image">
                            <img src="<?php echo base_url(); ?>assets/frontend/images/DryWash.png" width="55" height="55" alt="<?php echo get_tag($tags, 'home_section4_carousel7_img_alt', 'Dry Wash'); ?>">
                          </div>
                        </div>
                        <div class="hc-saying__carousel__item__card--content">
                          <p class="hc-saying__carousel__item__card--content--text"><?php echo get_tag($tags, 'home_section4_carousel7_p', 'Dry Wash'); ?></p>
                          <span><?php echo get_tag($tags, 'home_section4_carousel7_span', 'Immaculate cleaning with minimal water waste.'); ?></span>
                        </div>
                      </div>
                    </div>

                    <div class="hc-saying__carousel__item__card">
                      <div class="whychoose">
                        <div class="hc-saying__carousel__item__card--reviewer">
                          <div class="hc-saying__carousel__item__card--reviewer--image">
                            <img src="<?php echo base_url(); ?>assets/frontend/images/CeramicCoating.png" width="55" height="55" alt="<?php echo get_tag($tags, 'home_section4_carousel8_img_alt', 'Ceramic Coating 10H'); ?>">
                          </div>
                        </div>
                        <div class="hc-saying__carousel__item__card--content">
                          <p class="hc-saying__carousel__item__card--content--text"><?php echo get_tag($tags, 'home_section4_carousel8_p', 'Ceramic Coating 10H'); ?></p>
                          <span><?php echo get_tag($tags, 'home_section4_carousel8_span', 'Lock in brilliance with the toughest ceramic shield.'); ?></span>
                        </div>
                      </div>
                    </div>

                  </div><!-- Carousel Item End -->
                </div><!-- hc-saying__carousel End -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="section sixss" id="section5" style="background:url(<?php echo base_url(); ?>assets/frontend/images/slider-6.jpg);background-size: cover; overflow:hidden" >
  <div class="intro">
    <div class="secondslider Services">
      <div id="carouselExampleControlss" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner"  >
          <div class="carousel-item active" style="background:url(<?php echo base_url(); ?>assets/frontend/images/slider6.jpg);background-size: cover;">
            <h2 data-aos="fade-up"  data-aos-duration="500">
              <?php echo get_tag('section5', 'h2', 'main_carousel_active_h2'); ?>
              <span><?php echo get_tag('section5', 'h2', 'main_carousel_active_h2_span1'); ?></span>
              <span><?php echo get_tag('section5', 'h2', 'main_carousel_active_h2_span2'); ?></span>
            </h2>
            <div class="strip">
              <img src="<?php echo base_url(); ?>assets/frontend/images/strip_s.png" data-aos="fade-up"  data-aos-duration="500"
                   alt="<?php echo get_tag('section5', 'alt', 'strip_img'); ?>">
            </div>
            <div class="service-covermovile" data-aos="fade-up"  data-aos-duration="500">
              <img src="<?php echo base_url(); ?>assets/frontend/images/mbjeep1.png" data-aos="fade-up"
                   alt="<?php echo get_tag('section5', 'alt', 'mbjeep1_img'); ?>">
            </div>
            <div class="service-cover" data-aos="fade-up"  data-aos-duration="500">
              <img src="<?php echo base_url(); ?>assets/frontend/images/jeep.png" data-aos="fade-up"  data-aos-duration="500" height="386"
                   alt="<?php echo get_tag('section5', 'alt', 'jeep_img'); ?>">
              <div class="paint-protection">
                <h3 class="tooltips">
                  <?php echo get_tag('section5', 'h3', 'paint_protection_h3'); ?>
                  <div class="circle red"></div>
                  <div class="tooltipstext">
                    <?php echo get_tag('section5', 'h4', 'paint_protection_h4'); ?>
                  </div>
                </h3>
              </div>
              <div class="detailing ">
                <h3 class="tooltips">
                  <?php echo get_tag('section5', 'h3', 'detailing_h3'); ?>
                  <div class="circle red"></div>
                  <div class="tooltipstext">
                    <?php echo get_tag('section5', 'h4', 'detailing_h4'); ?>
                  </div>
                </h3>
              </div>
              <div class="restoration">
                <h3 class="tooltips">
                  <?php echo get_tag('section5', 'h3', 'restoration_h3'); ?>
                  <div class="circle red"></div>
                  <div class="tooltipstext">
                    <?php echo get_tag('section5', 'h4', 'restoration_h4'); ?>
                  </div>
                </h3>
              </div>
              <div class="coating">
                <h3 class="tooltips">
                  <?php echo get_tag('section5', 'h3', 'coating_h3'); ?>
                  <div class="circle red"></div>
                  <div class="tooltipstext">
                    <?php echo get_tag('section5', 'h4', 'coating_h4'); ?>
                  </div>
                </h3>
              </div>
              <div class="filo">
                <h3 class="tooltips">
                  <?php echo get_tag('section5', 'h3', 'filo_h3'); ?>
                  <div class="circle red"></div>
                  <div class="tooltipstext">
                    <?php echo get_tag('section5', 'h4', 'filo_h4'); ?>
                  </div>
                </h3>
              </div>
              <div class="alloy-wheel">
                <h3 class="tooltips">
                  <?php echo get_tag('section5', 'h3', 'alloy_wheel_h3'); ?>
                  <div class="circle red"></div>
                  <div class="tooltipstext">
                    <?php echo get_tag('section5', 'h4', 'alloy_wheel_h4'); ?>
                  </div>
                </h3>
              </div>
              <div class="headlamp">
                <h3 class="tooltips">
                  <?php echo get_tag('section5', 'h3', 'headlamp_h3'); ?>
                  <div class="circle red"></div>
                  <div class="tooltipstext">
                    <?php echo get_tag('section5', 'h4', 'headlamp_h4'); ?>
                  </div>
                </h3>
              </div>
              <div class="engine">
                <h3 class="tooltips">
                  <?php echo get_tag('section5', 'h3', 'engine_h3'); ?>
                  <div class="circle red"></div>
                  <div class="tooltipstext">
                    <?php echo get_tag('section5', 'h4', 'engine_h4'); ?>
                  </div>
                </h3>
              </div>
              <div class="anti-rust">
                <h3 class="tooltips">
                  <?php echo get_tag('section5', 'h3', 'anti_rust_h3'); ?>
                  <div class="circle red"></div>
                  <div class="tooltipstext">
                    <?php echo get_tag('section5', 'h4', 'anti_rust_h4'); ?>
                  </div>
                </h3>
              </div>
            </div>
          </div>
          <div class="carousel-item repairitm" style="background:url(<?php echo base_url(); ?>assets/frontend/images/slider-6.jpg);background-size: cover;">
            <h2 data-aos="fade-up"  data-aos-duration="500">
              <?php echo get_tag('section5', 'h2', 'carousel_repair_h2'); ?>
              <span><?php echo get_tag('section5', 'h2', 'carousel_repair_h2_span'); ?></span>
            </h2>
            <div class="strip">
              <img src="<?php echo base_url(); ?>assets/frontend/images/strip_s.png"data-aos="fade-up"  data-aos-duration="500"
                   alt="<?php echo get_tag('section5', 'alt', 'carousel_repair_strip_img'); ?>">
            </div>
            <p class="restore"><?php echo get_tag('section5', 'h4', 'carousel_repair_restore_h4'); ?></p>
            <div class="service-covermovile" data-aos="fade-up"  data-aos-duration="500">
              <img src="<?php echo base_url(); ?>assets/frontend/images/mbc.png" data-aos="fade-up"
                   alt="<?php echo get_tag('section5', 'alt', 'repair_mbc_img'); ?>">
            </div>
            <div class="service-cover" data-aos="fade-up"  data-aos-duration="500"> 
              <img src="<?php echo base_url(); ?>assets/frontend/images/car.png" data-aos="fade-up"  data-aos-duration="500" height="329"
                   alt="<?php echo get_tag('section5', 'alt', 'repair_car_img'); ?>">
              <div class="front-bumper">
                <h3 class="tooltips">
                  <?php echo get_tag('section5', 'h3', 'front_bumper_h3'); ?>
                  <div class="tooltipstext"><?php echo get_tag('section5', 'h4', 'front_bumper_h4'); ?></div>
                </h3>
              </div>
              <div class="bonnet">
                <h3 class="tooltips">
                  <?php echo get_tag('section5', 'h3', 'bonnet_h3'); ?>
                </h3>
              </div>
              <div class="rear-door">
                <h3 class="tooltips">
                  <?php echo get_tag('section5', 'h3', 'rear_door_h3'); ?>
                                </h3>
            </div>
            <div class="roof">
              <h3 class="tooltips">
                <?php echo get_tag('section5', 'h3', 'roof_h3'); ?>
              </h3>
            </div>
            <div class="boot">
              <h3 class="tooltips">
                <?php echo get_tag('section5', 'h3', 'boot_h3'); ?>
              </h3>
            </div>
            <div class="front-door">
              <h3 class="tooltips">
                <?php echo get_tag('section5', 'h3', 'front_door_h3'); ?>
              </h3>
            </div>
            <div class="fender">
              <h3 class="tooltips">
                <?php echo get_tag('section5', 'h3', 'fender_h3'); ?>
              </h3>
            </div>
            <div class="quarter">
              <h3 class="tooltips">
                <?php echo get_tag('section5', 'h3', 'quarter_panel_h3'); ?>
              </h3>
            </div>
            <div class="rear-bumper">
              <h3 class="tooltips">
                <?php echo get_tag('section5', 'h3', 'rear_bumper_h3'); ?>
              </h3>
            </div>
            <div class="running-board">
              <h3 class="tooltips">
                <?php echo get_tag('section5', 'h3', 'running_board_h3'); ?>
              </h3>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlss" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden"><?php echo get_tag('section5', 'h5', 'carousel_prev_label_h5'); ?></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlss" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden"><?php echo get_tag('section5', 'h5', 'carousel_next_label_h5'); ?></span>
      </button>
    </div>
  </div>
</div>
</div>

<div class="section sevess" id="section6" style="background:url(<?php echo base_url(); ?>assets/frontend/images/slider7.jpg);background-size: cover;">
  <div class="intro contact">
    <div class="container">
      <div class="row">
        <div class="col-md-7" data-aos="fade-left">
          <div class="secondslider" >
            <h2>
              <?php echo get_tag('section6', 'h2', 'contactus_main_h2'); ?>
            </h2>
            <p>Ready to transform your automotive <br>canvas into a masterpiece of radiant <br> colors and unmatched detailing? </p>
          </div>
        </div>
        <div class="col-md-4 d-flex align-items-center justify-content-center" data-aos="fade-right">
          <div class="card">
            <div class="card-body">
              <h3>
                <?php echo get_tag('section6', 'h3', 'contact_card_h3'); ?>
              </h3>
              <form id="contact_form" name="contact_form" method="post">
                <div class=" row">
                  <div class="col-md-12">
                    <label>SELECT YOUR CAR MAKE</label>
                    <select class="form-control form-select brand_id" id="" onchange="handleChange(this);" required>
                      <option value=""></option>
                      <?php foreach($allBrands as $row){ ?>
                        <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="col-md-12">
                    <label>SELECT YOUR CAR MODEL</label>
                    <select class="form-control form-select modal_id" id="_car_modal_" required>
                      <option></option>
                    </select>
                  </div>
                  <div class="col-md-12">
                    <label for="services">SELECT YOUR CAR SERVICE</label>
                    <select name="service" id="service" class="form-control form-select service" required>
                        <option value=""></option>
                        <option value="Dent Beating and Painting">Dent Beating and Painting</option>
                        <option value="Velocity Repai">Velocity Repair</option>
                        <option value="Car Care Service">Car Care Service</option>
                        <option value="Car Washing - Quick Wash">&nbsp;&nbsp;&nbsp;&nbsp;Car Washing - Quick Wash</option>
                        <option value="Car Washing - Deep Cleaning">&nbsp;&nbsp;&nbsp;&nbsp;Car Washing - Deep Cleaning</option>
                        <option value="Ceramic Coating">&nbsp;&nbsp;&nbsp;&nbsp;Ceramic Coating</option>
                        <option value="Detailing - Interior and Exterior">&nbsp;&nbsp;&nbsp;&nbsp;Detailing - Interior and Exterior</option>
                        <option value="Paint Protection Film (PPF)">&nbsp;&nbsp;&nbsp;&nbsp;Paint Protection Film (PPF)</option>
                        <option value="Car Wax">&nbsp;&nbsp;&nbsp;&nbsp;Car Wax</option>
                        <option value="Anti Rust Coating">&nbsp;&nbsp;&nbsp;&nbsp;Anti Rust Coating</option>
                        <option value="Car Repair Service">Car Repair Service</option>
                        <option value="Wheel Care">Wheel Care</option>
                        <option value="Engine Care">Engine Care</option>
                        <option value="Headlamp Restoration">Headlamp Restoration</option>
                    </select>
                  </div>
                </div>
                <div class=" row">
                  <div class="col-md-12">
                    <label for="email_addr">FULL NAME</label>
                    <input type="text" required maxlength="50" class="form-control full_name" id="name" name="name" placeholder="" required>
                  </div>
                  <div class="col-md-12">
                    <label for="phone_input">PHONE</label>
                    <input type="text"  
                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" 
                           maxlength="10" minlength="10" class="form-control phone_number" id="phone_input" name="Phone" placeholder="" required>
                  </div>
                  <div class="col-md-12">
                    <label for="message">MESSAGE</label>
                    <textarea class="form-control message" id="message" name="message" rows="2" required></textarea>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary px-4 btn-lg" id="contatSubmit">
                  <?php echo get_tag('section6', 'h4', 'contact_card_submit_h4'); ?>
                </button>
              </form>
              <form action="#" method="post" id="createbookingOtp" style="display: none;">
                <br>
                <h3 class="heading-small" style="font-size: 18px;">
                  <?php echo get_tag('section6', 'h3', 'otp_verify_heading_h3'); ?>
                </h3>
                <p>
                  <?php echo get_tag('section6', 'h4', 'otp_entry_h4'); ?>
                  +91-<span class="entered_phone_no">9205114537</span> <br>
                </p>
                <div class="form-group mb-3">
                  <input type="text" name="otp" class="form-control" id="otp"
                         oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" 
                         maxlength="6" title="Please enter OTP" value="" aria-required="true" aria-invalid="false" placeholder="Enter OTP">
                  <input type="hidden" name="" id="brand_id">
                  <input type="hidden" name="" id="modal_id">
                  <input type="hidden" name="" id="full_name">
                  <input type="hidden" name="" id="mobile">
                  <input type="hidden" name="" id="message">
                  <input type="hidden" name="" id="service">
                </div>
                <div class="resend-otp1" style="display: flex;gap:10px;">
                  <span class="resend-otp-text">
                    <?php echo get_tag('section6', 'h5', 'otp_resend_text_h5'); ?>
                  </span>
                  <span class="resend-otp-link" style="display: none;">
                      <a class="use-ajax" href="javascript:void(0)" id="resend-otp" data-once="ajax" onclick="resendOTP();">
                        <?php echo get_tag('section6', 'h5', 'otp_resend_link_h5'); ?>
                      </a>
                  </span>:
                  <div id="timer" class="timer">0:59</div>
                </div>
                <div class="form-group text-center formsubbtn">
                  <button type="submit" class="btn btn-primary px-4 btn-lg">
                    <?php echo get_tag('section6', 'h5', 'otp_submit_btn_h5'); ?>
                  </button> 
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </div>
</div>
<div class="section eightss" id="section7" style="background:url(<?php echo base_url(); ?>assets/frontend/images/slider8.jpg);background-size: cover;">
  <div class="intro fooetrs">
    <div class="container">
      <footer class="d-flex justify-content-between flex-column">
        <div class="row" data-aos="fade-down">
          <div class="col-6">
            <a class="navbar-brand" href="#">
              <img src="<?php echo base_url(); ?>assets/frontend/images/logo.png" width="100" height="" alt="<?php echo get_tag('section7', 'alt', 'logo_img_alt'); ?>">
            </a>
            <p class="overviewf">
              <?php echo get_tag('section7', 'h4', 'footer_overview_h4'); ?>
            </p>
            <ul class="list-unstyled d-flex socila">
              <li class="ms-">
                <a target="_blank" class="link-dark" href="https://www.instagram.com/mastercraft_autoservices/">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="ms-3">
                <a target="_blank" class="link-dark" href="https://www.youtube.com/@MastercraftAutomotiveServices">
                  <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
              </li>
              <li class="ms-3">
                <a target="_blank" class="link-dark" href="https://www.linkedin.com/company/mastercraftautoservicesindia">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
              </li>
              <li class="ms-3">
                <a target="_blank" class="link-dark" href="https://www.facebook.com/mastercraftautomotiveservices">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-3">
            <h5>
              <?php echo get_tag('section7', 'h5', 'footer_quicklink_h5'); ?>
            </h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2" data-menuanchor="3rdPage">
                <a href="<?php echo base_url(); ?>aboutus" class="nav-link p-0 ">
                  <?php echo get_tag('section7', 'h5', 'footer_aboutus_h5'); ?>
                </a>
              </li>
              <li class="nav-item mb-2"  data-menuanchor="six" >
                <a href="#six" class="nav-link p-0 ">
                  <?php echo get_tag('section7', 'h5', 'footer_services_h5'); ?>
                </a>
              </li>
              <li class="nav-item mb-2" data-menuanchor="seven">
                <a href="#seven" class="nav-link p-0 ">
                  <?php echo get_tag('section7', 'h5', 'footer_booknow_h5'); ?>
                </a>
              </li>
              <li class="nav-item mb-2" data-menuanchor="seven">
                <a href="https://www.mastercraftauto.co.in/faq" class="nav-link p-0 ">
                  <?php echo get_tag('section7', 'h5', 'footer_faqs_h5'); ?>
                </a>
              </li>
              <li class="nav-item mb-2" data-menuanchor="seven">
                <a href="https://www.mastercraftauto.co.in/testimonials" class="nav-link p-0 ">
                  <?php echo get_tag('section7', 'h5', 'footer_testimonials_h5'); ?>
                </a>
              </li>
              <li class="nav-item mb-2" data-menuanchor="seven">
                <a href="https://www.mastercraftauto.co.in/insurance" class="nav-link p-0 ">
                  <?php echo get_tag('section7', 'h5', 'footer_insurance_h5'); ?>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-3 pl-0">
            <h5>
              <?php echo get_tag('section7', 'h5', 'footer_contactus_h5'); ?>
            </h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2">
                <a class="nav-link p-0 " href="https://g.co/kgs/URFhWZx" target="_blank">
                  <?php echo get_tag('section7', 'h5', 'footer_addr_h5'); ?>
                </a>
              </li>
              <li class="nav-item mb-2 bricj">
                <?php echo get_tag('section7', 'h5', 'footer_phone_h5'); ?>:
                <a href="tel:9873889977" class="nav-link p-0 ">9873889977</a>,
                <a href="tel:9773592294" class="nav-link p-0 ">9773592294</a>,
              </li>
              <li class="nav-item mb-2 bricj">
                &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<a href="tel:9773592295" class="nav-link p-0 ">9773592295</a>,<a href="tel:9773592291" class="nav-link p-0 ">9773592291</a>
              </li>
              <li class="nav-item mb-2">
                <a href="mailto:bodyshop.mastercraftggn@nipponpaint.co.in" class="nav-link p-0">
                  <?php echo get_tag('section7', 'h5', 'footer_email_h5'); ?>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="d-flex justify-content-between py-4 my-4 " data-aos="fade-down"> 
          <p class="Copyright">
            <?php echo get_tag('section7', 'h5', 'footer_copyright_h5'); ?>
          </p>
          <!--ul class="list-unstyled d-flex">
            <li class="nav-item mb-2">
              <a href="#" class="nav-link p-0 text-">Sitemap</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#" class="nav-link p-0 text-">Terms & Conditions</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#" class="nav-link p-0 text-">Privacy</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#" class="nav-link p-0 text-">Disclaimer</a>
            </li>
          </ul-->
        </div>
      </footer>
    </div>
  </div>
</div>
</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">
      <?php echo get_tag('offcanvas', 'h5', 'offcanvas_heading_h5'); ?>
    </h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul id="menu" class="nav nav-pills flex-column">
      <li data-menuanchor="firstPage" class="nav-item p-0">
        <a class="nav-link" href="#firstPage"><?php echo get_tag('offcanvas', 'h5', 'menu_firstpage_h5'); ?></a>
      </li>
      <li data-menuanchor="secondPage" class="nav-item">
        <a class="nav-link" href="#secondPage"><?php echo get_tag('offcanvas', 'h5', 'menu_home_h5'); ?></a>
      </li>
      <li data-menuanchor="3rdPage" class="nav-item">
        <a class="nav-link" href="#3rdPage"><?php echo get_tag('offcanvas', 'h5', 'menu_ourstory_h5'); ?></a>
      </li>
      <li data-menuanchor="fourth" class="nav-item">
        <a class="nav-link" href="#fourth"><?php echo get_tag('offcanvas', 'h5', 'menu_ourpromise_h5'); ?></a>
      </li>
      <li data-menuanchor="fifth" class="nav-item">
        <a class="nav-link" href="#fifth"><?php echo get_tag('offcanvas', 'h5', 'menu_whychooseus_h5'); ?></a>
      </li>
      <li data-menuanchor="six" class="nav-item">
        <a class="nav-link" href="#six"><?php echo get_tag('offcanvas', 'h5', 'menu_services_h5'); ?></a>
      </li>
      <li data-menuanchor="seven" class="nav-item">
        <a class="nav-link" href="#seven"><?php echo get_tag('offcanvas', 'h5', 'menu_contactus_h5'); ?></a>
      </li>
    </ul>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="cta" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body modal-dialog-centered">
        <div class="intro contact">
          <div class="container">
            <div class="row">
              <div class="col-md-12 d-flex align-items-center justify-content-center" data-aos="fade-right">
                <div class="card">
                  <div class="card-body">
                    <h3>
                      <?php echo get_tag('modal', 'h3', 'modal_letsconnect_h3'); ?>
                    </h3>
                    <form id="contact_formPop" name="contact_form" method="post">
                      <div class="row">
                        <div class="col-md-12">
                          <label>SELECT YOUR CAR MAKE</label>
                          <select class="form-control form-select brand_id" id="" onchange="handleChangePop(this);" required>
                            <option value=""></option>
                            <?php foreach($allBrands as $row){ ?>
                              <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="col-md-12">
                          <label>SELECT YOUR CAR MODEL</label>
                          <select class="form-control form-select modal_id" id="_car_modal_" required>
                            <option></option>
                          </select>
                        </div>
                        <div class="col-md-12">
                          <label for="services">SELECT YOUR CAR SERVICE</label>
                          <select name="service" id="service" class="form-control form-select service" required>
                            <option value=""></option>
                            <option value="Dent Beating and Painting">Dent Beating and Painting</option>
                            <option value="Velocity Repai">Velocity Repair</option>
                            <option value="Car Care Service">Car Care Service</option>
                            <option value="Car Washing - Quick Wash">&nbsp;&nbsp;&nbsp;&nbsp;Car Washing - Quick Wash</option>
                            <option value="Car Washing - Deep Cleaning">&nbsp;&nbsp;&nbsp;&nbsp;Car Washing - Deep Cleaning</option>
                            <option value="Ceramic Coating">&nbsp;&nbsp;&nbsp;&nbsp;Ceramic Coating</option>
                            <option value="Detailing - Interior and Exterior">&nbsp;&nbsp;&nbsp;&nbsp;Detailing - Interior and Exterior</option>
                            <option value="Paint Protection Film (PPF)">&nbsp;&nbsp;&nbsp;&nbsp;Paint Protection Film (PPF)</option>
                            <option value="Car Wax">&nbsp;&nbsp;&nbsp;&nbsp;Car Wax</option>
                            <option value="Anti Rust Coating">&nbsp;&nbsp;&nbsp;&nbsp;Anti Rust Coating</option>
                            <option value="Car Repair Service">Car Repair Service</option>
                            <option value="Wheel Care">Wheel Care</option>
                            <option value="Engine Care">Engine Care</option>
                            <option value="Headlamp Restoration">Headlamp Restoration</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <label for="email_addr">FULL NAME</label>
                          <input type="text" required maxlength="50" class="form-control full_name" id="name" name="name" placeholder="" required>
                        </div>
                        <div class="col-md-12">
                          <label for="phone_input">PHONE</label>
                          <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10" minlength="10" class="form-control phone_number" id="phone_input" name="Phone" placeholder="" required>
                        </div>
                        <div class="col-md-12">
                          <label for="message">MESSAGE</label>
                          <textarea class="form-control message" id="message" name="message" rows="2" required></textarea>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary px-4 btn-lg" id="contatSubmit">
                        <?php echo get_tag('modal', 'h4', 'modal_cta_submit_h4'); ?>
                      </button>
                    </form>
                    <form action="#" method="post" id="createbookingOtpPopup" style="display: none;">
                      <br>
                      <h3 class="heading-small" style="font-size: 18px;">
                        <?php echo get_tag('modal', 'h3', 'modal_otp_heading_h3'); ?>
                      </h3>
                      <p>
                        <?php echo get_tag('modal', 'h4', 'modal_otp_text_h4'); ?>
                        +91-<span class="entered_phone_no">9205114537</span> <br>
                      </p>
                      <div class="form-group mb-3">
                        <input type="text" name="otp" class="form-control" id="otp"
                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                               maxlength="6" title="Please enter OTP" value="" aria-required="true" aria-invalid="false" placeholder="Enter OTP">
                        <input type="hidden" name="" id="brand_id">
                        <input type="hidden" name="" id="modal_id">
                        <input type="hidden" name="" id="full_name">
                        <input type="hidden" name="" id="mobile">
                        <input type="hidden" name="" id="message">
                                               <input type="hidden" name="" id="service">
                      </div>
                      <div class="resend-otp1" style="display: flex;gap:10px;">
                        <span class="resend-otp-text">
                          <?php echo get_tag('modal', 'h5', 'modal_otp_resend_text_h5'); ?>
                        </span>
                        <span class="resend-otp-link" style="display: none;">
                          <a class="use-ajax" href="javascript:void(0)" id="resend-otp" data-once="ajax" onclick="resendOTPPopup();">
                            <?php echo get_tag('modal', 'h5', 'modal_otp_resend_link_h5'); ?>
                          </a>
                        </span>:
                        <div id="timer" class="timer">0:59</div>
                      </div>
                      <div class="form-group text-center formsubbtn">
                        <button type="submit" class="btn btn-primary px-4 btn-lg">
                          <?php echo get_tag('modal', 'h5', 'modal_otp_submit_btn_h5'); ?>
                        </button> 
                      </div>
                    </form>
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

<div class="section sixss" id="section5" style="background:url(<?php echo base_url(); ?>assets/frontend/images/slider-6.jpg);background-size: cover; overflow:hidden" >
  <div class="intro">
    <div class="secondslider Services">
      <div id="carouselExampleControlss" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner"  >
          <div class="carousel-item active" style="background:url(<?php echo base_url(); ?>assets/frontend/images/slider6.jpg);background-size: cover;">
            <h2 data-aos="fade-up"  data-aos-duration="500">
              <?php echo get_tag('section5', 'h2', 'services_title_h2'); ?>
              <span><?php echo get_tag('section5', 'h2', 'services_title_span1_h2'); ?></span>
              <span><?php echo get_tag('section5', 'h2', 'services_title_span2_h2'); ?></span>
            </h2>
            <div class="strip">
              <img src="<?php echo base_url(); ?>assets/frontend/images/strip_s.png" data-aos="fade-up"  data-aos-duration="500"
                   alt="<?php echo get_tag('section5', 'alt', 'strip_img_alt'); ?>">
            </div>
            <div class="service-covermovile" data-aos="fade-up"  data-aos-duration="500">
              <img src="<?php echo base_url(); ?>assets/frontend/images/mbjeep1.png" data-aos="fade-up"
                   alt="<?php echo get_tag('section5', 'alt', 'mbjeep1_img_alt'); ?>">
            </div>
            <div class="service-cover" data-aos="fade-up"  data-aos-duration="500">
              <img src="<?php echo base_url(); ?>assets/frontend/images/jeep.png" data-aos="fade-up"  data-aos-duration="500" height="386"
                   alt="<?php echo get_tag('section5', 'alt', 'jeep_img_alt'); ?>">
              <div class="paint-protection">
                <h3 class="tooltips">
                  <?php echo get_tag('section5', 'h3', 'paint_protection_h3'); ?>
                  <div class="circle red"></div>
                  <div class="tooltipstext">
                    <?php echo get_tag('section5', 'h4', 'paint_protection_tooltip_h4'); ?>
                  </div>
                </h3>
              </div>
              <div class="detailing ">
                <h3 class="tooltips">
                  <?php echo get_tag('section5', 'h3', 'detailing_exterior_interior_h3'); ?>
                  <div class="circle red"></div>
                  <div class="tooltipstext">
                    <?php echo get_tag('section5', 'h4', 'detailing_exterior_interior_tooltip_h4'); ?>
                  </div>
                </h3>
              </div>
              <div class="restoration">
                <h3 class="tooltips">
                  <?php echo get_tag('section5', 'h3', 'full_body_paint_h3'); ?>
                  <div class="circle red"></div>
                  <div class="tooltipstext">
                    <?php echo get_tag('section5', 'h4', 'full_body_paint_tooltip_h4'); ?>
                  </div>
                </h3>
              </div>
              <div class="coating">
                <h3 class="tooltips">
                  <?php echo get_tag('section5', 'h3', 'ceramic_coating_h3'); ?>
                  <div class="circle red"></div>
                  <div class="tooltipstext">
                    <?php echo get_tag('section5', 'h4', 'ceramic_coating_tooltip_h4'); ?>
                  </div>
                </h3>
              </div>
              <div class="filo">
                <h3 class="tooltips">
                  <?php echo get_tag('section5', 'h3', 'ppf_h3'); ?>
                  <div class="circle red"></div>
                  <div class="tooltipstext">
                    <?php echo get_tag('section5', 'h4', 'ppf_tooltip_h4'); ?>
                  </div>
                </h3>
              </div>
              <div class="alloy-wheel">
                <h3 class="tooltips">
                  <?php echo get_tag('section5', 'h3', 'alloy_wheel_dressing_h3'); ?>
                  <div class="circle red"></div>
                  <div class="tooltipstext">
                    <?php echo get_tag('section5', 'h4', 'alloy_wheel_tooltip_h4'); ?>
                  </div>
                </h3>
              </div>
              <div class="headlamp">
                <h3 class="tooltips">
                  <?php echo get_tag('section5', 'h3', 'headlamp_restoration_h3'); ?>
                  <div class="circle red"></div>
                  <div class="tooltipstext">
                    <?php echo get_tag('section5', 'h4', 'headlamp_restoration_tooltip_h4'); ?>
                  </div>
                </h3>
              </div>
              <div class="engine">
                <h3 class="tooltips">
                  <?php echo get_tag('section5', 'h3', 'engine_dressing_h3'); ?>
                  <div class="circle red"></div>
                  <div class="tooltipstext">
                    <?php echo get_tag('section5', 'h4', 'engine_dressing_tooltip_h4'); ?>
                  </div>
                </h3>
              </div>
              <div class="anti-rust">
                <h3 class="tooltips">
                  <?php echo get_tag('section5', 'h3', 'rust_shield_coating_h3'); ?>
                  <div class="circle red"></div>
                  <div class="tooltipstext">
                    <?php echo get_tag('section5', 'h4', 'rust_shield_coating_tooltip_h4'); ?>
                  </div>
                </h3>
              </div>
            </div>
          </div>
          <div class="carousel-item repairitm" style="background:url(<?php echo base_url(); ?>assets/frontend/images/slider-6.jpg);background-size: cover;">
            <h2 data-aos="fade-up"  data-aos-duration="500">
              <?php echo get_tag('section5', 'h2', 'services_repair_title_h2'); ?>
              <span><?php echo get_tag('section5', 'h2', 'repair_services_span_h2'); ?></span>
            </h2>
            <div class="strip">
              <img src="<?php echo base_url(); ?>assets/frontend/images/strip_s.png"data-aos="fade-up"  data-aos-duration="500"
                   alt="<?php echo get_tag('section5', 'alt', 'strip_img_repair_alt'); ?>">
            </div>
            <p class="restore"><?php echo get_tag('section5', 'h4', 'restore_text_h4'); ?></p>
            <div class="service-covermovile" data-aos="fade-up"  data-aos-duration="500">
              <img src="<?php echo base_url(); ?>assets/frontend/images/mbc.png" data-aos="fade-up"
                   alt="<?php echo get_tag('section5', 'alt', 'mbc_repair_img_alt'); ?>">
            </div>
            <div class="service-cover" data-aos="fade-up"  data-aos-duration="500"> 
              <img src="<?php echo base_url(); ?>assets/frontend/images/car.png" data-aos="fade-up"  data-aos-duration="500" height="329"
                   alt="<?php echo get_tag('section5', 'alt', 'car_repair_img_alt'); ?>">
              <div class="front-bumper">
                <h3 class="tooltips">
                  <?php echo get_tag('section5', 'h3', 'front_bumper_h3'); ?>
                  <div class="tooltipstext">
                    <?php echo get_tag('section5', 'h4', 'front_bumper_tooltip_h4'); ?>
                  </div>
                </h3>
              </div>
              <div class="bonnet">
                <h3 class="tooltips">
                  <?php echo get_tag('section5', 'h3', 'bonnet_h3'); ?>
                </h3>
              </div>
              <div class="rear-door">
                <h3 class="tooltips">
                  <?php echo get_tag('section5', 'h3', 'rear_door_h3'); ?>
                </h3>
              </div>
              <div class="roof">
                <h3 class="tooltips">
                  <?php echo get_tag('section5', 'h3', 'roof_h3'); ?>
                </h3>
              </div>
              <div class="boot">
                <h3 class="tooltips">
                  <?php echo get_tag('section5', 'h3', 'boot_h3'); ?>
                </h3>
              </div>
              <div class="front-door">
                <h3 class="tooltips">
                  <?php echo get_tag('section5', 'h3', 'front_door_h3'); ?>
                </h3>
              </div>
              <div class="fender">
                <h3 class="tooltips">
                  <?php echo get_tag('section5', 'h3', 'fender_h3'); ?>
                </h3>
              </div>
              <div class="quarter">
                <h3 class="tooltips">
                  <?php echo get_tag('section5', 'h3', 'quarter_panel_h3'); ?>
                </h3>
              </div>
              <div class="rear-bumper">
                <h3 class="tooltips">
                  <?php echo get_tag('section5', 'h3', 'rear_bumper_h3'); ?>
                </h3>
              </div>
              <div class="running-board">
                <h3 class="tooltips">
                  <?php echo get_tag('section5', 'h3', 'running_board_h3'); ?>
                </h3>
              </div>
            </div>                  
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlss" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden"><?php echo get_tag('section5', 'h5', 'carousel_prev_h5'); ?></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlss" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden"><?php echo get_tag('section5', 'h5', 'carousel_next_h5'); ?></span>
        </button>
      </div>
    </div>
  </div>
</div>
<a href="https://api.whatsapp.com/send?phone=919873889977&text=Hi%0AI%20would%20like%20to%20know%20more%20about%20Mastercraft%20services%20for%20my%20car.%20" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
    <script src="<?php echo base_url(); ?>assets/frontend/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/js/custom.js"></script>
    <script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script type="text/javascript">
      var myFullpage = new fullpage('#fullpage', {
        ///sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
        anchors: ['firstPage', 'secondPage', '3rdPage', 'fourth', 'fifth', 'six', 'seven', 'eight'],
        menu: '#menu',
        //continuousVertical: true,
        navigation: true
       
      });
    

      
  </script>
  <script>
    var $owl = $('.owl-carousel');

    $owl.owlCarousel({
      center: true,
      loop: true,
      items: 3,
      loop: true,
      nav: true,
      fade:true,
      responsiveClass: true,
      smartSpeed:750,
      responsiveClass:true,
      responsive:{
        0:{
            items:3,
            nav:false
        },
        600:{
            items:3,
            nav:false
        }
    }

      ///navText: ['&#8592;', '&#8594;'],
    });

    $(".hc-saying__carousel__item").slick({
  slidesToShow: 3,
  slidesToScroll: 0.5,
  vertical: true,
  centerMode: true,
  cssEase: 'ease-in',
  lazyLoad: 'ondemand',
  //dots: false,
  arrows: true,
  prevArrow:
    '<button type="button" class="slick-prev slick-arrow"><svg  xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" class="bi bi-chevron-up" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/> </svg></button>',
  nextArrow:
    '<button type="button" class="slick-next pull-right"><svg  xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" class="bi bi-chevron-down" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" fill="#fff"></path> </svg></button>',
  focusOnSelect: true,
  verticalSwiping: false,
  draggable: false,
  autoplay: true,
  responsive: [
    {
      breakpoint: 992,
      settings: {
        vertical: true
      }
    },
    {
      breakpoint: 768,
      settings: {
        vertical: true
      }
    },
    {
      breakpoint: 580,
      settings: {
        vertical: true,
        ///slidesToShow: 2
      }
    },
    {
      breakpoint: 380,
      settings: {
        vertical: true,
        //slidesToShow: 2
      }
    }
  ]
});

function animateToTop(e) {
    e.preventDefault();
    var scrollToTop = window.setInterval(function() {
        var pos = window.pageYOffset;
        if ( pos > 0 ) {
            window.scrollTo( 0, pos - 20 );
        } else {
            window.clearInterval( scrollToTop );
        }
    }, 16);
}

  </script>

<script type="text/javascript">jQuery(document).ready(function($){$(function() {      AOS.init(); });  });  </script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/notify.js"></script>
<script type="text/javascript">

  function userTimerstart(time) {
       var countDownDate = new Date().getTime() +  time * 60 * 1000;
        var x = setInterval(function() {

          // Get today's date and time
          var now = new Date().getTime();
          var distance = countDownDate - now;
          // Time calculations for hours, minutes and seconds
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
          $('#createbookingOtp').find('.timer').html(minutes + ":" + seconds);
          if (distance < 0) {
            $('#createbookingOtp').find('.resend-otp-text').hide();
            $('#createbookingOtp').find('.resend-otp-link').show();
            $('#createbookingOtp').find('.timer').html("0:00");
            return false;
          }
        }, 1000);
    }

    function userTimerstartPopup(time) {
       var countDownDate = new Date().getTime() +  time * 60 * 1000;
        var x = setInterval(function() {

          // Get today's date and time
          var now = new Date().getTime();
          var distance = countDownDate - now;
          // Time calculations for hours, minutes and seconds
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
          $('#createbookingOtpPopup').find('.timer').html( minutes + ":" + seconds);
          if (distance < 0) {
            $('#createbookingOtpPopup').find('.resend-otp-text').hide();
            $('#createbookingOtpPopup').find('.resend-otp-link').show();
            $('#createbookingOtpPopup').find('.timer').html("0:00");
            return false;
          }
        }, 1000);
    }

    $("#createbookingOtp").on('submit', (e)=>{
       e.preventDefault();
       VerifyOtp();
    });
    
  $("#contact_form").submit(function(e){
      e.preventDefault();
      const brand_id = $("#contact_form").find('.brand_id').val();
      const modal_id = $("#contact_form").find('.modal_id').val();
      const service = $("#contact_form").find('.service').val();
      const full_name = $("#contact_form").find('.full_name').val();
      const phone_number = $("#contact_form").find('.phone_number').val();
      const message = $("#contact_form").find('.message').val();
    
        $('#contatSubmit').prop('disabled', true);
        $('#contatSubmit').html('Submitted...');
      
      $.ajax({
          url:'<?php echo base_url(); ?>Home_public/sendOtp',
          type: 'POST',
          data : {
              'brand_id':brand_id,
              'modal_id' : modal_id,
              'full_name' : full_name,
              'service' : service,
              'phone_number' : phone_number,
              'message' : message,
              'contact_form_submit':'contact_form_submit'
          },
          dataType: 'JSON',
          success:function(res){
              if(res.status == 200){
                $.notify(res.message,'success');
                $("#contact_form").hide();
                $("#createbookingOtp").find('.entered_phone_no').html(phone_number);
                $("#createbookingOtp").find('#brand_id').val(brand_id);
                $("#createbookingOtp").find('#modal_id').val(modal_id);
                $("#createbookingOtp").find('#full_name').val(full_name);
                $("#createbookingOtp").find('#mobile').val(phone_number);
                $("#createbookingOtp").find('#message').val(message);
                $("#createbookingOtp").find('#service').val(service);
                $('#createbookingOtp').show();
                $("#contact_formPop").find('#contatSubmit').prop('disabled', false);
                $("#contact_formPop").find('#contatSubmit').html('Book Your Mastercraft Session');
                userTimerstart(1);
              }else{
                console.log(res.message);
                $('#contatSubmit').prop('disabled', false);
                $('#contatSubmit').html('Book Your Mastercraft Session');
              }
          }
      
      });
      
      
  });

  function resendOTP() {
    try{

      const phone_number = $("#createbookingOtp").find('#mobile').val();
      $.ajax({
            url:'<?php echo base_url(); ?>Home_public/sendOtp',
            type: 'POST',
            data : {
               
                'phone_number' : phone_number
            },
            dataType: 'JSON',
            success:function(res){
                if(res.status == 200){
                 $("#createbookingOtp").find('.entered_phone_no').html(phone_number);
                  $.notify(res.message,'success');
                  userTimerstart(1);
                }else{
                  $.notify(res.message);
                  console.log(res.message);
                }
            },
            error: function (error){
              console.log(error.responseJSON.message);
              $.notify(error.responseJSON.message);
            }
        
        });

    }catch(error){
      console.log(error);
    }
  }

  const VerifyOtp = async() => {
    try {
      $('.error_class').remove();
       const brand_id = $("#createbookingOtp").find('#brand_id').val();
        const modal_id = $("#createbookingOtp").find('#modal_id').val();
        const full_name = $("#createbookingOtp").find('#full_name').val();
        const phone_number = $("#createbookingOtp").find('#mobile').val();
        const message = $("#createbookingOtp").find('#message').val();
        const service = $("#createbookingOtp").find('#service').val();
        const otp =$('#createbookingOtp').find('#otp').val();
        if (!otp) {
          $('#createbookingOtp').find('#otp').after('<div class="error_class">OTP is required</div>');
          $('#createbookingOtp').find('#otp').focus();
          return false;
        }
        
        let data = {
                'brand_id':brand_id,
                'modal_id' : modal_id,
                'full_name' : full_name,
                'phone_number' : phone_number,
                'message' : message,
                'service' : service,
                'otp' : otp,
                'contact_form_submit':'contact_form_submit'
            };
         
      
          $("#contact_formPop").find('#contatSubmit').prop('disabled', true);
          $("#contact_formPop").find('#contatSubmit').html('Submitted...');
        
        $.ajax({
            url:'<?php echo base_url(); ?>Home_public/saveContactForm',
            type: 'POST',
            data : data,
            dataType: 'JSON',
            success:function(res){
                if(res.status == 200){
                  $('#cta').modal('hide');
                  $.notify(res.message,'success');
                  location.href= '<?= base_url() ?>thankyou';
                }else{
                  $.notify(res.message);
                  console.log(res.message);
                }
            },
            error: function (error){
              console.log(error.responseJSON.message);
              $.notify(error.responseJSON.message);
            }
        
        });
    } catch(error){
      console.log(error);
    }
  }

// Popup Form.............
  
  $("#contact_formPop").submit(function(e){
      e.preventDefault();
      const brand_id = $("#contact_formPop").find('.brand_id').val();
      const modal_id = $("#contact_formPop").find('.modal_id').val();
      const full_name = $("#contact_formPop").find('.full_name').val();
      const phone_number = $("#contact_formPop").find('.phone_number').val();
      const message = $("#contact_formPop").find('.message').val();
      const service = $("#contact_formPop").find('.service').val();
        $("#contact_formPop").find('#contatSubmit').prop('disabled', true);
        $("#contact_formPop").find('#contatSubmit').html('Submitted...');
      
      $.ajax({
          url:'<?php echo base_url(); ?>Home_public/sendOtp',
          type: 'POST',
          data : {
              'brand_id':brand_id,
              'modal_id' : modal_id,
              'full_name' : full_name,
              'phone_number' : phone_number,
              'message' : message,
              'service' : service,
              'contact_form_submit':'contact_form_submit'
          },
          dataType: 'JSON',
          success:function(res){
              if(res.status == 200){
                 $.notify(res.message,'success');
                $("#contact_formPop").hide();
                $("#createbookingOtpPopup").find('.entered_phone_no').html(phone_number);
                $("#createbookingOtpPopup").find('#brand_id').val(brand_id);
                $("#createbookingOtpPopup").find('#modal_id').val(modal_id);
                $("#createbookingOtpPopup").find('#full_name').val(full_name);
                $("#createbookingOtpPopup").find('#mobile').val(phone_number);
                $("#createbookingOtpPopup").find('#message').val(message);
                $("#createbookingOtpPopup").find('#service').val(service);
                $('#createbookingOtpPopup').show();
                $("#contact_formPop").find('#contatSubmit').prop('disabled', false);
                $("#contact_formPop").find('#contatSubmit').html('Book Your Mastercraft Session');
                userTimerstartPopup(1);
                
              }else{
                console.log(res.message);
              }
          }
      
      });
      
      
  });

  $('#createbookingOtpPopup').on('submit', (e)=>{
    e.preventDefault();
    $('.error_class').remove();
      const brand_id = $("#createbookingOtpPopup").find('#brand_id').val();
      const modal_id = $("#createbookingOtpPopup").find('#modal_id').val();
      const full_name = $("#createbookingOtpPopup").find('#full_name').val();
      const phone_number = $("#createbookingOtpPopup").find('#mobile').val();
      const message = $("#createbookingOtpPopup").find('#message').val();
      const service = $("#createbookingOtpPopup").find('#service').val();
      const otp =$('#createbookingOtpPopup').find('#otp').val();
      if (!otp) {
        $('#createbookingOtpPopup').find('#otp').after('<div class="error_class">OTP is required</div>');
        $('#createbookingOtpPopup').find('#otp').focus();
        return false;
      }
    
        $("#contact_formPop").find('#contatSubmit').prop('disabled', true);
        $("#contact_formPop").find('#contatSubmit').html('Submitted...');
      
      $.ajax({
          url:'<?php echo base_url(); ?>Home_public/saveContactForm',
          type: 'POST',
          data : {
              'brand_id':brand_id,
              'modal_id' : modal_id,
              'full_name' : full_name,
              'phone_number' : phone_number,
              'message' : message,
              'service' : service,
              'otp' : otp,
              'contact_form_submit':'contact_form_submit'
          },
          dataType: 'JSON',
          success:function(res){
              if(res.status == 200){
                $('#cta').modal('hide');
                $.notify(res.message,'success');
                location.href= '<?= base_url() ?>thankyou';
              }else{
                $.notify(res.message);
                console.log(res.message);
              }
          },
          error: function (error){
            console.log(error.responseJSON.message);
            $.notify(error.responseJSON.message);
          }
      
      });
  });

  
  
  const handleChangePop = async (e) => {
      const id = $(e).val();
      $.ajax({
      
          url:'<?php echo base_url(); ?>Home_public/getModelByBrandId',
          type: 'POST',
          data : {
              'id':id
          },
          dataType: 'JSON',
          success:function(res){
              if(res.status == 200){
                  let modalData = res.data;
                  
                  var htmldata = '<option value=""></option>';
                  modalData.map((modal)=>{
                      htmldata += `<option value="${modal.id}">${modal.name}</option>`;
                  });
                  $("#contact_formPop").find('.modal_id').html(htmldata);
              }else{
                  var htmldata = '<option value=""></option>';
                  $("#contact_formPop").find('.modal_id').html(htmldata);
              }
              
          }
      });
    
  }

  function resendOTPPopup() {
    try{
      const phone_number = $("#createbookingOtpPopup").find('#mobile').val();
      $.ajax({
            url:'<?php echo base_url(); ?>Home_public/sendOtp',
            type: 'POST',
            data : {
                'phone_number' : phone_number
            },
            dataType: 'JSON',
            success:function(res){
                if(res.status == 200){
                 $("#createbookingOtpPopup").find('.entered_phone_no').html(phone_number);
                  $.notify(res.message,'success');
                   $('#createbookingOtpPopup').find('.resend-otp-text').show(0);
                  $('#createbookingOtpPopup').find('.resend-otp-link').hide(0);
                  userTimerstartPopup(1);
                }else{
                  $.notify(res.message);
                  console.log(res.message);
                }
            },
            error: function (error){
              console.log(error.responseJSON.message);
              $.notify(error.responseJSON.message);
            }
        
        });

    }catch(error){
      console.log(error);
    }
  }
  
  const handleChange = async (e) => {
      const id = $(e).val();
      $.ajax({
      
          url:'<?php echo base_url(); ?>Home_public/getModelByBrandId',
          type: 'POST',
          data : {
              'id':id
          },
          dataType: 'JSON',
          success:function(res){
              if(res.status == 200){
                  let modalData = res.data;
                  
                  var htmldata = '<option value=""></option>';
                  modalData.map((modal)=>{
                      htmldata += `<option value="${modal.id}">${modal.name}</option>`;
                  });
                  $('#_car_modal_').html(htmldata);
              }else{
                  var htmldata = '<option value=""></option>';
                  $('#_car_modal_').html(htmldata);
              }
              
          }
      });
    
  }

  $(window).load(function() {
	    $(".loader").delay(1000).fadeOut("slow");
      });


      $('#menu li a').click(function() {
      $('#navbarSupportedContent').collapse('hide');
    });
</script>
  </body>
</html>