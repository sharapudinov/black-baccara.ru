<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Прайс лист");
?>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : 'your-app-id',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<script>
!function (d, id, did, st) {
  var js = d.createElement("script");
  js.src = "https://connect.ok.ru/connect.js";
  js.onload = js.onreadystatechange = function () {
  if (!this.readyState || this.readyState == "loaded" || this.readyState == "complete") {
    if (!this.executed) {
      this.executed = true;
      setTimeout(function () {
        OK.CONNECT.insertShareWidget(id,did,st);
      }, 0);
    }
  }};
  d.documentElement.appendChild(js);
}(document,"ok_shareWidget","http://black-baccara.ru","{width:190,height:30,st:'straight',sz:20,ck:2}");
</script>


<div id="pricelist">

<div class="pricelist-text">
    <img width="50" height="50" src="<?=SITE_TEMPLATE_PATH.'/images/pricelist-icon.png'?>" style="float:left; margin-right:15px; margin-top: 10px;">
    <p>
       Уважаемые Партнеры! Мы являемся оптовой компанией, поэтому для того, чтобы получить прайс-лист &mdash; нужно заполнить форму обратной связи, расположенную ниже, после чего с Вами свяжется наш менеджер.
    </p>
</div>

<?$APPLICATION->IncludeComponent(
	"baccara:feedback.form", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "requests",
		"IBLOCK_ID" => "9",
		"FORM_TITLE" => "Запрос прайс листа",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600"
	),
	false
);?>

<?
/* global $USER;
if($USER->IsAdmin()): */
?>

<p class="tell_about_us">Расскажите о нас в социальных сетях:</p>

<div class="social-wrap">

    <div style="float:left;">
        <script type="text/javascript">
        <!--

        document.write(VK.Share.button('http://black-baccara.ru', {type: 'round', text: 'Поделиться'}));

        -->
        </script>
    </div>

    <div style="float:left; margin:0 15px; overflow:hidden;" class="fb-share-button" data-href="http://black-baccara.ru" data-layout="button_count"></div>
    
    <div style="overflow:hidden;" id="ok_shareWidget"></div>

</div>
<?//endif;?>

    <div class="decor_site">
        <table>
            <tr>
                <td rowspan="3" style="width:50px; padding-right:15px;"><img width="50" height="50" src="/bitrix/templates/main/images/decor.png"></td>
                <td class="bold partners_header">Уважаемые Партнеры!</td>
            </tr>
            <tr>
                <td>Настоятельно рекомендуем Вам посетить наш <span class="bold">интернет-портал аксессуаров</span> <noindex><a target="_blank" rel="nofollow" href="http://www.baccara-decor.ru/">http://www.baccara-decor.ru</a></noindex></td>
            </tr>
            <tr>
                <td>На сайте Вы сможете ознакомиться с ассортиментом и ценами, а так же сформировать заказ. После формирования с Вами свяжется наш менеджер для согласования и подтверждения заказа, т.к. возможны корректировки ассортимента и цен.</td>
            </tr>            
        </table>

    </div> 
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>