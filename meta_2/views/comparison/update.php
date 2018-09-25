<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Comparison */

$this->title = 'Update Comparison: ' . $model->Comp_ID;
$this->params['breadcrumbs'][] = ['label' => 'Comparisons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Comp_ID, 'url' => ['view', 'id' => $model->Comp_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="comparison-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
