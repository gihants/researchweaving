<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
<style type="text/css">
.auto-style1 {
	text-align: center;
}
.auto-style3 {
	font-size: large;
}
.auto-style4 {
	text-align: left;
	font-size: large;
}
</style>
</head>
<h3>Diagrams from Web of Science</h3>
<p><span class="auto-style3">The following figures were generated using the 
inbuilt author / keyword / abstract analysis algorithms in
<a href="http://www.webofknowledge.com/" target="_blank"><strong><em>Web of Science</em></strong></a>. 
Summarised information on topics, authorship and publication of the included 
studies are represented here. Web of Science can also visualise this information 
as histograms and downloadable data tables.</span><br class="auto-style3" />
<br />
</p>

<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Comparison;
use yii\data\ActiveDataProvider;

use miloschuman\highcharts\Highcharts;
use yii\web\JsExpression;



$this->title = 'Diagrams from Web of Sciences';
$this->params['breadcrumbs'][] = $this->title;
?>

<body>

<p class="auto-style4">Top research fields</p>
<p class="auto-style1">
<img alt="" height="350" src="WoS_top_research_fields.jpg" width="750" /></p>
<p class="auto-style1">&nbsp;</p>
<p class="auto-style4">Top 25 topics</p>
<p class="auto-style1">
<img alt="" height="350" src="WoS_top25_topics.jpg" width="750" /></p>
<p class="auto-style1">&nbsp;</p>
<p class="auto-style4">Publication years</p>
<p class="auto-style1">
<img alt="" height="350" src="WoS_years.jpg" width="750" /></p>
<p class="auto-style1">&nbsp;</p>
<p class="auto-style4">Top 25 authors&nbsp;</p>
<p class="auto-style1">
<img alt="" height="350" src="WoS_top25_authors.jpg" width="750" /></p>
<p class="auto-style1">&nbsp;</p>
<p class="auto-style4">Top 25 organisation&nbsp;</p>
<p class="auto-style1">
<img alt="" height="350" src="WoS_top25_organisations.jpg" width="750" /></p>
<p class="auto-style1">&nbsp;</p>
<p class="auto-style4">Top 25 countries</p>
<p class="auto-style1">
<img alt="" height="350" src="WoS_top25_countries.jpg" width="750" /></p>
<p class="auto-style1">&nbsp;</p>
<p class="auto-style4">Top 25 journals</p>
<p class="auto-style1">
<img alt="" height="350" src="WoS_top25_journals.jpg" width="750" /></p>

</body>

</html>
