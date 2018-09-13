<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lim */

$this->title = 'Update Lim: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Lims', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lim-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
