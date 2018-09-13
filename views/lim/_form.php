<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Contract;

/* @var $this yii\web\View */
/* @var $model app\models\Lim */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lim-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'contract_id')->textInput()->dropDownList(ArrayHelper::map(Contract::find()->all(), 'id', 'title')) ?>

    <?= $form->field($model, 'tmp_date')->textInput() ?>

    <?= $form->field($model, 'lim')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
