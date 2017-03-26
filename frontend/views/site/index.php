<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Carousel;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */

$this->title = 'Book Republic';
?>
<div class="site-index">


    <div class="body-content">
        <?php
            Modal::begin([
                    'header'=>'<h4 align="center">Register</h4>',
                    'id' => 'modal',
                    'size' => 'modal-sm',

                ]);
            echo "<div id = 'modalContent'></div>";
            Modal::end();
        ?>

        <div class="row">
            <section style="height:70px;"></section>
             <div class="col-xs-12 col-sm-6 col-lg-8">
                    <?php
                         echo Carousel::widget([

                        'items' => [
                             ['content'=>  Html::img('../images/a.jpg')],
                             ['content'=>  Html::img('../images/a1.jpg')],
                             ['content'=>  Html::img('../images/b.jpg')],                                       
                            ],
                         ]);
                    ?>
             </div>

            <div class="col-xs-6 col-lg-4 panel-body">
                   
                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>  
                    
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true,'placeholder'=>'Username'])->label(false) ?>
                    <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Password'])->label(false) ?>
                    
                    <?= $form->field($model, 'rememberMe')->checkbox() ?>
                       
                    <h6> Forgot Password? <?= Html::a('Reset', ['site/request-password-reset']) ?></h6>
                    
                   
                    <?= Html::submitButton('Login', ['class' => 'btn btn-outline btn-primary', 'name' => 'login-button']) ?>
                    
                  
                    <?= Html::button('Register',['value'=>Url::to(['signup']),'class'=>'btn btn-outline btn-primary', 'id'=>'Modal_register']) ?>
                  
                    
                <?php ActiveForm::end(); ?>
            </div>

        <div class="row">
             <div class="col-xs-12 col-sm-6 col-lg-8">
                    <h2>New Listing</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>
             </div>

            <div class="col-xs-6 col-lg-4">

            </div>
        </div>
          <!--    
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>-->
 

    </div>
</div>