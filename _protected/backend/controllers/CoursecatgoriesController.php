<?php

namespace backend\controllers;

use Yii;
use common\models\coursecatgories;
use common\models\coursecatgoriesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActivedataProvider;
use yii\web\UploadedFile;
use common\models\sub_course;
/**
 * CoursecatgoriesController implements the CRUD actions for coursecatgories model.
 */
class CoursecatgoriesController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all coursecatgories models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new coursecatgoriesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single coursecatgories model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = new sub_course();
        $dataProvider = new ActiveDataProvider([
            'query' => sub_course::find()->where(['coursecatgories_id' => $id]),
            'pagination' =>[
                'pageSize' =>2,
            ],
        ]);
        return $this->render('viewcourses', ['model' => $model,'dataProvider' =>$dataProvider]);
    }
    public function actionAddimage($id){
        $model = new sub_course();
        $model->coursecatgories_id = $id;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index', 'id' => $model->id]);
        }
        return $this->render('addcatgories', ['model' => $model,]);
    }
    public function actionEditcourse($id){
        $model = sub_course::findOne($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index', 'id' => $model->id]);
        }
        return $this->render('addcatgories', ['model' => $model,]);
    }
    public function actionDeletecourse($id)
    {
      $model = sub_course::findOne($id);
      $model->delete();
      return $this->redirect(['index', 'id'=>$model->coursecatgories_id]);
    }

    /**
     * Creates a new coursecatgories model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new coursecatgories();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing coursecatgories model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing coursecatgories model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the coursecatgories model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return coursecatgories the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = coursecatgories::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
