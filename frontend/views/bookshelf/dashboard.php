<?php
use yii\helpers\Url;
use common\models\Genre;
use common\models\Books;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;
use yii\base\view;
    Modal::begin([
            'id' => 'modal5',
            'size' => 'modal-sm',
        ]);
    echo "<div id = 'modalContent5'></div>";
    Modal::end();
    ?>     


<div id="page-wrapper">
           
    <section style="height:20px;"></section>
               
            
    <div class="row">
        <div class="col-lg-9">            
              <!-- /.panel -->
            <div style="height:90vh;" class="panel panel-info">
                <div class="panel-heading">                          
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                   
                    <div class="row" id="new">                        
                        <?php echo $this->render('viewnewbooks'); ?>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
             <div class="panel panel-info">
                <div class="panel-heading">                          
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <h4>Browse by genre</h4>
                    <div class="row" id="genrediv">                        
                      
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
        </div>
                <!-- /.col-lg-8 -->
        <div class="col-lg-3">
                   
                   
                    <!-- /.panel -->
            <div class=" panel panel-default">
                <div class="panel-heading">  
                    Browse                 
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body"  style="width: 100%; height:300px; overflow: scroll">
                <?php  Pjax::begin(['id'=>'new']); ?>                               
                    <?= Html::a('New in the Shelf',Url::to(['bookshelf/displaynew'])) ?><br>
                    <?= Html::a('Friend\'s Bookshelf' ,Url::to(['bookshelf/displaynew'])) ?>      
                <?php Pjax::end(); ?>    
                           
                <hr>
                <i class="glyphicon glyphicon-folder-open "></i> Genre<br>
                  <ul class="list list-unstyled">
                   
              
                <?php  Pjax::begin(['id'=>'new']); ?>
                         
                     <?php   foreach($genre as $genre_name) {?>
                        
                        <li>                         
                            <?= Html::a(
                                 $genre_name->genre,
                                Url::to(['bookshelf/browsebooksbygenre','id' =>$genre_name->genre_id])
                                
                                ) ?>
                            <?php echo  " (".Books::countbooksbygenre($genre_name->genre_id).")" ?>
                                                       
                        </li>

                        
                <?php } Pjax::end(); ?>         
                  </ul>  




                </div>
                <!-- /.panel-body -->                  
            </div>
            <div class=" panel panel-default">
                    
            </div>
        </div>
    </div>        
</div>