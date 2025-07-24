<!doctype html>
<html lang="en">
   <head>
     <!-- top head start -->
     <?php $this->load->view('themes/frontend/common/top-head'); ?>
     <!-- top head end -->
     
     <?php 
     // Set page identifier for SEO tags
     $page_identifier = 'home_video';
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
#grid-container {
    min-height: 400px;
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
/* Modal Background */
.video-modal {
    display: none;
    position: fixed;
    z-index: 9999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    justify-content: center;
    align-items: center;
}

/* Modal Content */
.video-modal-content {
    position: relative;
    width: 80%;
    max-width: 800px;
    background: black;
    padding: 10px;
    border-radius: 10px;
}

/* Close Button */
.close-btn {
    position: absolute;
    top: 10px;
    right: 20px;
    font-size: 30px;
    color: white;
    cursor: pointer;
}

/* Video Container */
.video-container {
    width: 100%;
    padding-top: 56.25%; /* Aspect ratio 16:9 */
    position: relative;
}

.video-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
      </style>
   </head>
   <body>
      <!-- Navbar start -->
      <?php $this->load->view('themes/frontend/common/header'); ?>
      <div class="heroinnerbanner faq my-5">
            <div class="container">
               <div class="secondslider">
                  <h2>Mastercraft Photo Gallery </h2>
                  <div class="strip">
                     <img src="<?php echo base_url(); ?>assets/frontend/images/strip_s.png">
                  </div>
                  <span><a href="<?php echo base_url(); ?>gallery">Photos</a> | <a href="<?php echo base_url(); ?>video">Videos</a></span>
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
                          <a class="nav-link" href="<?php echo base_url(); ?>video/<?php echo $value->slug; ?>"><img src="<?php echo base_url(); ?>uploads/category/<?php echo $value->logo; ?>"><?php echo $value->cate_name; ?></a>
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
    <?php foreach ($rows as $key => $value): 
        // Extract Video ID from the YouTube URL
        preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/ ]{11})/', $value->video_source_url, $matches);
        $video_id = $matches[1] ?? '';
        if ($video_id): 
    ?>
        <article class="video-item">
            <div class="video-wrapper" data-video-id="<?php echo $video_id; ?>">
                <img src="https://i.ytimg.com/vi/<?php echo $video_id; ?>/maxresdefault.jpg" height="250" class="img-responsive video-thumbnail" style="cursor: pointer;">
            </div>
        </article>
    <?php endif; endforeach ?>
</section>
<!-- Video Modal -->
<div id="videoModal" class="video-modal">
    <div class="video-modal-content">
        <span class="close-btn">&times;</span>
        <div class="video-container">
            <iframe id="modal-video" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</div>

<!--         <section id="grid-container" class="transitions-enabled fluid masonry js-masonry grid">-->
<!--    <?php foreach ($videos as $key => $value): ?>-->
<!--        <article class="beach people sea">-->
<!--            <img src="https://i.ytimg.com/vi_webp/evrSrwQYizQ/maxresdefault.webp" height="250" class="img-responsive video-iframe" data-video-url="<?php echo $value->video_source_url; ?>"> </img>-->
<!--        </article>-->
<!--    <?php endforeach ?>-->
<!--</section>-->

<!-- Modal Structure -->
<div id="videoModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="video-container">
            <iframe id="modalVideo" src="" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</div>

<style>
/* Simple Modal Styles */
.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.8);
}
.modal-content {
    background-color: #fefefe;
    margin: 5% auto;
    padding: 20px;
    width: 80%;
    max-width: 800px;
    position: relative;
}
.video-container {
    width: 100%;
    padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
    position: relative;
    height: 0;
}
.video-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
.close {
    position: absolute;
    top: -20px;
    right: -4px;
    font-size: 25px;
    font-weight: bold;
    color: #000000;
    cursor: pointer;
    width: 30px;
    height: 30px;
    text-align: center;
    background: #fff;
    line-height: 31px;
    border-radius: 40px;
}
</style>



               </div>
         </div>
      </div>
      
      </div>


       <!-- Model -->

<!-- end addTocarypop -->
      
     <!-- Footer section start -->
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
   
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('videoModal');
    const modalVideo = document.getElementById('modalVideo');
    const closeBtn = document.querySelector('.close');

    // Select all iframes with the class 'video-iframe'
    const iframes = document.querySelectorAll('.video-iframe');

    iframes.forEach(iframe => {
        iframe.addEventListener('click', function(event) {
            event.preventDefault();
            const videoUrl = this.getAttribute('data-video-url');
            
            // Check if videoUrl is properly retrieved
            if (videoUrl) {
                modalVideo.src = videoUrl;
                modal.style.display = 'block'; // Display the modal
            } else {
                console.error('Video URL not found for the clicked iframe.');
            }
        });
    });

    // Close modal when the user clicks on the 'x'
    closeBtn.addEventListener('click', function() {
        modal.style.display = 'none';
        modalVideo.src = ''; // Stop the video when the modal closes
    });

    // Close the modal if the user clicks anywhere outside of the modal content
    window.addEventListener('click', function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
            modalVideo.src = ''; // Stop the video
        }
    });
});

</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".video-iframe").forEach(img => {
            let videoUrl = img.getAttribute("data-video-url");
            let videoIdMatch = videoUrl.match(/(?:youtu\\.be\\/|youtube\\.com\\/.*[?&]v=|youtube\\.com\\/embed\\/)([^&]+)/);
            
            if (videoIdMatch && videoIdMatch[1]) {
                let videoId = videoIdMatch[1];
                let thumbnailUrl = https://img.youtube.com/vi/${videoId}/maxresdefault.jpg;
                img.src = thumbnailUrl;
            }
        });
    });
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    let modal = document.getElementById("videoModal");
    let modalVideo = document.getElementById("modal-video");
    let closeBtn = document.querySelector(".close-btn");

    document.querySelectorAll(".video-thumbnail").forEach(function(thumbnail) {
        thumbnail.addEventListener("click", function() {
            let videoId = this.parentElement.getAttribute("data-video-id");
            modalVideo.src = "https://www.youtube.com/embed/" + videoId + "?autoplay=1";
            modal.style.display = "flex";
        });
    });

    closeBtn.addEventListener("click", function() {
        modal.style.display = "none";
        modalVideo.src = ""; // Stop video when closing
    });

    // Close modal if clicked outside content
    modal.addEventListener("click", function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
            modalVideo.src = "";
        }
    });
});
</script>
