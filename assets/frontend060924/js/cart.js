$(document).ready(()=>{
  uuidClient();
  getCartData();

  var CurrentUrl= document.URL;
  var CurrentUrlEnd = CurrentUrl.split('/').filter(Boolean).pop();
  console.log(CurrentUrlEnd);
  $( ".main .owl-theme .item li a" ).each(function() {
      var ThisUrl = $(this).attr('href');
      var ThisUrlEnd = ThisUrl.split('/').filter(Boolean).pop();
  
      if(ThisUrlEnd == CurrentUrlEnd){
      $(this).closest('li').addClass('active')
      }
  });
});

function uuidClient() {
  var session_id = getCookie("session_id");
  if (!session_id || session_id == undefined || session_id == "undefined") {
    var uuid = ([1e7] + -1e3 + -4e3 + -8e3 + -1e11).replace(/[018]/g, (c) =>
      (
        c ^
        (crypto.getRandomValues(new Uint8Array(1))[0] & (15 >> (c / 4)))
      ).toString(16)
    );
    session_id = uuid;
    setCookie("session_id", session_id, 365);
  } else {
    session_id;
  }
}

function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
  let expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(";");
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

// Add to cart 

const getCartData = async (e) => {
  try{
    var session_id = await getCookie("session_id");
    const form_data = new FormData();
    form_data.append('session_id',session_id);
    const res = await fetch(`${BASEURL}Cartcontroller/getCartData`,{
      method: 'POST',
      body: form_data
    });

    const response = await res.json();
    if (response.status == 200) {
      let data = response.data;
      let imgUrl = `${BASEURL}uploads/carDefaultImage.avif`;
      if (data.image != null) {
         imgUrl = `${BASEURL}uploads/cars/${data.image}`;
      }
      var image = `<img src="${imgUrl}">`;
      var cartTittle = `<span class="normal">${data.brandName} ${data.modalName} <b>${data.petrol_type} </b></span> <span class="chanegs" style="cursor:pointer;" onclick="changeCarCartModel('${data.id}');"> Change</span>`;
      $('#_productCartSection__').find('.productTittle_').html(cartTittle);
      $('#_productCartSection__').find('.productimg').html(image);
      let cartData = JSON.parse(data.cartdata);
      if (cartData.length > 0) {
          $('.addCart').removeClass('d-none');
          $('.removeCart').addClass('d-none');
        var cartProduct = ``;
        cartData.map((cart)=>{
          cartProduct += `<div class="d-flex">
             <div class="toast-body">
                ${cart.tittle}
             </div>
             <button type="button" data-id="${cart.service_id}" class="btn-close me-2 m-auto"  onclick="removeFromCart(this);"></button>
          </div>`;
          $('.cart_button_sec_'+cart.service_id).find('.addCart').addClass('d-none');
          $('.cart_button_sec_'+cart.service_id).find('.removeCart').removeClass('d-none');
        });
        $('#_productCartSection__').find('.cartProductAvailable_').html(cartProduct);
        $('#_productCartSection__').find('._emptyProductSec__').addClass('d-none');
        $('#_productCartSection__').find('._withCartProdut__ ').removeClass('d-none');
         $('#_productCartSection__').find('.cartEmptyProduct').addClass('d-none');
        $('#_productCartSection__').find('.proddisinner').removeClass('d-none');
        $('#_productCartSection__').find('._getAQuote_').removeClass('d-none');
      } else {
        $('#_productCartSection__').find('.cartEmptyProduct').removeClass('d-none');
        $('#_productCartSection__').find('.proddisinner').addClass('d-none');
        $('#_productCartSection__').find('._getAQuote_').addClass('d-none');
      }
      
    } else {
      $('#_productCartSection__').find('._emptyProductSec__').removeClass('d-none');
      $('#_productCartSection__').find('._withCartProdut__').addClass('d-none');
      console.log(response);
    }
  }catch(error) {
    console.log(error);
  }
} 

const changeCarCartModel = async (id) => {
  try{
     const form_data  = new FormData();
     form_data.append('id', id);
     const res = await fetch(`${BASEURL}Cartcontroller/changeCarCartModelById`, {
      method: 'POST',
      body: form_data
     });
     const response = await res.json();
     if(response.status == 200) {
      console.log(response);
      var data = response.data;
      $('#editCartModal').modal('show');
      $('#editCartModal').find('.brand_id').val(data.brand_id).change();
      $('#editCartModal').find('.modal_id').val(data.model_id).change();
      $('#editCartModal').find('.petrol_type').val(data.petrol_type).change();
      $("#editCartModal").find('#cartid').val(id);
     }else{
      console.log(response);
     }
  } catch (error){
    console.log(error);
  }
}

const addToCart = async (e) => {
  try {
    var id = $(e).attr('data-id');
    // alert(id);
    var session_id = await getCookie("session_id");
    let checkCartdata = await chackCartBysession(session_id, id);
    console.log(checkCartdata);
    if (checkCartdata == false) {
      return false;
    }
    const form_data = new FormData();
    form_data.append('id',id);
    form_data.append('session_id',session_id);

    const res = await fetch(`${BASEURL}Cartcontroller/addToCart`,{
      method: 'POST',
      body: form_data
    });

    const response = await res.json();
    if (response.status == 200) {
      $.notify(response.message, 'success');
      getCartData();
      if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
          
          var T = document.getElementById("_productCartSection__");
          T.style.display = "block";
        }
      
    }else if (response.status == 409) {
      $.notify(response.message);
      return false;
    } else {
      console.log(response);
      return false;
    }

  } catch (error){
    console.log(error);
  }
}

const handleChangePop = async (e) => {
  const id = $(e).val();
  $.ajax({
  
      url:`${BASEURL}Home_public/getModelByBrandId`,
      type: 'POST',
      data : {
          'id':id
      },
      dataType: 'JSON',
      success:function(res){
          if(res.status == 200){
              let modalData = res.data;
              
              var htmldata = '<option value=""></option>';
              modalData.map((modal)=>{
                  htmldata += `<option value="${modal.id}">${modal.name}</option>`;
              });
              $("#bookingSession").find('.modal_id').html(htmldata);
          }else{
              var htmldata = '<option value=""></option>';
              $("#bookingSession").find('.modal_id').html(htmldata);
          }
          
      }
  });

}

// Check cart session exiting.

const chackCartBysession = async(session_id, wash_id='')=>{
  try{
    const form_data = new FormData();
      form_data.append('session_id',session_id);
      const res = await fetch(`${BASEURL}Cartcontroller/checkCartdata`,{
        method: 'POST',
        body: form_data
    });

      const response = await res.json();
      if (response.status == 200) {
        return true;
      }else{
        $('#bookingSession').find('#wash_id').val(wash_id);
        $('#cta').modal('show');
        return false;
      }
  }catch(error){
    console.log(error);
  }
}

// New Booking session cart........

const bookingSessionCart = async () => {
  try {

    $('.error_class').remove();
     var session_id = getCookie("session_id");
    let brand_id = $('#bookingSession').find('.brand_id').val();
    let modal_id = $('#bookingSession').find('.modal_id').val();
    let petrol_type = $('#bookingSession').find('.petrol_type').val();
    let wash_id = $('#bookingSession').find('#wash_id').val();

    if (!brand_id) {
      $('#bookingSession').find('.brand_id').after('<div class="error_class">This field is required</div>');
      $('.error_class').css('color','darkred');
      $('.error_class').css('font-size','14px');
      $('#bookingSession').find('.brand_id').focus();
      return false;
    }

    if (!modal_id) {
      $('#bookingSession').find('.modal_id').after('<div class="error_class">This field is required</div>');
      $('.error_class').css('color','darkred');
      $('.error_class').css('font-size','14px');
      $('#bookingSession').find('.modal_id').focus();
      return false;
    }

    if (!petrol_type) {
      $('#bookingSession').find('.petrol_type').after('<div class="error_class">This field is required</div>');
      $('.error_class').css('color','darkred');
      $('.error_class').css('font-size','14px');
      $('#bookingSession').find('.petrol_type').focus();
      return false;
    }

    const form_data = new FormData();
    form_data.append('brand_id',brand_id);
    form_data.append('modal_id',modal_id);
    form_data.append('wash_id',wash_id);
    form_data.append('petrol_type',petrol_type);
    form_data.append('session_id',session_id);

    const res = await fetch(`${BASEURL}Cartcontroller/bookingSessionCart`,{
      method: 'POST',
      body: form_data
    });
    const response = await res.json();
    if (response.status == 200) {
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            var T = document.getElementById("_productCartSection__");
            T.style.display = "block";
        }
      $('#cta').modal('hide');
      $.notify(response.message, 'success');
      getCartData();
      
    }else{
      console.log(response);
    }

  } catch(error) {
    console.log(error);
  }
}

const getAQuote = async () => {
  try {
    $('#_productCartSection__').find('._getAQuote_').addClass('d-none');
    $('#_productCartSection__').find('.otpSection_').removeClass('d-none');
  } catch(error){
    console.log(error);
  }
}

const getOtpRequest = async () => {
  try {
    $('.error_class').remove();
    var phone_number = $('#_productCartSection__').find('.otpSection_ .mobile_number').val();
    if (!phone_number) {
      $('#_productCartSection__').find('.otpSection_ .mobile_number').after('<div class="error_class">This field is required.</div>');
      $('.error_class').css('color', 'darkred');
      $('.error_class').css('font-size', '14px');
      $('#_productCartSection__').find('.otpSection_ .mobile_number').focus();
      return false;
    }
    const form_data = new FormData();
    form_data.append('phone_number',phone_number);

    const res = await fetch(`${BASEURL}Home_public/sendOtp`,{
      method: 'POST',
      body: form_data
    });

    const response = await res.json();
    if (response.status == 200) {
      console.log(response);
      $.notify(response.message,'success');
      $('#_productCartSection__').find('.phone_number').val(phone_number);
      $('#_productCartSection__').find('.otpSection_').addClass('d-none');
      $('#_productCartSection__').find('.verifyOtpSection_').removeClass('d-none');
      userTimerstart(1);
    } else {
      console.log(response);
    }
  } catch (error) {
    console.log(error);
  }
}

function userTimerstart(time) {
   var countDownDate = new Date().getTime() +  time * 60 * 1000;
    var x = setInterval(function() {

      // Get today's date and time
      var now = new Date().getTime();
      var distance = countDownDate - now;
      // Time calculations for hours, minutes and seconds
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
      $('#_productCartSection__').find('.timer').html(minutes + ":" + seconds);
      if (distance < 0) {
        $('#_productCartSection__').find('.resend-otp-text').hide();
        $('#_productCartSection__').find('.resend-otp-link').show();
        $('#_productCartSection__').find('.timer').html("0:00");
        return false;
      }
    }, 1000);
}

function resendOTP() {
    try{
      const phone_number = $('#_productCartSection__').find('.phone_number').val();
      $.ajax({
            url:`${BASEURL}Home_public/sendOtp`,
            type: 'POST',
            data : {
                'phone_number' : phone_number
            },
            dataType: 'JSON',
            success:function(res){
                if(res.status == 200){
                  $('#_productCartSection__').find('.timer').html("");
                 $("#createbookingOtp").find('.entered_phone_no').html(phone_number);
                  $.notify(res.message,'success');
                  userTimerstart(1);
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

const verifyOtp = async () => {
  try {
    var session_id = await getCookie("session_id");
    const phone_number = $('#_productCartSection__').find('.phone_number').val();
    const otp = $('#_productCartSection__').find('.verifyOtpSection_ .otp').val();
    const form_data = new FormData();

    form_data.append('session_id', session_id);
    form_data.append('phone_number', phone_number);
    form_data.append('otp', otp);

    const res = await fetch(`${BASEURL}Cartcontroller/orderCreated`,{
      method: 'POST',
      body: form_data
    });

    const response = await res.json();
    if (response.status == 200) {
      $.notify(response.message,'success');
      
      location.href= `${BASEURL}thankyou`;
      /*
      $('#_productCartSection__').find('._withCartProdut__').addClass('d-none');
      $('#_productCartSection__').find('._emptyProductSec__').addClass('d-none');
      $('#_productCartSection__').find('.thankYouproductCartSec__').removeClass('d-none');
      */
    }else{
      console.log(response);
    }

  } catch(error){
    console.log(error);
  }
}

const handleChangePopedit =  (e) => {
  try {
     const id = $(e).val();
    $.ajax({
    
        url:`${BASEURL}Home_public/getModelByBrandId`,
        type: 'POST',
        data : {
            'id':id
        },
        dataType: 'JSON',
        success:function(res){
            if(res.status == 200){
                let modalData = res.data;
                
                var htmldata = '<option value=""></option>';
                modalData.map((modal)=>{
                    htmldata += `<option value="${modal.id}">${modal.name}</option>`;
                });
                $("#editCartModal").find('.modal_id').html(htmldata);
                
            }else{
                var htmldata = '<option value=""></option>';
                $("#editCartModal").find('.modal_id').html(htmldata);
            }
        }
    });
  } catch (error) {
    console.log(error);
  }
}

const updateBookingSessionCart = async () => {
  try{

    var session_id = await getCookie('session_id');
    var brand_id = $('#editCartModal').find('.brand_id').val();
    var modal_id = $('#editCartModal').find('.modal_id').val();
    var petrol_type = $('#editCartModal').find('.petrol_type').val();
    var cartId = $('#editCartModal').find('#cartid').val();

    const form_data = new FormData();
    form_data.append('session_id', session_id);
    form_data.append('brand_id', brand_id);
    form_data.append('modal_id', modal_id);
    form_data.append('petrol_type', petrol_type);
    form_data.append('cartId', cartId);

    const res = await fetch(`${BASEURL}Cartcontroller/updateBookingSessionCart`, {
      method: 'POST',
      body: form_data
    });

    const response = await res.json();
    if (response.status == 200) {
      $.notify(response.message, 'success');
      $('#editCartModal').modal('hide');
      getCartData();
    } else {
      console.log(response);
      return false;
    }

  } catch (error) {
    console.log(error);
  }
}

const removeFromCart = async (e) =>{
  try {
    var session_id = await getCookie('session_id');
    var id = $(e).attr('data-id');
    const form_data = new FormData();
    form_data.append('id', id);
    form_data.append('session_id', session_id);

    const res = await fetch(`${BASEURL}Cartcontroller/removeFromCart`,{
      method: 'POST',
      body: form_data
    });

    const response = await res.json();
    if (response.status == 200) {
      $.notify(response.message,'success');
      console.log(response);
      getCartData();
    } else {
      $.notify(response.message);
      console.log(response);
    }

  } catch(error) {
    console.log(error);
  }
}




