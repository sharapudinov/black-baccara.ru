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

    <?
    
     /* 
    echo '<pre>'; print_r($arResult['ITEMS']); echo '</pre>'; 
   <div>
        <?foreach($arResult['ITEMS'] as $arItem):?>
            <p><a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME']?></a></p>
        <?endforeach;?>
    </div>
    
    */
    
    ?>
    
    	<div class="catalog_items catalog_tile">
		<?foreach($arResult['ITEMS'] as $arItem) { 
		/*echo '<pre>';
		var_dump($arItem);
		echo '</pre>';
		die();	*/	
		$file = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], array('width'=>150, 'height'=>150), BX_RESIZE_IMAGE_PROPORTIONAL, true);
		if(!$file) { 
		 $file = CFile::ResizeImageGet($arItem['DETAIL_PICTURE']['ID'], array('width'=>150, 'height'=>150), BX_RESIZE_IMAGE_PROPORTIONAL, true);
			
		
			if(!$file) { 
			 $file['src'] = '/img/logo.png';
			 $file['width'] = 150;
			 $file['height'] = 150;
			}
		}
		?>
		<div id=<?=$arItem['ID']?> class="catalog_item">            
                            
		<?if($arResult['ACTION'][$arItem['ID']]) { ?>
		<a href="<?=$arResult['ACTION'][$arItem['ID']]['DETAIL_PAGE_URL']?>" class="sale_info">
			<span class="sale_ribbon"><span class="ico"></span> акция</span>
			<span class="sale_info_name"><?=$arResult['ACTION'][$arItem['ID']]['NAME']?></span>
		</a>	
		<? } ?>		
			<div class="catalog_item_info">
				<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="catalog_item_img">
					<img src="<?= $file['src']?>" width="<?=$file['width']?>" height="<?=$file['height']?>" alt="<?=$arItem['NAME']?>">
				</a>
				<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="catalog_item_name"><?=$arItem['NAME']?></a>
				<div class="catalog_item_properties">
					<?foreach($arItem['DISPLAY_PROPERTIES'] as $propCode=>$propVal) {
					?>
                    
                        <div class="catalog_item_prop"><?=$propVal['NAME']?>: <span class="catalog-product-val"><?=$propVal['VALUE']?></span></div>

					<? } ?>

				</div>
			</div>
			<div class="catalog_item_price_block">

			</div>
			<div class="clr"></div>
		</div>
		<? } ?>
		<div class="clr"></div>
	</div>
	<!-- end of .catalog_items -->
	<?=$arResult["NAV_STRING"]?>