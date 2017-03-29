<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Genre;

/* @var $this yii\web\View */
/* @var $model backend\models\Books */
/* @var $form yii\widgets\ActiveForm */
?>


<div id="page-wrapper">
         <br>      
        <h4>Update Book Information</h4>
          
            <!-- -->
    <div class="row thumbnail">
        <div class="col-md-4 ">

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'title')->textInput(['maxlength' => true,'placeholder'=>'Title']) ?>

            <?= $form->field($model, 'author')->textInput(['maxlength' => true,'placeholder'=>'Author'])?>


             <?= $form->field($model, 'genre')->dropDownList(ArrayHelper::map(Genre::find()->all(),'genre_id', 'genre'),
                                    ['prompt'=>'Select genre']
                                    )->label(false) 

                ?>

            <?= $form->field($model, 'description')->textInput(['maxlength' => true,'placeholder'=>'Description']) ?>
               <?= $form->field($model, 'file')->fileInput() ?>
        </div>

            
        <div class="col-md-4 ">

            <?= $form->field($model, 'condition')->textInput(['maxlength' => true,'placeholder'=>'Condition']) ?>

            <?= $form->field($model, 'rating')->textInput(['placeholder'=>'Rating']) ?>

            <?= $form->field($model, 'review')->textInput(['maxlength' => true,'placeholder'=>'Review']) ?>
            <br>

            <?= $form->field($model, 'owner')->textInput(['maxlength' => true,'placeholder'=>'Owner']) ?>
            <?= Html::submitButton('Save changes', ['class' => 'btn btn-outline btn-primary']) ?>
           
             <?= Html::submitButton('Go Back', ['class' => 'btn btn-outline btn-primary']) ?>
            <?php ActiveForm::end(); ?>  

        </div>
        <div class="col-md-4"> 
         <span>
                  
            <img height="280" width="180" src="<?php echo $model->cover_photo?>">
            </span>
        </div>
    </div> 
</div>