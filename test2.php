<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?>

                    <div id="search2"> 
                        <form action="/search2/">
                            <input type="text" style="padding-left:5px;" size="120" placeholder="Поиск по сайту" value="" name="q2"><input type="submit" value="">		 	
                        </form>
                    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>