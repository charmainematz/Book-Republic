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
    <?= $form->field($model, 'file')->fileInput()->label(false) ?>

 

    <?= $form->field($model, 'title')->textInput(['maxlength' => true,'placeholder'=>'Title'])->label(false)  ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true,'placeholder'=>'Author'])->label(false)  ?>
    
    <?= $form->field($model, 'genre')->dropDownList(ArrayHelper::map(Genre::find()->all(),'genre_id', 'genre'),
                                    ['prompt'=>'Select genre']
                                    )->label(false) 

    ?>
        
    

    <?= $form->field($model, 'description')->textInput(['maxlength' => true,'placeholder'=>'Description'])->label(false)  ?>

    <?= $form->field($model, 'condition')->textInput(['maxlength' => true,'placeholder'=>'Condition'])->label(false)  ?>

    <?= $form->field($model, 'rating')->textInput(['placeholder'=>'Rating'])->label(false)  ?>

    <?= $form->field($model, 'review')->textInput(['maxlength' => true,'placeholder'=>'Review'])->label(false)  ?>

  
    

    <div class="form-group" align="center">
         <?= Html::submitButton('Add book to bookshelf',['class' => 'btn btn-outline btn-primary']) ?>

    </div>

    <?php ActiveForm::end(); ?>

</div>