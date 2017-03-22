<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class BookwormAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/sb-admin-2.css',
        '../../vendor/bootstrap/css/bootstrap.min.css',
        '../../vendor/metisMenu/metisMenu.min.css',
        '../../vendor/font-awesome/css/font-awesome.min.css',
    ];
    public $js = [
        'js/main.js', 
        'js/managebook.js', 
        'js/bookshelf.js',
        'js/changedp.js',
      //  '../../vendor/jquery/jquery.min.js',
        '../../vendor/bootstrap/js/bootstrap.min.js',
        '../../vendor/metisMenu/metisMenu.min.js',
        'js/sb-admin-2.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
   
}
