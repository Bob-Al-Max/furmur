<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bucket".
 *
 * @property int $id
 * @property int $contract_id
 * @property string $bucket
 * @property string $date_from
 * @property string $date_to
 *
 * @property Contract $contract
 */
class Bucket extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bucket';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['contract_id'], 'required'],
            [['contract_id'], 'integer'],
            [['bucket'], 'string'],
            [['date_from', 'date_to'], 'safe'],
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
            'bucket' => 'Bucket',
            'date_from' => 'Date From',
            'date_to' => 'Date To',
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
