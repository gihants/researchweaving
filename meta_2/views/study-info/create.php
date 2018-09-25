<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StudyInfo */

$this->title = 'Create Study Info';
$this->params['breadcrumbs'][] = ['label' => 'Study Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="study-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
