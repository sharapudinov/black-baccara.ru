<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тестирование сотрудников");
?>

<?
if(\Bitrix\Main\Loader::includeModule('polls.user')) {

    $ob = new Polls\User\UserTable();
    
    echo '<pre>'; print_r($ob->testFunc(304)); echo '</pre>';
}
else echo 'error';



?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>