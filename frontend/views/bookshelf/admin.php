

<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\widgets\Pjax;

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
                                <li class="active"><a href="#users" data-toggle="tab">Users</a>
                                </li>
                                <li><a href="#books" data-toggle="tab">Books</a>
                                </li>
                                <li><a href="#adminlogs" data-toggle="tab">Admin Logs</a>
                                </li>
                            
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">

                                <div class="tab-pane fade in active" id="users">
                                
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
                                             'status',
                                            // 'created_at',
                                            // 'updated_at',
                                             'first_name',
                                             'last_name',
                                            // 'role',
                                            // 'location',
                                            // 'picture',

                                            ['class' => 'yii\grid\ActionColumn'],


                                        ],
                                    ]); ?> 
                                      <?php Pjax::end(); ?>
                                </div>
                               
                                <div class="tab-pane fade" id="books">
                                      <?php Pjax::begin(); ?>
                                      <?= GridView::widget([
                                            'dataProvider' => $dataProvider,
                                            'filterModel' => $searchModel,
                                            'columns' => [
                                                ['class' => 'yii\grid\SerialColumn'],

                                                'title',
                                                'author',
                                                'genre',
                                                'description',
                                                'condition',
                                                // 'book_number',
                                                // 'rating',
                                                // 'review',
                                                // 'cover_photo',
                                                 'owner',

                                                ['class' => 'yii\grid\ActionColumn'],
                                            ],
                                        ]); ?>
                                      <?php Pjax::end(); ?>
                                </div>
                                <div class="tab-pane fade" id="adminlogs">
                                    <h4>Admin Logs</h4>
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

   

   



