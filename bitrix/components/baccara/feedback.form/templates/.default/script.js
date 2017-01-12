$(document).ready(function () {

    var phone_number = $('.feedback_phone-inp');
    var email = $('.feedback_email-inp');
    var fio = $('.feedback_fio-inp');
    var city = $('.feedback_city-inp');
    var req_form = $('.feedback_form');

    $('.feedback_select').on('change', function () {
        debugger;
        $(this).prev().val($(this).val())
    })

    phone_number.mask('+7(999) 999-99-99');

    req_form.submit(function (e) {
        var result = true;
        $('.error').remove();
        if (!phone_number.val()) {
            result = false;
            req_form.prepend('<div class="error">Необходимо указать номер телефона</div>');
        }
        else if (!fio.val() || !city.val() || city.val().indexOf("@") != -1 || fio.val().length < 5 || city.val().length < 3) {
            if (!fio.val()) {
                req_form.prepend('<div class="error">Необходимо указать Ваши ФИО</div>');
            }
            else if (fio.val().length < 5) {
                req_form.prepend('<div class="error">Поле ФИО должно содержать не менее 5 символов</div>');
            }
            if (!city.val() || city.val().indexOf("@") != -1) {
                req_form.prepend('<div class="error">Необходимо указать Ваш город</div>');
            }
            else if (city.val().length < 3) {
                req_form.prepend('<div class="error">Поле Город должно содержать не менее 3 символов</div>');
            }

            result = false;
        }
        else if (email.val() == '' || email.val() == null || email.val() == undefined) {
            req_form.prepend('<div class="error">Необходимо заполнить поле Email</div>');
            email.css({'border': '1px solid red'});
            result = false;
        }
        else if (!validateEmail(email.val())) {
            req_form.prepend('<div class="error">Некорректно заполнено поле Email</div>');
            email.css({'border': '1px solid red'});
            result = false;
        }
        else {
            var feedback_select = $('.feedback_select');
            var ready = true;
            feedback_select.each(function () {
                if ( !$(this).prev().val()) ready = false;
            });

            if (!ready) {
                e.preventDefault();
                req_form.prepend('<div class="error">Не все данные заполнены</div>');
            } else {
                var test_data = $('.feedback_form').serialize();
                $.post('/ajax/request.php', {'data': test_data}).done(function (data) {
                    if (data) {
                        $('.request_popup').fadeIn('10').delay('1900').fadeOut('100');
                        $('input:text').val('');
                        $('textarea').val('');
                    }
                    else
                        alert('Что то пошло не так');
                });
            }

            return false;
        }

    });


    function validateEmail(email) {
        var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        return re.test(email);
    }

})
;