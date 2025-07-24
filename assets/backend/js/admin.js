/*
**  Admin Form
***
*/

/*
**   Form Validation......
***
*/

$('#adminFrom').on('submit', (e)=>{
    e.preventDefault();
    $('#adminFrom').find('.error_class').remove();
    var email = $('#adminFrom').find('.email').val();
    var password = $('#adminFrom').find('.password').val();
    if(!email){
        $('#adminFrom').find('.email').after('<div class="error_class">Email is required</div>');
        $('#adminFrom').find('.error_class').css('color','darkred');
        $('#adminFrom').find('.error_class').css('font-size','14px');
        $('#adminFrom').find('.email').focus();
        return false;
    }
    if(!password){
        $('#adminFrom').find('.password').after('<div class="error_class">Password is required</div>');
        $('#adminFrom').find('.error_class').css('color','darkred');
        $('#adminFrom').find('.error_class').css('font-size','14px');
        $('#adminFrom').find('.password').focus();
        return false;
    }
    adminLogin(email,password);
    return false;
});

const adminLogin = async (email='',password='') => {
    try{
        const form_data = new FormData();
        form_data.append('email',email);
        form_data.append('password', password);
        const res = await fetch(`${BASE_URL}admin/Admincontroller/loginAction`,{
            method: 'POST',
            body: form_data
        });
        const response = await res.json();
        if (response.status == 200) {
            $.notify(response.message, 'success');
            setTimeout(()=>{
                window.location = BASE_URL+'admin/dashboard';
            },2000);
        }else{
            $.notify(response.message);
            return false;
        }
    }catch (error) {
        console.log(error);
    }
}


