<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Comparison;
use yii\data\ActiveDataProvider;

use miloschuman\highcharts\Highcharts;
use yii\web\JsExpression;



$this->title = 'Phylogenetic tree';
$this->params['breadcrumbs'][] = $this->title;
?>

<html>
<head>
    <link type="text/css" rel="stylesheet" href="js/yui/build/cssfonts/fonts-min.css" />
    <script type="text/javascript" src="js/jquery/jquery-1.4.2.min.js" ></script>
    <script type="text/javascript" src="js/jquery/jquery.simplemodal.1.4.1.min.js" ></script>
    <script type="text/javascript" src="js/raphael/raphael-min.js" ></script>
    <script type="text/javascript" src="js/jsphylosvg-min.js?1.29"></script>

    <!-- unitip -->
    <link rel="stylesheet" type="text/css" href="js/unitip/css/unitip.css" >
    <script type="text/javascript" src="js/unitip/js/unitip.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $.get("trees/meta_2.xml", function(data) {
                var dataObject = {
                    xml: data,
                    fileSource: true
                };
                phylocanvas = new Smits.PhyloCanvas(
                    dataObject,
                    'svgCanvas',
                    800, 800,
                    'circular'
                );
                delete(dataObject);
                init(); //unitip

            });
        });



    </script>

	<style type="text/css">
.auto-style1 {
	font-size: large;
}
.auto-style2 {
	font-size: x-large;
}
.auto-style3 {
	font-weight: normal;
}
.auto-style4 {
	font-size: x-large;
	font-weight: normal;
}
.auto-style5 {
	background-color: #FFFFFF;
}
</style>

</head>
<body>
<h3 class="auto-style15">
<span class="auto-style4" style="font-family: &quot;Helvetica Neue&quot;; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; color: #333333; background: white; mso-font-kerning: 0pt; mso-ansi-language: EN-AU; mso-fareast-language: EN-US">
<strong>Phylogenetic tree</strong></span><span class="auto-style3"><strong><br class="auto-style2">
</strong></span></h3>














<p class="MsoNormal">
<span class="auto-style1" style="font-family: &quot;Helvetica Neue&quot;; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; color: #333333; background: white; mso-font-kerning: 0pt; mso-ansi-language: EN-AU; mso-fareast-language: EN-US">
A phylogenetic tree of the 36 species used in the included studies.<o:p>

Bars indicate relative numbers of individuals of each species included in the 
analyses.<br></o:p>
    <i>You can click on each species name to see more information of the species on wiki pages.</i><o:p><br><br></o:p>
</span></p>














<table style="height: 593px;" width="662">
    <tbody>
    <tr>
        <td style="width: 57px;"><div id="fish"></div></td>
        <td style="width: 58px;" align="right"><div id ="monkey"></div><img src="images/Stickleback.jpg" height="80" width="80"></td>
        <td style="width: 58px;" align="left">&nbsp;</td>
        <td style="width: 110px;">&nbsp;&nbsp; <img src="images/Monkey.jpg" height="80" width="80"><br>&nbsp;</td>
        <td style="width: 60px;"><div id="rat"><img src="images/Mouse.jpg" height="80" width="80"><br>
			<br><br><br></div></div></td>
        <td style="width: 60px;"></div></td>
        <td style="width: 61px;"><div id ="dog"></div></td>
        <td style="width: 61px;" align="bottom"><img src="images/Yeast.jpg" height="80" width="80"</td>
        <td style="width: 61px;" align="left"></td>
        <td style="width: 62px;"></div></td>
    </tr>
    <tr>
        <td style="width: 57px;" align="right"></td>
        <td style="width: 58px;" colspan="8" rowspan="8"><div id="svgCanvas"> </div></td>
        <td style="width: 62px;"></td>
    </tr>
    <tr>
        <td style="width: 57px;"></td>
        <td style="width: 62px;">&nbsp;</td>
    </tr>
    <tr>
        <td style="width: 57px;"><img src="images/Redback Spider.jpg" height="80" width="80"></td>
        <td style="width: 62px;">&nbsp;</td>
    </tr>
    <tr>
        <td style="width: 57px;"><div id = "in1"></div></td>
        <td style="width: 62px;"><div id = "ploimida"><img src="images/Ploimida.jpg" height="80" width="80"></div></td>
    </tr>
    <tr>
        <td style="width: 57px;"><div id = "ploimida"><img src="images/Cricket.jpg" height="60" width="100"></td>
        <td style="width: 62px;">&nbsp;</td>
    </tr>
    <tr>
        <td style="width: 57px;" align="right"></div></td>
        <td style="width: 62px;"align="left">&nbsp;<div id = "dap"></td>
    </tr>
    <tr>
        <td style="width: 57px;">&nbsp;</td>
        <td style="width: 62px;">&nbsp;</td>
    </tr>
    <tr>
        <td style="width: 57px;"><div id = "in3">
			<img src="images/Cotesia.jpg" height="80" width="80" style="float: right"></div></td>
        <td style="width: 62px;"><img src="images/C.Elegans.jpg" height="80" width="80"></td>
    </tr>
    <tr>
        <td style="width: 57px;">&nbsp;</td>
        <td style="width: 58px;"><div id = "in4"></div></td>
        <td style="width: 58px;">&nbsp;</td>
        <td style="width: 110px;"></td>
        <td style="width: 60px;"><img src="images/Euphaedra medon.jpg" height="80" width="80"></td>
        <td style="width: 60px;">&nbsp;</td>
        <td style="width: 61px;"><div id = "dap"><img src="images/Daphnia.jpg" height="80" width="80"></div></td>
        <td style="width: 61px;"></td>
        <td style="width: 61px;">&nbsp;</div></td>
        <td style="width: 62px;"><div id = "ce"></div></td>
    </tr>
    </tbody>
</table>
<p>&nbsp;</p>

