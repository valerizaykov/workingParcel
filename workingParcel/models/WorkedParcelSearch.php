<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tractor;

/**
 * PostSearch represents the model behind the search form of `common\models\Post`.
 */


class WorkedParcelSearch extends WorkedParcel
{
    /**
     * @inheritdoc
     */
	public $tractorname;
	public $culture;
	public $area;
	public $parcelname;
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['worked_area','date_worked','tractorname','parcelname','culture','area'], 'safe'],
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
        $query = WorkedParcel::find();

        // add conditions that should always apply here
        $query->joinWith(['tractor']);
        $query->joinWith(['parcel']);
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
            'id' => $this->id,
            'tractor_id' => $this->tractor_id,
        ]);

        $query->andFilterWhere(['like', 'date_worked', $this->date_worked])
			  ->andFilterWhere(['like', 'tractor.name', $this->tractorname])
			   ->andFilterWhere(['like', 'parcel.parcel_name', $this->parcelname])
			    ->andFilterWhere(['like', 'parcel.culture', $this->culture])
				->andFilterWhere(['like', 'worked_area', $this->worked_area])
				->andFilterWhere(['like', 'parcel.area', $this->area]);
			 // ->andFilterWhere(['like', 'tbl_user.username', $this->username])

        return $dataProvider;
    }
}
