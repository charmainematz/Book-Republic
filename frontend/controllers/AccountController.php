<?php
namespace frontend\controllers;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\User;
use common\models\Account;
use common\models\UserSearch;
use yii\web\UploadedFile;
/**
 * Account controller
 */
class AccountController extends Controller
{
  
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index'],
                'rules' => [
                    [
                        'actions' => ['index','update','view','changepassword','settings'],
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
       
        $this->layout= 'bookworm';
        return $this->render('index', [
                'model' => $this->findModel1($id),
                'model2' => $this->findModel2($id),
        ]);
    }
    public function actionSettings($id)
    {
       
        $this->layout= 'bookworm';
        return $this->render('settings', [
                'model' => $this->findModel1($id),
                'model2' => $this->findModel2($id),
        ]);
    }
     public function actionChangeprofilepic($id)
    {
           $model = $this->findModel1($id);
        
          if ($model->load(Yii::$app->request->post())){
           
            //get instance of the uplaoded file
            $model->file=UploadedFile::getInstance($model,'file');  
            
            //save the path in the db column
            $model->picture='uploads/'.$model->username.'_profilepicture'.'.'.$model->file->extension;
            
            if($model->save())
            
            {   $model->file->saveAs('uploads/'.$model->username.'_profilepicture'.'.'.$model->file->extension);
                $this->layout = 'bookworm';
                 return $this->render('index', [
                'model' => $model,
                'model2'=>$this->findModel2($id),
                ]);
          
            }
             
            
          }
        
         else{   return $this->renderAjax('changeprofilepic', [
                    'model' => $model,
        ]);
        }
        
    }
        
    public function actionUpdate($id)
    {
        $model = $this->findModel1($id);
        $this->layout= 'bookworm';
         
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
              return $this->render('index', [
                'model' => $model,
                'model2' => $this->findModel2($id),
        ]);
       
        }
    }
     public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel1($id),
        ]);
    }
    public function actionChangepassword($id){
        //$input = new Account; 
        //$input->load(Yii::$app->request->post();
        //if(vali)
        //$model2 = $this->findModel2($id);
        //$this->layout= 'bookworm';
         
        //return $this->redirect(['index', 'id' => $model->id]);
        return $this->render('index', [
                'model' => $this->findModel1($id),
                'model2' => $model2,
        ]);
        
    }
    
    protected function findModel1($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
     protected function findModel2($id)
    {
        if (($model = Account::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}