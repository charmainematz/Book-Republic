<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "relationship".
 *
 * @property integer $user1
 * @property integer $user2
 * @property integer $status
 * @property integer $sender
 *
 * @property User $user10
 * @property User $user20
 */
class Relationship extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'relationship';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user1', 'user2', 'status', 'sender'], 'required'],
            [['user1', 'user2', 'status', 'sender'], 'integer'],
            [['user1', 'user2'], 'unique', 'targetAttribute' => ['user1', 'user2'], 'message' => 'Request has already been sent.'],
            [['user1'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user1' => 'id']],
            [['user2'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user2' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user1' => 'User1',
            'user2' => 'User2',
            'status' => 'Status',
            'sender' => 'Sender',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser10()
    {
        return $this->hasOne(User::className(), ['id' => 'user1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser20()
    {
        return $this->hasOne(User::className(), ['id' => 'user2']);
    }
}
