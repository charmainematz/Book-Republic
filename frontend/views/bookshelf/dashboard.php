<?php
use yii\helpers\Url;
use common\models\Genre;
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
                            <i class="glyphicon glyphicon-folder-open "></i> Browse
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body"  style="width: 100%; height: 350px; overflow: scroll">
                          <ul class="list list-unstyled">
                          <?php
                                $genre= Genre::find()->all();
                            

                                foreach($genre as $genre_name) {?>
                                 
                                <li>
                                    <a href="<?= Url::toRoute(['bookshelf/browsebooksbygenre','id' =>$genre_name->genre_id])?>">
                                    <i class="glyphicon glyphicon-menu-right"></i> 
                                    <?php echo $genre_name->genre ?></a>
                                </li>

                                
                            <?php } ?>         
                          </ul>  
                        </div>
                        <!-- /.panel-body -->                  
                    </div>
                    <div class=" panel panel-default">
                    <!-- /.panel .chat-panel -->
                      <a class="twitter-timeline"  data-width="300" data-height="500"  href="https://twitter.com/PriBethCharm/lists/book-republic">A Twitter List by Book Republic</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
    </div>
           
</div>
      