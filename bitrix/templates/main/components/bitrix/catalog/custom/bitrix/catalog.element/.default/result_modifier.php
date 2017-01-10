<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach ($arResult['PROPERTIES']['PHOTOS']['VALUE'] as $photo)
{
    //echo '<pre>'; print_r($photo); echo '</pre>';
    
    $arFileTmp = CFile::ResizeImageGet(
        $photo,
        array("width" => 400, "height" => 400),
        BX_RESIZE_IMAGE_PROPORTIONAL,
        true
    );

    $arResult["MORE_PHOTOS"][] = array(
        "SRC" => $arFileTmp["src"],
        "WIDTH" => $arFileTmp["width"],
        "HEIGHT" => $arFileTmp["height"],
    );

}
