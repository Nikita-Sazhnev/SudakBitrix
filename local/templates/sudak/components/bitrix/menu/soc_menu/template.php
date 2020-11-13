<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<ul>
		<?foreach($arResult as $arItem):?>
			<li><a target="_blacnk" href="<?=$arItem["LINK"]?>"><img src="<?=$arItem["PARAMS"]["SRC"]?>" alt=""></a></li>
		<?endforeach?>
	</ul>
<?endif?>