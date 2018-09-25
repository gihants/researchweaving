<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StudyInfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="study-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'study_ID') ?>

    <?= $form->field($model, 'FirstAuthor') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'Country') ?>

    <?= $form->field($model, 'Year') ?>

    <?php // echo $form->field($model, 'Journal') ?>

    <?php // echo $form->field($model, 'Volume') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
