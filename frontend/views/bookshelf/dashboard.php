<?php
use yii\helpers\Url;
use common\models\Genre;
use common\models\Books;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;

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
            <div class="panel panel-info">
                <div class="panel-heading">                          
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <h4>New on the shelf</h4>
                    <div class="row">                        
                        <?php
                            $latest = Books::findLatestbook();

                            foreach($latest as $item){?>
                                <div  class="col-sm-3">                            
                                    <a class="thumbnail" href="#">
                                        <img title="<?php echo $item->title?>" height="100" width="100" src="<?php echo $item->cover_photo?>"   class="tradebook" value="<?= Url::to(['bookshelf/tradebook','id' => $item->book_number]) ?>">                                            
                                    </a>
                                </div>
                        <?php }?> 
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
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body"  style="width: 100%; height: 550px; overflow: scroll">
                <i class="glyphicon glyphicon-folder-open "></i>   Browse <br>
                  <ul class="list list-unstyled">
                   
                <?php  Pjax::begin(['id'=>'genrediv']);
              
                        foreach($genre as $genre_name) {?>
                         
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
      