<!DOCTYPE html>
<html lang="en">
   <head>
     <!-- top head start -->
     <?php $this->load->view('themes/frontend/common/top-head'); ?>
     <!-- top head end -->
     
     <?php 
     // Set page identifier for SEO tags
     $page_identifier = 'home_testimonials';
     // Include SEO head component
     $this->load->view('themes/frontend/common/seo-head', ['page_identifier' => $page_identifier, 'tags' => isset($tags) ? $tags : []]);
     ?>

     <style>
        .discretion-blog p{
    height: 200px;
    overflow: auto;
}.cuna img {
    max-width: 30px !important;
    filter: opacity(0.5);
}
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
.strip.striptes img {
    max-width: 45%;
    display: inline-block;
    float: right;
    margin-right: 176px;
    margin-top: 18px;
}
.thirdslider .secondslider h2 {
    font-size: 45px;
    line-height: 53px;
    text-shadow: none !important;
}
.fp-overflow.aboutus {
    padding: 250px 0px 250px 0px;
    height: auto !IMPORTANT;
    clear: both;
    max-height: fit-content;
    background-size: cover !important;
}
.fp-overflow.aboutus .container {
    max-width: 1260px;
}

/* clearfix */
.owl-carousel .owl-wrapper:after {
	content: ".";
	display: block;
	clear: both;
	visibility: hidden;
	line-height: 0;
	height: 0;
}
/* display none until init */
.owl-carousel{
	display: none;
	position: relative;
	width: 100%;
	-ms-touch-action: pan-y;
}
.owl-carousel .owl-wrapper{
	display: none;
	position: relative;
	-webkit-transform: translate3d(0px, 0px, 0px);
}
.owl-carousel .owl-wrapper-outer{
	overflow: hidden;
	position: relative;
	width: 100%;
}
.owl-carousel .owl-wrapper-outer.autoHeight{
	-webkit-transition: height 500ms ease-in-out;
	-moz-transition: height 500ms ease-in-out;
	-ms-transition: height 500ms ease-in-out;
	-o-transition: height 500ms ease-in-out;
	transition: height 500ms ease-in-out;
}
.owl-carousel .owl-item img{
    max-width: 100%;
}
.owl-carousel .item {
    padding: 0 7.5px;
}
.owl-carousel .owl-item{
	float: left;
}
.owl-controls .owl-page,
.owl-controls .owl-buttons div{
	cursor: pointer;
}
.owl-controls {
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

/* mouse grab icon */
.grabbing { 
    cursor:url(grabbing.png) 8 8, move;
}

/* fix */
.owl-carousel  .owl-wrapper,
.owl-carousel  .owl-item{
	-webkit-backface-visibility: hidden;
	-moz-backface-visibility:    hidden;
	-ms-backface-visibility:     hidden;
  -webkit-transform: translate3d(0,0,0);
  -moz-transform: translate3d(0,0,0);
  -ms-transform: translate3d(0,0,0);
}

#demo1 .customNavigation, #demo2 .customNavigation {
    top: 50%;
    position: absolute;
    width: 100%;
    left: 0px;
    margin-top: -40px;
}
#demo1 .customNavigation .btn, #demo2 .customNavigation .btn {
    padding: 0px;
}
#demo1 .customNavigation .btn.prev, #demo2 .customNavigation .btn.prev {
    position: relative;
    left:-76px;
}
#demo1 .customNavigation .btn.next, #demo2 .customNavigation .btn.next {
    position: relative;
        right: -70px;
    float: right;
}
div#demo1 {
    position: relative;
}

.user-blog {
    background: #f5f5f5;
    padding: 50px 0 50px;
}
.user-blog:before {
    position: absolute;
    top: -100px;
    left: 0;
    content: " ";
    background: url(img/user-blog.png);
    background-size: 100% 100px;
    width: 100%;
    height: 100px;
    float: left;
    z-index: 99;
}
div#owl-demo1 .item {
    padding: 0 15px;
}
.discretion-blog {
    clear: both;
    position: relative;
    top: -45px;
    z-index: 9;
    background: #fff;
    margin: 0px 15px;
    border-radius: 8px;
}.discretion-blog p {
    padding: 10px 0px;
    font-size: 12px;
    text-align: justify;
}

.discretion-blog {
    padding: 15px;
}

.discretion-blog p {
    font-size: 12px;
    color: #282828;
}


.discretion-blog .btn {
    color: #fefeff;
    background: #454343;
    width: 100%;
    text-transform: uppercase;
    border-radius: 0px;
    margin-top: 10px;
    -webkit-transform: perspective(1px) translateZ(0);
    -moz-transform: perspective(1px) translateZ(0);
    -o-transform: perspective(1px) translateZ(0);
    transform: perspective(122px) translateZ(0);
}


.discretion-blog .btn:hover {
    color: #ffffff;
}
.discretion-blog .btn:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: #79b82d;
    -webkit-transform: scaleX(0);
    transform: scaleX(0);
    -webkit-transform-origin: 0 50%;
    transform-origin: 0 50%;
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out;
    border: 2px solid #79b82d;
}

.discretion-blog .btn:hover:before {
    -webkit-transform: scaleX(1);
    -moz-transform: scaleX(1);
    -o-transform: scaleX(1);
    transform: scaleX(1);
}
.date-blog {
    background: #82b53f;
    width: 70px;
    position: absolute;
    bottom: 0;
    left: 15px;
    color: #fff;
    text-align: center;
    padding: 10px 0px;
}
.date-blog:after {
    width: 0;
    height: 0;
    content: "";
    border-left: 0 solid transparent;
    border-right: 70px solid transparent;
    border-bottom: 12px solid #82b53f;
    top: -11px;
    position: absolute;
    left: 0;
}
.img-date {
    position: relative;
}
.user-blog .owl-theme .owl-controls .owl-page span {
    width: 17px;
    height: 17px;
    background: #454343;
    opacity: 1;
}
.user-blog .owl-theme .owl-controls .owl-page.active span, .user-blog .owl-theme .owl-controls.clickable .owl-page:hover span {
    background: #82b53f;
}
div#owl-demo1 .owl-item>div {
    cursor: pointer;
    margin: 5% 0% 0% 0%;
    background: transparent;
    color: #fff;
    padding: 7px 7px;
    font-size: 13px;
    text-align: center;
    height: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: ease-in-out;
}
.owl-carousel .owl-item img {
    max-width: 100%;
    float: left;
}.cuna {
    color: #000;
    text-align: left;
}
.cuna span {
    display: block;
    text-align: left;
    font-size: 10px;
}
.cuna img {
    width: auto !important;
    margin-right: 10px;
    margin-top: 5px;
}
@media (max-width: 700px) {
.fp-overflow.aboutus {
    background-position: 627px 0px !important;
}.fp-overflow.aboutus .row .col-md-6.d-flex.align-items-center.justify-content-center {
    background: #02020273;
}
.customNavigation {
    display: none;
}
#testimonial {
    background: url(assets/frontend/images/tstm.png) !important;
}
.fp-overflow.aboutus .row .col-md-6.d-flex.align-items-center.justify-content-center {
    background: transparent;
}
.thirdslider, .secondslider {
    padding: 0px 0px;
}
.thirdslider .secondslider h2 {
    font-size: 25px;
    line-height: 30px;
    text-shadow: none !important;
    text-align: center;
}
.fp-overflow.aboutus {
    padding: 139px 0px 320px 0px;
}
.strip.striptes {
    text-align: center;
}
.strip.striptes img {
    max-width: 45%;
    display: inline-block;
    float: none;
    margin-right: 0;
    margin-top: 18px;
}
.discretion-blog {
    margin: 0px 7px;

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

      <div class="fp-overflow aboutus" id="testimonial" tabindex="-1" style="background:url(assets/frontend/images/testi.png)">
        <div class="intro">
          <div class="thirdslider">
            <div class="container">
              <div class="row">
                <div class="col-md-6 d-flex align-items-center justify-content-center">
                  <div class="content ">
                  <div class="secondslider ">
                    <h2>What Consumer</br>
                    Says About us </h2>
                    <div class="strip striptes">
                      <img src="assets/frontend/images/striptes.png">
                    </div>
                  
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
      <section class="user-blog">
        <div class="container">

        
            <div id="demo1">
                <div class="span12">

                    <div id="owl-demo1" class="owl-carousel">
                        <div class="item">
                            <div class="blog-grid">
                                <div class="img-date">
                                <img src="assets/frontend/images/Honda-City.jpg">

                                </div>
                                <div class="discretion-blog">
                                    <p>I recently took my car to MasterCraft, Gurgaon and I couldn't be happier with the service I received. From the
                                        moment I walked in, the staff was professional and friendly. My car was handled very well. They took the time to
                                        explain what needed to be done to fix it. I was updated regularly. The repair was done in time and extremely up to
                                        my satisfaction. I highly recommend MasterCraft Gurgaon for anyone in need of quality car repair services.

                                     </p>

                                <div class="cuna"><img src="assets/frontend/images/Inderjeet.png">
                                <b>PREETI SODHI</b>
                                  <span>Car Model - Honda city</span>
                                </div>                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-grid">
                                <div class="img-date">
                                <img src="assets/frontend/images/Tata-Harrier.jpg">

                                </div>
                                <div class="discretion-blog">
                                    <p>N Service Automotive pt. Ltd. where I recently took my car there for a minor repair and wash. I am completely
                                satisfied and happy with the quality service and timely repair of my vehicle. The staff was very friendly and
                                knowledgeable, and they quickly diagnosed and fixed the issue. I highly recommend N Service Automotive pvt.
                                Ltd. Garage for their professionalism and expertise</p>

                                <div class="cuna"><img src="assets/frontend/images/Inderjeet.png">
                                <b>INDERJEET YADAV</b>
                                  <span>Car Model - Tata Harrier </span>
                                </div>                               
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-grid">
                                <div class="img-date">
                                <img src="assets/frontend/images/Tata-Altroz.jpg">

                                </div>
                                <div class="discretion-blog">
                                    <p>Hi Inder Singh,
As you know, on June 11th, I submitted my car for the correction of the front bumper and bonnet damage. You
picked up my car from my residence, which was very helpful. Your service was excellent, and you completed
everything within the committed timeframe. Your support for other updates was also very much appreciated.</p>

                                <div class="cuna"><img src="assets/frontend/images/Inderjeet.png">
                                <b>ARUN THETTAN</b>
                                  <span>Car Model - Tata ALTROZ</span>
                                </div>                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-grid">
                                <div class="img-date">
                                <img src="assets/frontend/images/Toyota-Yaris.jpg">

                                </div>
                                <div class="discretion-blog">
                                    <p>Hi Inder
                                The car is running pretty well entire process for claim, car repair was done in a couple days which was great.
                                Would def recommend Mastercraft in my circle.</p>

                                <div class="cuna"><img src="assets/frontend/images/Inderjeet.png">
                                <b>MAYANK DALAL</b>
                                  <span>Car Model - Toyota Yaris</span>
                                </div>                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="blog-grid">
                                <div class="img-date">
                                <img src="assets/frontend/images/Hyundai-i20.jpg">

                                </div>
                                <div class="discretion-blog">
                                    <p>I wanted to take a moment to express my sincere gratitude for the exceptional maintenance work done on my
car. Your attention to detail and expertise have ensured my vehicle is running smoothly and efficiently. Please
pass along my appreciation to the entire team, who worked on my car. Your professionalism and dedication to
delivering high-quality service are truly commendable.
Thank you again for a job well done! I look forward to continuing to trust my car's maintenance to your capable
hands.
</p>

                                <div class="cuna"><img src="assets/frontend/images/Inderjeet.png">
                                <b>HANISH KHAN</b>
                                  <span>Car Model - Hyundai i20</span>
                                </div>                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-grid">
                                <div class="img-date">
                                <img src="assets/frontend/images/Hyundai-Creta.jpg">

                                </div>
                                <div class="discretion-blog">
                                    <p>I had a wonderful experience with Master craft, staff is very very knowledgeable and helpful in terms of any
matter with the car, Mr inder was one of the best and handled my case very professionally i was being informed
about each step throughout. Loved your service looking forward to visit you.
</p>

                                <div class="cuna"><img src="assets/frontend/images/Inderjeet.png">
                                <b>SHANKAR SAINI</b>
                                  <span>Car Model - Hyundai Creta</span>
                                </div>                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-grid">
                                <div class="img-date">
                                <img src="assets/frontend/images/Ford-Titanium.jpg">

                                </div>
                                <div class="discretion-blog">
                                    <p>Gave my car for denting and painting works at MasterCraft after a minor accident.
Very pleased with the professionalism and quality of work done. The paint match was impeccable.
Upon inspection of their workshop, I found that it was a unit of Nippon Paint (Japan) and had state-of-the-art
facilities for various kinds of repairing works, car servicing, paint jobs, detailing, etc. Absolutely recommended
place in Gurgaon for aftermarket works.
</p>

                                <div class="cuna"><img src="assets/frontend/images/Inderjeet.png">
                                <b>ABHIJIT DAIMARI</b>
                                  <span>Car Model - Ford Titanium
</span>
                                </div>                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-grid">
                                <div class="img-date">
                                <img src="assets/frontend/images/Hyundai-Alcazar.jpg">

                                </div>
                                <div class="discretion-blog">
                                    <p>I hope this message finds you well. I am writing to express my heartfelt appreciation for the commendable job
your team did on repainting the patch on my car. The quality of work and attention to detail demonstrated by your
team were truly impressive. The color matching and finish are impeccable, making the patched area blend
seamlessly with the rest of the car. Your professionalism and dedication to delivering high-quality work did not go
unnoticed. Please extend my gratitude to everyone involved in the project. Your team's expertise and
commitment have not only restored the car's appearance but also exceeded my expectations. I will certainly
recommend Car Painter to anyone in need of top-notch auto painting services and will not hesitate to return for
future needs. Thank you once again for the excellent work
.</p>

                                <div class="cuna"><img src="assets/frontend/images/Inderjeet.png">
                                <b>NARESH SAXENA</b>
                                  <span>Car Model - Hyundai Alcazar
</span>
                                </div>                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="customNavigation">
                        <a class="btn prev"><img src="assets/frontend/images/law.png" width="40"></a>
                        <a class="btn next"><img src="assets/frontend/images/rar.png" width="40"></a>

                    </div>

                </div>

            </div>

        </div>
        </div>
    </section>

      <!-- Footer section start -->
     <?php $this->load->view('themes/frontend/common/footer'); ?>
      <!-- Footer section end -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
     <script>
 $(document).ready(function() {

var owl = $("#owl-demo1");

owl.owlCarousel({

    items: 3, //10 items above 1000px browser width
    itemsDesktop: [1000, 3], //5 items between 1000px and 901px
    itemsDesktopSmall: [900, 2], // 3 items betweem 900px and 601px
    itemsTablet: [600, 1.2], //2 items between 600 and 0;
    itemsMobile: [360, 1.2] // itemsMobile disabled - inherit from itemsTablet option

});

// Custom Navigation Events
$(".next").click(function() {
    owl.trigger('owl.next');
})
$(".prev").click(function() {
    owl.trigger('owl.prev');
})
$(".play").click(function() {
    owl.trigger('owl.play', 1000);
})
$(".stop").click(function() {
    owl.trigger('owl.stop');
})

});


     </script>  
   </body>
</html>


