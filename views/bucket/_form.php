<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Contract;

/* @var $this yii\web\View */
/* @var $model app\models\Bucket */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bucket-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'contract_id')->textInput()->dropDownList(ArrayHelper::map(Contract::find()->all(), 'id', 'title')) ?>

    <?= $form->field($model, 'bucket')->dropDownList([ 1 => '1', 2 => '2', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'date_from')->textInput() ?>

    <?= $form->field($model, 'date_to')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
