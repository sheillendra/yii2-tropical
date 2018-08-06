<?php

namespace sheillendra\tropical\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class TropicalExtAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/tropical/tropical.css',
    ];
    public $js = [
        'js/tropical/tropical.js'
    ];

    public $depends = [
        'sheillendra\tropical\assets\TropicalAsset'
    ];
}
