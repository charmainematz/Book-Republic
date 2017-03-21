<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Genre;
/* @var $this yii\web\View */
/* @var $model backend\models\Books */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="books-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
      <?= $form->field($model, 'file')->fileInput() ?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'genre')->dropDownList(ArrayHelper::map(Genre::find()->all(),'genre_id', 'genre'),
                                    ['prompt'=>'Select genre']
                                    )

    ?>
        
    

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'condition')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rating')->textInput() ?>

    <?= $form->field($model, 'review')->textInput(['maxlength' => true]) ?>

  
    

    <div class="form-group">
         <?= Html::submitButton('Add book to bookshelf',['class' => 'btn btn-outline btn-primary']) ?>

    </div>

    <?php ActiveForm::end(); ?>

</div>