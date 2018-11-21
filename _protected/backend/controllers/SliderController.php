<?php

namespace backend\controllers;

use Yii;
use common\models\slider;
use common\models\sliderSearch;
use common\models\sliderimages;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
use yii\web\UploadedFile;

/**
 * SliderController implements the CRUD actions for slider model.
 */
class SliderController extends Controller
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
     * Lists all slider models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new sliderSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single slider model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    //show slider all
    public function actionView($id)
    {
        $model = new Sliderimages();
        $dataProvider = new ActiveDataProvider([
                'query' => Sliderimages::find()->where(['slider_id' => $id]),
                'pagination' =>[
                    'pageSize' =>2,
                ],
            ]);

        return $this->render('viewslider', ['model' => $model, 'dataProvider' =>  $dataProvider]);
    }
//uploads slider images
    public function actionAddimage($id){
        $model = new Sliderimages();
        $model->slider_id = $id;
        if($model->load(Yii::$app->request->post())){
            $model->images = UploadedFile::getInstance($model, 'images');
            if ($model->validate() && $model->images->saveAs('../uploads/homeslider/' . $model->images->baseName . '.' . $model->images->extension)) {
                $model->save();
                return $this->redirect(['view', 'id' => $model->slider_id]);
            }
        }
        return $this->render('imageform', ['model' => $model,]);
    }
//edit slider images
    public function actionEditslider($id){
        $model = Sliderimages::findOne($id);
        if($model->load(Yii::$app->request->post()))
        {
            if(UploadedFile::getInstance($model, 'images')!=null) {
                $model->images = UploadedFile::getInstance($model, 'images');
                $model->images->saveAs('../uploads/homeslider/' . $model->images->baseName . '.' . $model->images->extension);
            }
            if($model->validate()){
                $model->save();
                return $this->redirect(['view', 'id' => $model->slider_id]);
            }else{
            }
        }
        return $this->render('imageform', ['model' => $model,]);
    }
//deleteslider
    public function actionDeleteslider($id)
    {
        $model = Sliderimages::findOne($id);
        $model->delete();
        return $this->redirect(['view', 'id' => $model->slider_id]);
    }
    /**
     * Creates a new slider model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new slider();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing slider model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing slider model.
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
     * Finds the slider model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return slider the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = slider::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
