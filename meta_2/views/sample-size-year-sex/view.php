<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SampleSizeYearSex */

$this->title = 'Study ID -'.$model->study_id;
$this->params['breadcrumbs'][] = ['label' => 'Unique Records of Sample Size-Sex-Year-Study', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sample-size-year-sex-view">

    <h1><?= Html::encode($this->title) ?></h1>






    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'study_id',
            'sex',
            'treatment_group_sample_size',
            'year',
        ],
    ]) ?>

</div>
