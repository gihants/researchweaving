
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

<h3 class="auto-style15">Histogram of Experiments per Study</h3>
<p class="MsoNormal">
<span style="font-family: &quot;Helvetica Neue&quot;; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; color: #333333; background: white; mso-font-kerning: 0pt; mso-ansi-language: EN-AU; mso-fareast-language: EN-US" class="auto-style1">
Distribution of number of experiments per study in our data set.<o:p></o:p></span></p>
<p class="auto-style1">
<o:p><em>You can click on each bar to obtain the filtered list of corresponding 
studies.</em></o:p></p>
<p class="auto-style15">&nbsp;</p>

<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use app\models\ExperimentsPerStudy;
use yii\data\ActiveDataProvider;

use miloschuman\highcharts\Highcharts;
use yii\web\JsExpression;



$this->title = 'Experiments per Study';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="countries-of-first-authors-index">
    <?php
    $studies = ExperimentsPerStudy::find()
        ->asArray()
        ->all();


    $i = 0;
    $hist_data=[];
    foreach ($studies as $study) {
        if (doubleval($study['experiments'] > 0)) {
            array_push($hist_data, floatval($study['experiments']));

            $i = $i + 1;
        }

    }
    
    
    
    $i = 0;
    $max = 0;
    foreach ($studies as $study) {
        if (doubleval($study['experiments']) > $max) {
            $max = doubleval($study['experiments']);
        }
        if (doubleval($study['experiments'] > 0)) {
            $temp_value = doubleval($study['experiments']);
            $hist_data[$i] = $temp_value;
            $i = $i + 1;
        }

    }

    for($x = 0; $x < $max; $x++) {
       $indices[$x] = $x+1;
    }


    $columns = array_fill(0, $max, 0);

    foreach ($hist_data as $hist_point) {
        $columns[$hist_point-1] = $columns[$hist_point-1] +1;
    }

    

    #print_r($hist_data);
    #print(count($subject_ids));



    ?>

    <?php



    $this->registerJsFile('https://code.highcharts.com/highcharts.js', [
        'depends' => 'miloschuman\highcharts\HighchartsAsset'
    ]);

    $this->registerJsFile('https://code.highcharts.com/modules/histogram-bellcurve.js', [
        'depends' => 'miloschuman\highcharts\HighchartsAsset'
    ]);


   // $hist_data = [3.5, 3, 3.2, 3.1, 3.6, 3.9, 3.4, 3.4, 2.9, 3.1];

    //print_r($hist_data);


//print_r($hist_data);


    ?>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>

    <div id="container_2">
		<p class="MsoNormal">
		</p>
	</div>

    <script>

        hist_data = <?php echo json_encode($hist_data);?>;
        var data = [3.5, 3, 3.2, 3.1, 3.6, 3.9, 3.4, 3.4, 2.9, 3.1, 3.7, 3.4, 3, 3, 4, 4.4, 3.9, 3.5, 3.8, 3.8, 3.4, 3.7, 3.6, 3.3, 3.4, 3, 3.4, 3.5, 3.4, 3.2, 3.1, 3.4, 4.1, 4.2, 3.1, 3.2, 3.5, 3.6, 3, 3.4, 3.5, 2.3, 3.2, 3.5, 3.8, 3, 3.8, 3.2, 3.7, 3.3, 3.2, 3.2, 3.1, 2.3, 2.8, 2.8, 3.3, 2.4, 2.9, 2.7, 2, 3, 2.2, 2.9, 2.9, 3.1, 3, 2.7, 2.2, 2.5, 3.2, 2.8, 2.5, 2.8, 2.9, 3, 2.8, 3, 2.9, 2.6, 2.4, 2.4, 2.7, 2.7, 3, 3.4, 3.1, 2.3, 3, 2.5, 2.6, 3, 2.6, 2.3, 2.7, 3, 2.9, 2.9, 2.5, 2.8, 3.3, 2.7, 3, 2.9, 3, 3, 2.5, 2.9, 2.5, 3.6, 3.2, 2.7, 3, 2.5, 2.8, 3.2, 3, 3.8, 2.6, 2.2, 3.2, 2.8, 2.8, 2.7, 3.3, 3.2, 2.8, 3, 2.8, 3, 2.8, 3.8, 2.8, 2.8, 2.6, 3, 3.4, 3.1, 3, 3.1, 3.1, 3.1, 2.7, 3.2, 3.3, 3, 2.5, 3, 3.4, 3];

        Highcharts.chart('container', {
            title: {
                text: ''
            },
            plotOptions: {
            	column: {
                	pointPlacement: 'between'
            	}	
        	},

            legend: {
                enabled: false
            },
            xAxis: [{
                title: { text: 'Number of experiments' },
                alignTicks: false,
                tickInterval:1
            }, {
                title: { text: '' },
                alignTicks: false,
                opposite: true,
                tickInterval:1
            }],

            yAxis: [{
                title: { text: 'Number of Studies' }
            }, {
                title: { text: '' },
                opposite: true
            }],

            series: [{
                name: 'Histogram',
                type: 'histogram',
                xAxis: 0,
                yAxis: 0,
                baseSeries: 's1',
                zIndex: -1,
                dataLabels: {
                    enabled: true,
                    style: {
                        fontSize: '15px'
                    }
                },
                binWidth: 1,
                color: "#8a0022"
            }, {
                name: 'Data',
                type: 'scatter',
                xAxis: 1,
                yAxis: 1,
                data: hist_data,
                id: 's1',
                marker: {
                    radius: 1.5
                },
                visible: false
            }]
        });

    </script>


<script>

    x_data = <?php echo json_encode($indices);?>;
    y_data = <?php echo json_encode($columns);?>;
    var data = [3.5, 3, 3.2, 3.1, 3.6, 3.9, 3.4, 3.4, 2.9, 3.1, 3.7, 3.4, 3, 3, 4, 4.4, 3.9, 3.5, 3.8, 3.8, 3.4, 3.7, 3.6, 3.3, 3.4, 3, 3.4, 3.5, 3.4, 3.2, 3.1, 3.4, 4.1, 4.2, 3.1, 3.2, 3.5, 3.6, 3, 3.4, 3.5, 2.3, 3.2, 3.5, 3.8, 3, 3.8, 3.2, 3.7, 3.3, 3.2, 3.2, 3.1, 2.3, 2.8, 2.8, 3.3, 2.4, 2.9, 2.7, 2, 3, 2.2, 2.9, 2.9, 3.1, 3, 2.7, 2.2, 2.5, 3.2, 2.8, 2.5, 2.8, 2.9, 3, 2.8, 3, 2.9, 2.6, 2.4, 2.4, 2.7, 2.7, 3, 3.4, 3.1, 2.3, 3, 2.5, 2.6, 3, 2.6, 2.3, 2.7, 3, 2.9, 2.9, 2.5, 2.8, 3.3, 2.7, 3, 2.9, 3, 3, 2.5, 2.9, 2.5, 3.6, 3.2, 2.7, 3, 2.5, 2.8, 3.2, 3, 3.8, 2.6, 2.2, 3.2, 2.8, 2.8, 2.7, 3.3, 3.2, 2.8, 3, 2.8, 3, 2.8, 3.8, 2.8, 2.8, 2.6, 3, 3.4, 3.1, 3, 3.1, 3.1, 3.1, 2.7, 3.2, 3.3, 3, 2.5, 3, 3.4, 3];

    Highcharts.chart('container_2', {
        chart: {
            type: 'column'
        },
        title: {
            text: ''
        },
        xAxis: {
            categories: x_data,
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Number of studies'
            }
        },
        plotOptions: {
            column: {
                pointPadding: 0.0,
                pointWidth:20,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Number of experiments',
            data: y_data,
            events: {
                click: function (event) {
                    var lower = event.point.x;
                    var url_to = <?php echo json_encode(Url::to(['study-info/index-experiments'])); ?>;
                    console.log(url_to);
                    var new_url = url_to.concat('&higher=', lower+1);
                    var new_url = new_url.concat('&lower=', lower);
                    var win = window.open(new_url, '_blank');
                    win.focus();
                    console.log(lower);
                    console.log(higher);
                }
            },
            binWidth:1,
            dataLabels: {
                enabled: true,
                step:0.5,
                style: {
                    fontSize: '15px'
                }
            },
            color: '#170555'


        }]
    });

</script>
</div>