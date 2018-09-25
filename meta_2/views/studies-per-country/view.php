<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\StudiesPerCountry */

$this->title = 'Studies from '.$model->country;
$this->params['breadcrumbs'][] = ['label' => 'Studies Per Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studies-per-country-view">

    <h3><?= Html::encode($this->title) ?></h3>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'country',
            'country_code',
            'studies',
        ],
    ]) ?>

</div>
