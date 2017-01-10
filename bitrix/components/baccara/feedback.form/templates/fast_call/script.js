$(document).ready(function() {

    var phone_number =  $('.fast_call-feedback_phone-inp');
    var email =  $('.fast_call-feedback_email-inp');
    var req_form = $('.fast_call-feedback_form');
    var fast_call_submit = $('.fast_call-submit');
       
    phone_number.mask('+7(999) 999-99-99');
    
    fast_call_submit.on('click', function(){ 
        var result = true;
        $('.error').remove();
        if(phone_number.val() == '' || phone_number.val() == null || phone_number.val() == undefined) {
            result = false;
            req_form.prepend('<div class="error">Необходимо указать номер телефона</div>');
        }
        else if(email.val() == '' || email.val() == null || email.val() == undefined) {
            result = false;
            req_form.prepend('<div class="error">Необходимо указать Email</div>');    
        }
        else if(!validateEmail(email.val())) {
            result = false;
            req_form.prepend('<div class="error">Некорректно заполнено поле Email</div>');
        }
        else {
            var test_data = $('.fast_call-feedback_form').serialize();
            $.post('/ajax/request.php', {'data': test_data}).done(function(data) {
                if(data) {
                    $('.request_popup').fadeIn('10').delay('1900').fadeOut('100');
                    $('input:text').val('');
                    $('textarea').val('');
                    $('.feedback_popup').css({'opacity': 0, 'visibility': 'hidden'});
                    $('.overlay').css({'opacity': 0, 'visibility': 'hidden'});
                }
                else
                    alert('Произошла ошибка, свяжитесь с нами пожалуйста +79154285564');
            });
        }
              
        return false;
    });
    
    /* $('#zvonok').on('click', function() {
        $('.feedback_popup').css({'opacity': 1, 'visibility': 'visible'});
        $('.overlay').css({'opacity': 1, 'visibility': 'visible'});
    });  */
    
    function validateEmail(email) {
        var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        return re.test(email);
    }
  
});