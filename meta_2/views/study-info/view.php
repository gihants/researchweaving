<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\StudyInfo */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Study Info', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="study-info-view">

    <h3><?= Html::encode($this->title) ?></h3>

    

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'study_ID',
            'FirstAuthor',
            'title',
            'Country',
            'Year',
            'Journal',
            'Volume',
        ],
    ]) ?>

</div>
