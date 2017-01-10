<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if(!CModule::IncludeModule("iblock"))
{
	ShowError(GetMessage("IBLOCK_MODULE_NOT_INSTALLED"));
	return;
}

$arParams['IBLOCK_ID'] = intval($arParams['IBLOCK_ID']);

if($arParams['IBLOCK_ID'] <= 0) {
	ShowError(GetMessage("IBLOCK_NOT_SELECT"));
	return;	
} 

if(!isset($arParams["CACHE_TIME"])) {
	$arParams["CACHE_TIME"] = 3600;
}

$arParams["IBLOCK_TYPE"] = ($arParams["IBLOCK_TYPE"] == false) ? 'complaints' : trim($arParams["IBLOCK_TYPE"]);

/* if(isset($_REQUEST['submit'])) {
    
    unset($_REQUEST['submit']);
    foreach($_REQUEST as $key => $value) {
        $_REQUEST[$key] = mysql_escape_string(htmlspecialchars($_REQUEST[$key]));
    }
        
    $arParametrs = array(
        'IBLOCK_ID' => $arParams['IBLOCK_ID'],        
        'NAME' => $_REQUEST['PHONE'],            
        'ACTIVE' => 'Y',
        'PREVIEW_TEXT' => $_REQUEST['COMMENT'],
        'PROPERTY_VALUES' => $_REQUEST
    );

    $elem = new CIBlockElement;
    
    if($elem->Add($arParametrs)) {
        $obIblock = CIBlock::GetByID($arParams['IBLOCK_ID']);
        if($arIblock = $obIblock->GetNext()) {
            $iblockName = $arIblock['NAME'];
        }
        $arMailFields = array(        
            'REQUEST' => $iblockName,
            'PHONE'   => $_REQUEST['PHONE'],
            'NAME'    => $_REQUEST['FIO'],
            'COMMENT' => $_REQUEST['COMMENT']
        );
       
        CEvent::Send('DIFFERENT_REQUESTS', 's1', $arMailFields);
        $_SESSION['SUCCESS_REQUEST'] = true;
    }
} */

$this->IncludeComponentTemplate();

?>
