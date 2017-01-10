<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Жалобы и предложения «Блэк Баккара»");
?>

<div id="contacts">
<?$APPLICATION->IncludeComponent(
	"baccara:complaints.form", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "complaints",
		"IBLOCK_ID" => "13",
		"FORM_TITLE" => "Жалобы и предложения",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600"
	),
	false
);?>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>