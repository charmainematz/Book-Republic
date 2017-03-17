<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Books;

/**
 * BooksSearch represents the model behind the search form about `backend\models\Books`.
 */
class BooksSearch extends Books
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'author', 'genre', 'description', 'condition', 'review', 'cover_photo', 'owner'], 'safe'],
            [['book_number', 'rating'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Books::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'book_number' => $this->book_number,
            'rating' => $this->rating,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'author', $this->author])
            ->andFilterWhere(['like', 'genre', $this->genre])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'condition', $this->condition])
            ->andFilterWhere(['like', 'review', $this->review])
            ->andFilterWhere(['like', 'cover_photo', $this->cover_photo])
            ->andFilterWhere(['like', 'owner', $this->owner]);

        return $dataProvider;
    }
}
