<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

<h3>Последние посты</h3>
<div class="blo-top">
    <?php foreach ($arResult['ITEMS'] as $arItem): ?>

        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div id="<?= $this->GetEditAreaId($arItem['ID']); ?>" class="blog-grids">

            <div class="blog-grid-left">
                <a href="<?= $arItem['DETAIL_PAGE_URL'] . '/' . $arItem['ID'] ?>"><img
                            src="<?= $arItem['PREVIEW_PICTURE']['SRC']; ?>" class="img-responsive"
                            alt=""></a>
            </div>
            <div class="blog-grid-right">
                <h4>
                    <a href="<?= $arItem['DETAIL_PAGE_URL'] . '/' . $arItem['ID'] ?>"><?= mbCutString($arItem['NAME'], 10) ?> </a>
                </h4>
                <p><?= mbCutString($arItem['PREVIEW_TEXT'], 20) ?></p>
            </div>
            <div class="clearfix"></div>
        </div>

    <?php endforeach; ?>

</div>