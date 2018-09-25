<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StudiesPerCountry */

$this->title = 'Update Studies Per Country: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Studies Per Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->country, 'url' => ['view', 'id' => $model->country]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="studies-per-country-update">

    <h4><?= Html::encode($this->title) ?></h4>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
