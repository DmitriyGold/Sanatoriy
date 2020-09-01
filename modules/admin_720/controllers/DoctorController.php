<?php

namespace app\modules\admin_720\controllers;

use Yii;
use app\models\db\Doctor;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\ImageUpload;
use yii\web\UploadedFile;
use app\models\FileUpload;

/**
 * DoctorController implements the CRUD actions for Doctor model.
 */
class DoctorController extends Controller
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
     * Lists all Doctor models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Doctor::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Doctor model.
     * @param integer $id
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
     * Creates a new Doctor model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Doctor();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Doctor model.
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
     * Deletes an existing Doctor model.
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
     * Finds the Doctor model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Doctor the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Doctor::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    
        public function actionSetImage($id) {

        $model = $this->findModel($id);

        $fileImg = new ImageUpload; // своя модель регулирующая загрузку картинки      
        $fileImg->pathFiles = 'uploads/doctors/';

        if ($fileImg->load(Yii::$app->request->post())) {

            $file = UploadedFile::getInstance($fileImg, 'image'); // загрузили файл, получили объект

            if (isset($file)) {
                // удаляем старый файл с сервера, если имя есть в бд. Присваиваем новое имя
                $filename = $fileImg->uploadFile($file, $model->image);
                $model->image = $filename;
                $model->save();

                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('image', [
                    'fileImg' => $fileImg,
        ]);
    }
    
        public function actionDelImage($id) {

        $model = $this->findModel($id);

        $fileImg = new ImageUpload; // своя модель регулирующая загрузку картинки      
        $fileImg->pathFiles = 'uploads/doctors/';

        $fileImg->deleteCurrentImage($model->image);
        $model->image = Null;

        $model->save();

        return $this->redirect(['view', 'id' => $model->id]);
    }
    
}
