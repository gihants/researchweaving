
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

$this->title = 'Thematic map';
$this->params['breadcrumbs'][] = $this->title;
?>


    <h3><?= Html::encode($this->title) ?></h3>
    
    <p class="MsoNormal">
	<span class="auto-style1" style="font-family: &quot;Helvetica Neue&quot;; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; color: #333333; background: white; mso-font-kerning: 0pt; mso-ansi-language: EN-AU; mso-fareast-language: EN-US">
	Clusters of keywords, representing themes, based on co-word analysis through 
	keyword co-occurrences. The map was created using bibliometrix R-package and 
	is based on bibliographic records from Web of Science for the 143 studies 
	included in our database (label positions were manually shifted in Adobe 
	Illustrator to reduce overlaps).</span></p>
<br>
    
    <object data="Figure_thematic_map_AI.pdf#toolbar=0&navpanes=0&scrollbar=0&view=FitH" type="application/pdf" width="1100" height="1080">
    <embed src="Figure_thematic_map_AI.pdf#toolbar=0&navpanes=0&scrollbar=0&view=FitH" width="1100px" height="1080px" >
        <p>This browser does not support PDFs. Please download the PDF to view it: 
        <a href="Figure_thematic_map_AI.pdf">Download PDF</a>.</p>
    </embed></object>  