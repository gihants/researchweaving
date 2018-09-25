<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SampleSizeYearSex */

$this->title = 'Create Sample Size Year Sex';
$this->params['breadcrumbs'][] = ['label' => 'Sample Size Year Sexes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sample-size-year-sex-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
