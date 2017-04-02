<?php
use yii\bootstrap\Modal;
use yii\jui\Accordion;
use yii\helpers\Html;
use yii\helpers\Url;
use common\models\User;
$this->title = 'Book Republic';
$user=User::findIdentity(Yii::$app->user->getId());
?> <?php
        Modal::begin([
                'id' => 'modal4',
                'size' => 'modal-sm',
                'header' => ' 
                        <div class="dropdown open">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                            <i class="glyphicon glyphicon-menu-hamburger  "></i>                         
                            </button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                               <li><a role="menuitem" tabindex="-1" href="#"><i class="glyphicon glyphicon-book"></i>  Currently Reading</a></li>
                               <li><a role="menuitem" tabindex="-1" href="#"><i class="glyphicon glyphicon-check"></i>  Have Read</a></li>
                               <li><a role="menuitem" tabindex="-1" href="#"><i class="glyphicon glyphicon-list"></i>  To be Read</a></li>
                               <li><a role="menuitem" tabindex="-1" href="#"><i class="fa fa-heart"></i>  Favorite</a></li>
                            </ul>
                         </div>',
            ]);
        echo "<div id = 'modalContent4'></div>";
        Modal::end();
        ?>     

    <div id="page-wrapper" class="bookshelf">  
    <section style="height:10px;"></section>
    
    
           <!-- /.row -->
        <div class="row">
           
            <div class="col-lg-8">
                <?php
                Modal::begin([
                        'id' => 'modal2',
                        'size' => 'modal-sm',
                        
                    ]);
                echo "<div id = 'modalContent2'></div>";
                Modal::end();
                ?>
               
                <div style="height:100vh;" class="panel panel-info">    

                    <div class="panel-heading">
                    </div>
                    <div class="panel-body" >
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#mybookshelf" data-toggle="tab">My Bookshelf</a>
                            </li>
                             
                            <li><a href="#borrowrequest" data-toggle="tab">Borrow Requests</a>
                            </li>
                            <li><a href="#messages" data-toggle="tab">Swap Requests</a>
                            </li>
                            <li class="pull-right"><a href="#friends">Friends' Bookshelf  <i class="glyphicon glyphicon-log-out"></i></a>
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
                                    <div class="panel-body">
                                 
                                        
                                        <div class="row " >
                                      
                                        <?php foreach($books as $book) {?>
                                        
                                           <div class="col-sm-3">
                                                 <a class="thumbnail" href="#">
                                                <img title="<?php echo $book->title?>" height="100" width="100" src="<?php echo $book->cover_photo?>"
                                                class="managebook" value="<?= Url::to(['bookshelf/managebook','id' => $book->book_number]) ?>">
                                                  
                                               
                                                </a>
                                             
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


                <div id="friends" class="panel panel-info">    

                   
                    <div class="panel-body" >

                    <?php echo $this->render('viewnewbooks'); ?>

                    <?php echo $this->render('viewnewbooks'); ?>

                    </div>
                 </div>
            </div>
             <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-body">


                    <div id="accordion" class="panel-group">
                         <div >
                            <div >
                                <p class="profile-usertitle-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><button type="button" title="Favorites" class="btn btn-danger btn-circle"><i class="fa fa-heart"></i>
                        </button> Favorites</a>
                                </p>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                   
                                </div>
                            </div>
                        </div>
                        <div >
                            <div >
                                <p class="profile-usertitle-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><button title="Currently Reading" type="button" class="btn btn-success btn-circle"><i class="glyphicon glyphicon-book"> </i>
                                    </button> Currently Reading</a>
                                </p>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body">
                                   
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <p class="profile-usertitle-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><button  title="Have Read"  type="button" class="btn btn-info btn-circle"><i class="glyphicon glyphicon-check"></i>
                        </button> Have Read</a>
                                </p>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse ">
                                <div class="panel-body">
                                   
                                </div>
                            </div>
                        </div>
                        <div >
                            <div >
                                <p class="profile-usertitle-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><button title="To be read" type="button" class="btn btn-primary btn-circle"><i class="glyphicon glyphicon-list"></i>
                        </button> To be read</a>
                                </p>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
   
                    </div>
                    <!-- /.panel-body -->
                
                    <!-- /.panel-footer -->
                </div>
            </div>
            </div>
    </div>
    <!-- /#page-wrapper -->