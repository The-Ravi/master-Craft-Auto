<!DOCTYPE html>
<html lang="en">
   <head>
     <!-- top head start -->
     <?php $this->load->view('themes/frontend/common/top-head'); ?>
     <!-- top head end -->
     
     <?php 
     // Set page identifier for SEO tags
     $page_identifier = 'home_services';
     // Include SEO head component
     $this->load->view('themes/frontend/common/seo-head', ['page_identifier' => $page_identifier, 'tags' => isset($tags) ? $tags : []]);
     ?>

     <style>
      .navbar-light .navbar-nav .nav-link {
    color: #fff;
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
      <div class="main services">
   <div class="wrapper">
      <div class="container">
         <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <div class="owl_1 owl-carousel owl-theme">
               <?php foreach ($service_category as $category) { ?>
               <div class="item">
                  <li class="nav-item" role="presentation">
                     <a class="nav-link" href="<?php echo base_url() ?>service-details/<?php echo $category->slug ; ?>">
                        <img src="<?php echo base_url(); ?>uploads/category/<?php echo $category->logo ?>"
                             alt="<?php echo get_tag($tags, 'service_category_logo_alt_' . $category->slug, $category->cate_name . ' Logo'); ?>">
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
               <?php foreach ($services as $service) { ?>
                  <div class="card">
                     <div class="card-body">
                        <h5 class="card-title">
                           <?php echo get_tag($tags, 'service_card_h5_' . $service->slug, $service->tittle); ?>
                        </h5>
                        <p class="card-text">
                           <b><?php echo get_tag($tags, 'service_subtitle_h5_' . $service->slug, $service->sub_title); ?></b>
                        </p>
                        <div class="listing">
                           <div class="innerlisting">
                              <div class="ifigure">
                                 <img src="<?php echo base_url(); ?>uploads/services/<?php echo $service->image ?>"
                                      alt="<?php echo get_tag($tags, 'service_image_alt_' . $service->slug, $service->tittle); ?>">
                              </div>
                              <div class="icontent">
                                 <?php echo $service->description ?>
                              </div>
                           </div>
                           <div class="innerbooknow">
                              <div class="booknowhours">
                                 <img src="<?php echo base_url(); ?>assets/frontend/images/watch.png"
                                      alt="<?php echo get_tag($tags, 'service_watch_img_alt', 'Watch/Timer Icon'); ?>" />
                                 <span>1 Hour</span>
                              </div>
                              <div class="booknowbtn">
                                 <a href="#" class="btn">
                                    <?php echo get_tag($tags, 'service_book_now_btn', '+ Book Now'); ?>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               <?php } ?>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card shadow withprodcut">
               <div class="card-body">
                  <div class="bookproducts">
                     <div class="productimg">
                        <img src="<?php echo base_url(); ?>assets/frontend/images/productimg.png"
                             alt="<?php echo get_tag($tags, 'cart_product_img_alt', 'Product Image'); ?>">
                     </div>
                     <div class="proddis">
                        <div class="ptitle">
                           <span class="normal"><?php echo get_tag($tags, 'cart_vehicle_title', 'BMW M340i <b>Petrol </b>'); ?></span> 
                           <span class="chanegs"> <?php echo get_tag($tags, 'cart_vehicle_change', 'Change'); ?></span>
                        </div>
                        <div class="proddisinner">
                           <div class="toast show align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
                              <div class="d-flex">
                                 <div class="toast-body"><?php echo get_tag($tags, 'cart_product_toast1', 'Ceramic Coating'); ?></div>
                                 <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                              </div>
                              <div class="d-flex">
                                 <div class="toast-body"><?php echo get_tag($tags, 'cart_product_toast2', 'Deep Cleansing'); ?></div>
                                 <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                              </div>
                           </div>
                        </div>
                        <div class="bookinfg">
                           <button type="submit" class="btn btn-primary px-4 btn-lg" id="getaquote">
                              <?php echo get_tag($tags, 'cart_get_quote_btn', 'Get a Quote'); ?>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card shadow emptyprodcut d-none">
               <div class="card-body">
                  <div class="bookproducts">
                     <div class="productimg">
                        <img src="<?php echo base_url(); ?>assets/frontend/images/productimg.png"
                             alt="<?php echo get_tag($tags, 'cart_product_img_alt', 'Product Image'); ?>">
                     </div>
                     <div class="proddis">
                        <div class="ptitle">
                           <span class="normal"><?php echo get_tag($tags, 'cart_vehicle_title', 'BMW M340i <b>Petrol </b>'); ?></span> 
                           <span class="chanegs"> <?php echo get_tag($tags, 'cart_vehicle_change', 'Change'); ?></span>
                        </div>
                        <div class="noproduct">
                           <img src="<?php echo base_url(); ?>assets/frontend/images/noproduct.png"
                                alt="<?php echo get_tag($tags, 'cart_noproduct_img_alt','No Product Image'); ?>">
                           <p> <?php echo get_tag($tags, 'cart_noproduct_text', 'Go ahead and book a service for your car.'); ?> </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card shadow mwithprodcut d-none">
               <div class="card-body">
                  <div class="bookproducts">
                     <div class="productimg">
                        <img src="<?php echo base_url(); ?>assets/frontend/images/productimg.png"
                             alt="<?php echo get_tag($tags, 'cart_product_img_alt', 'Product Image'); ?>">
                     </div>
                     <div class="proddis">
                        <div class="ptitle">
                           <span class="normal"><?php echo get_tag($tags, 'cart_vehicle_title', 'BMW M340i <b>Petrol </b>'); ?></span> 
                           <span class="chanegs"> <?php echo get_tag($tags, 'cart_vehicle_change', 'Change'); ?></span>
                        </div>
                        <div class="proddisinner">
                           <div class="toast show align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
                              <div class="d-flex">
                                 <div class="toast-body"><?php echo get_tag($tags, 'cart_product_toast1', 'Ceramic Coating'); ?></div>
                                 <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                              </div>
                              <div class="d-flex">
                                 <div class="toast-body"><?php echo get_tag($tags, 'cart_product_toast2', 'Deep Cleansing'); ?></div>
                                 <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                              </div>
                           </div>
                        </div>
                        <div class="form-group mt-3">
                           <input type="type" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo get_tag($tags, 'cart_mobile_placeholder', 'Enter Mobile no:'); ?>">
                        </div>
                        <div class="bookinfg">
                           <button type="submit" class="btn btn-primary px-4 btn-lg" id="getaquote">
                              <?php echo get_tag($tags, 'cart_get_otp_btn', 'Get Otp'); ?>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card shadow otpwithprodcut d-none">
               <div class="card-body">
                  <div class="bookproducts">
                     <div class="productimg">
                        <img src="<?php echo base_url(); ?>assets/frontend/images/productimg.png"
                             alt="<?php echo get_tag($tags, 'cart_product_img_alt', 'Product Image'); ?>">
                     </div>
                     <div class="proddis">
                        <div class="ptitle">
                           <span class="normal"><?php echo get_tag($tags, 'cart_vehicle_title', 'BMW M340i <b>Petrol </b>'); ?></span>
                           <span class="chanegs"><?php echo get_tag($tags, 'cart_vehicle_change', 'Change'); ?></span>
                        </div>
                        <div class="proddisinner">
                           <div class="toast show align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
                              <div class="d-flex">
                                 <div class="toast-body"><?php echo get_tag($tags, 'cart_product_toast1', 'Ceramic Coating'); ?></div>
                                 <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                              </div>
                              <div class="d-flex">
                                 <div class="toast-body"><?php echo get_tag($tags, 'cart_product_toast2', 'Deep Cleansing'); ?></div>
                                 <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                              </div>
                           </div>
                        </div>
                        <div class="form-group mt-3">
                           <input type="type" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="<?php echo get_tag($tags, 'cart_otp_placeholder', 'Enter OTP'); ?>">
                        </div>
                        <div class="alerts d-flex align-items-center" role="alert">
                           <svg class="ft-green-tick" xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 48 48" aria-hidden="true">
                              <circle class="circles" fill="#5bb543" cx="24" cy="24" r="22"></circle>
                              <path class="tick" fill="none" stroke="#FFF" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M14 27l5.917 4.917L34 17"></path>
                           </svg>
                           <div>
                              <?php echo get_tag($tags, 'cart_otp_sent_text', 'OTP sent successfully'); ?>
                           </div>
                        </div>
                        <div class="bookinfg">
                           <button type="submit" class="btn btn-primary px-4 btn-lg" id="getaquote">
                              <?php echo get_tag($tags, 'cart_verify_btn', 'Verify'); ?>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card shadow emptyprodcut d-none">
               <div class="card-body">
                  <div class="bookproducts">
                     <div class="proddis">
                        <div class="noproduct">
                           <img src="<?php echo base_url(); ?>assets/frontend/images/success.png"
                                alt="<?php echo get_tag($tags, 'cart_success_img_alt', 'Success Image'); ?>">
                           <p><?php echo get_tag($tags, 'cart_thankyou_text', 'Thank you.'); ?></p>
                           <p><?php echo get_tag($tags, 'cart_contact_soon_text', 'we will contact you soon.'); ?></p>
                        </div>
                     </div>
                     <div class="bookinfg">
                        <button type="submit" class="btn btn-primary px-4 btn-lg" id="getaquote">
                           <?php echo get_tag($tags, 'cart_continue_btn', 'Continue'); ?>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card shadow emptyprodcut d-none">
               <div class="card-body intro contact bookproducts">
                  <h3>
                     <?php echo get_tag($tags, 'page_callout_h3', 'Experience The Best<br/>Car Services'); ?>
                  </h3>
                  <p class="text-center">
                     <?php echo get_tag($tags, 'page_callout_p', 'Get instant quotes for your car service'); ?>
                  </p>
                  <form id="contact_form" name="contact_form" method="post">
                     <div class=" row">
                        <div class="col-md-12">
                           <label><?php echo get_tag($tags, 'form_label_brand', 'SELECT YOUR CAR MAKE'); ?></label>
                           <select class="form-control form-select brand_id" id="" onchange="handleChange(this);" required="">
                              <option value=""></option>
                              <!-- all your options here, unchanged -->
                           </select>
                        </div>
                        <div class="col-md-12">
                           <label><?php echo get_tag($tags, 'form_label_model', 'SELECT YOUR CAR MODEL'); ?></label>
                           <select class="form-control form-select modal_id" id="_car_modal_" required="">
                              <option></option>
                           </select>
                        </div>
                     </div>
                     <button type="submit" class="btn btn-primary px-4 btn-lg" id="contatSubmit">
                        <?php echo get_tag($tags, 'form_apply_btn', 'Apply'); ?>
                     </button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
      <!-- Footer section start -->
     <?php $this->load->view('themes/frontend/common/footer'); ?>
      <!-- Footer section end -->
    
            <!-- <script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script> -->
   </body>
</html>