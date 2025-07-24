<style>
.heroinnerbanner .secondslider h2 {
    color: #fff;
}
.heroinnerbanner .secondslider {
    padding-bottom: 240px;
}


ul.tabs {
    padding: 0px;
    list-style: none;
    display: flex;
    flex-wrap: wrap;
    gap: 6px 5px;
}
ul.tabs li {
    background:#223e7f;
    color: #fff;
    padding: 3px 10px;
    border-radius: 3px;
    cursor: pointer;
}
   </style>



<style>
      .navbar-light .navbar-nav .nav-link {
    color: #fff;
}
      </style>
<div class="booknow">

         <a href="<?= base_url() ?>" data-bs-toggle="modal" data-bs-target="#cta">

         <img src="<?php echo base_url(); ?>assets/frontend/images/booknow.png" alt="book now" />

         </a>

      </div>

      <div class="header" id="myHeader">

      <nav class="navbar navbar-expand-lg navbar-light bg-light-none <?php echo($this->uri->segment(1)== 'faq') ? 'faq':''; ?>">

         <div class="container-fluid     align-items-start">

            <a class="navbar-brand" href="<?= base_url() ?>">

            <img src="<?php echo base_url(); ?>assets/frontend/images/logo.png" width="100" height="" alt="Logo" />

            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

               <svg width="35px" height="35px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" id="Editable-line" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                  <line fill="none" id="XMLID_103_" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="7" x2="25" y1="16" y2="16" />

                  <line fill="none" id="XMLID_102_" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="7" x2="25" y1="25" y2="25" />

                  <line fill="none" id="XMLID_101_" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="7" x2="25" y1="7" y2="7" />

               </svg>
               <svg class="cl" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 13">
  <polyline class="arrow" fill="none" stroke="#fff" points="1 1,6.5 6.5,12 1"></polyline>
  <polyline class="arrow" fill="none" stroke="#fff" points="1 12,6.5 6.5,12 12"></polyline>
</svg>
            </button>

            <div class="collapse navbar-collapse  justify-content-end" id="navbarSupportedContent">

               <ul id="menu" class="navbar-nav mb-2 mb-lg-0">

                  <li data-menuanchor="firstPage" class=" nav-item ">

                     <a class="nav-link" href="<?php echo base_url(); ?>#firstPage"></a>

                  </li>

                  <li data-menuanchor="secondPage" class=" nav-item ">

                     <a class="nav-link" href="<?php echo base_url(); ?>#secondPage">Home</a>

                  </li>

                  <li data-menuanchor="3rdPage" class="active nav-item">

                     <a class="nav-link" href="<?php echo base_url(); ?>#3rdPage">Our Story </a>

                  </li>

                  <li data-menuanchor="fourth" class="nav-item">

                     <a class="nav-link" href="<?php echo base_url(); ?>#fourth">Our Promise</a>

                  </li>

                  <li data-menuanchor="fifth" class="nav-item">

                     <a class="nav-link" href="<?php echo base_url(); ?>#fifth">Why Choose Us</a>

                  </li>

                  <li data-menuanchor="six" class="nav-item">

                     <a class="nav-link" href="<?php echo base_url(); ?>services">Our Services</a>

                  </li>

                  <li data-menuanchor="seven" class="nav-item">

                     <a class="nav-link" href="<?php echo base_url(); ?>#seven">Contact Us</a>

                  </li>

                  <li data-menuanchor="eight">

                     <div class="togglemenu" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">

                        <svg width="35px" height="35px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" id="Editable-line" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                           <line fill="none" id="XMLID_103_" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="7" x2="25" y1="16" y2="16" />

                           <line fill="none" id="XMLID_102_" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="7" x2="25" y1="25" y2="25" />

                           <line fill="none" id="XMLID_101_" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="7" x2="25" y1="7" y2="7" />

                        </svg>

                     </div>

                  </li>

               </ul>

            </div>

         </div>

      </nav>

      <?php if ($this->uri->segment(1)=='faq'): ?>

         <div class="heroinnerbanner faq my-5">

            <div class="container">

               <div class="secondslider">

                  <h2>Faq </h2>

                  <div class="strip">

                     <img src="<?php echo base_url(); ?>assets/frontend/images/strip_s.png">

                  </div>

                  <span>Frequently asked questions</span>

               </div>

            </div>

         </div>

      <?php endif ?>

      

      <?php if ($this->uri->segment(1)=='services'): ?>

         <div class="heroinnerbanner"  style="background:url(<?php echo base_url(); ?>assets/frontend/images/servicesbanner.jpg); background-size: cover;">

            <div class="container">

               <div class="secondslider">

                  <h2>Services </h2>

                  <div class="strip">

                     <img src="<?php echo base_url(); ?>assets/frontend/images/strip_s.png">

                  </div>

               </div>

            </div>

         </div>

      <?php endif ?>

      <?php if ($this->uri->segment(1)=='service-details'): ?>

         <div class="heroinnerbanner" style="background:url(https://agenziaviaggiinnepal.com/craft/backup-html/images/servicesbanner.jpg);background-size: cover;" >

            <div class="container">

               <div class="secondslider">

                  <h2>Services </h2>

                  <div class="strip">

                     <img src="<?php echo base_url(); ?>assets/frontend/images/strip_s.png">

                  </div>

               </div>

            </div>

         </div>

      <?php endif ?>

   </div>