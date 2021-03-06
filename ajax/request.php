<?
    if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
        require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

//session_start();
$result = false;

if(CModule::IncludeModule("iblock")) {

    $IBLOCK_ID = intval($_POST['IBLOCK_ID']);
    $data=array();
    parse_str($_POST['data'],$data);

    $data=array_map('htmlspecialchars',$data);
    $data=array_map('mysql_escape_string',$data);
   /* $FIO = mysql_escape_string(htmlspecialchars($FIO));
    $PHONE = mysql_escape_string(htmlspecialchars($PHONE));
    $EMAIL = mysql_escape_string(htmlspecialchars($EMAIL));
    $CITY = mysql_escape_string(htmlspecialchars($CITY));
    $COMMENT = mysql_escape_string(htmlspecialchars($COMMENT));
    $IBLOCK_ID = intval($IBLOCK_ID);

    $data = array('FIO' => $FIO, 'PHONE' => $PHONE, 'EMAIL' => $EMAIL, 'COMMENT' => $COMMENT, 'CITY' => $CITY, 'IBLOCK_ID' => $IBLOCK_ID);*/

    global $USER;

    if(preg_match("/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/", $data['PHONE']))
    {
        $arParametrs = array(
            'IBLOCK_ID' => $data['IBLOCK_ID'],
            'NAME' => $data['FIO'].'_'.$data['CITY'].'_'.$data['PHONE'],
            'ACTIVE' => 'Y',
            'PREVIEW_TEXT' => $data['COMMENT'],
            'PROPERTY_VALUES' => $data
        );

        $elem = new CIBlockElement;

        if($id=$elem->Add($arParametrs)) {
            $obIblock = CIBlock::GetByID($data['IBLOCK_ID']);
            if($arIblock = $obIblock->GetNext()) {
                $iblockName = $arIblock['NAME'];
                $iblockId = $arIblock['ID'];
            }
            $dbEl=CIBlockElement::GetList(
                array(),
                array('ID'=>$id),
                false,
                false,
                array("IBLOCK_ID","ID","PROPERTY_BUSINESS","PROPERTY_EXPIRIENCE","PROPERTY_AVG_CHECK","PROPERTY_LOGISTIC","PROPERTY_STATUS"));
            $arEl=$dbEl->GetNext();



			$email_to = ($iblockId == 10) ? 'zaprosbb@mail.ru,zakaz@black-baccara.ru' : 'zaprosbb@mail.ru';

            $arMailFields = array(
                'REQUEST' => $iblockName,
                'PHONE'   => $data['PHONE'],
                'NAME'    => $data['FIO'],
                'EMAIL'    => $data['EMAIL'],
                'CITY'    => $data['CITY'],
                'COMMENT' => $data['COMMENT'],
                'EMAIL_TO' => $email_to,
                'BUSINESS' =>$arEl['PROPERTY_BUSINESS_VALUE'],
                'EXPIRIENCE' =>$arEl['PROPERTY_EXPIRIENCE_VALUE'],
                'AVG_CHECK' =>$arEl['PROPERTY_AVG_CHECK_VALUE'],
                'LOGISTIC' =>$arEl['PROPERTY_LOGISTIC_VALUE'],
                'STATUS' =>$arEl['PROPERTY_STATUS_VALUE'],
            );

            if(CEvent::Send('DIFFERENT_REQUESTS', 's1', $arMailFields)) {
                $result = true;
            }

            global $USER;

            if($iblockId == 9 && $data['EMAIL']) {

                $arMailClientFields = array(
                    'EMAIL_TO' => $data['EMAIL'],
                    'CLIENT_NAME' => $data['FIO']
                );

                CEvent::SendImmediate('PRICELIST_CLIENT_EMAIL', 's1', $arMailClientFields);
            }

            file_put_contents($_SERVER['DOCUMENT_ROOT']. '/debug_alexkonst.log',
          PHP_EOL . print_r($iblockId, true), FILE_APPEND);
        }
        else {
            file_put_contents($_SERVER['DOCUMENT_ROOT']. '/requests.log',
              PHP_EOL . print_r($data, true), FILE_APPEND);
        }
    }
}

print_r($result);