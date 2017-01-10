<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?><!DOCTYPE html>
<html>  
  <head>
   <title><?$APPLICATION->ShowTitle()?></title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <?$APPLICATION->ShowHead();?>
    
    
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900&subset=latin,cyrillic' rel="nofollow" rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <?$APPLICATION->SetAdditionalCSS("/bitrix/templates/main/css/bootstrap.css");?>
    <?$APPLICATION->SetAdditionalCSS("/bitrix/templates/main/css/animate.css");?>
    <?$APPLICATION->SetAdditionalCSS("/bitrix/templates/main/css/prettyPhoto.css");?>
    <?$APPLICATION->SetAdditionalCSS("/bitrix/templates/main/css/jquery.fancybox.css");?>
    <?$APPLICATION->SetAdditionalCSS("/bitrix/templates/main/js/bxslider/jquery.bxslider.css");?>
    
    <?$APPLICATION->SetAdditionalCSS("/bitrix/templates/main/js/jquery-ui-1.11.4.custom/jquery-ui.min.css");?>
    <?$APPLICATION->SetAdditionalCSS("/bitrix/templates/main/js/jquery-ui-1.11.4.custom/jquery-ui.structure.min.css");?>
    <?$APPLICATION->SetAdditionalCSS("/bitrix/templates/main/js/jquery-ui-1.11.4.custom/jquery-ui.theme.min.min.css");?>
    
    <?$APPLICATION->AddHeadScript("/bitrix/templates/main/js/jquery-ui-1.11.4.custom/jquery-ui.min.js");?>
    <?$APPLICATION->AddHeadScript("/bitrix/templates/main/js/bxslider/jquery.bxslider.min.js");?>
    <?$APPLICATION->AddHeadScript("/bitrix/templates/main/js/js/bootstrap.min.js");?>
    <?$APPLICATION->AddHeadScript("/bitrix/templates/main/js/jquery.viewportchecker.js");?>    
    <?$APPLICATION->AddHeadScript("/bitrix/templates/main/js/jquery.validate.min.js");?>
    <?$APPLICATION->AddHeadScript("/bitrix/templates/main/js/localization/messages_ru.js");?>
    <?$APPLICATION->AddHeadScript("/bitrix/templates/main/js/jquery.prettyPhoto.js");?>
    <?$APPLICATION->AddHeadScript("/bitrix/templates/main/js/jquery.fancybox.js");?>    
    <?$APPLICATION->AddHeadScript("/bitrix/templates/main/js/jquery.maskedinput.min.js");?>
    <?//$APPLICATION->AddHeadScript("/bitrix/templates/main/js/snow-fall.js");?>
    <?$APPLICATION->AddHeadScript("/bitrix/templates/main/js/script.js");?>
    <script type="text/javascript" src="http://vk.com/js/api/share.js?90" charset="windows-1251"></script>

	<link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH.'/favicon.ico'?>" type="image/x-icon">	
	<!--[if lt IE 9]>
	<script type="text/javascript" src="/js/html5.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
	<script src="/js/IE9.js"></script>
	<![endif]-->
  </head>
 <body> 
	<?$APPLICATION->ShowPanel()?>
    <?/*<div id="foto24" style=""></div>*/?>
    <div id="page_wrap">
        <header id="header_wrap">
            
            <div class="request_popup">
                <div class="popup-title">Благодарим за заявку!</div>
                <div class="popup-img"><img src="<?=SITE_TEMPLATE_PATH.'/images/galka.png'?>"></div>
                <div class="popup-text">В ближайшее время мы с Вами свяжемся.</div>
                <div class="clear"></div>
            </div>
            
            <div id="header" class="container">
                <div id="logo">
                    <a href="/"><img width="188" alt="цветы лого" src="<?=SITE_TEMPLATE_PATH.'/images/new_logo5.jpg'?>"></a>
                </div>
                <img class="best_price" width="50" height="50" src="<?=SITE_TEMPLATE_PATH.'/images/quality.png'?>">
                <div class="head-text">
                    <p><span class="first">Оптовый</span> <span class="second">Центр</span> <span class="third">Цветов</span></p>
                </div>
                <div class="under_head_text">
                    Лучшее качество по Лучшим ценам
                </div>
                <div id="header_feedback">
                    <div class="head-text-right">
                        <p>                        
                            <a style="color:#0f3a51;" class="telefon_ref" href="tel:+74955071120">+7 (495)  
                                <span style="color: #0f3a51;"><b>507-11-20</span></b>
                            </a>
                        </p>
                    </div>
                    <?/*<div class="additional_phones">
                        589-77-79<br>
                        589-79-77<br> 
                        589-85-59
                    </div>*/?>                                  
                </div>
                <?$APPLICATION->IncludeComponent(
        "baccara:feedback.form", 
        "fast_call", 
        array(
            "COMPONENT_TEMPLATE" => "fast_call",
            "IBLOCK_TYPE" => "requests",
            "IBLOCK_ID" => "10",
            "FORM_TITLE" => "Обратный звонок",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "3600"
        ),
        false
    );?> 
                <div id="vremya-raboti">
                     с 6:30 до 20:00<br>
                     Без перерывов и выходных
                </div>
                <?if($APPLICATION->GetCurPage() == '/'):?>
                    <div id="over_nav-slider" class="container bxslider-wrap">
                        <ul class="bxslider">
                            <li><img src="<?=SITE_TEMPLATE_PATH.'/images/slider/floraholland11.jpg'?>"></li>
                            <li><img src="<?=SITE_TEMPLATE_PATH.'/images/slider/floraholland12.jpg'?>"></li>
                            <li><img src="<?=SITE_TEMPLATE_PATH.'/images/slider/floraholland13.jpg'?>"></li>
                            <li><img src="<?=SITE_TEMPLATE_PATH.'/images/slider/floraholland14.jpg'?>"></li>
                        </ul>
                        <a class="slider-control left_arrow" style="display:none;">
                            <img src="<?=SITE_TEMPLATE_PATH.'/images/slider/left.png'?>">
                        </a>
                        <a class="slider-control right_arrow" style="display:none;">
                            <img src="<?=SITE_TEMPLATE_PATH.'/images/slider/right.png'?>">
                        </a>
                    </div>
                <?endif;?>
                <nav class="<?=($APPLICATION->GetCurPage() == '/') ? "" : 'nav-mobile';?>">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu", 
                        "top", 
                        array(
                            "ROOT_MENU_TYPE" => "top",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_TIME" => "36000",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "MAX_LEVEL" => "1",
                            "CHILD_MENU_TYPE" => "top",
                            "USE_EXT" => "N",
                            "DELAY" => "N",
                            "ALLOW_MULTI_SELECT" => "N"
                        ),
                        false
                    );?>
                    <div id="search"> 
                        <form action="/search/">
                            <input type="text" style="padding-left:5px;" size="120" placeholder="Поиск по сайту" value="" name="q"><input type="submit" value="">		 	
                        </form>
                    </div>
                    <div class="clear"></div>
                </nav>            
            </div>
            <?if($APPLICATION->GetCurPage() == '/'):?>
                <div class="container bxslider-wrap" id="under_nav-slider">
                    <ul class="bxslider">
                        <li><img src="<?=SITE_TEMPLATE_PATH.'/images/slider/floraholland11.jpg'?>"></li>
                        <li><img src="<?=SITE_TEMPLATE_PATH.'/images/slider/floraholland12.jpg'?>"></li>
                        <li><img src="<?=SITE_TEMPLATE_PATH.'/images/slider/floraholland13.jpg'?>"></li>
                        <li><img src="<?=SITE_TEMPLATE_PATH.'/images/slider/floraholland14.jpg'?>"></li>
                    </ul>
                    <a class="slider-control left_arrow" style="display:none;">
                        <img src="<?=SITE_TEMPLATE_PATH.'/images/slider/left.png'?>">
                    </a>
                    <a class="slider-control right_arrow" style="display:none;">
                        <img src="<?=SITE_TEMPLATE_PATH.'/images/slider/right.png'?>">
                    </a>
                </div>
            <?endif;?>
        </header>
        
        <?if($APPLICATION->GetCurPage() != '/'):?>
            <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", ".default", Array(

                ),
                false
            );?>
        <?endif;?>
        <?if(!defined("NOT_LEFT_BLOCK")):?>
            <section id="content" class="container">
                <div class="left_part">
                    <div id="wrapper-250">	
                        <ul class="accordion">
                            <?$filepath = (stripos($APPLICATION->GetCurDir(), '/catalog/') === false) ? '/include/left_menu.php' : '/include/left_menu_cat.php';?>
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => $filepath
                                )
                            );?>
                        </ul>
                    </div>
                    <div class="left-block">
                        <div class="pay_and_delivery">УСЛОВИЯ РАБОТЫ</div>
                        <p>Мы принимаем к оплате Visa, MasterCard, электронные деньги. Также можно оплатить, используя баланс мобильного номера или услуги интернет банков (Сбербанк-Онлайн, Альфа-Клик и др.). Расчет онлайн через наш сайт &mdash; это быстрый и удобный способ оплатить свой заказ, не выходя из дома.</p>
                        <a class="delivery_href" href="/conditions/">ПОДРОБНЕЕ</a>                    	
                    </div>
                    <noindex><a target="_blank" rel="nofolow" href="https://vk.com/bbaccara"><img width="40" src="<?=SITE_TEMPLATE_PATH.'/images/social/'?>VK.png" /></a></noindex>
                    <noindex><a target="_blank" rel="nofolow" href="https://www.facebook.com/pages/%D0%91%D0%BB%D1%8D%D0%BA-%D0%91%D0%B0%D0%BA%D0%BA%D0%B0%D1%80%D0%B0/765089670179004"><img width="40"  src="<?=SITE_TEMPLATE_PATH.'/images/social/'?>FB.png" /></a></noindex>
                    <noindex><a target="_blank" rel="nofolow" href="http://ok.ru/blackbaccara"><img width="40"  src="<?=SITE_TEMPLATE_PATH.'/images/social/'?>odnoklass.png" /></a></noindex>
                    <noindex><a target="_blank" rel="nofolow" href="https://twitter.com/BBaccara"><img width="40"  src="<?=SITE_TEMPLATE_PATH.'/images/social/'?>tvit.png" /></a></noindex>
                    <noindex><a target="_blank" rel="nofolow" href="https://instagram.com/bbaccara"><img width="40"  src="<?=SITE_TEMPLATE_PATH.'/images/social/'?>insta.png" /></a></noindex>
                </div>
                <div class="right_part">
                    <?if($APPLICATION->GetCurPage() != '/' && stripos($APPLICATION->GetCurDir(), '/catalog/') === false):?>
                        <h1><?$APPLICATION->ShowTitle()?></h1>
                    <?endif;?>
        <?endif;?>