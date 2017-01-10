$(document).ready(function() {

/*     $('#take_tour_part-form').submit(function() {
        var code = $('.activation_code').val();
        var id_tournament = $('.id_tournament').val();
        
        $.post('/ajax/activate_tour_code.php', {'code': code, 'id_tournament': id_tournament}).done(function(data) {
            alert(data);
        });
        
        return false;
    }); */
    
    $('.start_tournament-admin').on('click', function() {
        var tour_id = $(this).next('.tournament_id').val();
        $.post('/ajax/start_tournament.php', {'tour_id': tour_id}).done(function(data) {
            console.log(data);
        });
    });
    
    $('.go_next_step').on('click', function() {
        var current_step = $('.go_next_step-current_step').val();
        var id_tournament = $('.go_next_step-id_tournament').val();
        
        $.post('/ajax/go_next_step.php', {'current_step': current_step, 'id_tournament': id_tournament}).done(function(data) {
            console.log(data);
        });
    });
    
    
    $('.calc_next_step').on('click', function() {
        var current_step = $('.go_next_step-current_step').val();
        var id_tournament = $('.go_next_step-id_tournament').val();
        
        $.post('/ajax/calc_next_step.php', {'current_step': current_step, 'id_tournament': id_tournament}).done(function(data) {
            console.log(data);
        });
    });
    
    $('.close_bets').on('click', function() {
        var current_step = $('.go_next_step-current_step').val();
        var id_tournament = $('.go_next_step-id_tournament').val();
        
        $.post('/ajax/close_bets.php', {'current_step': current_step, 'id_tournament': id_tournament}).done(function(data) {
            console.log(data);
        });
    });

    $('.korpus input').styler('destroy');
    $('#make_forecast-wrap input').styler();
    
    var not_designed_bet = $('.not_designed_bet');
    var win_bet = $('.win_bet');
    var lose_bet = $('.lose_bet');
    
    $('.not_designed_bet, .win_bet, .lose_bet, .wait_bet, .total_coeff_start').on('click', function() {
        
        var display = $(this).children("span").css('display');
        
        $('.detail_info-forecast-wrap, .detail_info-forecast-start_coeff, .detail_info-forecast-wait_bet').hide();
        
        $(this).children("span").css('display', display);
        
        if($(this).children("span").css('display') != 'block') 
            $(this).children("span").show();
        else
            $(this).children("span").hide();
    });
    
/*     $('.not_designed_bet, .win_bet, .lose_bet, .wait_bet, .total_coeff_start').on('mouseout', function() {
        if($(this).children("span").css('display') == 'block')
            $(this).children("span").hide();
    }); */
    
});