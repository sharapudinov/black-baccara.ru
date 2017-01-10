<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>


<?if (!empty($arResult)):?>


<div id="top_nav">
<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>

    <a class="<?=($arItem["LINK"] == '/price_list/') ? 'pricelist-menu': '';?> <?=($arItem["SELECTED"]) ? 'selected' : '';?>" href="<?=$arItem["LINK"]?>">
        <?//if($arItem["LINK"] == '/price_list/'):?>
            <?/*<img width="40" height="40" src="<?=SITE_TEMPLATE_PATH.'/images/bestprice.png'?>">*/?>
        <?//endif;?>
        <?=strtoupper($arItem["TEXT"])?>
    </a>

	
<?endforeach?>
</div>

<?endif?>

                
