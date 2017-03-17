<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


?>

  <div id="page-wrapper">
               
            <!-- /.row -->
            <div class="row">
                  <div class="col-lg-12">


                <h1><?= Html::encode($this->title) ?></h1>
              <p>
        <?= Html::a('Update', ['update', 'id' => $model->book_number], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->book_number], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

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