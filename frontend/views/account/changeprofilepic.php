<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Books */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="account-form">

   
    <?php $form = ActiveForm::begin(
    	['options'=>['enctype'=>'multipart/form-data']],
    	['action' =>['account/changeprofilepic','id'=>$model->id], 'method' => 'post']
    	); 
    ?>


    <?= $form->field($model, 'file')->fileInput() ?>
    

    <div class="form-group">
        <?= Html::submitButton('Upload', ['class' => 'btn btn-outline btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>