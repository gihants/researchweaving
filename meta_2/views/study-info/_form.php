<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StudyInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="study-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'study_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FirstAuthor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Journal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Volume')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
