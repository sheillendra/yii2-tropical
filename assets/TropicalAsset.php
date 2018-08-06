<?php

namespace sheillendra\tropical\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class TropicalAsset extends AssetBundle {

    public $sourcePath = '@sheillendra/tropical/assets/template';
    public $css = [
        'css/font-awesome.min.css',
        'css/owl.carousel.css',
        'css/select2.min.css',
        'css/slick.css',
        'css/jquery-ui.css',
        'css/datepicker.css',
        'css/fullcalendar.css',
        'css/slicknav.css',
        'css/animate.min.css',
        'css/bootstrap.css',
        'css/main.css',
        'css/responsive.css',
    ];
    public $js = [
        'js/jquery-2.1.3.min.js',
        'js/jquery-migrate-1.2.1.js',
        'js/bootstrap.min.js',
        'js/respond.min.js',
        'js/owl.carousel.min.js',
        'js/select2.full.min.js',
        'js/slick.min.js',
        'js/moment.min.js',
        'js/fullcalendar.min.js',
        'js/jquery.slicknav.min.js',
        'js/css3-animate-it.js',
        'js/jquery-ui.js',
        'js/bootstrap-datepicker.js',
        'js/tropical.js'
    ];

}
