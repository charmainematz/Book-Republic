<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


?>

  <div id="page-wrapper">
               
            <!-- /.row -->
            <div class="row">
                  <div class="col-lg-12">


                <h1><?= Html::encode($this->title) ?></h1>

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'username',
                    'auth_key',
                    'password_hash',
                    'password_reset_token',
                    'email:email',
                    'status',
                    'created_at',
                    'updated_at',
                    'first_name',
                    'last_name',
                    'role',
                    'location',
                    'picture',
                ],
            ]) ?>

            </div>
        </div>
     </div>
</div>