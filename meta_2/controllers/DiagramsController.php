<?php


namespace app\controllers;
use kartik\mpdf\Pdf;
use \Mpdf\Mpdf;

class DiagramsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionStudiesByYear()
    {
        return $this->render('studies-by-year');
    }
    public function actionSpeciesWordcloud()
    {
        return $this->render('species-wordcloud');
    }
    public function actionJournalWordcloud()
    {
        return $this->render('journal-wordcloud');
    }
    public function actionExperimentsPerStudy()
    {
        return $this->render('experiments-per-study');
    }
    public function actionTree()
    {
        return $this->render('tree');
    }
    public function actionWos()
    {
        return $this->render('wos');
    }
    public function actionHistoricalNetwork()
    {
        return $this->render('historical-network');
    }

	public function actionThematicMap()
    {
        return $this->render('thematic-map');
    }

	public function actionTopicNetwork()
    {
        return $this->render('topic-network');
    }

	public function actionCollaborationNetwork()
    {
        return $this->render('collaboration-network');
    }


    public function actionCollaborations()
    {
        $pdf = new mPDF();
        $pdf->WriteHTML('Hello World');

        $pdf->Output();

    }

}
