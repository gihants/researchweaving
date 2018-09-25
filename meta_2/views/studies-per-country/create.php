<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StudiesPerCountry */

$this->title = 'Create Studies Per Country';
$this->params['breadcrumbs'][] = ['label' => 'Studies Per Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studies-per-country-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
