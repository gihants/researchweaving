
<head>
<style type="text/css">
 p.MsoNormal
	{margin-bottom:.0001pt;
	text-align:justify;
	text-justify:inter-ideograph;
	font-size:10.5pt;
	font-family:"Calibri",sans-serif;
	margin-left: 0cm;
	margin-right: 0cm;
	margin-top: 0cm;
}
.auto-style1 {
	font-size: large;
}
</style>
</head>

<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\SampleSizeYearSex;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SampleSizeYearSexSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Treatment Group Sample Sizes over the Years';
$this->params['breadcrumbs'][] = $this->title;



$males = SampleSizeYearSex::find()
    ->where(['sex' => 'M'])
    ->asArray()
    ->all();

$i = 0;
foreach ($males as $male) {
    $male_data[$i] = [intval($male['year']), log(floatval($male['treatment_group_sample_size']))];
    $i = $i + 1;
}


$females = SampleSizeYearSex::find()
    ->where(['sex' => 'F'])
    ->asArray()
    ->all();

$i = 0;
foreach ($females as $female) {
    $female_data[$i] = [intval($female['year']), log(floatval($female['treatment_group_sample_size']))];
    $i = $i + 1;
}

$mixes = SampleSizeYearSex::find()
    ->where(['sex' => 'MF'])
    ->asArray()
    ->all();

$i = 0;
foreach ($mixes as $mix) {
    $mix_data[$i] = [intval($mix['year']), log(floatval($mix['treatment_group_sample_size']))];
    $i = $i + 1;
}

$nons = SampleSizeYearSex::find()
    ->where(['sex' => 'N'])
    ->asArray()
    ->all();

$i = 0;
foreach ($nons as $non) {
    $non_data[$i] = [intval($non['year']), log(floatval($non['treatment_group_sample_size']))];
    $i = $i + 1;
}






?>
<div class="sample-size-year-sex-index">

    <h3><?= Html::encode($this->title) ?></h3>


    <p class="MsoNormal">
	<span class="auto-style1" style="font-family: &quot;Helvetica Neue&quot;; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; color: #333333; background: white; mso-font-kerning: 0pt; mso-ansi-language: EN-AU; mso-fareast-language: EN-US">
	Numbers (on log scale) of dietary restricted animals used in the included 
	studies plotted against study publication year. The data is colour-coded to 
	indicate the sex of the studied animals. <o:p></o:p></span></p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>

    <div id="container"></div>

    <script type="text/javascript">
    var male_data = <?php echo json_encode($male_data); ?>;
    var female_data = <?php echo json_encode($female_data); ?>;

    </script>
    <script>

        Highcharts.chart('container', {
            chart: {
                type: 'scatter',
                zoomType: 'xy'
            },
            title: {
                text: ''
            },
            xAxis: {
                title: {
                    enabled: true,
                    text: 'study year'
                },
                startOnTick: true,
                endOnTick: true,
                showLastLabel: true
            },
            yAxis: {
                title: {
                    text: 'log(treatment group sample size)'
                }
            },

            plotOptions: {
                scatter: {
                    marker: {
                        radius: 5,
                        states: {
                            hover: {
                                enabled: true,
                                lineColor: 'rgb(100,100,100)'
                            }
                        }
                    },
                    states: {
                        hover: {
                            marker: {
                                enabled: false
                            }
                        }
                    },
                    tooltip: {
                        headerFormat: '<b>{series.name}</b><br>',
                        pointFormat: 'year: {point.x}, log(sample size) = {point.y}'
                    }
                }
            },
            series: [{
                name: 'Male',
                color: 'rgba(75, 105, 200, 1)',
                data: <?php echo json_encode($male_data); ?>

            }, {
                name: 'Female',
                color: 'rgba(250, 10, 10, 1)',
                data: <?php echo json_encode($female_data); ?>
            }, {
                name: 'Male and Female',
                color: 'rgba(105, 232, 80, 1)',
                data: <?php echo json_encode($mix_data); ?>
            }, {
                name: 'Hermaprodite',
                color: 'rgba(0, 0, 0, 1)',
                data: <?php echo json_encode($non_data); ?>
            }]
        });


    </script>


    
</div>
