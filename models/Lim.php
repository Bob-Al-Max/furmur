<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lim".
 *
 * @property int $id
 * @property int $contract_id
 * @property string $tmp_date
 * @property int $lim
 *
 * @property Contract $contract
 */
class Lim extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lim';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['contract_id'], 'required'],
            [['contract_id', 'lim'], 'integer'],
            [['tmp_date'], 'safe'],
            [['contract_id'], 'exist', 'skipOnError' => true, 'targetClass' => Contract::className(), 'targetAttribute' => ['contract_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'contract_id' => 'Contract ID',
            'tmp_date' => 'Tmp Date',
            'lim' => 'Lim',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContract()
    {
        return $this->hasOne(Contract::className(), ['id' => 'contract_id']);
    }
}
