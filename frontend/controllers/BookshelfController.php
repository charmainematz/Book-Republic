<?php
namespace frontend\controllers;


use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;
use common\models\Books;
use common\models\User;
use common\models\Genre;
use common\models\BooksSearch;
use common\models\UserSearch;


/**
 * Site controller
 */
class BookshelfController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index','admin','addbook','logout'],
                'rules' => [
                    [
                        'actions' => ['index','addbook','logout'],
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
    public function actionIndex($id)
    {
        $this->layout='bookworm';
        $model = $this->findUser($id);

        
        return $this->render('index', [
                'model' => $model,
        ]);
        
      
    }

   



    public function actionAddbook($id)
    {
        $this->layout='bookworm';
        $model = new Books();
        $user= $this->findUser($id);

        if ($model->load(Yii::$app->request->post())){
           
            //get instance of the uplaoded file
            $rand1=rand(0,9999);
            $rand2=rand(0,9999);
            $model->file=UploadedFile::getInstance($model,'file');  
            

            //save the path in the db column
            $model->cover_photo='uploads/'.$user->username.'_bookshelf_'.$rand1.'_'.$rand2.'.'.$model->file->extension;
         
            $model->owner = $user->username;
            
            
            if($model->save())
            
            {    $model->file->saveAs('uploads/'.$user->username.'_bookshelf_'.$rand1.'_'.$rand2.'.'.$model->file->extension);

            }
              return $this->redirect(['view', 'id' => $model->book_number]);
          
            
        } else {
            return $this->renderAjax('addbook', [ 
                'model' => $model,

            ]); 
        }
        
    }



    protected function findUser($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

   
}
