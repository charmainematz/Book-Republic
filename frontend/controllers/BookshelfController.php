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
use common\models\ReadingList;


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
                'only' => ['index','admin','addbook','logout','mybookshelf','managebook','updatebook','dashboard','displaynew','addtolist'],
                'rules' => [
                    [
                        'actions' => ['index','addbook','logout','mybookshelf','managebook','updatebook','dashboard','displaynew','addtolist'],
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

    public function actionDashboard($id)
    {
       
       
        $books = Books::findBooks($id);
        $genre = Genre::find()->all();

        $this->layout='bookworm';
        return $this->render('dashboard', [
                'books' => $books,
                'genre' => $genre,
        ]);
           
              
    }
    public function actionAddtolist($list_id,$book_number)
    {
        $request = Yii::$app->request;
        $userid = Yii::$app->user->getId();
        $readinglist = new ReadingList();
        if ($request->isGet){
                 $readinglist->user_id =  $userid;
                 $readinglist->list_name = $list_id;
                 $readinglist->book_number = $book_number;
                 $readinglist->save();
        }
        $this->layout='bookworm';
        return $this->render('dashboard', [
                'books' => Books::findBooks($userid),
                'genre' =>  Genre::find()->all(),
        ]);
        
           
              
    }
     public function actionManagebook($id)
    {
       
       
        $book = Books::findBook($id);

        

            if(isset($_POST['update']))
            {
                $this->layout="bookworm";
                return $this->render('updatebook', [
                    'model' => $book,
                ]);
            }
            if(isset($_POST['delete']))
            {
                $book->delete();
            }   
        
            else{
                return $this->renderAjax('managebook', [
                        'model' => $book,
                ]);

            }
        
              
    }
     public function actionTradebook($id)
    {
       
       
        $book = Books::findBook($id);

        

            if(isset($_POST['swap']))
            {
                $this->layout="bookworm";
                return $this->render('updatebook', [
                    'model' => $book,
                ]);
            }
            if(isset($_POST['borrow']))
            {
                $book->delete();
            }   
        
            else{
                return $this->renderAjax('tradebook', [
                        'model' => $book,
                ]);

            }
        
              
    }
    public function actionDisplaynew()
    {
      
        $genre = Genre::find()->all();

        if (Yii::$app->request->isPjax) {
          
              return $this->renderPartial('viewnewbooks');
        } else {
            $this->layout='bookworm';
            return $this->render('dashboard', [
                    
                    'genre' => $genre,
            ]);
        }
    }
    
     public function actionBrowsebooksbygenre($id)
    {
        $books = Books::findBooksbygenre($id);
        $genre = Genre::find()->all();

        if (Yii::$app->request->isPjax) {
          
              return $this->renderPartial('viewbygenre', ['books' => $books]);
        } else {
            $this->layout='bookworm';
            return $this->render('dashboard', [
                   
                    'genre' => $genre,
            ]);
        }
    }
    
   

    public function actionDeletebook($id)
    {
       
       
        $book = Books::findBook($id)->delete();
        $books = Books::findBooks($id);
        $model = User::findByUsername($book->owner);
        
        return $this->render('index', [
                'model' => $model,
                'books' => $books,
        ]);
        
        
    }
   

public function actionUpdatebook($id)
    {
        $model = Books::findBook($id);

        $this->layout= 'bookworm';

         if(isset($_POST['save'])){
         
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
    }

        if(isset($_POST['back']))
            {
                $userid = Yii::$app->user->getId();
                $usermodel = User::findUser($userid);
                $booksmodel = Books::findBooks($userid);
                $this->layout="bookworm";
                return $this->render('/bookshelf/index', [
                    'model' => $usermodel,
                    'books' => $booksmodel,
                ]);
            }

        
      
        return $this->render('/bookshelf/updatebook', [
                'model' => $model,
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
