<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты «Блэк Баккара»");
?>

<div class="cash-carry"><?/*<img width="25" height="25" src="<?=SITE_TEMPLATE_PATH.'/images/exclamation-point.png'?>">*/?><p>Мы ждем Вас в удобно расположенном складе-магазине формата <span>Cash&amp;Carry.</span></p></div>
<div id="contacts">

    <div class="address">
        <img width="50" height="50" src="<?=SITE_TEMPLATE_PATH.'/images/address.png'?>"><br>
        <p class="contacts_headers">Адрес:</p><br>
        <p>Россия, Москва, Рижская площадь, дом 9, строение 2А.</p><br>        
    </div>
    
    <div class="work_hours">
        <img width="50" height="50" src="<?=SITE_TEMPLATE_PATH.'/images/clock.png'?>"><br>
        <p class="contacts_headers">Часы работы:</p><br>
        c 6:30 до 20:00<br>
        Без перерывов и выходных
    </div>
    <div class="clear"></div>
    <div class="phones_for_orders">
        <img width="50" height="50" src="<?=SITE_TEMPLATE_PATH.'/images/phone.png'?>"><br>
        <p class="contacts_headers">Для консультаций и формирования заказа:</p><br>
        <p>
            +7 (495) 507-11-20 &nbsp; +7 (925) 507-11-20<br>
            +7 (495) 589-77-79 &nbsp; +7 (925) 589-77-79<br>
            +7 (495) 589-79-77 &nbsp; +7 (925) 589-79-77<br>
            +7 (495) 589-85-59 &nbsp; +7 (925) 589-85-59<br>
        </p>
    </div>
    <div class="contacts_emails">
         <img width="50" height="50" src="<?=SITE_TEMPLATE_PATH.'/images/email.png'?>"><br>
        <p class="contacts_headers">Почтовые адреса:</p><br>
        <p>            
            <span>для комм:</span> info@black-baccara.ru<br>
            <span>для заказов:</span> zakaz@black-baccara.ru<br>
            <span>для соискателей:</span> hr@black-baccara.ru<br>
        </p>
    </div>
    <div class="clear"></div>
    
    <div class="contact_attention-wrap">
        <?/*<img src="<?=SITE_TEMPLATE_PATH.'/images/blue_arrow.png'?>" class="blue_arrow">*/?>
        <p class="attention">ВНИМАНИЕ !!!</p>
        
        <div class="attention-block">
            <img width="80" height="80" src="<?=SITE_TEMPLATE_PATH.'/images/red_arrow.png'?>">
            <p class="contact_attention-text">
                По пути следования находится ряд цветочных компаний, рынок и др.

                <span>Просьба, не ошибаться в схеме проезда</span>, так как самые низкие цены, высокое качество продукции

                и широкий ассортимент может гарантировать <span>только Компания "Блэк Баккара".</span>
            </p>
            <div class="clear"></div>
        </div>
        
    </div>
            <div class="yandexmapa">
            <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view", 
	".default", 
	array(
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.79802325195567;s:10:\"yandex_lon\";d:37.63137655225398;s:12:\"yandex_scale\";i:16;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.631376552254;s:3:\"LAT\";d:55.798021741062;s:4:\"TEXT\";s:127:\"ООО «Блэк Баккара» Россия, Москва, Рижская площадь , дом 9 , строение 2А.\";}}}",
		"MAP_WIDTH" => "100%",
		"MAP_HEIGHT" => "400",
		"CONTROLS" => array(
			0 => "ZOOM",
			1 => "MINIMAP",
			2 => "TYPECONTROL",
			3 => "SCALELINE",
		),
		"OPTIONS" => array(
			0 => "ENABLE_DBLCLICK_ZOOM",
			1 => "ENABLE_DRAGGING",
		),
		"MAP_ID" => "",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
        </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>