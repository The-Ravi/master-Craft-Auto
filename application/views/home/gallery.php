<!doctype html>
<html lang="en">
   <head>
     <!-- top head start -->
     <?php $this->load->view('themes/frontend/common/top-head'); ?>
     <!-- top head end -->
     
     <?php 
     // Set page identifier for SEO tags
     $page_identifier = 'home_gallery';
     // Include SEO head component
     $this->load->view('themes/frontend/common/seo-head', ['page_identifier' => $page_identifier, 'tags' => isset($tags) ? $tags : []]);
     ?>
     <style>
   .navbar-light .navbar-nav .nav-link {
    color: #282828 !important;
}
ul.dropdown-menu li a {
    padding: .25rem 1rem !important;
}
.heroinnerbanner.faq .secondslider h2 {
    font-size: 45px;
    color: #223E7F;
    text-shadow: none;
}
.heroinnerbanner.faq .secondslider span {
    font-size: 30px;
    color: #223E7F;
    font-family: 'Montserrat';
    font-weight: bold;
}img {
  vertical-align: middle;
}

.img-responsive {
  display: block;
  max-width: 100%;
  height: auto;
}

.grid article {
  background-color: #FFFFFF;
  display: block;
  float: left;
  margin-right: 10px;
  margin-bottom: 10px;
  width: 23.75%;
}
.grid article:nth-child(4n) {
    margin-right: 0px;
}
.wrapper .owl_1 .item li.nav-item {
    margin-right: 1.5px;
}
@media (max-width: 1024px) {
  .grid article {
    width: 31.3%;
  }
}

@media (max-width: 767px) {
  .grid article {
    width: 48%;
  }
  .heroinnerbanner.faq .secondslider h2 {
    font-size: 21px;
}
}

@media (max-width: 579px) {
  .grid article {
    margin: 2% 0;
    width: 93%;
  }
}
      </style>
   </head>
   <body>
      <!-- Navbar start -->
      <?php $this->load->view('themes/frontend/common/header'); ?>
      <div class="heroinnerbanner faq my-5">
         <div class="container">
            <div class="secondslider">
               <h2>
                 <?php echo get_tag($tags, 'gallery_h2_main', 'Mastercraft Photo Gallery'); ?>
               </h2>
               <div class="strip">
                  <img src="https://agenziaviaggiinnepal.com/craft/assets/frontend/images/strip_s.png"
                       alt="<?php echo get_tag($tags, 'gallery_strip_img_alt', 'Gallery Decorative Strip'); ?>">
               </div>
               <span>
                 <a href="<?php echo base_url(); ?>gallery"><?php echo get_tag($tags, 'gallery_tab_photos', 'Photos'); ?></a> | 
                 <a href="<?php echo base_url(); ?>video"><?php echo get_tag($tags, 'gallery_tab_videos', 'Videos'); ?></a>
               </span>
            </div>
         </div>
      </div>
      <!-- Navbar End -->
      <div class="main">
      <div class="wrapper">
         <div class="container">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
               <div class="owl_1 owl-carousel owl-theme button-group filters-button-group">
                <?php foreach ($service_category as $key => $value): ?>
                    <div class="item">
                       <li class="nav-item" role="presentation" data-filter=".beach">
                          <a class="nav-link" href="<?php echo base_url(); ?>gallery/<?php echo $value->slug; ?>">
                              <img src="<?php echo base_url(); ?>uploads/category/<?php echo $value->logo; ?>"
                                   alt="<?php echo get_tag($tags, 'gallery_category_logo_alt_' . $value->slug, $value->cate_name . ' Logo'); ?>">
                              <?php echo $value->cate_name; ?>
                          </a>
                       </li>
                    </div>  
                <?php endforeach ?>    
               </div>
            </ul>
         </div>
      </div>
      <div class="container">
         <div class="row">
         

<section id="grid-container" class="transitions-enabled fluid masonry js-masonry grid">
    <?php foreach ($rows as $key => $value): ?>
        <article class="beach people sea">
          <a data-caption="Image title" data-fancybox="zoom-gallery-mobile" href="<?php echo base_url(); ?>uploads/galleries/<?php echo $value->image; ?>">
            <img  
              src="<?php echo base_url(); ?>uploads/galleries/<?php echo $value->image; ?>"
              class="img-responsive"
              alt="<?php echo get_tag($tags, 'gallery_img_alt_' . $value->id, $value->title ?? 'Gallery Image'); ?>"
            >
          </a>
        </article>  
    <?php endforeach ?>
</section>
               </div>
         </div>
      </div>
      
      </div>

     <?php $this->load->view('themes/frontend/common/footer'); ?>
      <!-- Footer section end -->
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
        // Close all other accordion items
        accordionItems.forEach((item) => {
            if (item !== accordion && item.classList.contains("is-open")) {
                item.classList.remove("is-open");
                let content = item.nextElementSibling;
                content.style.maxHeight = null;
                
                // Remove class from the upper div
                const upperDiv = item.closest('.upper-div');
                if (upperDiv) {
                    upperDiv.classList.remove("active");
                }
            }
        });

        // Toggle the clicked accordion item
        this.classList.toggle("is-open");
        let content = this.nextElementSibling;

        if (content.style.maxHeight) {
            // If the accordion is open, close it
            content.style.maxHeight = null;
        } else {
            // If the accordion is closed, open it
            content.style.maxHeight = content.scrollHeight + "px";
        }
        
        // Add class to the upper div
        const upperDiv = this.closest('.upper-div');
        if (upperDiv) {
            upperDiv.classList.add("active");
        }
    });

    // Add keyboard event listener for accessibility
    accordion.addEventListener("keydown", function (event) {
        if (event.key === "Enter" || event.key === " ") {
            // Trigger click event when Enter or Space key is pressed
            event.preventDefault();
            accordion.click();
        }
    });
});
      </script>
      </body>
</html>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/cart.js"></script>


<script type="text/javascript" src="https://cdn2.hubspot.net/hub/322787/hub_generated/style_manager/1440007714979/custom/page/hack-a-thon-3/masonry.min.min.js"></script>

<script type="text/javascript" src="https://cdn2.hubspot.net/hub/322787/hub_generated/style_manager/1440007849180/custom/page/hack-a-thon-3/isotope.min.js"></script>

<script type="text/javascript">
   var BASEURL =  '<?php echo base_url(); ?>';

   $( function() {
  var $grid = $('.grid').isotope({
    itemSelector: 'article'
  });

  // filter buttons
  $('.filters-button-group').on( 'click', 'li', function() {
    var filterValue = $( this ).attr('data-filter');
    $grid.isotope({ filter: filterValue });
  });
  $('.button-group').each( function( i, buttonGroup ) {
    var $buttonGroup = $( buttonGroup );
    $buttonGroup.on( 'click', 'li', function() {
      $buttonGroup.find('.is-checked').removeClass('is-checked');
      $( this ).addClass('is-checked');
    });
  });
});

// debounce so filtering doesn't happen every millisecond
function debounce( fn, threshold ) {
  var timeout;
  return function debounced() {
    if ( timeout ) {
      clearTimeout( timeout );
    }
    function delayed() {
      fn();
      timeout = null;
    }
    timeout = setTimeout( delayed, threshold || 100 );
  }
}

$(window).bind("load", function() {
  $('#all').click();
});
   
</script>


<!-- 1. Add latest jQuery and fancybox files -->


<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />
<style>
  .zoom {
    display: inline-block;
    position: relative;
  }

  .zoom img {
    display: block;
  }

  .zoom img::selection {
    background-color: transparent;
  }

  .fancybox-slide.fancybox-slide--html .fancybox-content {
    padding: 35px;
    max-width: 90% !important;
    height: 95% !important;
  }

  a[data-fancybox="zoom-gallery-desktop"] {
    cursor: zoom-in;
  }

  #modal {
    cursor: zoom;
  }

  .fancybox-slide--html .fancybox-content {
    max-width: 100% !important;
    width: 100%;
    max-width: initial !important;
    cursor: move !important;
  }

  #modal img {
    width: 100%;
  }

  span#zoom1 {
    cursor: move;
  }
</style>






<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.21/jquery.zoom.min.js"></script>
<script>
  $(document).ready(function() {
    $('#zoom1').zoom({
      magnify: "1.5",
    });
  });
</script>
<script>
  $(document).ready(function() {
    $('[data-fancybox="zoom-gallery-desktop"]').fancybox({
      buttons: [
        "zoom",
        "fullScreen",
        "close"
      ],
      fullScreen: {
        autoStart: false,
      },
      touch: {
        vertical: true, // Allow to drag content vertically
        momentum: true // Continuous movement when panning
      },
      openEffect: 'none',
      closeEffect: 'none',
      afterShow: function(instance, current) {
      }
    });
    $('[data-fancybox="zoom-gallery-mobile"]').fancybox({
      buttons: [
        "zoom",
        "fullScreen",
        "close"
      ],
      fullScreen: {
        autoStart: false,
      },
      afterShow: function() {
      }
    });
  });
</script>