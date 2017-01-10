<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if(!CModule::IncludeModule("iblock"))
	return;

$arIBlock = array();
array_unshift($arIBlock, GetMessage('IBLOCK_SELECT'));

$arIBlockType = CIBlockParameters::GetIBlockTypes();

array_unshift($arIBlockType, GetMessage('IBLOCK_TYPE_SELECT'));

$rsIBlock = CIBlock::GetList(Array("sort" => "asc"), Array("TYPE" => $arCurrentValues["IBLOCK_TYPE"], "ACTIVE"=>"Y"));
while($arr=$rsIBlock->Fetch())
{
	$arIBlock[$arr["ID"]] = "[".$arr["ID"]."] ".$arr["NAME"];
}

$arComponentParameters = array(
	"GROUPS" => array(
	),
	"PARAMETERS" => array(
		"IBLOCK_TYPE" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("IBLOCK_TYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arIBlockType,
			"REFRESH" => "Y",
		),
		"IBLOCK_ID" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("IBLOCK_IBLOCK"),
			"TYPE" => "LIST",
			"VALUES" => $arIBlock,
			"REFRESH" => "Y",
		),
/*         "FORM_TITLE" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("FORM_TITLE"),
			"TYPE" => "STRING",
			"DEFAULT" => "Обратная связь",
		),  */       
		"CACHE_TIME"  =>  Array("DEFAULT"=>CACHED_b_site_template),		
	),
);
?>
