<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SampleSizeYearSex */

$this->title = 'Update Sample Size Year Sex: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Sample Size Year Sexes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->study_id, 'url' => ['view', 'id' => $model->study_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sample-size-year-sex-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
