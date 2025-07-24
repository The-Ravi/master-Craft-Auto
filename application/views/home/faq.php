<!DOCTYPE html>
<html lang="en">
   <head>
      
    <?php $this->load->view('themes/frontend/common/top-head'); ?>
    
    <?php 
    // Set page identifier for SEO tags
    $page_identifier = 'home_faq';
    // Include SEO head component
    $this->load->view('themes/frontend/common/seo-head', ['page_identifier' => $page_identifier, 'tags' => isset($tags) ? $tags : []]);
    ?>
    
    <style type="text/css">
      .alert-success {
          color: #0f5132;
          background-color: #d1e7dd;
          border-color: #badbcc;
          font-size: small;
      }
      .wrapper {
    margin-bottom: 0px;
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
    <!-- Header start -->
      <?php $this->load->view('themes/frontend/common/header'); ?>

      <!-- Header end -->

      <div class="main">
      <div class="wrapper">
      <section class="faq">
      <div class="container">
            <div class="row">
              <div class="col-md-8">
              <div class="accordion" id="faq">
                <?php foreach ($faqs as $faq): ?>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $faq->id; ?>" aria-expanded="false" aria-controls="collapse<?php echo $faq->id; ?>">
                      <?php echo $faq->question; ?>
                      </button>
                    </h2>
                    <?php foreach ($faq->answer as $faqans): ?>
                      <div id="collapse<?php echo $faq->id; ?>" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faq">
                        <div class="accordion-body">
                        <?php echo $faqans->answer; ?>
                        </div>
                      </div>
                    <?php endforeach ?>
                    
                  </div>
                <?php endforeach ?>
  
  <!-- <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      How can I book a car denting & painting service?      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faq">
      <div class="accordion-body">
      Simple! Just call us on 98738 89977 or email us at info.mastercraftggn@nipponpaint.co.in for immediately book a car dentig and pinting service. Our service executive will take on your request and will reach you shortly. 
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      Is the entire car painted at Mastercraft’s Gurugram’s denting painting services?      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faq">
      <div class="accordion-body">
      Yes, Our expert team is stationed at the Gurugram detailing workshop. The cetnre is equipped with the best of latest technologies. So your car can be serviced at the earliest'
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingfours">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingfour" aria-expanded="false" aria-controls="collapseTwo">
      How is color matching done at your workshop?      </button>
    </h2>
    <div id="headingfour" class="accordion-collapse collapse" aria-labelledby="headingfours" data-bs-parent="#faq">
      <div class="accordion-body">
      At Mastercraft, we use advanced technology, quality paints, and leverage the knowledge of our
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingfives">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingfive" aria-expanded="false" aria-controls="collapseTwo">
      My car is an older model, will you be able to match the paint?      </button>
    </h2>
    <div id="headingfive" class="accordion-collapse collapse" aria-labelledby="headingfives" data-bs-parent="#faq">
      <div class="accordion-body">
      At Mastercraft, we use advanced technology, quality paints, and leverage the knowledge of our
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingsixs">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingsix" aria-expanded="false" aria-controls="collapseTwo">
      What kind of paints do you use for painting services?      </button>
    </h2>
    <div id="headingsix" class="accordion-collapse collapse" aria-labelledby="headingsixs" data-bs-parent="#faq">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingsevens">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingseven" aria-expanded="false" aria-controls="collapseTwo">
      How much time will it take to paint my car at your workshop?      </button>
    </h2>
    <div id="headingseven" class="accordion-collapse collapse" aria-labelledby="headingsevens" data-bs-parent="#faq">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingeights">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingeight" aria-expanded="false" aria-controls="collapseTwo">
      Will I be able to see the difference in the paint?      </button>
    </h2>
    <div id="headingeight" class="accordion-collapse collapse" aria-labelledby="headingeights" data-bs-parent="#faq">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingnines">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headingnine" aria-expanded="false" aria-controls="collapseTwo">
      What if I am not available to drop my car?      </button>
    </h2>
    <div id="headingnine" class="accordion-collapse collapse" aria-labelledby="headingnines" data-bs-parent="#faq">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div> -->
</div>
</div>
  <div class="col-md-4 ">
    <div class="card intro contact p-4 shadow">
      <div class="alert alert-success mt-2 d-none" role="alert" id="successMessage">Your Request submitted successfully</div>
      <div class="card-body">
        <h3>Got another </br><span>Question?</span></h3>
        <form id="contact_form" name="contact_form" method="post">
          <div class=" row">
            <div class="col-md-12">
              <label for="email_addr">FULL NAME</label>
              <input type="text" required="" maxlength="50" class="form-control full_name" id="name" name="name" placeholder="">
            </div> <div class="col-md-12">
              <label for="phone_input">EMAIL</label>
              <input type="email" class="form-control email" id="phone_input" name="EMAIL" placeholder="" required="">
            </div>
            <div class="col-md-12">
              <label for="phone_input">PHONE</label>
              <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10" minlength="10" class="form-control phone_number" id="phone_input" name="PHONE" placeholder="" required="">
            </div>
            <div class="col-md-12">
              <label for="message">QUESTION</label>
              <textarea class="form-control message" id="message" name="message" rows="2" required=""></textarea>
            </div>
          </div>
          <button type="submit" class="btn btn-primary px-4 btn-lg" id="contatSubmit">Book Your Mastercraft Session</button>
        </form>
        
      </div>
    </div>
  </div>
</div>
</div>
</section>
      <!-- Footer start -->
      <?php $this->load->view('themes/frontend/common/footer'); ?>
      <!-- Footer end -->

<script>

</script>
   </body>
</html>
<script type="text/javascript">
  $('#contact_form').on('submit', async(e)=>{
    e.preventDefault();
    var full_name = $('#contact_form').find('.full_name').val();
    var email = $('#contact_form').find('.email').val();
    var mobile = $('#contact_form').find('.phone_number').val();
    var question = $('#contact_form').find('.message').val();

    const form_data = new FormData();
    form_data.append('full_name',full_name);
    form_data.append('email',email);
    form_data.append('mobile',mobile);
    form_data.append('question',question);

    const res = await fetch('<?php echo base_url(); ?>Home_public/saveFaqForm',{
      method: 'POST',
      body: form_data
    });

    const response = await res.json();
    if (response.status == 200) {
      $('#contact_form').find('.full_name').val('');
      $('#contact_form').find('.email').val('');
      $('#contact_form').find('.phone_number').val('');
      $('#contact_form').find('.message').val('');
      $('#successMessage').removeClass('d-none');
      $('#successMessage').html(response.message);
    }else{
      console.log(response);
      return false;
    }
  });
</script>
