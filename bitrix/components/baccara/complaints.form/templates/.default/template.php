<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="template_wrap">
    <div class="complaints_popup">
        <div class="popup-title">Благодарим за отзыв!</div>
        <div class="popup-img"><img src="<?=SITE_TEMPLATE_PATH.'/images/galka.png'?>"></div>
        <div class="popup-text">Мы обязательно прислушаемся к Вашему мнению.</div>
        <div class="clear"></div>
    </div>
    
    <div class="feedback_form-wrap">        
        <div class="feedback_form-title"><?=$arParams['FORM_TITLE']?></div>
        <form class="feedback_form" method="post">

            <label><input class="radio anonim" type="radio" name="anonim" value="Анонимно" checked>&nbsp;Анонимно</label>
            <br>
            <label><input class="radio introduce" type="radio" name="anonim" value="Представиться">&nbsp;Представиться</label>
            
            <div class="feedback_fields-wrap">            
                <div class="feedback_fio-inp-wrap">
                    <input type="text" name="FIO" class="feedback-inp feedback_fio-inp" placeholder="ФИО">                  
                </div>
                <div class="email-inp-wrap">
                    <input type="text" name="EMAIL" class="feedback-inp feedback_email-inp" placeholder="Email">           
                </div>   
            </div>

            <div class="feedback-text">            
                <textarea name="COMMENT" placeholder="Комментарий" class="feedback_text-field"></textarea>
            </div>
            <div class="feedback-btn-block">
                <input name="submit" type="submit" value="Отправить" class="feedback-btn">
            </div>
        </form>
    </div>
</div>

