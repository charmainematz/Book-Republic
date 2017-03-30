<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;
use common\models\Books;
use common\models\User;
$user=User::findIdentity(Yii::$app->user->getId());?>




  
               
        <div class="row">
                <div class="col-4" align="center">
                    <span>
                  
                    <img height="140" width="100" src="<?php echo $model->cover_photo?>">
                      </span>
                </div>
                <br/>
                <div class="col-8 thumbnail"> 

                    <div class="col-sm-offset-1"> 
                    <strong>Title:</strong> <?php echo $model->title ?> <br/> 
                    <strong>Author:</strong> <?php echo $model->author ?><br/> 
                    <strong>Genre:</strong> <?php echo $model->genre ?> <br/> 
                    <strong>Description:</strong> <?php echo $model->description ?><br/> 
                    <strong>Rating:</strong> <?php echo $model->rating ?><br/> 
                    <strong>Condition:</strong> <?php echo $model->condition ?><br/> 
                    <strong>Owner:</strong> <?php echo $model->owner ?><br/> 
                    </div>  

                    
                </div>
        </div> 
       
        <div class="row" align="center">
            
               <?php if ($user->username!=$model->owner) { ?>
        

                    <?php $form = ActiveForm::begin(['action' =>['bookshelf/tradebook','id'=>$model->book_number], 'method' => 'post']) ?>
                    <?= Html::submitButton('Swap',['class'=>'btn btn-outline btn-primary',"title"=>'Swap book',"name"=>"swap","value"=>"swap"])?>
                           
                    <?= Html::submitButton('Borrow',['class'=>'btn btn-outline btn-danger',"name"=>"borrow", "value"=>"borrow"]) ?>
                    <?php ActiveForm::end(); ?>
            <?php }?>

                
        </div>
        

