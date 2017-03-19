 <?php $form = ActiveForm::begin(['action' =>['account/changepassword','id'=>$model->id], 'method' => 'post']); ?>
                                    
                                    <?= $form->field($model, 'currentpassword')->passwordInput(['maxlength' => true]) ?>
                                   <?= $form->field($model, 'newpassword1')->passwordInput(['maxlength' => true]) ?>
                                   
                                    <?= $form->field($model, 'newpassword2')->passwordInput(['maxlength' => true]) ?>
                                   
                                 
                                    <div class="form-group">
                                        <?= Html::submitButton(
                                        $model->isNewRecord ? 'Create' : 'Save changes', 
                                        ['class' => 'btn btn-outline btn-primary']) ?>
                                    </div>

                                    <?php ActiveForm::end(); ?>