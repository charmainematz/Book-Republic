<?= GridView::widget([
    'dataProvider' => $dataProvider2,
    'filterModel' => $searchModel2,
   

    'columns' => [
       
        

            ['class' => 'yii\grid\SerialColumn'],
           // 'id',
            'username',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
             'email:email',
             'status',
            // 'created_at',
            // 'updated_at',
             'first_name',
             'last_name',
            // 'role',
            // 'location',
            // 'picture',

            ['class' => 'yii\grid\ActionColumn',
             'template' => '{view},{update},{delete}',
             'buttons' => 
                    ['view' => function ($url, $model) {
                            return Html::a('<span class="glyphicon glyphicon-info-sign"></span>', $url, [
                                'title' => Yii::t('app', 'View'),
                                ]);
                                }
                    ],
                    ['update' => function ($url, $model) {
                            return Html::a('<span class="glyphicon glyphicon-info-sign"></span>', $url, [
                                'title' => Yii::t('app', 'Update'),
                                ]);
                                }
                    ],
                    ['delete' => function ($url, $model) {
                            return Html::a('<span class="glyphicon glyphicon-info-sign"></span>', $url, [
                                'title' => Yii::t('app', 'Delete'),
                                ]);
                                }
                    ],


             'urlCreator' => function( $action, $model, $key, $index ){
                    if ($action == "view") {
                                return Url::to(['view', 'id' => $key]);
                    }
                    else if ($action == "update") {
                                return Url::to(['update', 'id' => $key]);
                    }
                    else if ($action == "delete") {
                                return Url::to(['delete', 'id' => $key]);
                    }
              }
            ],
    ],
]); ?> 








  <?php Pjax::begin(); ?>
                                     <?= GridView::widget([
                                        'dataProvider' => $dataProvider2,
                                        'filterModel' => $searchModel2,
                                        //'contentOptions'=>['style'=>'max-width: 100px;'],

                                        'columns' => [
                                            // 'htmlOptions'=>array('width'=>'40px'),
                                            ['class' => 'yii\grid\SerialColumn'],

                                           // 'id',
                                            'username',
                                            //'auth_key',
                                            //'password_hash',
                                            //'password_reset_token',
                                             'email:email',
                                            // 'status',
                                            // 'created_at',
                                            // 'updated_at',
                                             'first_name',
                                            // 'last_name',
                                            // 'role',
                                            // 'location',
                                            // 'picture',

                                            ['class' => 'yii\grid\ActionColumn'],


                                        ],
                                    ]); ?> 
                                      <?php Pjax::end(); ?>