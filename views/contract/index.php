<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ContractSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contracts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contract-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать контракт', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>


<?php  

$items = Yii::$app->db->createCommand('SELECT lim.contract_id, lim.tmp_date, lim.lim, bucket.bucket, bucket.date_from, bucket.date_to FROM lim inner join bucket ON
lim.contract_id = bucket.contract_id')
            ->queryAll();



?>

<h3>А вот обединенная таблица</h3>

<p>Код для неё, изходя из базы данных</p>
<code>
    SELECT lim.contract_id, lim.tmp_date, lim.lim, bucket.bucket, bucket.date_from, bucket.date_to FROM lim inner join bucket ON
lim.contract_id = bucket.contract_id;
</code>
<p>Можно еще так:</p>
<code>
    SELECT lim.contract_id, lim.tmp_date, lim.lim, bucket.bucket, bucket.date_from, bucket.date_to FROM lim natural join bucket;
</code>
<table class="table table-bordered">
    <tr>
        <th>Contract id</th>
        <th>date</th>
        <th>lim</th>
        <th>bucket</th>
        <th>date_from</th>
        <th>date_to</th>
    </tr> 
    <?php  foreach($items as $item): ?>
    <tr>
        <td><?php echo $item['contract_id'] ?></td>
        <td><?php echo $item['tmp_date'] ?></td>
        <td><?php echo $item['lim'] ?></td>
        <td><?php echo $item['bucket'] ?></td>
        <td><?php echo $item['date_from'] ?></td>
        <td><?php echo $item['date_to'] ?></td>
    </tr>
    <?php endforeach;  ?>
</table>