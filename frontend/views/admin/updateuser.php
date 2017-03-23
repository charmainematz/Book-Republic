<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>
<div id="page-wrapper">
         <br>      
        <h4>Update <?php echo $model->username."'s"?> Information</h4>
          
            <!-- -->
    <div class="row thumbnail">
        <div class="col-md-4 ">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        </div>
       <div class="col-md-4 ">


    <?= $form->field($model, 'status')->textInput() ?>
    <?= $form->field($model, 'role')->dropDownList(['bookworm' => 'Bookworm', 'Administrator' => 'Admin']) ?>
   

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bio')->textInput() ?>

    <div class="form-group">
         <?= Html::submitButton('Save changes', ['class' => 'btn btn-outline btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

   </div>
        <div class="col-md-4"> 
         <span>
                  
            <img height="280" width="180" src="<?php echo $model->picture?>">
            </span>
        </div>
    </div> 
</div>