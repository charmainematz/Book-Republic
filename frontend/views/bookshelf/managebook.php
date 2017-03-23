<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;


?>

  
               
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
                    </div>  
                    
                </div>
        </div> 
       
        <div class="row" align="center">

               <?php $form = ActiveForm::begin(['action' =>['bookshelf/managebook','id'=>$model->book_number], 'method' => 'post']); ?> 
    

                <?= Html::submitButton('Update',['class'=>'btn btn-outline btn-primary',"title"=>'Update book',"name"=>"update","value"=>"update"]); ?>
                       
                <?= Html::submitButton('Delete',['class'=>'btn btn-outline btn-danger', 'id'=>'Modal_deleteBook',"name"=>"delete", "value"=>"delete", "data-confirm"=>"Are you sure you want to delete this book?"]); ?>
                <?php ActiveForm::end(); ?> 
        </div>
        

