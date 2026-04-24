<!DOCTYPE html>

<html lang="en">

   <head>

     <!-- top head start -->

     <?php $this->load->view('themes/frontend/common/top-head'); ?>

     <!-- top head end -->
     
     <?php 
     // Set page identifier for SEO tags
     $page_identifier = 'home_services_details';
     // Include SEO head component
     $this->load->view('themes/frontend/common/seo-head', ['page_identifier' => $page_identifier, 'tags' => isset($tags) ? $tags : []]);
     ?>
<style>
   .booknow {
      display: none;
   }
   .intro.fooetrs {
    height: auto;
}
.intro.fooetrs .container {
    height: auto;
}
.card.shadow.emptyprodcut._emptyProductSec__,
#_productCartSection__ {
    display: none !important;
}

/* Compact styling for right-side Book Now form */
.bookproducts {
    position: sticky;
    top: 20px;
    overflow: hidden;
    border-radius: 8px !important;
    border: none !important;
    padding: 0 !important;
}
.book-now-banner {
    width: 100%;
    height: 140px;
    background: linear-gradient(135deg, #223E7F 0%, #4a6fa5 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
    margin: 0;
    border-radius: 8px 8px 0 0;
}
.book-now-banner img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}
.banner-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(34, 62, 127, 0.85) 0%, rgba(74, 111, 165, 0.75) 100%);
    z-index: 1;
}
.banner-text {
    position: relative;
    z-index: 2;
    color: white;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
}
.banner-text i {
    font-size: 40px;
    color: white;
    animation: carBounce 2s infinite;
}
.banner-text span {
    font-size: 16px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
}
@keyframes carBounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-5px); }
}
.bookproducts .card-body {
    padding: 15px 15px 10px 15px !important;
}
.bookproducts h3 {
    font-family: Speed;
    font-size: 20px;
    font-weight: 600;
    color: #223E7F;
    margin-top: 0 !important;
    margin-bottom: 12px !important;
    text-align: center;
}
.bookproducts p {
    font-size: 13px;
    color: #666;
    margin-bottom: 10px !important;
}
#service_details_booknow_form .col-md-12 {
    margin-bottom: 8px;
}
#service_details_booknow_form label {
    font-size: 10px;
    font-weight: 600;
    color: #223E7F;
    margin-bottom: 3px;
    text-transform: uppercase;
}
#service_details_booknow_form .form-control,
#service_details_booknow_form .form-select {
    font-size: 12px;
    padding: 6px 10px;
    border: 1px solid #ddd;
    border-radius: 3px;
    height: 32px;
}
#service_details_booknow_form textarea.form-control {
    min-height: 50px;
    height: 50px;
    resize: vertical;
    padding: 6px 10px;
}
#service_details_booknow_form .btn-primary {
    width: 100%;
    background: #223E7F;
    border: none;
    padding: 10px;
    font-size: 14px;
    font-weight: 600;
    border-radius: 3px;
    margin-top: 8px !important;
    margin-bottom: 0 !important;
}
#service_details_booknow_form .btn-primary:hover {
    background: #1a2f5f;
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



      <!-- Navbar End -->

      <div class="main">

         <div class="wrapper">

            <div class="container">

               <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                  <div class="owl_1 owl-carousel owl-theme">

                     

                       <?php foreach ($service_category as $category): ?>
                        <?php $alt_key = 'category_logo_alt_' . $category->slug; ?>
                        <div class="item">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" href="<?php echo base_url('services/' . $category->slug); ?>">
                                    <img src="<?php echo base_url('uploads/category/' . $category->logo); ?>"
                                         alt="<?php echo htmlspecialchars(get_tag($tags, $alt_key, $category->cate_name.' logo')); ?>">
                                    <?php echo htmlspecialchars($category->cate_name); ?>
                                </a>
                            </li>
                        </div>
                    <?php endforeach; ?>

                  </div>

               </ul>

            </div>

         </div>

         <div class="container">

            <div class="row">

               <div class="col-md-8">

                  <div class="listings">
                          

                           <?php

                           $displayedTitles ="";

                           $displayedSubtitles ="";

                           foreach ($services as $service) {

                           ?>

                           <div class="card">

                              <div class="card-body">

                              <h5 class="card-title">
                                 <?php
                                    $h5_key = 'services_card_h5_' . $service->slug;
                                    $tag_val = get_tag($tags, $h5_key, $service->tittle);
                                    echo "<!-- ";
                                    echo "Key: $h5_key | ";
                                    foreach ($tags as $tag) {
                                       if ($tag->tag_key === $h5_key) {
                                             echo "Tag Found! Value: $tag->tag_value";
                                       }
                                    }
                                    echo " | Output: $tag_val";
                                    echo " -->\n";
                                    echo ($displayedTitles != $service->tittle)
                                       ? $tag_val
                                       : '';
                                    $displayedTitles = $service->tittle;
                                                                  ?>
                                 </h5>

                              <p class="card-text">

                                 <b>
                                    <?php  if($displayedSubtitles!=$service->sub_title){echo $service->sub_title; $displayedSubtitles=$service->sub_title; } ?></b>

                              </p>

                              <div class="listing">

                                 <div class="innerlisting">

                                    <div class="ifigure">
                                     <?php
                                       $alt_key_img = 'service_image_alt_' . $service->slug;
                                    ?>
                                       <img src="<?php echo base_url('uploads/services/' . $service->image); ?>"
                                                 alt="<?php echo htmlspecialchars(get_tag($tags, $alt_key_img, $service->tittle)); ?>">
                                    </div>

                                    <div class="icontent">

                                       <p class="card-text">

                                          <b><?php echo $service->inner_title; ?></b>

                                       </p>

                                       <?php echo $service->description; ?> 
                                       
                                       <?php if(!empty(getSubDataByService($service->id))){ ?>
                                       <ul class="tabs">
                                          <?php foreach(getSubDataByService($service->id) as $subdata){ ?>
                                            <li class="cart_button_sec_<?= $subdata->id ?>"><a href="javascript:void(0);" data-id="<?= $subdata->id ?>" onclick="addToCart(this);" tittle="Add to Cart"><?= $subdata->tittle ?></a>
                                                <button type="button" data-id="<?= $subdata->id ?>" class="remove-icon removeCart d-none" onclick="removeFromCart(this);"><i class="fa fa-close"></i></button>
                                            </li>
                                          <?php } ?>
                                       </ul>
                                        <?php } ?>
                                    </div>

                                 </div>

                                 <div class="innerbooknow">

                                    <div class="booknowhours">

                                       <?php $watch_img_key = 'watch_icon_alt'; ?>
                                            <img src="<?php echo base_url('assets/frontend/images/watch.png'); ?>"
                                                 alt="<?php echo htmlspecialchars(get_tag($tags, $watch_img_key, 'Duration')); ?>" />

                                       <span><?php echo $service->duration; ?></span>

                                    </div>

                                    <div class="booknowbtn cart_button_sec_<?= $service->id ?>">
                                        <!-- In-page Book Now handled by right-side form; cart buttons removed -->
                                    </div>

                                 </div>

                              </div>

                                </div>

                              </div>

                              <?php } ?>

                  </div>

               </div> 

               <!-- Right side: inline Book Now form instead of cart -->
               <div class="col-md-4">
                  <div class="card shadow intro contact bookproducts">
                     <!-- Car Image Banner -->
                     <div class="book-now-banner">
                        <div class="banner-overlay"></div>
                        <img src="<?php echo base_url('assets/frontend/images/benzcar.jpg'); ?>" 
                             alt="Book Car Service" 
                             class="img-fluid">
                        <div class="banner-text">
                           <i class="fa fa-car"></i>
                           <span>Book Your Service</span>
                        </div>
                     </div>
                     <div class="card-body">
                        <h3><?= get_tag($tags, 'service_details_sidebar_booknow_h3', 'Book Now'); ?></h3>
                        <form id="service_details_booknow_form" name="service_details_booknow_form" method="post">
                          <div class="row">
                            <div class="col-md-12">
                              <label>SELECT YOUR CAR MAKE</label>
                              <select class="form-control form-select brand_id" onchange="handleChangePop(this);" required>
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
                              <label for="petrol_type">FUEL TYPE</label>
                              <select name="petrol_type" class="form-control form-select petrol_type" required>
                                <option value="">Select Fuel Type</option>
                                <option value="Petrol">Petrol</option>
                                <option value="Diesel">Diesel</option>
                                <option value="CNG">CNG</option>
                                <option value="Electric">Electric</option>
                              </select>
                            </div>
                            <div class="col-md-12">
                              <label for="services">SELECT YOUR CAR SERVICE</label>
                              <select name="service" class="form-control form-select service" required>
                                <option value=""></option>
                                <?php if(isset($service_category) && !empty($service_category)): ?>
                                  <?php foreach($service_category as $category): ?>
                                    <option value="<?php echo htmlspecialchars($category->cate_name); ?>"><?php echo htmlspecialchars($category->cate_name); ?></option>
                                  <?php endforeach; ?>
                                <?php endif; ?>
                              </select>
                            </div>
                            <div class="col-md-12">
                              <label for="email_addr">FULL NAME</label>
                              <input type="text" maxlength="50" class="form-control full_name" placeholder="" required>
                            </div>
                            <div class="col-md-12">
                              <label for="phone_input">PHONE</label>
                              <input type="text"
                                     class="form-control phone_number"
                                     oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                     maxlength="10" minlength="10"
                                     placeholder="Enter your phone number" required>
                            </div>
                            <div class="col-md-12">
                              <label for="message">MESSAGE</label>
                              <textarea class="form-control message" rows="2" required></textarea>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-primary px-4 btn-lg mt-3" id="contatSubmitSidebar">
                            <?= get_tag($tags, 'service_details_sidebar_btn_text', 'Submit'); ?>
                          </button>
                        </form>
                      </div>
                  </div>
               </div>

               <!-- OLD CART SIDEBAR REMOVED
               <div class="col-md-4 d-none" id="_productCartSection__">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" enable-background="new 0 0 40 40" class="closed" onclick="TestsFunction()"  style="display:block">
      <line x1="15" y1="15" x2="25" y2="25" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-miterlimit="10"></line>
      <line x1="25" y1="15" x2="15" y2="25" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-miterlimit="10"></line>    
      <circle class="circle" cx="20" cy="20" r="19" opacity="0" stroke="#000" stroke-width="2.5" stroke-linecap="round" stroke-miterlimit="10" fill="none"></circle>
      <path d="M20 1c10.45 0 19 8.55 19 19s-8.55 19-19 19-19-8.55-19-19 8.55-19 19-19z" class="progress" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-miterlimit="10" fill="none"></path>
    </svg>
                  <div class="card shadow withprodcut _withCartProdut__">

                     <div class="card-body">

                        <div class="bookproducts">

                           <div class="productimg">

                              <?php $product_img_alt_key = 'sidebar_product_img_alt'; ?>
                                <img src="<?php echo base_url('assets/frontend/images/productimg.png'); ?>"
                                     alt="<?php echo htmlspecialchars(get_tag($tags, $product_img_alt_key, 'Product image')); ?>">

                           </div>

                           <div class="proddis">

                              <div class="ptitle productTittle_">

                                 <span class="normal " data-bs-toggle="modal" data-bs-target="#editCartModal">BMW M340i <b>Petrol </b></span> <span class="chanegs"> Change</span>

                              </div>

                              <div class="proddisinner">

                                 <div class="toast show align-items-center cartProductAvailable_" role="alert" aria-live="assertive" aria-atomic="true">

                                    

                                 </div>

                              </div>

                              <div class="noproduct d-none cartEmptyProduct">

                                  <?php $sidebar_noprod_key = 'sidebar_no_product_img_alt'; ?>
                                    <img src="<?php echo base_url('assets/frontend/images/noproduct.png'); ?>"
                                         alt="<?php echo htmlspecialchars(get_tag($tags, $sidebar_noprod_key, 'No product found')); ?>">
                                 <p> Go ahead and book a service for your car.  </p>

                              </div>

                              

                              <div class="bookinfg _getAQuote_">

                                 <button type="button" onclick="getAQuote();" class="btn btn-primary px-4 btn-lg" id="getaquote">Get a Quote</button>

                              </div>

                              <!-- Otp Section -->

                              <div class="otpSection_ d-none">

                                 <div class="form-group mt-3">

                                    <input type="text" class="form-control mobile_number" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Mobile no:" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10" minlength="10">

                                 </div>

                                 <div class="bookinfg">

                                    <button type="button" onclick="getOtpRequest();" class="btn btn-primary px-4 btn-lg" id="getaquote">Get OTP</button>

                                 </div>

                              </div>

                              <!-- End Otp section -->

                              <!-- Verify Otp Section -->

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

                                   <!--  <div class="sentOtp_message">

                                       OTP sent successfully

                                    </div> -->

                                 </div>

                                 <input type="hidden" class="phone_number" name="">

                                 <div class="bookinfg">

                                    <button type="button" onclick="verifyOtp();" class="btn btn-primary px-4 btn-lg" id="getaquote">Verify</button>

                                 </div>

                              </div>

                              <!-- verify Otp section -->

                           </div>

                        </div>

                     </div>

                  </div>

                  <div class="card shadow emptyprodcut _emptyProductSec__">

                     <div class="card-body">

                        <div class="bookproducts">

                           <!-- <div class="productimg">

                              <img src="<?php echo base_url(); ?>assets/frontend/images/productimg.png">

                           </div> -->

                           <div class="proddis">

                              <!-- <div class="ptitle">

                                 <span class="normal">BMW M340i <b>Petrol </b></span> <span class="chanegs"> Change</span>

                              </div> -->

                              <div class="noproduct">

                                <img src="<?php echo base_url('assets/frontend/images/noproduct.png'); ?>"
                                    alt="<?php echo htmlspecialchars(get_tag($tags, 'sidebar_no_product_img_alt', 'No product found')); ?>">

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

                                  <?php $thankyou_img_alt_key = 'sidebar_thankyou_img_alt'; ?>
                                    <img src="<?php echo base_url('assets/frontend/images/success.png'); ?>"
                                         alt="<?php echo htmlspecialchars(get_tag($tags, $thankyou_img_alt_key, 'Thank you success icon')); ?>">

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

                  <!-- <div class="card shadow mwithprodcut d-none">

                     <div class="card-body">

                        <div class="bookproducts">

                           <div class="productimg">

                              <img src="<?php echo base_url(); ?>assets/frontend/images/productimg.png">

                           </div>

                           <div class="proddis">

                              <div class="ptitle">

                                 <span class="normal">BMW M340i <b>Petrol </b></span> <span class="chanegs"> Change</span>

                              </div>

                              <div class="proddisinner">

                                 <div class="toast show align-items-center" role="alert" aria-live="assertive" aria-atomic="true">

                                    <div class="d-flex">

                                       <div class="toast-body">

                                          Ceramic Coating

                                       </div>

                                       <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>

                                    </div>

                                    <div class="d-flex">

                                       <div class="toast-body">

                                          Deep Cleansing 

                                       </div>

                                       <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>

                                    </div>

                                 </div>

                              </div>

                              <div class="form-group mt-3">

                                 <input type="type" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Mobile no:">

                              </div>

                              <div class="bookinfg">

                                 <button type="submit" class="btn btn-primary px-4 btn-lg" id="getaquote">Get Otp</button>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div> -->

                  <div class="card shadow otpwithprodcut d-none">

                     <div class="card-body">

                        <div class="bookproducts">

                           <div class="productimg">

                            <img src="<?php echo base_url(); ?>assets/frontend/images/productimg.png"; ?>"
                               alt="<?php echo htmlspecialchars(get_tag($tags, 'sidebar_product_img_alt', 'Product image')); ?>">
                           </div>

                           <div class="proddis">

                              <div class="ptitle">

                                 <span class="normal">BMW M340i <b>Petrol </b></span> <span class="chanegs"> Change</span>

                              </div>

                              <div class="proddisinner">

                                 <div class="toast show align-items-center" role="alert" aria-live="assertive" aria-atomic="true">

                                    <div class="d-flex">

                                       <div class="toast-body">

                                          Ceramic Coating

                                       </div>

                                       <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>

                                    </div>

                                    <div class="d-flex">

                                       <div class="toast-body">

                                          Deep Cleansing 

                                       </div>

                                       <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>

                                    </div>

                                 </div>

                              </div>

                              <div class="form-group mt-3">

                                 <input type="type" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter OTP">

                              </div>

                              <div class="alerts d-flex align-items-center" role="alert">

                                 <svg class="ft-green-tick" xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 48 48" aria-hidden="true">

                                    <circle class="circles" fill="#5bb543" cx="24" cy="24" r="22"></circle>

                                    <path class="tick" fill="none" stroke="#FFF" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M14 27l5.917 4.917L34 17"></path>

                                 </svg>

                                 <!-- <div>

                                    OTP sent successfully

                                 </div> -->

                              </div>

                              <div class="bookinfg">

                                 <button type="submit" class="btn btn-primary px-4 btn-lg" id="getaquote">Verify</button>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

                  

                  <div class="card shadow emptyprodcut d-none">

                  <div class="card-body intro contact bookproducts" >
                     <h3><?= get_tag($tags, 'service_details_h3_1', 'Experience The Best Car Services') ?></h3>
                     <!-- <h3>Experience The Best<br/>Car Services</h3> -->

                     <p class="text-center">Get instant quotes for your car service</p>

                     <form id="contact_form" name="contact_form" method="post">

                        <div class=" row">

                           <div class="col-md-12">

                           <label>SELECT YOUR CAR MAKE</label>

                           <select class="form-control form-select brand_id" id="" onchange="handleChange(this);" required="">

                              <option value=""></option>

                                                               <option value="1">Maruti Suzuki</option>

                                                               <option value="2">Hyundai</option>

                                                               <option value="3">Honda</option>

                                                               <option value="4">Tata</option>

                                                               <option value="5">Ford</option>

                                                               <option value="6">Volkswagen</option>

                                                               <option value="7">Mahindra</option>

                                                               <option value="8">Renault</option>

                                                               <option value="9">Chevorlet</option>

                                                               <option value="10">Toyota</option>

                                                               <option value="11">Skoda</option>

                                                               <option value="12">Nissan</option>

                                                               <option value="13">Fiat </option>

                                                               <option value="14">Datsun</option>

                                                               <option value="15">BMW</option>

                                                               <option value="16">Kia</option>

                                                               <option value="17">Audi</option>

                                                               <option value="18">Mercedes</option>

                                                               <option value="19">Jeep</option>

                                                               <option value="20">Mitsubishi</option>

                                                               <option value="21">MG</option>

                                                               <option value="22">Land Rover</option>

                                                               <option value="23">Jaguar</option>

                                                               <option value="24">Volvo</option>

                                                               <option value="25">Ssangyong</option>

                                                               <option value="26">Isuzu</option>

                                                               <option value="27">Mini</option>

                                                               <option value="28">Force</option>

                                                               <option value="29">Opel</option>

                                                               <option value="30">Porsche</option>

                                                               <option value="31">Daewoo</option>

                                                               <option value="32">Hindustan Motors</option>

                                                               <option value="33">Aston Martin</option>

                                                               <option value="34">Citrone</option>

                                                               <option value="35">Lexus</option>

                                                               <option value="36">Bentley</option>

                                                               <option value="37">DC</option>

                                                               <option value="38">Ferrari</option>

                                                               <option value="39">Maserati</option>

                                                               <option value="40">Lamborgini</option>

                                                               <option value="41">Rolls Royce</option>

                                                               <option value="42">Photon</option>

                                                               <option value="43">Jayem</option>

                                                               <option value="44">Premier </option>

                                                               <option value="45">Hummer</option>

                                                               <option value="46">BYD</option>

                                                         </select>

                           </div>

                           <div class="col-md-12">

                           <label>SELECT YOUR CAR MODEL</label>

                           <select class="form-control form-select modal_id" id="_car_modal_" required="">

                              <option></option>

                           </select>

                           </div>

                        </div>

                        

                        <button type="submit" class="btn btn-primary px-4 btn-lg" id="contatSubmit">Apply</button>

                     </form>

                     </div>

                  </div>

               </div>
               -->
               <!-- Old cart sidebar end -->

            </div>

         </div>

      </div>

   
      <!-- Model -->

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
                    <h3 id="modal_main_heading">Book now</h3>

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

                      </div>

                      <div class="row">

                        <div class="col-md-12">

                          <label for="email_addr">FUEL TYPE</label>

                          <select class="form-control form-select petrol_type">

                             <option value=""></option>

                             <option value="Petrol">Petrol</option>

                             <option value="Diesel">Diesel</option>

                             <option value="CNG">CNG</option>

                          </select>

                        </div>

                      </div>

                      <div class="row">

                        <div class="col-md-12">

                          <label for="phone_input">PHONE</label>

                          <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10" minlength="10" class="form-control phone_number" id="phone_input" name="Phone" placeholder="Enter your phone number" required>

                        </div>

                        <div class="col-md-12">

                          <label for="service_category">CATEGORY</label>

                          <input type="text" class="form-control service_category" id="service_category" name="service_category" placeholder="" readonly style="background-color: #f5f5f5;">

                          <input type="hidden" class="service" id="service" name="service" value="">

                        </div>

                      </div>

                      <input type="hidden" id="wash_id" name="">

                      <button type="submit" class="btn btn-primary px-4 btn-lg" id="contatSubmit">Submit</button>

                    </form>
                    <h3 id="modal_otp_heading" style="font-family: Speed; font-size: 22px; font-weight: 600; color: #223E7F; margin-bottom: 15px; margin-top: 20px; text-align: center; display: none;">
                      VERIFY OTP
                    </h3>
                    <form action="#" method="post" id="createbookingOtpPopup" style="display: none;">
                      <p>
                        Please enter the OTP sent to
                        +91-<span class="entered_phone_no">9205114537</span> <br>
                      </p>
                      <div class="form-group mb-3">
                        <input type="text" name="otp" class="form-control" id="otp"
                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                               maxlength="6" title="Please enter OTP" value="" aria-required="true" aria-invalid="false" placeholder="Enter OTP">
                        <input type="hidden" name="" id="brand_id">
                        <input type="hidden" name="" id="modal_id">
                        <input type="hidden" name="" id="petrol_type">
                        <input type="hidden" name="" id="full_name">
                        <input type="hidden" name="" id="mobile">
                        <input type="hidden" name="" id="message">
                        <input type="hidden" name="" id="service">
                      </div>
                      <div class="resend-otp1" style="display: flex;gap:10px;">
                        <span class="resend-otp-text">
                          Didn't receive OTP?
                        </span>
                        <span class="resend-otp-link" style="display: none;">
                          <a class="use-ajax" href="javascript:void(0)" id="resend-otp" data-once="ajax" onclick="resendOTPPopup();">
                            Resend OTP
                          </a>
                        </span>:
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

        </div>

      </div>

     

    </div>

  </div>

</div>
</div>
<?php $this->load->view('themes/frontend/common/footer', isset($tags) ? array('tags' => $tags) : array()); ?>

   




<div class="modal fade" id="editCartModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      </div>

      <div class="modal-body modal-dialog-centered">

      <div class="intro contact">

          <div class="container">

            <div class="row">

              <div class="col-md-12 d-flex align-items-center justify-content-center">

                <div class="card my-0 p-0 mx-0">

                  <div class="card-body">

                   <h3><?= get_tag($tags, 'service_details_h3_4') ?></h3>

                    <!-- <h3>Let’s Connect</h3> -->

                    <form id="bookingSession" name="contact_form" method="post">

                      <div class=" row">

                        <div class="col-md-12">

                          <label>SELECT YOUR CAR MAKE</label>

                          <select class="form-control form-select brand_id" id="" onchange="handleChangePopedit(this);" required>

                            <option value=""></option>

                           <?php foreach ($allmodals as $key => $value) { ?>
                                <option value="<?php echo $value->id; ?>"><?php echo $value->name; ?></option>
                            <?php } ?>

                          </select>

                        </div>

                        <div class="col-md-12">

                          <label>SELECT YOUR CAR MODEL</label>

                          <select class="form-control form-select modal_id" id="_car_modal_" required>

                            <option value=""></option>

                            <?php foreach ($allmodals as $modal): ?>

                               <option value="<?php echo $modal->id; ?>"><?php echo $modal->name; ?></option>

                            <?php endforeach ?>

                          </select>

                        </div>

                      </div>

                      <div class=" row">

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
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/cart.js?v=<?= rand() ?>"></script>

<script type="text/javascript">

   var BASEURL =  '<?php echo base_url(); ?>';

   

</script>
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

// Modal JavaScript for service-details page
// This must run AFTER cart.js loads to override handleChangePop
$(document).ready(function() {
  // Handle brand change and load models - Override cart.js function for #contact_formPop modal
  const originalHandleChangePop = window.handleChangePop;
  
  window.handleChangePop = function(e) {
    console.log('handleChangePop called with brand ID:', $(e).val());
    const id = $(e).val();

    // If no brand selected, clear all model dropdowns on this page
    if (!id) {
      $('.modal_id').html('<option></option>');
      $('#_car_modal_').html('<option></option>');
      return;
    }

    // Show loading state in all model dropdowns
    $('.modal_id').html('<option>Loading...</option>');
    $('#_car_modal_').html('<option>Loading...</option>');

    $.ajax({
      url:'<?php echo base_url(); ?>Home_public/getModelByBrandId',
      type: 'POST',
      data : {
        'id':id
      },
      dataType: 'JSON',
      success:function(res){
        console.log('AJAX response:', res);
        if(res.status == 200 && res.data && res.data.length > 0){
          var htmldata = '<option value="">SELECT MODEL</option>';
          res.data.forEach(function (value) {
            htmldata += '<option value="'+value.id+'">'+value.name+'</option>';
          });
          // Update all model selects (popup + sidebar) to keep behaviour consistent
          $('.modal_id').html(htmldata);
          $('#_car_modal_').html(htmldata);
          console.log('Models loaded:', res.data.length);
        }else{
          var htmldata = '<option value="">No models found</option>';
          $('.modal_id').html(htmldata);
          $('#_car_modal_').html(htmldata);
          console.log('No models found for brand ID:', id);
        }
      },
      error: function(xhr, status, error) {
        console.log('AJAX Error loading models:', error);
        console.log('Response:', xhr.responseText);
        var htmldata = '<option value="">Error loading models</option>';
        $('.modal_id').html(htmldata);
        $('#_car_modal_').html(htmldata);
      }
    });
  }
  
  // Also bind the change event directly for popup modal brand select
  $(document).on('change', '#cta .brand_id, #contact_formPop .brand_id', function() {
    console.log('Direct change event triggered on:', $(this).attr('class'));
    window.handleChangePop(this);
  });

  // Separate handler for right-side Book Now form to be 100% sure models populate there
  $(document).on('change', '#service_details_booknow_form .brand_id', function() {
    const id = $(this).val();
    const $form = $(this).closest('form');
    const $modelSelect = $form.find('.modal_id');

    if (!id) {
      $modelSelect.html('<option></option>');
      return;
    }

    $modelSelect.html('<option>Loading...</option>');

    $.ajax({
      url:'<?php echo base_url(); ?>Home_public/getModelByBrandId',
      type: 'POST',
      data : { 'id': id },
      dataType: 'JSON',
      success:function(res){
        console.log('Sidebar model AJAX response:', res);
        if(res.status == 200 && res.data){
          let modalData = res.data;
          var htmldata = '<option value=""></option>';
          modalData.map(function(modal){
            htmldata += '<option value="'+modal.id+'">'+modal.name+'</option>';
          });
          $modelSelect.html(htmldata);
        } else {
          $modelSelect.html('<option value="">No models found</option>');
        }
      },
      error:function(xhr){
        console.log('Sidebar model AJAX error:', xhr.responseText);
        $modelSelect.html('<option value="">Error loading models</option>');
      }
    });
  });

  // Sidebar Book Now form - send OTP and then use the SAME Verify OTP modal flow
  // as other Book Now forms (popup), so UI looks identical to your screenshot.
  $("#service_details_booknow_form").off('submit').on('submit', function(e){
      e.preventDefault();
      e.stopImmediatePropagation();

      const $form = $(this);

      // Prevent double submission
      if ($form.data('submitting')) {
        return false;
      }
      $form.data('submitting', true);
      
      const phone_number = $form.find('.phone_number').val();
      const service = $form.find('.service').val();
      const brand_id = $form.find('.brand_id').val();
      const modal_id = $form.find('.modal_id').val();
      const petrol_type = $form.find('.petrol_type').val() || '';
      const full_name = $form.find('.full_name').val() || '';
      const message = $form.find('.message').val() || ('Booking request for ' + (service || ''));
      
      if (!phone_number || phone_number.length !== 10) {
        $form.data('submitting', false);
        $.notify('Please enter a valid 10-digit phone number', 'error');
        return false;
      }
      
      $form.find('#contatSubmitSidebar').prop('disabled', true).html('Sending...');
      
      $.ajax({
          url:'<?php echo base_url(); ?>Home_public/sendOtp',
          type: 'POST',
          data : {
              'phone_number' : phone_number,
              'service' : service,
              'message' : message,
              'brand_id' : brand_id || '',
              'modal_id' : modal_id || '',
              'petrol_type' : petrol_type || '',
              'full_name' : full_name
          },
          dataType: 'JSON',
          success:function(res){
              $form.data('submitting', false);
              if(res.status == 200){
                $.notify(res.message,'success');

                // Force OTP heading text and show it
                $('#modal_otp_heading').html('VERIFY OTP').show();

                // Open the same Verify OTP modal used by other Book Now flows
                // and jump directly to the OTP step.
                $("#contact_formPop").hide();
                $("#createbookingOtpPopup").show();

                $("#createbookingOtpPopup").find('.entered_phone_no').html(phone_number);
                $("#createbookingOtpPopup").find('#mobile').val(phone_number);
                $("#createbookingOtpPopup").find('#service').val(service);
                $("#createbookingOtpPopup").find('#message').val(message);
                $("#createbookingOtpPopup").find('#brand_id').val(brand_id || '');
                $("#createbookingOtpPopup").find('#modal_id').val(modal_id || '');
                $("#createbookingOtpPopup").find('#petrol_type').val(petrol_type || '');
                $("#createbookingOtpPopup").find('#full_name').val(full_name || '');

                // Show the modal if it's not already open
                $('#cta').modal('show');

                // Start the same OTP timer
                userTimerstartPopup(1);

                $form.find('#contatSubmitSidebar').prop('disabled', false).html('Submit');
              }else{
                $.notify(res.message, 'error');
                $form.find('#contatSubmitSidebar').prop('disabled', false).html('Submit');
              }
          },
          error: function(error) {
            $form.data('submitting', false);
            $.notify('Error sending OTP', 'error');
            $form.find('#contatSubmitSidebar').prop('disabled', false).html('Submit');
          }
      });
  });

  
  // Timer function for OTP
  window.userTimerstartPopup = function(time) {
     var countDownDate = new Date().getTime() +  time * 60 * 1000;
      var x = setInterval(function() {
        var now = new Date().getTime();
        var distance = countDownDate - now;
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
  
  // Set service category when modal opens
  $('#cta').on('show.bs.modal', function (event) {
    // Force the OTP heading text to be correct
    console.log('Modal opening - setting OTP heading');
    console.log('OTP heading element:', $('#modal_otp_heading'));
    console.log('Current text:', $('#modal_otp_heading').text());
    $('#modal_otp_heading').html('VERIFY OTP');
    console.log('After setting:', $('#modal_otp_heading').text());
    
    // Get the active category from the nav tabs
    const activeCategory = $('.wrapper .owl_1 .nav-item.active a').text().trim();
    // If no active category, try to get from the current URL or first category
    let category = activeCategory;
    if (!category) {
      // Get from URL or first visible category
      const firstCategory = $('.wrapper .owl_1 .nav-item a').first().text().trim();
      category = firstCategory;
    }
    
    // Set the category in the form
    if (category) {
      $('#service_category').val(category);
      $('#service').val(category);
      console.log('Category set to:', category);
    } else {
      console.log('No category found');
    }
  });
  
  // Contact form submission - send OTP
  $("#contact_formPop").off('submit').on('submit', function(e){
      e.preventDefault();
      e.stopImmediatePropagation(); // Prevent other handlers from firing
      
      // Prevent double submission
      if ($(this).data('submitting')) {
        return false;
      }
      $(this).data('submitting', true);
      
      const phone_number = $("#contact_formPop").find('.phone_number').val();
      const service_category = $("#contact_formPop").find('.service_category').val();
      const service = $("#contact_formPop").find('.service').val();
      const brand_id = $("#contact_formPop").find('.brand_id').val();
      const modal_id = $("#contact_formPop").find('.modal_id').val();
      const full_name = $("#contact_formPop").find('.full_name').val() || '';
      
      if (!phone_number || phone_number.length !== 10) {
        $(this).data('submitting', false);
        $.notify('Please enter a valid 10-digit phone number', 'error');
        return false;
      }
      
      $("#contact_formPop").find('#contatSubmit').prop('disabled', true);
      $("#contact_formPop").find('#contatSubmit').html('Sending...');
      
      $.ajax({
          url:'<?php echo base_url(); ?>Home_public/sendOtp',
          type: 'POST',
          data : {
              'phone_number' : phone_number,
              'service' : service || service_category,
              'message' : 'Booking request for ' + (service || service_category),
              'brand_id' : brand_id || '',
              'modal_id' : modal_id || '',
              'full_name' : full_name
          },
          dataType: 'JSON',
          success:function(res){
              $("#contact_formPop").data('submitting', false);
              if(res.status == 200){
                $.notify(res.message,'success');
                
                // Force OTP heading text and show it
                $('#modal_otp_heading').html('VERIFY OTP').show();
                
                $("#contact_formPop").hide();
                $("#createbookingOtpPopup").find('.entered_phone_no').html(phone_number);
                $("#createbookingOtpPopup").find('#mobile').val(phone_number);
                $("#createbookingOtpPopup").find('#service').val(service || service_category);
                $("#createbookingOtpPopup").find('#message').val('Booking request for ' + (service || service_category));
                $("#createbookingOtpPopup").find('#brand_id').val(brand_id || '');
                $("#createbookingOtpPopup").find('#modal_id').val(modal_id || '');
                $("#createbookingOtpPopup").find('#full_name').val(full_name);
                $('#createbookingOtpPopup').show();
                $("#contact_formPop").find('#contatSubmit').prop('disabled', false);
                $("#contact_formPop").find('#contatSubmit').html('Submit');
                userTimerstartPopup(1);
              }else{
                $.notify(res.message, 'error');
                $("#contact_formPop").find('#contatSubmit').prop('disabled', false);
                $("#contact_formPop").find('#contatSubmit').html('Submit');
              }
          },
          error: function(error) {
            $("#contact_formPop").data('submitting', false);
            $.notify('Error sending OTP', 'error');
            $("#contact_formPop").find('#contatSubmit').prop('disabled', false);
            $("#contact_formPop").find('#contatSubmit').html('Submit');
          }
      });
  });
  
  // OTP verification and form submission
  $('#createbookingOtpPopup').on('submit', (e)=>{
    e.preventDefault();
    $('.error_class').remove();
    const phone_number = $("#createbookingOtpPopup").find('#mobile').val();
    const message = $("#createbookingOtpPopup").find('#message').val();
    const service = $("#createbookingOtpPopup").find('#service').val();
    const brand_id = $("#createbookingOtpPopup").find('#brand_id').val();
    const modal_id = $("#createbookingOtpPopup").find('#modal_id').val();
    const petrol_type = $("#createbookingOtpPopup").find('#petrol_type').val() || '';
    const full_name = $("#createbookingOtpPopup").find('#full_name').val();
    const otp =$('#createbookingOtpPopup').find('#otp').val();
    
    if (!otp) {
      $('#createbookingOtpPopup').find('#otp').after('<div class="error_class" style="color:red;">OTP is required</div>');
      $('#createbookingOtpPopup').find('#otp').focus();
      return false;
    }
  
    $("#createbookingOtpPopup").find('button[type="submit"]').prop('disabled', true);
    $("#createbookingOtpPopup").find('button[type="submit"]').html('Verifying...');
    
    $.ajax({
        url:'<?php echo base_url(); ?>Home_public/saveContactForm',
        type: 'POST',
        data : {
            'phone_number' : phone_number,
            'message' : message,
            'service' : service,
            'brand_id' : brand_id || '',
            'modal_id' : modal_id || '',
            'petrol_type' : petrol_type || '',
            'full_name' : full_name || '',
            'otp' : otp
        },
        dataType: 'JSON',
        success:function(res){
            if(res.status == 200){
              $('#cta').modal('hide');
              $.notify(res.message,'success');
              location.href= '<?= base_url() ?>thankyou';
            }else{
              $.notify(res.message, 'error');
              $("#createbookingOtpPopup").find('button[type="submit"]').prop('disabled', false);
              $("#createbookingOtpPopup").find('button[type="submit"]').html('Verify');
            }
        },
        error: function(error) {
          $.notify('Error verifying OTP', 'error');
          $("#createbookingOtpPopup").find('button[type="submit"]').prop('disabled', false);
          $("#createbookingOtpPopup").find('button[type="submit"]').html('Verify');
        }
    });
  });
  
  // Resend OTP function
  window.resendOTPPopup = function() {
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
  
  // Reset modal on close
  $('#cta').on('hidden.bs.modal', function () {
    $("#contact_formPop")[0].reset();
    $("#contact_formPop").show();
    $("#createbookingOtpPopup").hide();
    $("#contact_formPop").data('submitting', false); // Reset submission flag
    $('.error_class').remove();
    // Reset button text
    $("#contact_formPop").find('#contatSubmit').html('Submit');
    // Reset OTP heading to hidden
    $('#modal_otp_heading').hide();
  });
  
  // Also set service category for popup and right-side form based on current slug
  const currentUrl = window.location.href;
  const urlParts = currentUrl.split('/');
  const slug = urlParts[urlParts.length - 1];
  
  $('.wrapper .owl_1 .nav-item a').each(function() {
    const href = $(this).attr('href');
    if (href && href.includes(slug)) {
      const categoryName = $(this).text().trim();

      // Popup modal category
      $('#service_category').val(categoryName);
      $('#service').val(categoryName);

      // Right-side form: try to pre-select matching service option if present
      const $serviceSelect = $('#service_details_booknow_form').find('select.service');
      if ($serviceSelect.length) {
        $serviceSelect.val(categoryName);
      }
    }
  });
});

</script>




   </body>

</html>
