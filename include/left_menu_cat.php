<?/*
    if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
        require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

    CModule::IncludeModule('iblock');
    $arFilter = Array('IBLOCK_ID'=>5);
    $db_list = CIBlockSection::GetList(array("SORT"=>"ASC"), $arFilter, true);
    while($ar_result = $db_list->GetNext()) {
        $arResult[] = $ar_result;
    }


<? echo '<pre>'; print_r($arResult); echo '</pre>'; ?>

<?foreach($arResult as $section):?>
    <?if($section['SECTION_PAGE_URL'] != '/'):?>
        <li><a href="<?=$section['SECTION_PAGE_URL']?>"><?=$section['NAME']?></a></li>
    <?endif;?>
<?endforeach;?>

*/?>

<?$APPLICATION->IncludeComponent(
    "bitrix:menu", 
    "left_catalog", 
    array(
        "ROOT_MENU_TYPE" => "catalog",
        "MENU_CACHE_TYPE" => "A",
        "MENU_CACHE_TIME" => "3600",
        "MENU_CACHE_USE_GROUPS" => "N",
        "MENU_CACHE_GET_VARS" => array(
        ),
        "MAX_LEVEL" => "4",
        "CHILD_MENU_TYPE" => "catalog",
        "USE_EXT" => "Y",
        "DELAY" => "N",
        "ALLOW_MULTI_SELECT" => "N"
    ),
    false
);?>




