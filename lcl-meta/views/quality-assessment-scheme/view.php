<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\QualityAssessmentScheme */

$this->title = $model->qa_question_id;
$this->params['breadcrumbs'][] = ['label' => 'Quality Assessment Schemes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quality-assessment-scheme-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->qa_question_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->qa_question_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'qa_question_id',
            'question',
            'yes',
            'no',
            'cannot_answer',
        ],
    ]) ?>

</div>
