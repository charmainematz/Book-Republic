<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


?>

  
               
        <div class="row">
                <div class="col-2 thumbnail">
                  
                    <img height="120" width="120" src="<?php echo $model->cover_photo?>">
                
                </div>

                <div class="col-8 thumbnail" align="left"> 
                     
                    <strong>Title:</strong> <?php echo $model->title ?> <br/> 
                    <strong>Author:</strong> <?php echo $model->author ?><br/> 
                    <strong>Genre:</strong> <?php echo $model->genre ?> <br/> 
                    <strong>Description:</strong> <?php echo $model->description ?><br/> 
                    <strong>Rating:</strong> <?php echo $model->rating ?><br/> 
                    <strong>Condition:</strong> <?php echo $model->condition ?><br/> 
                              
                </div>
        </div> 
       
        <div class="row" align="center">
                 <?=Html::button ('Update', ['class' => 'btn btn-outline btn-primary', 'name' => 'login-button']) ?>          
                <?= Html::button('Delete',['class'=>'btn btn-outline btn-danger', 'id'=>'Modal_deleteBook']) ?>
            
        </div>
        

