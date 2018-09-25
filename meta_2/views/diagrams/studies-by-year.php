<h3 class="auto-style15">Studies per year</h3>
<head>
    <meta content="en-au" http-equiv="Content-Language">
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
	.auto-style16 {
		font-size: large;
	}
    </style>
</head>

<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use app\models\StudiesByYear;
use yii\data\ActiveDataProvider;

use miloschuman\highcharts\Highcharts;
use yii\web\JsExpression;



$this->title = 'Studies Per Year';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="countries-of-first-authors-index">
	<p class="MsoNormal">
	<span class="auto-style16" style="font-family: &quot;Helvetica Neue&quot;; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; color: #333333; background: white; mso-font-kerning: 0pt; mso-ansi-language: EN-AU; mso-fareast-language: EN-US">
	Number of included studies published per year. </span>&nbsp;</p>
	<p class="MsoNormal">
	<span class="auto-style16" style="font-family: &quot;Helvetica Neue&quot;; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; color: #333333; background: white; mso-font-kerning: 0pt; mso-ansi-language: EN-AU; mso-fareast-language: EN-US">
	<em>You can click on each bar to 
	obtain the filtered list of corresponding review articles.</em><o:p><br></o:p>
	</span></p>
	<p class="MsoNormal">
	<o:p></o:p></p>

    <?php
    $years_view = StudiesByYear::find()
        ->asArray()
        ->all();

    $data_a =[];

    $i = 0;
    foreach ($years_view as $year_item) {
        if (doubleval($year_item['year'] > 0)) {
            $years[$i] = doubleval($year_item['year']);
            $i = $i + 1;
        }

    }

    $min_year = $years[0];
    $max_year = $years[sizeof($years)-1];
    $j = 0;
    for ($i = $min_year; $i<=$max_year; $i++) {
        $year_array[$j] = $i;


        $articles = StudiesByYear::find()
            ->select('studies')
            ->where(['year' => $i])
            ->asArray()
            ->all();

        if ($articles == null) {
            $article_array[$j] = 0;
        }
        else {
            $article_array[$j] = ($articles[0]['studies']);
        }
        array_push($data_a, [$year_array[$j], $article_array[$j]]);


        $article_array[$j] = doubleval($article_array[$j]);
        #$article_array[$j] = $articles;
        $j++;
    }

    #print_r($article_array);




    ?>

 


    
    
    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<div id="container" style="margin: 0pt auto; min-width: 310px; height: 400px;"></div>

<script>

    year_array = <?php echo json_encode($year_array);?>;
    article_array = <?php echo json_encode($article_array);?>;
   
    Highcharts.chart('container', {
        chart: {
            type: 'column',
            dataLabels: {
                enable: true
            }

        },
        title: {
            text: ''
        },
        xAxis: {
            categories: year_array,
            crosshair: true,
            title: {
                text: 'Year'
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Number of studies'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0,
                borderWidth: 0,
                pointWidth: 12
            },
            series: {
                cursor: 'pointer',
                events: {
                    click: function (event) {
                        var year = event.point.category;
                        var url_to = <?php echo json_encode(Url::to(['study-info/index-year'])); ?>;
                        console.log(url_to);
                        var new_url = url_to.concat('&year=', year);
                       var win = window.open(new_url, '_blank');
                        win.focus();
                    }
                }

                
            }
        },
        series: [{
            name: ' ',
            data: article_array,
           
            dataLabels: {
                enable: true,
                
            },
            dataLabels: {
                enabled: true,
                
            },
            color:'#1b5838'

        }]
    });
</script>









</div>


