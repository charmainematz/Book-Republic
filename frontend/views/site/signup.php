<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">


    <div class="row justify-content-md-center">
        <div class="col-9">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
             

                <?= $form->field($model, 'username')->textInput(['autofocus' => true,'placeholder'=>'Username'])->label(false) ?>
                <?= $form->field($model, 'first_name')->textInput(['autofocus' => true,'placeholder'=>'Firstname'])->label(false) ?>
                <?= $form->field($model, 'last_name')->textInput(['autofocus' => true,'placeholder'=>'Lastname'])->label(false) ?>
                 <?= $form->field($model, 'email')->textInput(['autofocus' => true,'placeholder'=>'Email'])->label(false) ?>

                <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Password'])->label(false) ?>

                 <div class="form-group" align="center">
        <?= Html::submitButton('Sign up', ['class' => 'btn btn-outline btn-primary']) ?>
                </div>


            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
