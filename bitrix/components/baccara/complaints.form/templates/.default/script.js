$(document).ready(function() {

    var email =  $('.feedback_email-inp');
    var req_form = $('.feedback_form');
           
    req_form.submit(function(){  

        var result = true;
        
        $('.error').remove();
        
        if($('.feedback_fields-wrap').css('display') == 'block') {
            if(email.val() == '' || email.val() == null || email.val() == undefined) {            
                req_form.prepend('<div class="error">Необходимо заполнить поле Email</div>');
                email.css({'border':'1px solid red'});            
                result = false;        
            } 
            else if(!validateEmail(email.val())) {            
                req_form.prepend('<div class="error">Некорректно заполнено поле Email</div>');
                email.css({'border':'1px solid red'});            
                result = false;        
            }
        }
        if(result) {
            var test_data = $('.feedback_form').serialize();
            $.post('/ajax/complaints.php', {'data': test_data}).done(function(data) {
                if(data) {  
                    $('.complaints_popup').fadeIn('10').delay('1900').fadeOut('100');
                    $('input:text').val('');
                    $('textarea').val('');
                }
                else
                    alert('Произошла ошибка, свяжитесь с нами пожалуйста +79154285564');
            });        
              
        
        }        
        return false;
    });
   
    
    function validateEmail(email) {
        var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        return re.test(email);
    }
   
    
    $('.introduce').on('click', function() {
        $('.feedback_fields-wrap').show();
    });
    
    $('.anonim').on('click', function() {
        $('.feedback_fields-wrap').hide();
    });
    
});