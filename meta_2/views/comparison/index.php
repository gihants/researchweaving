
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
.auto-style2 {
	color: #0000FF;
}
.auto-style3 {
	font-size: large;
	color: #0000FF;
}
</style>
</head>

<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ComparisonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Comparisons';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auto-style1">

    <h3><?= Html::encode($this->title) ?></h3>
    <p>
	<span style="font-family: &quot;Helvetica Neue&quot;; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; color: #333333; background: white; mso-font-kerning: 0pt; mso-ansi-language: EN-AU; mso-fareast-language: EN-US">
	An overview table of included 529 comparison points. Table can be searched 
	using the search (filtering) fields above each column. To access detailed 
	view of each record, please click on the eye icon at the end of each row.<o:p></o:p></span></p>
	<p class="MsoNormal">
	<o:p></o:p>
	</p>
	<p>
	<span style="font-family: &quot;Helvetica Neue&quot;; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; color: #333333; background: white; mso-font-kerning: 0pt; mso-ansi-language: EN-AU; mso-fareast-language: EN-US">
	<strong><em>Table columns descriptions: </em></strong> <o:p></o:p></span></p>
	<p>
	<span style="font-family: &quot;Helvetica Neue&quot;; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; background: white; mso-font-kerning: 0pt; mso-ansi-language: EN-AU; mso-fareast-language: EN-US" class="auto-style2">
	Year</span><span style="font-family: &quot;Helvetica Neue&quot;; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; color: #333333; background: white; mso-font-kerning: 0pt; mso-ansi-language: EN-AU; mso-fareast-language: EN-US"> 
	– publication year of a study from which data points were extracted<o:p></o:p></span></p>
	<p>
	<span style="font-family: &quot;Helvetica Neue&quot;; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; background: white; mso-font-kerning: 0pt; mso-ansi-language: EN-AU; mso-fareast-language: EN-US" class="auto-style2">
	Journal</span><span style="font-family: &quot;Helvetica Neue&quot;; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; color: #333333; background: white; mso-font-kerning: 0pt; mso-ansi-language: EN-AU; mso-fareast-language: EN-US"> 
	– name of a journal in which a study was publiched<o:p></o:p></span></p>
	<p>
	<span style="font-family: &quot;Helvetica Neue&quot;; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; background: white; mso-font-kerning: 0pt; mso-ansi-language: EN-AU; mso-fareast-language: EN-US" class="auto-style2">
	Common Name</span><span style="font-family: &quot;Helvetica Neue&quot;; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; color: #333333; background: white; mso-font-kerning: 0pt; mso-ansi-language: EN-AU; mso-fareast-language: EN-US"> 
	– common name of a species used in a study<o:p></o:p></span></p>
	<p>
	<span style="font-family: &quot;Helvetica Neue&quot;; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; background: white; mso-font-kerning: 0pt; mso-ansi-language: EN-AU; mso-fareast-language: EN-US" class="auto-style2">
	Model</span><span style="font-family: &quot;Helvetica Neue&quot;; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; color: #333333; background: white; mso-font-kerning: 0pt; mso-ansi-language: EN-AU; mso-fareast-language: EN-US"> 
	– whether used species/strain are model laboratory animals (1=yes, 0=no)<o:p></o:p></span></p>
	<p>
	<span style="font-family: &quot;Helvetica Neue&quot;; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; background: white; mso-font-kerning: 0pt; mso-ansi-language: EN-AU; mso-fareast-language: EN-US" class="auto-style2">
	Sex</span><span style="font-family: &quot;Helvetica Neue&quot;; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; color: #333333; background: white; mso-font-kerning: 0pt; mso-ansi-language: EN-AU; mso-fareast-language: EN-US"> 
	– sex of animals used in comparison (M=males, F=females, 
	N=none/hermaphrodite or MF=males and females)<o:p></o:p></span></p>
	<p class="MsoNormal">
	<span style="font-family: &quot;Helvetica Neue&quot;; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; background: white; mso-font-kerning: 0pt; mso-ansi-language: EN-AU; mso-fareast-language: EN-US" class="auto-style3">
	Type</span><span style="font-family: &quot;Helvetica Neue&quot;; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; color: #333333; background: white; mso-font-kerning: 0pt; mso-ansi-language: EN-AU; mso-fareast-language: EN-US" class="auto-style1"> 
	– type of dietary restriction (FW= food weight, where exactly the same food 
	was given in smaller quantities without the above consideration with or 
	without microelement supplementation; BW= body weight, where weekly 
	adjustments were made in order to keep the treatment group at a prescribed 
	percentage body weight less than that of the controls (either by averages or 
	pair-feeding), it is very similar type to food weight; FC= food 
	concentration, where treatments were placed in a food medium of a certain 
	dilution of the control amount; FD= feeding day, where both groups were fed 
	ad libitum but the treatment groups were only allowed access to the food on 
	certain days.<span style="mso-spacerun:yes">&nbsp; </span>NM=nutrient 
	content manipulation; CNM=caloric and nutrient manipulation)<o:p></o:p></span></p>
	<p>
	<span style="font-family: &quot;Helvetica Neue&quot;; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; background: white; mso-font-kerning: 0pt; mso-ansi-language: EN-AU; mso-fareast-language: EN-US" class="auto-style2">
	Strain</span><span style="font-family: &quot;Helvetica Neue&quot;; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; color: #333333; background: white; mso-font-kerning: 0pt; mso-ansi-language: EN-AU; mso-fareast-language: EN-US"> 
	– strain name/type of animals used in comparison (WT = wild type)<o:p></o:p></span></p>
	<p>
	<span style="font-family: &quot;Helvetica Neue&quot;; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; background: white; mso-font-kerning: 0pt; mso-ansi-language: EN-AU; mso-fareast-language: EN-US" class="auto-style2">
	Repro</span><span style="font-family: &quot;Helvetica Neue&quot;; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; color: #333333; background: white; mso-font-kerning: 0pt; mso-ansi-language: EN-AU; mso-fareast-language: EN-US"> 
	– reproductive status of animals used in comparison (0=virgin, 
	1=reproducing)<o:p></o:p></span></p>
	<p>
	<span style="font-family: &quot;Helvetica Neue&quot;; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; background: white; mso-font-kerning: 0pt; mso-ansi-language: EN-AU; mso-fareast-language: EN-US" class="auto-style2">
	Age2</span><span style="font-family: &quot;Helvetica Neue&quot;; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; color: #333333; background: white; mso-font-kerning: 0pt; mso-ansi-language: EN-AU; mso-fareast-language: EN-US"> 
	– age (in days) of dietary restricted animals used in comparison at the 
	beginning of the experiment<o:p></o:p></span></p>
	<p>
	<span style="font-family: &quot;Helvetica Neue&quot;; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; background: white; mso-font-kerning: 0pt; mso-ansi-language: EN-AU; mso-fareast-language: EN-US" class="auto-style2">
	N2</span><span style="font-family: &quot;Helvetica Neue&quot;; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; color: #333333; background: white; mso-font-kerning: 0pt; mso-ansi-language: EN-AU; mso-fareast-language: EN-US"> 
	– number of dietary restricted animals used in comparison at the beginning 
	of the experiment<o:p></o:p></span></p>
	<p>
	<o:p></o:p>
	</p>
	<p>
	<o:p></o:p></p>
	<p class="MsoNormal">
	<o:p></o:p></p>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'Comp_ID',
            //'ES_ID',
            //'Study_ID',
            //'FirstAuthor',
            'Year',
             'Journal',
            // 'Volume',
            // 'Species_ID',
             'CommonName',
            // 'Genus',
             //'Species',
            // 'animal',
             'Model',

             'Sex',

             //'FoodSched',
             'Type',
            'Strain',
            'Repro',
            // 'AL',
            // 'CV1',
            // 'Prots1',
            // 'Carbs1',
            // 'Fats1',
            // 'Intake',
            // 'CI1',
            // 'Age1',
            // 'N1',
            // 'LT25contr',
            // 'LT50contr',
            // 'LT75contr',
            // 'CR',
            // 'CV2',
            // 'c_nCR',
            // 'c_CR',
            // 'CI2',
            // 'c_aCR',
            // 'Prots2',
            // 'Carbs2',
            // 'Fats2',
             'Age2',
             'N2',
            // 'Page',
            // 'Prots',
            // 'PD25',
            // 'PD50',
            // 'PD75',
            // 'c_LT25_logHR',
            // 'c_LT25_varlogHR',
            // 'c_LT50_logHR',
            // 'c_LT50_varlogHR',
            // 'c_LT75_logHR',
            // 'c_LT75_varlogHR',
            // 'c_LT2550_logHR',
            // 'c_LT2550_varlogHR',
            // 'c_LT5075_logHR',
            // 'c_LT5075_varlogHR',
            // 'c_all_logHR',
            // 'c_all_varlogHR',
            // 'Notes_control',
            // 'Notes_treatment',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
