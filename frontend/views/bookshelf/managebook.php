<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;
use common\models\Books;
?>
  
               
<div class="row">
        <div class="dropdown  pull-right">
            <span class="btn btn-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
            <i class="glyphicon glyphicon-option-vertical"></i>                         
            </span>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
               <li><a tabindex="-1" href="<?= Url::toRoute(['bookshelf/addtolist','list_id'=>1,'book_number'=>$model->book_number])?>"><i class="glyphicon glyphicon-book"></i>  Currently Reading</a></li>
               <li><a tabindex="-1" href="<?= Url::toRoute(['bookshelf/addtolist','list_id'=>2,'book_number'=>$model->book_number])?>"><i class="glyphicon glyphicon-check"></i>  Have Read</a></li>
               <li><a  tabindex="-1" href="<?= Url::toRoute(['bookshelf/addtolist','list_id'=>3,'book_number'=>$model->book_number])?>"><i class="glyphicon glyphicon-list"></i>  To be Read</a></li>
               <li><a tabindex="-1" href="<?= Url::toRoute(['bookshelf/addtolist','list_id'=>4,'book_number'=>$model->book_number])?>"><i class="fa fa-heart"></i>  Favorite</a></li>
            </ul>
        </div>
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
         

       
            <?php $form = ActiveForm::begin(['action' =>['bookshelf/managebook','id'=>$model->book_number], 'method' => 'post']) ?>
            <?= Html::submitButton('Update',['class'=>'btn btn-outline btn-primary',"title"=>'Update book',"name"=>"update","value"=>"update"])?>
                   
            <?= Html::submitButton('Delete',['class'=>'btn btn-outline btn-danger', 'id'=>'Modal_deleteBook',"name"=>"delete", "value"=>"delete", "data-confirm"=>"Are you sure you want to delete this book?"]) ?>
            <?php ActiveForm::end(); ?>
  

        
</div>


