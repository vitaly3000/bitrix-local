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

if ($arParams["SHOW_CHAIN"] != "N" && !empty($arResult["TAGS_CHAIN"])):
    ?>
<?
endif;

if (is_array($arResult["SEARCH"]) && !empty($arResult["SEARCH"])):
    ?>
    <div class="b-tag-weight">
        <h3>Tags Weight</h3>
        <noindex>
            <ul>
                <?
                foreach ($arResult["SEARCH"] as $key => $res) {
                    ?>
                    <li><a href="<?= $res["URL"] ?>"><?= $res["NAME"] ?></a></li>
                    <?
                }
                ?>
            </ul>
        </noindex>

    </div>
<?
endif;
?>
