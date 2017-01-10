<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);


//echo '<pre>'; print_r($arResult); echo '</pre>';
?>

<div id="detail_element-tmpl_wrap">
    <h1><?=$arResult['NAME']?></h1>
    <div class="detail_element-left_block">
        <div>        
            <a class="fancybox" caption="" href="<?=$arResult['DETAIL_PICTURE']['SRC']?>"><img width="200" height="200" src="<?=$arResult['DETAIL_PICTURE']['SRC']?>"></a>
        </div>
        <div>
            <?foreach($arResult['MORE_PHOTOS'] as $photo):?>        
                <a class="fancybox" caption="" href="<?=$photo['SRC']?>"><img width="50" height="50" src="<?=$photo['SRC']?>" alt=""/></a>
            <?endforeach;?>
        </div>
    </div>
    <div class="detail_element-right_block">  
        <p class="properties">Характеристики:</p>
        <ul class="properties-list">
            <?foreach($arResult['PROPERTIES'] as $key => $property):?>
                <?if($key == 'PHOTOS' || $key == 'IMAGES_1C') continue;?>
                    <li><span><?=$property['NAME']?>: </span> <?=$property['VALUE']?></li>
            <?endforeach;?>
        </ul>
    </div>
    <div class="clear"></div>
        <?if($arResult['DETAIL_TEXT']):?>
            <div>
                <p class="description">Описание:</p>
                <p><?=$arResult['DETAIL_TEXT']?></p>
            </div>
        <?endif;?>  
</div>