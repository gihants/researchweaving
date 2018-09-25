<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ComparisonSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comparison-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Comp_ID') ?>

    <?= $form->field($model, 'ES_ID') ?>

    <?= $form->field($model, 'Study_ID') ?>

    <?= $form->field($model, 'FirstAuthor') ?>

    <?= $form->field($model, 'Year') ?>

    <?php // echo $form->field($model, 'Journal') ?>

    <?php // echo $form->field($model, 'Volume') ?>

    <?php // echo $form->field($model, 'Species_ID') ?>

    <?php // echo $form->field($model, 'CommonName') ?>

    <?php // echo $form->field($model, 'Genus') ?>

    <?php // echo $form->field($model, 'Species') ?>

    <?php // echo $form->field($model, 'animal') ?>

    <?php // echo $form->field($model, 'Model') ?>

    <?php // echo $form->field($model, 'Strain') ?>

    <?php // echo $form->field($model, 'Sex') ?>

    <?php // echo $form->field($model, 'Repro') ?>

    <?php // echo $form->field($model, 'FoodSched') ?>

    <?php // echo $form->field($model, 'Type') ?>

    <?php // echo $form->field($model, 'AL') ?>

    <?php // echo $form->field($model, 'CV1') ?>

    <?php // echo $form->field($model, 'Prots1') ?>

    <?php // echo $form->field($model, 'Carbs1') ?>

    <?php // echo $form->field($model, 'Fats1') ?>

    <?php // echo $form->field($model, 'Intake') ?>

    <?php // echo $form->field($model, 'CI1') ?>

    <?php // echo $form->field($model, 'Age1') ?>

    <?php // echo $form->field($model, 'N1') ?>

    <?php // echo $form->field($model, 'LT25contr') ?>

    <?php // echo $form->field($model, 'LT50contr') ?>

    <?php // echo $form->field($model, 'LT75contr') ?>

    <?php // echo $form->field($model, 'CR') ?>

    <?php // echo $form->field($model, 'CV2') ?>

    <?php // echo $form->field($model, 'c_nCR') ?>

    <?php // echo $form->field($model, 'c_CR') ?>

    <?php // echo $form->field($model, 'CI2') ?>

    <?php // echo $form->field($model, 'c_aCR') ?>

    <?php // echo $form->field($model, 'Prots2') ?>

    <?php // echo $form->field($model, 'Carbs2') ?>

    <?php // echo $form->field($model, 'Fats2') ?>

    <?php // echo $form->field($model, 'Age2') ?>

    <?php // echo $form->field($model, 'N2') ?>

    <?php // echo $form->field($model, 'Page') ?>

    <?php // echo $form->field($model, 'Prots') ?>

    <?php // echo $form->field($model, 'PD25') ?>

    <?php // echo $form->field($model, 'PD50') ?>

    <?php // echo $form->field($model, 'PD75') ?>

    <?php // echo $form->field($model, 'c_LT25_logHR') ?>

    <?php // echo $form->field($model, 'c_LT25_varlogHR') ?>

    <?php // echo $form->field($model, 'c_LT50_logHR') ?>

    <?php // echo $form->field($model, 'c_LT50_varlogHR') ?>

    <?php // echo $form->field($model, 'c_LT75_logHR') ?>

    <?php // echo $form->field($model, 'c_LT75_varlogHR') ?>

    <?php // echo $form->field($model, 'c_LT2550_logHR') ?>

    <?php // echo $form->field($model, 'c_LT2550_varlogHR') ?>

    <?php // echo $form->field($model, 'c_LT5075_logHR') ?>

    <?php // echo $form->field($model, 'c_LT5075_varlogHR') ?>

    <?php // echo $form->field($model, 'c_all_logHR') ?>

    <?php // echo $form->field($model, 'c_all_varlogHR') ?>

    <?php // echo $form->field($model, 'Notes_control') ?>

    <?php // echo $form->field($model, 'Notes_treatment') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
