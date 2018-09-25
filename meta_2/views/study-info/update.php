<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StudyInfo */

$this->title = 'Update Study Info: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Study Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->study_ID, 'url' => ['view', 'id' => $model->study_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="study-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
