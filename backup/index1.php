<?php include "action.php"; 
  $craft = new Craft();
  $allBrands = $craft->getBrands();
  
  if(isset($_POST['getModalById'])){
      $id = $_POST['id'];
      $allModel = $craft->getModalById($id);
      if($allModel){
          echo json_encode(['status'=>200,'data'=>$allModel,'message'=>'data found']);die;
      }else{
         echo json_encode(['status'=>402,'data'=>$allModel,'message'=>'data not found']);die; 
      }
  }
  
  if(isset($_POST['contact_form_submit'])){
      $submitres = $craft->submitContus($_POST);
       if($submitres){
            echo json_encode(['status'=>200,'message'=>'Your request submitted successfully.']);die;
        }else{
            echo json_encode(['status'=>400,'message'=>'Something went wrong, Please try after some time.']);die;
        }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="apple-touch-icon-precomposed" href="https://mastercraftauto.co.in/images/logo.png">
    <link rel="icon" href="https://mastercraftauto.co.in/images/logo.png">
    <link rel="shortcut icon" href="https://mastercraftauto.co.in/images/logo.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font/stylesheet.css" rel="stylesheet">
    <link href="css/style.css?v=1.13" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.0/dist/aos.css" rel="stylesheet">
    
   
    <!--FullPage Js-->
    <!--End FullPage Js-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Craft</title>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MRV985XJKT"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-MRV985XJKT');
</script>
  </head>
  <body>
    <div class="booknow">
      <a href="#" data-bs-toggle="modal" data-bs-target="#cta">
        <img src="images/booknow.png" alt="book now" />
      </a>
    </div>
    <div class="loader">
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
          <img src="images/logo.png" width="100" height="" alt="Logo" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <svg width="35px" height="35px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" id="Editable-line" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><line fill="none" id="XMLID_103_" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="7" x2="25" y1="16" y2="16"/><line fill="none" id="XMLID_102_" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="7" x2="25" y1="25" y2="25"/><line fill="none" id="XMLID_101_" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="7" x2="25" y1="7" y2="7"/></svg>
        </button>
        <div class="collapse navbar-collapse  justify-content-end" id="navbarSupportedContent">
          <ul id="menu" class="navbar-nav mb-2 mb-lg-0">
            <li data-menuanchor="firstPage" class=" nav-item ">
              <a class="nav-link" href="#firstPage"></a>
            </li>
            <li data-menuanchor="secondPage" class=" nav-item ">
              <a class="nav-link" href="#secondPage">Home</a>
            </li>
            <li data-menuanchor="3rdPage" class="active nav-item">
              <a class="nav-link" href="#3rdPage">Our Story </a>
            </li>
            <li data-menuanchor="fourth" class="nav-item">
              <a class="nav-link" href="#fourth">Our Promise</a>
            </li>
            <li data-menuanchor="fifth" class="nav-item">
              <a class="nav-link" href="#fifth">Why Choose Us</a>
            </li>
            <li data-menuanchor="six" class="nav-item">
              <a class="nav-link" href="#six">Our Services</a>
            </li>
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
      <div class="section firstsl" id="section0" style="background:url(images/Master-Craft-Website.jpg);background-size: cover;">
        <div class="firstslide" data-aos="fade-down">
          <h1 class="text1">High On Craftsmanship</h1>
          <p class="text1">Every Car, A Masterpiece!</p>
        </div>
      </div>
      <div class="section seconds" id="section1" style="background:url(images/slider2.jpg);background-size: cover;">
        <div class="intro secondslider" data-aos="fade-down" >
          <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" >
                <div class="secondslider" >
                  <h2>Flawless <span>Color Match</span>
                  </h2>
                  <p>with precision and technology</p>
                  <div class="strip">
                    <img src="images/strip.png">
                  </div>
                  <div class="btnclaim">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#cta">Unlock Colour Perfection</a>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="secondslider">
                  <h2>Your Car, <span>Our Canvas</span>
                  </h2>
                  <p>Artistry in motion</p>
                  <div class="strip">
                    <img src="images/strip.png">
                  </div>
                  <div class="btnclaim">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#cta">Craft Your Automotive Artistry</a>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="secondslider">
                  <h2>Express <span>Repair With</span>
                  </h2>
                  <p>innovative solutions</p>
                  <div class="strip">
                    <img src="images/strip.png">
                  </div>
                  <div class="btnclaim">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#cta">Step Into Excellence</a>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="secondslider">
                  <h2>Phenomenal <span>Finish With</span>
                  </h2>
                  <p>skilled craftsmanship</p>
                  <div class="strip">
                    <img src="images/strip.png">
                  </div>
                  <div class="btnclaim">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#cta">Discover Our Craft</a>
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          
        </div>
      </div>
      <div class="section thirds" id="section2" style="background:url(images/slider3.jpg);background-size: cover;">
        <div class="intro">
          <div class="thirdslider">
            <div class="container">
              <div class="row">
                <div class="col-md-4 d-flex align-items-center justify-content-center">
                  <div class="content" data-aos="fade-left">
                    <p>We are Mastercraft - driven by innovation, powered by Nippon Paints</p>
                    <p>Mastercraft Understands your love for flawless car 
                      finishes. As a pioneer in automative  paints 
                      manufacturing entering direct retailing, we offer
                      expert color and detailing services.</p>
                    <p> Whether you seek restoration to showroom glory or 
                      desire cusomization beyond imagination,
                      Mastercraft is your destination,Our swift,tech-driven
                      solution ensure a perfect match every time.
                      </p>
                      <p>Join us to effortlessly transform your car into a 
                        masterpiece of  automotive aesthetics.</p>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="secondslider"  data-aos="fade-right">
                    <h2>Our Story <span>Crafting Flawless</span>
                      <span>Paint Finishes</span>
                    </h2>
                    <div class="strip">
                      <img src="images/strip.png">
                    </div>
                    <div class="btnclaim">
                      <a href="#" data-bs-toggle="modal" data-bs-target="#cta">Book Your Mastercraft Journey Today</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section fourtss" id="section3" style="background:url(images/slider4.jpg);background-size: cover;">
        <div class="intro fourths">
          <div class="container">
            <div class="row" data-aos="zoom-in">
              <div class="col-md-6">
                <div class="secondslider"  >
                  <h2>Our Promise <span>A Commitment To</span>
                    <span>Excellence</span>
                  </h2>
                  <div class="strip">
                    <img src="images/strip_s.png">
                  </div>
                  <div class="btnclaim">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#cta">Book to experience our promise</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-center justify-content-center flex-wrap relative" >
                <div class="owl-carousel sliderp" >
                  <div>
                    <p><span>Exemplary Paintwork</span>
                      
                    High-quality, eco-friendly paints for a stunning ﬁnish.</p>
                  </div>

                  <div>
                    <p><span>Precision Repairs </span>
                    Quick and seamless repair services with superior ﬁnishes.</p>
                  </div>

                  <div>
                    <p><span>Luxe  Interiors</span>
                    Enhancing the interior aesthetics of your vehicle.</p>
                  </div>

                  <div>
                    <p><span>Exclusive Services</span>
                    Personalized options for clients seeking unique detailing solutions.</p>
                  </div>

                  <div>
                    <p><span>Artisanal Detailing</span>
                    Meticulous craftsmanship employed for detailing services.</p>
                  </div>

                </div>
                <div class="col-md-6s d-flex align-items-center justify-content-between" >
                  <div class="col">
                      <div class="block">
                       <img src="images/icon1.png">
                       <p>Certified Paint Match</p>
                      </div>
                   
                  </div>
                  <div class="col">
  
                   <div class="block">
                     <img src="images/icon2.png">
                     <p>Skilled Craftsmen</p>
                   </div>
                  </div>
                  <div class="col">
  
                   <div class="block">
                     <img src="images/icon3.png">
                     <p>Technology Integration</p>
                   </div>
                  </div>
  
                 </div>

              </div>
           
            </div>
          </div>
        </div>
      </div>
      <div class="section fifthss" id="section4" style="background:url(images/slider5.jpg);background-size: cover;">
        <div class="intro fifths">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="secondslider" data-aos="fade-down">
                  <h2>Why Choose Us </span>
                    <span>Choose Innovation, Drive Perfection</span></h2>
                  <div class="strip">
                    <img src="images/strip.png">
                  </div>
                  <div class="col-lg-6 m-auto" data-aos="fade-down">
                    <div class="hc-saying__carousel">
                      <div class="hc-saying__carousel__item">

                        <div class="hc-saying__carousel__item__card">
                          <div class="whychoose">
                          <div class="hc-saying__carousel__item__card--reviewer">
                            <div class="hc-saying__carousel__item__card--reviewer--image">
                              <img src="images/w1.png" width="55" height="50">
                            </div>
                          </div>
                          <div class="hc-saying__carousel__item__card--content">
                            <p class="hc-saying__carousel__item__card--content--text"> AI Colour Match </p>
                            <span>Precise colour match for every shade, every time.</span>
                          </div>
                        </div>
                      </div>

                        <div class="hc-saying__carousel__item__card">
                          <div class="whychoose">
                          <div class="hc-saying__carousel__item__card--reviewer">
                            <div class="hc-saying__carousel__item__card--reviewer--image">
                              <img src="images/w2.png" width="55" height="55">
                            </div>
                          </div>
                          <div class="hc-saying__carousel__item__card--content">
                            <p class="hc-saying__carousel__item__card--content--text"> Concierge Services </p>
                            <span>Doorstep convenience with pick-and-drop.</span>
                          </div>
                        </div>
                      </div>

                        <div class="hc-saying__carousel__item__card">
                          <div class="whychoose">
                          <div class="hc-saying__carousel__item__card--reviewer">
                            <div class="hc-saying__carousel__item__card--reviewer--image">
                              <img src="images/w3.png" width="55" height="55">
                            </div>
                          </div>
                          <div class="hc-saying__carousel__item__card--content">
                            <p class="hc-saying__carousel__item__card--content--text">Velocity Repair </p>
                            <span>Express repairs to transform your ride before sunset.</span>
                          </div>
                        </div>
                      </div>

                      <div class="hc-saying__carousel__item__card">
                        <div class="whychoose">
                        <div class="hc-saying__carousel__item__card--reviewer">
                          <div class="hc-saying__carousel__item__card--reviewer--image">
                            <img src="images/waterbasedpaints.png" width="55" height="55">
                          </div>
                        </div>
                        <div class="hc-saying__carousel__item__card--content">
                          <p class="hc-saying__carousel__item__card--content--text">Water-based paints </p>
                          <span>Timeless ﬁnishes with sustainable paints.</span>
                        </div>
                      </div>
                    </div>

                    <div class="hc-saying__carousel__item__card">
                        <div class="whychoose">
                        <div class="hc-saying__carousel__item__card--reviewer">
                          <div class="hc-saying__carousel__item__card--reviewer--image">
                            <img src="images/LowVOCSolution.png" width="55" height="55">
                          </div>
                        </div>
                        <div class="hc-saying__carousel__item__card--content">
                          <p class="hc-saying__carousel__item__card--content--text">Low VOC Solution </p>
                          <span>Innovative low VOC solutions for your well-being and the planet’s.</span>
                        </div>
                      </div>
                    </div>

                    <div class="hc-saying__carousel__item__card">
                        <div class="whychoose">
                        <div class="hc-saying__carousel__item__card--reviewer">
                          <div class="hc-saying__carousel__item__card--reviewer--image">
                            <img src="images/NewGenerationPPF.png" width="55" height="55">
                          </div>
                        </div>
                        <div class="hc-saying__carousel__item__card--content">
                          <p class="hc-saying__carousel__item__card--content--text">New Generation PPF </p>
                          <span>Future-proof your car’s shine with advanced paint protection.</span>
                        </div>
                      </div>
                    </div>

                    
                    <div class="hc-saying__carousel__item__card">
                        <div class="whychoose">
                        <div class="hc-saying__carousel__item__card--reviewer">
                          <div class="hc-saying__carousel__item__card--reviewer--image">
                            <img src="images/DryWash.png" width="55" height="55">
                          </div>
                        </div>
                        <div class="hc-saying__carousel__item__card--content">
                          <p class="hc-saying__carousel__item__card--content--text">Dry Wash </p>
                          <span>Immaculate cleaning with minimal water waste.</span>
                        </div>
                      </div>
                    </div>

                    
                    <div class="hc-saying__carousel__item__card">
                        <div class="whychoose">
                        <div class="hc-saying__carousel__item__card--reviewer">
                          <div class="hc-saying__carousel__item__card--reviewer--image">
                            <img src="images/CeramicCoating.png" width="55" height="55">
                          </div>
                        </div>
                        <div class="hc-saying__carousel__item__card--content">
                          <p class="hc-saying__carousel__item__card--content--text">Ceramic Coating 10H </p>
                          <span>Lock in brilliance with the toughest ceramic shield.</span>
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
        </div>
      </div>
      <div class="section sixss" id="section5" style="background:url(images/slider-6.jpg);background-size: cover;">
        <div class="intro">
          <div class="secondslider Services">
           
            <div id="carouselExampleControlss" class="carousel slide carousel-fade" data-bs-ride="carousel">
              <div class="carousel-inner"  >
                <div class="carousel-item active" style="background:url(images/slider6.jpg);background-size: cover;">
                  <h2 data-aos="fade-up"  data-aos-duration="500">Our Services <span>Crafting The Finer</span>
                    <span>Details</span>
                  </h2>
                  <div class="strip">
                    <img src="images/strip_s.png" data-aos="fade-up"  data-aos-duration="500">
                  </div>
                  <div class="service-covermovile" data-aos="fade-up"  data-aos-duration="500"> <img src="images/mbjeep.png" data-aos="fade-up"> </div>

                  <div class="service-cover" data-aos="fade-up"  data-aos-duration="500">
                   
                   <img src="images/jeep.png" data-aos="fade-up"  data-aos-duration="500" height="386">
                   <div class="paint-protection">
                    
                     <h3 class="tooltips">Paint Protection
                     <div class="circle red"></div>
                     <div class="tooltipstext">Preserve your car's showroom shine with our advanced protection solutions.</div>

                     </h3>
                   </div>
                   <div class="detailing ">
                  
                     <h3 class="tooltips"> Interior and Exterior  <div class="circle red"></div>
                     <div class="tooltipstext">Elevate your car's appearance with meticulous attention to detail.</div>

                     </h3>
                   </div>

                   <div class="restoration">
                     <h3 class="tooltips"> Full Body Paint: <div class="circle red"></div>
                     <div class="tooltipstext">Transform your car with expert craftsmanship and attention to detail.</div>

                    </h3>
                   </div>

                   <div class="coating">
                     <h3 class="tooltips">Ceramic Coating <div class="circle red"></div>
                     <div class="tooltipstext">Enjoy unparalleled protection and shine with our advanced technology.</div>

                     </h3>
                   </div>

                   <div class="filo">
                     <h3 class="tooltips"> Paint Protection Film (PPF) <div class="circle red"></div>
                     <div class="tooltipstext">Invisible armour against chips and scratches for long-lasting protection.</div>


                     </h3>
                   </div>

                   <div class="alloy-wheel">
                     <h3 class="tooltips"> Alloy Wheel Dressing  <div class="circle red"></div>
                     <div class="tooltipstext">Stand out with precision wheel dressing for a showroom finish.</div>
                     </h3>
                   </div>
                   <div class="headlamp">
                     <h3 class="tooltips"> Headlamp restoration <div class="circle red"></div>
                     <div class="tooltipstext">Illuminate the road ahead with professional restoration.</div>


                     </h3>
                   </div>
                   <div class="engine">
                     <h3 class="tooltips"> ⁠Engine Dressing <div class="circle red"></div>
                     <div class="tooltipstext">Enhance performance and aesthetics with specialised dressing.</div>

                     </h3>
                   </div>
                   <div class="anti-rust">
                     <h3 class="tooltips"> Anti-Rust Coating <div class="circle red"></div>
                     <div class="tooltipstext"> Extend the life of your vehicle with proven rust prevention</div>

                    
                     </h3>
                   </div>
                 </div>                    </div>
                   <div class="carousel-item repairitm" style="background:url(images/slider-6.jpg);background-size: cover;">
                    <h2 data-aos="fade-up"  data-aos-duration="500">Our Services <span>Repair Services</span>
                    </h2>
                    <div class="strip">
                      <img src="images/strip_s.png"data-aos="fade-up"  data-aos-duration="500">
                    </div>
                    <p class="restore">Restore and renew, back to Showroom New</p>
                    <div class="service-covermovile" data-aos="fade-up"  data-aos-duration="500"> <img src="images/mbc.png" data-aos="fade-up"> </div>
                    <div class="service-cover" data-aos="fade-up"  data-aos-duration="500"> 
                 <img src="images/car.png" data-aos="fade-up"  data-aos-duration="500" height="329">

                 <div class="front-bumper">
                  <h3 class="tooltips">Front Bumper 

                  <div class="tooltipstext">Invisible armor against chips and scratches for long-lasting protection.</div>

                  </h3>
                </div>
                <div class="bonnet">
                  <h3 class="tooltips">Bonnet</h3>
                </div>
                <div class="rear-door">
                  <h3 class="tooltips">Right/Left<br> Rear Door</h3>
                </div>
                <div class="roof">
                  <h3 class="tooltips">Roof</h3>
                </div>
                <div class="boot">
                  <h3 class="tooltips">Boot</h3>
                </div>
                <div class="front-door">
                  <h3 class="tooltips">Right/Left<br> Front Door</h3>
                </div>
                <div class="fender">
                  <h3 class="tooltips">Right/Left Fender</h3>
                </div>
                <div class="quarter">
                  <h3 class="tooltips">Right/Left Quarter Panel</h3>
                </div>
                <div class="rear-bumper">
                  <h3 class="tooltips">Rear Bumper</h3>
                </div>

                <div class="running-board">
                  <h3 class="tooltips">Right/Left<br> Running Board</h3>
                </div>
                </div>                  </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlss" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlss" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="section sevess" id="section6" style="background:url(images/slider7.jpg);background-size: cover;">
        <div class="intro contact">
          <div class="container">
            <div class="row">
              <div class="col-md-7" data-aos="fade-left">
                <div class="secondslider" >
                  <h2>Contact Us </h2>
                  <p>Ready to transform your automotive <br>canvas into a masterpiece of radiant <br> colors and unmatched detailing? </p>
                </div>
              </div>
              <div class="col-md-4 d-flex align-items-center justify-content-center" data-aos="fade-right">
                <div class="card">
                  <div class="card-body">
                    <h3>Let’s Connect</h3>
                    <form id="contact_form" name="contact_form" method="post">
                      <div class=" row">
                        <div class="col-md-12">
                          <label>SELECT YOUR CAR MAKE</label>
                          <select class="form-control form-select brand_id" id="" onchange="handleChange(this);" required>
                            <option value=""></option>
                            <?php while($row = $allBrands->fetch_assoc()){ ?>
                                <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="col-md-12">
                          <label>SELECT YOUR CAR MODEL</label>
                          <select class="form-control form-select modal_id" id="_car_modal_" required>
                            <option></option>
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
                          <input type="text"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10" minlength="10" class="form-control phone_number" id="phone_input" name="Phone" placeholder="" required>
                        </div>
                        <div class="col-md-12">
                          <label for="message">MESSAGE</label>
                          <textarea class="form-control message" id="message" name="message" rows="2" required></textarea>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary px-4 btn-lg" id="contatSubmit">Book Your Mastercraft Session</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-2"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="section eightss" id="section7" style="background:url(images/slider8.jpg);background-size: cover;">
        <div class="intro fooetrs">
          <div class="container">
            <footer class="d-flex justify-content-between flex-column">
              <div class="row" data-aos="fade-down">
                <div class="col-6">
                  <a class="navbar-brand" href="#">
                    <img src="images/logo.png" width="100" height="" alt="Logo">
                  </a>
                  <p class="overviewf">Transforming cars into masterpieces with precision,<br>
                    Technology, and a touch of artistry</p>
                  <ul class="list-unstyled d-flex socila">
                    <li class="ms-">
                      <a class="link-dark" href="#https://www.instagram.com/mastercraft_autoservices/">
                        <i class="fa fa-instagram" aria-hidden="true"></i>

                      </a>
                    </li>
                    <li class="ms-3">
                      <a class="link-dark" href="#">
                        <i class="fa fa-youtube-play" aria-hidden="true"></i>

                      </a>
                    </li>
                    <li class="ms-3">
                      <a class="link-dark" href="https://www.linkedin.com/company/mastercraftautoservicesindia/?viewAsMember=true">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>

                      </a>
                    </li>
                 
                    <li class="ms-3">
                      <a class="link-dark" href="https://www.facebook.com/mastercraftautomotiveservices">
                        <i class="fa fa-facebook" aria-hidden="true"></i>

                      </a>
                    </li>
                  </ul>
                </div>
                <div class="col-3">
                  <h5>Quick Link</h5>
                  <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                      <a href="#" class="nav-link p-0 ">About Us</a>
                    </li>
                    <li class="nav-item mb-2">
                      <a href="#" class="nav-link p-0 ">Services</a>
                    </li>
                    <li class="nav-item mb-2">
                      <a href="#" class="nav-link p-0 ">Book Now</a>
                    </li>
                  </ul>
                </div>
                <div class="col-3 pl-0">
                  <h5>Contact us</h5>
                  <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                      <a class="nav-link p-0 ">Plot No. 84, IDC, Sector 16 Gurgaon</a>
                    </li>
                    <li class="nav-item mb-2">
                      <a href="tel:9873889977" class="nav-link p-0 ">Phone: 9873889977</a>
                    </li>
                    <li class="nav-item mb-2">
                      <a href="info.mastercraftggn@nipponpaint.co.in" class="nav-link p-0">Email: info.mastercraftggn@nipponpaint.co.in</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="d-flex justify-content-between py-4 my-4 " data-aos="fade-down"> 
                <p class="Copyright">© Copyright 2024 Nippon Master craft All rights reserved.</p>
                <ul class="list-unstyled d-flex">
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
                </ul>
              </div>
            </footer>
          </div>
        </div>
      </div>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel"></h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul id="menu" class="nav nav-pills flex-column">
          <li data-menuanchor="firstPage" class="nav-item p-0">
            <a class="nav-link" href="#firstPage"></a>
          </li>
          <li data-menuanchor="secondPage" class= nav-item ">
            <a class="nav-link" href="#secondPage">Home</a>
          </li>
          <li data-menuanchor="3rdPage" class="nav-item">
            <a class="nav-link" href="#3rdPage">Our Story </a>
          </li>
          <li data-menuanchor="fourth" class="nav-item">
            <a class="nav-link" href="#fourth">Our Promise</a>
          </li>
          <li data-menuanchor="fifth" class="nav-item">
            <a class="nav-link" href="#fifth">Why Choose Us</a>
          </li>
          <li data-menuanchor="six" class="nav-item">
            <a class="nav-link" href="#six">Our Services</a>
          </li>
          <li data-menuanchor="seven" class="nav-item">
            <a class="nav-link" href="#seven">Contact Us</a>
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
                    <h3>Let’s Connect</h3>
                    <form id="contact_formPop" name="contact_form" method="post">
                      <div class=" row">
                        <div class="col-md-12">
                          <label>SELECT YOUR CAR MAKE</label>
                          <select class="form-control form-select brand_id" id="" onchange="handleChangePop(this);" required>
                            <option value=""></option>
                            <?php foreach($allBrands as $row){ ?>
                                <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="col-md-12">
                          <label>SELECT YOUR CAR MODEL</label>
                          <select class="form-control form-select modal_id" id="_car_modal_" required>
                            <option></option>
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
                          <input type="text"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10" minlength="10" class="form-control phone_number" id="phone_input" name="Phone" placeholder="" required>
                        </div>
                        <div class="col-md-12">
                          <label for="message">MESSAGE</label>
                          <textarea class="form-control message" id="message" name="message" rows="2" required></textarea>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary px-4 btn-lg" id="contatSubmit">Book Your Mastercraft Session</button>
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
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/custom.js"></script>
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
      $(window).load(function() {
	    $(".loader").delay(3000).fadeOut("slow");
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
<script type="text/javascript" src="js/notify.js"></script>
<script type="text/javascript">
    
  $("#contact_form").submit(function(e){
      e.preventDefault();
      const brand_id = $("#contact_form").find('.brand_id').val();
      const modal_id = $("#contact_form").find('.modal_id').val();
      const full_name = $("#contact_form").find('.full_name').val();
      const phone_number = $("#contact_form").find('.phone_number').val();
      const message = $("#contact_form").find('.message').val();
    
        $('#contatSubmit').prop('disabled', true);
        $('#contatSubmit').html('Submiting...');
      
      $.ajax({
          url:'index.php',
          type: 'POST',
          data : {
              'brand_id':brand_id,
              'modal_id' : modal_id,
              'full_name' : full_name,
              'phone_number' : phone_number,
              'message' : message,
              'contact_form_submit':'contact_form_submit'
          },
          dataType: 'JSON',
          success:function(res){
              if(res.status == 200){
                $.notify(res.message,'success');
                setInterval(()=>{
                 window.location.reload();
                }, 2000);
              }else{
                console.log(res.message);
              }
          }
      
      });
      
      
  });
  
  $("#contact_formPop").submit(function(e){
      e.preventDefault();
      const brand_id = $("#contact_formPop").find('.brand_id').val();
      const modal_id = $("#contact_formPop").find('.modal_id').val();
      const full_name = $("#contact_formPop").find('.full_name').val();
      const phone_number = $("#contact_formPop").find('.phone_number').val();
      const message = $("#contact_formPop").find('.message').val();
    
        $('#contatSubmit').prop('disabled', true);
        $('#contatSubmit').html('Submiting...');
      
      $.ajax({
          url:'index.php',
          type: 'POST',
          data : {
              'brand_id':brand_id,
              'modal_id' : modal_id,
              'full_name' : full_name,
              'phone_number' : phone_number,
              'message' : message,
              'contact_form_submit':'contact_form_submit'
          },
          dataType: 'JSON',
          success:function(res){
              if(res.status == 200){
                $.notify(res.message,'success');
                setInterval(()=>{
                 window.location.reload();
                }, 2000);
              }else{
                console.log(res.message);
              }
          }
      
      });
      
      
  });
  
  const handleChangePop = async (e) => {
      const id = $(e).val();
      $.ajax({
      
          url:'index.php',
          type: 'POST',
          data : {
              'id':id,
              'getModalById':'getModalById'
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
  
  const handleChange = async (e) => {
      const id = $(e).val();
      $.ajax({
      
          url:'index.php',
          type: 'POST',
          data : {
              'id':id,
              'getModalById':'getModalById'
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


</script>
  </body>
</html>