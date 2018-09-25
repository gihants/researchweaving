<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            [
                'label' => 'Data',
                'items' => [


                    ['label' => 'Comparisons', 'url' => ['/comparison/index']],
                    ['label' => 'Studies', 'url' => ['/study-info/index']],






                ],
            ],
            [
                'label' => 'Graphical Summaries',
                'items' => [


                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Publication information</li>',
                    ['label' => 'Studies per year', 'url' => ['/diagrams/studies-by-year']],
                    ['label' => 'Wordcloud of journals', 'url' => ['/diagrams/journal-wordcloud']],
                    ['label' => 'Geographical distribution of studies', 'url' => ['/studies-per-country/index']],
                    ['label' => 'Diagrams from Web of Science', 'url' => ['/diagrams/wos']],
                    
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Bibliographics</li>',
                    ['label' => 'Collaboration network', 'url' => ['/diagrams/collaboration-network']],
                    ['label' => 'Historical network', 'url' => ['/diagrams/historical-network']],
                    ['label' => 'Topic network', 'url' => ['/diagrams/topic-network']],
                    ['label' => 'Thematic map', 'url' => ['/diagrams/thematic-map']],
                    
                    
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Studies and comparisons</li>',
                    ['label' => 'Experiments per study', 'url' => ['/diagrams/experiments-per-study']],
                    ['label' => 'Sample sizes over the years', 'url' => ['/sample-size-year-sex/index']],
                    ['label' => 'Wordcloud of species', 'url' => ['/diagrams/species-wordcloud']],
                    ['label' => 'Phylogenetic tree', 'url' => ['/diagrams/tree']],





                   








                ],
            ],
       
        ],
    ]);
    NavBar::end();

    $this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'href' => 'https://researchweaving.com/rw.png']);
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left"><a href="https://www.researchweaving.com/">Research Weaving</a> </p>
        <p class="pull-right">&copy; <a href="http://www.i-deel.org/">I-DEEL</a> <?= date('Y') ?></p>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
