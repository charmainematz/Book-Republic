<?php
use yii\helpers\Url;
use common\models\Genre;
use common\models\Books;
use yii\helpers\Html;
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
                                     <div class="col-sm-3">
                                     <a class="thumbnail" href="#">
                                                <img title="<?php echo $item->title?>" height="100" width="100" src="<?php echo $item->cover_photo?>"
                                                value="<?= Url::to(['bookshelf/managebook','id' => $item->book_number]) ?>">
                                                  
                                               
                                                </a>
                                     </div>
                               <?php }?>
                           
                        </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
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
                          <?php
                             
                                foreach($genre as $genre_name) {?>
                                 
                                <li>
                                    <a href="<?= Url::toRoute(['bookshelf/browsebooksbygenre','id' =>$genre_name->genre_id])?>">
                                   
                                    <?php echo $genre_name->genre." (".Books::countbooksbygenre($genre_name->genre_id).")" ?></a>
                                </li>

                                
                            <?php } ?>         
                          </ul>  
                        </div>
                        <!-- /.panel-body -->                  
                    </div>
                    <div class=" panel panel-default">
                    
                </div>
            </div>
    </div>
           
</div>
      