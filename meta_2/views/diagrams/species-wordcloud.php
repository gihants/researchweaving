
<head>
<style type="text/css">
.auto-style1 {
	font-size: large;
}
</style>
</head>

<h3 class="auto-style15">Wordcloud of Species used in Experiments</h3>
<p class="auto-style15">
<span class="auto-style1" style="font-family: &quot;Helvetica Neue&quot;; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; color: #333333; background: white; mso-ansi-language: EN-AU; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
The word-cloud represents the species used in the experimental studies included 
in our database. The sizes of the species names are proportional to the number 
of studies in our database using a given species. The word-clouds are created for 
common names, Latin genus names and species names. </span>
</p>

<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Comparison;
use yii\data\ActiveDataProvider;

use miloschuman\highcharts\Highcharts;
use yii\web\JsExpression;



$this->title = 'Wordcloud of Species used in Experiments';
$this->params['breadcrumbs'][] = $this->title;
?>
    <?php
    $comparisons = Comparison::find()
        ->asArray()
        ->all();


    $i = 0;
    $words = "";
    foreach ($comparisons as $comparison) {

        $words = $words. ",". $comparison['Species'];
        $i = $i + 1;
	
	

    }
   // print_r($words);

    #$words = '\'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum erat ac justo sollicitudin, quis lacinia ligula fringilla. Pellentesque hendrerit, nisi vitae posuere condimentum, lectus urna accumsan libero, rutrum commodo mi lacus pretium erat. Phasellus pretium ultrices mi sed semper. Praesent ut tristique magna. Donec nisl tellus, sagittis ut tempus sit amet, consectetur eget erat. Sed ornare gravida lacinia. Curabitur iaculis metus purus, eget pretium est laoreet ut. Quisque tristique augue ac eros malesuada, vitae facilisis mauris sollicitudin. Mauris ac molestie nulla, vitae facilisis quam. Curabitur placerat ornare sem, in mattis purus posuere eget. Praesent non condimentum odio. Nunc aliquet, odio nec auctor congue, sapien justo dictum massa, nec fermentum massa sapien non tellus. Praesent luctus eros et nunc pretium hendrerit. In consequat et eros nec interdum. Ut neque dui, maximus id elit ac, consequat pretium tellus. Nullam vel accumsan lorem.\'';
    #print_r($words);
    #print(count($subject_ids));



    ?>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    
    <script src="https://code.highcharts.com/modules/wordcloud.js"></script>
    <br>
    <div id="container"><br><br><br></div>
    <br>
    <div id="container_2"><br><br><br></div>
    <br>
    <div id="container_3"><br><br><br></div>
    
	
    <script>
        var text = "<?php echo $words ?>";
		//console.log(text);
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
            console.log(data);
        for (i = 0; i<data.length; i++) {
            data[i].weight = Math.log(data[i].weight);
        }
        Highcharts.chart('container_3', {
            chart: {
                borderWidth:1
            },

            series: [{
                type: 'wordcloud',
                data: data,
                name: 'log(occurrences)',
                rotation: {
                    from: 0,
                    to: 0,
                    orientations: 2
                }
            }],
            title: {
                text: 'Species'
            }
        });


    </script>

        <?php
        $i = 0;
        $words = "";
        foreach ($comparisons as $comparison) {

            $words = $words. ",". $comparison['CommonName'];
            $i = $i + 1;


        }
        ?>

<script>
    var text = "<?php echo $words ?>";

    var lines = text.split(/[,]+/g),
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
            borderWidth: 1
        },

        series: [{
            type: 'wordcloud',
            data: data,
            name: 'log(occurrences)',
            rotation: {
                from: 0,
                to: 0,
                orientations: 2
            }
        }],
        title: {
            text: 'Common names'
        }
    });


    </script>







    

		<?php
        $i = 0;
        $words = "";
        foreach ($comparisons as $comparison) {

            $words = $words. ",". $comparison['Genus'];
            $i = $i + 1;


        }
        ?>





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
    Highcharts.chart('container_2', {
        chart: {
            borderWidth: 1
        },

        series: [{
            type: 'wordcloud',
            data: data,
            name: 'log(occurrences)',
            rotation: {
                from: 0,
                to: 0,
                orientations: 2
            }
        }],
        title: {
            text: 'Genus'
        }
    });


    </script>




