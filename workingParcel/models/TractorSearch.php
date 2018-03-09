<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tractor;

/**
 * PostSearch represents the model behind the search form of `common\models\Post`.
 */


class TractorSearch extends Tractor
{
    /**
     * @inheritdoc
     */
    //public $postSearch;
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name'], 'safe'],

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
        $query = Tractor::find();

        // add conditions that should always apply here
        //$query->joinWith(['user']);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        /*$dataProvider->sort->attributes['username'] = [
            'asc' => ['tbl_user.username' => SORT_ASC],
            'desc' => ['tbl_user.username' => SORT_DESC],
        ];*/
        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        /*$query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
        ]);
        if($this->postSearch){
			$query->innerJoinWith(['post']);
		}*/

        $query->andFilterWhere(['like', 'name', $this->name]);
           // ->andFilterWhere(['like', 'password_hash', $this->password_hash])
           // ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
