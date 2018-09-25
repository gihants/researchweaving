<?php

namespace app\controllers;

use Yii;
use app\models\StudyInfo;
use app\models\StudyInfoSearch;
use app\models\ExperimentsPerStudy;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
use app\models\CountryCodesOfFirstAuthors;


/**
 * StudyInfoController implements the CRUD actions for StudyInfo model.
 */
class StudyInfoController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all StudyInfo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StudyInfoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    public function actionIndexYear($year)
    {
        $searchModel = new StudyInfoSearch();
        $searchModel->Year = $year;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);



        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    public function actionIndexExperiments($lower, $higher)
    {
        $higher = $higher - 1;
        $lower = $lower+1;
        $materials = ExperimentsPerStudy::find()->where('experiments = '. $lower )->all();
        $ids = [];
        foreach ($materials as $material) {
            array_push($ids, $material['study_id']);
        }

        $searchModel = new StudyInfoSearch();


        $query = StudyInfo::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);


        $query->andFilterWhere(['in', 'study_ID', $ids]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

	public function actionIndexFirstAuthorCountry($country)
    {
        $materials = CountryCodesOfFirstAuthors::find()->where('country_code = \''. $country. '\'')->all();
        $ids = [];
        foreach ($materials as $material) {
            array_push($ids, $material['study_id']);
        }

        $searchModel = new StudyInfoSearch();


        $query = StudyInfo::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);


        $query->andFilterWhere(['in', 'study_ID', $ids]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }





    /**
     * Displays a single StudyInfo model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new StudyInfo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new StudyInfo();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->study_ID]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing StudyInfo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->study_ID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing StudyInfo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the StudyInfo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return StudyInfo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = StudyInfo::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
