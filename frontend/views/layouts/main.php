<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\Modal;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use common\models\User;
AppAsset::register($this);

$user=User::findIdentity(Yii::$app->user->getId());
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Welcome</title>
    <!-- Bootstrap Core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        
        'brandLabel' => '<img src="../images/banner.png" class="pull-left"/>',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>

       
        <?= Alert::widget() ?>
        <?= $content ?>
       
    </div>
</div>



<?php $this->endBody() ?>
<footer class="footer" style="margin-bottom: 0; background-color: #10171D; color: gray" >

    <div class="container">
            <section style="height:50px;"></section>


         <div class="row">
              
            
                <div class="col-12" align="center">
               
                 <a align="center" href="<?= Url::to(['site/index'])?>">
                    <img src="../images/banner.png"  /></a>
                    </br>
                 <p color="GRAY">&copy;  <?= date('Y') ?> All rights reserved</p>
                    <p></p>
               
                </div>
            
         
         
            
        </div>
    </div>
</footer>
</html>
<?php $this->endPage() ?>
