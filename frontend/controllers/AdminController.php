<?php
namespace frontend\controllers;


use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Books;
use common\models\User;
use common\models\BooksSearch;
use common\models\UserSearch;
use yii\web\UploadedFile;


/**
 * Site controller
 */
class AdminController extends Controller
{
  
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index','admin','managebooks','viewuser','viewbook','updatebook','updateuser','logout'],
                'rules' => [
                    [
                        'actions' => ['index','admin','viewuser','viewbook','updatebook', 'updateuser','logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                   
                ],
            ],
            
        ];
    }
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
       $this->layout='bookworm';

        $searchModel = new BooksSearch();
        $searchModel2 = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider2 = $searchModel2->search(Yii::$app->request->queryParams);

        $dataProvider->pagination->pageSize=8;
        $dataProvider2->pagination->pageSize=8;

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'searchModel2' => $searchModel2,
            'dataProvider2' => $dataProvider2,
        ]);
    }


     public function actionAdmin()
    {
        

    }
     public function actionManagebooks()
    {
        $searchModel = new BooksSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
         return $this->render('managebooks', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

    }

    public function actionAdminbooks()
   {
        $this->layout='bookworm';
        return $this->render('admin');

    }
     public function actionAdminlogs()
    {
        $this->layout='bookworm';
        return $this->render('admin');

    }


     public function actionUpdate($id)
    {
        $model = User::findUser($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->username]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }
    public function actionUpdatebook($id)
    {
        $model = Books::findBook($id);

        $this->layout= 'bookworm';
         
        if ($model->load(Yii::$app->request->post()) && $model->save()){

            if($model->file!=null){
                $rand1=rand(0,9999);
                $rand2=rand(0,9999);
                $model->file=UploadedFile::getInstance($model,'file');

                $model->cover_photo='uploads/'.$model->owner.'_bookshelf_'.$rand1.'_'.$rand2.'.'.$model->file->extension;
             

                 if($model->save())
                
                {    $model->file->saveAs('uploads/'.$model->owner.'_bookshelf_'.$rand1.'_'.$rand2.'.'.$model->file->extension);

                }
            }
              return $this->refresh(); 
       
        }
        else{
              return $this->render('updatebook', [
                'model' => $model,
            ]);
        }

    }
    public function actionUpdateuser($id)
    {
        $model = User::findUser($id);
        $this->layout= 'bookworm';
         
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
              return $this->refresh();

       
        }
        else{
              return $this->render('updateuser', [
                'model' => $model,
            ]);
        }


    }

     public function actionViewuser($id)
    {
        $this->layout='bookworm';
        return $this->render('viewuser', [
            'model' => User::findUser($id),
        ]);
    }
    public function actionViewbook($id)
    {
        $this->layout='bookworm';
        return $this->render('viewbook', [
            'model' => Books::findBook($id),
        ]);
    }
   

   protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    protected function findModel2($id)
    {
        if (($model = Books::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
