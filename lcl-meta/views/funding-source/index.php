<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FundingSourceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Funding Sources';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="funding-source-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Funding Source', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'funding_source_name',
            'address',
            'country_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
