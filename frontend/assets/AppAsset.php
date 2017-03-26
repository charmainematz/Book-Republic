<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
         'css/sb-admin-2.css',
         '../../vendor/font-awesome/css/font-awesome.min.css',
    ];
    public $js = [
        'js/main.js', 
        '../../vendor/bootstrap/js/bootstrap.min.js',
        '../../vendor/metisMenu/metisMenu.min.js',
        'js/sb-admin-2.js',
    
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',

    'yii\bootstrap\BootstrapPluginAsset',
    ];
   
    public $jsOptions = array(
    'position' => \yii\web\View::POS_END
);
}