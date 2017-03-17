<?php
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
$this->title = 'Book Republic';
?>

        <div id="page-wrapper">
           
             
            <!-- /.row -->
            <div class="row">
                  <div class="col-lg-12">
                    <div class="panel panel-default">
                      
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#edit" data-toggle="tab">Edit Profile</a>
                                </li>
                                 
                                <li><a href="#changepassword" data-toggle="tab">Change Password</a>
                                </li>
                                <li><a href="#deactivateaccount" data-toggle="tab">Deactivate Account</a>
                                </li>
                                
                               
                                <li class="sidebar-search pull-right col-sm-4">

                                      

                                    <div class="input-group custom-search-form">
                                        <input type="text" class="form-control" placeholder="Search...">
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
                            <div class="tab-content">
                                
                                <div class="tab-pane fade" id="edit">
                                   
                                  
                                  
                                        
                                        <?php $form = ActiveForm::begin(); ?>
                                        </br></br>
                                        <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
                                        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                                        <?= $form->field($model, 'status')->textInput() ?>
                                        <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>
                                        <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
                                        <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>
                                        <?= $form->field($model, 'picture')->textInput() ?>

                                        <div class="form-group">
                                            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                                        </div>

                                        <?php ActiveForm::end(); ?>
                                        
                                 
                                </div>
                                                                
                                <div class="tab-pane fade" id="changepassword">
                                    <h4>Messages Tab</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="tab-pane fade" id="deactivateaccount">
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

   

   



