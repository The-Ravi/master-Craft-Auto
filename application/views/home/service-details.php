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
}.intro.fooetrs {
    height: auto;
}
.intro.fooetrs .container {
    height: auto;
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
                                        <?php if(empty(getSubDataByService($service->id))){ ?>
                                       <a href="javascript:void(0);" data-id="<?php echo $service->id; ?>" onclick="addToCart(this);" class="btn addCart">+ Book Now</a>
                                       <a href="javascript:void(0);"  data-id="<?php echo $service->id; ?>" onclick="removeFromCart(this);" class="btn removeCart d-none">- Remove From Cart</a>
                                        <?php } ?>
                                    </div>

                                 </div>

                              </div>

                                </div>

                              </div>

                              <?php } ?>

                  </div>

               </div> 

               <div class="col-md-4" id="_productCartSection__">
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
                    <h2><?= get_tag($tags, 'service_details_h2_1') ?></h2>
                     <h3><?= get_tag($tags, 'service_details_h3_2') ?></h3>
                    <!-- <h3>Let’s Connect</h3> -->

                    <form id="bookingSession" name="contact_form" method="post">

                      <div class=" row">

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

                        <input type="hidden" id="wash_id" name="">

                      <button type="button" onclick="bookingSessionCart();" class="btn btn-primary px-4 btn-lg" id="contatSubmit">Book Your Mastercraft Session</button>

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
<?php $this->load->view('themes/frontend/common/footer'); ?>

   




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

</script>




   </body>

</html>
