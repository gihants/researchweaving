<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Comparison */

$this->title = 'Comparison ID - '.$model->Comp_ID;
$this->params['breadcrumbs'][] = ['label' => 'Comparisons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comparison-view">

    <h3><?= Html::encode($this->title) ?></h3>



    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Comp_ID',
            'ES_ID',
            'Study_ID',
            'FirstAuthor',
            'Year',
            'Journal',
            'Volume',
            'Species_ID',
            'CommonName',
            'Genus',
            'Species',
            'animal',
            'Model',
            'Strain',
            'Sex',
            'Repro',
            'FoodSched',
            'Type',
            'AL',
            'CV1',
            'Prots1',
            'Carbs1',
            'Fats1',
            'Intake',
            'CI1',
            'Age1',
            'N1',
            'LT25contr',
            'LT50contr',
            'LT75contr',
            'CR',
            'CV2',
            'c_nCR',
            'c_CR',
            'CI2',
            'c_aCR',
            'Prots2',
            'Carbs2',
            'Fats2',
            'Age2',
            'N2',
            'Page',
            'Prots',
            'PD25',
            'PD50',
            'PD75',
            'c_LT25_logHR',
            'c_LT25_varlogHR',
            'c_LT50_logHR',
            'c_LT50_varlogHR',
            'c_LT75_logHR',
            'c_LT75_varlogHR',
            'c_LT2550_logHR',
            'c_LT2550_varlogHR',
            'c_LT5075_logHR',
            'c_LT5075_varlogHR',
            'c_all_logHR',
            'c_all_varlogHR',
            'Notes_control',
            'Notes_treatment',
        ],
    ]) ?>

</div>
