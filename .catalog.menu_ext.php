<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;
$aMenuLinksExt=$APPLICATION->IncludeComponent("baccara:menu.sections", "", array(
   "IS_SEF" => "N",
   "IBLOCK_TYPE" => "catalog",
   "IBLOCK_ID" => "11",
   "SECTION_URL" => "",
   "DEPTH_LEVEL" => "4",
   "CACHE_TYPE" => "A",
   "CACHE_TIME" => "3600"
   ),
   false
);
$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>