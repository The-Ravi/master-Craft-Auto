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
#navbarSupportedContent li.nav-item.dropdown:hover ul.dropdown-menu {
    display: block;
}
   </style>



<style>
      .navbar-light .navbar-nav .nav-link {
    color: #fff;
}
      </style>
<style>
/* Consistent spacing and sizing for all screens */
nav.navbar.navbar-expand-lg ul.navbar-nav {
  display: flex !important;
  align-items: center !important;
  flex-wrap: nowrap !important;
  gap: clamp(12px, 2.2vw, 28px) !important; /* responsive spacing */
  width: auto !important;
  margin: 0 !important;
  padding: 0 !important;
}
nav.navbar.navbar-expand-lg ul.navbar-nav > li {
  margin: 0 !important;
  width: auto !important;
}
nav.navbar.navbar-expand-lg ul.navbar-nav > li > a.nav-link{
  font-size: clamp(14px, 1.2vw, 16px) !important;
  padding: 0 .25rem !important;
  line-height: 1.2 !important;
  letter-spacing: .2px !important;
  white-space: nowrap !important;
}

/* Extra safety on large desktops */
@media (min-width: 1400px){
  nav.navbar.navbar-expand-lg ul.navbar-nav{ gap: 28px !important; }
}

/* Between 992px and 1199px */
@media (min-width: 992px) and (max-width: 1199.98px){
  nav.navbar.navbar-expand-lg ul.navbar-nav{ gap: 18px !important; }
  nav.navbar.navbar-expand-lg ul.navbar-nav > li > a.nav-link{ font-size: 15px !important; }
}

/* Under 992px navbar collapses (Bootstrap). Ensure offcanvas/expanded menu spacing looks tidy */
@media (max-width: 991.98px){
  #navbarSupportedContent .navbar-nav > li{ margin-bottom: 6px; }
  #navbarSupportedContent .navbar-nav > li > a.nav-link{ white-space: nowrap; }
}

/* Mobile header layout and z-index fixes */
@media (max-width: 768px) {
  /* Header container */
  .header {
    position: relative !important;
    z-index: 2000 !important;
    background: rgba(0,0,0,0.1) !important;
    padding: 10px 0 !important;
  }
  
  /* Navbar positioning */
  .navbar {
    position: relative !important;
    z-index: 2001 !important;
    padding: 8px 0 !important;
  }
  
  /* Logo positioning and visibility */
  .navbar-brand {
    display: block !important;
    visibility: visible !important;
    z-index: 2002 !important;
    position: relative !important;
    margin-right: auto !important;
  }
  .navbar-brand img {
    display: block !important;
    visibility: visible !important;
    width: 80px !important;
    height: auto !important;
    max-width: none !important;
    z-index: 2003 !important;
    position: relative !important;
  }
  
  /* Hamburger menu positioning */
  .navbar-toggler {
    z-index: 2004 !important;
    position: relative !important;
    margin-left: auto !important;
    padding: 4px 8px !important;
    border: none !important;
    background: rgba(255,255,255,0.1) !important;
    border-radius: 4px !important;
  }
  
  /* Container spacing */
  .container-fluid {
    padding-left: 15px !important;
    padding-right: 15px !important;
    display: flex !important;
    justify-content: space-between !important;
    align-items: center !important;
  }
  
  /* Ensure header stays at top without fixed positioning issues */
  .navbar {
    position: relative !important;
    background: rgba(34, 62, 127, 0.95) !important;
  }
  
  /* Prevent any disclaimer text from appearing in header area */
  .header .disclaimer-mobile,
  .navbar .disclaimer-mobile,
  nav .disclaimer-mobile {
    display: none !important;
    visibility: hidden !important;
  }
  
  /* Only show disclaimer in footer section */
  .section.eightss .disclaimer-mobile {
    display: block !important;
    visibility: visible !important;
  }
  
  /* Ensure header elements stay on top */
  .header, .navbar, .navbar-brand, .navbar-toggler {
    position: relative !important;
    z-index: 9999 !important;
  }
  
  /* Clear header area from any floating content */
  .header::before {
    content: '' !important;
    display: block !important;
    clear: both !important;
  }
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

                     <a class="nav-link" href="<?php echo base_url(); ?>#firstPage">Home</a>

                  </li>

                  <li data-menuanchor="3rdPage" class="active nav-item dropdown">

                     <a class="nav-link dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" href="<?php echo base_url(); ?>#3rdPage">Our Story </a>
                     <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="<?php echo base_url(); ?>aboutus">  About Us    </a></li>
    <li><a class="dropdown-item" href="<?php echo base_url(); ?>testimonials">Testimonials </a></li>
    <!--li><a class="dropdown-item" href="<?php echo base_url(); ?>gallery">Gallery </a></li!-->
    <li><a class="dropdown-item" href="<?php echo base_url(); ?>faq">FAQs </a></li>
  </ul>       </li>

                  <li data-menuanchor="fourth" class="nav-item">

                     <a class="nav-link" href="<?php echo base_url(); ?>#fourth">Our Promise</a>

                  </li>

                  <li data-menuanchor="fifth" class="nav-item">

                     <a class="nav-link" href="<?php echo base_url(); ?>#fifth">Why Choose Us</a>

                  </li>

                  <li data-menuanchor="six" class="nav-item">

                     <a class="nav-link" href="<?php echo base_url(); ?>services">Our Services</a>

                  </li>
                   <li class="nav-item"><a class="nav-link"  href="<?php echo base_url(); ?>gallery">Gallery </a></li>

                   </li>

                  <li class="nav-item">

                     <a class="nav-link" href="<?php echo base_url(); ?>blog">Blog</a>

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

         <div class="heroinnerbanner" style="background:url(https://www.mastercraftauto.co.in/assets/frontend/images/servicesbanner.jpg);background-size: cover;" >

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