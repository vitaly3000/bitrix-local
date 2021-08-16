<?php
foreach ($arResult['ITEMS'] as &$item){
    $file = CFile::ResizeImageGet(
        $item['PREVIEW_PICTURE'],
        ['width' => 100, 'height' => 100],
        BX_RESIZE_IMAGE_EXACT,
        true
    );
    $item['PREVIEW_PICTURE']['SRC'] = $file['src'];
}
unset($item);