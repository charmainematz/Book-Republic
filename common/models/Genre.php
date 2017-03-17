<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "genre".
 *
 * @property string $genre
 * @property integer $genre_id
 */
class Genre extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'genre';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['genre_id'], 'required'],
            [['genre_id'], 'integer'],
            [['genre'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'genre' => 'Genre',
            'genre_id' => 'Genre ID',
        ];
    }
}