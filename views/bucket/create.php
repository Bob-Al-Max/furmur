<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Bucket */

$this->title = 'Добавить Bucket';
$this->params['breadcrumbs'][] = ['label' => 'Buckets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bucket-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
