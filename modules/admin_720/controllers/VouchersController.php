<?php

namespace app\modules\admin_720\controllers;

use Yii;
use app\models\db\Vouchers;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\ImageUpload;
use yii\web\UploadedFile;
use app\models\FileUpload;

/**
 * VouchersController implements the CRUD actions for Vouchers model.
 */
class VouchersController extends Controller {

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
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
     * Lists all Vouchers models.
     * @return mixed
     */
    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => Vouchers::find(),
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Vouchers model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Vouchers model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Vouchers();

        if ($model->load(Yii::$app->request->post())) {

            $model->date = date("Y.m.d");

            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing Vouchers model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Vouchers model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Vouchers model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Vouchers the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Vouchers::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionSetImage($id) {

        $model = $this->findModel($id);

        $fileImg = new ImageUpload; // своя модель регулирующая загрузку картинки      
        $fileImg->pathFiles = 'uploads/vouchers/';

        if ($fileImg->load(Yii::$app->request->post())) {

            $file = UploadedFile::getInstance($fileImg, 'image'); // загрузили файл, получили объект

            if (isset($file)) {
                // удаляем старый файл с сервера, если имя есть в бд. Присваиваем новое имя
                $filename = $fileImg->uploadFile($file, $model->imagePath);
                $model->imagePath = $filename;
                $model->save();

                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('image', [
                    'fileImg' => $fileImg,
        ]);
    }

    public function actionSetFiles($id, $i) {

        $model = $this->findModel($id);

        $file = new FileUpload; // своя модель регулирующая загрузку документ      
        $file->pathFiles = 'uploads/vouchers/';

        if ($file->load(Yii::$app->request->post())) {

            $file_in = UploadedFile::getInstance($file, 'myFile'); // загрузили файл, получили объект

            if (isset($file_in)) {
                // удаляем старый файл с сервера, если имя есть в бд. Присваиваем новое имя

                switch ($i) {
                    case 1:
                        $filename = $file->uploadFile($file_in, $model->file1Path);
                        $model->file1Path = $filename;
                        if (!empty($model->file1Path)) {
                            $filename = $file_in->baseName . '.' . $file_in->extension;
                            $model->file1Name = $filename;
                        } else
                            $model->file1Name = null;
                        break;
                    case 2:
                        $filename = $file->uploadFile($file_in, $model->file2Path);
                        $model->file2Path = $filename;
                        if (!empty($model->file2Path)) {
                            $filename = $file_in->baseName . '.' . $file_in->extension;
                            $model->file2Name = $filename;
                        } else
                            $model->file2Name = null;
                        break;
                    case 3:
                        $filename = $file->uploadFile($file_in, $model->file3Path);
                        $model->file3Path = $filename;
                        if (!empty($model->file3Path)) {
                            $filename = $file_in->baseName . '.' . $file_in->extension;
                            $model->file3Name = $filename;
                        } else
                            $model->file3Name = null;
                        break;
                }

                $model->save();
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('files', [
                    'file' => $file,
        ]);
    }

    public function actionDelFiles($id) {

        $model = $this->findModel($id);

        $fileImg = new ImageUpload; // своя модель регулирующая загрузку картинки      
        $fileImg->pathFiles = 'uploads/vouchers/';

        $file = new FileUpload; // своя модель регулирующая загрузку документов      
        $file->pathFiles = 'uploads/vouchers/';


        $fileImg->deleteCurrentImage($model->imagePath);
        $model->imagePath = Null;

        $file->deleteCurrentFile($model->file1Path);
        $model->file1Path = Null;
        $model->file1Name = Null;
        $file->deleteCurrentFile($model->file2Path);
        $model->file2Path = Null;
        $model->file2Name = Null;
        $file->deleteCurrentFile($model->file3Path);
        $model->file3Path = Null;
        $model->file3Name = Null;

        $model->save();

        return $this->redirect(['view', 'id' => $model->id]);
    }

}
