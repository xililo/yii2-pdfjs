<?php

namespace xililo\pdfjs;

use yii\web\AssetBundle;

/**
 * Assets: 
 * Prebuilt (modern browsers)
 * https://mozilla.github.io/pdf.js/getting_started/#download
 * 
 * Viewer:
 * Example: assets/web/viewer.html
 * 
 * @link [xililo.github.io](xililo.github.io)
 * @author Sugeng Sulistiyawan <sugeng.sulistiyawan@gmail.com>
 * @copyright Copyright (c) 2023
 */
class ViewerAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = __DIR__ . '/assets';
}
