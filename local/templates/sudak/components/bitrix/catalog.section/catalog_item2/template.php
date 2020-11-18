<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use \Bitrix\Main\Localization\Loc;
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
<div class="preview-row">
	
		<?foreach($arResult["ITEMS"] as $cell=>$arElement):?>

		<?
		$this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCT_ELEMENT_DELETE_CONFIRM')));
		$trimmed = trim($arElement["DISPLAY_PROPERTIES"]["URL"]["VALUE"]);
		if ($trimmed !== '')
		{
			if (mb_strpos(mb_strtolower($trimmed), "http") !== 0)
			{
				$trimmed = 'http://'.$trimmed;
			}
		}
		$arElement["DETAIL_PAGE_URL"] = $trimmed;
		?>	
		
		

								<div class="preview">
									<div class="preview__box" id="<?=$this->GetEditAreaId($arElement['ID']);?>">
										
								
								<a href="<?=$arElement["DETAIL_PAGE_URL"]?>" target="_blank"><img
								border="0"
								class="preview_image"
								src="<?=$arElement["PREVIEW_PICTURE"]["SRC"]?>"
								width="<?=$arElement["PREVIEW_PICTURE"]["WIDTH"]?>"
								height="<?=$arElement["PREVIEW_PICTURE"]["HEIGHT"]?>"
								alt="<?=$arElement["PREVIEW_PICTURE"]["ALT"]?>"
								title="<?=$arElement["PREVIEW_PICTURE"]["TITLE"]?>"
								/></a>

								<div class="preview__text">
									<div class="preview__date">
										<?$date = explode(' ', $arElement["ACTIVE_FROM"]);
									echo $date[0];?>
									</div>
								<?foreach($arElement["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
									<p>
									<?=$arProperty["NAME"]?>
									<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
										<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
									<?else:?>
										<?=trim($arProperty["DISPLAY_VALUE"]);?>
									<?endif?>
									</p>
								<?endforeach;?>
								</div>
								<div class="preview__link">
									<a href="<?=$arElement["~DETAIL_PAGE_URL"]?>">Детальнее...</a>
								</div>
								
						</div>
					</div>
		<?$cell++;
		if($cell%$arParams["LINE_ELEMENT_COUNT"] == 0):?>
		<?endif?>

		<?endforeach; // foreach($arResult["ITEMS"] as $arElement):?>

		<?if($cell%$arParams["LINE_ELEMENT_COUNT"] != 0):?>
			<?while(($cell++)%$arParams["LINE_ELEMENT_COUNT"] != 0):?>
				<p>&nbsp;</p>
			<?endwhile;?>
		<?endif?>

</div>
