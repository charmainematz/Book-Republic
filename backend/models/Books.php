<?php

namespace backend\models;

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
            [['title', 'author', 'genre', 'description', 'condition'], 'required'],
            [['rating'], 'integer'],
            [['cover_photo'], 'string'],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOwner0()
    {
        return $this->hasOne(User::className(), ['username' => 'owner']);
    }
}
