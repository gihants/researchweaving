<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Comparison */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comparison-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Comp_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ES_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Study_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FirstAuthor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Journal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Volume')->textInput() ?>

    <?= $form->field($model, 'Species_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CommonName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Genus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Species')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'animal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Model')->textInput() ?>

    <?= $form->field($model, 'Strain')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Sex')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Repro')->textInput() ?>

    <?= $form->field($model, 'FoodSched')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AL')->textInput() ?>

    <?= $form->field($model, 'CV1')->textInput() ?>

    <?= $form->field($model, 'Prots1')->textInput() ?>

    <?= $form->field($model, 'Carbs1')->textInput() ?>

    <?= $form->field($model, 'Fats1')->textInput() ?>

    <?= $form->field($model, 'Intake')->textInput() ?>

    <?= $form->field($model, 'CI1')->textInput() ?>

    <?= $form->field($model, 'Age1')->textInput() ?>

    <?= $form->field($model, 'N1')->textInput() ?>

    <?= $form->field($model, 'LT25contr')->textInput() ?>

    <?= $form->field($model, 'LT50contr')->textInput() ?>

    <?= $form->field($model, 'LT75contr')->textInput() ?>

    <?= $form->field($model, 'CR')->textInput() ?>

    <?= $form->field($model, 'CV2')->textInput() ?>

    <?= $form->field($model, 'c_nCR')->textInput() ?>

    <?= $form->field($model, 'c_CR')->textInput() ?>

    <?= $form->field($model, 'CI2')->textInput() ?>

    <?= $form->field($model, 'c_aCR')->textInput() ?>

    <?= $form->field($model, 'Prots2')->textInput() ?>

    <?= $form->field($model, 'Carbs2')->textInput() ?>

    <?= $form->field($model, 'Fats2')->textInput() ?>

    <?= $form->field($model, 'Age2')->textInput() ?>

    <?= $form->field($model, 'N2')->textInput() ?>

    <?= $form->field($model, 'Page')->textInput() ?>

    <?= $form->field($model, 'Prots')->textInput() ?>

    <?= $form->field($model, 'PD25')->textInput() ?>

    <?= $form->field($model, 'PD50')->textInput() ?>

    <?= $form->field($model, 'PD75')->textInput() ?>

    <?= $form->field($model, 'c_LT25_logHR')->textInput() ?>

    <?= $form->field($model, 'c_LT25_varlogHR')->textInput() ?>

    <?= $form->field($model, 'c_LT50_logHR')->textInput() ?>

    <?= $form->field($model, 'c_LT50_varlogHR')->textInput() ?>

    <?= $form->field($model, 'c_LT75_logHR')->textInput() ?>

    <?= $form->field($model, 'c_LT75_varlogHR')->textInput() ?>

    <?= $form->field($model, 'c_LT2550_logHR')->textInput() ?>

    <?= $form->field($model, 'c_LT2550_varlogHR')->textInput() ?>

    <?= $form->field($model, 'c_LT5075_logHR')->textInput() ?>

    <?= $form->field($model, 'c_LT5075_varlogHR')->textInput() ?>

    <?= $form->field($model, 'c_all_logHR')->textInput() ?>

    <?= $form->field($model, 'c_all_varlogHR')->textInput() ?>

    <?= $form->field($model, 'Notes_control')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Notes_treatment')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
