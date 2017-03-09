$(document).ready(function(){    
	if ($(".bxslider").length>0){
		var slider = $(".bxslider").bxSlider({
			auto:true,
            mode: 'fade',
            captions: true,
            speed: 1500,
			autoControls: true,
/*             onSlideAfter: function(){
				slider.startAuto();		
		    } */
		});
	}
    
/*     $('#foto24').on('click', function() {
        $(this).hide();
    });

    setTimeout(function() {
         $('#foto24').fadeOut('slow');
    }, 7000); */
    
/*     $('.right_arrow').click(function() {
        slider1.goToNextSlide();
    });
    
    $('.left_arrow').click(function() {
        slider1.goToPrevSlide();
    });  */  


    $('.conditions_delivery-text, .conditions-text, .conditions_delivery, .contact_attention-wrap, .pricelist-text, .feedback_form-wrap, .dogovor_rules, .purchase_options').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInRightMy',
        offset: 50
    });
                
    $('.cash-carry, .advantages-wrap').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInRight',
        offset: 50
    });
   
    $('.address, .work_hours, .phones_for_orders, .contacts_emails, .decor_site, .special_offers-catalog p, .special_offers-catalog img, .our_operators-block, .our_partners_letters-block').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInDown',
        offset: 50
    });
    
    $('.attention-block img').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated bounceInRight',
        offset: 50
    });

    /* setTimeout(function(){
        $('.advantages li').addClass("hidden").viewportChecker({
            classToAdd: 'visible animated fadeInDown',
            offset: 50
        });
    }, 1000); */
    
    $('.advantages li').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInDown',
        offset: 50
    });
            
    $('.vacancies-table .first').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInRight',
        offset: 50
    });
    
    $('.vacancies-table .second').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated2 fadeInRight',
        offset: 50
    });
    
    $('.vacancies-table .third').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated3 fadeInRight',
        offset: 50
    });
    
    $(".fancybox")
    .attr('rel', 'gallery')
    .fancybox({
        beforeLoad: function() {
            this.title = $(this.element).attr('caption');
        }
    });
    
    function inWindow(s){
          var scrollTop = $(window).scrollTop();
          var windowHeight = $(window).height();
          var currentEls = $(s);
          var result = [];
          currentEls.each(function(){
            var el = $(this);
            var offset = el.offset();
            if(scrollTop <= offset.top && (el.height() + offset.top) < (scrollTop + windowHeight))
              result.push(this);
          });
          return $(result);
    }
    
    var bfl_open_text = $('.best_flowers-open_text');
    var adv_open_text = $('.advantages-open_text');
    
    bfl_open_text.on('click', function() {
        if(bfl_open_text.hasClass('active'))
            bfl_open_text.removeClass('active');
        else
            bfl_open_text.addClass('active');
        if($('.best_flowers_for_you').css('display') == 'block')
            $('.best_flowers_for_you').slideUp();    
        else
            $('.best_flowers_for_you').slideDown();
    });
    
    adv_open_text.on('click', function() {
        if(adv_open_text.hasClass('active'))
            adv_open_text.removeClass('active');
        else
            adv_open_text.addClass('active');
        if($('.advantages-black_baccara').css('display') == 'block')
            $('.advantages-black_baccara').slideUp();    
        else
            $('.advantages-black_baccara').slideDown();
    });
    
});