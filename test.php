<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?>

<?

/* $pat = '^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$';
$sub = "+79261234567";

$test = preg_match($pat, $sub, $matches);

if($test === false)
    echo 'ошибка';
else if($test === 0)
    echo 'не совпадение';
else
    echo 'совпадение';

print_r($matches);
 */
 

/* if(!preg_match("/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/", "+7(965) 495-43-23")) { 
    echo "Имя пользователя задано в неправильном формате"; 
} else { 
    echo "Имя пользователя задано в правильном формате"; 
}  */

//        echo '<pre>'; print_r($foto); echo '</pre>';

if(CModule::includeModule('iblock')) {

    $arFilter = Array("IBLOCK_ID"=>11, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
    //$select = array("PROPERTY_IMAGES_1C", "PROPERTY_PHOTOS");
    $res = CIBlockElement::GetList(Array(), $arFilter, false, false);
    while($ob = $res->GetNextElement())
    {
        $arFields = $ob->GetFields();
        $prop = $ob->GetProperties();
                
        $foto = explode('|', $prop['IMAGES_1C']['VALUE']);
        
        if(count($foto) > 0) {
            
            if(!is_file($_SERVER['DOCUMENT_ROOT'].'/upload/foto/'.$foto[0]))
                $foto[0] = strtoupper($foto[0]);
        
            if(is_file($_SERVER['DOCUMENT_ROOT'].'/upload/foto/'.$foto[0])) { 
                $el = new CIBlockElement;
                
                $el->Update($arFields['ID'], array( 
                    "PREVIEW_PICTURE" => CFile::MakeFileArray($_SERVER['DOCUMENT_ROOT'].'/upload/foto/'.$foto[0]),
                    "DETAIL_PICTURE" => CFile::MakeFileArray($_SERVER['DOCUMENT_ROOT'].'/upload/foto/'.$foto[0]),
                ), false, false, false);
            }
                       
            if(count($foto) > 1) {
                $PROP['PHOTOS'] = array();
                
                CIBlockElement::SetPropertyValuesEx($arFields['ID'], 11, array("57" => Array ("VALUE" => array("del" => "Y"))));
                
                //if(!is_array($prop['PHOTOS']['VALUE']) || count($prop['PHOTOS']['VALUE']) < (count($foto)-1))
                if(1)
                {
                    foreach($foto as $key=>$val) {
                        if($key == 0) continue;
                        if(!is_file($_SERVER['DOCUMENT_ROOT'].'/upload/foto/'.$val))
                         $val = strtoupper($val);
                        $PROP['PHOTOS'][] = CFile::MakeFileArray($_SERVER['DOCUMENT_ROOT'].'/upload/foto/'.$val);
                    }
                    CIBlockElement::SetPropertyValueCode($arFields['ID'], 'PHOTOS', $PROP['PHOTOS']);
                }
            }            
        }
    }
}



?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>