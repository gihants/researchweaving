
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

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use app\models\CountriesOfFirstAuthors;
use yii\data\ActiveDataProvider;

use miloschuman\highcharts\Highmaps;
use yii\web\JsExpression;
use app\models\StudiesPerCountry;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StudiesPerCountrySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Geographical distribution of studies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studies-per-country-index">

    <h3><?= Html::encode($this->title) ?></h3>
    <p class="MsoNormal">
	<span class="auto-style1" style="font-family: &quot;Helvetica Neue&quot;; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; color: #333333; background: white; mso-font-kerning: 0pt; mso-ansi-language: EN-AU; mso-fareast-language: EN-US">
	Geographical distribution of the affiliation countries of the first authors 
	of the included studies. The intensity of the shading is proportional to the 
	number of first authors affiliated to a given country.<o:p><br><em>You 
	can click on each country to obtain the filtered list of corresponding 
	review articles.</em></o:p></span></p>
	<p class="MsoNormal">
	<o:p></o:p>
	</p>
	<p class="MsoNormal">
	<o:p></o:p>
	</p>
	<p class="MsoNormal">
	<o:p><br></o:p>
	</p>
	<p class="MsoNormal">
	<o:p></o:p>
	</p>
	<p class="MsoNormal">
	<o:p></o:p>
	</p>
	<p class="MsoNormal">
	<o:p></o:p></p>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?php
    $countries = StudiesPerCountry::find()
        ->asArray()
        ->all();



    #print_r($subject_ids);
    #print(count($subject_ids));



    ?>

    <?php
    $i = 0;
    foreach ($countries as $country) {
        $data[$i] = [$country['country_code'], $country['studies']];
        $i = $i + 1;
    }
    $this->registerJsFile('https://code.highcharts.com/mapdata/custom/world.js', [
        'depends' => 'miloschuman\highcharts\HighchartsAsset'
    ]);

   


    ?>














  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://code.highcharts.com/maps/highmaps.js"></script>
    <script src="https://code.highcharts.com/maps/modules/data.js"></script>
    <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/maps/modules/offline-exporting.js"></script>
    <script src="https://code.highcharts.com/mapdata/custom/world.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>

    <div id="container" style="height: 600px; min-width: 310px; max-width: 1200px; margin: 0 auto"></div>


    <script>


        $.getJSON('https://cdn.rawgit.com/highcharts/highcharts/057b672172ccc6c08fe7dbb27fc17ebca3f5b770/samples/data/world-population.json', function (data) {
            data_array = <?php echo json_encode($data);?>;

            console.log(data);
            console.log(data_array);
            Highcharts.mapChart('container', {
                chart: {
                    borderWidth: 0,
                    map: 'custom/world'
                },

                title: {
                    text: ''
                },

                subtitle: {
                    text: ''
                },

                legend: {
                    enabled: true,
                    layout: 'vertical',
                    align: 'left',
                    verticalAlign: 'bottom'
                },

                mapNavigation: {
                    enabled: true,
                    buttonOptions: {
                        verticalAlign: 'bottom'
                    }
                },
                colorAxis: {
                    min: 1,
                    max:20,
                    type: 'logarithmic',
                    maxColor: '#1E8312'
                },

                series: [{
                    name: 'countries',
                    color: '#E0E0E0',
                    enableMouseTracking: false
                }, {
                    name: 'studies',
                    joinBy: 'hc-key',
                    data: data_array,
                    minSize: 5,
                    maxSize: '20%',
                    tooltip: {
                        pointFormat: '{point.properties.name}: {point.value}'
                    },
                    dataLabels: {
                        enabled: true,
                        style: {
                            fontSize: '15px'
                        }
                    },
                    events: {
                        click: function (event) {
                            if (event.point.value == 0)  {
                                alert("No studies found!");
                            }
                            else {
                                var country = event.point.properties['hc-key'];
                                console.log(event.point);
                                var url_to = <?php echo json_encode(Url::to(['study-info/index-first-author-country'])); ?>;
                                //console.log(url_to);
                                var new_url = url_to.concat('&country=', country);
                                var win = window.open(new_url, '_blank');
                                win.focus();
                            }

                        }
                    },
                }]
            });
        });

    </script>

</div>
