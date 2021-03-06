<?php

namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property string $title
 * @property string $author
 * @property string $genre
 * @property string $description
 * @property string $condition
 * @property integer $book_number
 * @property integer $rating
 * @property string $review
 * @property resource $cover_photo
 * @property string $owner
 *
 * @property User $owner0
 */
class Books extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */

    public $file;
    public static function tableName()
    {
        return 'books';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'author', 'genre', 'description', 'condition','cover_photo'], 'required'],
            [['rating'], 'integer'],
            [['file'], 'file'],
            [['cover_photo'], 'string','max'=>200],
            [['title', 'author', 'genre', 'condition', 'owner'], 'string', 'max' => 50],
            [['description', 'review'], 'string', 'max' => 100],
            [['owner'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['owner' => 'username']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'title' => 'Title',
            'author' => 'Author',
            'genre' => 'Genre',
            'description' => 'Description',
            'condition' => 'Condition',
            'book_number' => 'Book Number',
            'rating' => 'Rating',
            'review' => 'Review',
            'cover_photo' => 'Cover Photo',
            'owner' => 'Owner',
            'file' => 'Cover',

        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOwner0()
    {
        return $this->hasOne(User::className(), ['username' => 'owner']);
    }
    public static function findBooks($id)
    {
        $user = User::findUser($id);
        $books = Books::find()
                ->where(['owner' => $user->username])
                ->all();

        return $books;
    }
    public static function findBooksbygenre($id)
    {
        
        $books = Books::find()
                ->where(['genre' => $id])
                ->all();

        return $books;
    }
    public static function countbooksbygenre($id)
    {      
        $books = Books::find()
                ->where(['genre' => $id])
                ->all();
        $count = count($books);

        return $count;
    }
    public static function findLatestBook()
    {
        
        $books = Books::find()
                ->orderBy(['book_number' => SORT_DESC])
                ->limit(5)
                ->all();
        
        
        if ($books !== null) {
            return $books;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    
    }
    public static function findBook($id)
    {
        if (($model = Books::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public static function getOwner($id)
    {
       $books = Books::find()
                ->where(['book_number' => $id])
                ->one();
               
        if ($books !== null) {
            return $books;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
        
    }
}
