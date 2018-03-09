<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "worked_parcel".
 *
 * @property int $id
 * @property int $worked_area
 * @property int $tractor_id
 * @property int $parcel_id
 * @property string $date_worked
 */
class WorkedParcel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'worked_parcel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['worked_area', 'tractor_id', 'parcel_id', 'date_worked'], 'required'],
            [['worked_area', 'tractor_id', 'parcel_id'], 'integer'],
            [['date_worked'], 'safe'],
			//['worked_area', 'integer', 'min'=> 0,'max' => $this->parcel],
			['worked_area','compare', 'compareValue' =>(int) parcel::find()->where(['id' => 1])->sum('area'), 'operator' => '<'],
			
        ];
		
    }

    /**
     * @inheritdoc
     */
	
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'worked_area' => 'Worked Area',
            'tractor_id' => 'Tractor ID',
            'parcel_id' => 'Parcel ID',
            'date_worked' => 'Date Worked',
        ];
    }
	public function getTractor()
    {
        return $this->hasOne(Tractor::className(), ['id' => 'tractor_id']);
    }
	public function getParcel()
    {
        return $this->hasOne(Parcel::className(), ['id' => 'parcel_id']);
    }
}
