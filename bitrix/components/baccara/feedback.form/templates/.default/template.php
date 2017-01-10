<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="template_wrap">
    
    <div class="feedback_form-wrap">        
        <div class="feedback_form-title"><?=$arParams['FORM_TITLE']?></div>
        <form class="feedback_form" method="post">
            <input name="IBLOCK_ID" type="hidden" class="IBLOCK_ID" value="<?=$arParams['IBLOCK_ID']?>">
            <div class="feedback_fields-wrap">            
                <div>
                    <input type="text" name="FIO" class="feedback-inp feedback_fio-inp" placeholder="ФИО*">                  
                </div>
                <div>
                    <input type="text" name="PHONE" class="feedback-inp feedback_phone-inp" placeholder="Телефон*">           
                </div>
                <div>
                    <input type="text" name="EMAIL" class="feedback-inp feedback_email-inp" placeholder="Email*">           
                </div>
                <div>
                    <input type="text" name="CITY" class="feedback-inp feedback_city-inp" placeholder="Ваш город*">           
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

