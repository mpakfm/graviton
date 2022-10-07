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

CJSCore::Init(array("ajax"));
?>

<div class="search__result">
    <div class="search__result-title">Популярные запросы</div>
    <div class="search__result-items">
        <a class="search__result-item" href="">Ноутбук 1</a>
        <a class="search__result-item" href="">Ноутбук 2</a>
        <a class="search__result-item" href="">Ноутбук 3</a>
        <a class="search__result-item" href="">Ноутбук 4</a>
    </div>
</div>

<script>
	BX.ready(function(){
		var input = BX("<?echo $arResult["ID"]?>");
		if (input)
			new JsSuggest(input, '<?echo $arResult["ADDITIONAL_VALUES"]?>');
	});
</script>
<IFRAME
	style="width:0px; height:0px; border: 0px;"
	src="javascript:''"
	name="<?echo $arResult["ID"]?>_div_frame"
	id="<?echo $arResult["ID"]?>_div_frame"
></IFRAME><input
	<?if($arParams["INPUT_SIZE"] > 0):?>
		size="<?echo $arParams["INPUT_SIZE"]?>"
	<?endif?>
	name="<?echo $arParams["NAME"]?>"
	id="<?echo $arResult["ID"]?>"
	value="<?echo $arParams["VALUE"]?>"
	class="search-suggest"
	type="text"
	autocomplete="off"
