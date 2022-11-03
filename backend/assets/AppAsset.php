<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
//        'template/assets/css/loader.css',
        'template/bootstrap/css/bootstrap.min.css',
        'template/assets/css/plugins.css',
        'template/plugins/apex/apexcharts.css',
        'template/assets/css/dashboard/dash_1.css'
    ];
    public $js = [
        'template/assets/js/loader.js',
        "template/assets/js/libs/jquery-3.1.1.min.js",
        "template/bootstrap/js/popper.min.js",
        "template/bootstrap/js/bootstrap.min.js",
        "template/plugins/perfect-scrollbar/perfect-scrollbar.min.js",
        "template/assets/js/app.js",
        "template/assets/js/custom.js",
        "template/plugins/apex/apexcharts.min.js",
        "template/assets/js/dashboard/dash_1.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}