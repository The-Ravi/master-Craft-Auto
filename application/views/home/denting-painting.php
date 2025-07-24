<!doctype html>
<html lang="en">
   <head>
     <?php $this->load->view('themes/frontend/common/top-head'); ?>
     
     <?php 
     // Set page identifier for SEO tags
     $page_identifier = 'home_denting_painting';
     // Include SEO head component
     $this->load->view('themes/frontend/common/seo-head', ['page_identifier' => $page_identifier, 'tags' => isset($tags) ? $tags : []]);
     ?>
     
     <style>
      .navbar-light .navbar-nav .nav-link {
        color: #fff;
      }
     </style>
   </head>
   <body>
      <?php $this->load->view('themes/frontend/common/header'); ?>
      <div class="main">
      <div class="wrapper">
         <div class="container">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
               <div class="owl_1 owl-carousel owl-theme">
                  <?php foreach ($service_category as $category) { ?>
                        <div class="item">
                           <li class="nav-item" role="presentation">
                              <a class="nav-link" href="<?php echo base_url() ?>services/<?php echo $category->slug ; ?>">
                                <img 
                                  src="<?php echo base_url(); ?>uploads/category/<?php echo $category->logo ?>" 
                                  alt="<?php echo get_tag($tags, 'category_logo_alt_' . $category->slug, $category->cate_name . ' Logo'); ?>"
                                >
                                <?php echo $category->cate_name ?>
                              </a>
                           </li>
                        </div>  
                   <?php } ?>
               </div>
            </ul>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-md-8">
               <div class="listings">
                  <div class="card">
                     <div class="card-body">
                        <h5 class="card-title">
                          <?php echo get_tag($tags, 'category_heading_' . $cateData->slug, $cateData->cate_name); ?>
                        </h5>
                        <p class="card-text">
                           <b><?php echo $cateData->title; ?></b>
                        </p> 
                        <div class="simplecontainer">
                         <?php foreach ($services as $service) {?>
                            <div class="accordion">
                            <div class="accordionheading">
                              <?php echo get_tag($tags, 'service_accordion_heading_' . $service->slug, $service->sub_title); ?>
                            </div>
                            <div class="accordion-content">
                            <div class="card-body">
                            <h5 class="card-title">
                              <?php echo get_tag($tags, 'service_accordion_heading_' . $service->slug, $service->sub_title); ?>
                            </h5>
                            <p class="card-text">
                               <b>
                                 <?php echo get_tag($tags, 'service_title_' . $service->slug, $service->inner_title); ?>
                               </b>
                            </p>
                            <div class="listing">
                               <div class="innerlisting">
                                  <div class="ifigure">
                                     <img 
                                       src="<?php echo base_url(); ?>uploads/services/<?php echo $service->image; ?>"
                                       alt="<?php echo get_tag($tags, 'service_image_alt_' . $service->slug, $service->sub_title); ?>"
                                     >
                                  </div>
                                  <div class="icontent">
                                     <?php echo $service->description; ?>
                                  </div>
                               </div>
                               <div class="innerbooknow">
                                  <div class="booknowhours">
                                     <img 
                                       src="<?php echo base_url(); ?>assets/frontend/images/watch.png"
                                       alt="<?php echo get_tag($tags, 'watch_img_alt', 'Watch/Hours Icon'); ?>">
                                     <span><?php echo $service->duration . ' ' . $service->duration_type; ?></span>
                                  </div>
                                  <div class="booknowbtn">
                                     <a href="javascript:void(0);" data-id="<?php echo $service->id; ?>" onclick="addToCart(this);" class="btn">+ Book Now</a>
                                  </div>
                               </div>
                            </div>
                         </div>
                            </div>
                            </div>
                      <?php } ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4" id="_productCartSection__">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" enable-background="new 0 0 40 40" class="closed" onclick="TestsFunction()" style="display:block">
      <line x1="15" y1="15" x2="25" y2="25" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-miterlimit="10"></line>
      <line x1="25" y1="15" x2="15" y2="25" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-miterlimit="10"></line>    
      <circle class="circle" cx="20" cy="20" r="19" opacity="0" stroke="#000" stroke-width="2.5" stroke-linecap="round" stroke-miterlimit="10" fill="none"></circle>
      <path d="M20 1c10.45 0 19 8.55 19 19s-8.55 19-19 19-19-8.55-19-19 8.55-19 19-19z" class="progress" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-miterlimit="10" fill="none"></path>
    </svg>
                  <div class="card shadow withprodcut _withCartProdut__">
                     <div class="card-body">
                        <div class="bookproducts">
                           <div class="productimg">
                              <img src="<?php echo base_url(); ?>assets/frontend/images/productimg.png"
                                   alt="<?php echo get_tag($tags, 'cart_product_img_alt', 'Product Image'); ?>">
                           </div>
                           <div class="proddis">
                              <div class="ptitle productTittle_">
                                 <span class="normal">BMW M340i <b>Petrol </b></span> <span class="chanegs"> Change</span>
                              </div>
                              <div class="proddisinner">
                                 <div class="toast show align-items-center cartProductAvailable_" role="alert" aria-live="assertive" aria-atomic="true">
                                    
                                 </div>
                              </div>
                              <div class="noproduct d-none cartEmptyProduct">
                                 <img src="<?php echo base_url(); ?>assets/frontend/images/noproduct.png"
                                      alt="<?php echo get_tag($tags, 'cart_noproduct_img_alt','No Product Image'); ?>">
                                 <p> Go ahead and book a service for your car.  </p>
                              </div>
                              <div class="bookinfg _getAQuote_">
                                 <button type="button" onclick="getAQuote();" class="btn btn-primary px-4 btn-lg" id="getaquote">Get a Quote</button>
                              </div>
                              <div class="otpSection_ d-none">
                                 <div class="form-group mt-3">
                                    <input type="text" class="form-control mobile_number" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Mobile no:" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10" minlength="10">
                                 </div>
                                 <div class="bookinfg">
                                    <button type="button" onclick="getOtpRequest();" class="btn btn-primary px-4 btn-lg" id="getaquote">Get Otp</button>
                                 </div>
                              </div>
                              <div class="verifyOtpSection_ d-none">
                                 <div class="form-group mt-3">
                                    <input type="text" class="form-control otp" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter OTP" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="6" minlength="6">
                                 </div>
                                 <div class="alerts d-flex align-items-center" role="alert">
                                    <svg class="ft-green-tick" xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 48 48" aria-hidden="true">
                                       <circle class="circles" fill="#5bb543" cx="24" cy="24" r="22"></circle>
                                       <path class="tick" fill="none" stroke="#FFF" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M14 27l5.917 4.917L34 17"></path>
                                    </svg>
                                    <div class="resend-otp1" style="display: flex;gap:10px;">
                                        <span class="resend-otp-text">Resend OTP</span>
                                        <span class="resend-otp-link" style="display: none;">
                                            <a class="use-ajax" href="javascript:void(0)" id="resend-otp" data-once="ajax" onclick="resendOTP();">Resend OTP</a>
                                        </span>:
                                        <div id="timer" class="timer">0:59</div>
                                    </div>
                                 </div>
                                 <input type="hidden" class="phone_number" name="">
                                 <div class="bookinfg">
                                    <button type="button" onclick="verifyOtp();" class="btn btn-primary px-4 btn-lg" id="getaquote">Verify</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card shadow emptyprodcut _emptyProductSec__">
                     <div class="card-body">
                        <div class="bookproducts">
                           <div class="proddis">
                              <div class="noproduct">
                                 <img src="<?php echo base_url(); ?>assets/frontend/images/noproduct.png"
                                      alt="<?php echo get_tag($tags, 'cart_noproduct_img_alt','No Product Image'); ?>">
                                 <p> Go ahead and book a service for your car.  </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card shadow emptyprodcut d-none thankYouproductCartSec__">
                     <div class="card-body">
                        <div class="bookproducts">
                           <div class="proddis">
                              <div class="noproduct">
                                 <img src="<?php echo base_url(); ?>assets/frontend/images/success.png"
                                      alt="<?php echo get_tag($tags, 'cart_success_img_alt','Thank You'); ?>">
                                 <p> Thank you. </p>
                                 <p> we will contact you soon.</p>
                              </div>
                           </div>
                           <div class="bookinfg">
                              <button type="button" class="btn btn-primary px-4 btn-lg" id="getaquote" onclick="window.location.reload();">Continue</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
         </div>
      </div>
      </div>

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
                    <div class="col-md-12 d-flex align-items-center justify-content-center">
                      <div class="card">
                        <div class="card-body">
                          <h3>
                            <?php echo get_tag($tags, 'modal_heading', 'Let’s Connect'); ?>
                          </h3>
                          <form id="bookingSession" name="contact_form" method="post">
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
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <label for="email_addr">Fuel Type</label>
                                <select class="form-control form-select petrol_type">
                                   <option value=""></option>
                                   <option value="Petrol">Petrol</option>
                                   <option value="Diesel">Diesel</option>
                                   <option value="CNG">CNG</option>
                                </select>
                              </div>
                              <input type="hidden" id="wash_id" name="">
                              <button type="button" onclick="bookingSessionCart();" class="btn btn-primary px-4 btn-lg" id="contatSubmit">Book Your Mastercraft Session</button>
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
      <div class="modal fade" id="editCartModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editCartModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body modal-dialog-centered">
              <div class="intro contact">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12 d-flex align-items-center justify-content-center">
                      <div class="card">
                        <div class="card-body">
                          <h3>
                            <?php echo get_tag($tags, 'edit_modal_heading', 'Let’s Connect'); ?>
                          </h3>
                          <form id="bookingSession" name="contact_form" method="post">
                            <div class="row">
                              <div class="col-md-12">
                                <label>SELECT YOUR CAR MAKE</label>
                                <select class="form-control form-select brand_id" id="" onchange="handleChangePopedit(this);" required>
                                  <option value=""></option>
                                  <?php foreach($allBrands as $row){ ?>
                                    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                                  <?php } ?>
                                </select>
                              </div>
                              <div class="col-md-12">
                                <label>SELECT YOUR CAR MODEL</label>
                                <select class="form-control form-select modal_id" id="_car_modal_" required>
                                  <option value=""></option>
                                  <?php foreach ($allmodals as $key => $value) { ?>
                                    <option value="<?php echo $value->id; ?>"><?php echo $value->name; ?></option>
                                  <?php } ?>
                                </select>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <label for="email_addr">Fuel Type</label>
                                <select class="form-control form-select petrol_type">
                                  <option value=""></option>
                                  <option value="Petrol">Petrol</option>
                                  <option value="Diesel">Diesel</option>
                                  <option value="CNG">CNG</option>
                                </select>
                              </div>
                              <input type="hidden" id="cartid" name="">
                              <button type="button" onclick="updateBookingSessionCart();" class="btn btn-primary px-4 btn-lg" id="contatSubmit">Book Your Mastercraft Session</button>
                            </div>
                          </form>
                        </div> <!-- card-body -->
                      </div> <!-- card -->
                    </div> <!-- col-md-12 -->
                  </div> <!-- row -->
                </div> <!-- container -->
              </div> <!-- intro contact -->
            </div> <!-- modal-body -->
          </div> <!-- modal-content -->
        </div> <!-- modal-dialog -->
      </div> <!-- modal fade -->

      <?php $this->load->view('themes/frontend/common/footer'); ?>
      <script>
         $(' .owl_1').owlCarousel({
             loop: false,
             margin:0,
             responsiveClass: true, 
             autoplayHoverPause: true,
             nav: true,
             autoplay: false,
             autoWidth:true,
             slideSpeed: 400,
             paginationSpeed: 400,
             autoplayTimeout: 3000,
             responsive: {
                 0: {
                     items: 6,
                     nav: true,
                     loop: false
                 },
                 600: {
                     items: 5,
                     nav: true,
                     loop: false
                 },
                 1000: {
                     items: 7,
                     nav: true,
                     loop: false
                 }
             }
         });

         const accordionItems = document.querySelectorAll(".accordion");

         accordionItems.forEach((accordion) => {
             accordion.addEventListener("click", function () {
                 accordionItems.forEach((item) => {
                     if (item !== accordion && item.classList.contains("is-open")) {
                         item.classList.remove("is-open");
                         let content = item.nextElementSibling;
                         content.style.maxHeight = null;
                         const upperDiv = item.closest('.upper-div');
                         if (upperDiv) {
                             upperDiv.classList.remove("active");
                         }
                     }
                 });
                 this.classList.toggle("is-open");
                 let content = this.nextElementSibling;
                 if (content.style.maxHeight) {
                     content.style.maxHeight = null;
                 } else {
                     content.style.maxHeight = content.scrollHeight + "px";
                 }
                 const upperDiv = this.closest('.upper-div');
                 if (upperDiv) {
                     upperDiv.classList.add("active");
                 }
             });
             accordion.addEventListener("keydown", function (event) {
                 if (event.key === "Enter" || event.key === " ") {
                     event.preventDefault();
                     accordion.click();
                 }
             });
         });
      </script>
      <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/cart.js"></script>
      <script type="text/javascript">
         var BASEURL =  '<?php echo base_url(); ?>';
      </script>
   </body>
</html>