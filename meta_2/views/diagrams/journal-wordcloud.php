
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

<h3 class="auto-style15">Wordcloud of Journals<br></h3>

<p class="MsoNormal">
<span class="auto-style1" style="font-family: &quot;Helvetica Neue&quot;; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; color: #333333; background: white; mso-font-kerning: 0pt; mso-ansi-language: EN-AU; mso-fareast-language: EN-US">
The word-cloud of the names of the journals where included studies were
published in. The sizes of the journal titles are proportional to the number of studies in
our database from a given journal.<o:p><br></o:p>
</span></p>
<p class="MsoNormal">
<o:p><br></o:p>
</p>
<p class="MsoNormal">
<o:p></o:p></p>

<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Comparison;
use yii\data\ActiveDataProvider;

use miloschuman\highcharts\Highcharts;
use yii\web\JsExpression;



$this->title = 'Wordcloud of journals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="countries-of-first-authors-index">
    <?php
    $comparisons = Comparison::find()
        ->asArray()
        ->groupBy(['Study_ID'])
        ->all();


    $i = 0;
    $words = "";
    foreach ($comparisons as $comparison) {

        $words = $words. ",". $comparison['Journal'];
        $i = $i + 1;


    }

    #$words = '\'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum erat ac justo sollicitudin, quis lacinia ligula fringilla. Pellentesque hendrerit, nisi vitae posuere condimentum, lectus urna accumsan libero, rutrum commodo mi lacus pretium erat. Phasellus pretium ultrices mi sed semper. Praesent ut tristique magna. Donec nisl tellus, sagittis ut tempus sit amet, consectetur eget erat. Sed ornare gravida lacinia. Curabitur iaculis metus purus, eget pretium est laoreet ut. Quisque tristique augue ac eros malesuada, vitae facilisis mauris sollicitudin. Mauris ac molestie nulla, vitae facilisis quam. Curabitur placerat ornare sem, in mattis purus posuere eget. Praesent non condimentum odio. Nunc aliquet, odio nec auctor congue, sapien justo dictum massa, nec fermentum massa sapien non tellus. Praesent luctus eros et nunc pretium hendrerit. In consequat et eros nec interdum. Ut neque dui, maximus id elit ac, consequat pretium tellus. Nullam vel accumsan lorem.\'';
    #print_r($words);
    #print(count($subject_ids));



    ?>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/wordcloud.js"></script>
    <div id="container"></div>
    <script>
        var text = "<?php echo $words ?>";

        var lines = text.split(/[,\.]+/g),
            data = Highcharts.reduce(lines, function (arr, word) {
                var obj = Highcharts.find(arr, function (obj) {
                    return obj.name === word;
                });
                if (obj) {
                    obj.weight += 1;
                } else {
                    obj = {
                        name: word,
                        weight: 1
                    };
                    arr.push(obj);
                }
                return arr;
            }, []);

        for (i = 0; i<data.length; i++) {
            data[i].weight = Math.log(data[i].weight);
        }
        Highcharts.chart('container', {
            chart: {
                borderWidth: 2
            },

            series: [{
                type: 'wordcloud',
                data: data,
                name: 'Occurrences',
                rotation: {
                    from: 0,
                    to: 0,
                    orientations: 2
                }
            }],
            title: {
                text: ''
            }
        });


    </script>


</div>





