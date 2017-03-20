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
          <div class="col-6">
            <div class="panel panel-default">    
                <div class="panel-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#edit" data-toggle="tab">Profile</a>
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
                        <div class="tab-pane fade in active" id="edit">
                  
                            <?php $form = ActiveForm::begin(['action' =>['account/update','id'=>$model->id], 'method' => 'post']); ?>
                            <?= $form->field($model, 'bio')->textInput(['maxlength' => true]) ?>  
                            <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>
                            <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
                            <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>
                            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                            <?= $form->field($model, 'status')->textInput(['disabled'=>true]) ?>
                             
                            <div class="form-group">
                                <?= Html::submitButton(
                                    $model->isNewRecord ? 'Create' : 'Save changes', 
                                    ['class' =>  'btn btn-outline btn-primary']) 
                                ?>
                            </div>
                             <?php ActiveForm::end(); ?> 
                        </div>                                                       
                        <div class="tab-pane fade" id="changepassword">
                            <?php $form = ActiveForm::begin(['action' =>['account/changepassword','id'=>$model2->id], 'method' => 'post']); ?>  
                            <?= $form->field($model2, 'currentpassword')->passwordInput(['maxlength' => true]) ?>
                            <?= $form->field($model2, 'newpassword1')->passwordInput(['maxlength' => true]) ?>
                            <?= $form->field($model2, 'newpassword2')->passwordInput(['maxlength' => true]) ?>
                            <div class="form-group">
                                <?= Html::submitButton(
                                $model2->isNewRecord ? 'Create' : 'Save changes', 
                                ['class' => 'btn btn-outline btn-primary']) ?>
                            </div>
                            <?php ActiveForm::end(); ?>                  
                        </div>
                        <div class="tab-pane fade" id="deactivateaccount">
                            <h4>Settings Tab</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                     <?php
                        $script = <<< JS
                        $(function() {
                        //save the latest tab (http://stackoverflow.com/a/18845441)
                        $('a[data-toggle="tab"]').on('click', function (e) {
                            localStorage.setItem('lastTab', $(e.target).attr('href'));
                        });

                        //go to the latest tab, if it exists:
                        var lastTab = localStorage.getItem('lastTab');

                    if (lastTab) {
                        $('a[href="'+lastTab+'"]').click();
                    }
                     }); 
JS;
                $this->registerJs($script, yii\web\View::POS_END);
                ?>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
      </div>
</div>
        <!-- /#page-wrapper -->

   

   



