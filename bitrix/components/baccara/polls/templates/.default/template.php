<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/* echo '<pre>'; print_r($arResult); echo '</pre>'; */

//if($arResult['ACTION'] == 'CREATE_TOUR')
switch($arResult['ACTION']) {
    case 'GET_OPEN_TOURS':
        include_once $_SERVER['DOCUMENT_ROOT'].$templateFolder.'/open_tours.php';
        break;
    case 'GET_FINISHED_TOURS':
        include_once $_SERVER['DOCUMENT_ROOT'].$templateFolder.'/finished_tours.php';
        break;
    case 'GET_STARTED_TOURS':
        include_once $_SERVER['DOCUMENT_ROOT'].$templateFolder.'/started_tours.php';
        break;    
    default:
        include_once $_SERVER['DOCUMENT_ROOT'].$templateFolder.'/open_tours.php';
        break;
}