<?php
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\helpers\Url;
use common\models\User;

$this->title = 'Book Republic';

$user=User::findIdentity(Yii::$app->user->getId());
?> <?php
                Modal::begin([
                        'id' => 'modal4',
                        'size' => 'modal-sm',
                    ]);
                echo "<div id = 'modalContent4'></div>";
                Modal::end();
                ?>     

    <div id="page-wrapper" class="bookshelf">  
    
        <!-- /.row -->
        <div class="row">
            <div class="col-6">
                <?php
                Modal::begin([
                        'id' => 'modal2',
                        'size' => 'modal-sm',
                    ]);
                echo "<div id = 'modalContent2'></div>";
                Modal::end();
                ?>
               
                <div class="panel panel-default">    
                    <div class="panel-body" >
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#mybookshelf" data-toggle="tab">My Bookshelf</a>
                            </li>
                             
                            <li><a href="#borrowrequest" data-toggle="tab">Borrow Requests</a>
                            </li>
                            <li><a href="#messages" data-toggle="tab">Swap Requests</a>
                            </li>
                          
                            <li class="sidebar-search pull-right col-6 col-sm-3">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="">
                                    <span class="input-group-btn"> 
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                             </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content ">                           
                            <div class="tab-pane fade in active" id="mybookshelf" >

                                
                                <?= Html::button('',['value'=>Url::to(['addbook','id'=>$user->id]),'class'=>'btn-link  glyphicon glyphicon-plus pull-right', 'id'=>'createbook',"title"=>'Add Book']) ?>                     
                                 <div class="col-6">
                                    <div class="panel panel-default" style="margin-top: 10px;">
                                        <div class="panel-heading">        
                                        </div>
                                    <div class="panel-body ">
                                 
                                        
                                        <div class="row " align="left">
                                      
                                        <?php foreach($books as $book) {?>
                                        
                                           <div class="col-sm-2">
                                               
                                                <div class="thumbnail">
                                                <img height="100" width="100" src="<?php echo $book->cover_photo?>"
                                                class="managebook" value="<?= Url::to(['bookshelf/managebook','id' => $book->book_number]) ?>">
                                                  <figcaption align="center"><?php echo $book->title?></figcaption>   
                                                               
                                                </div>
                                             
                                            </div>                                     
                                        <?php } ?>
                                        </div>                                                     
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="borrowrequest">
                                <h4>Profile Tab</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="tab-pane fade" id="messages">
                                <h4>Messages Tab</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="tab-pane fade" id="settings">
                                <h4>Settings Tab</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
          </div>
    </div>
    <!-- /#page-wrapper -->

   

   



