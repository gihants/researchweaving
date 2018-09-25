<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Comparison */

$this->title = 'Create Comparison';
$this->params['breadcrumbs'][] = ['label' => 'Comparisons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comparison-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
