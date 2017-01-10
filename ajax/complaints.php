<?
    if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
        require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

//session_start();
$result = false;

if(CModule::IncludeModule("iblock")) {

    parse_str($_POST['data']);

    $FIO = mysql_escape_string(htmlspecialchars($FIO));
    $EMAIL = mysql_escape_string(htmlspecialchars($EMAIL));
    $COMMENT = mysql_escape_string(htmlspecialchars($COMMENT));

    $data = array('FIO' => $FIO, 'EMAIL' => $EMAIL, 'COMMENT' => $COMMENT);

    $name = ($FIO) ? $FIO : 'Анонимно';
    $email = ($EMAIL) ? $EMAIL : 'info@black-baccara.ru';
    
    $arParametrs = array(
        'IBLOCK_ID' => 13,        
        'NAME' => $name,            
        'ACTIVE' => 'Y',
        'PREVIEW_TEXT' => $data['COMMENT'],
        'PROPERTY_VALUES' => $data
    );

    $elem = new CIBlockElement;

    if($elem->Add($arParametrs)) {
        $obIblock = CIBlock::GetByID($IBLOCK_ID);
        if($arIblock = $obIblock->GetNext()) {
            $iblockName = $arIblock['NAME'];
        }
        $arMailFields = array(
            'NAME'    => $name,
            'EMAIL'    => $email,
            'COMMENT' => $data['COMMENT']
        );
       
        if(CEvent::Send('COMPLAINTS_AND_SUGGESTIONS', 's1', $arMailFields)) {
            $result = true;
        }
    }
    else {
        file_put_contents($_SERVER['DOCUMENT_ROOT']. '/complaints.log',
          PHP_EOL . print_r($data, true), FILE_APPEND);
    }
}

print_r($result);