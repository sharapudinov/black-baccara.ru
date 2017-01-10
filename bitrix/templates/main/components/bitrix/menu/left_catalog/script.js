$(document).ready(function() {

    var accordion_head = $('.accordion > li > a'),
        //accordion_body = $('.accordion li > .sub-menu'),
        accordSumItem = $('.accordion li > .sub-menu').find('li'),
        accordion_link = accordion_head.find('.link');

    // Открытие первой вкладки при загрузке

    // accordion_head.first().addClass('active').next().slideDown('normal');

    // Выбор функции

    //$('.accordion').find('.sub-menu').hide();

    //accordion_head.removeClass('active');

    accordion_head.on('click', function(event) {
        if(!$(this).hasClass('link')) { 
            // Отключить заголовок ссылки

            event.preventDefault();
            
            // Отображение и скрытие вкладок при клике

            var accordion_body = $(this).parent().children('.sub-menu');

            if (!$(this).hasClass('active')){
                
                accordion_body.slideDown(300);

                //$(this).next().stop(true,true).slideToggle('normal');

                //$(this).addClass('active');
                $(this).addClass('active');
                console.log('aaaaaa')
            } else {
                $(this).removeClass('active');
                accordion_body.slideUp();
            }
        }
    });
    var accordItem = $("#two");
    if(accordItem.hasClass('active') && accordSumItem.hasClass('active')){
        // accordItem.removeClass('active');
        // accordSumItem.css('padding', '4px 0px 4px 10px');
        //console.log('pppppppp')
    }

});