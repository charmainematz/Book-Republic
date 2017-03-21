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
                'only' => ['index','admin','addbook','logout','mybookshelf'],
                'rules' => [
                    [
                        'actions' => ['index','addbook','logout','mybookshelf'],
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
        $id = Yii::$app->user->getId();
        $this->layout='bookworm';
        $model = User::findUser($id);
        $books = Books::findBooks($id);

        
        return $this->render('index', [
                'model' => $model,
                'books' => $books,
        ]);
        
      
    }
     public function actionMybookshelf($id)
    {
       
       
        $books = Books::findBooks($id);
        $this->layout='bookworm';
        return $this->render('mybookshelf', [
                'books' => $books,
        ]);
        
        
              
    }

   



    public function actionAddbook($id)
    {
        $this->layout='bookworm';
        $model = new Books();

        $user= User::findUser($id);

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
            $this->layout='bookworm';
            $books = Books::findBooks($id);
            return $this->render('index', [
                'model' => $model,
                'books' => $books,
        ]);
        
          
            
        } else {
            return $this->renderAjax('addbook', [ 
                'model' => $model,

            ]); 
        }
        
    }
    
}
