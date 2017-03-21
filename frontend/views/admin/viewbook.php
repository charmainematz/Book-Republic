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
            'title',
            'author',
            'genre',
            'description',
            'condition',
            'book_number',
            'rating',
            'review',
            //'cover_photo',
            'owner',
        ],
    ]) ?>


            </div>
        </div>
     </div>
</div>