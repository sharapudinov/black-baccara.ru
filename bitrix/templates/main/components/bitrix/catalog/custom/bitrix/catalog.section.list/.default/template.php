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
?>

<?/*
<div class="">
    
    <?foreach($arResult['SECTIONS'] as $section):?>
        <p><a href="<?=$section['SECTION_PAGE_URL']?>"><?=$section['NAME']?></a></p>
    <?endforeach;?>
</div>

*/?>

<? /* echo '<pre>'; print_r($arResult); echo '</pre>'; */ ?>

<div class="product_items">
    <?foreach($arResult['SECTIONS'] as $section):?>
        <?if($section['DEPTH_LEVEL'] == 1):?>
            <div class="product_item">
                <div class="product-anotashion">
                    <a class="product-image" href="<?=$section['SECTION_PAGE_URL']?>"><img src="<?=$section['PICTURE']['SRC']?>"></a>
                    <a class="product-title" href="<?=$section['SECTION_PAGE_URL']?>"><?=$section['NAME']?></a>
                </div>			
            </div>
        <?endif;?>    
    <?endforeach;?>    
	<div class="clear"></div>
</div>