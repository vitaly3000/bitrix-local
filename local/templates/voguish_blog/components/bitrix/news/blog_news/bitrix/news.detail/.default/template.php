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
<div class="single">

    <img src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>" class="img-responsive"
         alt="<?= $arResult['DETAIL_PICTURE']['ALT'] ?>">

    <p class="sin"><?= $arResult['DETAIL_TEXT'] ?></p>

    <div class="artical-links">
        <ul>
            <li><small> </small><span><?= $arResult['ACTIVE_FROM']; ?></span></li>
            <li><a><small
                            class="admin"> </small><span><?= $arResult['PROPERTIES']['AUTHOR']['VALUE']; ?></span></a>
            </li>
            <li>
                <a><small class="no"> </small><span><?= $arResult['PROPERTIES']['BLOG_COMMENTS_CNT']['VALUE'] ? $arResult['PROPERTIES']['BLOG_COMMENTS_CNT']['VALUE'] : 'No comments'; ?></span></a>
            </li>
            <li><a><small
                            class="posts"> </small><span>View posts: <?= $arResult['SHOW_COUNTER'] ? $arResult['SHOW_COUNTER'] : 0; ?></span></a>
            </li>

        </ul>
    </div>


    <div class="clearfix"></div>
</div>
